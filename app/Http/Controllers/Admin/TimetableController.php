<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Seat;
use App\Models\Movie;
use App\Models\Booking;
use App\Models\Timetable;
use Illuminate\Http\Request;
use App\Models\SeatTimetable;
use App\Http\Controllers\Controller;

class TimetableController extends Controller
{
    public function showtime(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $rooms = Room::select('id', 'name')->get();

        return view('admin.time.timetable', compact('rooms', 'movie'));
    }

    public function create(Request $request, $movieId)
    {
        try {
            $request->validate([
                'room_id' => 'required',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'time' => 'required|array',
                'time.*' => 'required',
            ]);

            $times = $request->input('time');
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $roomId = $request->input('room_id');

            $movie = Movie::findOrFail($movieId);
            $movieTimeConstraints = unserialize($movie->time_constraints);

            if (!empty($movieTimeConstraints)) {
                foreach ($times as $requestedTime) {
                    if (!in_array($requestedTime, $movieTimeConstraints)) {
                        return back()->withInput()->withErrors(['error' => 'The requested time is not valid for movie ' . $movie->name . '.']);
                    }
                }
            }

            foreach ($times as $requestedTime) {
                $existingTimetableEntry = Timetable::where('room_id', $roomId)
                    ->where('start_date', '>=', $startDate)
                    ->where('end_date', '<=', $endDate)
                    ->where('time', 'LIKE', '%' . $requestedTime . '%')
                    ->where('movie_id', '!=', $movieId)
                    ->exists();
                if ($existingTimetableEntry) {
                    return back()->withInput()->withErrors(['error' => 'The requested time is already booked.']);
                }
            }

            $showtime = new Timetable();
            $showtime->movie_id = $movieId;
            $showtime->room_id = $roomId;
            $showtime->start_date = $startDate;
            $showtime->end_date = $endDate;
            $showtime->time = serialize($times);
            $showtime->save();

            return redirect()->route('timetablelist');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }

    public function timetablelist()
    {
        $timetables = Timetable::with('room.cinema')
            ->select('id', 'movie_id', 'room_id', 'start_date', 'end_date', 'time')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.time.timetablelist', compact('timetables'));
    }

    public function edit(string $id)
    {
        $timetable = Timetable::findOrFail($id);
        $movie = Movie::findOrFail($timetable->movie_id);
        $rooms = Room::select('id', 'name')->get();
        return view('admin.time.timetableEdit', compact('rooms', 'movie', 'timetable'));
    }

    public function update(Request $request, $id, $movieId)
    {
        try {
            $timetable = Timetable::findOrFail($id);
            $request->validate([
                'room_id' => 'required',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'time' => 'required|array',
                'time.*' => 'required',
            ]);

            $times = $request->input('time');
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $roomId = $request->input('room_id');

            $movie = Movie::findOrFail($movieId);
            $movieTimeConstraints = unserialize($movie->time_constraints);

            if (!empty($movieTimeConstraints)) {
                foreach ($times as $requestedTime) {
                    if (!in_array($requestedTime, $movieTimeConstraints)) {
                        return back()->withInput()->withErrors(['error' => 'The requested time is not valid for movie ' . $movie->name . '.']);
                    }
                }
            }

            foreach ($times as $requestedTime) {
                $existingTimetableEntry = Timetable::where('room_id', $roomId)
                    ->where('start_date', '>=', $startDate)
                    ->where('end_date', '<=', $endDate)
                    ->where('time', 'LIKE', '%' . $requestedTime . '%')
                    ->where('movie_id', '!=', $movieId)
                    ->exists();
                if ($existingTimetableEntry) {
                    return back()->withInput()->withErrors(['error' => 'The requested time is already booked.']);
                }
            }

            $timetable->movie_id = $movieId;
            $timetable->room_id = $roomId;
            $timetable->start_date = $startDate;
            $timetable->end_date = $endDate;
            $timetable->time = serialize($times);
            $timetable->save();

            return redirect()->route('timetablelist');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Something went wrong. Please try again.']);
        }
    }

    public function delete($id)
    {
        $timetable = Timetable::findOrFail($id);
        $timetable->delete();
        return redirect()->route('timetablelist')->with('success', 'Timetable deleted successfully');
    }

    public function choosingDate(Request $request, string $movieId, string $roomId)
    {
        $movie = Movie::findOrFail($movieId);
        $room = Room::findOrFail($roomId);

        $arytimes = Timetable::select('time')->where('room_id', $roomId)->where('movie_id', $movieId)->get();
        if ($arytimes->isNotEmpty()) {
            $serializedTime = $arytimes[0]->time;
            $unserializedData = unserialize($serializedTime);
            if (is_array($unserializedData)) {
                $times = explode(', ', $unserializedData[0]);
            } else {
                $times = [];
            }
        } else {
            $times = [];
        }

        $timetables = Timetable::where('room_id', $roomId)->where('movie_id', $movieId)->get();
        $dateRanges = [];
        foreach ($timetables as $timetable) {
            $startDate = new \DateTime($timetable->start_date);
            $endDate = new \DateTime($timetable->end_date);
            $dateRange = new \DatePeriod($startDate, new \DateInterval('P1D'), $endDate->modify('+1 day'));
            $dateRanges[] = $dateRange;
        }

        $seats = Seat::where('room_id', $roomId)->select('id', 'name', 'count', 'price')->get();
        $groupedSeats = $seats->groupBy('name');
        $roomName = $room->name;

        $releaseDate = Timetable::select('start_date')->where('movie_id', $movieId)->get();
        return view('choosingDateTime', compact('room', 'dateRanges', 'times', 'groupedSeats', 'roomName', 'roomId', 'movieId', 'movie', 'releaseDate'));
    }

    public function getOccupiedSeats($movieId, $roomId, Request $request)
    {
        $selectedDate = $request->input('date');
        $selectedTime = $request->input('time');

        $occupiedSeats = SeatTimetable::where('movie_id', $movieId)
            ->where('room_id', $roomId)
            ->where('date', $selectedDate)
            ->where('time', $selectedTime)
            ->pluck('seat_id');

        $occupiedBookingSeats = Booking::where('movie_id', $movieId)
            ->where('room_id', $roomId)
            ->where('date', $selectedDate)
            ->where('time', $selectedTime)
            ->pluck('seat_id');
        return response()->json(['occupiedSeats' => $occupiedSeats, 'occupiedBookingSeats' => $occupiedBookingSeats]);
    }
}
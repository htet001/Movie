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
            $startTime = min($times);
            $endTime = max($times);

            $existingShowtime = Timetable::where('movie_id', $movieId)
                ->where('room_id', $request->input('room_id'))
                ->where(function ($query) use ($startTime, $endTime) {
                    $query->where(function ($q) use ($startTime, $endTime) {
                        $q->where('start_time', '>=', $startTime)
                            ->where('start_time', '<', $endTime);
                    })->orWhere(function ($q) use ($startTime, $endTime) {
                        $q->where('end_time', '>', $startTime)
                            ->where('end_time', '<=', $endTime);
                    });
                })
                ->exists();

            if ($existingShowtime) {
                return back()->withInput()->withErrors(['room_id' => 'Another movie is already scheduled in the selected room at this time.']);
            }

            $showtime = new Timetable();
            $showtime->movie_id = $movieId;
            $showtime->room_id = $request->input('room_id');
            $showtime->start_date = $request->input('start_date');
            $showtime->end_date = $request->input('end_date');
            $showtime->time = serialize($request->input('time'));
            $showtime->save();

            return redirect()->route('timetablelist');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'An error occurred while saving the timetable entry.']);
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

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'room_id' => 'required',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'time' => 'required|array',
                'time.*' => 'required',
            ]);

            $timetable = Timetable::findOrFail($id);

            $existingShowtime = Timetable::where('room_id', $request->input('room_id'))
                ->where('movie_id', $timetable->movie_id)
                ->where(function ($query) use ($request) {
                    $query->whereBetween('start_date', [$request->input('start_date'), $request->input('end_date')])
                        ->orWhereBetween('end_date', [$request->input('start_date'), $request->input('end_date')]);
                })
                ->where('id', '<>', $id)
                ->exists();

            if ($existingShowtime) {
                return back()->withInput()->withErrors(['room_id' => 'This movie is already scheduled in the selected room during the specified time.']);
            }

            $timetable->room_id = $request->input('room_id');
            $timetable->start_date = $request->input('start_date');
            $timetable->end_date = $request->input('end_date');
            $timetable->time = serialize($request->input('time'));
            $timetable->save();

            return redirect()->route('timetablelist')->with('success', 'Timetable updated successfully');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'An error occurred while updating the timetable entry.']);
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
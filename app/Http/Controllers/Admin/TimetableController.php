<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        $request->validate([
            'room_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'time' => 'required|array',
            'time.*' => 'required', // Adjust the format based on your needs
        ]);

        $showtime = new Timetable();
        $showtime->movie_id = $movieId;
        $showtime->room_id = $request->input('room_id');
        $showtime->start_date = $request->input('start_date');
        $showtime->end_date = $request->input('end_date');

        // Serialize the array of times
        $showtime->time = serialize($request->input('time'));

        $showtime->save();

        return redirect()->route('timetablelist');
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
        $request->validate([
            'room_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'time' => 'required|array',
            'time.*' => 'required', // Adjust the format based on your needs
        ]);

        $timetable = Timetable::findOrFail($id);

        $timetable->room_id = $request->input('room_id');
        $timetable->start_date = $request->input('start_date');
        $timetable->end_date = $request->input('end_date');
        $timetable->time = serialize($request->input('time'));
        $timetable->save();

        return redirect()->route('timetablelist')->with('success', 'Timetable updated successfully');
    }

    public function delete($id)
    {
        $timetable = Timetable::findOrFail($id);
        $timetable->delete();
        return redirect()->route('timetablelist')->with('success', 'Timetable deleted successfully');
    }

    public function choosingDateTime(string $movieId, string $roomId)
    {
        $movie = Movie::findOrFail($movieId);
        $room = Room::findOrFail($roomId);

        // Use where clauses separately for room_id and movie_id
        $timetables = Timetable::where('room_id', $roomId)
            ->where('movie_id', $movieId)
            ->get();

        $dateRanges = [];

        foreach ($timetables as $timetable) {
            $startDate = new \DateTime($timetable->start_date);
            $endDate = new \DateTime($timetable->end_date);

            $dateRange = new \DatePeriod($startDate, new \DateInterval('P1D'), $endDate->modify('+1 day'));

            $dateRanges[] = $dateRange;
        }

        return view('choosingDateTime', compact('room', 'dateRanges'));
    }
}

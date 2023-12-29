<?php

namespace App\Http\Controllers\Admin;

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
        $cinemas = Cinema::select('id', 'name')->get();

        return view('admin.time.timetable', compact('cinemas', 'movie'));
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
        $timetables = Timetable::select('id', 'movie_id', 'room_id', 'start_date', 'end_date', 'time')->orderBy('id', 'desc')->get();

        return view('admin.time.timetablelist', compact('timetables'));
    }

    public function edit(string $id)
    {
        $timetable = Timetable::findOrFail($id);
        $movie = Movie::findOrFail($id);
        $cinemas = Cinema::select('id', 'name')->get();
        return view('admin.time.timetableEdit', compact('cinemas', 'movie', 'timetable'));
    }
}

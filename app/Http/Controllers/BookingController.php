<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeatTimetable;

class BookingController extends Controller
{
    public function booking()
    {
        $user_id = auth()->user()->id;

        $datas = SeatTimetable::join('seats', 'seat_timetables.seat_id', '=', 'seats.id')
            ->with(['movie', 'room', 'user'])
            ->where('seat_timetables.user_id', $user_id)
            ->groupBy('seat_timetables.movie_id', 'seat_timetables.room_id', 'seat_timetables.date', 'seat_timetables.time', 'seat_timetables.user_id')
            ->selectRaw('seat_timetables.movie_id, seat_timetables.room_id, seat_timetables.user_id, seat_timetables.date, seat_timetables.time, count(seats.id) as total_seats, sum(seats.price) as total_price')
            ->get();

        return view('booking', compact('datas'));
    }

    public function bookingSuccess()
    {
        return view('bookingSuccess');
    }

    public function store(Request $request)
    {
        //
    }



    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

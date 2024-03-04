<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Movie;
use App\Events\BookingMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\SeatTimetable;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function buy(Request $request, $movieId, $roomId)
    {
        $movie = Movie::findOrFail($movieId);
        $room = Room::findOrFail($roomId);
        return view('buy', compact('movie', 'room', 'movieId', 'roomId'));
    }

    public function book(Request $request, $movieId, $roomId)
    {
        $movie = Movie::findOrFail($movieId);
        $room = Room::findOrFail($roomId);
        return view('book', compact('movie', 'room', 'movieId', 'roomId'));
    }

    public function store(Request $request, $movieId, $roomId)
    {
        $request->validate([
            'selectedDate' => 'required',
            'selectedTime' => 'required',
            'selectedSeats' => 'required|array',
        ]);

        $user_id = Auth::id();

        foreach ($request->input('selectedSeats') as $selectedSeat) {
            $existingBooking = SeatTimetable::where('user_id', $user_id)
                ->where('movie_id', $movieId)
                ->where('room_id', $roomId)
                ->where('date', $request->input('selectedDate'))
                ->where('time', $request->input('selectedTime'))
                ->where('seat_id', $selectedSeat)
                ->first();

            if (!$existingBooking) {
                $booking = new SeatTimetable();
                $booking->user_id = $user_id;
                $booking->movie_id = $movieId;
                $booking->room_id = $roomId;
                $booking->date = $request->input('selectedDate');
                $booking->time = $request->input('selectedTime');
                $booking->seat_id = $selectedSeat;
                $booking->save();

                BookingMail::dispatch($booking);
            }
        }
        return response()->json(['message' => 'Booking successful'], 200);
    }

    public function bookstore(Request $request, $movieId, $roomId)
    {
        $request->validate([
            'selectedDate' => 'required',
            'selectedTime' => 'required',
            'selectedSeats' => 'required',
        ]);
        $user_id = Auth::id();
        foreach ($request->input('selectedSeats') as $selectedSeat) {
            $existingBooking = Booking::where('user_id', $user_id)
                ->where('movie_id', $movieId)
                ->where('room_id', $roomId)
                ->where('date', $request->input('selectedDate'))
                ->where('time', $request->input('selectedTime'))
                ->where('seat_id', $selectedSeat)
                ->first();

            if (!$existingBooking) {
                $booking = new Booking();
                $booking->user_id = $user_id;
                $booking->movie_id = $movieId;
                $booking->room_id = $roomId;
                $booking->date = $request->input('selectedDate');
                $booking->time = $request->input('selectedTime');
                $booking->seat_id = $selectedSeat;
                $booking->save();
            }
        }

        return response()->json(['message' => 'Booking successful'], 200);
    }
}
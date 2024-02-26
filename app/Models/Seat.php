<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Booking;
use App\Models\SeatTimetable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = ['room_id', 'name', 'count', 'price'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function seatTimetables()
    {
        return $this->hasMany(SeatTimetable::class, 'seat_id', 'id');
    }

    public function isOccupied($date, $time)
    {
        // $occupiedSeatTimetable = SeatTimetable::where('seat_id', $this->id)
        //     ->where('date', $date)
        //     ->where('time', $time)
        //     ->exists();

        // $occupiedBooking = Booking::where('seat_id', $this->id)
        //     ->where('date', $date)
        //     ->where('time', $time)
        //     ->exists();

        // $occupied = $occupiedSeatTimetable || $occupiedBooking;

        // return $occupied;
    }
}
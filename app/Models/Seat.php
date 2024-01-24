<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = ['room_id', 'name', 'count', 'price'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function isOccupied()
    {
        $occupied = SeatTimetable::where('seat_id', $this->id)->exists();
        return $occupied;
    }
}

<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Seat;
use App\Models\User;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'movie_id', 'room_id', 'date', 'time', 'seat_id'];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
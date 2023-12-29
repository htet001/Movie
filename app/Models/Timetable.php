<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Timetable extends Model
{
    use HasFactory;
    protected $fillable = [
        'movie_id',
        'room_id',
        'start_date',
        'end_date',
        'time'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}

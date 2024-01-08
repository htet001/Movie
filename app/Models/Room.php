<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'image', 'cinema_id',
    ];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'cinema_id');
    }

    public function timeTables()
    {
        return $this->hasMany(TimeTable::class, 'room_id');
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }
}

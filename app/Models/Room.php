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
        return $this->belongsTo(Cinema::class);
    }

    public function timetable()
    {
        return $this->hasOne(Timetable::class);
    }
}

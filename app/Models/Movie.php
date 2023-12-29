<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $fillable = [
        'name', 'genre', 'image', 'trailer', 'directors', 'actors', 'slider_image'
    ];

    public function timetable()
    {
        return $this->hasOne(Timetable::class);
    }
}

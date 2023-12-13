<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::select('name', 'image', 'trailer')->get();

        $data = [
            'movies' => $movies,
        ];

        return view('home', compact('movies'));
    }
}

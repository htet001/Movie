<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
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

        return view('admin.movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ext = $request->image->getClientOriginalExtension();
        $name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
        $image = uniqid() . "_$name.$ext";
        $request->image->move(public_path() . '/uploads/', $image);

        $ext = $request->slider_image->getClientOriginalExtension();
        $name = pathinfo($request->slider_image->getClientOriginalName(), PATHINFO_FILENAME);
        $slider_image = uniqid() . "_$name.$ext";
        $request->slider_image->move(public_path() . '/uploads/', $slider_image);

        Movie::create([
            'name' => $request->get('name'),
            'genre' => $request->get('genre'),
            'image' => $image,
            'trailer' => $request->get('trailer'),
            'directors' => $request->get('directors'),
            'actors' => $request->get('actors'),
            'upcoming' => $request->get('upcoming'),
            'slider_image' => $slider_image,
            'about' => $request->get('about'),
        ]);

        return redirect('/movie/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movies = Movie::all();
        return view('admin/movie/detail', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect('movie/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

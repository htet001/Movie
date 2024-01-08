<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Theater;
use Illuminate\Support\Facades\File;

class MovieController extends Controller
{
    public function index()
    {
        // $movies = Movie::select('id', 'name', 'image', 'trailer','directors','actors','about','slider_image')->get();
        // return view('admin.movie.index', compact('movies'));

        // Not upcoming
        $movies = Movie::where('upcoming', false)->get();

        return view('admin.movie.index', ['movies' => $movies]);
    }

    public function movielist()
    {
        $movies = Movie::select('id', 'name', 'genre', 'image', 'trailer', 'directors', 'actors', 'upcoming', 'slider_image', 'about')
            ->orderBy('id', 'desc')
            ->paginate(3);

        return view('admin.movie.movieList', compact('movies'));
    }

    public function upcoming()
    {
        // Upcoming
        $movies = Movie::where('upcoming', true)->get();

        return view('home', ['movies' => $movies]);
    }

    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.movie.create', compact('categories'));
    }

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

        $movie = new Movie([
            'name' => $request->get('name'),
            'genre' => $request->get('genre'),
            'image' => $image,
            'trailer' => $request->get('trailer'),
            'directors' => $request->get('directors'),
            'actors' => $request->get('actors'),
            'upcoming' => $request->has('upcoming'),
            'slider_image' => $slider_image,
            'about' => $request->get('about', ''),
        ]);

        $movie->save();

        return redirect('/movielist')->with('message', 'New Movie uploaded successfully');
    }

    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        $cinemas = Cinema::whereHas('rooms.timeTables', function ($query) use ($id) {
            $query->where('movie_id', $id);
        })->select('id', 'name', 'location', 'image')->get();

        return view('admin.movie.detail', compact('movie', 'cinemas'));
    }

    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('admin.movie.edit', [
            'movie' => $movie,
            'hobbies' => explode(',', $movie->upcoming)
        ]);
    }

    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);

        if ($request->hasFile('image')) {
            $image_path = public_path("/uploads/" . $movie->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $ext = $request->image->getClientOriginalExtension();
            $name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $image = uniqid() . "_$name.$ext";
            $request->image->move(public_path() . '/uploads/', $image);

            $movie->image = $image;
        }

        if ($request->hasFile('slider_image')) {
            $slider_image_path = public_path("/uploads/" . $movie->slider_image);
            if (File::exists($slider_image_path)) {
                File::delete($slider_image_path);
            }

            $ext = $request->slider_image->getClientOriginalExtension();
            $name = pathinfo($request->slider_image->getClientOriginalName(), PATHINFO_FILENAME);
            $slider_image = uniqid() . "_$name.$ext";
            $request->slider_image->move(public_path() . '/uploads/', $slider_image);

            $movie->slider_image = $slider_image;
        }

        $movie->name = $request->get('name');
        $movie->genre = $request->get('genre');
        $movie->trailer = $request->get('trailer');
        $movie->directors = $request->get('directors');
        $movie->actors = $request->get('actors');
        $movie->upcoming = $request->has('upcoming');
        $movie->about = $request->get('about');

        $movie->save();

        return redirect('/movielist')->with('edit_message', 'Movie updated successfully');
    }

    public function delete(string $id)
    {
        $movie = Movie::findOrFail($id);
        $img_path = public_path('uploads/' . $movie->image);
        $slider_img_path = public_path('uploads/' . $movie->slider_image);

        if (file_exists($img_path)) {
            unlink($img_path);
        }
        if (file_exists($slider_img_path)) {
            unlink($slider_img_path);
        }

        $movie->delete();

        return redirect()->back()->with('delete_message', 'Movie deleted successfully');
    }
}

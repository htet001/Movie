<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Category;
use App\Models\PremiumMovie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PremiumMovieCreateFormRequest;

class PremiumController extends Controller
{
    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        return view('admin.premium.create', compact('categories'));
    }

    public function store(PremiumMovieCreateFormRequest $request)
    {
        try {
            $existingMovie = PremiumMovie::where('name', $request->get('name'))->first();

            if ($existingMovie) {
                return redirect()->back()->with('error', 'Movie already exists. You cannot upload the same movie again.');
            }

            $ext = $request->image->getClientOriginalExtension();
            $name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $image = uniqid() . "_$name.$ext";
            $request->image->move(public_path() . '/uploads/', $image);

            $movie = new PremiumMovie([
                'name' => $request->get('name'),
                'genre' => $request->get('genre'),
                'image' => $image,
                'trailer' => $request->get('trailer'),
                'directors' => $request->get('directors'),
                'actors' => $request->get('actors'),
                'about' => $request->get('about', ''),
            ]);
            $movie->save();
            return redirect('/premiumMovieList')->with('message', 'New Premium Movie uploaded successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function premiumMovieList()
    {
        $movies = PremiumMovie::select('id', 'name', 'genre', 'image', 'trailer', 'directors', 'actors', 'about')
            ->orderBy('id', 'desc')
            ->paginate(3);

        return view('admin.premium.premiumMovieList', compact('movies'));
    }

    public function edit(string $id)
    {
        $movie = PremiumMovie::findOrFail($id);
        $categories = Category::select('id', 'name')->get();
        return view('admin.premium.edit', compact('movie', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $movie = PremiumMovie::findOrFail($id);

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

            $movie->name = $request->get('name');
            $movie->genre = $request->get('genre');
            $movie->trailer = $request->get('trailer');
            $movie->directors = $request->get('directors');
            $movie->actors = $request->get('actors');
            $movie->about = $request->get('about');

            $movie->save();

            return redirect('/premiumMovieList')->with('message', 'Movie updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function delete(string $id)
    {
        $movie = PremiumMovie::findOrFail($id);
        $img_path = public_path('uploads/' . $movie->image);

        if (file_exists($img_path)) {
            unlink($img_path);
        }
        $movie->delete();
        return redirect()->back()->with('message', 'Movie deleted successfully');
    }

    public function premium()
    {
        $movies = PremiumMovie::select('id', 'name', 'genre', 'image', 'trailer', 'directors', 'actors', 'about')->get();
        return view('admin.premium.premiumMovies', compact('movies'));
    }

    public function show(string $id)
    {
        $movie = PremiumMovie::findOrFail($id);
        return view('admin.premium.premiumMovieDetails', compact('movie'));
    }
}

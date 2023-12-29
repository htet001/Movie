<?php

namespace App\Http\Controllers\Admin;

use App\Models\Theater;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cinema;
use Illuminate\Support\Facades\File;

class CinemaController extends Controller
{
    public function index()
    {
        return view('admin.theater.index');
    }

    public function create()
    {
        return view('admin.theater.create');
    }

    public function store(Request $request)
    {
        $ext = $request->image->getClientOriginalExtension();
        $name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
        $image = uniqid() . "_$name.$ext";
        $request->image->move(public_path() . '/uploads/', $image);

        $theater = new Cinema([
            'name' => $request->get('name'),
            'location' => $request->get('location'),
            'image' => $image,
        ]);

        $theater->save();

        return redirect('/theaterlist')->with('message', 'New Theater uploaded successfully');
    }

    public function theaterlist()
    {
        $theaters = Cinema::select('id', 'name', 'location', 'image')->orderBy('id', 'desc')->get();
        return view('admin.theater.theaterlist', compact('theaters'));
    }

    public function edit(string $id)
    {
        $theater = Cinema::findOrFail($id);
        return view('admin.theater.edit', compact('theater'));
    }

    public function update(Request $request, string $id)
    {
        $theater = Cinema::findOrFail($id);

        if ($request->hasFile('image')) {
            $image_path = public_path("/uploads/" . $theater->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $ext = $request->image->getClientOriginalExtension();
            $name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $image = uniqid() . "_$name.$ext";
            $request->image->move(public_path() . '/uploads/', $image);

            $theater->image = $image;
        }

        $theater->name = $request->get('name');
        $theater->location = $request->get('location');

        $theater->save();

        return redirect('/theaterlist')->with('message', 'Theater updated successfully');
    }

    public function destroy(string $id)
    {
        $theater = Cinema::findOrFail($id);
        $img_path = public_path('uploads/' . $theater->image);

        if (file_exists($img_path)) {
            unlink($img_path);
        }

        $theater->delete();

        return redirect()->back()->with('message', 'Theater deleted successfully');
    }

    public function viewCinemas($theaterId)
    {
        $theaterWithCinemas = Cinema::with('cinemas')->find($theaterId);

        return view('admin.theater.viewCinemas', compact('theaterWithCinemas'));
    }
}

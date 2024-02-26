<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Cinema;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    public function index()
    {
        return view('admin.cinema.index');
    }

    public function create()
    {
        $theaters = Cinema::select('name', 'id')->get();
        return view('admin.cinema.create', compact('theaters'));
    }

    public function store(Request $request)
    {
        $theaterId = $request->input('theater_id');
        $ext = $request->image->getClientOriginalExtension();
        $name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
        $image = uniqid() . "_$name.$ext";
        $request->image->move(public_path() . '/uploads/', $image);

        $existingRoom = Room::where('name', $request->get('name'))
            ->where('cinema_id', $theaterId)
            ->first();
        if ($existingRoom) {
            return redirect()->back()->with('message', 'A room with this name already exists in this Cinema.');
        }

        $theater = new Room([
            'name' => $request->get('name'),
            'image' => $image,
            'cinema_id' =>  $theaterId,
        ]);

        $theater->save();
        return redirect('/cinemalist')->with('message', 'New Cinema uploaded successfully');
    }

    public function cinemalist()
    {
        $cinemas = Room::select('id', 'name', 'image', 'cinema_id')->orderBy('id', 'desc')->get();
        return view('admin.cinema.cinemalist', compact('cinemas'));
    }

    public function edit(string $id)
    {
        $theaters = Cinema::select('name', 'id')->get();
        $cinema = Room::findOrFail($id);
        return view('admin.cinema.edit', compact('cinema', 'theaters'));
    }

    public function update(Request $request, string $id)
    {
        $cinema = Room::findOrFail($id);
        $theaterId = $request->input('theater_id');

        if ($request->hasFile('image')) {
            $image_path = public_path("/uploads/" . $cinema->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $ext = $request->image->getClientOriginalExtension();
            $name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $image = uniqid() . "_$name.$ext";
            $request->image->move(public_path() . '/uploads/', $image);
            $cinema->image = $image;
        }

        $existingRoom = Room::where('name', $request->get('name'))
            ->where('cinema_id', $theaterId)
            ->first();
        if ($existingRoom) {
            return redirect()->back()->with('message', 'A room with this name already exists in this Cinema.');
        }

        $cinema->name = $request->get('name');
        $cinema->cinema_id = $theaterId;
        $cinema->save();
        return redirect('/cinemalist')->with('message', 'Cinema updated successfully');
    }

    public function destroy(string $id)
    {
        $cinema = Room::findOrFail($id);
        $img_path = public_path('uploads/' . $cinema->image);

        if (file_exists($img_path)) {
            unlink($img_path);
        }

        $cinema->delete();
        return redirect()->back()->with('message', 'Cinema deleted successfully');
    }
}
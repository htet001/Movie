<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Seat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeatController extends Controller
{
    public function seat(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        return view('admin.seat.index', compact('room'));
    }

    public function create(Request $request, $roomId)
    {
        $request->validate([
            'name' => 'required|string',
            'count' => 'required|integer|min:1|max:' . $request->input('count'),
            'price' => 'required|numeric|min:0',
        ]);

        $seatName = $request->input('name');
        $price = $request->input('price');

        for ($i = 1; $i <= $request->input('count'); $i++) {
            Seat::create([
                'count' => $i,
                'room_id' => $roomId,
                'name' => $seatName,
                'price' => $price,
            ]);
        }

        return redirect('/seat/' . $roomId);
    }

    public function showseat($roomId)
    {
        $room = Room::findOrFail($roomId);

        if ($room) {
            $seats = Seat::where('room_id', $roomId)->get();
            $roomName = $room->name;

            return view('admin.seat.showseat', compact('seats', 'roomName'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

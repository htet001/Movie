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
            $seats = Seat::where('room_id', $roomId)->select('name', 'count', 'price')->get();
            $groupedSeats = $seats->groupBy('name');
            $roomName = $room->name;

            return view('admin.seat.showseat', compact('groupedSeats', 'roomName', 'room', 'roomId'));
        }
    }

    public function update(Request $request, $roomId)
    {
        $request->validate([
            'seat.*' => 'required|integer|min:0',
            'price.*' => 'required|numeric|min:0',
        ]);

        $seatData = $request->only(['seat', 'price']);

        foreach ($seatData['seat'] as $name => $count) {
            Seat::where('room_id', $roomId)
                ->where('name', $name)
                ->where('count', '>', $count)
                ->delete();

            for ($i = 1; $i <= $count; $i++) {
                Seat::updateOrCreate(
                    [
                        'room_id' => $roomId,
                        'name' => $name,
                        'count' => $i,
                    ],
                    [
                        'price' => $seatData['price'][$name],
                    ]
                );
            }
        }

        return redirect('/seat/' . $roomId)->with('success', 'Seats updated successfully');
    }
}

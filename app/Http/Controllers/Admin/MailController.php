<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeatTimetable;

class MailController extends Controller
{
    public function mail()
    {
        $datas = SeatTimetable::all();
        $bookingDetails = [];

        foreach ($datas as $data) {
            $currentGroup = $data->user->id . $data->movie->id . $data->room->id . $data->date . $data->time;

            if (!isset($bookingDetails[$currentGroup])) {
                $bookingDetails[$currentGroup] = [
                    'user' => $data->user,
                    'movie' => $data->movie,
                    'room' => $data->room,
                    'date' => $data->date,
                    'time' => $data->time,
                    'seats' => [],
                    'totalPrice' => 0,
                ];
            }

            $bookingDetails[$currentGroup]['seats'][] = $data->seat->name . $data->seat->count;
            $bookingDetails[$currentGroup]['totalPrice'] += $data->seat->price;
        }

        return view('admin.mail.mail', compact('bookingDetails'));
    }
}

<?php

namespace App\Listeners;

use App\Events\BookingMail;
use App\Mail\BookingDataMail;
use App\Notifications\BookNoti;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class NotifyBookingMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BookingMail $event): void
    {
        $user = $event->booking->user;
        $event->booking->load('movie', 'room', 'seat');
        $movie = $event->booking->movie->name;
        $room = $event->booking->room->name;
        $seatName = $event->booking->seat->name;
        $seatCount = $event->booking->seat->count;
        $count = $user->seatTimetables()->distinct()->count('seat_id');
        $date = $event->booking->date;
        $time = $event->booking->time;
        $userName = $user->name;
        $data = compact('date', 'time', 'movie', 'room', 'seatName', 'seatCount', 'count', 'userName');

        Notification::send($user, new BookNoti($data));
    }
}

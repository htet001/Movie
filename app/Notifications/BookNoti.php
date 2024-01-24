<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookNoti extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public array $data)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $userName = $this->data['userName'];
        $movie = $this->data['movie'];
        $room = $this->data['room'];
        $date = $this->data['date'];
        $time = $this->data['time'];
        $seatName = $this->data['seatName'];
        $seatCount = $this->data['seatCount'];
        $count = $this->data['count'];

        return (new MailMessage)
            ->subject('Movie Booking')
            ->view(
                'emails.movie_booking',
                compact('movie', 'room', 'date', 'time', 'seatName','seatCount', 'count', 'userName')
            );
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
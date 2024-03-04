@extends('layout.master')
@section('title','User Dashboard')
@section('content')
<style>
.container {
    max-width: 100%;
    margin: 0 auto;
}

.card {
    margin-top: 20px;
    margin-bottom: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #f8f9fa;
    padding: 10px;
}

.card-body {
    padding: 20px;
}

.no-details {
    color: #6c757d;
}

.group-details-container {
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
}

.user-title {
    font-size: 1.2em;
    color: #007bff;
}

.movie-title {
    font-size: 1.1em;
    margin-top: 10px;
}

.room-details,
.date-time,
.seats,
.total-price {
    margin-top: 5px;
    color: #555;
}
</style>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Booking Details</h2>
        </div>
        <div class="card-body">
            @if(empty($bookingDetails))
            <p class="no-details">No booking details available.</p>
            @else
            @foreach ($bookingDetails as $group => $details)
            <div class="group-details-container">
                <h3 class="user-title">
                    User: {{ $details['user']->name }} - {{ $details['user']->email }}
                </h3>
                <h4 class="movie-title">Movie: {{ $details['movie']->name }}</h4>
                <p class="room-details">
                    Room: {{ $details['room']->cinema->name }} - {{ $details['room']->name }}
                </p>
                <p class="date-time">
                    Date: {{ $details['date'] }} | Time: {{ $details['time'] }}
                </p>
                <p class="seats">
                    Seats: {{ implode(', ', $details['seats']) }}
                </p>
                <p class="total-price">
                    Total Price: {{ $details['totalPrice'] }} Kyats
                </p>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
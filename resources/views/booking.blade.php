@extends('layout.master')
@section('title','Booking')
@section('content')
<div class="container-fluid my-5" id="booking">
    <div class="col-md-6">
        <form id="bookingForm">
            <h2>Movie Ticket Booking</h2>

            <label for="movie">Movie Name</label>
            <input type="text" id="name" name="name" required>

            <label for="date">Select Date</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Select Time</label>
            <input type="time" id="time" name="time" required>

            <label for="seats">Number of Seats</label>
            <input type="number" id="seats" name="seats" min="1" required>

            <label for="seats">Total Price</label>
            <input type="number" id="price" name="total" min="1" required>

            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" class="mt-3" id="bookNow">Book Now</button>
        </form>
    </div>
</div>
@endsection
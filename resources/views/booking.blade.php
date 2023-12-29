@extends('layout.master')
@section('title','Booking')
@section('content')
<style>
    #booking {
        max-width: 50%;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: orange;
        text-align: left;
    }

    h5 {
        text-align: left;
    }

    #bookTicket {
        width: 30%;
        background-color: tomato;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 15px;
        cursor: pointer;
    }
</style>

<div class="container my-5" id="booking">
    <div class="col-md-9">
        <form id="bookingForm">
            <div class="row">
                <h2 class="mb-5">Movie Booking</h2>
                <div class="col-md-5">
                    <h5 class="mb-5">Movie name</h5>
                    <h5 class="mb-5">Date</h5>
                    <h5 class="mb-5">Time</h5>
                    <h5 class="mb-5">Number Of Seats</h5>
                    <h5 class="mb-5">Total Price</h5>
                </div>
                <div class="col-md-7">
                    <span>
                        <h5 class="mb-5">: : Movie name</h5>
                        <h5 class="mb-5">: : 25 December 2023</h5>
                        <h5 class="mb-5">: : 3 : 00 PM</h5>
                        <h5 class="mb-5">: : 4 seats</h5>
                        <h5 class="mb-5">: : 30000 Kyats</h5>
                    </span>
                </div>
            </div>
            <button type="submit" id="bookTicket">Book Ticket</button>
        </form>
    </div>
</div>

@endsection
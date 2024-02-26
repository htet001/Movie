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

#buyTicket {
    width: 30%;
    background-color: tomato;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    cursor: pointer;
}
</style>
<form id="checkoutForm" action="{{ route('checkout') }}" method="POST">
    @csrf
    <div class="container my-5" id="booking">
        <div class="col-md-9">
            <div class="row">
                <h2 class="mb-5">Movie Booking</h2>

                <div class="col-md-5">
                    <h5 class="mb-5">Movie name</h5>
                    <h5 class="mb-5">Room name</h5>
                    <h5 class="mb-5">Date</h5>
                    <h5 class="mb-5">Time</h5>
                    <h5 class="mb-5">Number Of Seats</h5>
                </div>
                <div class="col-md-7">
                    <span>
                        <h5 class="mb-5">: : {{$movie->name}}</h5>
                        <h5 class="mb-5">: : {{$room->name}}</h5>
                        <h5 class="mb-5">: : <span id="selectedDate"></span></h5>
                        <h5 class="mb-5">: : <span id="selectedTime"></span></h5>
                        <h5 class="mb-5">: : <span id="selectedSeatsCount"></span> seats</h5>
                    </span>
                </div>
            </div>
            <button id="buyTicket" type="submit">Buy Ticket</button>
        </div>
    </div>
</form>
<script>
var selectedDate = sessionStorage.getItem('selectedDate');
var selectedTime = sessionStorage.getItem('selectedTime');
var selectedSeats = JSON.parse(sessionStorage.getItem('selectedSeats'));

document.getElementById('selectedDate').textContent = selectedDate;
document.getElementById('selectedTime').textContent = selectedTime;
document.getElementById('selectedSeatsCount').textContent = selectedSeats.length;

function bookSeats() {
    let movieId = "{{ $movie->id }}";
    let roomId = "{{ $room->id }}";

    var postData = {
        selectedDate: selectedDate,
        selectedTime: selectedTime,
        selectedSeats: selectedSeats,
        _token: "{{ csrf_token() }}",
    };
    $.ajax({
        type: 'POST',
        url: `/${movieId}/${roomId}/buy`,
        data: postData,
        success: function(response) {
            console.log('Seats booked successfully:', response);

            sessionStorage.removeItem('selectedDate');
            sessionStorage.removeItem('selectedTime');
            sessionStorage.removeItem('selectedSeats');
        },
        error: function(error) {
            console.error('Error Buying seats:', error);
        }
    });
}

document.getElementById('buyTicket').addEventListener('click', function() {
    bookSeats();
});
</script>

@endsection
@extends('layout.master')
@section('title','Booking')
@section('content')
<form id="checkoutForm" action="{{ route('booking', ['movieId' => $movieId, 'roomId' => $roomId]) }}" method="POST">
    @csrf
    <div class="container my-5" id="booking">
        <div class="col-md-9">
            <div class="row">
                <h2 class="mb-5" id="buyTitle">Movie Booking</h2>

                <div class="col-md-5">
                    <h5 class="mb-5 movieData">Movie name</h5>
                    <h5 class="mb-5 movieData">Room name</h5>
                    <h5 class="mb-5 movieData">Date</h5>
                    <h5 class="mb-5 movieData">Time</h5>
                    <h5 class="mb-5 movieData">Number Of Seats</h5>
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
            <button id="bookTicket" type="submit">Book Ticket</button>
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

    console.log(postData);

    $.ajax({
        type: 'POST',
        url: `/${movieId}/${roomId}/book`,
        data: postData,
        success: function(response) {
            console.log('Seats booked successfully:', response);

            sessionStorage.removeItem('selectedDate');
            sessionStorage.removeItem('selectedTime');
            sessionStorage.removeItem('selectedSeats');
            window.location.href = '/notification';
        },
        error: function(error) {
            console.error('Error booking seats:', error);
        }
    });
}

document.getElementById('bookTicket').addEventListener('click', function() {
    bookSeats();
});
</script>

@endsection
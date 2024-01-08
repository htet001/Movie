@extends('admin.adminLayout.adminMaster')
@section('title','Cinema List')
@section('content')
<style>
.movie-container {
    margin: 20px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column
}

.movie-container select {
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    border: 0;
    padding: 5px 15px;
    margin-bottom: 40px;
    font-size: 14px;
    border-radius: 5px;
}

#seatContainer {
    perspective: 1000px;
    margin: 20px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: lightgray;

}

.seat {
    text-align: center;
    padding-top: 8px;
    color: white;
    background-color: #444451;
    height: 36px;
    width: 45px;
    margin: 5px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.selected {
    background-color: #0081cb;
}

.occupied {
    color: black;
    background-color: #fff;
}

.seat:nth-of-type(2) {
    margin-right: 18px;
}

.seat:nth-last-of-type(4) {
    margin-left: 18px;
}

.screen {
    background: #fff;
    height: 70px;
    width: 70%;
    margin: 15px 0;
    transform: rotateX(-45deg);
    box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
    font-size: 20px;
    padding-top: 15px;
}
</style>
<!-- START SEAT -->
<div class="movie-container">
    <div class="container" id="seatContainer">
        <div class="screen text-center">
            {{ $roomName }}
        </div>
        @foreach($seats->groupBy('name') as $row => $seatsInRow)
        <div class="row">
            @foreach($seatsInRow as $seat)
            <div class="seat">{{ $seat->name }} {{ $seat->count }}</div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>


<!-- END SEAT -->
@endsection
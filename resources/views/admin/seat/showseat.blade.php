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
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: lightgray;
        padding-bottom: 30px;
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

    /* Modal Body Paragraphs */
    .modal-body p {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    /* Input Fields within Paragraphs */
    .modal-body p input {
        width: 60%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* General Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    /* Modal Content Styles */
    .modal-content {
        background-color: #fff;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        width: 80%;
    }

    /* Close Button Styles */
    .close {
        color: #555;
        float: right;
        font-size: 24px;
        font-weight: bold;
    }

    /* Close Button Hover/Focus Styles */
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    /* Additional Styling for Modal Footer */
    .modal-footer {
        margin-top: 20px;
        text-align: right;
    }

    /* Button Styling */
    .btn {
        padding: 10px 20px;
        margin: 0 5px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-secondary {
        background-color: #ccc;
        color: #333;
    }

    .btn-primary {
        background-color: #3498db;
        color: #fff;
    }

    /* Button Hover/Focus Styles */
    .btn:hover,
    .btn:focus {
        opacity: 0.8;
    }

    #myBtn {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: #3498db;
        color: #fff;
    }

    #myBtn:hover,
    #myBtn:focus {
        background-color: #217dbb;
    }
</style>
<!-- START SEAT -->
<div class="container" id="seatContainer">
    <div class="container" id="seatContainer">
        <div class="screen text-center">
            {{ $roomName }}
        </div>
        @foreach($groupedSeats as $name => $seatsGroup)
        <div class="row">
            @foreach($seatsGroup as $seat)
            <div class="seat">{{ $seat->name }} {{ $seat->count }}</div>
            @endforeach
        </div>
        @endforeach

    </div>

    <!-- Edit to Seats -->
    <button id="myBtn">Edit To Seats</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $roomName }}</h1>
                    </div>
                    <!-- Modal Body -->
                    <form action="{{ route('seat.update', ['roomId' => $roomId]) }}" method="post">
                        @csrf
                        <div class="modal-body">
                            @php
                            $totalSeats = 0;
                            $totalAmount = 0;
                            @endphp

                            @foreach ($groupedSeats as $name => $seatsGroup)
                            <p>
                                <span>Row {{ $name }}</span>
                                <input type="number" name="seat[{{ $name }}]" value="{{ $seatsGroup->max('count') }}" min="0" max="16">
                                <span style="margin-left: 10px;">Price: </span>
                                <input type="number" name="price[{{ $name }}]" value="{{ $seatsGroup->first()->price }}" min="0" step="500">
                            </p>
                            @php
                            $totalSeats += $seatsGroup->max('count');
                            $totalAmount += $seatsGroup->first()->price * $seatsGroup->max('count');
                            @endphp
                            @endforeach


                            <p>
                                <span>Total Seats:</span>
                                <input type="number" name="total_count" value="{{ $totalSeats }}" readonly>
                            </p>
                            <p>
                                <span>Total Amount:</span>
                                <input type="text" name="total_amount" value="{{ number_format($totalAmount, 0, '.', ',') }}" readonly>
                            </p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- END SEAT -->
    @endsection
@extends('layout.master')
@section('title','Choosing DateTime')
@section('content')

<style>
#dateList {
    justify-content: center;
}

.dateItem {
    display: block;
    text-align: center;
    color: white;
    font-weight: bold;
}

.date {
    padding: 10px 15px;
    margin: 10px;
    background-color: tomato;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border: 2px solid #ccc;
    border-radius: 5px;
}

#book {
    padding: 10px 45px;
    margin: 10px;
    background-color: tomato;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border: 2px solid #ccc;
    border-radius: 5px;
}

#book>a {
    color: white;
}

.date.selected {
    background-color: orange;
}

.time {
    color: black;
}

.timelist {
    padding: 10px;
    border: 1px solid tomato;
    margin: 0px 20px;
}

.timelist.selected {
    background-color: tomato;
}

@import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

@import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");

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
    background-color: #00ff00;
    /* Change this to the desired background color */
    color: #ffffff;
    /* Change this to the desired text color */
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

.seat:not(.occupied):hover {
    cursor: pointer;
    transform: scale(1.2);
}

.showcase .seat:not(.occupied):hover {
    cursor: default;
    transform: scale(1);
}

.showcase {
    display: flex;
    justify-content: space-between;
    list-style-type: none;
    background: rgba(0, 0, 0, 0.1);
    padding: 5px 10px;
    border-radius: 5px;
    color: #777;
}

.showcase li {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 10px;
}

.showcase li small {
    margin-left: 2px;
}

.row {
    display: flex;
    align-items: center;
    justify-content: center;
}

.screen {
    background: #fff;
    height: 70px;
    width: 70%;
    margin: 15px 0;
    transform: rotateX(-45deg);
    box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
}

p.text {
    margin: 40px 0;
}

p.text span {
    color: #0081cb;
    font-weight: 600;
    box-sizing: content-box;
}

.credits a {
    color: #fff;
}

.dateclass {
    list-style-type: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
}

.date-range {
    align-items: center;
    margin-top: 5px;
}

.dateItem {
    margin-right: 2px !important;
}
</style>

<!-- Start Movie Detail -->
<div class="page-content my-5">
    <article id="post-457"
        class="post-457 amy_tvshow type-amy_tvshow status-publish amy_genre-drama amy_genre-magic amy_genre-sci-fi amy_actor-alexander-cattly amy_actor-cartin-hollia amy_actor-greta-garbo amy_actor-humpray-richard amy_actor-martin-brando amy_director-grace-belly amy_director-kingia-rogers">
        <div class="entry-top d-flex" style="justify-content: center;">
            <div class="entry-poster">
                <img class="" src="" alt="Vikings" />
            </div>
            <div class="entry-info">
                <h1 class="entry-title p-name" itemprop="name headline">
                    <a href="index.html" rel="bookmark" class="u-url url" itemprop="url">
                        Vikings </a>
                </h1>
                <div class="entry-pg">
                    <span class="pg">G</span>

                    <span class="duration">
                        <i class="fa fa-clock-o"></i>
                        02 hours 30 minutes </span>
                </div>
                <ul class="info-list">
                    <li>
                        <label>
                            Actor:
                        </label>
                        <span>
                            <a href="../../amy_actor/alexander-cattly/index.html">Alexander Cattly</a>,
                            <a href="../../amy_actor/cartin-hollia/index.html">Cartin Hollia</a>, <a
                                href="../../amy_actor/greta-garbo/index.html">Greta Garbo</a>, <a
                                href="../../amy_actor/humpray-richard/index.html">Humpray Richard</a>,
                            <a href="../../amy_actor/martin-brando/index.html">Martin Brando</a> </span>
                    </li>
                    <li>
                        <label>
                            Director:
                        </label>
                        <span>
                            <a href="../../amy_director/grace-belly/index.html">Grace Belly</a>, <a
                                href="../../amy_director/kingia-rogers/index.html">Kingia Rogers</a>
                        </span>
                    </li>
                    <li>
                        <label>
                            Genre:
                        </label>
                        <span>
                            <a href="../../amy_genre/drama/index.html">Drama</a>, <a
                                href="../../amy_genre/magic/index.html">Magic</a>, <a
                                href="../../amy_genre/sci-fi/index.html">Sci-fi</a> </span>
                    </li>
                    <li>
                        <label>
                            Release:
                        </label>
                        <span>
                            May 19, 2022 </span>
                    </li>
                    <li>
                        <label>
                            Language:
                        </label>
                        <span>
                            English </span>
                    </li>
                    <li>
                        <label>
                            IMDB Rating:
                        </label>
                        <span>
                            9.3 </span>
                    </li>
                </ul>
                <div class="entry-action">
                    <div class="entry-share">
                        <label>Share:</label>
                        <ul class="amy-social-links clearfix" style="display: inline-block;">
                            <li style="display: inline;"><a
                                    href="https://www.facebook.com/sharer.php?u=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/"
                                    class="fab fa-facebook" target="_blank"></a></li>
                            <li style="display: inline;"><a
                                    href="http://www.twitter.com/share?url=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/"
                                    class="fab fa-twitter" target="_blank"></a></li>
                            <li style="display: inline;"><a
                                    href="http://pinterest.com/pin/create/button/?url=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/"
                                    class="fab fa-pinterest" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- End Movie Detail -->

<div class="elementor-element elementor-element-46cb6f1 elementor-widget elementor-widget-Amy_V2_Movie_Heading"
    data-id="46cb6f1" data-element_type="widget" data-widget_type="Amy_V2_Movie_Heading.default">
    <div class="elementor-widget-container">
        <div class="amy-heading text-center has-seperator seperator-2 ">
            <header class="entry-header"><span class="seperator seperator-left"></span>
                <h2 class="title-heading"><span class="title">Choose </span><span class="title-highlight">
                    </span>
                </h2><span class="seperator seperator-right"></span>
            </header>
        </div>

        <!-- Start Choosing Date -->
        <form id="bookingForm" action="{{ route('choosingDate', ['movieId' => $movieId, 'roomId' => $roomId]) }}"
            method="post">
            @csrf
            <div class="container" id="dateContainer">
                <div class="row">
                    <ul style="display: flex;" id="dateList">
                        @isset($dateRanges)
                        @foreach ($dateRanges as $dateRange)
                        <div class="dateclass">
                            @foreach ($dateRange as $date)
                            @if ($date >= now())
                            <li onclick="selectDate(this, '{{ $movieId }}', '{{ $roomId }}')">
                                <div class="date">
                                    <span class="dateItem">{{ $date->format('D') }}</span>
                                    <span class="dateItem">{{ $date->format('d') }}</span>
                                    <span class="dateItem">{{ $date->format('M') }}</span>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </div>
                        @endforeach
                        @endisset
                    </ul>
                </div>
            </div>

            <div class="container" style="width: 70%;">
                <div class="entry-content e-content" itemprop="description articleBody">
                    <div class="mb-3">
                        <div class="">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="d-flex">
                                <div class="theater-info" style="margin: 10px 0px 10px 60px; width:30%;">
                                    <!-- Theater info will be updated dynamically -->
                                </div>
                                <div>
                                    <ul class="time-list" style="display: flex; margin-top:32px;">
                                        <!-- Time list will be updated dynamically -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- START SEAT -->
            <div class="movie-container">
                <ul class="showcase">
                    <li>
                        <div class="seat"></div>
                        <small>N/A</small>
                    </li>
                    <li>
                        <div class="seat selected"></div>
                        <small>Selected</small>
                    </li>
                    <li>
                        <div class="seat occupied"></div>
                        <small>Occupied</small>
                    </li>
                </ul>

                <div class="container" id="seatContainer">
                    <div class="screen text-center">
                        {{ $roomName }}
                    </div>
                    @foreach($groupedSeats as $name => $seatsGroup)
                    <div class="row">
                        @foreach($seatsGroup as $seat)
                        @php
                        $isOccupied = $seat->isOccupied(); // Implement a method to check if the seat is occupied
                        @endphp
                        <div class="seat @if($isOccupied) occupied @endif" onclick="selectSeat({{ $seat->id }}, this)">
                            {{ $seat->name }} {{ $seat->count }}
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                    <a href="{{'/booking'}}"><button class="mb-5" type="button" id="book">Submit</button></a>
                </div>

            </div>
        </form>
        <!-- END SEAT -->

        <script>
        let selectedDate;
        let movieId = "{{ $movieId }}";
        let roomId = "{{ $roomId }}";

        function selectDate(element) {
            console.log('Clicked element:', element);

            const dateItems = document.querySelectorAll('.date');
            dateItems.forEach(item => item.classList.remove('selected'));

            const dateElement = element.querySelector('.date');
            if (dateElement) {
                dateElement.classList.add('selected');

                selectedDate = {
                    day: dateElement.children[0].textContent,
                    date: dateElement.children[1].textContent,
                    month: dateElement.children[2].textContent,
                };

                console.log('Selected date:', selectedDate);

                const theaterInfo = document.querySelector('.theater-info');
                theaterInfo.innerHTML = `
            <h5>Theater Name</h5>
            <h5>Location</h5>
            <h5>Cinema Name</h5>
        `;

                const timeList = document.querySelector('.time-list');
                timeList.innerHTML = `
            @foreach($times as $time)
                <li class="timelist" onclick="selectTime(this)">
                    <span class="time">{{ $time }}</span>
                </li>
            @endforeach
        `;
            } else {
                console.error('Error: Date element not found');
            }
        }

        let selectedTime;

        function selectTime(timeElement) {
            const timeItems = document.querySelectorAll('.timelist');
            timeItems.forEach(item => item.classList.remove('selected'));

            timeElement.classList.add('selected');

            const selectedDateElement = document.querySelector('.date.selected');
            if (selectedDateElement) {
                const selectedDate = {
                    day: selectedDateElement.children[0].textContent,
                    date: selectedDateElement.children[1].textContent,
                    month: selectedDateElement.children[2].textContent,
                };

                selectedTime = timeElement.querySelector('.time').textContent;

                sendSelectedDataToServer(selectedDate, selectedTime, selectedSeats);
            } else {
                console.error('Error: Selected date not found');
            }
        }

        var selectedSeats = [];

        function selectSeat(seatId, seatElement) {
            const isOccupied = $(seatElement).hasClass('occupied');

            if (!isOccupied) {
                $(seatElement).toggleClass('selected');
                const seatIndex = selectedSeats.indexOf(seatId);

                if (seatIndex === -1) {
                    selectedSeats.push(seatId);
                } else {
                    selectedSeats.splice(seatIndex, 1);
                }

                console.log('Selected Seat IDs:', selectedSeats);
            } else {
                console.log('Seat is already occupied and cannot be selected.');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const submitBtn = document.getElementById('book');
            submitBtn.addEventListener('click', function() {
                sendSelectedDataToServer(selectedDate, selectedTime, selectedSeats);
            });
        });

        function sendSelectedDataToServer(selectedDate, selectedTime, selectedSeats) {
            console.log('Sending data to server:', {
                selectedDate,
                selectedTime,
                selectedSeats
            });

            const data = {
                date: selectedDate,
                time: selectedTime,
                seat_id: selectedSeats,
            };

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
                type: 'POST',
                url: `/${movieId}/${roomId}/choosingDateTime`,
                contentType: 'application/json',
                data: JSON.stringify(data),
                success: function(response) {
                    console.log('Data sent successfully:', response);
                },
                error: function(error) {
                    console.error('Error sending data to server:', error);
                }
            });
        }
        </script>

        <!-- End Choosing Date -->
    </div>
</div>

@endsection
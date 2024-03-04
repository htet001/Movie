@extends('layout.master')
@section('title','Choosing DateTime')
@section('content')
<!-- Start Movie Detail -->
<div class="page-content my-5">
    <article id="post-457"
        class="post-457 amy_tvshow type-amy_tvshow status-publish amy_genre-drama amy_genre-magic amy_genre-sci-fi amy_actor-alexander-cattly amy_actor-cartin-hollia amy_actor-greta-garbo amy_actor-humpray-richard amy_actor-martin-brando amy_director-grace-belly amy_director-kingia-rogers">
        <div class="entry-top d-flex" style="justify-content: center;">
            <div class="entry-poster">
                <img class="" src="{{asset('/uploads/'. $movie->image)}}" alt="{{$movie->name}}"
                    style="height: 380px;width:200px;object-fit:cover;margin-right: 30px" />
            </div>
            <div class="entry-info" style="width: 50%;">
                <h1 class="entry-title p-name" itemprop="name headline">
                    <a rel="bookmark" class="u-url url" itemprop="url" style="color: #fe7900;">{{$movie->name}} </a>
                </h1>
                <ul class="info-list">
                    <li>
                        <label class="home_label">Actor:</label>
                        <span>{{$movie->actors}}</span>
                    </li>
                    <li>
                        <label class="home_label">Director</label>
                        <span>{{$movie->directors}}</span>
                    </li>
                    <li>
                        <label class="home_label">Genre:</label>
                        <span>{{$movie->genre}}</span>
                    </li>
                    <li>
                        @foreach($releaseDate as $date)
                    <li>
                        <label class="home_label">Release</label>
                        <span>{{ \Carbon\Carbon::parse($date->start_date)->format('d-F-Y') }}</span>
                    </li>
                    @endforeach
                    </li>
                    <li>
                        <label class="home_label">About:</label>
                        <span>{{$movie->about}} </span>
                    </li>
                </ul>
                <div class="entry-action">
                    <div class="amy-movie-item-button">
                        <a href="{{$movie->trailer}}"
                            class="mt-4 amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                            <i class="fa fa-play"></i>Trailer</a>
                    </div>
                    <div class="clearfix"></div>
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
        <div class="movie-container" id="seatselect">
            <!-- Seat Show -->
        </div>
        <!-- END SEAT -->
        <!-- Display Selected Data -->
        <div id="selectedDataContainer" style="margin-top: 20px;">
            <h3 id="selectedDataTitle">Selected Data</h3>
            <p id="selectedDateDisplay">Selected Date: <span></span></p>
            <p id="selectedTimeDisplay">Selected Time: <span></span></p>
            <p id="selectedSeatsDisplay">Selected Seats: <span></span></p>

            <!-- Add Book and Buy buttons -->
            <button class="button book-button" onclick="bookTicket()">Book</button>
            <button class="button buy-button" onclick="buyTicket()">Buy</button>
        </div>
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
                selectedDate =
                    `${dateElement.children[1].textContent}-${dateElement.children[2].textContent}-${dateElement.children[0].textContent}`;


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

                resetSeatDisplay();
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
                const selectedDate =
                    `${selectedDateElement.children[1].textContent}-${selectedDateElement.children[2].textContent}-${selectedDateElement.children[0].textContent}`;

                selectedTime = timeElement.querySelector('.time').textContent;

                const timeList = document.querySelector('#seatselect');
                seatselect.innerHTML = `
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
                    <div class="seat occupied" style="background-color: white;"></div>
                    <small>Occupied</small>
                </li>
            </ul>

            <div class="container" id="seatContainer">
    <div class="screen text-center">
        {{ $roomName }}
    </div>
    @if($groupedSeats)
        @foreach($groupedSeats as $name => $seatsGroup)
            <div class="row">
                @foreach($seatsGroup as $seat)
                    @php
                        $isOccupied = $seat->isOccupied($date, $time);
                    @endphp
                    <div class="seat @if($isOccupied) occupied @endif" data-seat-id="{{ $seat->id }}" onclick="selectSeat({{ $seat->id }}, this)">
                        {{ $seat->name }} {{ $seat->count }}
                    </div>
                @endforeach
            </div>
        @endforeach
    @endif
</div>
        `;
                fetchOccupiedSeats(selectedDate, selectedTime);
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
                console.log('Selected Seats:', selectedSeats);
                updateSelectedDataDisplay();
            } else {
                console.log('Seat is already occupied and cannot be selected.');
            }
        }

        function updateSelectedDataDisplay() {
            const selectedDateElement = document.querySelector('.date.selected');
            const selectedTimeElement = document.querySelector('.timelist.selected .time');

            if (selectedDateElement && selectedTimeElement) {
                const selectedDate =
                    `${selectedDateElement.children[1].textContent}-${selectedDateElement.children[2].textContent}-${selectedDateElement.children[0].textContent}`;

                const selectedTime = selectedTimeElement.textContent;

                const selectedSeatsDisplay = document.getElementById('selectedSeatsDisplay');
                const selectedSeatsSpan = selectedSeatsDisplay.querySelector('span');

                const selectedSeatsCount = selectedSeats.length;
                selectedSeatsSpan.textContent = selectedSeatsCount > 0 ? `Total Seats: ${selectedSeatsCount}` : 'None';

                const selectedDateDisplay = document.getElementById('selectedDateDisplay');
                selectedDateDisplay.querySelector('span').textContent = selectedDate;

                const selectedTimeDisplay = document.getElementById('selectedTimeDisplay');
                selectedTimeDisplay.querySelector('span').textContent = selectedTime;

                document.getElementById('selectedDataContainer').style.display = 'block';
            }
        }

        function bookTicket() {
            console.log('Booking the ticket...');
            sessionStorage.setItem('selectedDate', selectedDate);
            sessionStorage.setItem('selectedTime', selectedTime);
            sessionStorage.setItem('selectedSeats', JSON.stringify(selectedSeats));
            var movieId = "{{ $movieId }}";
            var cinemaId = "{{ $roomId }}";
            window.location.href = `/${movieId}/${roomId}/book`;
        }

        function buyTicket(bookingRoute) {
            console.log('Buying the ticket...');
            sessionStorage.setItem('selectedDate', selectedDate);
            sessionStorage.setItem('selectedTime', selectedTime);
            sessionStorage.setItem('selectedSeats', JSON.stringify(selectedSeats));
            var movieId = "{{ $movieId }}";
            var cinemaId = "{{ $roomId }}";
            window.location.href = `/${movieId}/${roomId}/buy`;
        }


        document.addEventListener('DOMContentLoaded', function() {
            const submit = document.getElementById('bookingForm');
            submit.addEventListener('click', function() {
                sendSelectedDataToServer(selectedDate, selectedTime, selectedSeats);
            });
        });

        function fetchOccupiedSeats(selectedDate, selectedTime) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const data = {
                date: selectedDate,
                time: selectedTime,
            };

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
                type: 'POST',
                url: `/${movieId}/${roomId}/occupiedSeats`,
                contentType: 'application/json',
                data: JSON.stringify(data),
                success: function(response) {
                    console.log('Occupied seats received from server:', response);
                    const allOccupiedSeats = [...response.occupiedSeats, ...response.occupiedBookingSeats];
                    if (allOccupiedSeats.length > 0) {
                        displayOccupiedSeats(allOccupiedSeats);
                    } else {
                        resetSeatDisplay();
                    }
                },
                error: function(error) {
                    console.error('Error fetching occupied seats:', error);
                }
            });
        }

        function displayOccupiedSeats(selectedSeats) {
            selectedSeats.forEach(seatId => {
                const seatElement = document.querySelector(`.seat[data-seat-id="${seatId}"]`);
                if (seatElement) {
                    seatElement.classList.add('occupied');
                }
            });
        }

        function resetSeatDisplay() {
            const allSeatElements = document.querySelectorAll('.seat');
            allSeatElements.forEach(seatElement => {
                seatElement.classList.remove('occupied');
            });
        }

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
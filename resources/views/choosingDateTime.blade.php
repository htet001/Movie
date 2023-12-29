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
    color: green;
}

.timelist {
    padding: 10px;
    border: 1px solid green;
    margin: 0px 20px;
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
    background-color: #0081cb;
}

.occupied {
    color: black;
    background-color: #fff;
}

.seat:nth-of-type(2) {
    margin-right: 18px;
}

.seat:nth-last-of-type(2) {
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
</style>

<script>
const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

let ticketPrice = +movieSelect.value;

//Update total and count
function updateSelectedCount() {
    const selectedSeats = document.querySelectorAll('.row .seat.selected');
    const selectedSeatsCount = selectedSeats.length;
    count.innerText = selectedSeatsCount;
    total.innerText = selectedSeatsCount * ticketPrice;
}

//Movie Select Event
movieSelect.addEventListener('change', e => {
    ticketPrice = +e.target.value;
    updateSelectedCount();
});

//Seat click event
container.addEventListener('click', e => {
    if (e.target.classList.contains('seat') &&
        !e.target.classList.contains('occupied')) {
        e.target.classList.toggle('selected');
    }
    updateSelectedCount();
});
</script>



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


        <!--Start Choosing Date -->
        <div class="container" id="dateContainer">
            <div class="row">
                <ul style="display: flex;" id="dateList">
                    <!-- Add more date items as needed -->
                    <li onclick="selectDate(this)">
                        <div class="date">
                            <span class="dateItem">MON</span>
                            <span class="dateItem">21</span>
                            <span class="dateItem">DEC</span>
                        </div>
                    </li>
                    <li onclick="selectDate(this)">
                        <div class="date">
                            <span class="dateItem">TUE</span>
                            <span class="dateItem">22</span>
                            <span class="dateItem">DEC</span>
                        </div>
                    </li>
                    <li onclick="selectDate(this)">
                        <div class="date">
                            <span class="dateItem">WED</span>
                            <span class="dateItem">23</span>
                            <span class="dateItem">DEC</span>
                        </div>
                    </li>
                    <li onclick="selectDate(this)">
                        <div class="date">
                            <span class="dateItem">THU</span>
                            <span class="dateItem">24</span>
                            <span class="dateItem">DEC</span>
                        </div>
                    </li>
                    <li onclick="selectDate(this)">
                        <div class="date">
                            <span class="dateItem">FRI</span>
                            <span class="dateItem">25</span>
                            <span class="dateItem">DEC</span>
                        </div>
                    </li>
                    <li onclick="selectDate(this)">
                        <div class="date">
                            <span class="dateItem">SAT</span>
                            <span class="dateItem">26</span>
                            <span class="dateItem">DEC</span>
                        </div>
                    </li>
                    <li onclick="selectDate(this)">
                        <div class="date">
                            <span class="dateItem">SUN</span>
                            <span class="dateItem">27</span>
                            <span class="dateItem">DEC</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <script>
        function selectDate(element) {
            const dateItems = document.querySelectorAll('.date');
            dateItems.forEach(item => item.classList.remove('selected'));

            element.querySelector('.date').classList.add('selected');

            updateTime(element);
        }
        </script>
        <!--End Choosing Date -->
    </div>
</div>

<!-- START CHOOSING TIME -->
<div class="container" style="width: 70%;">
    <div class="entry-content e-content" itemprop="description articleBody">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex">
                    <div style="margin: 10px 0px 10px 60px;width:30%;">
                        <h5>Theater Name</h5>
                        <h5>Location</h5>
                        <h5>Cinema Name</h5>
                    </div>
                    <div>
                        <ul style="display: flex;margin-top:32px;">
                            <li class="timelist">
                                <span class="time">9 : 00 AM</span>
                            </li>
                            <li class="timelist">
                                <span class="time">12 : 00 PM</span>
                            </li>
                            <li class="timelist">
                                <span class="time">3 : 00 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CHOOSING TIME -->

<!-- START SEAT -->
<div class="movie-container">
    <label>Pick a movie: </label>
    <select id="movie">
        <option value="250">Interstellar (Rs. 250)</option>
        <option value="200">Kabir Singh (Rs. 200)</option>
        <option value="150">Duniyadari (Rs. 150)</option>
        <option value="100">Natsamrat (Rs. 100)</option>
    </select>
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
        <div class="screen"></div>

        <div class="row">
            <div class="seat">A1</div>
            <div class="seat">A2</div>
            <div class="seat">A3</div>
            <div class="seat">A4</div>
            <div class="seat">A5</div>
            <div class="seat">A6</div>
            <div class="seat">A7</div>
            <div class="seat">A8</div>
        </div>
        <div class="row">
            <div class="seat">B1</div>
            <div class="seat">B2</div>
            <div class="seat">B3</div>
            <div class="seat occupied">B4</div>
            <div class="seat occupied">B5</div>
            <div class="seat">B6</div>
            <div class="seat">B7</div>
            <div class="seat">B8</div>
        </div>
        <div class="row">
            <div class="seat">C1</div>
            <div class="seat">C2</div>
            <div class="seat">C3</div>
            <div class="seat">C4</div>
            <div class="seat">C5</div>
            <div class="seat">C6</div>
            <div class="seat occupied">C7</div>
            <div class="seat occupied">C8</div>
        </div>
        <div class="row">
            <div class="seat">D1</div>
            <div class="seat">D2</div>
            <div class="seat">D3</div>
            <div class="seat">D4</div>
            <div class="seat">D5</div>
            <div class="seat">D6</div>
            <div class="seat">D7</div>
            <div class="seat">D8</div>
        </div>
        <div class="row">
            <div class="seat">E1</div>
            <div class="seat">E2</div>
            <div class="seat">E3</div>
            <div class="seat occupied">E4</div>
            <div class="seat occupied">E5</div>
            <div class="seat">E6</div>
            <div class="seat">E7</div>
            <div class="seat">E8</div>
        </div>
        <div class="row">
            <div class="seat">F1</div>
            <div class="seat">F2</div>
            <div class="seat">F3</div>
            <div class="seat">F4</div>
            <div class="seat occupied">F5</div>
            <div class="seat occupied">F6</div>
            <div class="seat occupied">F7</div>
            <div class="seat">F8</div>
        </div>

        <p class="text">
            You have selected <span id="count">0</span> seats for the total price of Rs. <span id="total">0</span>
        </p>
        <button class="mb-5" type="submit" id="book"><a href="{{url('/booking')}}">Submit</a></button>
    </div>
</div>

<!-- END SEAT -->







@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Booking</title>
    <style>
    .cardWrap {
        width: 30em;
        margin: 3em auto;
        color: #fff;
        font-family: sans-serif;
    }

    .card {
        background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%);
        height: 18em;
        float: left;
        position: relative;
        padding: 1em;
        margin-top: 100px;
    }

    .cardLeft {
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
        width: 16em;
    }

    .cardRight {
        width: 6.5em;
        border-left: .18em dashed #fff;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    .cardRight:before,
    .cardRight:after {
        content: "";
        position: absolute;
        display: block;
        width: .9em;
        height: .9em;
        background: #fff;
        border-radius: 50%;
    }

    .cardRight:before {
        top: -.4em;
    }

    .cardRight:after {
        bottom: -.4em;
    }

    h1 {
        font-size: 1.1em;
        margin-top: 13px;
        margin-bottom: 26px;
    }

    h1 span {
        font-weight: normal;
    }

    .title,
    .name,
    .seat,
    .time {
        text-transform: uppercase;
        font-weight: normal;
    }

    .title h2,
    .name h2,
    .seat h2,
    .time h2 {
        font-size: .9em;
        color: #525252;
        margin: 0;
    }

    .title span,
    .name span,
    .seat span,
    .time span {
        font-size: .7em;
        color: #a2aeae;
    }

    .title {
        margin: 1em 0 0 0;
    }

    .name,
    .seat {
        margin: .7em 0 0 0;
    }

    .time {
        margin: .7em 0 0 1em;
    }

    .seat,
    .time {
        float: left;
    }

    .eye {
        position: relative;
        width: 2em;
        height: 1.5em;
        background: #fff;
        margin: 13px auto;
        border-radius: 1em/0.6em;
        z-index: 1;
    }

    .eye:before,
    .eye:after {
        content: "";
        display: block;
        position: absolute;
        border-radius: 50%;
    }

    .eye:before {
        width: 1em;
        height: 1em;
        background: #e84c3d;
        z-index: 2;
        left: 8px;
        top: 4px;
    }

    .eye:after {
        width: .5em;
        height: .5em;
        background: #fff;
        z-index: 3;
        left: 12px;
        top: 8px;
    }

    .number {
        text-align: center;
        text-transform: uppercase;
    }

    .number h3 {
        color: #e84c3d;
        margin: .9em 0 0 0;
        font-size: 2.5em;
    }

    .number span {
        display: block;
        color: #a2aeae;
    }
    </style>
</head>

<body>
    <div class="cardWrap">
        <div class="card cardLeft">
            <h1>Movie <span>Vibe</span></h1>
            <div class="title">
                <h2>{{ $userName }}</h2>
                <span>Account name</span>
            </div>
            <div class="title">
                <h2>{{ $movie }}</h2>
                <span>movie name</span>
            </div>
            <div class="name">
                <h2>{{ $room }}</h2>
                <span>Room</span>
            </div>
            <div class="time">
                <h2>{{ $date }}</h2>
                <span>date</span>
            </div>
            <div class="time">
                <h2>{{ $time }}</h2>
                <span>time</span>
            </div>
        </div>
        <div class="card cardRight">
            <div class="eye"></div>
            <div class="number">
                <h3>{{ $seatName }}{{$seatCount}}</h3>
                <span>seat</span>
            </div>
            <!-- <div class="seat">
                <h2></h2>
                <span>seat</span>
            </div> -->
        </div>
    </div>
</body>

</html>
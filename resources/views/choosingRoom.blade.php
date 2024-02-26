@extends('layout.master')
@section('title','Choosing Room')
@section('content')
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
<div class="elementor-element elementor-element-46cb6f1 elementor-widget elementor-widget-Amy_V2_Movie_Heading"
    data-id="46cb6f1" data-element_type="widget" data-widget_type="Amy_V2_Movie_Heading.default">
    <div class="elementor-widget-container">
        <div class="amy-heading text-center has-seperator seperator-2 ">
            <header class="entry-header"><span class="seperator seperator-left"></span>
                <h2 class="title-heading"><span class="title">Choose </span><span class="title-highlight">Room</span>
                </h2><span class="seperator seperator-right"></span>
            </header>
        </div>
        <!-- Start Cinema -->
        <div class="container text-center" style=" display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;">
            <div class="entry-content e-content">
                <div class="card-container">
                    @foreach ($rooms as $room)
                    <div class="card mb-5" style="width: 50%;
            margin: 0 10px 20px;">
                        <div class="card-body" style="text-align: left;">
                            <div class="d-flex">
                                <img src="{{ asset('uploads/' . $room->image) }}" alt="{{ $room->name }}"
                                    id="theaterImage">
                                <div class="ml-3">
                                    <h5 class="card-title mb-4" style="font-size: 20px;">{{ $room->name }}</h5>
                                    <p class="card-text">{{ $room->description }}</p>
                                    <div class="mrate no-rate">
                                        <a href="{{ url($movie->id.'/'.$room->id.'/choosingDateTime') }}"
                                            class="book_button">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Cinema -->
    </div>
</div>
@endsection
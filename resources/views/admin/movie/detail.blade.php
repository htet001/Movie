@extends('layout.master')
@section('title','Movie Detail')
@section('content')
<section class="main-content amy-movie single-movie layout-right no-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="page-content">
                    <article id="post-457"
                        class="post-457 amy_tvshow type-amy_tvshow status-publish amy_genre-drama amy_genre-magic amy_genre-sci-fi amy_actor-alexander-cattly amy_actor-cartin-hollia amy_actor-greta-garbo amy_actor-humpray-richard amy_actor-martin-brando amy_director-grace-belly amy_director-kingia-rogers">
                        <div class="entry-top">
                            <div class="entry-poster">
                                <img class="" src="{{asset('/uploads/'. $movie->image)}}" alt="{{$movie->name}}"
                                    style="height: 380px;width:200px;object-fit:cover;" />
                            </div>
                            <div class="entry-info">
                                <h1 class="entry-title p-name" itemprop="name headline">
                                    <a rel="bookmark" class="u-url url" itemprop="url"
                                        style="color: #fe7900;">{{$movie->name}} </a>
                                </h1>
                                <ul class="info-list">
                                    <li>
                                        <label>Actor:</label>
                                        <span>{{$movie->actors}}</span>
                                    </li>
                                    <li>
                                        <label>Director</label>
                                        <span>{{$movie->directors}}</span>
                                    </li>
                                    <li>
                                        <label>Genre:</label>
                                        <span>{{$movie->genre}}</span>
                                    </li>
                                    @foreach($releaseDate as $date)
                                    <li>
                                        <label>Release</label>
                                        <span>{{ \Carbon\Carbon::parse($date->start_date)->format('d-F-Y') }}</span>
                                    </li>
                                    @endforeach
                                    <li>
                                        <label>About:</label>
                                        <span>{{ implode(' ', array_slice(str_word_count($movie->about, 1), 0, 40)) }}</span>
                                    </li>
                                </ul>
                                <div class="entry-action">
                                    <div class="entry-share">
                                        <label>Share:</label>
                                        <ul class="amy-social-links clearfix">
                                            <li><a class="fab fa-facebook" target="_blank"></a></li>
                                            <li><a class="fab fa-twitter" target="_blank"></a></li>
                                            <li><a class="fab fa-pinterest" target="_blank"></a></li>
                                        </ul>
                                    </div>
                                    <div class="amy-movie-item-button">
                                        <a href="{{$movie->trailer}}"
                                            class="mt-4 amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                            <i class="fa fa-play"></i>Trailer</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- Start Cinema List -->
                        <div class="entry-content e-content" itemprop="description articleBody">
                            <h1 class="text-center mb-4" style="color: #fe7900;">Cinema</h1>
                            <!-- MovieController show method -->
                            @foreach($cinemas as $cinema)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="{{ asset('uploads/'.$cinema->image) }}" alt="{{ $cinema->name }}"
                                            id="theaterImage">
                                        <div>
                                            <h5 class="card-title" style="font-size: 20px;">{{ $cinema->name }}</h5>
                                            <p class="card-text" style="font-size: 15px;">Location:
                                                {{ $cinema->location }}
                                            </p>
                                            <div class="mrate no-rate">
                                                <a href="{{ url($movie->id.'/'.$cinema->id.'/choosingRoom/') }}"
                                                    class="book_button">View Rooms</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- End Cinema List -->
                    </article>
                </div>
            </div>
            <div class="col-md-4 amy-sidebar-clear">
                <div class="amy-page-sidebar amy-sidebar-right">
                    <aside id="sidebar">
                        <div class="amy-widget amy-widget-list">
                            <div class="amy-widget amy-widget-list list-movie ">
                                <h4 class="amy-title amy-widget-title">Suggest Movie</h4>
                                @foreach($nowMovie as $movie)
                                <div class="entry-item">
                                    <div class="entry-thumb"><img class="" src="{{asset('/uploads/'. $movie->image)}}"
                                            alt="Kubo and the Two Strings" style="width: 120px;height: 170px" />
                                    </div>
                                    <div class="entry-content">
                                        <h2 class="entry-title">
                                            <a href="">{{$movie->name}}</a>
                                        </h2>
                                        <div class="genre">
                                            <span>
                                                <a href="">{{$movie->genre}}</a>,
                                            </span>
                                        </div>
                                        <div class="about">
                                            <span>
                                                <a
                                                    href="">{{ implode(' ', array_slice(str_word_count($movie->about, 1), 0, 20)) }}.....</a>,
                                            </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
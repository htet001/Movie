@extends('layout.master')
@section('title','Choosing Cinema')
@section('content')
<div class="page-content my-5">
    <article id="post-457" class="post-457 amy_tvshow type-amy_tvshow status-publish amy_genre-drama amy_genre-magic amy_genre-sci-fi amy_actor-alexander-cattly amy_actor-cartin-hollia amy_actor-greta-garbo amy_actor-humpray-richard amy_actor-martin-brando amy_director-grace-belly amy_director-kingia-rogers">
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
                            <a href="../../amy_actor/cartin-hollia/index.html">Cartin Hollia</a>, <a href="../../amy_actor/greta-garbo/index.html">Greta Garbo</a>, <a href="../../amy_actor/humpray-richard/index.html">Humpray Richard</a>,
                            <a href="../../amy_actor/martin-brando/index.html">Martin Brando</a> </span>
                    </li>
                    <li>
                        <label>
                            Director:
                        </label>
                        <span>
                            <a href="../../amy_director/grace-belly/index.html">Grace Belly</a>, <a href="../../amy_director/kingia-rogers/index.html">Kingia Rogers</a>
                        </span>
                    </li>
                    <li>
                        <label>
                            Genre:
                        </label>
                        <span>
                            <a href="../../amy_genre/drama/index.html">Drama</a>, <a href="../../amy_genre/magic/index.html">Magic</a>, <a href="../../amy_genre/sci-fi/index.html">Sci-fi</a> </span>
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
                            <li style="display: inline;"><a href="https://www.facebook.com/sharer.php?u=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/" class="fab fa-facebook" target="_blank"></a></li>
                            <li style="display: inline;"><a href="http://www.twitter.com/share?url=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/" class="fab fa-twitter" target="_blank"></a></li>
                            <li style="display: inline;"><a href="http://pinterest.com/pin/create/button/?url=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/" class="fab fa-pinterest" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<div class="elementor-element elementor-element-46cb6f1 elementor-widget elementor-widget-Amy_V2_Movie_Heading" data-id="46cb6f1" data-element_type="widget" data-widget_type="Amy_V2_Movie_Heading.default">
    <div class="elementor-widget-container">
        <div class="amy-heading text-center has-seperator seperator-2 ">
            <header class="entry-header"><span class="seperator seperator-left"></span>
                <h2 class="title-heading"><span class="title">Choose </span><span class="title-highlight">Cinema</span>
                </h2><span class="seperator seperator-right"></span>
            </header>
        </div>

        <!-- Start Cinema -->
        <div class="entry-content e-content" itemprop="description articleBody">
            <div class="card mb-5">
                @foreach ($theaterWithCinemas->rooms as $cinema)
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{asset('uploads/'.$cinema->image  )}}" alt="Junction City" id="theaterImage">
                        <div>
                            <h5 class="card-title mb-3">{{$cinema->cinema->name}}</h5>
                            <h5 class="card-title mb-3">{{$cinema->name}}</h5>
                            <div class="mrate  no-rate">
                                <a href="{{url('/choosingDateTime')}}" class="book_button">Book</a>
                                <a href="{{url('/choosingDateTime')}}" class="book_button">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Cinema -->

    </div>
</div>
@endsection
@extends('layout.master')

@section('title','Movie Detail')

@section('content')
<section class="main-content amy-movie single-movie layout-right no-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="width: 80%;">
                <div class="page-content">
                    <article id="post-457"
                        class="post-457 amy_tvshow type-amy_tvshow status-publish amy_genre-drama amy_genre-magic amy_genre-sci-fi amy_actor-alexander-cattly amy_actor-cartin-hollia amy_actor-greta-garbo amy_actor-humpray-richard amy_actor-martin-brando amy_director-grace-belly amy_director-kingia-rogers">
                        <div class="entry-top">
                            <div class="entry-poster">
                                <img class="" src="{{asset('/uploads/'. $movie->image)}}" alt="{{$movie->name}}"
                                    style="height: 400px;width:250px;object-fit:cover;" />
                            </div>
                            <div class="entry-info" style="padding-left: 150px;">
                                <h1 class="entry-title p-name" itemprop="name headline">
                                    <a href="index.html" rel="bookmark" class="u-url url"
                                        itemprop="url">{{$movie->name}} </a>
                                </h1>
                                <div class="entry-pg">
                                </div>
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
                                    <li>
                                        <label>Release</label>
                                        <span>May 19, 2022 </span>
                                    </li>
                                    <li>
                                        <label>About:</label>
                                        <span>{{$movie->about}} </span>
                                    </li>
                                </ul>
                                <div class="entry-action">
                                    <div class="entry-share" style="padding-top: 24px;">
                                        <label>Share:</label>
                                        <ul class="amy-social-links clearfix">
                                            <li><a href="https://www.facebook.com/sharer.php?u=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/"
                                                    class="fab fa-facebook" target="_blank"></a></li>
                                            <li><a href="http://www.twitter.com/share?url=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/"
                                                    class="fab fa-twitter" target="_blank"></a></li>
                                            <li><a href="http://pinterest.com/pin/create/button/?url=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/"
                                                    class="fab fa-pinterest" target="_blank"></a></li>
                                        </ul>
                                    </div>
                                    <div class="amy-movie-item-button" style="padding-top: 25px;">
                                        <a href="{{$movie->trailer}}"
                                            class="mt-4 amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                            <i class="fa fa-play"
                                                style="font-size: 19px;width: 40px;height: 40px;padding-left: 3px;padding-top: 9px;margin-top: -11px"></i>Watch
                                            Movie</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@extends('layout.master')

@section('title','Movie Detail')

@section('content')
<section class="main-content amy-movie single-movie layout-right no-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="page-content">
                    <article id="post-457" class="post-457 amy_tvshow type-amy_tvshow status-publish amy_genre-drama amy_genre-magic amy_genre-sci-fi amy_actor-alexander-cattly amy_actor-cartin-hollia amy_actor-greta-garbo amy_actor-humpray-richard amy_actor-martin-brando amy_director-grace-belly amy_director-kingia-rogers">
                        @foreach($movies as $movie)
                        <div class="entry-top">
                            <div class="entry-poster">
                                <img class="" src="{{asset('/uploads/'. $movie->image)}}" alt="{{$movie->name}}" style="height: 400px;width:200px;" />
                            </div>
                            <div class="entry-info">
                                <h1 class="entry-title p-name" itemprop="name headline">
                                    <a href="index.html" rel="bookmark" class="u-url url" itemprop="url">{{$movie->name}} </a>
                                </h1>
                                <div class="entry-pg">
                                    <span class="duration"><i class="fa fa-clock-o"></i>02 hours 30 minutes </span>
                                </div>
                                <ul class="info-list">
                                    <li>
                                        <label>Actor:</label>
                                        <span>
                                            <a href="../../amy_actor/alexander-cattly/index.html">Alexander Cattly</a>,
                                            <a href="../../amy_actor/cartin-hollia/index.html">Cartin Hollia</a>,
                                            <a href="../../amy_actor/greta-garbo/index.html">Greta Garbo</a>,
                                            <a href="../../amy_actor/humpray-richard/index.html">Humpray Richard</a>,
                                            <a href="../../amy_actor/martin-brando/index.html">Martin Brando</a>
                                        </span>
                                    </li>
                                    <li>
                                        <label>Director</label>
                                        <span>
                                            <a href="../../amy_director/grace-belly/index.html">Grace Belly</a>,
                                            <a href="../../amy_director/kingia-rogers/index.html">Kingia Rogers</a>
                                        </span>
                                    </li>
                                    <li>
                                        <label>Genre:</label>
                                        <span>
                                            <a href="../../amy_genre/drama/index.html">Drama</a>,
                                            <a href="../../amy_genre/magic/index.html">Magic</a>,
                                            <a href="../../amy_genre/sci-fi/index.html">Sci-fi</a>
                                        </span>
                                    </li>
                                    <li>
                                        <label>Release</label>
                                        <span>May 19, 2022 </span>
                                    </li>
                                    <li>
                                        <label>Language:</label>
                                        <span>English </span>
                                    </li>
                                    <li>
                                        <label>IMDB Rating:</label>
                                        <span>9.3 </span>
                                    </li>
                                </ul>
                                <div class="entry-action">
                                    <div class="entry-share">
                                        <label>Share:</label>
                                        <ul class="amy-social-links clearfix">
                                            <li><a href="https://www.facebook.com/sharer.php?u=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/" class="fab fa-facebook" target="_blank"></a></li>
                                            <li><a href="http://www.twitter.com/share?url=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/" class="fab fa-twitter" target="_blank"></a></li>
                                            <li><a href="http://pinterest.com/pin/create/button/?url=http://demo.amytheme.com/movie/demo/elementor-movie-news/amy_tvshow/vikings/" class="fab fa-pinterest" target="_blank"></a></li>
                                        </ul>
                                    </div>
                                    <div class="amy-movie-item-button">
                                        <a href="{{$movie->trailer}}" class="mt-4 amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                            <i class="fa fa-play"></i>Trailer</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                        <div class="entry-content e-content" itemprop="description articleBody">
                            <h1 class="text-center mb-4">Theater List</h1>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/junction-city.jpg') }}" alt="Junction City" id="theaterImage">
                                        <div>
                                            <h5 class="card-title">Theater Name 1</h5>
                                            <p class="card-text">Location: City, State</p>
                                            <div class="mrate  no-rate">
                                                <a href="{{url('/bookAndBuy')}}" class="book_button">Cinema 1</a>
                                                <a href="{{url('/bookAndBuy')}}" class="book_button">Cinema 2</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/junction-city.jpg') }}" alt="Junction City" id="theaterImage">
                                        <div>
                                            <h5 class="card-title">Theater Name 1</h5>
                                            <p class="card-text">Location: City, State</p>
                                            <div class="mrate  no-rate">
                                                <a href="{{url('/bookAndBuy')}}" class="book_button">Cinema 1</a>
                                                <a href="{{url('/bookAndBuy')}}" class="book_button">Cinema 2</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="{{ asset('images/junction-city.jpg') }}" alt="Junction City" id="theaterImage">
                                        <div>
                                            <h5 class="card-title">Theater Name 1</h5>
                                            <p class="card-text">Location: City, State</p>
                                            <div class="mrate  no-rate">
                                                <a href="{{url('/bookAndBuy')}}" class="book_button">Cinema 1</a>
                                                <a href="{{url('/bookAndBuy')}}" class="book_button">Cinema 2</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-4 amy-sidebar-clear">
                <div class="amy-page-sidebar amy-sidebar-right">
                    <aside id="sidebar">
                        <div class="amy-widget amy-widget-list">
                            <div class="amy-widget amy-widget-list list-movie ">
                                <h4 class="amy-title amy-widget-title">Suggest Movie</h4>
                                <div class="entry-item">
                                    <div class="entry-thumb"><img class="" src="../../wp-content/uploads/sites/8/2022/05/img_20-118x159_c.jpg" alt="Kubo and the Two Strings" />
                                    </div>
                                    <div class="entry-content">
                                        <h2 class="entry-title">
                                            <a href="../../amy_movie/kubo-and-the-two-strings/index.html">Kubo and the
                                                Two Strings</a>
                                        </h2>
                                        <div>
                                            <span class="duration"><i class="fa fa-clock-o"></i>02 hours 00
                                                minutes</span>
                                        </div>
                                        <div class="genre">
                                            <span>
                                                <a href="../../amy_genre/cartoon/index.html">Cartoon</a>,
                                                <a href="../../amy_genre/comic/index.html">Comic</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="entry-item">
                                    <div class="entry-thumb"><img class="" src="../../wp-content/uploads/sites/8/2022/05/img_20-1-118x159_c.jpg" alt="The Hurricane Heist" /></div>
                                    <div class="entry-content">
                                        <h2 class="entry-title"><a href="../../amy_movie/the-hurricane-heist/index.html">The Hurricane
                                                Heist</a></h2>
                                        <div><span class="duration"><i class="fa fa-clock-o"></i>01 hours 30
                                                minutes</span></div>
                                        <div class="genre"><span><a href="../../amy_genre/comic/index.html">Comic</a>,
                                                <a href="../../amy_genre/magic/index.html">Magic</a></span></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="entry-item">
                                    <div class="entry-thumb"><img class="" src="../../wp-content/uploads/sites/8/2022/05/img_19-118x159_c.jpg" alt="Jumanji: Welcome to the Jungle" /></div>
                                    <div class="entry-content">
                                        <h2 class="entry-title"><a href="../../amy_movie/jumanji-welcome-to-the-jungle/index.html">Jumanji:
                                                Welcome to the Jungle</a></h2>
                                        <div><span class="duration"><i class="fa fa-clock-o"></i>02 hours 30
                                                minutes</span></div>
                                        <div class="genre"><span><a href="../../amy_genre/cartoon/index.html">Cartoon</a>, <a href="../../amy_genre/sci-fi/index.html">Sci-fi</a></span></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="entry-item">
                                    <div class="entry-thumb"><img class="" src="../../wp-content/uploads/sites/8/2022/05/img_19-118x159_c.jpg" alt="Jumanji: Welcome to the Jungle" /></div>
                                    <div class="entry-content">
                                        <h2 class="entry-title"><a href="../../amy_movie/jumanji-welcome-to-the-jungle/index.html">Jumanji:
                                                Welcome to the Jungle</a></h2>
                                        <div><span class="duration"><i class="fa fa-clock-o"></i>02 hours 30
                                                minutes</span></div>
                                        <div class="genre"><span><a href="../../amy_genre/cartoon/index.html">Cartoon</a>, <a href="../../amy_genre/sci-fi/index.html">Sci-fi</a></span></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
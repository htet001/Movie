@extends('layout.master')
@section('title','Movie')
@section('content')
<!-- COMMING SOON ADS START-->
<div class="amy-shortcode amy-mv-slide">
    <div class="amy-slick " data-slick='{"slidesToShow":1,"slidesToScroll":1,"autoplay":true,"autoplaySpeed":3000,"prevArrow": "<a class=\"amy-arrow fa amy-pre fa-chevron-right\"></a>","nextArrow": "<a class=\"amy-arrow fa amy-next fa-chevron-left\"></a>","arrows":true,"infinite":true,"fade":true,"useCSS":true,"useTransform":true,"dots":true}'>
        @foreach($movies as $movie)
        <div class="slide-item">
            <div class="slide-thumb">
                <a href="amy_movie/the-hurricane-heist/index.html">
                    <img src="{{asset('/uploads/'. $movie->slider_image)}}" style="width: 100%;height:500px;" alt="The Hurricane Heist" /> </a>
            </div>
            <div class="slide-content">
                <h2 style="text-align: left;">
                    <a href=""><span>{{$movie->name}}</span></a>
                </h2>
                <div class="slide-release">
                    From <span>
                        Apr 29 </span>
                </div>
                <div class="slide-desc">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab ...</p>
                </div>
                <div class="slide-button">
                    <a href="{{$movie->trailer}}" class="fancybox.iframe amy-fancybox">
                        <i aria-hidden="true" class="fa fa-play"></i>
                        Trailer </a>
                    <a href="{{url('movie/detail/'.$movie->id)}}">
                        <i aria-hidden="true" class="fa fa-exclamation"></i>
                        Detail </a>
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div class="slide-item">
            <div class="slide-thumb">
                <a href="amy_movie/jumanji-welcome-to-the-jungle/index.html">
                    <img src="wp-content/uploads/sites/8/2022/05/img_26.jpg" alt="Jumanji: Welcome to the Jungle" />
                </a>
            </div>
            <div class="slide-content">
                <h2 class="slide-title">
                    <a href="amy_movie/jumanji-welcome-to-the-jungle/index.html">
                        Jumanji: Welcome to the <span class="last_word">Jungle</span> </a>
                </h2>
                <div class="slide-release">
                    From <span>
                        Feb 16 </span>
                </div>
                <div class="slide-desc">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab ...</p>
                </div>
                <div class="slide-button">
                    <a href="https://player.vimeo.com/video/51834631" class="fancybox.iframe amy-fancybox">
                        <i aria-hidden="true" class="fa fa-play"></i>
                        Trailer </a>
                    <a href="{{url('movie/{id}/detail')}}">
                        <i aria-hidden="true" class="fa fa-exclamation"></i>
                        Detail </a>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- COMMING SOON ADS END-->

<!-- NEW MOVIES START -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-e615b68 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e615b68" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a503e51" data-id="a503e51" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-46cb6f1 elementor-widget elementor-widget-Amy_V2_Movie_Heading" data-id="46cb6f1" data-element_type="widget" data-widget_type="Amy_V2_Movie_Heading.default">
                    <div class="elementor-widget-container">
                        <div class="amy-heading text-center has-seperator    seperator-2 ">
                            <header class="entry-header"><span class="seperator seperator-left"></span>
                                <h2 class="title-heading"><span class="title">Newest </span><span class="title-highlight">Movie</span></h2><span class="seperator seperator-right"></span>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3ec453f elementor-widget elementor-widget-Amy_V2_Movie_Grid" data-id="3ec453f" data-element_type="widget" data-widget_type="Amy_V2_Movie_Grid.default">
                    <div class="elementor-widget-container">

                        <div class="amy-movie-grid amy-movie-grid-1 ">
                            <div class="amy-movie-list">

                                <div class="amy-movie-items " data-tooltip-style="dark" data-column="5">
                                    <div class="amy-movie-item col-md-15 col-sm-4 col-xs-6 ">
                                        <div class="amy-movie-item-front">
                                            <div class="amy-movie-item-poster tooltip tooltipstered" data-tooltip-content="#amy-movie-item-1179">
                                                <a href="amy_movie/kubo-and-the-two-strings/index.html">
                                                    <img class="" src="wp-content/uploads/sites/8/2022/05/img_11-196x336_c.jpg" alt="Kubo and the Two Strings" />
                                                </a>
                                                <span class="amy-movie-field-mpaa">G</span> <span class="amy-movie-field-imdb">8.5</span>
                                            </div>

                                            <div class="amy-movie-item-content">
                                                <h3 class="amy-movie-field-title"><a href="amy_movie/kubo-and-the-two-strings/index.html">Kubo and
                                                        the Two Strings</a></h3>
                                                <div class="amy-movie-field-release-date">
                                                    February 15, 2022 </div>
                                            </div>
                                        </div>

                                        <div class="amy-movie-item-back" id="amy-movie-item-1179">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">8.5</span>
                                                    <h3 class="amy-movie-field-title"><a href="amy_movie/kubo-and-the-two-strings/index.html">Kubo
                                                            and the Two Strings</a></h3>

                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">G</span>
                                                        <span class="amy-movie-field-duration"><i class="fa fa-clock-o"></i>02 hours 00 minutes</span>
                                                    </div>

                                                    <div class="amy-movie-field-desc">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                            voluptatem accusantium doloremque laudantium, totam rem
                                                            aperiam, ...</p>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Language:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            English
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Release
                                                            Date:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            February 15, 2022
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="amy-movie-custom-field-label">Genre:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_genre/cartoon/index.html">Cartoon</a>, <a href="amy_genre/comic/index.html">Comic</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                        <label class="amy-movie-custom-field-label">Actor:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_actor/alexander-cattly/index.html">Alexander
                                                                Cattly</a>, <a href="amy_actor/cartin-hollia/index.html">Cartin
                                                                Hollia</a>, <a href="amy_actor/greta-garbo/index.html">Greta Garbo</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                        <label class="amy-movie-custom-field-label">Director:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_director/grace-belly/index.html">Grace
                                                                Belly</a>, <a href="amy_director/mae-west/index.html">Mae West</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="amy-movie-item-button">
                                                    <a href="https://player.vimeo.com/video/51834631" class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-play"></i>Trailer</a>
                                                    <a class="amy-btn-icon-text link-detail" href="amy_movie/kubo-and-the-two-strings/index.html">
                                                        <i class="fa fa-info"></i>Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="amy-movie-item col-md-15 col-sm-4 col-xs-6 ">
                                        <div class="amy-movie-item-front">
                                            <div class="amy-movie-item-poster tooltip tooltipstered" data-tooltip-content="#amy-movie-item-1176">
                                                <a href="amy_movie/the-hurricane-heist/index.html">
                                                    <img class="" src="wp-content/uploads/sites/8/2022/05/img_20-1-214x368_c.jpg" alt="The Hurricane Heist" />
                                                </a>
                                                <span class="amy-movie-field-mpaa">G</span> <span class="amy-movie-field-imdb">7.8</span>
                                            </div>

                                            <div class="amy-movie-item-content">
                                                <h3 class="amy-movie-field-title"><a href="amy_movie/the-hurricane-heist/index.html">The Hurricane
                                                        Heist</a></h3>
                                                <div class="amy-movie-field-release-date">
                                                    April 29, 2022 </div>
                                            </div>
                                        </div>

                                        <div class="amy-movie-item-back" id="amy-movie-item-1176">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">7.8</span>
                                                    <h3 class="amy-movie-field-title"><a href="amy_movie/the-hurricane-heist/index.html">The
                                                            Hurricane Heist</a></h3>

                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">G</span>
                                                        <span class="amy-movie-field-duration"><i class="fa fa-clock-o"></i>01 hours 30 minutes</span>
                                                    </div>

                                                    <div class="amy-movie-field-desc">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                            voluptatem accusantium doloremque laudantium, totam rem
                                                            aperiam, ...</p>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Language:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            English
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Release
                                                            Date:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            April 29, 2022
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="amy-movie-custom-field-label">Genre:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_genre/comic/index.html">Comic</a>, <a href="amy_genre/magic/index.html">Magic</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                        <label class="amy-movie-custom-field-label">Actor:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_actor/alexander-cattly/index.html">Alexander
                                                                Cattly</a>, <a href="amy_actor/greta-garbo/index.html">Greta Garbo</a>,
                                                            <a href="amy_actor/humpray-richard/index.html">Humpray
                                                                Richard</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                        <label class="amy-movie-custom-field-label">Director:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_director/gally-peckin/index.html">Gally
                                                                Peckin</a>, <a href="amy_director/mae-west/index.html">Mae West</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="amy-movie-item-button">
                                                    <a href="https://player.vimeo.com/video/51834631" class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-play"></i>Trailer</a>
                                                    <a class="amy-btn-icon-text link-detail" href="amy_movie/the-hurricane-heist/index.html">
                                                        <i class="fa fa-info"></i>Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="amy-movie-item col-md-15 col-sm-4 col-xs-6 ">
                                        <div class="amy-movie-item-front">
                                            <div class="amy-movie-item-poster tooltip tooltipstered" data-tooltip-content="#amy-movie-item-1174">
                                                <a href="amy_movie/jumanji-welcome-to-the-jungle/index.html">
                                                    <img class="" src="wp-content/uploads/sites/8/2022/05/img_19-214x368_c.jpg" alt="Jumanji: Welcome to the Jungle" />
                                                </a>
                                                <span class="amy-movie-field-mpaa">G</span> <span class="amy-movie-field-imdb">8.2</span>
                                            </div>

                                            <div class="amy-movie-item-content">
                                                <h3 class="amy-movie-field-title"><a href="amy_movie/jumanji-welcome-to-the-jungle/index.html">Jumanji:
                                                        Welcome to the Jungle</a></h3>
                                                <div class="amy-movie-field-release-date">
                                                    February 16, 2022 </div>
                                            </div>
                                        </div>

                                        <div class="amy-movie-item-back" id="amy-movie-item-1174">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">8.2</span>
                                                    <h3 class="amy-movie-field-title"><a href="amy_movie/jumanji-welcome-to-the-jungle/index.html">Jumanji:
                                                            Welcome to the Jungle</a></h3>

                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">G</span>
                                                        <span class="amy-movie-field-duration"><i class="fa fa-clock-o"></i>02 hours 30 minutes</span>
                                                    </div>

                                                    <div class="amy-movie-field-desc">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                            voluptatem accusantium doloremque laudantium, totam rem
                                                            aperiam, ...</p>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Language:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            English
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Release
                                                            Date:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            February 16, 2022
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="amy-movie-custom-field-label">Genre:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_genre/cartoon/index.html">Cartoon</a>, <a href="amy_genre/sci-fi/index.html">Sci-fi</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                        <label class="amy-movie-custom-field-label">Actor:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_actor/alexander-cattly/index.html">Alexander
                                                                Cattly</a>, <a href="amy_actor/cartin-hollia/index.html">Cartin
                                                                Hollia</a>, <a href="amy_actor/humpray-richard/index.html">Humpray
                                                                Richard</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                        <label class="amy-movie-custom-field-label">Director:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_director/gally-peckin/index.html">Gally
                                                                Peckin</a>, <a href="amy_director/mae-west/index.html">Mae West</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="amy-movie-item-button">
                                                    <a href="https://player.vimeo.com/video/51834631" class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-play"></i>Trailer</a>
                                                    <a class="amy-btn-icon-text link-detail" href="amy_movie/jumanji-welcome-to-the-jungle/index.html">
                                                        <i class="fa fa-info"></i>Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="amy-movie-item col-md-15 col-sm-4 col-xs-6 ">
                                        <div class="amy-movie-item-front">
                                            <div class="amy-movie-item-poster tooltip tooltipstered" data-tooltip-content="#amy-movie-item-1172">
                                                <a href="amy_movie/death-wish/index.html">
                                                    <img class="" src="wp-content/uploads/sites/8/2022/05/img_19-1-214x368_c.jpg" alt="Death Wish" />
                                                </a>
                                                <span class="amy-movie-field-mpaa">G</span> <span class="amy-movie-field-imdb">7.3</span>
                                            </div>

                                            <div class="amy-movie-item-content">
                                                <h3 class="amy-movie-field-title"><a href="amy_movie/death-wish/index.html">Death Wish</a></h3>
                                                <div class="amy-movie-field-release-date">
                                                    April 23, 2022 </div>
                                            </div>
                                        </div>

                                        <div class="amy-movie-item-back" id="amy-movie-item-1172">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">7.3</span>
                                                    <h3 class="amy-movie-field-title"><a href="amy_movie/death-wish/index.html">Death Wish</a></h3>

                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">G</span>
                                                        <span class="amy-movie-field-duration"><i class="fa fa-clock-o"></i>01 hours 00 minutes</span>
                                                    </div>

                                                    <div class="amy-movie-field-desc">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                            voluptatem accusantium doloremque laudantium, totam rem
                                                            aperiam, ...</p>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Language:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            English
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Release
                                                            Date:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            April 23, 2022
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="amy-movie-custom-field-label">Genre:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_genre/cartoon/index.html">Cartoon</a>, <a href="amy_genre/comic/index.html">Comic</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                        <label class="amy-movie-custom-field-label">Actor:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_actor/cartin-hollia/index.html">Cartin
                                                                Hollia</a>, <a href="amy_actor/greta-garbo/index.html">Greta Garbo</a>,
                                                            <a href="amy_actor/martin-brando/index.html">Martin
                                                                Brando</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                        <label class="amy-movie-custom-field-label">Director:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_director/kingia-rogers/index.html">Kingia
                                                                Rogers</a>, <a href="amy_director/mae-west/index.html">Mae West</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="amy-movie-item-button">
                                                    <a href="https://player.vimeo.com/video/51834631" class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-play"></i>Trailer</a>
                                                    <a class="amy-btn-icon-text link-detail" href="amy_movie/death-wish/index.html">
                                                        <i class="fa fa-info"></i>Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="amy-movie-item col-md-15 col-sm-4 col-xs-6 ">
                                        <div class="amy-movie-item-front">
                                            <div class="amy-movie-item-poster tooltip tooltipstered" data-tooltip-content="#amy-movie-item-1170">
                                                <a href="amy_movie/supersonic/index.html">
                                                    <img class="" src="wp-content/uploads/sites/8/2022/05/img_18-214x368_c.jpg" alt="Supersonic" />
                                                </a>
                                                <span class="amy-movie-field-mpaa">G</span> <span class="amy-movie-field-imdb">9.3</span>
                                            </div>

                                            <div class="amy-movie-item-content">
                                                <h3 class="amy-movie-field-title"><a href="amy_movie/supersonic/index.html">Supersonic</a></h3>
                                                <div class="amy-movie-field-release-date">
                                                    April 9, 2022 </div>
                                            </div>
                                        </div>

                                        <div class="amy-movie-item-back" id="amy-movie-item-1170">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <span class="amy-movie-field-imdb">9.3</span>
                                                    <h3 class="amy-movie-field-title"><a href="amy_movie/supersonic/index.html">Supersonic</a></h3>

                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-mpaa">G</span>
                                                        <span class="amy-movie-field-duration"><i class="fa fa-clock-o"></i>02 hours 00 minutes</span>
                                                    </div>

                                                    <div class="amy-movie-field-desc">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                            voluptatem accusantium doloremque laudantium, totam rem
                                                            aperiam, ...</p>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-language">
                                                        <label class="amy-movie-custom-field-label">Language:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            English
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Release
                                                            Date:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            April 9, 2022
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="amy-movie-custom-field-label">Genre:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_genre/cartoon/index.html">Cartoon</a>, <a href="amy_genre/magic/index.html">Magic</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                        <label class="amy-movie-custom-field-label">Actor:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_actor/alexander-cattly/index.html">Alexander
                                                                Cattly</a>, <a href="amy_actor/cartin-hollia/index.html">Cartin
                                                                Hollia</a>, <a href="amy_actor/greta-garbo/index.html">Greta Garbo</a>,
                                                            <a href="amy_actor/humpray-richard/index.html">Humpray
                                                                Richard</a>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                        <label class="amy-movie-custom-field-label">Director:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <a href="amy_director/gally-peckin/index.html">Gally
                                                                Peckin</a>, <a href="amy_director/kingia-rogers/index.html">Kingia
                                                                Rogers</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="amy-movie-item-button">
                                                    <a href="https://player.vimeo.com/video/51834631" class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-play"></i>Trailer</a>
                                                    <a class="amy-btn-icon-text link-detail" href="amy_movie/supersonic/index.html">
                                                        <i class="fa fa-info"></i>Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- NEW MOVIES END -->

<!-- NOW PLAYING MOVIES START -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-c8df7ac elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c8df7ac" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d339201" data-id="d339201" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-7ac5d82 elementor-widget elementor-widget-Amy_V2_Movie_Heading" data-id="7ac5d82" data-element_type="widget" data-widget_type="Amy_V2_Movie_Heading.default">
                    <div class="elementor-widget-container">
                        <div class="amy-heading text-center has-seperator   seperator-left-full seperator-right-full seperator-1 ">
                            <header class="entry-header"><span class="seperator seperator-left"></span>
                                <h2 class="title-heading"><span class="title">NOW PLAYING </span><span class="title-highlight">MOVIES</span></h2><span class="seperator seperator-right"></span>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-32236a0 elementor-widget elementor-widget-Amy_V2_Movie_Grid" data-id="32236a0" data-element_type="widget" data-widget_type="Amy_V2_Movie_Grid.default">
                    <div class="elementor-widget-container">
                        <div class="amy-movie-grid amy-movie-grid-2 ">
                            <div class="amy-movie-list">
                                <div class="amy-movie-items row" data-column="2">
                                    @foreach($movies as $movie)
                                    <div class="amy-movie-item col-md-6  col-sm-6 col-xs-12">
                                        <div class="amy-movie-item-front">
                                            <div class="amy-movie-item-poster">
                                                <a href="amy_tvshow/vikings/index.html">
                                                    <img class="" src="{{asset('/uploads/'. $movie->image)}}" style="height: 300px;object-fit:cover;" alt="Vikings" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back" id="amy-movie-item-11457">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <h3 class="amy-movie-field-title"><a href="">{{$movie->name}}</a></h3>
                                                    <div class="amy-movie-item-meta">
                                                        <span class="amy-movie-field-duration"><i class="fa fa-clock-o"></i>02 hours 30 minutes</span>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                        <label class="amy-movie-custom-field-label">Actor:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <span>{{$movie->actors}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                        <label class="amy-movie-custom-field-label">Director:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <span>{{$movie->directors}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="amy-movie-custom-field-label">Release
                                                            Date:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            May 19, 2022
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="amy-movie-custom-field-label">Genre:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <span>{{$movie->genre}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="amy-movie-custom-field-label">About:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <span>{{$movie->about}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="https://player.vimeo.com/video/51834631" class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-play"></i>Trailer</a>
                                                    <a class="amy-btn-icon-text link-detail" href="{{url('/movie/detail/'.$movie->id)}}">
                                                        <i class="fa fa-info"></i>Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- NOW PLAYING MOVIES END -->
@endsection
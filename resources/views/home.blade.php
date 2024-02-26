@extends('layout.master')
@section('title','Movie')
@section('content')
<!-- COMMING SOON ADS START-->
<div class="amy-shortcode amy-mv-slide">
    <div class="amy-slick "
        data-slick='{"slidesToShow":1,"slidesToScroll":1,"autoplay":true,"autoplaySpeed":3000,"prevArrow": "<a class=\"amy-arrow fa amy-pre fa-chevron-right\"></a>","nextArrow": "<a class=\"amy-arrow fa amy-next fa-chevron-left\"></a>","arrows":true,"infinite":true,"fade":true,"useCSS":true,"useTransform":true,"dots":true}'>
        @foreach($movies as $movie)
        <div class="slide-item">
            <div class="slide-thumb">
                <img src="{{ asset('/uploads/'. $movie->slider_image) }}"
                    style="width: 100%; height: 500px; object-fit: fit;" alt="The Hurricane Heist" />
            </div>
            <div class="slide-content">
                <h2 style="text-align: left;">
                    <a class="mb-5"><span>{{$movie->name}}</span></a>
                </h2>
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
    </div>
</div>
<!-- COMMING SOON ADS END-->

<a href="{{'/payment'}}">
    <img src="{{ asset('images/sub.png') }}" id="subscribeImage"
        style="width: 150px;height: 120px;display: none;position: fixed;right: 20px;top: 100px;right: 30px;z-index: 9999;"
        alt="Subscribe">
</a>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var img = document.getElementById('subscribeImage');

    function showImage() {
        img.style.display = 'block';
        setTimeout(function() {
            img.style.display = 'none';
        }, 5000);
    }
    showImage();
    setInterval(showImage, 30000);
});
</script>


<!-- NEW MOVIES START -->
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-e615b68 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="e615b68" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a503e51"
            data-id="a503e51" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-46cb6f1 elementor-widget elementor-widget-Amy_V2_Movie_Heading"
                    data-id="46cb6f1" data-element_type="widget" data-widget_type="Amy_V2_Movie_Heading.default">
                    <div class="elementor-widget-container">
                        <div class="amy-heading text-center has-seperator    seperator-2 ">
                            <header class="entry-header"><span class="seperator seperator-left"></span>
                                <h2 class="title-heading"><span class="title">Newest </span><span
                                        class="title-highlight">Movie</span></h2><span
                                    class="seperator seperator-right"></span>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3ec453f elementor-widget elementor-widget-Amy_V2_Movie_Grid"
                    data-id="3ec453f" data-element_type="widget" data-widget_type="Amy_V2_Movie_Grid.default">
                    <div class="elementor-widget-container">
                        <div class="amy-movie-grid amy-movie-grid-1 ">
                            <div class="amy-movie-list">
                                <div class="amy-movie-items " data-tooltip-style="dark" data-column="5">
                                    @foreach($newMovie as $movie)
                                    <div class="amy-movie-item col-md-15 col-sm-4 col-xs-6 ">
                                        <div class="amy-movie-item-front">
                                            <a href="{{url('/movie/detail/'.$movie->id)}}">
                                                <img class="" src="{{asset('/uploads/'. $movie->image)}}"
                                                    style="height: 300px;object-fit:cover;" alt="Vikings" />
                                            </a>
                                            <div class="amy-movie-item-content">
                                                <h3 class="amy-movie-field-title mt-5"><a>{{$movie->name}}</a>
                                                </h3>
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
<!-- NEW MOVIES END -->

<!-- NOW PLAYING MOVIES START -->
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-c8df7ac elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="c8df7ac" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d339201"
            data-id="d339201" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-7ac5d82 elementor-widget elementor-widget-Amy_V2_Movie_Heading"
                    data-id="7ac5d82" data-element_type="widget" data-widget_type="Amy_V2_Movie_Heading.default">
                    <div class="elementor-widget-container">
                        <div
                            class="amy-heading text-center has-seperator   seperator-left-full seperator-right-full seperator-1 ">
                            <header class="entry-header"><span class="seperator seperator-left"></span>
                                <h2 class="title-heading"><span class="title">NOW PLAYING </span><span
                                        class="title-highlight">MOVIES</span></h2><span
                                    class="seperator seperator-right"></span>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-32236a0 elementor-widget elementor-widget-Amy_V2_Movie_Grid"
                    data-id="32236a0" data-element_type="widget" data-widget_type="Amy_V2_Movie_Grid.default">
                    <div class="elementor-widget-container">
                        <div class="amy-movie-grid amy-movie-grid-2 ">
                            <div class="amy-movie-list">
                                <div class="amy-movie-items row" data-column="2">
                                    @foreach($nowMovie as $movie)
                                    <div class="amy-movie-item col-md-6  col-sm-6 col-xs-12">
                                        <div class="amy-movie-item-front">
                                            <div class="amy-movie-item-poster">
                                                <a href="{{url('/movie/detail/'.$movie->id)}}">
                                                    <img src="{{asset('/uploads/'. $movie->image)}}"
                                                        style="height: 300px;object-fit:cover;" alt="Vikings" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="amy-movie-item-back" id="amy-movie-item-11457">
                                            <div class="amy-movie-item-back-inner">
                                                <div class="amy-movie-item-content">
                                                    <h3 class="amy-movie-field-title"><a
                                                            style="color: orange;">{{$movie->name}}</a>
                                                    </h3>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                        <label class="home_label">Actor:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <span>{{$movie->actors}}</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                        <label class="home_label">Director:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <span>{{$movie->directors}}</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                        <label class="home_label">Release Date:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            {{ $releaseDates[$movie->id] ? \Carbon\Carbon::parse($releaseDates[$movie->id])->format('d-F-Y') : 'No release date available' }}
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="home_label">Genre:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <span>{{$movie->genre}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="amy-movie-custom-field-group amy-movie-field-amy_genre">
                                                        <label class="home_label">About:</label>
                                                        <div class="amy-movie-custom-field-content">
                                                            <span>{{ implode(' ', array_slice(str_word_count($movie->about, 1), 0, 20)) }}
                                                                .....</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="amy-movie-item-button">
                                                    <a href="{{$movie->trailer}}"
                                                        class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                        <i class="fa fa-play"></i>Trailer</a>
                                                    <a class="amy-btn-icon-text link-detail"
                                                        href="{{url('/movie/detail/'.$movie->id)}}">
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
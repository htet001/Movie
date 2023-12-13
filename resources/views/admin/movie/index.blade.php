@extends('layout.master')

@section('title','Movies')

@section('content')
<section class="main-content page-layout-">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                    <div data-elementor-type="wp-page" data-elementor-id="425" class="elementor elementor-425">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-c76d246 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c76d246" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d86ff5" data-id="3d86ff5" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a8daf95 elementor-widget elementor-widget-Amy_V2_Movie_Grid" data-id="a8daf95" data-element_type="widget" data-widget_type="Amy_V2_Movie_Grid.default">
                                            <div class="elementor-widget-container">
                                                <div class="amy-movie-grid amy-movie-grid-1 ">
                                                    <div class="amy-movie-list">
                                                        <div class="amy-movie-items " data-tooltip-style="dark" data-column="5">
                                                            @foreach($movies as $movie)
                                                            <div class="amy-movie-item col-md-15 col-sm-4 col-xs-6 ">
                                                                <div class="amy-movie-item-front">
                                                                    <div class="amy-movie-item-poster tooltipstered" data-tooltip-content="#amy-movie-item-1179">
                                                                        <a href="{{url('/movie/{id}/detail')}}">
                                                                            <img class="movie_image" src="{{asset('/uploads/'. $movie->image)}}" alt="{{$movie->name}}" style="height: 400px;" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="amy-movie-item-content">
                                                                        <h3 class="amy-movie-field-title"><a href="">{{$movie->name}}</a>
                                                                        </h3>
                                                                        <div class="amy-movie-field-release-date">
                                                                            February 15, 2022 </div>
                                                                    </div>
                                                                </div>
                                                                <div class="amy-movie-item-back" id="amy-movie-item-1179">
                                                                    <div class="amy-movie-item-back-inner">
                                                                        <div class="amy-movie-item-content">
                                                                            <h3 class="amy-movie-field-title"><a href="../amy_movie/kubo-and-the-two-strings/index.html">{{$movie->name}}</a>
                                                                            </h3>
                                                                            <div class="amy-movie-item-meta">
                                                                                <span class="amy-movie-field-duration"><i class="fa fa-clock-o"></i>02
                                                                                    hours 00 minutes</span>
                                                                            </div>
                                                                            <div class="amy-movie-field-desc">
                                                                                <p>Sed ut perspiciatis unde omnis iste
                                                                                    natus error sit voluptatem
                                                                                    accusantium doloremque laudantium,
                                                                                    totam rem aperiam, ...</p>
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
                                                                                    <a href="../amy_genre/cartoon/index.html">Cartoon</a>,
                                                                                    <a href="../amy_genre/comic/index.html">Comic</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                                                <label class="amy-movie-custom-field-label">Actor:</label>
                                                                                <div class="amy-movie-custom-field-content">
                                                                                    <a href="../amy_actor/alexander-cattly/index.html">Alexander
                                                                                        Cattly</a>, <a href="../amy_actor/cartin-hollia/index.html">Cartin
                                                                                        Hollia</a>, <a href="../amy_actor/greta-garbo/index.html">Greta
                                                                                        Garbo</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                                                <label class="amy-movie-custom-field-label">Director:</label>
                                                                                <div class="amy-movie-custom-field-content">
                                                                                    <a href="../amy_director/grace-belly/index.html">Grace
                                                                                        Belly</a>, <a href="../amy_director/mae-west/index.html">Mae
                                                                                        West</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="amy-movie-item-button">
                                                                            <a href="{{$movie->trailer}}" class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                                                <i class="fa fa-play"></i>Trailer</a>
                                                                            <a class="amy-btn-icon-text link-detail" href="../amy_movie/kubo-and-the-two-strings/index.html">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
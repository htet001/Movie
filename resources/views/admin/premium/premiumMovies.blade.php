@extends('layout.master')

@section('title','Premium Movies')

@section('content')
<section class="main-content page-layout-">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                    <div data-elementor-type="wp-page" data-elementor-id="425" class="elementor elementor-425">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-c76d246 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="c76d246" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d86ff5"
                                    data-id="3d86ff5" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a8daf95 elementor-widget elementor-widget-Amy_V2_Movie_Grid"
                                            data-id="a8daf95" data-element_type="widget"
                                            data-widget_type="Amy_V2_Movie_Grid.default">
                                            <div class="elementor-widget-container">
                                                <div class="amy-movie-grid amy-movie-grid-1 ">
                                                    <div class="amy-movie-list">
                                                        <div class="amy-movie-items " data-tooltip-style="dark"
                                                            data-column="5">
                                                            @foreach($movies as $movie)
                                                            <div class="amy-movie-item col-md-15 col-sm-4 col-xs-6 ">
                                                                <div class="amy-movie-item-front">
                                                                    <div class="amy-movie-item-poster tooltipstered"
                                                                        data-tooltip-content="#amy-movie-item-1179">
                                                                        <a
                                                                            href="{{url('/premiumMovie/detail/'.$movie->id)}}">
                                                                            <img class="movie_image"
                                                                                src="{{asset('/uploads/'. $movie->image)}}"
                                                                                alt="{{$movie->name}}"
                                                                                style="height: 350px;object-fit: cover;" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="amy-movie-item-content">
                                                                        <h3 class="amy-movie-field-title"><a
                                                                                href="">{{$movie->name}}</a>
                                                                        </h3>
                                                                        <div class="amy-movie-field-release-date">
                                                                            February 15, 2022 </div>
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
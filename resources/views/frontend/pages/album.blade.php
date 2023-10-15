@extends('frontend.layouts.master')
@section('title') Album @endsection
@section('styles')
@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Our Albums</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Our Albums</span></li>
            </ul>
        </div>
    </section>

    <section class="portfolio-one portfolio-page">
        <div class="container">
            <div class="row gutter-y-30">
                @foreach($albums as $index=>$album)
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                            <div class="portfolio-card__image">
                                <img src="{{asset('/images/albums/'.@$album->cover_image)}}" alt="Insurance policy">
                            </div><!-- /.portfolio-card__image -->
                            <div class="portfolio-card__content">
                                <div class="portfolio-card__head">
                                    <h3 class="portfolio-card__title">
                                        <a href="{{route('album.gallery',$album->slug)}}">{{ ucfirst($album->name) }}</a>
                                    </h3><!-- /.portfolio-card__title -->
                                    <h6 class="portfolio-card__tagline">Images: ({{count(@$album->gallery)}})</h6>
                                </div>
                                <a href="{{route('album.gallery',$album->slug)}}" class="portfolio-card__link">
                                    <i class="icon-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection



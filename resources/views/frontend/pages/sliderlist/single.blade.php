@extends('frontend.layouts.master')
@section('title')  {{ucwords(@$singleSlider->list_header)}} @endsection
@section('css')
@endsection


@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">{{ucwords(@$singleSlider->list_header)}}</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>List Detail</span></li>
            </ul>
        </div>
    </section>


    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-lg-4">
                    @include('frontend.pages.sliderlist.sidebar')
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__thumbnail">
                            <img class="lazy" data-src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="">
                        </div>
                        <h3 class="service-details__title">{{ ucwords(@$singleSlider->list_header ) }}</h3>
                        <div class="service-details__text custom-description text-align-justify">
                            {!! @$singleSlider->list_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

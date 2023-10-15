@extends('frontend.layouts.master')
@section('title') Our Services @endsection
@section('css')

@endsection
@section('content')


    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Our Category</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Our Category</span></li>
            </ul>
        </div>
    </section>

    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-lg-4">
                    @include('frontend.pages.services.sidebar')
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        @foreach(@$allservices as $index=>$service)
                            <div class="col-md-6 col-lg-6 {{ $index > 1 ? 'mt-5':'' }}">
                                <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{ $index }}00ms'>
                                    <div class="portfolio-card__image">
                                        <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="Insurance policy">
                                    </div>
                                    <div class="portfolio-card__content">
                                        <div class="portfolio-card__head">
                                            <h3 class="portfolio-card__title">
                                                <a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a>
                                            </h3>
                                        </div>
                                        <a href="{{route('service.single',$service->slug)}}" class="portfolio-card__link">
                                            <i class="icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="pagination-block">
                            {{ $allservices->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@extends('frontend.layouts.master')
@section('title') Our Stories @endsection
@section('css')
@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Our stories</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Testimonials</span></li>
            </ul>
        </div>
    </section>

    <section class="testimonials-one testimonials-one--page">
        <div class="container">
            <div class="row gutter-y-30">
                @foreach($testimonials as $index=>$testimonial)
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                        <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{ $index }}00ms'>
                            <div class="testimonials-card__inner h-100">
                                <div class="shape-one"><img src="{{ asset('assets/frontend/images/shapes/testi-shape-one.png') }}" alt="shape"></div>
                                <div class="testimonials-card__top">
                                    <div class="testimonials-card__image">
                                        <img src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="Kevin martin">
                                    </div>
                                    <div class="testimonials-card__top__left">
                                        <h3 class="testimonials-card__name">
                                            {{ucfirst($testimonial->name)}}
                                        </h3>
                                        <p class="testimonials-card__designation">{{ucfirst($testimonial->position)}}</p>
                                    </div>
                                </div>
                                <div class="testimonials-card__content">
                                    {{ucfirst($testimonial->description)}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="pagination-block">
                    {{ $testimonials->links('vendor.pagination.default') }}
                </div>
            </div>

        </div>
    </section>

@endsection
@section('js')
@endsection

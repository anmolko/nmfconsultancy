@extends('frontend.layouts.master')
@section('title') Study Abroad @endsection
@section('css')
    <style>

    .corpkit-content > .corpkit-content-inner {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>
@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Our Programme</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Course List</span></li>
            </ul>
        </div>
    </section>

    <section class="blog-one blog-one--page">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="row gutter-y-30">
                        @foreach($rows as $index=>$latest)
                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                                <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                                    <div class="service-card__image">
                                        <img class="lazy" data-src="{{ @$latest->image ? asset('/images/course/thumb/thumb_'.@$latest->image):''}}" alt="">
                                        <div class="service-card__icon">
                                            <i class="icon-guarantee"></i>
                                        </div>
                                    </div>
                                    <div class="service-card__content">
                                        <h3 class="service-card__title">
                                            <a href="{{ route('study-abroad.single', $latest->slug) }}">{{ $latest->title ?? '' }}</a>
                                        </h3>
                                        <p class="service-card__info"> {{ elipsis( strip_tags($latest->description ?? '') )}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="pagination-block">
                            {{ $rows->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('frontend.pages.course.sidebar')
                </div>
            </div>
        </div>
    </section>


@endsection

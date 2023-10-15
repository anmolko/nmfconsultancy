@extends('frontend.layouts.master')
@section('title') Test Preparation @endsection
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
            <h2 class="page-header__title">Test Preparation</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Test Preparation</span></li>
            </ul>
        </div>
    </section>


    <section class="service-details" style="background-image: url('{{ asset('assets/frontend/images/pattern/blog-bg-3.jpg') }}');">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        @foreach(@$rows as $index=>$latest)
                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                                <div class="blog-card-three">
                                    <img class="lazy" data-src="{{ @$latest->image ? asset('/images/test_preparation/thumb/thumb_'.@$latest->image):''}}" alt="">
                                    <div class="blog-card-three__content">
                                        <h3 class="blog-card-three__title">
                                            <a href="{{ route('test-preparation.single', $latest->slug) }}">{{ $latest->title ?? ''}}</a>
                                        </h3>
                                        <p>{{ elipsis( strip_tags($latest->summary ?? '') )}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="pagination-block">
                            {{ $rows->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    @include('frontend.pages.test_preparation.sidebar')
                </div>
            </div>
        </div>
    </section>


@endsection

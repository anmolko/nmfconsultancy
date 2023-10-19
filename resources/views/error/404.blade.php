@extends('frontend.layouts.master')
@section('title')  Page Not Found @endsection
@section('content')


    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">404 Error</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>404 Error</span></li>
            </ul>
        </div>
    </section>


    <section class="error-404">
        <div class="container">
            <h2 class="error-404__title wow fadeInUp" data-wow-duration="1500ms">
                4<span>0</span>4
            </h2><!-- /.error-404__title -->
            <h3 class="error-404__sub-title">Oops! page not found</h3><!-- /.error-404__title -->
            <p class="error-404__text">The page you are looking for does not exist.</p><!-- /.error-404__text -->
            <div class="error-404__btns">
                <a href="/" class="modins-btn modins-btn--base error-404__btn"><span>back to home</span>
                    <em></em></a>
            </div><!-- /.error-404__btns -->
        </div><!-- /.container -->
    </section><!-- /.error-404 -->

@endsection

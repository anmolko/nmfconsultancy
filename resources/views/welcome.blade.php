@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')
    <!-- main-slider-start -->
    <section class="main-slider-two">
        <div class="main-slider-two__carousel modins-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": true,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": false,
		"margin": 0
	    }'>
            @foreach(@$sliders as $index=>$slider)
                <div class="item">
                    <div class="main-slider-two__item">
                        <div class="main-slider-one__bg" style="background-image: linear-gradient(90deg, rgb(43 43 94 / 68%) 0%, rgb(43 43 94 / 53%) 35%, rgb(43 43 94 / 63%) 100%),url('{{ asset('/images/sliders/'.$slider->image) }}');"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider-two__wrap">
                                        <div class="main-slider-two__content">
                                            <!-- slider-sub-title -->
                                            <h2 class="main-slider-two__title">{{@$slider->heading}}
                                            </h2><!-- slider-title -->
                                            @if($slider->subheading)
                                                <p class="main-slider-two__info">
                                                    {{ @$slider->subheading ??''}}
                                                </p>
                                            @endif
                                            @if(@$slider->button)
                                                <div class="main-slider-two__btn">
                                                    <a href="{{@$slider->link}}" class="modins-btn modins-btn--base"><span>{{ucwords(@$slider->button)}}
                                                        </span> <em></em></a><!-- slider-btn -->
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="about-one-home">
        @if($homepage_info->mission || $homepage_info->vision ||  $homepage_info->value)

            <div class="about-one-home__shape">
                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/about-shape-1-3.png')}}" alt="">
            </div>
            <!-- Feature Start -->
            <section class="feature-one">
                <div class="container-fluid ">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__item">
                                <div class="feature-one__item__icon"><span class="icon-success"></span></div>
                                <div class="feature-one__item__content">
                                    <h3 class="feature-one__item__title">Our Mission</h3>
                                    <p class="feature-one__item__text">{{ ucfirst(@$homepage_info->mission) }}</p>
                                </div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__item">
                                <div class="feature-one__item__icon"><span class="icon-online-registration"></span></div>
                                <div class="feature-one__item__content">
                                    <h3 class="feature-one__item__title">Our Vision</h3>
                                    <p class="feature-one__item__text">{{ ucfirst(@$homepage_info->vision) }}</p>
                                </div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__item">
                                <div class="feature-one__item__icon"><span class="icon-guarantee"></span></div>
                                <div class="feature-one__item__content">
                                    <h3 class="feature-one__item__title">Our Goal</h3>
                                    <p class="feature-one__item__text">{{ ucfirst(@$homepage_info->value) }}</p>
                                </div>
                            </div><!-- feature-item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature End -->
        @endif

        @if($homepage_info->welcome_description)
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-one-home__image wow fadeInLeft" data-wow-delay="300ms">
                            <div class="about-one-home__double-image">
                                <div class="img-1">
                                    <img class="lazy" data-src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}"  />
                                </div>
                                <div class="about-one-home__image__arrow">
                                    <img src="{{ asset('assets/frontend/images/shapes/about-shape-1-2.png') }}" />
                                </div>
                            </div>


                        </div><!-- /.why-choose-two__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="about-one-home__content">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline">{{$homepage_info->welcome_subheading ?? ''}}</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">{{  @$homepage_info->welcome_heading }}</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one-home__content__text-two text-align-justify">
                                {{ ucfirst(@$homepage_info->welcome_description) }}
                            </p>
                            @if(@$homepage_info->welcome_link)
                                <div class="about-one-home__content__wrapper">
                                    <div>
                                        <a href="{{@$homepage_info->welcome_link}}"
                                           class="modins-btn modins-btn--base"><span>{{ @$homepage_info->welcome_button }}</span>
                                            <em></em></a>
                                    </div>
                                </div>
                            @endif
                        </div><!-- /.why-choose-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </div>
        @endif
    </section><!-- /.about-one-home -->

    <section class="service-one service-home-one pt-120 pb-120" style="background-image: url('assets/images/backgrounds/insurace-bg-1.jpg');">
        <div class="container">
            <div class="sec-title">

                <h6 class="sec-title__tagline">what we’re offering</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">We’re giving all the insurance <br> services to you</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                        <div class="service-card__image">
                            <img src="assets/images/service/service-1.png" alt="Car insurance">
                            <div class="service-card__icon">
                                <i class="icon-car-1"></i>
                            </div>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title">
                                <a href="car-insurance.html">Car insurance</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                        <div class="service-card__image">
                            <img src="assets/images/service/service-2.png" alt="Life insurance">
                            <div class="service-card__icon">
                                <i class="icon-cardiogram"></i>
                            </div>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title">
                                <a href="%40%40link.html">Life insurance</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='3ms'>
                        <div class="service-card__image">
                            <img src="assets/images/service/service-3.png" alt="Home insurance">
                            <div class="service-card__icon">
                                <i class="icon-home"></i>
                            </div>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title">
                                <a href="%40%40link.html">Home insurance</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='4ms'>
                        <div class="service-card__image">
                            <img src="assets/images/service/service-4.png" alt="Health insurance">
                            <div class="service-card__icon">
                                <i class="icon-cross"></i>
                            </div>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title">
                                <a href="%40%40link.html">Health insurance</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='5ms'>
                        <div class="service-card__image">
                            <img src="assets/images/service/service-5.png" alt="Business insurance">
                            <div class="service-card__icon">
                                <i class="icon-suitcase"></i>
                            </div>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title">
                                <a href="%40%40link.html">Business insurance</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='6ms'>
                        <div class="service-card__image">
                            <img src="assets/images/service/service-6.png" alt="Fire insurance">
                            <div class="service-card__icon">
                                <i class="icon-fire"></i>
                            </div>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title">
                                <a href="%40%40link.html">Fire insurance</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='7ms'>
                        <div class="service-card__image">
                            <img src="assets/images/service/service-7.png" alt="Marriage insurance">
                            <div class="service-card__icon">
                                <i class="icon-wedding-rings"></i>
                            </div>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title">
                                <a href="%40%40link.html">Marriage insurance</a>
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-md-6 col-lg-3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card service-featured wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="8ms">
                        <div class="service-card__bg" style="background-image: url('assets/images/resources/service-featured.jpg');"></div>
                        <div class="service-card__content">
                            <h3 class="service-card__title">
                                Compare & get <br> your insuracne in <br> right way
                            </h3><!-- /.service-card__title -->
                            <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
                            <a href="contact.html" class="modins-btn">Get a Quote <em></em></a>
                        </div><!-- /.service-card__content -->
                    </div>
                </div><!-- /.col-md-6 col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-page -->

    <section class="testimonials-one testimonials-one--home">
        <div class="testimonials-one__bg">
            <img src="assets/images/shapes/testimonai-one-bg.png" alt="shape">
        </div>
        <div class="testimonials-one__avatas">
            <div class="avata-1">
                <img src="assets/images/resources/avata-autor-shape-1.png" alt="">
            </div>
            <div class="avata-2">
                <img src="assets/images/resources/avata-autor-shape-2.png" alt="">
            </div>
            <div class="avata-3">
                <img src="assets/images/resources/avata-autor-shape-3.png" alt="">
            </div>
            <div class="avata-4">
                <img src="assets/images/resources/avata-autor-shape-4.png" alt="">
            </div>
            <div class="avata-5">
                <img src="assets/images/resources/avata-autor-shape-5.png" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline">About company</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">What they’re talking <br> about us?</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="testimonials-one--home">There are many variations of passages the majority have <br> suffered
                        alteration in some fo injected humour, or <br> randomised words believable.</p>
                    <div class="testimonials-one__dots"></div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonials-one__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": false,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": true,
                "dotsContainer": ".testimonials-one__dots",
                "autoplay": false
            }'>
                        <div class="item">
                            <div class="testimonials-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="testimonials-one__inner">
                                    <div class="testimonials-one__top">
                                        <div class="testimonials-one__top__left">
                                            <div class="shape-one"><img src="assets/images/shapes/testi-shape-1-1.png" alt="shape"></div>
                                            <div class="testimonials-one__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-one__rating -->
                                            <div class="testimonials-one__content">
                                                Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.
                                            </div><!-- /.testimonials-one__content -->
                                        </div><!-- /.testimonials-one__top__left -->
                                        <div class="testimonials-one__image">
                                            <img class="avata" src="assets/images/resources/testi-1-1.jpg" alt="Kevin martin">
                                            <div class="testimonials-one__avata">
                                                <h3 class="testimonials-one__name">
                                                    Kevin martin
                                                </h3><!-- /.testimonials-one__name -->
                                                <p class="testimonials-one__designation">Co Founder</p>
                                            </div>
                                        </div><!-- /.testimonials-one__image -->
                                    </div><!-- /.testimonials-one__top -->
                                </div><!-- /.testimonials-one__inner -->
                            </div><!-- /.testimonials-one -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="testimonials-one__inner">
                                    <div class="testimonials-one__top">
                                        <div class="testimonials-one__top__left">
                                            <div class="shape-one"><img src="assets/images/shapes/testi-shape-1-1.png" alt="shape"></div>
                                            <div class="testimonials-one__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-one__rating -->
                                            <div class="testimonials-one__content">
                                                Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.
                                            </div><!-- /.testimonials-one__content -->
                                        </div><!-- /.testimonials-one__top__left -->
                                        <div class="testimonials-one__image">
                                            <img class="avata" src="assets/images/resources/testi-1-2.jpg" alt="Sarah albert">
                                            <div class="testimonials-one__avata">
                                                <h3 class="testimonials-one__name">
                                                    Sarah albert
                                                </h3><!-- /.testimonials-one__name -->
                                                <p class="testimonials-one__designation">Co Founder</p>
                                            </div>
                                        </div><!-- /.testimonials-one__image -->
                                    </div><!-- /.testimonials-one__top -->
                                </div><!-- /.testimonials-one__inner -->
                            </div><!-- /.testimonials-one -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="testimonials-one__inner">
                                    <div class="testimonials-one__top">
                                        <div class="testimonials-one__top__left">
                                            <div class="shape-one"><img src="assets/images/shapes/testi-shape-1-1.png" alt="shape"></div>
                                            <div class="testimonials-one__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-one__rating -->
                                            <div class="testimonials-one__content">
                                                Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking.
                                            </div><!-- /.testimonials-one__content -->
                                        </div><!-- /.testimonials-one__top__left -->
                                        <div class="testimonials-one__image">
                                            <img class="avata" src="assets/images/resources/testi-1-1.jpg" alt="Sarah albert">
                                            <div class="testimonials-one__avata">
                                                <h3 class="testimonials-one__name">
                                                    Sarah albert
                                                </h3><!-- /.testimonials-one__name -->
                                                <p class="testimonials-one__designation">Co Founder</p>
                                            </div>
                                        </div><!-- /.testimonials-one__image -->
                                    </div><!-- /.testimonials-one__top -->
                                </div><!-- /.testimonials-one__inner -->
                            </div><!-- /.testimonials-one -->
                        </div><!-- /.item -->
                    </div><!-- /.testimonials-one__carousel -->
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.testimonials-one -->

    <div class="client-carousel client-carousel-one ">
        <div class="client-carousel__shape-1">
            <img src="assets/images/shapes/line-shape-1.png" alt="shape-1">
        </div>
        <div class="client-carousel__shape-2">
            <img src="assets/images/shapes/line-shape-2.png" alt="shape-2">
        </div>

        <div class="container">
            <div class="client-carousel__one modins-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 5,
                "margin":10,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1,
                        "margin": 0
                    },
                    "360":{
                        "items":2,
                        "margin": 0
                    },
                    "575":{
                        "items":3,
                        "margin": 30
                    },
                    "768":{
                        "items":3,
                        "margin": 30
                    },
                    "992":{
                        "items": 4,
                        "margin": 30
                    },
                    "1200":{
                        "items": 5
                    }
                }
                }'>
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="modins">
                </div><!-- /.owl-slide-item-->
            </div><!-- /.thm-owl__slider -->
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->

    <div class="contact-one" style="background-image: url('assets/images/backgrounds/contact-one-bg.jpg');">
        <div class="contact-one__img">
            <img src="assets/images/resources/contact-left-img.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="get-insurance__right">
                        <div class="section-title text-left">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline">free quote</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Get an insurance quote <br> to get started</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                        </div>
                        <div class="get-insurance__tab">
                            <div class="get-insurance__tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#home2" class="tab-btn active-btn"><span>Home</span></li>
                                    <li data-tab="#vehicles" class="tab-btn"><span>Vehicles</span></li>
                                    <li data-tab="#life" class="tab-btn"><span>Life</span></li>
                                    <li data-tab="#business" class="tab-btn"><span>Business</span></li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="home2">
                                        <div class="get-insurance__content">
                                            <form class="get-insurance__form">
                                                <div class="get-insurance__content-box">
                                                    <div class="get-insurance__input-box">
                                                        <input type="text" placeholder="Full name" name="name">
                                                    </div>
                                                    <div class="get-insurance__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                    <div class="get-insurance__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select service</option>
                                                            <option value="1">service One</option>
                                                            <option value="2">service Two</option>
                                                            <option value="3">service Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="get-insurance__progress">
                                                    <div class="get-insurance__progress-single">
                                                        <h4 class="get-insurance__progress-title">Limits of Balance:
                                                        </h4>
                                                        <div class="get-insurance__progress-range">
                                                            <input type="text" class="balance-range-slider" data-hide-min-max="true" data-step="100" data-from="35000" data-min="0" data-max="90000" value="" />
                                                            <div class="get-insurance__balance-box">
                                                                <p class="get-insurance__balance">$<span></span></p>
                                                            </div>
                                                            <input type="hidden" class="get-insurance__balance__input">
                                                        </div><!-- /.get-insurance__progress-range -->
                                                    </div>
                                                </div>
                                                <button type="submit" class="modins-btn">Get a Quote<em></em></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="vehicles">
                                        <div class="get-insurance__content">
                                            <form class="get-insurance__form">
                                                <div class="get-insurance__content-box">
                                                    <div class="get-insurance__input-box">
                                                        <input type="text" placeholder="Full name" name="name">
                                                    </div>
                                                    <div class="get-insurance__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                    <div class="get-insurance__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select service</option>
                                                            <option value="1">service One</option>
                                                            <option value="2">service Two</option>
                                                            <option value="3">service Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="get-insurance__progress">
                                                    <div class="get-insurance__progress-single">
                                                        <h4 class="get-insurance__progress-title">Limits of Balance:
                                                        </h4>
                                                        <div class="get-insurance__progress-range">
                                                            <input type="text" class="balance-range-slider" data-hide-min-max="true" data-step="100" data-from="35000" data-min="0" data-max="90000" value="" />
                                                            <div class="get-insurance__balance-box">
                                                                <p class="get-insurance__balance">$<span></span></p>
                                                            </div>
                                                            <input type="hidden" class="get-insurance__balance__input">
                                                        </div><!-- /.get-insurance__progress-range -->
                                                    </div>
                                                </div>
                                                <button type="submit" class="modins-btn">Get a Quote<em></em></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="life">
                                        <div class="get-insurance__content">
                                            <form class="get-insurance__form">
                                                <div class="get-insurance__content-box">
                                                    <div class="get-insurance__input-box">
                                                        <input type="text" placeholder="Full name" name="name">
                                                    </div>
                                                    <div class="get-insurance__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                    <div class="get-insurance__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select service</option>
                                                            <option value="1">service One</option>
                                                            <option value="2">service Two</option>
                                                            <option value="3">service Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="get-insurance__progress">
                                                    <div class="get-insurance__progress-single">
                                                        <h4 class="get-insurance__progress-title">Limits of Balance:
                                                        </h4>
                                                        <div class="get-insurance__progress-range">
                                                            <input type="text" class="balance-range-slider" data-hide-min-max="true" data-step="100" data-from="35000" data-min="0" data-max="90000" value="" />
                                                            <div class="get-insurance__balance-box">
                                                                <p class="get-insurance__balance">$<span></span></p>
                                                            </div>
                                                            <input type="hidden" class="get-insurance__balance__input">
                                                        </div><!-- /.get-insurance__progress-range -->
                                                    </div>
                                                </div>
                                                <button type="submit" class="modins-btn">Get a Quote<em></em></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="business">
                                        <div class="get-insurance__content">
                                            <form class="get-insurance__form">
                                                <div class="get-insurance__content-box">
                                                    <div class="get-insurance__input-box">
                                                        <input type="text" placeholder="Full name" name="name">
                                                    </div>
                                                    <div class="get-insurance__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                    <div class="get-insurance__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select service</option>
                                                            <option value="1">service One</option>
                                                            <option value="2">service Two</option>
                                                            <option value="3">service Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="get-insurance__progress">
                                                    <div class="get-insurance__progress-single">
                                                        <h4 class="get-insurance__progress-title">Limits of Balance:
                                                        </h4>
                                                        <div class="get-insurance__progress-range">
                                                            <input type="text" class="balance-range-slider" data-hide-min-max="true" data-step="100" data-from="35000" data-min="0" data-max="90000" value="" />
                                                            <div class="get-insurance__balance-box">
                                                                <p class="get-insurance__balance">$<span></span></p>
                                                            </div>
                                                            <input type="hidden" class="get-insurance__balance__input">
                                                        </div><!-- /.get-insurance__progress-range -->
                                                    </div>
                                                </div>
                                                <button type="submit" class="modins-btn">Get a Quote<em></em></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="funfact-one" style="background-image: url(assets/images/shapes/funfact-shape.png);">
        <div class="container">
            <div class="list-unstyled funfact-one__list">
                <div class="row gutter-y-40">
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact-one__item count-box">
                            <i class="icon-insurance"></i><!-- /.funfact-one__icon -->
                            <div class="funfact-one__content">
                                <div class="funfact-one__wrap">
                                    <h3 class="funfact-one__count count-text" data-stop="3.6" data-speed="1500"></h3>
                                    <h3 class="funfact-one__count count-before">k</h3>
                                </div>
                                <!-- /.funfact-one__count -->
                                <p class="funfact-one__text">Gave insurances</p><!-- /.funfact-one__text -->
                            </div><!-- /.funfact-one__content -->
                        </div><!-- /.funfact-one__item -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact-one__item count-box">
                            <i class="icon-group"></i><!-- /.funfact-one__icon -->
                            <div class="funfact-one__content">
                                <div class="funfact-one__wrap">
                                    <h3 class="funfact-one__count count-text" data-stop="90" data-speed="1500"></h3>
                                    <h3 class="funfact-one__count count-before">+</h3>
                                </div>
                                <!-- /.funfact-one__count -->
                                <p class="funfact-one__text">Professional team</p><!-- /.funfact-one__text -->
                            </div><!-- /.funfact-one__content -->
                        </div><!-- /.funfact-one__item -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact-one__item count-box">
                            <i class="icon-life-insurance"></i><!-- /.funfact-one__icon -->
                            <div class="funfact-one__content">
                                <div class="funfact-one__wrap">
                                    <h3 class="funfact-one__count count-text" data-stop="4.9" data-speed="1500"></h3>
                                    <h3 class="funfact-one__count count-before">k</h3>
                                </div>
                                <!-- /.funfact-one__count -->
                                <p class="funfact-one__text">Satisfied customers</p><!-- /.funfact-one__text -->
                            </div><!-- /.funfact-one__content -->
                        </div><!-- /.funfact-one__item -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact-one__item count-box">
                            <i class="icon-success"></i><!-- /.funfact-one__icon -->
                            <div class="funfact-one__content">
                                <div class="funfact-one__wrap">
                                    <h3 class="funfact-one__count count-text" data-stop="98" data-speed="1500"></h3>
                                    <h3 class="funfact-one__count count-before">%</h3>
                                </div>
                                <!-- /.funfact-one__count -->
                                <p class="funfact-one__text">Success rates</p><!-- /.funfact-one__text -->
                            </div><!-- /.funfact-one__content -->
                        </div><!-- /.funfact-one__item -->
                    </div>
                </div>
            </div><!-- /.list-unstyled funfact-one__list -->
        </div><!-- /.container -->
    </section><!-- /.funfact-one -->

    <section class="portfolio-one portfolio-one__home">
        <div class="container-fluid">
            <div class="sec-title">

                <h6 class="sec-title__tagline">recent portfolio</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">Checkout our recently <br> completed work</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                <div class="col-md-6 col-lg-3">
                    <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                        <div class="portfolio-card__image">
                            <img src="assets/images/protfolio/portfolio-1.jpg" alt="Insurance policy">
                        </div><!-- /.portfolio-card__image -->
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__head">
                                <h6 class="portfolio-card__tagline">Strategy</h6>
                                <h3 class="portfolio-card__title">
                                    <a href="portfolio-details.html">Insurance policy</a>
                                </h3><!-- /.portfolio-card__title -->
                            </div>
                            <a href="portfolio-details.html" class="portfolio-card__link">
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.portfolio-card__content -->
                    </div><!-- /.portfolio-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                        <div class="portfolio-card__image">
                            <img src="assets/images/protfolio/portfolio-2.jpg" alt="Life protection">
                        </div><!-- /.portfolio-card__image -->
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__head">
                                <h6 class="portfolio-card__tagline">Strategy</h6>
                                <h3 class="portfolio-card__title">
                                    <a href="portfolio-details.html">Life protection</a>
                                </h3><!-- /.portfolio-card__title -->
                            </div>
                            <a href="portfolio-details.html" class="portfolio-card__link">
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.portfolio-card__content -->
                    </div><!-- /.portfolio-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='3ms'>
                        <div class="portfolio-card__image">
                            <img src="assets/images/protfolio/portfolio-3.jpg" alt="Insurance claims">
                        </div><!-- /.portfolio-card__image -->
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__head">
                                <h6 class="portfolio-card__tagline">Strategy</h6>
                                <h3 class="portfolio-card__title">
                                    <a href="portfolio-details.html">Insurance claims</a>
                                </h3><!-- /.portfolio-card__title -->
                            </div>
                            <a href="portfolio-details.html" class="portfolio-card__link">
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.portfolio-card__content -->
                    </div><!-- /.portfolio-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='4ms'>
                        <div class="portfolio-card__image">
                            <img src="assets/images/protfolio/portfolio-4.jpg" alt="Insurance policy">
                        </div><!-- /.portfolio-card__image -->
                        <div class="portfolio-card__content">
                            <div class="portfolio-card__head">
                                <h6 class="portfolio-card__tagline">Strategy</h6>
                                <h3 class="portfolio-card__title">
                                    <a href="portfolio-details.html">Insurance policy</a>
                                </h3><!-- /.portfolio-card__title -->
                            </div>
                            <a href="portfolio-details.html" class="portfolio-card__link">
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.portfolio-card__content -->
                    </div><!-- /.portfolio-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.portfolio-page -->

    <section class="blog-one blog-one--home">
        <div class="container">
            <div class="sec-title">

                <h6 class="sec-title__tagline">recent news feed</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">Latest news & articles <br> from the blog</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-40">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                        <div class="blog-card__image-wrap">
                            <div class="blog-card__image">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="The quality role of the life insurance new policies in company">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="The quality role of the life insurance new policies in company">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">The quality role of the life insurance new policies in company</span>
                                    <!-- /.sr-only --></a>
                            </div>
                            <div class="blog-card__date"><span>28</span>
                                Nov</div><!-- /.blog-card__date -->
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="#">
                                        <i class="fas fa-user-circle"></i>
                                        by Admin</a></li>
                                <li><a href="#">
                                        <i class="fa fa-comments"></i>
                                        2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="blog-details-right.html">The quality role of the life insurance new policies in company</a></h3><!-- /.blog-card__title -->
                            <a href="blog-details-right.html" class="blog-card__link">
                                <span>Read more</span>
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="blog-card__image-wrap">
                            <div class="blog-card__image">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="In this space gain offline, but can we take this online">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="In this space gain offline, but can we take this online">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">In this space gain offline, but can we take this online</span>
                                    <!-- /.sr-only --></a>
                            </div>
                            <div class="blog-card__date"><span>28</span>
                                Nov</div><!-- /.blog-card__date -->
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="#">
                                        <i class="fas fa-user-circle"></i>
                                        by Admin</a></li>
                                <li><a href="#">
                                        <i class="fa fa-comments"></i>
                                        2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="blog-details-right.html">In this space gain offline, but can we take this online</a></h3><!-- /.blog-card__title -->
                            <a href="blog-details-right.html" class="blog-card__link">
                                <span>Read more</span>
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                        <div class="blog-card__image-wrap">
                            <div class="blog-card__image">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="Flesh that out locked and loaded, closing these latest">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="Flesh that out locked and loaded, closing these latest">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Flesh that out locked and loaded, closing these latest</span>
                                    <!-- /.sr-only --></a>
                            </div>
                            <div class="blog-card__date"><span>28</span>
                                Nov</div><!-- /.blog-card__date -->
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="#">
                                        <i class="fas fa-user-circle"></i>
                                        by Admin</a></li>
                                <li><a href="#">
                                        <i class="fa fa-comments"></i>
                                        2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="blog-details-right.html">Flesh that out locked and loaded, closing these latest</a></h3><!-- /.blog-card__title -->
                            <a href="blog-details-right.html" class="blog-card__link">
                                <span>Read more</span>
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-one page -->

    <div class="cta-one cta-one__home">
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__headline">
                    <div class="cta-one__icon">
                        <i class="icon-folder"></i>
                    </div>
                    <div class="cta-one__content">
                        <span class="cta-one__tagline">Quisque vel ortor</span>
                        <h3 class="cta-one__title">Start reporting or tracking your claims</h3>
                    </div>
                </div>
                <div class="cta-one__btn">
                    <a href="contact.html" class="modins-btn modins-btn-white">Track your Claim <em></em></a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection

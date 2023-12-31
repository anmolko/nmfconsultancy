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

    <div class="cta-one cta-one__home mb-5">
        <div class="feature-two__shape">
            <img src="{{ asset('assets/frontend/images/shapes/feature-shape-2.png') }}" alt="">
        </div>
        <div class="container" style="max-width: 1290px;">
            <div class="cta-one__inner">
                <div class="cta-one__headline">
                    <div class="cta-one__icon">
                        <i class="icon-folder"></i>
                    </div>
                    <div class="cta-one__content">
                        <span class="cta-one__tagline">{{ $homepage_info->action_heading2 ?? '' }}</span>
                        <h3 class="cta-one__title">{{ $homepage_info->action_heading ?? '' }}</h3>
                    </div>
                </div>
                <div class="cta-one__btn">
                    <a href="{{ $homepage_info->action_link2 ?? '/contact-us'}}" class="modins-btn modins-btn-white">{{ $homepage_info->action_link ?? 'Discover More'}} <em></em></a>
                </div>
            </div>
        </div>
    </div>

    @if(count($latestServices) > 0)
        <section class="service-one service-home-one pt-120 pb-120" style="background-image: url('{{ asset('assets/frontend/images/backgrounds/insurace-bg-1.jpg')  }}');">
            <div class="container">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">What we’re offering</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">We provide great categories<br> for you</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    @foreach(@$latestServices as $index=>$service)
                        <div class="col-md-6 col-lg-3">
                            <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                                <div class="portfolio-card__image">
                                    <img class="lazy" data-src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="">
                                </div><!-- /.portfolio-card__image -->
                                <div class="portfolio-card__content">
                                    <div class="portfolio-card__head">
                                        <h6 class="portfolio-card__tagline"></h6>
                                        <h3 class="portfolio-card__title">
                                            <a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a>
                                        </h3><!-- /.portfolio-card__title -->
                                    </div>
                                    <a href="{{route('service.single',$service->slug)}}" class="portfolio-card__link">
                                        <i class="icon-right-arrow"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.portfolio-card__content -->
                            </div><!-- /.portfolio-card -->
                        </div>
                    @endforeach
                </div>

            </div><!-- /.container -->
        </section><!-- /.service-page -->
    @endif


    @if(count($latestcourses) > 0)
        <section class="service-one service-home-one pt-120 pb-0">
            <div class="container">
                <div class="sec-title">
                    <h6 class="sec-title__tagline">Start your journey</h6>
                    <h3 class="sec-title__title">Study with our amazing <br> programme</h3>
                </div>
                <div class="row gutter-y-30 pt-20">
                    @foreach(@$latestcourses as $index=>$latest)
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
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
                    <div class="col-md-6 col-lg-4 align-items-stretch">
                        <div class="service-card service-featured wow fadeInUp h-100" data-wow-duration="1500ms" data-wow-delay="8ms">
                            <div class="service-card__bg" style="background-image: url('{{asset('assets/frontend/images/resources/service-featured.jpg')}}');"></div>
                            <div class="service-card__content">
                                <h3 class="service-card__title" style="margin-top: 40px">
                                    We offer best courses <br> specially made <br> for your success
                                </h3>
                                <p class="service-card__info">Start learning and exploring right away.</p>
                                <a href="{{ route('study-abroad.list') }}" class="modins-btn">View All <em></em></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(!empty($homepage_info->why_heading))
        <div class="about-three pt-120" style="position: relative;">
            <div class="about-one-home__shape">
                <img src="{{asset('assets/frontend/images/shapes/about-shape-1-3.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-three__left">
                            <div class="about-one__content">
                                <div class="sec-title">
                                    <h6 class="sec-title__tagline">Why choose us</h6>
                                    <h3 class="sec-title__title">{{ $homepage_info->why_heading ?? '' }}</h3>
                                </div>
                                <p class="about-one__text text-align-justify">{{ucfirst(@$homepage_info->why_description)}}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-three__right">
                            <div class="about-three__img-1">
                                <div class="img">
                                    <img class="lazy" data-src="{{ asset('/images/home/welcome/'.$homepage_info->what_image5) }}" alt="">
                                </div>
                                <div class="about-three__counter__map">
                                    <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/map-shape.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="funfact-one funfact-two">
            <div class="container">
                <div class="list-unstyled funfact-one__list">
                    <div class="funfact-two__lines">
                        <img src="{{ asset('assets/frontend/images/shapes/line.png') }}" alt="">
                        <img src="{{ asset('assets/frontend/images/shapes/line.png') }}" alt="">
                        <img src="{{ asset('assets/frontend/images/shapes/line.png') }}" alt="">
                        <img src="{{ asset('assets/frontend/images/shapes/line-4.png') }}" alt="">
                    </div>
                    <div class="row gutter-y-40">
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__item count-box">
                                <i class="icon-insurance"></i>
                                <div class="funfact-one__content">
                                    <div class="funfact-one__wrap">
                                        <h3 class="funfact-one__count count-text" data-stop="{{ $homepage_info->project_completed }}" data-speed="1500">
                                        </h3>
                                        <h3 class="funfact-one__count count-before">+</h3>
                                    </div>
                                    <p class="funfact-one__text">Projects Completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__item count-box">
                                <i class="icon-group"></i>
                                <div class="funfact-one__content">
                                    <div class="funfact-one__wrap">
                                        <h3 class="funfact-one__count count-text" data-stop="{{ $homepage_info->happy_clients }}" data-speed="1500"></h3>
                                        <h3 class="funfact-one__count count-before">+</h3>
                                    </div>
                                    <p class="funfact-one__text">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__item count-box">
                                <i class="icon-life-insurance"></i>
                                <div class="funfact-one__content">
                                    <div class="funfact-one__wrap">
                                        <h3 class="funfact-one__count count-text" data-stop="{{ $homepage_info->visa_approved }}" data-speed="1500">
                                        </h3>
                                        <h3 class="funfact-one__count count-before">+</h3>
                                    </div>
                                    <p class="funfact-one__text">Visa Approved</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__item count-box">
                                <i class="icon-success"></i>
                                <div class="funfact-one__content">
                                    <div class="funfact-one__wrap">
                                        <h3 class="funfact-one__count count-text" data-stop="{{ $homepage_info->success_stories }}" data-speed="1500"></h3>
                                        <h3 class="funfact-one__count count-before">+</h3>
                                    </div>
                                    <p class="funfact-one__text">Success Stories</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($latesttests) > 0)
        <div class="blog-three" style="margin-top: -120px;background-image: url('{{ asset('assets/frontend/images/pattern/blog-bg-3.jpg') }}');">
            <div class="container">
                <div class="blog-three__section_title d-flex justify-content-between align-items-center">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline">Trainings and tests</h6>

                        <h3 class="sec-title__title">Get the best trainings <br> you deserve</h3>
                    </div><!-- /.sec-title -->
                    <div class="blog-three__btn">
                        <a href="{{ route('test-preparation.list') }}" class="modins-btn">View All Tests <em></em></a>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    @foreach(@$latesttests as $index=>$latest)
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
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
                </div>
            </div>
        </div>
    @endif

    @if(count($clients) > 0)
        <div class="client-carousel client-carousel-one">
        <div class="client-carousel__shape-1">
            <img src="{{ asset('assets/frontend/images/shapes/line-shape-1.png') }}" alt="shape-1">
        </div>
        <div class="client-carousel__shape-2">
            <img src="{{ asset('assets/frontend/images/shapes/line-shape-2.png') }}" alt="shape-2">
        </div>

        <div class="container portfolio-one__home" style="padding-top: 0px">
            <div class="sec-title">

                <h6 class="sec-title__tagline">Our affiliation</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">Institutions We Proudly <br> Represent</h3><!-- /.sec-title__title -->
            </div>
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
                    @foreach($clients as $client)
                        <div class="client-carousel__one__item">
                            <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">
                                <img src="{{asset('/images/clients/'.@$client->image)}}"  alt="">
                            </a>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
    @endif

    @if(@$recruitments[0]->heading)
        <div class="feature-three" style="background-color:  #f4f3f8;">
            <div class="container">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">Our working process</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Easy steps to get the<br>best results</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->

                <div class="row gutter-y-30 pt-40">
                    @foreach(@$recruitments as $index=>$recruitment)
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                            <div class="feature-three__item">
                                <div class="feature-three__top">
                                    <div class="feature-three__counter">{{ $index + 1 }}</div>
                                    <div class="feature-three__icon">
                                        <i class="{{ recruitment_process_icons($index) }}"></i>
                                    </div>
                                </div>
                                <div class="feature-three__content h-75">
                                    <h3 class="feature-three__title">{{@$recruitment->title}}</h3>
                                    <p class="feature-three__info">{{ $recruitment->icon_description ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if(count($testimonials) > 0)
        <section class="testimonials-one">
            <div class="testimonials-one__bg" style="background-image: url('{{ asset('assets/frontend/images/backgrounds/testimonail-one-bg.jpg') }}');"></div>
            <div class="container-fluid">
                <div class="testimonials-one__heading">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline">Our Success Stories</h6>

                        <h3 class="sec-title__title">Hear what they’re talking about us</h3>
                    </div><!-- /.sec-title -->
                    <p class="testimonials-one__info">Live through our testimonials and stories to better understand how we operate and deliver success</p>
                </div>
                <div class="testimonials-one__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": true,
                "autoplay": true,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "576": {
                        "items": 2,
                        "margin":30
                    },
                    "992": {
                        "items": 2,
                        "margin": 30
                    }
                }
            }'>
                    @foreach($testimonials as $testimonial)
                        <div class="item align-items-stretch d-flex">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
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
                                    <div class="testimonials-card__content text-align-justify">
                                        {{ucfirst($testimonial->description)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif

    @if(count($latestPosts) > 0)
        <section class="blog-one blog-one--home">
            <div class="container">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">Recent News Feed</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Latest news & articles <br> from the blog</h3><!-- /.sec-title__title -->
                </div>
                <div class="row gutter-y-40">
                    @foreach(@$latestPosts as $index=>$post)
                        <div class="col-md-6 col-lg-4">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card__image-wrap">
                                <div class="blog-card__image">
                                    <img src="{{asset('/images/blog/thumb/thumb_'.@$post->image)}}" alt="">
                                    <img src="{{asset('/images/blog/thumb/thumb_'.@$post->image)}}" alt="">
                                    <a href="{{route('blog.single',$post->slug)}}" class="blog-card__image__link"><span class="sr-only">
                                             {{ucfirst(@$post->title)}}</span>
                                    </a>
                                </div>
                                <div class="blog-card__date"><span>{{date('d', strtotime($post->created_at))}}</span>
                                    {{date('M Y', strtotime($post->created_at))}}</div>
                            </div>
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="{{route('blog.single',@$post->slug)}}">
                                            <i class="fas fa-list-alt"></i>
                                            {{ucfirst(@$post->category->name)}}</a></li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="{{route('blog.single',$post->slug)}}">
                                        {{ucfirst(@$post->title)}} </a></h3>
                                <a href="{{route('blog.single',$post->slug)}}" class="blog-card__link">
                                    <span>Read more</span>
                                    <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

{{--    <div class="cta-one cta-one__home">--}}
{{--        <div class="container">--}}
{{--            <div class="cta-one__inner">--}}
{{--                <div class="cta-one__headline">--}}
{{--                    <div class="cta-one__icon">--}}
{{--                        <i class="icon-folder"></i>--}}
{{--                    </div>--}}
{{--                    <div class="cta-one__content">--}}
{{--                        <span class="cta-one__tagline">Quisque vel ortor</span>--}}
{{--                        <h3 class="cta-one__title">Start reporting or tracking your claims</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="cta-one__btn">--}}
{{--                    <a href="contact.html" class="modins-btn modins-btn-white">Track your Claim <em></em></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection

@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('css')
    <style>
        .card-image img {
            width: 370px; /* Set your preferred maximum width */
            height: 345px; /* Set your preferred maximum height */
            object-fit: cover;
        }
        .card-image:hover a::before {
            height: 100%;
        }
        a::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 0;
            background-color:  #2b2b5e;
            opacity: 0.4;
            transition: 0.3s;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">


@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">{{ucwords(@$page_detail->name)}}</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>{{ucwords(@$page_detail->name)}}</span></li>
            </ul>
        </div>
    </section>


    @foreach($sections as $key=>$value)

            @if($value == "basic_section")
                <section class="about-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-one__left">
                                    <div class="sec-title">

                                        <h6 class="sec-title__tagline">{{ $basic_elements->subheading ?? '' }}</h6><!-- /.sec-title__tagline -->

                                        <h3 class="sec-title__title">{{ $basic_elements->heading ?? '' }}</h3><!-- /.sec-title__title -->
                                    </div><!-- /.sec-title -->
                                    <div class="about-one__text text-align-justify" style="    margin-bottom: 15px;">
                                        {!! @$basic_elements->description !!}
                                    </div>
                                    <!-- /.about-one_text -->
                                    @if(@$basic_elements->button_link)
                                        <div class="about-one__btns">
                                            <a href="{{@$basic_elements->button_link}}" class="modins-btn about-one__link">{{ucwords(@$basic_elements->button ?? 'Discover More')}}<em></em></a>
                                            <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}" class="about-one__call">
                                                <i class="icon-calling"></i>
                                                <span>Call experts <br>
                                            <b>{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</b></span>
                                            </a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="about-one__content">
                                    <div class="about-one__img">
                                        <img class="lazy" data-src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}" alt="">
                                        {{--                                        <div class="about-one__shape-1">--}}
                                        {{--                                            <img src="{{ asset('assets/frontend/images/shapes/about-one-shape.png') }}" alt="">--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="about-one__shape-2">--}}
                                        {{--                                            <img src="{{ asset('assets/frontend/images/icon/logo-icon.png') }}" alt="logo-icon">--}}
                                        {{--                                        </div>--}}

                                    </div>
                                </div><!-- /.why-choose-two__content -->
                            </div><!-- /.col-lg-6 -->
                        </div>
                    </div>
                </section>
            @endif

            @if($value == "call_to_action_1")
                <section class="funfact-one" style=" padding-bottom: 30px;padding-top: 20px; background-image:url( '{{asset('assets/frontend/images/shapes/funfact-shape.png')}}' );">
                    <div class="container">
                        <div class="cta-one__inner_two">
                            <div class="cta-one__headline">
                                <div class="cta-one__icon">
                                    <i class="icon-folder"></i>
                                </div>
                                <div class="cta-one__content">
                                    <h3 class="cta-one__title" style="font-size: 30px;">{{ $call1_elements->heading }}</h3>
                                </div>
                            </div>
                            <div class="cta-one__btn">
                                <a href="{{@$call1_elements->button_link ?? '/contact-us'}}" class="modins-btn modins-btn-white">{{ucwords(@$call1_elements->button ?? 'Get Started')}} <em></em></a>
                            </div>
                        </div>
                    </div><!-- /.container -->
                </section>
            @endif

            @if($value == "background_image_section")
                <div class="about-two about-two--home">
                    <div class="about-two__bg">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-two__left wow">

                                    <div class="about-two__img-1">
                                        <img src="{{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}}" alt="about">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-two__right">
                                    <div class="sec-title">

                                        <h6 class="sec-title__tagline">{{ $bgimage_elements->subheading }}</h6><!-- /.sec-title__tagline -->

                                        <h3 class="sec-title__title">{{ $bgimage_elements->heading }}</h3><!-- /.sec-title__title -->
                                    </div><!-- /.sec-title -->
                                    <div class="about-two__info text-align-justify">
                                        {{ @$bgimage_elements->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($value == "flash_cards")
                <section class="service-three" style="background-image: url('{{ asset('assets/frontend/images/pattern/blog-bg-3.jpg') }}');">
                    <div class="container">
                        <div class="sec-title sec-title-stand">
                            <h6 class="sec-title__tagline">{{$flash_elements[0]->subheading ?? ''}}</h6>
                            <h3 class="sec-title__title">{{ $flash_elements[0]->heading }}</h3>
                        </div>
                        <div class="row gutter-y-30 mt-5">
                            @foreach(@$flash_elements as $index=>$flash_element)
                                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                                    <div class="service-three-card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="{{ $index }}00ms">
                                        <div class="service-three-card__inner h-100">
                                            <div class="service-three-card__icon">
                                                <i class="{{get_icons($index)}}"></i>
                                            </div>
                                            <div class="service-three-card__content h-100">
                                                <div class="service-three-card__img" style="background-image: url('{{asset('assets/frontend/images/service/service-3-bg.jpg')}}');">
                                                </div>
                                                <h3 class="service-three-card__title">
                                                    <a >{{ucwords(@$flash_element->list_header)}}</a>
                                                </h3><!-- /.service-three-card__title -->
                                                <p class="service-three-card__info text-align-justify">{{ucfirst(@$flash_element->list_description) }}</p>
                                            </div><!-- /.service-three-card__content -->
                                        </div>
                                    </div><!-- /.service-three-card -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif

            @if($value == "simple_header_and_description")
                <section class="portfolio-details pt-0">
                    <div class="container">
                        @if(@$header_descp_elements->heading!==null)
                            <div class="sec-title sec-title-stand">
                                <h6 class="sec-title__tagline">{{@$header_descp_elements->subheading ?? ''}}</h6>
                                <h3 class="sec-title__title">{{@$header_descp_elements->heading ?? ''}}</h3>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="portfolio-details__content custom-description text-align-justify">
                                    {!! @$header_descp_elements->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if($value == "map_and_description")
                <section class="contact-one pt-100" style="    padding-bottom: 20px;background-color: #f4f3f8;">
                    <div class="container">
                        <div class="contact-one__inner">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sec-title">
                                        <h6 class="sec-title__tagline">{{@$map_descp->subheading ?? ''}}</h6>
                                        <h3 class="sec-title__title">{{@$map_descp->heading ?? ''}}</h3>
                                    </div>
                                    <div class="contact-one__text text-align-justify custom-description" style="    max-width: max-content;">
                                        {!! @$map_descp->description !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-one__form__box" style="padding: 10px;">
                                        <iframe src="{{@$setting_data->google_map ?? ''}}"
                                                width="550" height="690" style="border:0;"
                                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if($value == "small_box_description")
                @if(count($process_elements)>0)
                <div id="rs-services" class="rs-services style6 bg14" style="margin-top: 0px;padding-top: 100px;padding-bottom: 100px;">
                    <div class="container">
                        <div class="sec-title text-center mb-50">
                            <span class="sub-text small"> {{ ucfirst($process_elements[0]->subheading ?? '') }}</span>
                            <h2 class="title title3">
                                {{@$process_elements[0]->heading}}
                            </h2>
                        </div>
                        <div class="services-box-area bg20">
                            <div class="row margin-0">
                                @for ($i = 1; $i <=@$process_num; $i++)
                                    <div class="col-lg-4 col-md-6 col-sm-6 padding-0">
                                        <div class="services-item">
                                            <div class="services-content">
                                                <h3 class="title"><a> {{ucwords(@$process_elements[$i-1]->list_header ??'')}}</a></h3>
                                                <p class="margin-0 text-justify">
                                                    {{ucfirst(@$process_elements[$i-1]->list_description)}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endif

            @if($value == "gallery_section")
                <section class="portfolio-one portfolio-page">
                    <div class="container">
                        @if(@$heading!==null)
                            <div class="sec-title sec-title-stand">
                                <h6 class="sec-title__tagline">{{@$subheading ?? ''}}</h6>
                                <h3 class="sec-title__title">{{@$heading ?? ''}}</h3>
                            </div>
                        @endif
                        <div class="row gutter-y-30">
                            @if(count(@$gallery_elements) > 0)
                                @foreach($gallery_elements as $gallery)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <div class="card" style="border: none">
                                                <div class="card-image gallery-item">
                                                    <a href="{{asset('/images/section_elements/gallery/'.@$gallery->filename)}}" data-fancybox="gallery">
                                                        <img src="{{asset('/images/section_elements/gallery/'.@$gallery->filename)}}" class="{{  $page_detail->slug =='legal-document' || $page_detail->slug =='legal-documents' ? "":"img-wrapper"   }}" alt="Image Gallery">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </section>
            @endif

            @if($value == "slider_list")
                @if(count($slider_list_elements)>0))
                <div class="blog-three">
                    <div class="container">
                        <div class="blog-three__section_title d-flex justify-content-between align-items-center">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline">{{ucwords(@$slider_list_elements[0]->description)}}</h6>

                                <h3 class="sec-title__title">{{ucwords(@$slider_list_elements[0]->heading)}}</h3>
                            </div><!-- /.sec-title -->
                        </div>
                        <div class="row gutter-y-30">
{{--                            @for ($i = 1; $i <=@$list_3; $i++)--}}
{{--                                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">--}}
{{--                                    <div class="blog-card-three" style="    background-color: #f4f3f8;">--}}
{{--                                        <img class="lazy" data-src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$slider_list_elements[$i-1]->list_image) }}" alt="">--}}
{{--                                        <div class="blog-card-three__content">--}}
{{--                                            <h3 class="blog-card-three__title">--}}
{{--                                                <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">--}}
{{--                                                    {{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a>--}}
{{--                                            </h3>--}}
{{--                                            <p>{{ elipsis( strip_tags(@$slider_list_elements[$i-1]->list_description) )}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endfor--}}

                            <div class="portfolio-page__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
                                            "margin": 30
                                        },
                                        "992": {
                                            "items": 3,
                                            "margin": 30
                                        }
                                    }
                                }'>
                                @for ($i = 1; $i <=@$list_3; $i++)
                                    <div class="item d-flex align-items-stretch">
                                        <div class="blog-card-three h-100" style="    background-color: #f4f3f8;">
                                            <img src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$slider_list_elements[$i-1]->list_image) }}" alt="">
                                            <div class="blog-card-three__content">
                                                <h3 class="blog-card-three__title">
                                                    <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">
                                                        {{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a>
                                                </h3>
                                                <p>{{ elipsis( strip_tags(@$slider_list_elements[$i-1]->list_description) )}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endif


        @endforeach



@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>// Fancybox Config
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "slideShow",
                "zoom",
                "close"
            ],
            loop: true,
            protect: true
        });
    </script>
    <script>
      $( document ).ready(function() {
          let selector = $('.custom-description').find('table').length;
          if(selector>0){
              $('.custom-description').find('table').addClass('table table-bordered');
          }
      });
  </script>
@endsection

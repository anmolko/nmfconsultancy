@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('css')
    <style>
        .card-image .img-wrapper {
            height: 345px; /* Set your preferred maximum height */
            object-fit: cover;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/common/lightbox.css')}}">
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




                <section class="prt-row padding_top_zero-section home02-about-us-section clearfix">
                        <div class="container">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="prt-col-bgimage-yes prt-bg col-bg-img-four prt-left-span mr_60 res-991-mr-0">
                                        <div class="prt-col-wrapper-bg-layer prt-bg-layer" style="background: url({{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}})"></div>
                                    </div>
                                    <img class="img-fluid prt-equal-height-image" src="{{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}}" alt="col-bgimage-4">
                                </div>
                                <div class="col-lg-6">
                                    <div class="prt-bg prt-col-bgcolor-yes bg-base-grey prt-bg prt-right-span spacing-4 z-index-2">
                                        <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                                            <div class="prt-col-wrapper-bg-layer-inner"></div>
                                        </div>
                                        <div class="layer-content">
                                            <!-- section title -->
                                            <div class="section-title style4">
                                                <div class="title-header">
                                                    <?php $split = explode(" ", @$call1_elements->heading);?>
                                                    <h3>{{@$bgimage_elements->subheading ?? ''}}</h3>
                                                    <h2 class="title">{{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$call1_elements->heading)}} <span>{{$split[count($split)-1]}}</span></h2>
                                                </div>
                                                <div class="title-desc">
                                                    <p>
                                                        {{ @$bgimage_elements->description }}
                                                    </p>
                                                </div>
                                            </div><!-- section title end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            @endif

            @if($value == "flash_cards")
                    <section class="prt-row services01-second-section clearfix">
                        <div class="container">
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <?php $split = explode(" ", @$flash_elements[0]->heading);?>

                                    <h3>{{$flash_elements[0]->subheading ?? ''}}</h3>
                                    <h2 class="title">{{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$call1_elements->heading)}}
                                        <span>{{$split[count($split)-1]}}</span></h2>
                                </div>
                            </div>
                            <div class="row g-0 row-equal-height prt-vertical_sep style2">
                                @foreach(@$flash_elements as $index=>$flash_element)
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-12">
                                        <div class="featured-icon-box style10 bg-base-dark res-575-pt-40">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-size-md">
                                                    <i class="{{get_icons($index)}}"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3> {{ucwords(@$flash_element->list_header)}}</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>  {{ucfirst(@$flash_element->list_description) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
            @endif

            @if($value == "simple_header_and_description")
                    <div class="sidebar prt-sidebar-left prt-blog bg-base-grey clearfix">
                        <div class="container">
                            <!-- row -->
                            <div class="row g-0">

                                <div class="col-lg-12 content-area prt-blog-single" style="padding: 5px 0px 80px 0px;">
                                    @if(@$header_descp_elements->heading!==null)
                                        <div class="section-title title-style-center_text pt-40">
                                            <div class="title-header">
                                                <h3>{{@$header_descp_elements->subheading ?? ''}}</h3>
                                                <h2 class="title"> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$header_descp_elements->heading)."\n"}} <span>{{$split[count($split)-1]}}</span></h2>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="prt-blog-single-content">
                                        <div class="entry-content">
                                            <div class="prt-box-desc-text custom-description">
                                                {!! @$header_descp_elements->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row end -->
                        </div>
                    </div>
                @endif

            @if($value == "map_and_description")
                    <section class="prt-row about02-welcome-section clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12">
                                    <div class="res-1199-mb-30">
                                        <!--section-title -->
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h3>{{@$map_descp->subheading ?? ''}}</h3>
                                                <?php $split = explode(" ", @$map_descp->heading);?>
                                                <span> {{$split[count($split)-1]}} </span>
                                                <h2 class="title">{{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$map_descp->heading)}}<br><span>{{$split[count($split)-1]}}  </span></h2>
                                            </div>
                                            <div class="title-desc text-justify custom-description">
                                                 {!! @$map_descp->description !!}
                                            </div>
                                        </div><!--section-title-end -->
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12">
                                    <iframe src="{{@$setting_data->google_map ?? ''}}"
                                            width="600" height="650" style="border:0;"
                                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <section class="prt-row service01-services-section bg-base-grey clearfix" style="    padding: 70px 0 70px;">
                        <div class="container">
                            @if(@$heading!==null)
                                <div class="section-title title-style-center_text">
                                    <div class="title-header">
                                        <h3> {{@$subheading ?? ''}}</h3>
                                        <?php $split = explode(" ", @$heading);?>
                                        <span> </span>
                                        <h2 class="title">{{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$heading)."\n"}}
                                            <span>{{$split[count($split)-1]}} </span></h2>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                @if(count(@$gallery_elements) > 0)
                                    @foreach($gallery_elements as $gallery)
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                <div class="card" style="border: none">
                                                    <div class="card-image gallery-item" style="background: #F0F5FB">
                                                        <a href="{{asset('/images/section_elements/gallery/'.@$gallery->filename)}}" data-fancybox="gallery">
                                                            <img src="{{asset('/images/section_elements/gallery/'.@$gallery->filename)}}" class="{{  $page_detail->slug =='legal-document' || $page_detail->slug =='legal-documents' ? "":"img-wrapper"   }}" alt="Image Gallery">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!-- featured-imagebox end-->
                                        </div>

                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </section>
            @endif

            @if($value == "slider_list")
                @if(count($slider_list_elements)>0))
                    <section class="prt-row home01-services-section bg-img1 bg-base-grey prt-bg prt-bgimage-yes clearfix">
                        <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
                        <div class="container" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-10 m-auto">
                                    <!--section-title-->
                                    <div class="section-title title-style-center_text">
                                        <div class="title-header">
                                            <h3>{{ucwords(@$slider_list_elements[0]->description)}}</h3>
                                            <?php
                                            $split = explode(" ", @$slider_list_elements[0]->heading);?>
                                            <h2 class="title">{{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$slider_list_elements[0]->heading)}} <span>{{$split[count($split)-1]}}</span></h2>
                                        </div>
                                    </div><!--section-title end-->
                                </div>
                            </div>
                            <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}} , {"breakpoint":991,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                                @for ($i = 1; $i <=@$list_3; $i++)
                                    <div class="col-lg-6">
                                        <!-- featured-imagebox-post -->
                                        <div class="featured-imagebox featured-imagebox-services style1">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid" src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$slider_list_elements[$i-1]->list_image) }}" alt="blog_img">
                                            </div><!-- featured-thumbnail end-->
                                            <div class="featured-details-wrap">
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3><a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}" tabindex="0">
                                                                {{ucwords(@$slider_list_elements[$i-1]->list_header)}}
                                                            </a></h3>
                                                    </div>
                                                </div>
                                                <div class="featured-explore-more">
                                                    <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">Explore more</a>
                                                </div>
                                            </div>
                                            <div class="services-details-wrap">
                                                <div class="services-details-box">
                                                    <div class="services-content">
                                                        <div class="services-title">
                                                            <h3><a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}" tabindex="0"> {{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a></h3>
                                                        </div>
                                                        <div class="services-desc">
                                                            <p>{{ elipsis( strip_tags(@$slider_list_elements[$i-1]->list_description) )}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="services-explore-more">
                                                        <a href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}">Explore more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- featured-imagebox-post end -->
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </section>
                    @endif
            @endif


        @endforeach



@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script>
      $( document ).ready(function() {
          let selector = $('.custom-description').find('table').length;
          if(selector>0){
              $('.custom-description').find('table').addClass('table table-bordered');
          }
      });
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
@endsection

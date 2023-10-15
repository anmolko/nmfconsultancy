@extends('frontend.layouts.seo_master')
@section('css')
    <style>

        /* Style the tab buttons */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
        }

        .active{
            display: inline;
        }

    </style>

@endsection
@section('seo')
    <title>{{ucfirst(@$row->title)}} | {{ucwords(@$row->website_name ?? '')}}   </title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$row->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$row->meta_tags)}}' />
    <meta property='article:published_time' content='{{@$row->updated_at ?? @$row->created_at}}' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$row->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$row->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="{{ucwords(@$setting_data->website_name ?? '')}} " />
    <meta property="og:image" content="{{asset('/images/course/'.@$row->image)}}" />
    <meta property="og:image:url" content="{{asset('/images/course/'.@$row->image)}}" />
    <meta property="og:image:size" content="300" />
@endsection

@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">{{ $row->title }}</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('study-abroad.list') }}">Course</a></li>
                <li><span>Course details</span></li>
            </ul>
        </div>
    </section>


    <section class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="portfolio-details__img">
                    <img class="lazy" data-src="{{ @$row->image ? asset('/images/course/'.@$row->image):''}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="portfolio-details__content">
                        <div class="toolbar mb2 mt2">
                            @if($row->description)
                                <button class="btn-filter tablinks active" id="description">Description</button>
                            @endif
                            @if($row->courseDescription)
                                @foreach($row->courseDescription as $index=>$detail)
                                        <button class="btn-filter tablinks" id="{{ str_replace(' ','-',$detail->title) }}">{{ $detail->title }}</button>
                                @endforeach
                            @endif
                        </div>

                        <div class="tabcontent custom-description text-align-justify Tab1 active">
                            {!! $row->description ?? '' !!}
                        </div>

                        @if($row->courseDescription)
                            @foreach($row->courseDescription as $index=>$detail)
                                @include('frontend.pages.course.includes.course_description')
                            @endforeach
                        @endif

                        <div class="blog-details__meta" style="    border-top: 1px solid var(--nmf-border-color, #e0ddea);">
                            <h4 class="blog-details__tags__title">Share</h4>
                            <div class="blog-details__social">
                                <a href="#" tabindex="0" rel="noopener" aria-label="facebook"><i onclick='fbShare("{{route('study-abroad.single',$row->slug)}}")' class="fab fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" tabindex="0" rel="noopener" aria-label="twitter"><i onclick='twitShare("{{route('study-abroad.single',$row->slug)}}","{{ $row->title }}")' class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" tabindex="0" rel="noopener" aria-label="pinterest"><i onclick='whatsappShare("{{route('study-abroad.single',$row->slug)}}","{{ $row->title }}")' class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.portfolio-details -->

    <section class="portfolio-carousel pt-100 pb-100" style="    margin-bottom: 60px;background-image: url('{{ asset('assets/frontend/images/pattern/blog-bg-3.jpg') }}');">
        <div class="container">
            <div class="portfolio-carousel__title text-center">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">Recent Courses</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">View our catalogue</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
            </div>
            <div class="portfolio-page__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": true,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
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
                @foreach(@$latestCourses as $index=>$latest)
                    <div class="item ">
                        <div class="col-md-12 col-lg-12 d-flex align-items-stretch">
                            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                            <div class="service-card__image">
                                <img src="{{ @$latest->image ? asset('/images/course/thumb/thumb_'.@$latest->image):''}}" alt="">
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
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('js')
<script>
    function fbShare(url) {
      window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
    }
    function twitShare(url, title) {
        window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
    }
    function whatsappShare(url, title) {
        message = title + " " + url;
        window.open("https://api.whatsapp.com/send?text=" + message);
    }
    $( document ).ready(function() {
        let selector = $('.custom-description').find('table').length;
        if(selector>0){
            $('.custom-description').find('table').addClass('table table-bordered');
        }
    });
</script>
<script>
    $(document).ready(function(){
        $('.tablinks').click(function(){
            var tab_id = $(this).attr('id');
            console.log(tab_id);
            $('.tabcontent').removeClass('active');
            $('.' + tab_id).addClass('active');

            $('.tablinks').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

@endsection

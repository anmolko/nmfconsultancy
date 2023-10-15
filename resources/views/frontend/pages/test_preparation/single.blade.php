@extends('frontend.layouts.seo_master')
@section('css')
    <style>

    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
    }
    .canosoft-listing ul,.canosoft-listing ol {
        padding: 0;
        margin-left: 15px;
    }
		.home-one a.active {
		color: #fc653c !important;
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
    <meta property="og:site_name" content="{{ucwords(@$row->website_name ?? '')}} " />
    <meta property="og:image" content="{{asset('/images/test_preparation/'.@$row->banner_image)}}" />
    <meta property="og:image:url" content="{{asset('/images/test_preparation/'.@$row->banner_image)}}" />
    <meta property="og:image:size" content="300" />
@endsection

@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">{{ $row->title }}</h2>
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
                    <div class="service-details__content">
                        <div class="service-details__thumbnail">
                            <img class="lazy" data-src="{{ @$row->image ? asset('/images/test_preparation/'.@$row->image):''}}" alt="">
                        </div>
                        <h3 class="service-details__title">{{ $row->title }}</h3>
                        <div class="service-details__text custom-description text-align-justify">      {!!  $row->description ?? '' !!}</div>
                    </div>
                    <div class="blog-details__meta" style="    border-top: 1px solid #fff;">
                        <h4 class="blog-details__tags__title">Share</h4>
                        <div class="blog-details__social">
                            <a href="#" tabindex="0" rel="noopener" aria-label="facebook"><i onclick='fbShare("{{route('test-preparation.single',$row->slug)}}","{{ $row->title }}")' class="fab fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" tabindex="0" rel="noopener" aria-label="twitter"><i onclick='twitShare("{{route('test-preparation.single',$row->slug)}}","{{ $row->title }}")' class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" tabindex="0" rel="noopener" aria-label="pinterest"><i onclick='whatsappShare("{{route('test-preparation.single',$row->slug)}}","{{ $row->title }}")' class="fab fa-whatsapp" aria-hidden="true"></i></a>
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
@endsection

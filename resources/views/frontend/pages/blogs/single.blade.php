@extends('frontend.layouts.seo_master')
@section('seo')
    <title>{{ucfirst(@$singleBlog->title)}} |  {{ucwords(@$setting_data->website_name ?? 'Careerlink')}}</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleBlog->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleBlog->meta_tags)}}' />
    <meta property='article:published_time' content='{{ @$singleBlog->updated_at ?? $singleBlog->created_at}}' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleBlog->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleBlog->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="{{ucwords(@$setting_data->website_name ?? 'Careerlink')}}" />
    <meta property="og:image" content="{{asset('/images/blog/'.@$singleBlog->image)}}" />
    <meta property="og:image:url" content="{{asset('/images/blog/'.@$singleBlog->image)}}" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">{{ @$singleBlog->title }}</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Blog details</span></li>
            </ul>
        </div>
    </section>


    <section class="blog-one blog-one--page">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">

                    <div class="blog-details">
                        <div class="blog-card blog-card-two @@extraClassName" @@extraAttr>
                            <div class="blog-card__image-wrap">
                                <div class="blog-card__image">
                                    <img class="lazy" data-src="{{ asset('/images/blog/'.@$singleBlog->image)}}" alt="">
                                </div>
                                <div class="blog-card__date"><span>{{date('d', strtotime($singleBlog->created_at))}}</span>
                                    {{date('M Y', strtotime($singleBlog->created_at))}}</div>
                            </div><!-- /.blog-card__image -->
                            <div class=" blog-card-two__content">
                                <h3 class="blog-card__title">{{ ucwords(@$singleBlog->title) }}</h3>
                                <div class="blog-card-two__text custom-description text-align-justify">
                                    {!! $singleBlog->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="blog-details__meta">
                            <div class="blog-details__tags">
                                <h4 class="blog-details__tags__title">Category</h4><!-- /.blog-details__tags__title -->
                                <div class="sidebar__tags">
                                    <a href="{{route('blog.category',$singleBlog->category->slug)}}">{{@$singleBlog->category->name }}</a>
                                </div>
                            </div>
                            <div class="blog-details__social">
                                <a href="#" tabindex="0" rel="noopener" aria-label="facebook">
                                    <i onclick='fbShare("{{route('blog.single',$singleBlog->slug)}}")'
                                         class="fab fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" tabindex="0" rel="noopener" aria-label="twitter">
                                    <i onclick='twitShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'
                                       class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" tabindex="0" rel="noopener" aria-label="pinterest">
                                    <i onclick='whatsappShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")'
                                       class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    @include('frontend.pages.blogs.sidebar')
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
                $('.custom-description').find('table').addClass('table table-bordered table-responsive');
            }
        });
</script>
@endsection

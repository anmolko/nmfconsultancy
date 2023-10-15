@extends('frontend.layouts.master')
@section('title') Blog @endsection

@section('content')


    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Blog</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Blog</span></li>
            </ul>
        </div>
    </section>

    <section class="blog-one blog-one--page">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="row gutter-y-30">
                        @foreach($allPosts as $index=>$post)
                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{$index}}00ms'>
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

                        <div class="pagination-block">
                            {{ $allPosts->links('vendor.pagination.default') }}
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

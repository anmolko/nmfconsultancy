@extends('frontend.layouts.master')
@section('title') {{ucwords(@$singleAlbum->name)}} | Album @endsection
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
            <h2 class="page-header__title">{{ucwords(@$singleAlbum->name)}}'s Gallery</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Album Gallery</span></li>
            </ul>
        </div>
    </section>

    <section class="portfolio-one portfolio-page">
        <div class="container">
            <div class="row gutter-y-30">
                @if(count(@$singleAlbum->gallery) > 0)
                    @foreach($singleAlbum->gallery as $index=>$gallery)
                        <div class="col-md-6 col-lg-4">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <div class="card" style="border: none">
                                    <div class="card-image gallery-item">
                                        <a href="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" data-fancybox="gallery">
                                            <img src="{{asset('/images/albums/gallery/'.@$gallery->filename)}}" class="img-wrapper" alt="Image Gallery">
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
@endsection

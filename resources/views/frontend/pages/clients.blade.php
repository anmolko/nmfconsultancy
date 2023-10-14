@extends('frontend.layouts.master')
@section('title') Clients @endsection
@section('css')
    <style>
        .tile {
            display: none;
        }
        .btn-filter {
            position: relative;
            display: inline-block;
            font-size: 14px;
            text-transform: uppercase;
            color: #1e2434;
            text-align: center;
            padding: 14px 30px;
            background-color: #fff;
            border: 1px solid #e1e8e4;
            cursor: pointer;
            margin: 0px 8.5px;
            margin-bottom: 15px;
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .btn-filter.active{
            color: var(--nmf-white);
            background-color: var(--nmf-primary);
        }
        .scale-anm img{
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
            -webkit-box-shadow: 0 10px 60px rgba(0, 0, 0, 0.07);
            box-shadow: 0 10px 60px rgba(0, 0, 0, 0.07);
            padding: 15px;
        }
    </style>
@endsection
@section('content')


    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Our Clients</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Our Clients</span></li>
            </ul>
        </div>
    </section>

    <section class="portfolio-one portfolio-page">
        <div class="container">
            <div class="row gutter-y-30">
                <div id="filters" class="toolbar mb2 mt2">
                    <button class="btn-filter fil-cat filter active"  data-filter="all">All</button>
                    @foreach($country as $index=>$cn)
                        <button class="btn-filter fil-cat filter" data-rel="{{$index}}" data-filter=".{{$index}}">{{ ucfirst($cn) }}</button>
                    @endforeach
                </div>
            </div>
            <div id="portfolio" class="row">
                @foreach($clients as $client)
                    <div class="col-md-6 col-lg-4 tile scale-anm {{$client->country}}">
                        <div class="portfolio-card wow">
                            <div class="portfolio-card__image">
                                <img src="{{asset('/images/clients/'.@$client->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <script>
        $('#portfolio').mixItUp({

            selectors: {
                target: '.tile',
                filter: '.filter',
                sort: '.sort-btn'
            },

            animation: {
                animateResizeContainer: false,
                effects: 'fade scale'
            }

        });
    </script>
@endsection

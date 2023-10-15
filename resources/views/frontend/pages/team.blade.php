@extends('frontend.layouts.master')
@section('title') Our Team @endsection
@section('css')
    <style>
        .team-member:after{
            height: 340px;
        }
    </style>
@endsection
@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Our Team</h2>
            <ul class="modins-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Our Team</span></li>
            </ul>
        </div>
    </section>

    <section class="team-one team-one--page">
        <div class="container">
            <div class="row gutter-y-30">
                @foreach($teams as $index=>$team)
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{ $index }}00ms'>
                            <div class="team-card__image">
                                <img src="{{$team->image ? asset('/images/teams/'.$team->image ):''}}" alt="Adman michel">
                                <div class="team-card__hover">
                                    @if(!empty(@$team->fb) || !empty(@$team->twitter) || !empty(@$team->linkedin) || !empty(@$team->insta))
                                        <div class="team-card__social">
                                            <i class="fa fa-share-alt"></i>
                                            <div class="list-unstyled team-card__social__list">
                                                @if(!empty(@$team->fb))
                                                    <a href="{{ $team->fb }}">
                                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                                        <span class="sr-only">Facebook</span>
                                                    </a>
                                                @endif
                                                @if(!empty(@$team->twitter))
                                                    <a href="{{ $team->twitter }}">
                                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        <span class="sr-only">Twitter</span>
                                                    </a>
                                                @endif
                                                @if(!empty(@$team->linkedin))
                                                    <a href="{{ $team->linkedin }}">
                                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                        <span class="sr-only">Pinterest</span>
                                                    </a>
                                                @endif
                                                @if(!empty(@$team->insta))
                                                    <a href="{{ $team->insta }}">
                                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                                        <span class="sr-only">Instagram</span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                </div><!-- /.team-card__hover -->
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <h3 class="team-card__title">
                                    <a >{{ucfirst(@$team->name)}}</a>
                                </h3><!-- /.team-card__title -->
                                <h6 class="team-card__designation">{{ucfirst(@$team->post)}}</h6><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                            <div class="team-card__bg"></div><!-- /.team-card__image__bg -->
                        </div><!-- /.team-card -->
                    </div>
                @endforeach

                <div class="pagination-block">
                    {{ $teams->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection

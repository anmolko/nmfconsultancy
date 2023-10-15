<div class="sidebar stickthis">
    <aside class="widget-area">
        <div class="sidebar__single">
            <h4 class="sidebar__title">Latest Course</h4>
            <ul class="sidebar__posts list-unstyled">
                @foreach($latestCourses as $index => $latest)
                    <li class="sidebar__posts__item">
                        <div class="sidebar__posts__image">
                            <img class="thumbnail lazy" data-src="{{ @$latest->image ? asset('/images/course/thumb/thumb_'.@$latest->image):''}}"  alt="">
                        </div>
                        <div class="sidebar__posts__content">
                            <p class="sidebar__posts__meta"><a href="{{route('blog.single',$latest->slug)}}">
                                    <i class="fa fa-calendar-alt"></i>
                                    {{date('d M Y', strtotime($latest->created_at))}}</a></p>
                            <h4 class="sidebar__posts__title"><a href="{{ route('study-abroad.single',$latest->slug ) }}">
                                    {{ucwords(@$latest->title ?? '')}}
                                </a></h4>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="service-sidebar__single mt-5">
            <div class="service-sidebar__contact background-base text-center" style="background-image: url( '{{ asset('assets/frontend/images/service/sidebar-service-bg.jpg') }}');">
                <div class="service-sidebar__contact__icon">
                    <i class="icon-phone-call"></i>
                </div>
                <h3 class="service-sidebar__contact__title">Reach us quickly</h3><!-- /.service-sidebar__contact__title -->
                <p class="service-sidebar__contact__number">
                    <span>Talk to an expert</span> <br>
                    <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}">{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</a>
                </p>
            </div>
        </div>
    </aside>
</div>



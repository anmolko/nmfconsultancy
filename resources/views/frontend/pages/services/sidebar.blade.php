<div class="service-sidebar">
    @if(count($latestServices)>0)
        <div class="service-sidebar__single">
            <ul class="list-unstyled service-sidebar__nav">
                @foreach($latestServices as $index => $latest)
                    <li><a href="{{route('service.single',$latest->slug)}}">{{ $latest->title ?? '' }}</a></li>
                @endforeach`
            </ul>
        </div>
    @endif

    <div class="service-sidebar__single ">
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

</div>

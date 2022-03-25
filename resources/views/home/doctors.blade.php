@php $teams = \App\Team::all();  @endphp
@if($teams)
<!-- Start Doctor Area -->
<section class="doctor-area bg-shape pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-12">
                <div class="section-title">
                    <h2>{{ __('translation.our-specialized-doctor-details') }}</h2>
                    <div class="bar"></div>
                </div>
            </div>
        </div>

        <div class="row">
          @foreach($teams as $team)
            <div class="col-lg-4 col-md-6">
                <div class="single-doctor">
                    <div class="doctor-image">
                        <a href="javascript:;"><img src="{{ 'storage/'.str_replace('\\', '/', $team->image) }}" alt="image"></a>
                    </div>

                    <div class="doctor-content">
                        <h3><a href="javascript:;">@if($lang=='de') {{$team->name_de}} @else {{$team->name_ar}} @endif</a></h3>
                        <p class="designation pt-3">@if($lang=='de') {{$team->description_de}} @else {{$team->description_ar}} @endif</p>
                        {{--<a href="javascript:;" class="department-btn">@if($lang=='de') {{$team->position_de}} @else {{$team->position_ar}} @endif</a>--}}

{{--                        <div class="doctor-btn">
                            <a href="/doctors-details/{{$team->id}}" class="default-btn">{{ __('translation.learn-more') }}</a>
                        </div>--}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Doctor Area -->
@endif
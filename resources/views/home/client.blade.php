@php $testimonials = \App\Testimonial::all();  @endphp
@if($testimonials)
<!-- Start Client Area -->
<section class="client-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="client-inner-box">
                    <div class="title">
                        <h3> {{ __('translation.testimonials') }}</h3>
                    </div>

                    <div class="client-slider owl-carousel owl-theme">
                        @foreach($testimonials as $testimonial)
                        <div class="client-item">
                            <p>@if($lang=='de') {{$testimonial->text_de}} @else {{$testimonial->text_ar}} @endif</p>

                            <div class="client-info">
                                <img src="{{ 'storage/'.str_replace('\\', '/', $testimonial->image) }}" alt="image">
                                <h3>@if($lang=='de') {{$testimonial->title_de}} @else {{$testimonial->title_ar}} @endif</h3>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="client-image">
                    <img src="{{ asset('img/client/client-1.png')  }}" alt="image">

                    <div class="client-shape">
                        <img src="{{ asset('img/client/client-shape-1.png')  }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Client Area -->
@endif
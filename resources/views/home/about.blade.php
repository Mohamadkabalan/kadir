@php $about = \App\About::first();  @endphp
<!-- Start About Area -->
<section class="about-area pb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ 'storage/'.str_replace('\\', '/', $about->image1) }}" alt="image">
{{--                    <img src="{{ 'storage/'.str_replace('\\', '/', $about->image2) }}" alt="image">--}}

                    <div class="about-shape">
                        <div class="shape-1">
                            <img src="{{ asset('img/about/about-shape-1.png')  }}" alt="image">
                        </div>
                        <div class="shape-2">
                            <img src="{{ asset('img/about/about-shape-2.png')  }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <h3>@if($lang=='de') {{$about->title_de}} @else {{$about->title_ar}}  @endif</h3>
                    <div class="bar"></div>
                    <p>@if($lang=='de') {{$about->text_de}} @else {{$about->text_ar}}  @endif</p>

{{--
                    <ul class="about-list">
                        <li>
                            <i class="flaticon-checked"></i>
                            A Good Environment For Work
                        </li>

                        <li>
                            <i class="flaticon-checked"></i>
                            Digital Laboratory
                        </li>

                        <li>
                            <i class="flaticon-checked"></i>
                            Emergency Services
                        </li>

                        <li>
                            <i class="flaticon-checked"></i>
                            Professional Doctors
                        </li>

                        <li>
                            <i class="flaticon-checked"></i>
                            Scientific skills  For Getting A Better Result
                        </li>
                    </ul>
--}}

                    @if($page=='home')
                    <div class="about-btn">
                        <a href="/about" class="default-btn">{{ __('translation.more-about-us') }}</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

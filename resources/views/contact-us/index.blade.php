@php $lang=app()->getLocale(); $page='contact-us';  @endphp
@extends('layouts.master')

@section('page_title')
    Contact Us
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{ __('translation.contact') }}</h2>
                        <ul>
                            <li>
                                <a href="/">{{ __('translation.home') }}</a>
                            </li>
                            <li>{{ __('translation.contact') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>

                        <h3>{{ __('translation.email') }}</h3>
                        <p><a href="mailto:{{ __('translation.email-address1') }}">{{ __('translation.email-address1') }}</a></p>
                        <p><a href="mailto:{{ __('translation.email-address2') }}">{{ __('translation.email-address2') }}</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>

                        <h3>{{ __('translation.address') }}</h3>
                        <p>{{ __('translation.address-details')  }} </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class='bx bxs-phone-call'></i>
                        </div>

                        <h3>{{__('translation.phone')}}</h3>
                        <p><a href="tel:0041044 8292412">{{__('translation.phone-number')}}</a></p>
                        <p><a href="tel:0041798385376">{{__('translation.phone-number2')}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="title">
                            <span>{{__('translation.contact')}}</span>
                            <h3>{{__('translation.get-in-touch')}}</h3>
                        </div>

                        <form id="contactForm" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="{{ __('translation.name') }}*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="{{ __('translation.email') }}*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="{{ __('translation.phone') }}*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="{{ __('translation.your-subject') }}*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="{{ __('translation.your-message') }}*"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

{{--
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkme">
                                        <label class="form-check-label" for="checkme">
                                            Accept <a href="terms-of-service.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>

--}}
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">{{ __('translation.send-message') }}</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2698.9124549952217!2d8.563664815624527!3d47.433150379173476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aa1dfc20a7459%3A0xe186fe4592298e4f!2sFacharzt%20f%C3%BCr%20Kinder%20und%20Jugendliche%20%E2%80%93%20Praktischer%20Arzt%20f%C3%BCr%20Allgemeinmedizin!5e0!3m2!1sde!2sch!4v1646941593552!5m2!1sde!2sch"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('submit','#contactForm',function(e){
                e.preventDefault();
                $.ajax({
                    url: "/contact/create",
                    method: "POST",
                    data : $('#contactForm').serialize(),
                    success: function (data) {
                        if(data.status==200){
                            $('#contactForm')[0].reset();
                            $('#msgSubmit').html(data.message);
                        }
                    }
                });
            });
        });
    </script>
@endpush

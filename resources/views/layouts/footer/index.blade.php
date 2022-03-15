<!-- Start Footer Area -->
<section class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">


            <div class="col-lg-4 col-sm-6">
                <div class="single-footer-widget">
                    <h2>{{__('translation.sitemap')}} </h2>

                    <ul class="quick-links">
                        <li>
                            <a href="/home">{{ __('translation.home')  }}</a>
                        </li>
                        <li>
                            <a href="/about">{{ __('translation.about')  }}</a>
                        </li>
                        <li>
                            <a href="/services">{{ __('translation.services')  }}</a>
                        </li>
                        <li>
                            <a href="/blogs">{{ __('translation.gallery') }}</a>
                        </li>
                        <li>
                            <a href="/team">{{ __('translation.team') }}</a>
                        </li>
                        <li>
                            <a href="/contact-us">{{ __('translation.contact-us') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-footer-widget">
                    <h2>{{ __('translation.opening-hours') }}</h2>

                    <ul class="opening-hours">
                        <li>{{ __('translation.monday') }}: <span>{{ __('translation.monday-opening-hours') }}</span></li>
                        <li>{{ __('translation.tuesday') }}: <span>{{ __('translation.tuesday-opening-hours') }}</span></li>
                        <li>{{ __('translation.wednesday') }}: <span>{{ __('translation.wednesday-opening-hours') }}</span></li>
                        <li>{{ __('translation.thursday') }}: <span>{{ __('translation.thursday-opening-hours') }}</span></li>
                        <li>{{ __('translation.friday') }}: <span>{{ __('translation.friday-opening-hours') }}</span></li>
                        <li>{{ __('translation.saturday') }}: <span>{{ __('translation.saturday-opening-hours') }}</span></li>
                        <li>{{ __('translation.sunday') }}: <span>{{ __('translation.sunday-opening-hours') }}</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h2>{{ __('translation.get-in-touch') }}</h2>

                    <ul class="footer-contact-info">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>{{ __('translation.phone') }}</span>
                            <p><a href="tel:882569756">{{ __('translation.phone-number') }}</a></p>
                            <p><a href="tel:0798385376">{{ __('translation.phone-number2') }}</a></p>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>{{ __('translation.email1') }}</span>
                            <a href="mailto:hello@mediva.com">{{ __('translation.email-address1') }}</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>{{ __('translation.email2') }}</span>
                            <a href="mailto:hello@mediva.com">{{ __('translation.email-address2') }}</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>{{ __('translation.address') }}</span>
                            {!! __('translation.address-info') !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Area -->

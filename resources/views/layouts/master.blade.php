@php $lang=app()->getLocale(); @endphp
<!DOCTYPE html>
<html   @if($lang == 'ar') lang="ar" dir="rtl" @else lang="de"  @endif>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css')  }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css')  }}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{ asset('css/boxicons.min.css')  }}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('css/flaticon.css')  }}">
        <!-- Odometer Min CSS -->
        <link rel="stylesheet" href="{{ asset('css/odometer.min.css')  }}">
        <!-- Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')  }}">
        <!-- Carousel Default CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')  }}">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css')  }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('css/nice-select.css')  }}">
        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('css/datetimepicker.min.css')  }}">
        <!-- Month CSS -->
        <link rel="stylesheet" href="{{  asset('css/month.min.css') }}">
        <!-- Imagelightbox CSS -->
        <link rel="stylesheet" href="{{ asset('css/imagelightbox.min.css')  }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css')  }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css')  }}">

        @if(app()->getLocale() == 'ar')
        <!-- RTL CSS -->
        <link rel="stylesheet" href="{{ asset('css/rtl.css')  }}">
        @endif

        <title>Arztpraxiskadir |
        @hasSection('page_title')
        @yield('page_title')
        @endif
        </title>

        <link rel="alternate" hreflang="en" href="https://arztpraxiskadir.ch/">
        <link rel="alternate" hreflang="ar" href="https://arztpraxiskadir.ch/">
        <link rel="canonical" href="https://arztpraxiskadir.ch/">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Home - arztpraxiskadir">
        <meta property="og:description" content="Facharzt für Kinder und Jugendliche – Praktischer Arzt für Allgemeinmedizin-Dr.med Omar Kadir">
        <meta property="og:url" content="https://arztpraxiskadir.ch/">
        <meta property="og:site_name" content="arztpraxiskadir">
        <meta property="article:modified_time" content="2021-10-21T09:37:54+00:00">
        <meta property="og:image" content="https://www.arztpraxiskadir.ch/images/arztpraxiskadir.png">

        @yield('head')

        @section('seo')

        @show

        @stack('css')

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png')  }}">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-T587L86');</script>
        <!-- End Google Tag Manager -->

    </head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T587L86"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- End Preloader Area -->
    @include('layouts.header.index')
    <div id="app">
        @yield('content-wrapper')
    </div>

    @section('footer')

    @include('layouts.footer.index')

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright © 2022 arztpraxiskadir. All Rights Reserved by
                    <a href="https://itvision.me/" target="_blank">
                        itvision
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Slim JS -->
    <script src="{{ asset('js/jquery.min.js')  }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/popper.min.js')  }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js')  }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('js/jquery.meanmenu.js')  }}"></script>
    <!-- Appear Min JS -->
    <script src="{{ asset('js/jquery.appear.min.js')  }}"></script>
    <!-- Odometer Min JS -->
    <script src="{{ asset('js/odometer.min.js')  }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('js/owl.carousel.min.js')  }}"></script>
    <!-- Popup JS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')  }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('js/jquery.nice-select.min.js')  }}"></script>
    <!-- Datetimepicker JS -->
    <script src="{{ asset('js/datetimepicker.min.js')  }}"></script>
    <!-- Month JS -->
    <script src="{{ asset('js/month.min.js')  }}"></script>
    <!-- Imagelightbox JS -->
    <script src="{{ asset('js/imagelightbox.min.js')  }}"></script>
    <!-- Ajaxchimp JS -->
    <script src="{{ asset('js/jquery.ajaxchimp.min.js')  }}"></script>
    <!-- Form Validator JS -->
    <script src="{{ asset('js/form-validator.min.js')  }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('js/contact-form-script.js')  }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('js/wow.min.js')  }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/main.js')  }}"></script>

    @show
    @stack('scripts')
</body>

</html>
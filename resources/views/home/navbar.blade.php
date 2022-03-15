<!-- Start Navbar Area -->
<div class="navbar-area relative-color">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('img/logo.png')  }}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/logo-2.png')  }}" alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link @if($page=='home') active @endif">
                                {{ __('translation.home') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/team" class="nav-link  @if($page=='team') active @endif" >
                                {{ __('translation.team') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/about" class="nav-link  @if($page=='about') active @endif">
                                {{ __('translation.about') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/services" class="nav-link  @if($page=='services') active @endif">
                                {{ __('translation.services') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/blogs" class="nav-link  @if($page=='blogs') active @endif">
                                {{ __('translation.gallery') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/contact-us" class="nav-link  @if($page=='contact-us') active @endif">
                                {{ __('translation.contact-us') }}
                            </a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                                    <span class="hotline">
                                        {{ __('translation.hotline') }}:
                                        <a href="tel:882563789966">{{ __('translation.phone-number') }}</a>
                                    </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                                    <span class="hotline">
                                        {{ __('translation.hotline') }}:
                                        <a href="tel:882563789966">{{ __('translation.phone-number') }}</a>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

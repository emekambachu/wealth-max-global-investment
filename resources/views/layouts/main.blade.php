<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />
    <!-- Site Properties -->
    <title>@yield('title') - Wealth Max Global Investment</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('main/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('main/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('main/css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('main/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('main/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{ asset('main/fonts/inter-v2-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('main/fonts/inter-v2-latin-500.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('main/fonts/inter-v2-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>

    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{ asset('wealth_max_logoonly.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('wealth_max_logoonly.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('main/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">

    @yield('top-assets')
</head>

<body>
<!-- preloader begin -->
<div class="in-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- preloader end -->

<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <!-- logo begin -->
                        <a class="uk-logo" href="{{ url('/') }}">
                            <img src="{{ asset('wealth_max_logo.png') }}"
                                 data-src="{{ asset('wealth_max_logo.png') }}"
                                 alt="logo" width="160" height="34" data-uk-img>
                        </a>
                        <!-- logo end -->
                        <!-- navigation begin -->
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">Company<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="{{ url('about') }}">About us</a></li>
                                        <li><a href="{{ url('terms') }}">Terms and conditions</a></li>
                                        <li><a href="{{ url('legal') }}">Legal</a></li>
                                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ url('services') }}">Services</a></li>
                            <li><a href="{{ url('contact') }}">Contact us</a></li>
                        </ul>
                        <!-- navigation end -->
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{ route('register') }}"
                           class="uk-button uk-button-primary uk-border-rounded" style="margin-right: 2px;">
                            Create Account</a>
                        <a href="{{ route('login') }}"
                           class="uk-button uk-button-primary uk-border-rounded">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- header content end -->
</header>

@yield('content')

<footer>
    <!-- footer content begin -->
    <div class="uk-section uk-section-secondary in-footer-feature uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6@m">
                    <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <i class="fas fa-history in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">25 years of Excellence</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-flex-center@m">
                            <div class="uk-margin-right">
                                <i class="fas fa-trophy in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">15+ Global Awards</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-flex-right@m">
                            <div class="uk-margin-right">
                                <i class="fas fa-phone-alt in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">24/5 Customer Support</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-background-secondary uk-light">
        <div class="uk-container uk-text-small">
            <div class="uk-child-width-1-2@m" data-uk-grid>
                <div class="in-footer-logo">
                    <img src="{{ asset('wealth_max_logo.png') }}"
                         data-src="{{ asset('wealth_max_logo.png') }}"
                         alt="logo" width="127" height="27" data-uk-img>
                </div>
                <div class="uk-flex uk-flex-right@m">
                    <div class="in-footer-socials">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <a class="uk-button uk-button-text uk-margin-large-left uk-visible@m" href="#">Company News</a>
                    <a class="uk-button uk-button-text uk-margin-large-left uk-visible@m" href="#">Partnership</a>
                </div>
            </div>

            <div class="uk-grid uk-margin-large-top">
                <div class="uk-width-1-1">
                    <p class="uk-heading-line uk-margin-large-bottom"><span>Copyright © 2021 Wealth Max Global Investment. All Rights Reserved.</span></p>
                    <p class="in-trading-risk">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->

    <!-- totop begin -->
    <div class="uk-visible@m">
        <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
    </div>
    <!-- totop end -->
</footer>

<!-- Javascript -->
<script src="{{ asset('main/js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('main/js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('main/js/config-theme.js') }}"></script>

@yield('bottom-assets')

</body>

</html>

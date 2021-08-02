@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')

    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-light in-slideshow uk-background-cover uk-background-top-center"
                 style="background-image: url({{ asset('main/img/in-liquid-slide-bg.png') }});" data-uk-slideshow>
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>New standard<br>in stock broker.</h1>
                                        <p class="uk-text-lead uk-visible@m">Trade forex, commodities, synthetic and stock indices from a single account</p>
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">Discover platform</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('main/img/in-lazy.gif') }}"
                                         data-src="{{ asset('main/img/in-liquid-slide-1.svg') }}" alt="image-slide"
                                         width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Multi-regulated global broker.</h1>
                                        <p class="uk-text-lead uk-visible@m">A trusted destination for traders worldwide, Authorised by FCA, ASIC &amp; FSCA</p>
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">Discover accounts</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('main/img/in-lazy.gif') }}"
                                         data-src="{{ asset('main/img/in-liquid-slide-2.svg') }}"
                                         alt="image-slide" width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
                <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
                    <div class="uk-container">
                        <ul class="uk-grid uk-child-width-1-5@m uk-text-center" data-uk-grid>
                            <li>
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-ticker-1.svg') }}"
                                     alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>1,740.05</span>
                            </li>
                            <li>
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-ticker-2.svg') }}"
                                     alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>217.90</span>
                            </li>
                            <li>
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-ticker-3.svg') }}"
                                     alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-danger uk-margin-left"><i class="fas fa-caret-down"></i>270.97</span>
                            </li>
                            <li>
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-ticker-4.svg') }}"
                                     alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>3,218.51</span>
                            </li>
                            <li>
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-ticker-5.svg') }}"
                                     alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-danger uk-margin-left"><i class="fas fa-caret-down"></i>735.11</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- slideshow content end -->

        <!-- section content begin -->
        <div class="uk-section uk-section-secondary in-liquid-1">
            <div class="uk-container uk-light">
                <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-1-2@m">
                        <h2>Save time. Get <span class="in-highlight">higher return</span>. Multiply wealth.</h2>
                    </div>
                    <div class="uk-width-1-2@m">
                        <a class="uk-button uk-button-default uk-border-rounded uk-align-right@m" href="#">
                            Find out more<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div class="uk-child-width-1-3@m" data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-object-1.svg') }}"
                                     alt="sample-image" data-width data-height data-uk-img>
                            </div>
                            <div class="uk-card-body">
                                <h3>Constant Progression</h3>
                                <p>Interest is applied to your account 24/7. Once it has been added to your account balance.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-object-2.svg') }}"
                                     alt="sample-image" data-width data-height data-uk-img>
                            </div>
                            <div class="uk-card-body">
                                <h3>Unique Platform</h3>
                                <p>Our team has developed a unique platform for user-friendly and safe to work with investments.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-object-3.svg') }}"
                                     alt="sample-image" data-width data-height data-uk-img>
                            </div>
                            <div class="uk-card-body">
                                <h3>Quickly and Instantly</h3>
                                <p>All actions occur on the page immediately - payment process, withdrawal request, and more.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
                    <div class="uk-container">
                        <div class="uk-grid-large uk-child-width-1-3@m slide-icons-2 uk-grid" data-uk-grid="">
                            <div class="uk-flex uk-flex-left uk-first-column">
                                <div class="uk-margin-right">
                                    <img src="{{ asset('main/img/in-liquid-icon-19.svg') }}"
                                         data-src="{{ asset('main/img/in-liquid-icon-19.svg') }}"
                                         alt="sample-icon" data-uk-img="" width="124" height="124">
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove">Lowest cost</h5>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img src="{{ asset('main/img/in-liquid-icon-20.svg') }}"
                                         data-src="{{ asset('main/img/in-liquid-icon-20.svg') }}"
                                         data-uk-img="" width="124" height="124">
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove">Global access</h5>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img src="{{ asset('main/img/in-liquid-icon-21.svg') }}"
                                         data-src="{{ asset('main/img/in-liquid-icon-21.svg') }}" alt="sample-icon"
                                         data-uk-img="" width="124" height="124">
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove">Premier technology</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <div class="uk-section in-liquid-14">
            <div class="uk-container">
                <div class="uk-grid-large uk-flex uk-flex-middle uk-grid" data-uk-grid="">
                    <div class="uk-width-expand@m uk-first-column">
                        <h2>About <span class="in-highlight">Wealth Max Global Investment</span>.</h2>
                        <p>After gaining knowledge and experience for years our mission was apparent, we needed to clear a path for small to mid-sized investors to smarter innovative trading and increased profits. Cryptocurrency market is developing in a rapid pace and is one of promising options of economy.<br>
                            To that end we provide support to our investors with a stable and easy-to-use technology built to manage their investment, from trading to making profits. Margin traders are not left behind in this.</p>
                        <div class="uk-grid uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center uk-margin-medium-top">
                            <div class="uk-tile uk-tile-default">
                                <p class="uk-text-lead uk-margin-remove-bottom">LQUD</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top">Nasdaq Listed</p>
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <p class="uk-text-lead uk-margin-remove-bottom">$7B</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top">Equity Capital</p>
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <p class="uk-text-lead uk-margin-remove-bottom">78.2%</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top">Privately Held</p>
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <p class="uk-text-lead uk-margin-remove-bottom">$6.0B</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top">Excess Capital</p>
                            </div>
                            <div class="uk-tile uk-tile-default uk-visible@m">
                                <p class="uk-text-lead uk-margin-remove-bottom">1.07M</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top">Client Accounts</p>
                            </div>
                            <div class="uk-tile uk-tile-default uk-visible@m">
                                <p class="uk-text-lead uk-margin-remove-bottom">2.11M</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top">Daily Avg Revenue</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <img class="uk-width-1-1" src="{{ asset('main/img/in-liquid-object-5.svg') }}"
                             data-src="{{ asset('main/img/in-liquid-object-5.svg') }}" alt="sample-image"
                             data-width="" data-height="" data-uk-img="">
                    </div>
                </div>

                <div class="uk-width-1-1 in-timeline-1" style="margin-top: 50px;">
                    <div class="uk-text-center">
                        <h2 class="uk-margin-remove">Investment Plans</h2>
                    </div>
                    <hr>
                    <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-3@m uk-grid uk-grid-stack"
                         data-uk-grid="">
                    @foreach($packages as $package)
                        <div class="uk-grid-margin uk-first-column">
                            <div class="in-timeline-branch">
                                <div class="uk-flex">
                                    <i class="fas fa-cog fa-lg in-icon-wrap circle primary-color"></i>
                                    <div class="in-timeline-title uk-flex uk-flex-middle">
                                        <h4 class="uk-margin-remove-bottom">{{ $package->name }}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-box-shadow-small uk-width-expand">
                                <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">

                                    <div>
                                        @if(!empty($package->min))
                                            <p class="uk-margin-remove" style="font-size: 18px;">
                                                Minimum: {{ '$'.number_format($package->min) }}</p>
                                        @endif

                                        @if(!empty($package->max))
                                            <p class="uk-margin-remove" style="font-size: 18px;">
                                                Maximum: {{ '$'.number_format($package->max) }}</p>
                                        @else
                                            <p class="uk-margin-remove" style="font-size: 18px;">and above</p>
                                        @endif
                                    </div>

                                    <ul class="uk-list uk-list-bullet in-list-check">
                                        @if(!empty($package->option1))
                                        <li style="font-size: 15px;">{{ $package->option1 }}</li>
                                        @endif

                                        @if(!empty($package->option2))
                                        <li style="font-size: 15px;">{{ $package->option2 }}</li>
                                        @endif

                                        @if(!empty($package->option3))
                                        <li style="font-size: 15px;">{{ $package->option3 }}</li>
                                        @endif

                                        @if(!empty($package->referral_bonus))
                                        <li style="font-size: 15px;">{{ $package->referral_bonus }}% Referral Bonus</li>
                                        @endif

                                        @if(!empty($package->expert_advice))
                                        <li style="font-size: 15px;">{{ $package->expert_advice }}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>

            </div>
        </div>

        <!-- section content begin -->
        <div class="uk-section in-liquid-2">
            <div class="uk-container">
                <div class="uk-grid-large uk-child-width-1-2@m" data-uk-grid>
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "600",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-margin-medium-top">
                        <div class="uk-card uk-card-default uk-card-body uk-background-contain uk-background-top-left" style="background-image: url({{ asset('main/img/in-liquid-card-bg.png') }});" data-uk-img>
                            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center" data-uk-grid>
                                <div class="uk-width-1-1">
                                    <h4><span>Simple steps to start trade.</span></h4>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">1</span>
                                    <p>Register account</p>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">2</span>
                                    <p>Fund your account</p>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">3</span>
                                    <p>Start your trade</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section content begin -->
        <div class="uk-section uk-section-muted uk-padding-large in-liquid-3 uk-background-contain uk-background-center-center" style="background-image: url({{ asset('main/img/in-liquid-3-bg.png') }});" data-uk-img>
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-inline">
                        <div class="uk-grid-large uk-flex uk-flex-middle uk-flex-right" data-uk-grid>
                            <div class="uk-position-top-left">
                                <img src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-3-mockup.png') }}"
                                     alt="sample-images" width="650" height="469" data-uk-img>
                            </div>
                            <div class="uk-width-1-2@m">
                                <h2 class="uk-margin-remove">Our guiding<br>principles.</h2>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                <p>Put the interests of DTO’s investors first in everything the firm does. Acting as a fiduciary is a sacred trust that can never be broken. Act with the highest level of integrity in every action DTO takes. The firm’s reputation is its most important asset. Approach public investing with the same philosophy as if purchasing entire companies, by acquiring high-quality businesses that generate large amounts of compounding free cash flow at prices well below their intrinsic value.<br>

                                    Focus on building a world-class team and culture. The firm cares deeply about being regarded in the industry as first rate and as the best at every touch point. Communicate with investment partners candidly and be as transparent as required for them to always understand what DMI is doing and why.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <div class="uk-section in-liquid-15 in-offset-top-20 uk-background-contain uk-background-bottom-center" data-src="{{ asset('main/img/in-liquid-15-bg.png') }}" data-uk-img=""
             style="background-image: url(&quot;{{ asset('main/img/in-liquid-15-bg.png') }}&quot;);">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-text-center">
                            <h2 class="uk-margin-remove">Market analysis and trade inspiration.</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">
                                Get news, commentary and actionable trade ideas from the expert analysts.</p>
                        </div>
                        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium-top uk-grid" data-uk-grid="">
                            <div class="uk-width-1-2@s uk-first-column">
                                <div class="uk-inline-clip">
                                    <a href="#">
                                        <img class="uk-border-rounded"
                                             src="{{ asset('main/img/in-liquid-15-image-1.jpg') }}"
                                             data-src="{{ asset('main/img/in-liquid-15-image-1.jpg') }}"
                                             alt="sample-image" data-width="" data-height="" data-uk-img="">
                                        <div class="uk-position-bottom uk-overlay uk-overlay-primary">
                                            <h4 class="uk-margin-remove">News and inspiration</h4>
                                            <p class="uk-margin-remove uk-text-muted">Economic news and prospect</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-inline-clip">
                                    <a href="#">
                                        <img class="uk-border-rounded"
                                             src="{{ asset('main/img/in-liquid-15-image-2.jpg') }}"
                                             data-src="{{ asset('main/img/in-liquid-15-image-2.jpg') }}"
                                             alt="sample-image" data-width="" data-height="" data-uk-img="">
                                        <div class="uk-position-bottom uk-overlay uk-overlay-primary">
                                            <h4 class="uk-margin-remove">Insight from experts</h4>
                                            <p class="uk-margin-remove uk-text-muted">Plan and trading strategy</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small green">EQ</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Stocks</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-grid-margin uk-first-column">
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small red">CFD</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">CFDs</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-grid-margin">
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small blue">FX</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Forex</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-grid-margin">
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small grey">BO</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Bonds</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section in-liquid-16">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-2@m uk-text-center">
                        <h2>Trade with <span class="in-highlight">world-leading</span> broker.</h2>
                    </div>
                </div>
                <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" data-uk-grid="">
                    <div class="uk-first-column">
                        <div class="in-liquid-16-counter">
                            <img class="uk-margin-remove" src="{{ asset('main/img/in-liquid-icon-22.svg') }}"
                                 data-src="{{ asset('main/img/in-liquid-icon-22.svg') }}"
                                 alt="sample-icon" data-uk-img="" width="92" height="92">
                            <h1 class="uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                <span class="count" data-counter-end="20" data-counter-append=" years">20 years</span>
                            </h1>
                            <p class="uk-margin-small-top">Experience</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="in-liquid-16-counter">
                            <img class="uk-margin-remove" src="{{ asset('main/img/in-liquid-icon-23.svg') }}"
                                 data-src="{{ asset('main/img/in-liquid-icon-23.svg') }}"
                                 alt="sample-icon" data-uk-img="" width="92" height="92">
                            <h1 class="uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                <span class="count" data-counter-end="15" data-counter-append=" years">15 years</span>
                            </h1>
                            <p class="uk-margin-small-top">UK Regulated</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="in-liquid-16-counter">
                            <img class="uk-margin-remove" src="{{ asset('main/img/in-liquid-icon-24.svg') }}"
                                 data-src="{{ asset('main/img/in-liquid-icon-24.svg') }}"
                                 alt="sample-icon" data-uk-img="" width="92" height="92">
                            <h1 class="uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                <span class="count" data-counter-end="18" data-counter-append="k">18k</span>
                            </h1>
                            <p class="uk-margin-small-top">Order per day</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin">
                        <div class="in-liquid-16-counter">
                            <img class="uk-margin-remove" src="{{ asset('main/img/in-liquid-icon-25.svg') }}"
                                 data-src="{{ asset('main/img/in-liquid-icon-25.svg') }}"
                                 alt="sample-icon" data-uk-img="" width="92" height="92">
                            <h1 class="uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                <span class="count" data-counter-end="24" data-counter-append="/5">24/5</span>
                            </h1>
                            <p class="uk-margin-small-top">Customer supports</p>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-2@m uk-text-center">
                        <h5 class="uk-margin-small-top">We are in the press.</h5>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium-top uk-text-center in-client-logo-4" data-uk-grid="">
                            <div class="uk-tile uk-tile-default uk-first-column">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-liquid-media-1.svg') }}"
                                     data-src="{{ asset('main/img/in-liquid-media-1.svg') }}" alt="client-logo"
                                     data-uk-img="" width="167" height="55">
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-liquid-media-2.svg') }}"
                                     data-src="{{ asset('main/img/in-liquid-media-2.svg') }}" alt="client-logo"
                                     data-uk-img="" width="167" height="55">
                            </div>
                            <div class="uk-tile uk-tile-default uk-grid-margin uk-first-column">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-liquid-media-3.svg') }}"
                                     data-src="{{ asset('main/img/in-liquid-media-3.svg') }}"
                                     alt="client-logo" data-uk-img="" width="167" height="55">
                            </div>
                            <div class="uk-tile uk-tile-default uk-grid-margin">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-liquid-media-4.svg') }}"
                                     data-src="{{ asset('main/img/in-liquid-media-4.svg') }}"
                                     alt="client-logo" data-uk-img="" width="167" height="55">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section uk-section-muted uk-padding-large in-liquid-17 in-offset-bottom-40">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-1@m uk-text-center">
                        <h2>Our latest news</h2>
                    </div>
                </div>
                <!-- 24-7 Press Release Newswire Landing Page Widget Code Starts Here --> <script type="text/javascript" src="https://news.24-7pressrelease.com/247pr-news-widget.js?widgettitle=Cryptocurrency News&amp;categories=489,&amp;showRelease=1&amp;width=auto&amp;headlinebold=1&amp;headlinesonly=0&amp;headlinecolor=f7921a&amp;briefcolor=666666&amp;textcolor=333333&amp;typeface=arial&amp;fontsize=11&amp;width=auto&amp;headlinesepstyle=dotted&amp;showimages=1&amp;numstories=5&amp;bgcolor=ffffff&amp;urldest=247pr"></script> <!-- 24-7 Press Release Newswire Landing Page Widget Code Ends Here -->
            </div>
        </div>

        <!-- section content begin -->
        <div class="uk-section uk-section-muted in-liquid-5 uk-background-contain uk-background-top-center in-offset-bottom-40" style="background-image: url({{ asset('main/img/in-liquid-5-bg.png') }});">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-text-center">
                            <h4>Payment methods.</h4>
                        </div>
                        <div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-6@m uk-text-center uk-margin-medium in-client-logo-6" data-uk-grid>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="img/in-liquid-payment-1.svg" alt="payment-image"
                                     width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="img/in-liquid-payment-2.svg" alt="payment-image"
                                     width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-payment-3.svg') }}" alt="payment-image"
                                     width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-payment-4.svg') }}" alt="payment-image"
                                     width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-payment-5.svg') }}" alt="payment-image"
                                     width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('main/img/in-lazy.gif') }}"
                                     data-src="{{ asset('main/img/in-liquid-payment-6.svg') }}"
                                     alt="payment-image" width="167" height="55" data-uk-img>
                            </div>
                        </div>
                        <div class="uk-text-center uk-text-small in-border-text">
                            <p><span>Don't see a payment methods that works for you?<br class="uk-hidden@m"> We have other options.<br class="uk-hidden@m"> <a class="uk-button uk-button-small uk-button-primary uk-border-rounded uk-margin-left" href="#">More options<i class="fas fa-angle-right uk-margin-small-left"></i></a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>


@endsection

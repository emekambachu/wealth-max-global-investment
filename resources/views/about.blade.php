@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
                         data-src="{{ asset('main/img/in-liquid-object-5.svg') }}"
                         alt="sample-image" data-width="" data-height="" data-uk-img="">
                </div>
            </div>

        </div>
    </div>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m uk-text-center">
                        <h2 class="uk-margin-small-bottom">Putting our clients first <span class="in-highlight">since 1986.</span></h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">For more than 30 years, we’ve been empowering clients by helping them take control of their financial lives.</p>
                    </div>
                </div>
                <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top uk-grid-stack" data-uk-grid="">
                    <div class="uk-flex uk-flex-left uk-first-column">
                        <div class="uk-margin-right">
                            <i class="fas fa-leaf fa-lg in-icon-wrap circle primary-color"></i>
                        </div>
                        <div>
                            <h3>Values</h3>
                            <p>Digital Trading Options was founded on the principle of delivering superior long and short term returns at the lowest possible risk. DMI believes that having a world-class investor base of like-minded, high-quality organizations is key to investment success.</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left uk-grid-margin uk-first-column">
                        <div class="uk-margin-right">
                            <i class="fas fa-hourglass-end fa-lg in-icon-wrap circle primary-color"></i>
                        </div>
                        <div>
                            <h3>Mission</h3>
                            <p>Offering comprehensive and flexible assets to investors within the Cryptocurrency market, with low friction, transparency and reliability and with highest possible return on investment.</p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left uk-grid-margin uk-first-column">
                        <div class="uk-margin-right">
                            <i class="fas fa-flag fa-lg in-icon-wrap circle primary-color"></i>
                        </div>
                        <div>
                            <h3>Partnerships</h3>
                            <p>We have built partnerships overtime with other successful companies with complimenting corporate and social goals as our company.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
@endsection

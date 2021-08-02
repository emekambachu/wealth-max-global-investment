@extends('layouts.main')

@section('title')
    Services
@endsection

@section('content')
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>Markets</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <main>

        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10 uk-grid uk-grid-stack" data-uk-grid="">
                    <div class="uk-width-1-1 uk-first-column">
                        <h2 class="uk-margin-remove">A <span class="in-highlight">relationship</span> on your terms.</h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">Work with us the way you want.</p>
                        <p>Some believe you must choose between an online broker and a wealth management firm. At Liquid, you don’t need to compromise. Whether you invest on your own, with an advisor, or a little of both — we can support you.</p>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-green">
                            <i class="fas fa-seedling fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Cryptocurrencies<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-blue">
                            <i class="fas fa-chart-bar fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Forex<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>Options for investing cash including certificates of deposit and the money market funds. With CDs.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-purple">
                            <i class="fas fa-chart-pie fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Option Trading<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>We offer the best Forex and Options trading services operating closely with an expert team.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-navy">
                            <i class="fas fa-chalkboard-teacher fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Asset Management<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>With the best team of Financial and asset managers, you are assured on important projects, construction, contracts, and other assets. We invests pooled funds from clients, putting the capital to work through different investments including stocks, bonds, real estate, master limited partnerships, and more.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-grey">
                            <i class="fas fa-funnel-dollar fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Commodities<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>A commodity is a basic of good used in commerce that is interchangeable with other commodities or known currencies. We offer the best the market has to offer and always put our customers first in all decisions.</p>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-orange">
                            <i class="fas fa-handshake fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Funds Management<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>Our team can be found working in fund management with mutual funds, pension funds, trust funds, and hedge funds. Our managers generally oversee mutual funds or pensions and manage their direction. study trends in the market, analyze economic data, and stay current on company news.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

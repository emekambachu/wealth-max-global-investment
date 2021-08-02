@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('content')
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>Contact us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-2@m uk-text-center">
                        <h2 class="uk-margin-small-bottom">Do not hesitate to <span class="in-highlight">reach out.</span></h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">
                            Just fill in the contact form here and we’ll be sure to reply as fast as possible</p>
                    </div>
                    <div class="uk-width-1-1@m uk-margin-large-top">
                        <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-grid-stack" data-uk-grid="">
                            <div class="uk-first-column">
                                <form id="contact-form" class="uk-form uk-grid-small uk-grid uk-grid-stack" data-uk-grid="">
                                    <div class="uk-width-1-1 uk-first-column">
                                        <input class="uk-input uk-border-rounded"
                                               id="name" name="name" type="text" placeholder="Full name">
                                    </div>
                                    <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                                        <input class="uk-input uk-border-rounded"
                                               id="email" name="email" type="email" placeholder="Email address">
                                    </div>
                                    <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                                        <input class="uk-input uk-border-rounded"
                                               id="subject" name="subject" type="text" placeholder="Subject">
                                    </div>
                                    <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                                        <textarea class="uk-textarea uk-border-rounded"
                                                  id="message" name="message" rows="6" placeholder="Message"></textarea>
                                    </div>
                                    <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                                        <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded"
                                                id="sendemail" type="submit" name="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <h4 class="uk-margin-remove-bottom">Business submissions</h4>
                                <p class="uk-margin-small-top">For business plan submissions. Please submit using this</p>
                                <div class="uk-flex uk-flex-middle uk-margin">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-envelope fa-sm in-icon-wrap circle small primary-color"></i>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove">info@wglobalinvestment.com</p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-margin">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-phone fa-sm in-icon-wrap circle small primary-color"></i>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove">(888)234-5686</p>
                                    </div>
                                </div>
                                <hr class="uk-margin-medium">
                                <h4 class="uk-margin-bottom">Our socials media</h4>
                                <a href="#" class="fab fa-facebook-square fa-lg uk-margin-right"></a>
                                <a href="#" class="fab fa-twitter fa-lg uk-margin-right"></a>
                                <a href="#" class="fab fa-youtube fa-lg uk-margin-right"></a>
                                <a href="#" class="fab fa-instagram fa-lg uk-margin-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection

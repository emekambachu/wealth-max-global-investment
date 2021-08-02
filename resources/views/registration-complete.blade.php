@extends('layouts.main')

@section('title')
    Registration Complete
@endsection

@section('content')
    <div class="page-head section row-vm light has-bg-image">
        <div class="imagebg bg-image-loaded"
             style="background-image: url(&quot;{{ asset('main/images/page-inside-bg.jpg') }}&quot;);">
            <img src="{{ asset('main/images/page-inside-bg.jpg') }}" alt="page-head">
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>Registration Complete</h2>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span>Registration complete</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-pad">
        <!-- container end-->
        <div class="gap-60"></div>
        <div class="ts-form" id="ts-form">
            <div class="container">

                @include('includes.alerts')

                <h2 class="column-title title-small">
                    <span style="color: #0f3e68; font-weight: bold;">Registration Complete</span></h2>

                <div class="row">
                    <div class="col-lg-7 col-12">
                        <p class="heading--desc">Hello <strong>{{ Session::get('name') }}</strong><br><br>
                            Thanks for taking your time to register on our crypto investment platform. Your account will be verified and activated by our security team in a moment, you can choose any of our mining packages so we can commence mining on your account immediately.<br><br>
                            <a href="{{ route('login') }}">
                                <strong>Login</strong>
                            </a> to start investing
                        </p>
                    </div>

                    <div class="col-lg-5 col-12">
                        <img width="400" class="img-responsive" src="{{ asset('main/login.jpg') }}"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

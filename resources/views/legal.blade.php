@extends('layouts.main')

@section('title')
    Legal
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
                    <h2>Legal</h2>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span>Legal</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-pad">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="text-block">
                        <p>The content provided on this website is for informational purposes only.
                            Digital Trading Options is not responsible for, and explicitly disclaims, all liability for damages of any kind arising out of the use, reference to or reliance on any information contained within the website.<br>
                            Although the Digital Trading Options website may include links with direct access to other internet resources / websites, it is not responsible for the accuracy or content of the information listed on these sites.
                            Links from the Digital Trading Options website to third party websites do not constitute an endorsement by Digital Trading Options of those parties or their products and services.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('title')
    Admin Login
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
                    <h2>Admin Login</h2>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span>Admin Login</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-pad bg-grey" style="background-color: #efefef;">
        <div class="container">
            <div class="center-holder section-heading">
                <h2>Admin Login</h2>
                <div class="section-heading-line"></div>
            </div>

            <div class="mt-40">
                @include('includes.alerts')

                <form method="POST" action="{{ route('admin-login') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                                       value="{{ old('username') }}" placeholder="Username *" required>
                                @error('username')
                                <span class="invalid-feedback text-warning" role="alert">
                            <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <!-- Input Field Ends -->
                        </div>

                        <div class="col-md-6">
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control @error('password') is-invalid @enderror"
                                       type="password" name="password"
                                       placeholder="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <!-- Input Field Ends -->
                        </div>
                    </div>

                    <div class="form-group">
                        <div style="display: block;">
                            <label>Remember me</label>
                            <input style="display: inline; width: 50px;" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                        </div>
                    </div><!-- /.form-grp -->

                    <div class="col-md-12">
                        <div class="center-holder">
                            <button class="btn" type="submit">Login</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection

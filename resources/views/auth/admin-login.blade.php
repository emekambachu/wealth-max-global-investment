@extends('layouts.main')

@section('title')
    Admin Login
@endsection

@section('top-assets')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>Admin Login</span></li>
                    </ul>
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
                        <div class="">
                            <button type="submit" class="uk-button uk-button-primary uk-border-rounded">Login</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
@endsection

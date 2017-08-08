@extends('layouts.welcome')

@section('title') Welcome @endsection

@section('styles')

    <!-- Styles -->
    <style>

        body {
            background-image: url('/img/landing-bg.jpg')
        }
    </style>

    <link rel="stylesheet" type="text/css" href="/css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-select.css">

@endsection

@section('content')

    @if(Auth::guest())

        <!-- Login-Registration Form  -->
        <div class="container">
            <div class="row display-flex">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="landing-content">
                        <h1>Welcome to the My Social Network in the Ukraine</h1>
                        <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                            thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                        </p>
                        <a href="#home" role="tab" data-toggle="tab" class="btn btn-md btn-border c-white">Register Now!</a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="registration-login-form">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#home" role="tab">
                                    <svg class="olymp-login-icon"><use xlink:href="icons/icons.svg#olymp-login-icon"></use></svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                                    <svg class="olymp-register-icon"><use xlink:href="icons/icons.svg#olymp-register-icon"></use></svg>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane" id="home" role="tabpanel">
                                <div class="title h6">Register</div>
                                <form class="content" role="form" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="first_name">First Name</label>
                                                <input class="form-control" type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                                @if ($errors->has('first_name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="last_name">Last Name</label>
                                                <input class="form-control" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>

                                                @if ($errors->has('last_name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="email_r">Your Email</label>
                                                <input class="form-control" type="email" id="email_r" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="password_r">Your Password</label>
                                                <input class="form-control" type="password" id="password_r" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label" for="password-confirm">Confirm Password</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>

                                            <div class="form-group date-time-picker label-floating">
                                                <label class="control-label" for="birthday">Your Birthday</label>
                                                <input name="birthday" value="1983-10-24" id="birthday" type="text" />
                                                <span class="input-group-addon">
                                                <svg class="olymp-calendar-icon"><use xlink:href="icons/icons.svg#olymp-calendar-icon"></use></svg>
                                            </span>
                                            </div>

                                            <div class="form-group label-floating is-select">
                                                <label class="control-label" for="gender">Your Gender</label>
                                                <select class="selectpicker form-control" name="gender" id="gender" required>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>

                                            <div class="remember">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="terms" type="checkbox" id="terms" required>
                                                        I accept the <a href="#">Terms and Conditions</a> of the website
                                                    </label>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-purple btn-lg full-width">
                                                Complete Registration!
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane active" id="profile" role="tabpanel">
                                <div class="title h6">Login to your Account</div>
                                <form class="content" role="form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label class="control-label">Your Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label class="control-label">Your Password</label>
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="remember">

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    Remember Me
                                                </label>
                                            </div>
                                            <a href="{{ route('password.request') }}" class="forgot">Forgot my Password</a>
                                        </div>

                                        <button type="submit" class="btn btn-lg btn-primary full-width">
                                            Login
                                        </button>
                                        <p>Don’t you have an account? <a href="#profile" role="tab" data-toggle="tab">Register Now!</a> it’s really simple and you can start enjoing!</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ... end Login-Registration Form  -->

    @endif


@endsection

@section('scripts')
    <!-- Swiper / Sliders -->
    <script src="/js/swiper.jquery.min.js"></script>

    <!-- Datepicker input field script-->
    <script src="/js/moment.min.js"></script>
    <script src="/js/daterangepicker.min.js"></script>
@endsection

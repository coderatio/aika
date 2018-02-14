<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Log in | Aika - Courier service app</title>
    <meta name="description" content="Login to access your aika account and start sending or taking parcels.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    {{--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">--}}

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    @includeIf('partials.styles-fonts')
</head>
<body class="o-page o-page--center">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5" style="top: 0; position: fixed; z-index: 2">
            @if(session()->exists('notice'))
                {!! session('notice') !!}
            @endif
        </div>
    </div>
</div>

<div class="o-page__card">
    <div class="c-card u-mb-xsmall">
        <header class="c-card__header u-pt-large">
            <a class="c-card__icon" href="#!">
                <img src="{{ asset('assets/img/logo-login.svg') }}" alt="Dashboard UI Kit">
            </a>
            <h1 class="u-h3 u-text-center u-mb-zero">Please login</h1>
        </header>

        <form action="" method="post" class="c-card__body">
            {{ csrf_field() }}
            <div class="c-field u-mb-small">
                <label class="c-field__label" for="email_or_phone">Email or phone number</label>
                <input class="c-input" type="text" id="email_or_phone" placeholder="Email, phone">
            </div>

            <div class="c-field u-mb-small">
                <label class="c-field__label" for="password">Password</label>
                <input class="c-input" type="password" id="password" placeholder="Numbers, Letters...">
            </div>

            <button class="c-btn c-btn--primary c-btn--fullwidth c-btn--large" type="submit">Sign in to Account</button>

            <span class="c-divider c-divider--small has-text u-mv-medium">Login via social networks</span>
        </form>
        <div class="c-card__body" style="margin-top: -35px">
            <div class="o-line">
                <form action="{{ url('login/twitter') }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="c-btn c-icon u-bg-twitter">
                        <i class="fa fa-twitter"></i>
                    </button>
                </form>

                <form action="{{ url('login/google') }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="c-btn c-icon u-bg-pinterest" href="#!">
                        <i class="fa fa-google-plus"></i>
                    </button>
                </form>

                <form action="{{ url('login/facebook') }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="c-btn c-icon u-bg-facebook" href="#!">
                        <i class="fa fa-facebook"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="o-line">
        <a class="u-text-mute u-text-small" href="{{ url('register') }}">Don’t have an account yet? Get Started</a>
        <a class="u-text-mute u-text-small" href="{{ url('recover-password') }}">Forgot Password?</a>
    </div>
</div>

<!-- Main javascsript -->
<script src="{{ asset('assets/js/main.min.js?v=2.0') }}"></script>
</body>
</html>
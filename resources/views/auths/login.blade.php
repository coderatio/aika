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

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css?v=2.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body class="o-page o-page--center">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="o-page__card">
    <div class="c-card u-mb-xsmall">
        <header class="c-card__header u-pt-large">
            <a class="c-card__icon" href="#!">
                <img src="{{ asset('assets/img/logo-login.svg') }}" alt="Dashboard UI Kit">
            </a>
            <h1 class="u-h3 u-text-center u-mb-zero">Please login</h1>
        </header>

        <form class="c-card__body">
            <div class="c-field u-mb-small">
                <label class="c-field__label" for="input1">Email or phone number</label>
                <input class="c-input" type="email" id="input1" placeholder="Email, phone">
            </div>

            <div class="c-field u-mb-small">
                <label class="c-field__label" for="input2">Password</label>
                <input class="c-input" type="password" id="input2" placeholder="Numbers, Letters...">
            </div>

            <button class="c-btn c-btn--primary c-btn--fullwidth" type="submit">Sign in to Account</button>

            <span class="c-divider c-divider--small has-text u-mv-medium">Login via social networks</span>

            <div class="o-line">
                <a class="c-icon u-bg-twitter" href="#!">
                    <i class="fa fa-twitter"></i>
                </a>

                <a class="c-icon u-bg-pinterest" href="#!">
                    <i class="fa fa-google-plus"></i>
                </a>

                <a class="c-icon u-bg-facebook" href="#!">
                    <i class="fa fa-facebook"></i>
                </a>
            </div>
        </form>
    </div>

    <div class="o-line">
        <a class="u-text-mute u-text-small" href="register.html">Don’t have an account yet? Get Started</a>
        <a class="u-text-mute u-text-small" href="forgot-password.html">Forgot Password?</a>
    </div>
</div>

<!-- Main javascsript -->
<script src="{{ asset('assets/js/main.min.js?v=2.0') }}"></script>
</body>
</html>
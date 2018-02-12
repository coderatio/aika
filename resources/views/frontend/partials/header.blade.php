<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@isset($title) {{ $title }} - Aika - Courier service app @else Aika - Courier service app @endisset</title>
    <meta name="description" content="Aika is a courier service app">
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
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<header class="c-navbar">
    <a class="c-navbar__brand" href="#!">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Aika's Logo">
    </a>

    <!-- Navigation items that will be collapes and toggle in small viewports -->
    <nav class="c-nav collapse" id="main-nav">
        <ul class="c-nav__list">
            <li class="c-nav__item">
                <a class="c-nav__link" href="#!">Events</a>
            </li>
            <li class="c-nav__item">
                <a class="c-nav__link" href="#!">Browse</a>
            </li>
            <li class="c-nav__item">
                <a class="c-nav__link" href="#!">Your Ticket</a>
            </li>
            <li class="c-nav__item">
                <div class="c-field c-field--inline has-icon-right u-hidden-up@tablet">
                            <span class="c-field__icon">
                                <i class="fa fa-search"></i>
                            </span>

                    <label class="u-hidden-visually" for="navbar-search-small">Seach</label>
                    <input class="c-input" id="navbar-search-small" type="text" placeholder="Search">
                </div>
            </li>
        </ul>
    </nav>
    <!-- // Navigation items  -->

    <div class="c-field has-icon-right c-navbar__search u-hidden-down@tablet u-ml-auto u-mr-small">
                <span class="c-field__icon">
                    <i class="fa fa-search"></i>
                </span>

        <label class="u-hidden-visually" for="navbar-search">Search</label>
        <input class="c-input" id="navbar-search" type="text" placeholder="Search">
    </div>


    <div class="c-dropdown dropdown">
        <a  class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="c-avatar__img" src="img/avatar-72.jpg" alt="User's Profile Picture">
        </a>

        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
            <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
            <a class="c-dropdown__item dropdown-item" href="#">Manage Roles</a>
        </div>
    </div>

    <button class="c-nav-toggle" type="button" data-toggle="collapse" data-target="#main-nav">
        <span class="c-nav-toggle__bar"></span>
        <span class="c-nav-toggle__bar"></span>
        <span class="c-nav-toggle__bar"></span>
    </button><!-- // .c-nav-toggle -->
</header>

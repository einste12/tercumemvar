<!DOCTYPE html>
<html lang="tr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Tercümem Var</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- PRELOADER -->
<div class="cssload-container">
    <div class="cssload-loader"></div>
</div>
<!-- end PRELOADER -->

<!-- START SITE -->
<div id="wrapper">
    <header class="header">
        <div class="container-fluid">
            <nav class="navbar navbar-default yamm">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" title="" href="{{ route('welcome') }}"><img src="images/logo.png" alt="" class="img-responsive"></a>
                    </div>
                    <!-- end navbar header -->

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('welcome') }}">Anasayfa</a></li>
                            <li><a title="#" href="blog.html">Blog</a></li>
                            <li><a title="#" href="page-contact.html">İletişim</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            @if(\Auth::check())


                                @if(Auth::user()->role_id=="1")
                                    <li class="dropdown"  onclick="marknotificationread('{{ count(auth()->user()->unreadNotifications) }}')">

                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                            <span class="glyphicon glyphicon-globe"></span>BİLDİRİMLER<span class="badge">{{ count(auth()->user()->unreadNotifications) }}</span>

                                        </a>
                                        <ul class="dropdown-menu">
                                            @forelse(auth()->user()->unreadNotifications as $notification)
                                                @include('partials.notification.'.snake_case(class_basename($notification->type)))
                                            @empty

                                                <a href="#">Herhangi bir Bildirim Bulunmamaktadır</a>

                                            @endforelse
                                        </ul>
                                    </li>
                                 @endif



                                <li class="dropdown yamm-half membermenu hasmenu">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="upload/testi_03.png" alt="" class="img-circle"> <span class="caret"></span></a>
                                    <ul class="dropdown-menu start-right">
                                        <li class="dropdown-header">Hoşgeldiniz, @if(Auth::user()->role_id == 1) "Kullanıcı" @elseif(Auth::user()->role_id == 2) "Tercüman" @else(Auth::user()->role_id==3) "Admin"  @endif   {{ Auth::user()->name }}</li>
                                        <li><a href="{{ route('dashboard') }}"><span class="glyphicon glyphicon-user"></span>Kullanıcı Dashboard</a></li>
                                        <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-lock"></span>Çıkış Yap</a></li>
                                    </ul>
                                </li>
                            @else

                             <li><a class="btn btn-default" href="{{ route('login') }}">Giriş Yap</a></li>
                            @endif
                            <li><a class="btn btn-primary" title="" href="{{ route('ceviri-ilani') }}">Çeviri İşi Ver</a></li>
                        </ul>
                        <!-- end dropdown -->
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
            <!-- end nav -->
        </div>
        <!-- end container -->
    </header>
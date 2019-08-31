<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DuongDang Bridal</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    <!----- Plugins ------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="/css/animate.min.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/animate.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
<header>
    <div class="topbar topbar-desktop">
        <div class="container">
            <ul class="general-info">
                <li class="info-box">
                    <i class="info-icon fa fa-map-marker"></i>
                    <span class="info-content">Add: {{ setting('site.header_address') }}</span>
                </li>
                <li class="info-box">
                    <i class="info-icon fa fa-phone"></i>
                    <span class="info-content">Hotline: {{ setting('site.header_hotline') }}</span>
                </li>
            </ul>
            <ul class="socials float-right">
                <li class="social-item">
                    <a class="fa fa-facebook-square" href="{{ setting('site.facebook') }}" rel="nofollow" target="_blank" title="facebook"></a>
                </li>
                <li class="social-item">
                    <a class="fa fa-twitter" href="{{ setting('site.twitter') }}" rel="nofollow" target="_blank" title="twitter"></a>
                </li>
                <li class="social-item">
                    <a class="fa fa-linkedin-square" href="{{ setting('site.instagram') }}" rel="nofollow" target="_blank" title="instagram"></a>
                </li>
                <li class="social-item">
                    <a class="fa fa-google-plus" href="{{ setting('site.google_plus') }}" rel="nofollow" target="_blank" title="google+"></a>
                </li>
                <li class="social-item">
                    <a class="fa fa-youtube-play" href="{{ setting('site.youtube') }}" rel="nofollow" target="_blank" title="youtube"></a>
                </li>
            </ul>
        </div>
    </div>
    <div id="sticked-menu">
        <div class="mainheader">
            <div class="container newclearfix">
                <div class="logo" id="logo-1">
                    <a href="/">
                        <img src="http://duongdangbridal.com/storage/{{ setting('site.logo') }}" alt="Logo">
                    </a>
                </div>
                <!-- NAVIGATION-->
                <nav class="menu-wrapper menu-wrapper-float">
                    {!! menu('Frontend Menu', 'frontend-menu') !!}
                </nav>
                <!-- END: NAVIGATION-->
                <!--MENU BUTTON-->
                <span class="menu-button fa fa-reorder" id="menu-button"></span>
            </div>
        </div>
    </div>
</header>
@yield('slider')
<div id="app">
    @yield('content')
</div>
<footer class="footer-style-1 clearfix">
    <div class="container">
        <div class="row row-flex">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="intro">
                    <div class="title">Về chúng tôi</div>
                    <p class="intro-content text-justify">{{ setting('site.about_us') }}</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="extralinks">
                    <div class="title">Liên kết nhanh</div>
                    <div class="extralinks-cols">
                        {!! menu('Frontend Menu', 'footer-menu') !!}
                        {!! menu('Services Menu', 'footer-menu') !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="fcontact-1">
                    <div class="title">Thông tin liên hệ</div>
                    <ul>
                        <li>
                            <span class="fcontact-icon fa fa-clock-o"></span>{{ setting('site.gio_lam_viec') }}
                        </li>
                        <li>
                            <span class="fcontact-icon fa fa-map-marker"></span>{{ setting('site.header_address') }}</li>
                        <li>
                            <span class="fcontact-icon fa fa-phone"></span>{{ setting('site.header_hotline') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="other-fcontact">
                    <div class="social-group">
                        <div class="title">Liên kết với chúng tôi</div>
                        <ul class="socials">
                            <li class="social-item">
                                <a class="fa fa-facebook-square" href="{{ setting('site.facebook') }}" title="facebook"></a>
                            </li>
                            <li class="social-item">
                                <a class="fa fa-twitter" href="{{ setting('site.twitter') }}" title="twitter"></a>
                            </li>
                            <li class="social-item">
                                <a class="fa fa-linkedin-square" href="{{ setting('site.instagram') }}" title="instagram"></a>
                            </li>
                            <li class="social-item">
                                <a class="fa fa-google-plus" href="{{ setting('site.google_plus') }}" title="google+"></a>
                            </li>
                            <li class="social-item">
                                <a class="fa fa-youtube-play" href="{{ setting('site.youtube') }}" title="youtube"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/sticky.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/function.min.js"></script>

@stack('js-stack')
</body>
</html>

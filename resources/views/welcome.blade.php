<!DOCTYPE html>
<!-- saved from url=(0044)https://faridbabayev001.github.io/Portfolio/ -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ MetaTag::get('title') }}</title>

    {!! MetaTag::tag('description') !!}
    {!! MetaTag::tag('image') !!}

    {!! MetaTag::openGraph() !!}

    {!! MetaTag::twitterCard() !!}

    {{--Set default share picture after custom section pictures--}}
    {!! MetaTag::tag('image', asset('images/favicon.ico"')) !!}


    <!-- FAVICON -->
    <link href="https://faridbabayev001.github.io/Portfolio/assets/images/favicon/favicon.ico" rel="icon">
    <link rel="apple-touch-icon" sizes="144x144" href="https://faridbabayev001.github.io/Portfolio/assets/images/favicon/apple-touch-icon-144x144.html">
    <link rel="apple-touch-icon" sizes="114x114" href="https://faridbabayev001.github.io/Portfolio/assets/images/favicon/apple-touch-icon-114x114.html">
    <link rel="apple-touch-icon" sizes="72x72" href="https://faridbabayev001.github.io/Portfolio/assets/images/favicon/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" href="https://faridbabayev001.github.io/Portfolio/assets/images/favicon/apple-touch-icon.html">
    <!-- all css here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/responsive.css') }}">
    <!-- modernizr css -->

    <script src="{{ asset('assets/modernizr-2.8.3.min.js.download') }}"></script>

</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- header area start -->

<header>
    <div class="header-area sticky-menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="https://faridbabayev001.github.io/Portfolio/#">

                        </a>
                    </div>
                </div>
                <div class="col-lg-9 d-none d-lg-block">
                    <div class="main-menu">
                        <nav id="nav_mobile_menu">
                            <ul id="navigation">
                                <li class="active"><a href="#home">Home</a></li>
                                <li class=""><a href="#about">About</a></li>
                                <li class=""><a href="#portfolio">Portfolio</a></li>
                                <li class=""><a href="#blog">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div id="mobile_menu"><div class="slicknav_menu"><a href="https://faridbabayev001.github.io/Portfolio/#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" style="display: none;" aria-hidden="true" role="menu">
                                <li class="active"><a href="https://faridbabayev001.github.io/Portfolio/#home" role="menuitem" tabindex="-1">Home</a></li>
                                <li><a href="https://faridbabayev001.github.io/Portfolio/#about" role="menuitem" tabindex="-1">About</a></li>
                                <li><a href="https://faridbabayev001.github.io/Portfolio/#portfolio" role="menuitem" tabindex="-1">Portfolio</a></li>
                                <li><a href="https://faridbabayev001.github.io/Portfolio/#blog" role="menuitem" tabindex="-1">Blog</a></li>
                            </ul></div></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
<!-- hero area start -->
<section class="hero-area" id="home">
    <div class="container">
        <div class="hero-content">
            <div class="my-img"><img src="{{asset('/images/'.$user->image)}}" alt="image"></div>
            <h2>Hello, I'am {{$user->name}}</h2>
            <span>Full Stack Web Developer</span>
            <ul class="social-link">
                @foreach($social as $s)
                    <li><a href="{{$s->link}}"><i class="{{$s->icon}}"></i></a></li>
                @endforeach
            </ul>
        </div>
        <a href="#about" class="scrolldown scroll-btn"><span>Scroll Down</span><i class="fa fa-long-arrow-down"></i></a>
    </div>
</section>
<!-- hero area end -->
<!-- about area strat -->
{{--<section class="about-area pt--100" id="about">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-5">--}}
                {{--<div class="abt-content">--}}
                    {{--@foreach($about as  $a)--}}
                        {{--<h2>{{$a->header}}</h2>--}}
                        {{--<p>{{$a->content}}</p>--}}
                        {{--<a href="{{$a->link}}" target="_blank">View My Resume</a>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-7">--}}
                {{--<div class="abt-service owl-carousel owl-theme owl-loaded">--}}



                    {{--<div class="owl-stage-outer">--}}
                        {{--<div class="owl-stage" style="transform: translate3d(-1290px, 0px, 0px); transition: all 0.25s ease 0s; width: 2257.5px;">--}}
                            {{--@foreach($service as $s)--}}
                                {{--<div class="owl-item cloned" style="width: 312.5px; margin-right: 10px;"><div class="single-service">--}}
                                        {{--<div class="icon"><i class="fa fa-cogs"></i></div>--}}
                                        {{--<div class="cnt">--}}
                                            {{--<h4>{{$s->header}}</h4>--}}
                                            {{--<p>{{$s->content}}</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}


                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div></div></div>--}}
                {{--<ul class="service-dot owl-dots" id="service-dot">--}}
                    {{--<li class="owl-dot">1</li>--}}
                    {{--<li class="owl-dot active">2</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section class="about-area pt--100" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="abt-content">
                    @foreach($about as  $a)
                    <h2>{{$a->header}}</h2>
                    <p>{{$a->content}}</p>
                    <a href="{{$a->link}}" target="_blank">View My Resume</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7">
                <div class="abt-service">




                    @foreach($service as $s)
                    <div class="single-service">
                        <div class="icon"><i class="{{$s->icon}}"></i></div>
                        <div class="cnt">
                            <h4>{{$s->header}}</h4>
                            <p>{{$s->content}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <ul class="service-dot owl-dots" id="service-dot">
                    <li class="owl-dot active">1</li>
                    <li class="owl-dot">2</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- about area end -->
<!-- portfolio area start -->
<section class="portfolio-area pt--100 pb--70" id="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
        </div>
        <div class="portfolio-menu">
            <button class="active" data-filter="*">All</button>
            <button data-filter=".php" class=""></button>

            @foreach($category as $c)
                <button data-filter=".{{$c->name}}" class="">{{$c->name}}</button>


            @endforeach
        </div>
        <div class="portfolio-masonary row" id="container" style="position: relative; height: 1156.72px;">
            @foreach($portfolio as $p)
                <div class="prt-grid  {{$p->category->name}} col-md-4" style="position: absolute; left: 0%; top: 0px;">
                    <div class="prt-item">

                        <a href="{{$p->link}}" target="_blank">
                            <img src="{{asset('/images/'.$p->image)}}" alt="bumerang">
                            <i class="fa fa-link"></i>
                            {{$p->header}}
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>
<!-- portfolio area end -->
<!-- blog area start -->
<section class="feature-blog pt--100" id="blog">
    <div class="container">
        <div class="section-title">
            <h2>Letest News</h2>
        </div>
        <div class="row">
            @foreach($news  as $n)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a class="blg-thumb" target="_blank" href="{{$n->link}}"><img src="{{asset('/images/'.$n->image)}}" alt="blog thumb"></a>
                        <div class="blog-content">
                            <h2><a target="_blank" href="{{$n->link}}">{{$n->header}}</a></h2>
                            <div class="blog-meta"> {{ date('j M Y', strtotime($n->time)) }}</div>
                            <p>{{$n->content}}</p>
                            <a target="_blank" href="{{$n->link}}" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
<!-- blog area end -->
<!-- footer area start -->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <p>{{$user->name}} {{$user->surname}} | Portfolio</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- jquery latest version -->

<script src="{{ asset('assets/jquery-2.2.4.min.js.download') }}"></script>
<script src="{{ asset('assets/bootstrap.min.js.download') }}"></script>


<script src="{{ asset('assets/owl.carousel.min.js.download') }}"></script>
<script src="{{ asset('assets/imagesloaded.pkgd.min.js.download') }}"></script>
<script src="{{ asset('assets/isotope.pkgd.min.js.download') }}"></script>
<script src="{{ asset('assets/jquery.magnific-popup.min.js.download') }}"></script>
<script src="{{ asset('assets/jquery.slicknav.min.js.download') }}"></script>
<script src="{{ asset('assets/counterup.min.js.download') }}"></script>
<script src="{{ asset('assets/waypoints.js.download') }}"></script>
<script src="{{ asset('assets/plugins.js.download') }}"></script>
<script src="{{ asset('assets/scripts.js.download') }}"></script>
<script src="{{ asset('assets/admin/js/ daterangepicker.js') }}"></script>



</body></html>
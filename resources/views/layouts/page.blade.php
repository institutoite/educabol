<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>educabol</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('stylesheet/bootstrap.css') }}">

    <!-- Template Style-->
    <link rel="stylesheet" href="{{ asset('stylesheet/font-awesome.css') }}"> 
    <link rel="stylesheet" href="{{ asset('stylesheet/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/jquery-fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/jquery.mCustomScrollbar.min.css') }}">
    

    @yield('css')

    @stack('css')

    <link href="{{ asset('icon/favicon.ico') }}" rel="shortcut icon">
</head>
<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="bg-header">
        <div class="flat-header-blog">
            <div class="top-bar clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                        <ul class="information">
                            <li class="phone lt-sp003">
                                <i class="fa fa-phone" aria-hidden="true"></i> +591 71039910
                            </li>
                            <li class="email">
                                <i class="fa fa-envelope" aria-hidden="true"></i> informaciones.ite@gmail.com
                            </li>
                        </ul>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                            <ul class="nav-sing">
                                <li>
                                    <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart">
                                    <span>
                                        @auth
                                            Bs. {{\Cart::session(auth()->id())->getSubTotal()}}
                                        @else
                                            Bs. 0
                                        @endauth
                                    </span>
                                    </i></a>
                                </li>
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Iniciar Sesion</a></li>
                                @else
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <header class="header menu-bar header-blog hv-menu-type2">
                <div class="container">
                    <div class="menu-bar-wrap clearfix">
                        <div id="logo" class="logo">
                            <a href="index.html"><img src="{{ asset('images/logo/02.png') }}" alt="images"></a>
                        </div>
                        <div class="mobile-button"><span></span></div>
                        <div class="header-menu">
                            <nav id="main-nav" class="main-nav">
                                <ul class="menu">
                                    <li><a href="<?php echo url('/')?>">Inicio</a></li>
                                    <li><a href="#">Course</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="course.html">Course</a></li>
                                            <li class="menu-item"><a href="course-list.html">Course list</a></li>
                                            <li class="menu-item active"><a href="course-single.html">Course single</a></li>
                                        </ul><!-- sub-menu -->
                                    </li>
                                    <li><a href="#">Explore</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about.html">About</a></li>
                                        </ul><!-- sub-menu -->
                                    </li>
                                    <li><a href="#">Degrees</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="blog.html">Blog</a></li>
                                            <li class="menu-item"><a href="blog-single.html">Blog single</a></li>
                                        </ul><!-- sub-menu -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-title page-title-blog">
                <div class="page-title-inner">
                    <div class="breadcrumbs breadcrumbs-blog text-left">
                        <div class="container">  
                            <div class="breadcrumbs-wrap">
                                <ul class="breadcrumbs-inner">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="course-single.html">Course</a></li>
                                </ul>
                                <div class="title">
                                    Course
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- bg-header -->
    
    @yield('content')

    <script src="{{ asset('javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('javascript/rev-slider.js') }}"></script>
    <script src="{{ asset('javascript/plugins.js') }}"></script>
    <script src="{{ asset('javascript/jquery-countTo.js') }}"></script>
    <script src="{{ asset('javascript/jquery-ui.js') }}"></script>
    <script src="{{ asset('javascript/jquery-fancybox.js') }}"></script>
    <script src="{{ asset('javascript/flex-slider.min.js') }}"></script>
    <script src="{{ asset('javascript/scroll-img.js') }}"></script>
    <script src="{{ asset('javascript/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('javascript/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('javascript/parallax.js') }}"></script>
    <script src="{{ asset('javascript/jquery-isotope.js') }}"></script>
    <script src="{{ asset('javascript/equalize.min.js') }}"></script>
    <script src="{{ asset('javascript/main.js') }}"></script>

    <!-- slider -->
    <script src="{{ asset('rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.video.min.js') }}"></script>
    @stack('js')
</body>
</html>
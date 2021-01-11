<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edukin</title>

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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
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
                                    <li><a href="<?php echo url('/')?>">Inicio</a>
                                    </li>
                                    <li><a href="#">Acerca de nosotros</a>
                                    </li>
                                    @auth
                                    <li><a href="{{ route('courses.subscribed') }}">Mis cursos</a>
                                    </li>
                                    @endauth
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
                                <div class="title">
                                    Categoria: {{ $category->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- bg-header -->
    <div class="course-grid">
        <div class="container">
            <div class="flat-portfolio">
                <ul class="flat-filter-isotype">
                </ul>
                <div class="search-course">
                    <form action="#" class="search-form">
                        <input type="search" placeholder="Buscar">
                        <button class="search-button">
                            <i class="fa fa-search" aria-hidden="true"></i> 
                        </button>
                    </form>
                </div>
            </div>
            <div class="flat-courses clearfix isotope-courses">
                @forelse($courses as $course)
                    <div class="course clearfix Popular Certificate">    
                        <div class="flat-course">
                            <div class="featured-post post-media">
                                <div class="entry-image pic">
                                    <img src="{{ asset('images/course-grid/3.jpg') }}" alt="images">
                                    <div class="hover-effect"></div>
                                    <div class="links">
                                        <a href="{{ route('courses.detail', $course->id) }}">Ver Contenido</a>
                                    </div>
                                </div>
                            </div>
                            <div class="course-content clearfix">
                                <div class="wrap-course-content">
                                    <h4>
                                        <a href="{{ route('courses.detail', $course->id) }}">{{ $course->name }}</a>
                                    </h4>
                                    <p>
                                        {{ Str::limit($course->description, 100) }}
                                    </p>
                                    <div class="author-info">
                                        <div class="author-name">
                                            {{ $course->teacher->user->name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-rating-price">
                                    <div class="meta-rate">
                                        <div class="rating">
                                            @include('partials.courses.rating', ['rating' => $course->custom_rating])
                                        </div>
                                        <div class="price">
                                            <span class="price-now">Bs. {{ $course->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                @empty
                    <div class="alert alert-dark">
                        {{ __("No hay ningún curso disponible") }}
                    </div>
                @endforelse
            </div> 
        </div>
    </div><!-- course-grid -->

    <div class="cta-cr parallax parallax3">
        <div class="overlay183251"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="cta-content">
                        <div class="caption">How to start your teaching?</div>
                        <h3>
                            Starting your journey with us? Follow this guide still possible to become a teacher.
                        </h3>
                        <div class="btn-about-become">
                            <a href="#">Become a Teacher</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                    <div class="cta-information">
                        <div class="phone">
                            +591 71039910
                        </div>
                        <div class="email">
                            informaciones.ite@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- cta-cr -->

    <footer id="footer" class="footer-type1">
        <div class="form-send-email">
            <div class="container">
                <form action="#" class="form-send">
                    <input type="search" placeholder="Enter your email...">
                    <button class="btn send-button bg-clff5f60">
                        Send
                    </button>
                </form>
            </div>
        </div>
        <div id="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-footer">
                       <div class="logo-footer">
                           <img src="{{ asset('images/logo/04.png') }}" alt="images">
                       </div>
                    </div>
                    <div class="col-lg-2 col-company">
                        <h3 class="widget widget-title">
                            Company
                        </h3>
                        <ul class="widget-nav-menu">
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">Feature Course</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-link">
                        <h3 class="widget widget-title">
                            Help Links
                        </h3>
                        <ul class="widget-nav-menu">
                            <li><a href="#">Student Support</a></li>
                            <li><a href="#">Course Policy</a></li>
                            <li><a href="#">Register  Key</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-course">
                        <h3 class="widget widget-title">
                            Course
                        </h3>
                        <ul class="widget-nav-menu">
                            <li><a href="#">Wordpres</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Learning English</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-media">
                        <h3 class="widget widget-title">
                            Social Media
                        </h3>
                        <ul class="widget-social-media">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom" class="bottom-type1 clearfix has-spacer">
            <div id="bottom-bar-inner" class="container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">
                            © 
                            <span class="text-year">
                                2018
                            </span>
                            <span class="text-name">
                                Roy Design.
                            </span>
                            <span class="license">
                                <a href="#">All Rights Reserved</a>
                            </span>
                        </div>
                    </div>
                    <div class="bottom-bar-menu">
                        <ul class="bottom-nav">
                            <li class="menu-item"><a href="#">About Company</a></li>
                            <li class="menu-item"><a href="#">Privacy Policy</a></li>
                            <li class="menu-item"><a href="#">Help Center</a></li>
                            <li class="menu-item"><a href="#">Terms</a></li>
                            <li class="menu-item"><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class="show"></a>
    </footer><!-- footer -->

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
</body>
</html>
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
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                            <a href="{{ url('/') }}" style="color:white; font-size:28px;"><img src="{{ asset('images/logo/02.png') }}" alt="images">Educabol</a>
                        </div>
                        <div class="mobile-button"><span></span></div>
                        <div class="header-menu">
                            <nav id="main-nav" class="main-nav">
                                <ul class="menu">
                                    <li><a href="<?php echo url('/')?>">Inicio</a></li>
                                    @auth
                                        @if ( auth()->user()->isTeacher() )  
                                            <li>
                                                <a class="brand-text" href="{{ route('teacher.courses') }}">{{ __("Administrar Cursos") }}</a>
                                            </li>
                                        @endif
                                            <li>
                                                <a class="brand-text" href="{{ route('student.courses') }}">{{ __("Mis Cursos") }}</a>
                                            </li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            
        </div>
    </div><!-- bg-header -->
    
    @yield('content')

    <!-- course-grid -->
    <div class="cta-cr parallax parallax3">
        <div class="overlay183251"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="cta-content">
                        <div class="caption">¿Te gustaria enseñar en nuestra plataforma educativa?</div>
                        
                        <h3>
                            Crea cursos en vídeo, subelo a nuestra plataforma y comienza a ganar dinero a traves de tus conocimientos.
                        </h3>
                        @auth
                            @if( ! auth()->user()->isTeacher())
                                <form action="{{ route('solicitude.teacher') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-warning">
                                        <i class="fa fa-graduation-cap"></i> {{ __("Convertirme en profesor") }}
                                    </button>
                                </form>
                            @else
                                <div class="btn-about-become">
                                    <a href="{{ route('teacher.courses') }}">Administrar los cursos que imparto</a>
                                </div>
                            @endif
                        @else
                            <div class="btn-about-become">
                                <a href="{{ route('register') }}">Registrate como profesor</a>
                            </div>
                        @endauth
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
    </div>
    <!-- cta-cr -->

    <footer id="footer" class="footer-type1">
        
        <div id="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-footer">
                        <h3 class="widget widget-title">
                            Nuestras Redes Sociales
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
                                2021
                            </span>
                            <span class="text-name">
                                Instito Ite.
                            </span>
                            <span class="license">
                                <a href="#">All Rights Reserved</a>
                            </span>
                        </div>
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
    @stack('js')
    @include('sweet::alert')
</body>
</html>
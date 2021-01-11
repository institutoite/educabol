<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edukin</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    
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
    
    <style>
        .yellow {
        color: #fbb545;
        }
    </style>
    
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
                                    {{ $course->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- bg-header -->
    <div class="courses-single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-page-wrap clearfix">
                        <div class="course-single">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <div class="videobox">
                                        <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1">
                                            <img src="{{ asset('images/course-single/1.jpg') }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">{{ $course->name }}</a>
                                </div>
                                <p>
                                    {{ $course->description }}.
                                </p>
                                <div class="author-price">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ asset('images/course-single/2.jpg') }}" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="#">{{ $course->teacher->user->name }}</a>
                                            </div>
                                            <div class="job">
                                                {{ $course->teacher->title }}
                                            </div>
                                        </div>
                                        
                                        <div class="list-star">
                                            @include('partials.courses.rating', ['rating' => $course->custom_rating])
                                        </div>
                                        <div class="job">
                                            {{ $course->reviews_count }} valoraciones
                                        </div>
                                        
                                    </div>
                                    <div class="price-wrap price-course-single">
                                        <div class="price">
                                            <span class="price-now">Bs. {{ $course->price }}</span>
                                        </div>
                                        <div class="btn-buynow">
                                            @include('partials.courses.action_button')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-tabs">
                            <ul class="tab-title type1 clearfix"> 
                                <li class="item-title  overview">
                                    <span class="inner">Contenido</span>
                                </li>
                                @auth
                                    @cannot('inscribe', $course)
                                        @can('review', $course)
                                        <li class="item-title curriculum">
                                            <span class="inner">Calificar Curso</span>
                                        </li>
                                        @endcan
                                    @endcannot
                                @endauth
                                <li class="item-title instructor">
                                    <span class="inner">Tutor</span>
                                </li>
                                
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="certificate-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Contenido del Curso</a>
                                            </div>
                                            <div class="certificate">
                                                <div class="certificate-wrap">
                                                    <ul class="list-certificate">
                                                        @forelse($course->goals as $goal)
                                                            
                                                            <li>{{ $goal->goal }}</li>
                                                                        
                                                        @empty
                                                            <div class="alert alert-dark">
                                                                <i class="fa fa-info-circle"></i>
                                                                {{ __("No se han escrito metas para este curso") }}
                                                            </div>
                                                        @endforelse
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="requirements-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Requisitos para tomar el curso</a>
                                            </div>
                                            <ul class="request">
                                                @forelse($course->requirements as $requirement)
                                                    <li>{{ $requirement->requirement }}</li>
                                                @empty
                                                    <div class="alert alert-dark">
                                                        <i class="fa fa-info-circle"></i>
                                                        {{ __("No hay ningún requisito para este curso") }}
                                                    </div>
                                                @endforelse
                                            </ul>
                                        </div>
 
                                    </div>
                                </div>
                                @auth
                                    @cannot('inscribe', $course)
                                        @can('review', $course)
                                            <div class="tab-content">
                                                <div class="item-content">
                                                    <div class="question-sg text clearfix">
                                                        <div class="title">
                                                            @include('partials.courses.form_review')
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="access-sg text clearfix">
                                                    <div class="title">
                                                        @include('partials.courses.reviews')
                                                    </div>
                                                </div>
                                            </div>
                                        @endcan
                                    @endcannot
                                @endauth
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="question-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Tutor</a>
                                            </div>
                                            <p>
                                                {{ $course->teacher->user->name }}.
                                            </p>
                                        </div>
                                        <div class="access-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Profesion</a>
                                            </div>
                                            <p>
                                                {{ $course->teacher->title }}.
                                            </p>
                                        </div>
                                        <div class="certificate-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Biografia</a>
                                            </div>
                                            <p>
                                                {{ $course->teacher->biography }}.
                                            </p>
                                        </div>

                                        <div class="description-single text clearfix">
                                            <div class="title">
                                                <a href="#">Fecha de registro a la plataforma</a>
                                            </div>
                                            <p>
                                                {{ $course->teacher->created_at->format('d/m/Y') }}.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-right">
                        <div class="widget widget-features">
                            <div class="widget-title">
                                Características del curso
                            </div>
                            <div class="content">
                                <ul class="features">
                                    <li>
                                        <a href="#">Categoría</a>
                                        <span>{{ $course->category->name }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Publicacion</a>
                                        <span>{{ $course->created_at->format('d/m/Y') }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Estudiantes inscritos</a>
                                        <span>{{ $course->students_count }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Certificado</a>
                                        <span>Si</span>
                                    </li>
                                    <li>
                                        <a href="#">Nivel</a>
                                        <span>{{ $course->level->name }}</span>
                                    </li>
                                    <li>
                                        <a href="#"></a>
                                        <span></span>
                                    </li>
                                    
                                </ul>
                                <div class="share-via">
                                    <div class="title">
                                        Compartir
                                    </div>
                                    <ul class="social-media">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="related-course related-course-single">
                            <div class="title">
                                Cursos Similares
                            </div>
                            <div class="related-course-wrap client-style3">
                                <div class="flat-carousel-box data-effect clearfix" data-gap="30" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-dots="false" data-auto="false" data-nav="false">
                                    <div class="owl-carousel">
                                        <div class="flat-course">
                                            @forelse($related as $relatedCourse)
                                                <div class="featured-post">
                                                    <div class="entry-image">
                                                        <img src="{{ asset('images/course-grid/3.jpg') }}" alt="images">
                                                    </div>
                                                </div>
                                                <div class="course-content clearfix">
                                                    <div class="wrap-course-content">
                                                        
                                                            <h4>
                                                                <a href="{{ route('courses.detail', $relatedCourse->id) }}">{{ $relatedCourse->name }}</a>
                                                            </h4>
                                                            <p>
                                                                {{ $relatedCourse->description }}</a>
                                                            </p>
                                                            <div class="author-info">
                                                                <div class="author-name">
                                                                    {{ $relatedCourse->teacher->user->name }}
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class="wrap-rating-price">
                                                        <div class="meta-rate">
                                                            <div class="rating">
                                                                @include('partials.courses.rating', ['rating' => $relatedCourse->custom_rating])
                                                            </div>
                                                            <div class="price">
                                                                <span class="price-now">Bs. {{ $relatedCourse->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="alert alert-dark">
                                                    {{ __("No existe ningún curso relacionado") }}
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- courses-single -->
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
    @stack('scripts')
</body>
</html>
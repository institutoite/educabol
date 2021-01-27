@extends('layouts.page')

@section('content')
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
                                    <img src="{{ $course->imagePath() }}" alt="images"> 
                                    <div class="hover-effect"></div>
                                    <div class="links">
                                        <a href="{{ route('courses.learn', ['course' => $course]) }}">Ver Contenido</a>
                                    </div>
                                </div>
                            </div>
                            <div class="course-content clearfix">
                                <div class="wrap-course-content">
                                    <h4>
                                        <a href="{{ route('courses.learn', ['course' => $course]) }}">{{ $course->title }}</a>
                                    </h4>
                                    <p>
                                        {{ Str::limit($course->description, 100) }}
                                    </p>
                                    <div class="author-info">
                                        <div class="author-name">
                                            {{ $course->teacher->name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-rating-price">
                                    <div class="meta-rate">
                                        <div class="rating">
                                            
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
    </div>
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
@endsection

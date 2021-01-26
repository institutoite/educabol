@extends('layouts.page')

@section('css')
    <style type="text/css">
        .imagencurso{
        width:770px;
        height:450px;
        }
    </style>
@endsection

@section('content')
    <div class="courses-single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-page-wrap clearfix">
                        <div class="course-single">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <div class="videobox">
                                        <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/A-BL8Ir7puE">
                                            <img class="imagencurso" src="{{ $course->imagePath() }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">{{ $course->title }}</a>
                                </div>
                                <p>
                                    {{ $course->description }}
                                </p>
                                <div class="author-price">
                                    <div class="author">
                                        <div class="info">
                                            <div class="name">
                                                <a href="#">{{ $course->teacher->name }}</a>
                                            </div>
                                            <div class="list-star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <span class="evaluate">4.9 (66 ratings)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-wrap price-course-single">
                                        <div class="price">
                                            <span class="price-now">Bs. {{ $course->price }}</span>
                                        </div>
                                        <div class="btn-buynow">
                                            <a href="#">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-tabs">
                            <ul class="tab-title type1 clearfix"> 
                                <li class="item-title curriculum">
                                    <span class="inner">Contenido</span>
                                </li>
                                <li class="item-title  overview">
                                    <span class="inner"></span>
                                </li>
                                <li class="item-title review">
                                    <span class="inner">REVIEW</span>
                                </li>
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content">
                                    <div class="item-content">
                                    @include("partials.learning.courses.curriculum.index")
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="question-sg text clearfix">
                                            <div class="title">
                                                <a href="#">What will i learn?</a>
                                            </div>
                                            <p>
                                                Learn cutting edge deep reinforcement learning algorithms from Deep Q Networks (DQN) to Deep Deterministic Policy Gradients (DDPG). Apply these concepts to train agents to walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="access-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Access on mobile and TV</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms and from Deep Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="certificate-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Certificate of Completion</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms from Deep Q Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                            <div class="certificate">
                                                <div class="certificate-wrap">
                                                    <p>
                                                        An eduking is a blog created for educational purposes. Eduking blog archive and support student and teacher learning by facilitating reflection, questioning by self becoming a means for educators.
                                                    </p>
                                                    <ul class="list-certificate">
                                                        <li>
                                                            Graphic designers create visual concepts, 
                                                        </li>
                                                        <li>
                                                            Remember skill can developed with practice.
                                                        </li>
                                                        <li>
                                                            The field is considered a subset of visual communication design.
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="images-certificate">
                                                    <img src="images/course-single/3.jpg" alt="images">
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="requirements-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Requirements</a>
                                            </div>
                                            <ul class="request">
                                                <li>
                                                   Understand what visual learning is for and how it is used
                                                </li>
                                                <li>
                                                   Need knowledge of photoshop and basic knowledge of indesign.
                                                </li>
                                                <li>
                                                   Preferable to have experience with PS, Sketch, Indesign and  Adobe XD.
                                                </li>
                                                <li>
                                                   Preferable to understand word embeddings
                                                </li>
                                            </ul>
                                        </div>
 
                                        <div class="description-single text clearfix">
                                            <div class="title">
                                                <a href="#">Description</a>
                                            </div>
                                            <p>
                                                Your ability to use types is one of the things that differentiates graphic design from others visual professions. A big parts of graphic design is understanding typography, developing your knowledge of typefaces, & how to apply them in your design. This will be a constant study throughout your career.
                                            </p>
                                        </div>

                                        <div class="price-course-single">
                                            <div class="price">
                                                <span class="price-previou">
                                                    <del>$169</del>
                                                </span>
                                                <span class="price-now">$169</span>
                                            </div>
                                            <div class="btn-buynow">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="question-sg text clearfix">
                                            <div class="title">
                                                <a href="#">What will i learn?</a>
                                            </div>
                                            <p>
                                                Learn cutting edge deep reinforcement learning algorithms from Deep Q Networks (DQN) to Deep Deterministic Policy Gradients (DDPG). Apply these concepts to train agents to walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="access-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Access on mobile and TV</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms and from Deep Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="certificate-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Certificate of Completion</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms from Deep Q Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                            <div class="certificate">
                                                <div class="certificate-wrap">
                                                    <p>
                                                        An eduking is a blog created for educational purposes. Eduking blog archive and support student and teacher learning by facilitating reflection, questioning by self becoming a means for educators.
                                                    </p>
                                                    <ul class="list-certificate">
                                                        <li>
                                                            Graphic designers create visual concepts, 
                                                        </li>
                                                        <li>
                                                            Remember skill can developed with practice.
                                                        </li>
                                                        <li>
                                                            The field is considered a subset of visual communication design.
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="images-certificate">
                                                    <img src="images/course-single/3.jpg" alt="images">
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="requirements-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Requirements</a>
                                            </div>
                                            <ul class="request">
                                                <li>
                                                   Understand what visual learning is for and how it is used
                                                </li>
                                                <li>
                                                   Need knowledge of photoshop and basic knowledge of indesign.
                                                </li>
                                                <li>
                                                   Preferable to have experience with PS, Sketch, Indesign and  Adobe XD.
                                                </li>
                                                <li>
                                                   Preferable to understand word embeddings
                                                </li>
                                            </ul>
                                        </div>
 
                                        <div class="description-single text clearfix">
                                            <div class="title">
                                                <a href="#">Description</a>
                                            </div>
                                            <p>
                                                Your ability to use types is one of the things that differentiates graphic design from others visual professions. A big parts of graphic design is understanding typography, developing your knowledge of typefaces, & how to apply them in your design. This will be a constant study throughout your career.
                                            </p>
                                        </div>

                                        <div class="price-course-single">
                                            <div class="price">
                                                <span class="price-previou">
                                                    <del>$169</del>
                                                </span>
                                                <span class="price-now">$169</span>
                                            </div>
                                            <div class="btn-buynow">
                                                <a href="#">Buy Now</a>
                                            </div>
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
                                        <a href="#">Publicado</a>
                                        <span>{{ $course->created_at->format("d/m/Y") }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Archivos</a>
                                        <span>{{ $course->totalFileUnits() }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Videos</a>
                                        <span>{{ $course->totalVideoUnits() }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Duracion</a>
                                        <span>{{ $course->totalTime() }}h</span>
                                    </li>
                                    <li>
                                        <a href="#">Certificado</a>
                                        <span>Si</span>
                                    </li>
                                    <li>
                                        <a href="#">Estudiantes</a>
                                        <span>{{ $course->students_count }}</span>
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
                                Related Courses
                            </div>
                            <div class="related-course-wrap client-style3">
                                <div class="flat-carousel-box data-effect clearfix" data-gap="30" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-dots="false" data-auto="false" data-nav="false">
                                    <div class="owl-carousel">
                                        <div class="flat-course">
                                            <div class="featured-post">
                                                <div class="entry-image">
                                                    <img src="images/course-grid/3.jpg" alt="images">
                                                </div>
                                            </div>
                                            <div class="course-content clearfix">
                                                <div class="wrap-course-content">
                                                    <h4>
                                                        <a href="#">Learn Photoshop CC With Nir Eyal Complete Course</a>
                                                    </h4>
                                                    <p>
                                                        Education City is initiative of our Qatar Foundation for Education, Science and Community Development.  
                                                    </p>
                                                    <div class="author-info">
                                                        <div class="author-name">
                                                            Perttick Sid
                                                        </div>
                                                        <div class="enroll">
                                                            <a href="#">Enroll</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="meta-rate">
                                                        <div class="rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span>(4)</span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-previou">
                                                                <del>$169</del>
                                                            </span>
                                                            <span class="price-now">$169</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flat-course">
                                            <div class="featured-post">
                                                <div class="entry-image">
                                                    <img src="images/course-grid/3.jpg" alt="images">
                                                </div>
                                            </div>
                                            <div class="course-content clearfix">
                                                <div class="wrap-course-content">
                                                    <h4>
                                                        <a href="#">Learn Photoshop CC With Nir Eyal Complete Course</a>
                                                    </h4>
                                                    <p>
                                                        Education City is initiative of our Qatar Foundation for Education, Science and Community Development.  
                                                    </p>
                                                    <div class="author-info">
                                                        <div class="author-name">
                                                            Perttick Sid
                                                        </div>
                                                        <div class="enroll">
                                                            <a href="#">Enroll</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="meta-rate">
                                                        <div class="rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span>(4)</span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-previou">
                                                                <del>$169</del>
                                                            </span>
                                                            <span class="price-now">$169</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flat-course">
                                            <div class="featured-post">
                                                <div class="entry-image">
                                                    <img src="images/course-grid/3.jpg" alt="images">
                                                </div>
                                            </div>
                                            <div class="course-content clearfix">
                                                <div class="wrap-course-content">
                                                    <h4>
                                                        <a href="#">Learn Photoshop CC With Nir Eyal Complete Course</a>
                                                    </h4>
                                                    <p>
                                                        Education City is initiative of our Qatar Foundation for Education, Science and Community Development. 
                                                    </p>
                                                    <div class="author-info">
                                                        <div class="author-name">
                                                            Perttick Sid
                                                        </div>
                                                        <div class="enroll">
                                                            <a href="#">Enroll</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="meta-rate">
                                                        <div class="rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span>(4)</span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-previou">
                                                                <del>$169</del>
                                                            </span>
                                                            <span class="price-now">$169</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                            +91 254 785 587
                        </div>
                        <div class="email">
                            edukin@info.com
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
                           <img src="images/logo/04.png" alt="images">
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

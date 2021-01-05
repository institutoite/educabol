<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edukin</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    

    <!---- checkout ---->
    <!-- Mobile Web-app fullscreen -->

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->

    <meta name="description" content="Extended Bootstrap 4 Template">
    <meta name="author" content="Goran Hrustic">
    <link rel="icon" href="assets/svg/favicon.ico">
    <!---- checkout ---->

    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('stylesheet/bootstrap.css') }}">

    <!-- Template Style-->
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/style.css') }}" />

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
    
    <link href="{{ asset('icon/favicon.ico') }}" rel="shortcut icon">


    <!---- checkout ---->
    <!-- Vendor stylesheets -->

    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/animate.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/font-awesome.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/linear-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/owl.carousel.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/jquery.lavalamp.css') }}" />

    <!-- Template stylesheets -->

   
    <!---- checkout ---->

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
                                    <i class="fa fa-phone" aria-hidden="true"></i> +91 254 785 587
                                </li>
                                <li class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> educate@info.com
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                            <ul class="nav-sing">
                                <li><a href="{{ route('cart.index') }}" class="material-icons" style="font-size: 28px">shopping_cart</a></li>
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
                                    <li><a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="index.html">Home 1</a></li>
                                            <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                            <li class="menu-item"><a href="home3.html">Home 3</a></li>
                                            <li class="menu-item"><a href="home4.html">Home 4</a></li>
                                            <li class="menu-item"><a href="home5.html">Home 5</a></li>
                                        </ul><!-- sub-menu -->
                                    </li>
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
        
    </div><!-- courses-single -->
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


    <!---- checkout ---->
    <!-- Vendor Scripts -->

    <script src="{{ asset('checkout/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/in-view.min.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/jquery.lavalamp.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/owl.carousel.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/rellax.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/tabzy.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/isotope.pkgd.js') }}"></script>

    <!-- Template Scripts -->

    <script src="{{ asset('checkout/js/main.js') }}"></script>
    <script src="{{ asset('checkout/js/custom.js') }}"></script>
    <!---- checkout ---->
</body>
</html>
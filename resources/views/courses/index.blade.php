<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edukin</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Bootstrap-->
    <link rel="stylesheet" href="stylesheet/bootstrap.css">

    <!-- Template Style-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="stylesheet/font-awesome.css"> 
    <link rel="stylesheet" href="stylesheet/animate.css">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/shortcodes.css">
    <link rel="stylesheet" href="stylesheet/jquery-fancybox.css">
    <link rel="stylesheet" href="stylesheet/responsive.css">
    <link rel="stylesheet" href="stylesheet/flexslider.css">
    <link rel="stylesheet" href="stylesheet/owl.theme.default.min.css">
    <link rel="stylesheet" href="stylesheet/owl.carousel.min.css">
    <link rel="stylesheet" href="stylesheet/jquery.mCustomScrollbar.min.css">
    
    <link href="icon/favicon.ico" rel="shortcut icon">


    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="wrap-header">
        <header class="header flat-header lh-header header-style1">
            <div class="site-header-inner">
                <div class="container">
                    <div id="logo" class="logo">
                        <a href="index.html"><img src="images/logo/02.png" alt="images"></a>
                    </div>
                    <div class="mobile-button"><span></span></div>
                    <div class="header-menu">
                        <nav id="main-nav" class="main-nav">
                            <ul class="menu">
                                <li><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item active"><a href="index.html">Home 1</a></li>
                                        <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                        <li class="menu-item"><a href="home3.html">Home 3</a></li>
                                        <li class="menu-item"><a href="home4.html">Home 4</a></li>
                                        <li class="menu-item"><a href="home5.html">Home 5</a></li>
                                    </ul><!-- sub-menu -->
                                </li>
                                <li><a href="course.html">Course</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="course.html">Course</a></li>
                                        <li class="menu-item"><a href="course-list.html">Course list</a></li>
                                        <li class="menu-item"><a href="course-single.html">Course single</a></li>
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
                                <li class="nav-sing">
                                    <a class="sing-in" href="#">Sing In</a>
                                    <a class="sing-up" href="#">Sing Up</a>
                                </li>
                            </ul>
                        </nav>
                    </div> 
                </div>
            </div>
        </header><!-- header -->
    </div><!-- wrap-header -->
    
    <section class="flat-slider style1 clearfix">
        <div class="rev_slider_wrapper fullwidthbanner-container" >
            <div id="rev-slider1" class="rev_slider fullwidthabanner">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="images/header/02.png" alt="" data-bgposition="center center" data-no-retina>
                        <div class="overlay"></div>

                        <!-- Layers -->
                        <div class="tp-caption tp-resizeme education"
                        data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-113','-80','-70','-70']"
                        data-fontsize="['70','70','50','30']"
                        data-lineheight="['90','90','70','50']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"> <div class="education-text text-white">Education for all</div> </div>

                        <div class="tp-caption tp-resizeme text-white complete text-edukin"
                        data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-22','-5','-10','-10']"
                        data-fontsize="['17','17','15','14']"
                        data-lineheight="['30','30','26','22']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-paddingright="['550','155','50','2']" >Complete your educution record collection. Discover Educution's full discography. Education is not key to success in life.</div>

                        <div class="tp-caption"
                        data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['88','80','60','70']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-paddingtop= "['50','50','50','50']"
                        data-paddingbottom= "['50','50','50','50']"> <a href="#" class="btn btn-styl1">Read More</a> <a href="#" class="btn btn-styl2"><i class="fa fa-play" aria-hidden="true"></i></a></div>

                        <div class="tp-caption sl-address"
                        data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['325','280','250','200']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-paddingtop= "['50','50','50','50']"
                        data-paddingbottom= "['50','50','50','50']"> <a href="#" class="text-white sl-phone"><i class="fa fa-phone" aria-hidden="true"></i> +91 254 785 587</a><a href="#" class="text-white sl-email"><i class="fa fa-envelope" aria-hidden="true"></i> educate@info.com</a></div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="images/header/03.png" alt="" data-bgposition="center center" data-no-retina>
                        <div class="overlay"></div>

                        <!-- Layers -->

                        <div class="tp-caption tp-resizeme education"
                        data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-113','-80','-70','-70']"
                        data-fontsize="['70','70','50','30']"
                        data-lineheight="['90','90','70','50']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"> <div class="education-text text-white">Education for all</div> </div>

                        <div class="tp-caption tp-resizeme text-white complete text-edukin"
                        data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-22','-5','-10','-10']"
                        data-fontsize="['17','17','15','14']"
                        data-lineheight="['30','30','26','22']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-paddingright="['550','155','50','2']" >Complete your educution record collection. Discover Educution's full discography. Education is not key to success in life.</div>

                        <div class="tp-caption"
                        data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['88','80','60','70']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-paddingtop= "['50','50','50','50']"
                        data-paddingbottom= "['50','50','50','50']"> <a href="#" class="btn btn-styl1">Read More</a> <a href="#" class="btn btn-styl2"><i class="fa fa-play" aria-hidden="true"></i></a></div>

                        <div class="tp-caption sl-address"
                        data-x="['left','left','left','center']" data-hoffset="['0','4','4','15']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['325','280','250','200']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-paddingtop= "['50','50','50','50']"
                        data-paddingbottom= "['50','50','50','50']"> <a href="#" class="text-white sl-phone"><i class="fa fa-phone" aria-hidden="true"></i> +91 254 785 587</a><a href="#" class="text-white sl-email"><i class="fa fa-envelope" aria-hidden="true"></i> educate@info.com</a></div>
                    </li>
                </ul>
            </div>
        </div> 
    </section><!-- flat-slider -->
    <section class="partner-clients partner-clients-style1"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="slide-client owl-carousel" data-auto="false" data-item="4" data-nav="false" data-dots="false" data-gap="0">
                        <ul>
                            <li><img src="images/home1/01.png" alt="images"></li>
                        </ul>
                        <ul>
                            <li><img src="images/home1/02.png" alt="images"></li>
                        </ul>
                        <ul>
                            <li><img src="images/home1/03.png" alt="images"></li>
                        </ul>
                        <ul>
                            <li><img src="images/home1/04.png" alt="images"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="iconbox-style1">
                        <div class="apply-admission">
                            <div class="apply-admission-wrap type2 bd-type1">
                                <div class="apply-admission-inner">
                                    <h2 class="title text-center">
                                        <span>Apply for admission</span>
                                    </h2>
                                    <div class="caption text-center">
                                        Make it more simple!
                                    </div>
                                    <div class="apply-sent apply-sent-style1">
                                        <form action="#" class="form-sent">
                                            <input type="text" placeholder="Enter your email ....">
                                            <button class="sent-button bg-cl3f4c99">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- partner-clients -->
    @livewire('course-index')
    <!-- online-courses -->
    <section class="flat-services style1 parallax parallax1 clearfix">
        <div class="section-overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services-content-box themesflat-content-box" data-padding="0% 30% 0% 0%" data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                        <div class="flat-imagebox imagebox-services style1">
                            <div class="imagebox-content">
                                <img src="images/home1/13.png" alt="images">
                                <h5 class="text-one text-white">Education Services</h5>
                                <p class="text-white">
                                    Education is the most power which you can use to change the world.” Education is the key to.
                                </p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-content-box themesflat-content-box" data-padding="0% 15% 0% 16%" data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                        <div class="flat-imagebox imagebox-services style1">
                            <div class="imagebox-content">
                                <img src="images/home1/14.png" alt="images">
                                <h5 class="text-two text-white">Success Rate</h5>
                                <p class="text-white">
                                    Education is the most power which you can use to change the world.” Education is the key to.
                                </p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-content-box themesflat-content-box" data-padding="0% 0% 0% 30.5%" data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                        <div class="flat-imagebox imagebox-services style1">
                            <div class="imagebox-content">
                                <img src="images/home1/15.png" alt="images">
                                <h5 class="text-three text-white">Foreign Student</h5>
                                <p class="text-white">
                                    Education is the most power which you can use to change the world.” Education is the key to.
                                </p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- flat-services -->
    <section class="flat-introduce flat-introduce-style1 clearfix">
        <div class="container">
            <div class="col-left">
                <div class="videobox">
                    <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1">
                        <img src="images/home1/5.jpg" alt="images">
                    </a>
                    <div class="elip-top">
                        <img src="images/home1/42.png" alt="images">
                    </div>
                    <div class="elip-bottom">
                        <img src="images/home1/42.png" alt="images">
                    </div>
                </div>
            </div>
            <div class="col-right">
                <div class="content-introduce content-introduce-style1">
                    <div class="title-section">
                        <p class="sub-title lt-sp25">About our university</p>
                        <div class="flat-title larger heading-type1">Take a tour</div>
                    </div>
                    <div class="content-introduce-inner">
                        <p>
                            Education is the most powerful weapon which you can use to change the world.” Education is the key to elimi-nating gender inequality, to reducing poverty.
                        </p>
                        <p>
                            to creating a sustainable planet, to preventing needless deaths and illness, and to fostering peace.
                        </p>
                        <div class="content-list">
                            <ul>
                                <li>
                                    <span class="text">
                                        Education is extremely important because you overcome superstitions.
                                    </span>
                                </li>
                                <li>
                                    <span class="text">
                                        Education is only valuable if children are being taught right things.
                                    </span>
                                </li>
                                <li>
                                    <span class="text">  
                                        Education is not key to success in life.
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- flat-introduce -->
    <section class="flat-benefit style1 clearfix">
        <div class="container-fluid">
            <div class="col-benefit-left">
                <div class="wrap-inconbox-benefit">
                    <div class="title-section">
                        <div class="flat-title small heading-type2 text-white">Why choose us?</div>
                    </div>
                    <div class="iconbox-benefit iconbox-benefit-style1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
                                <div class="themesflat-content-box" data-padding="0% 4% 0% 0%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%"data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                                    <div class="iconbox">
                                        <div class="iconbox-icon">
                                            <img src="images/home1/18.png" alt="images">
                                        </div>
                                        <div class="iconbox-content img-one">
                                            <h3>
                                                <a href="#">Certificate</a>
                                            </h3>
                                            <p>
                                                Education is the most power which you can to change the world.” Education is the key to.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
                                <div class="themesflat-content-box" data-padding="0% 4% 0% 0%" data-sdesktoppadding="0% 15px 0% 0%" data-ssdesktoppadding="0% 15px 0% 0%"data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                                    <div class="iconbox">
                                        <div class="iconbox-icon">
                                            <img src="images/home1/19.png" alt="images">
                                        </div>
                                        <div class="iconbox-content img-two">
                                            <h3>
                                                <a href="#">Life Programs</a>
                                            </h3>
                                            <p>
                                                Education is the most power which you can to change the world.” Education is the key to.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
                                <div class="themesflat-content-box" data-padding="0% 4% 0% 0%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%"data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                                    <div class="iconbox">
                                        <div class="iconbox-icon">
                                            <img src="images/home1/20.png" alt="images">
                                        </div>
                                        <div class="iconbox-content img-three">
                                            <h3>
                                                <a href="#">Affordability</a>
                                            </h3>
                                            <p>
                                                Education is the most power which you can to change the world.” Education is the key to.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
                                <div class="themesflat-content-box" data-padding="0% 4% 0% 0%" data-sdesktoppadding="0% 15px 0% 0%" data-ssdesktoppadding="0% 15px 0% 0%"data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                                    <div class="iconbox">
                                        <div class="iconbox-icon">
                                            <img src="images/home1/21.png" alt="images">
                                        </div>
                                        <div class="iconbox-content img-four">
                                            <h3>
                                                <a href="#">Social</a>
                                            </h3>
                                            <p>
                                                Education is the most power which you can to change the world.” Education is the key to.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-benefit-right">
                <div class="apply-admission bg-apply-type1">
                    <div class="apply-admission-wrap type3 bd-type2">
                        <div class="apply-admission-inner">
                            <h2 class="title text-center">
                                <span>Apply for admission</span>
                            </h2>
                        </div>
                    </div>
                    <div class="form-apply">
                        <div class="section-overlay183251"></div>
                        <form action="#" class="apply-now">
                            <ul>
                                <li><input type="search" placeholder="Name"></li>
                                <li><input type="search" placeholder="Email"></li>
                                <li><input type="search" placeholder="Phone"></li>
                            </ul>
                            <div class="btn-50 hv-border text-center">
                                <button class="btn bg-clff5f60">
                                    Apply now
                                </button>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </section><!-- flat-benefit -->
    <section class="flat-event flat-event-style1 clearfix">
        <div class="container-fluid">
            <div class="col-left">
                <div class="content-event-style1 themesflat-content-box" data-padding="13.7% 1.2% 0% 0%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%" data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                    <div class="title-section">
                        <div class="flat-title larger heading-type3">All upcoming events</div>
                    </div>
                    <div class="content-event">
                        <div class="entry-info clearfix">
                            <div class="entry-title">
                                <a href="#" class="cl-7ecc88">
                                    International Conference on Business .....
                                </a>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li class="date clearfix">
                                        <span class="icon-event icon-icons8-planner-100"></span>
                                        <span class="detail-event">July 8, 2018</span>
                                    </li>
                                    <li class="time clearfix">
                                        <span class="icon-event icon-icons8-stopwatch-100"></span>
                                        <span class="detail-event">5.00pm - 7.00pm</span>
                                    </li>
                                    <li class="location clearfix">
                                        <span class="icon-event icon-icons8-marker-100"></span>
                                        <span class="detail-event">United States</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-number number-one">
                            <span class="cl-7ecc88">1</span>
                        </div>
                    </div>
                    <div class="content-event">
                        <div class="entry-info clearfix">
                            <div class="entry-title">
                                <a href="#" class="cl-3f4c99">
                                    International Conference on Business .....
                                </a>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li class="date clearfix">
                                        <span class="icon-event icon-icons8-planner-100"></span>
                                        <span class="detail-event">July 8, 2018</span>
                                    </li>
                                    <li class="time clearfix">
                                        <span class="icon-event icon-icons8-stopwatch-100"></span>
                                        <span class="detail-event">5.00pm - 7.00pm</span>
                                    </li>
                                    <li class="location clearfix">
                                        <span class="icon-event icon-icons8-marker-100"></span>
                                        <span class="detail-event">United States</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-number number-two">
                            <span class="cl-3f4c99">2</span>
                        </div>
                    </div>
                    <div class="content-event">
                        <div class="entry-info clearfix">
                            <div class="entry-title">
                                <a href="#" class="cl-ff5f60">
                                    International Conference on Business .....
                                </a> 
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li class="date clearfix">
                                        <span class="icon-event icon-icons8-planner-100"></span>
                                        <span class="detail-event">July 8, 2018</span>
                                    </li>
                                    <li class="time clearfix">
                                        <span class="icon-event icon-icons8-stopwatch-100"></span>
                                        <span class="detail-event">5.00pm - 7.00pm</span>
                                    </li>
                                    <li class="location clearfix">
                                        <span class="icon-event icon-icons8-marker-100"></span>
                                        <span class="detail-event">United States</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-number number-three">
                            <span class="cl-ff5f60">3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-right">
                <div class="images-list themesflat-content-box" data-padding="0% 0% 0% 15.1%" data-sdesktoppadding="0% 0% 0% 5%" data-ssdesktoppadding="0% 0% 0% 0%" data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                    <div class="images-list-1">
                        <div class="img-event">
                            <img src="images/home1/24.png" alt="images">
                            <span class="number bg-cl7ecc88">1</span>
                        </div>
                        <div class="img-event">
                            <img src="images/home1/25.png" alt="images">
                            <span class="number bg-cl3f4c99">2</span>
                        </div>
                    </div>
                    <div class="images-list-2">
                        <div class="img-event">
                            <img src="images/home1/26.png" alt="images">
                            <span class="number bg-clff5f60">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- flat-event -->
    <section class="slider testimonial-flexslider testimonial-style1 equalize sm-equalize-auto clearfix">        
        <div class="wrap-info themesflat-content-box" data-padding="0% 0% 0% 10%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%" data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
            <div id="carousel-testimonial" class="flexslider">
                <ul class="slides translate-none"> 
                    <li class="avatar">
                        <img src="images/home1/33.png" alt="images">
                    </li>
                    <li class="avatar">
                        <img src="images/home1/32.png" alt="images">
                    </li>
                    <li class="avatar">
                        <img src="images/home1/31.png" alt="images">
                    </li>
                    <li class="avatar">
                        <img src="images/home1/30.png" alt="images">
                    </li>
                    <li class="avatar">
                        <img src="images/home1/29.png" alt="images">
                    </li> 
                </ul>
            </div>
        </div>
        <div class="wrap-quote themesflat-content-box" data-padding="10.47% 14.1% 0% 0%" data-sdesktoppadding="10.47% 15px 0% 15px" data-ssdesktoppadding="16% 15px 0% 15px" data-mobipadding="100px 15px 85px 15px" data-smobipadding="100px 15px 85px 15px">
            <div id="slider-testimonial" class="flexslider">
                <ul class="slides client-info">
                    <li>
                        <span class="icon-quote icon-icons8-get-quote-filled-100"></span>
                        <p class="speech">
                            " Before Coursecity, I was working two minimum wage job. Now& new<br> life & learned most of my programming database<br> hrough self-study &the material available.
                        </p>
                        <div class="name">
                            Stephanie Magion
                        </div>
                    </li>
                    <li>
                        <span class="icon-quote icon-icons8-get-quote-filled-100"></span>
                        <p class="speech">
                            " Before Coursecity, I was working two minimum wage job. Now& new<br> life & learned most of my programming database<br> hrough self-study &the material available.
                        </p>
                        <div class="name">
                            Stephanie Magion
                        </div>
                    </li>
                    <li>
                        <span class="icon-quote icon-icons8-get-quote-filled-100"></span>
                        <p class="speech">
                            " Before Coursecity, I was working two minimum wage job. Now& new<br> life & learned most of my programming database<br> hrough self-study &the material available.
                        </p>
                        <div class="name">
                            Stephanie Magion
                        </div>
                    </li>
                    <li>
                        <span class="icon-quote icon-icons8-get-quote-filled-100"></span>
                        <p class="speech">
                            " Before Coursecity, I was working two minimum wage job. Now& new<br> life & learned most of my programming database<br> hrough self-study &the material available.
                        </p>
                        <div class="name">
                            Stephanie Magion
                        </div>
                    </li>
                    <li>
                        <span class="icon-quote icon-icons8-get-quote-filled-100"></span>
                        <p class="speech">
                            " Before Coursecity, I was working two minimum wage job. Now& new<br> life & learned most of my programming database<br> hrough self-study &the material available.
                        </p>
                        <div class="name">
                            Stephanie Magion
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- testimonial -->
    <section class="latest-blog cl-dots1 latest-blog-type1 latest-blog-style1">
        <div class="container">
            <div class="title-section">
                <div class="flat-title small heading-type4">
                    Latest Blog
                </div>
            </div>
            <div class="flat-carousel-box data-effect clearfix" data-gap="30" data-column="2" data-column2="2" data-column3="1" data-column4="1" data-dots="true" data-auto="false" data-nav="false">
                <div class="owl-carousel">
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/34.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/35.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/34.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/35.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/34.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/35.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/34.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/35.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/34.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-style1 post-bg">
                        <div class="bg clearfix">
                            <div class="position cl-fe5e5f lt-sp4">
                                DESIGN
                            </div>
                            <div class="featured-post">
                                <img src="images/home1/35.png" alt="images">
                            </div>
                        </div>
                        <div class="post-content clearfix">
                            <div class="entry-info cleafix">
                                <div class="avatar">
                                    <img src="images/home1/36.png" alt="images">
                                </div>
                                <div class="post-title">
                                    <h5>
                                        <a href="#" class="lt-sp04">Design Milk is a design blog featuring...</a>
                                    </h5>
                                </div>
                            </div>
                            
                            <div class="post-link">
                                <a href="#">Read Now</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section><!-- latest-blog -->
    <section class="quick-link quick-link-style1 parallax parallax2">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="wrap-link-left">
                        <div class="caption lt-sp275">
                            It’s fast, free and very easy!
                        </div>
                        <div class="heading-lf lt-sp03">
                            Ready to get started?
                        </div>
                        <p>
                            Education is the process of acquiring the body of knowledge and skills that people are expected have in your society. A education develops a critical thought process in addition to learning .
                        </p>
                        <div class="btn-apply-link">
                            <ul>
                                <li>
                                    <a class="btn btn-apply bg-clff5f60">Apply now</a>
                                </li>
                                <li>
                                    <a class="btn btn-request lt-sp06">Request Service</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="wrap-link-right">
                        <div class="heading-rg">
                            <span>Quick Link</span>
                        </div>
                        <ul class="info-quick-link">
                            <li>
                                <img src="images/home1/38.png" alt="images">
                                <a href="#">Tution And Fees</a>
                            </li>
                            <li>
                                <img src="images/home1/39.png" alt="images">
                                <a href="#">University Facilities</a>
                            </li>
                            <li>
                                <img src="images/home1/40.png" alt="images">
                                <a href="#">Review & Rating</a>
                            </li>
                            <li>
                                <img src="images/home1/41.png" alt="images">
                                <a href="#">Community Q&A</a>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </section><!-- quick-link -->
    <footer id="footer" class="footer-type1">
        <div class="form-send-email">
            <div class="container">                
                <form action="#" class="form-send">
                    <input type="search" placeholder="Enter your email ...">
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
    
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/rev-slider.js"></script>
    <script src="javascript/plugins.js"></script>
    <script src="javascript/jquery-countTo.js"></script>
    <script src="javascript/jquery-ui.js"></script>
    <script src="javascript/jquery-fancybox.js"></script>
    <script src="javascript/flex-slider.min.js"></script>
    <script src="javascript/scroll-img.js"></script>
    <script src="javascript/owl.carousel.min.js"></script>
    <script src="javascript/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="javascript/parallax.js"></script>
    <script src="javascript/jquery-isotope.js"></script>
    <script src="javascript/equalize.min.js"></script>
    <script src="javascript/main.js"></script>

    <!-- slider -->
    <script src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.video.min.js"></script>

    @livewireScripts

</body>
</html>
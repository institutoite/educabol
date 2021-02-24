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
    
    <link href="{{ asset('icon/favicon.ico') }}" rel="shortcut icon">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
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
                        <a href="{{ url('/') }}" style="color:white; font-size:28px;"><img src="{{ asset('images/logo/02.png') }}" alt="images">Educabol</a>
                    </div>
                    <div class="mobile-button"><span></span></div>
                    <div class="header-menu">
                        <nav id="main-nav" class="main-nav">
                            <ul class="menu">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                @auth
                                    @if ( auth()->user()->isAdmin() )
                                        <li>
                                            <a class="brand-text" href="{{ route('admin.pending') }}">{{ __("Administrar") }}</a>
                                        </li>
                                    @elseif ( auth()->user()->isTeacher() )  
                                        <li>
                                            <a class="brand-text" href="{{ route('teacher.courses') }}">{{ __("Administrar Cursos") }}</a>
                                        </li>
                                        <li>
                                            <a class="brand-text" href="{{ route('student.courses') }}">{{ __("Mis Cursos") }}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="brand-text" href="{{ route('student.courses') }}">{{ __("Mis Cursos") }}</a>
                                        </li>
                                    @endif
                                @endauth
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
                                @auth
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                @endauth
                                <li class="nav-sing">
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
                        data-responsive_offset="on"> <div class="education-text text-white">Cursos en linea</div> </div>

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
                        data-paddingright="['550','155','50','2']" >Aprende a tu ritmo desde cualquier dispositivo.</div>

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
                        data-paddingbottom= "['50','50','50','50']"> 
                            @if (Auth::guest())
                                <a href="{{ route('login') }}" class="btn btn-styl1">Iniciar Sesion</a>
                            @else
                                <a class="btn btn-styl1">Bienvenido {{ auth::User()->name }}</a>
                            @endif
                        </div>
                        
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
                        data-paddingbottom= "['50','50','50','50']"> <a href="#" class="text-white sl-phone"><i class="fa fa-phone" aria-hidden="true"></i> +591 71039910</a><a href="#" class="text-white sl-email"><i class="fa fa-envelope" aria-hidden="true"></i> informaciones.ite@gmail.com</a></div>
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
                        data-responsive_offset="on"> <div class="education-text text-white">Cursos en linea</div> </div>

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
                        data-paddingright="['550','155','50','2']" >Aprende a tu ritmo desde cualquier dispositivo.</div>

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
                        data-paddingbottom= "['50','50','50','50']"> 
                            @if (Auth::guest())
                                <a href="{{ route('login') }}" class="btn btn-styl1">Iniciar Sesion</a>
                            @else
                                <a class="btn btn-styl1">Bienvenido {{ auth::User()->name }}</a>
                            @endif
                        </div>
                        
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
                        data-paddingbottom= "['50','50','50','50']"> <a href="#" class="text-white sl-phone"><i class="fa fa-phone" aria-hidden="true"></i> +591 71039910</a><a href="#" class="text-white sl-email"><i class="fa fa-envelope" aria-hidden="true"></i> informaciones.ite@gmail.com</a></div>
                    </li>
                </ul>
            </div>
        </div> 
    </section><!-- flat-slider -->
    <section class="partner-clients partner-clients-style1"> 
        <div class="container">
            <div class="row">
            <div class="col-lg-8 col-md-12">
            </div>
            <div class="col-lg-4 col-md-12">
                    <div class="iconbox-style1">
                        <div class="apply-admission">
                            <div class="apply-admission-wrap type2 bd-type1">
                                <div class="apply-admission-inner">
                                    <h2 class="title text-center">
                                        <span>{{ __("Busca tu curso") }}</span>
                                    </h2>
                                    <div class="caption text-center">
                                        {{ __("Haz tu busqueda") }}
                                    </div>
                                    <div class="apply-sent apply-sent-style1">
                                        <form action="{{ route('courses.search') }}" method="POST" class="form-sent">
                                        @csrf
                                            <input type="text" autocomplete="off" value="{{ session('search[courses]') }}" name="search" placeholder="{{ __("¿Qué curso buscas?") }}">
                                            <button type="submit" class="sent-button bg-cl3f4c99">
                                                <i class="fa fa-search" aria-hidden="true"></i>
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
    <section class="online-courses online-courses-style1">
        @yield('content')
    </section><!-- online-courses -->
    <section class="flat-benefit style1 clearfix">
        <div class="container-fluid">
            <div class="col-benefit-left">
                <div class="wrap-inconbox-benefit">
                    <div class="title-section">
                        <div class="flat-title small heading-type2 text-white">¿Porque elegirnos?</div>
                    </div>
                    <div class="iconbox-benefit iconbox-benefit-style1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
                                <div class="themesflat-content-box" data-padding="0% 4% 0% 0%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%"data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                                    <div class="iconbox">
                                        <div class="iconbox-icon">
                                            <img src="{{ asset('images/home1/18.png') }}" alt="images">
                                        </div>
                                        <div class="iconbox-content img-one">
                                            <h3>
                                                <a href="#">Aprende a tu ritmo</a>
                                            </h3>
                                            <p>
                                                Aprende a cualquier hora y desde cualquier dispositivo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
                                <div class="themesflat-content-box" data-padding="0% 4% 0% 0%" data-sdesktoppadding="0% 15px 0% 0%" data-ssdesktoppadding="0% 15px 0% 0%"data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                                    <div class="iconbox">
                                        <div class="iconbox-icon">
                                            <img src="{{ asset('images/home1/19.png') }}" alt="images">
                                        </div>
                                        <div class="iconbox-content img-two">
                                            <h3>
                                                <a href="#">Obten certificados</a>
                                            </h3>
                                            <p>
                                                Recibe certificados acreditado por el Instituto Ite.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
                                <div class="themesflat-content-box" data-padding="0% 4% 0% 0%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%"data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                                    <div class="iconbox">
                                        <div class="iconbox-icon">
                                            <img src="{{ asset('images/home1/20.png') }}" alt="images">
                                        </div>
                                        <div class="iconbox-content img-three">
                                            <h3>
                                                <a href="#">Profesores con experiencia</a>
                                            </h3>
                                            <p>
                                                Cada curso es impartido solo por profesores con gran experiencia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
                                <div class="themesflat-content-box" data-padding="0% 4% 0% 0%" data-sdesktoppadding="0% 15px 0% 0%" data-ssdesktoppadding="0% 15px 0% 0%"data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                                    <div class="iconbox">
                                        <div class="iconbox-icon">
                                            <img src="{{ asset('images/home1/21.png') }}" alt="images">
                                        </div>
                                        <div class="iconbox-content img-four">
                                            <h3>
                                                <a href="#">Cursos producidos profesionalmente</a>
                                            </h3>
                                            <p>
                                                Seleccionamos los mejores contenidos multimedia para que no pierdas ningun detalle.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="flat-title larger heading-type3">Aprende a tu ritmo</div>
                    </div>
                    <div class="content-event">
                        <div class="entry-info clearfix">
                            <div class="entry-title">
                                <a href="#" class="cl-7ecc88">
                                    1. Elige que te gustaria aprender
                                </a>
                            </div>
                            <div class="entry-meta">
                                <p>Tenemos cursos de matematica, fisica, quimica, estadistica, computacion y muy pronto muchos cursos mas.</p>
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
                                    2. Aprende haciendo
                                </a>
                            </div>
                            <div class="entry-meta">
                                <p>Aprende a tu ritmo realizando ejercicios practicos.</p>
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
                                    3. Pon tu aprendizaje en práctica
                                </a> 
                            </div>
                            <div class="entry-meta">
                                <p>Ya sea que estes en colegio, universidad o ya seas profesional, aplica tu conociento en el mundo real.</p>
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
    <section class="quick-link quick-link-style1 parallax parallax2">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="wrap-link-left">
                        <div class="heading-lf lt-sp03">
                            ¿Listo para comenzar?
                        </div>
                        <p>
                            Invierte en adquirir nuevos conocimientos, invierte en tu futuro!
                        </p>
                        <div class="btn-apply-link">
                            <ul>
                                <li>
                                    <a href="{{ route('login') }}" class="btn btn-apply bg-clff5f60">Inicia Sesion</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}" class="btn btn-request lt-sp06">Registrate</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section><!-- quick-link -->
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
    
    @include('sweet::alert')
</body>
</html>
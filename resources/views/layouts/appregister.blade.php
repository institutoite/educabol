<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from www.insideusm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jun 2020 15:54:36 GMT -->
<head>
	<title>Inside • USM</title>
	<meta charset="UTF-8">
	<meta name="description" content="Inside • USM">
	<meta name="keywords" content="" />
	<meta name="robots" CONTENT="All"/>
	<meta name="googlebot"/>
	<meta name="google"/>
	<META NAME="language" CONTENT="Spanish">
	<META NAME="revisit" CONTENT="5 days">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
                                            <link href="https&#x3A;&#x2F;&#x2F;s.leadgods.com&#x2F;application-web&#x2F;s&#x2F;dist&#x2F;css&#x2F;plugins.min.css&#x3F;v&#x3F;v1.229" media="screen" rel="stylesheet" type="text&#x2F;css">
	<link href="https&#x3A;&#x2F;&#x2F;s.leadgods.com&#x2F;application-web&#x2F;shibagan&#x2F;dist&#x2F;css&#x2F;style.min.css&#x3F;v&#x3F;v1.229" media="screen" rel="stylesheet" type="text&#x2F;css">
	<link href="https&#x3A;&#x2F;&#x2F;fonts.googleapis.com&#x2F;css&#x3F;family&#x3D;Lato&#x3A;300,400,700,900&amp;display&#x3D;swap" media="screen" rel="stylesheet" type="text&#x2F;css">    <script>
        og = {};
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">

	
	<link href="imagem/logoinsideusm.png" rel="shortcut icon"/>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/facebook.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}"/>

	<link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">

	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

	<link rel="stylesheet" href="{{ asset('style.css') }}">
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	

	<div id="preloder">
		<div class="loader"></div>
	</div>


	<header class="header-section clearfix">
		<div class="header-top">
			<div class="container-fluid">
				<div class="row">
					<div class="site-navbar">
						<div class="header-right">
						
						</div>
						
						<nav class="site-nav-menu">
							<ul>
								<li ><a href="<?php echo url('/')?>">Inicio</a></li><li ><a href="<?php echo url('about')?>">¿Quiénes Sómos?</a></li><li ><a href="#">Nuestros Profesionales</a><ul class="sub-menu"><li><a href="<?php echo url('equipomedico')?>" style="font-size:12px">Equipo Médico</a></li><li><a href="<?php echo url('equipopsicologia')?>" style="font-size:12px">Equipo de Psicología</a></li><li><a href="<?php echo url('equipoterapiasalternativas')?>" style="font-size:12px">Equipo de Terapias Complementarias</a></li></ul></li><li ><a href="#">Servicios</a><ul class="sub-menu"><li><a href="<?php echo url('pepna')?>" style="font-size:12px">PEPNA</a></li><li><a href="<?php echo url('estadosamor')?>" style="font-size:12px">Terapia de Pareja</a></li><li><a href="<?php echo url('terapiaemocional')?>" style="font-size:12px">Terapia de Integracion Emocional</a></li><li><a href="<?php echo url('#')?>" style="font-size:12px">Arte y Salud Mental</a></li><li><a href="<?php echo url('#')?>" style="font-size:12px">Neurofisiología</a></li><li><a href="<?php echo url('#')?>" style="font-size:12px">Meditación Asistida</a></li></ul></li><li ><a href="<?php echo url('reserva')?>">Reservar Consulta</a></li><li ><a href="<?php echo url('noticias')?>">Articulos y Noticias</a></li><li ><a href="<?php echo url('miscursos')?>">Mis Cursos</a></li><li ><a href="<?php echo url('contacto')?>">Contáctenos</a></li>				</ul>
						</nav>

						
						
						
						
						@if (Auth::guest())
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p;
							<a href="{{ route('register') }}" class="btn btn-outline-success btn-sm fa fa-user ">Registro</a>
							<a href="{{ route('login') }}" class="btn btn-outline-success btn-sm fa fa-user ">Iniciar Sesion</a>

						@elseif ( auth::User()->tipo === "Administrador" )
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&
							<a href="{{ route('contenido.index') }}" class="btn btn-outline-success btn-sm">Administrar</a>
							

							<a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:#28a745;"><i class="fa fa-power-off btn-sm"></i> <b>Cerrar Sesion</b></a>
 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
								

						@else
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
						

							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:#28a745;"><i class="fa fa-power-off btn-sm"></i> <b>Cerrar Sesion</b></a>
 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
								

							

						@endif
					
					</div>
					
					

				</div>

				
					
				</div>
			</div>
		</div>
		<div class="header-top2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-7 order-1 order-lg-2 p-0">
						<ul class="footer-menu">
							<li><a href="https://www.facebook.com/insidesaludmentalrehab/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://instagram.com/insidesaludrehab?igshid=13vgl78i02lf7" class="instagram"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCh6kCWRlu3Xuye1xwHSEvuA" class="youtube"><i class="fab fa-youtube"></i></a></li>	
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	
    @yield('content')            
	

	<footer class="footer-section spad">
	
		<div class="footer-buttom">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 order-2 order-lg-1 p-0">
						<div class="copyright">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados 
					</div>
				</div>
			</div>
		</div>
		
	</footer>

	<div class="fixed-social">
		<ul class="reset-ul">
			<li><a href="https://m.me/508274419362729" target="_blank" class="ico-messenger"></a></li>
			<li><a target="_blank" href="https://api.whatsapp.com/send?phone=59177337750" class="ico-whatsapp"></a></li>
		</ul>
	</div>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

	</body>

<!-- Mirrored from www.insideusm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jun 2020 15:55:40 GMT -->
</html>

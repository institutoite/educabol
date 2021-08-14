<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Page Title -->
   <title>Educabol</title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="">


   <!-- Favicon -->
   <link href="{{ asset('icon/favicon.ico') }}" rel="shortcut icon">

    <!-- ======= DATATABLE STYLES ======= -->
    
    @stack('css')
    <!-- ======= END DATATABLE STYLES ======= -->

   <!-- Web Fonts -->
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
   
   <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
   <link rel="stylesheet" href="{{ asset('../../assets/bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('../../assets/fonts/icofont/icofont.min.css') }}">
   <link rel="stylesheet" href="{{ asset('../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
   <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

   <!-- ======= MAIN STYLES ======= -->
   <link rel="stylesheet" href="{{ asset('../../assets/css/style.css') }}">
   <!-- ======= END MAIN STYLES ======= -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
</head>

<body>

    <!-- Offcanval Overlay -->
    <div class="offcanvas-overlay"></div>
    <!-- Offcanval Overlay -->

    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Header -->
        <header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ asset('../../index.html') }}" class="default-logo"><img src="{{ asset('../../assets/img/logo.png') }}" alt=""></a>
                <a href="{{ asset('../../index.html') }}" class="mobile-logo"><img src="{{ asset('../../assets/img/mobile-logo.png') }}" alt=""></a>
            </div>
            <!-- End Logo -->

            <!-- Main Header -->
            <div class="main-header">
                <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-3 col-lg-1 col-xl-4">
                        <!-- Header Left -->
                        <div class="main-header-left h-100 d-flex align-items-center">
                            <!-- Main Header User -->
                            <div class="main-header-user">
                                <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                    <div class="menu-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>

                                    <div class="user-profile d-xl-flex align-items-center d-none">
                                        <!-- User Avatar -->
                                        <div class="user-avatar">
                                            <img src="{{ asset('../../assets/img/avatar/user.png') }}" alt="">
                                        </div>
                                        <!-- End User Avatar -->

                                        <!-- User Info -->
                                        <div class="user-info">
                                            <h4 class="user-name">Abrilay Khatun</h4>
                                            <p class="user-email">abrilakh@gmail.com</p>
                                        </div>
                                        <!-- End User Info -->
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{ url('/') }}">Pagina principal</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Cerrar Sesion</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                </div>
                            </div>
                            <!-- End Main Header User -->

                            <!-- Main Header Menu -->
                            <div class="main-header-pin d-block d-lg-none">
                            <div class="header-toogle-menu">
                                <img src="{{ asset('../../assets/img/menu.png') }}" alt="">
                            </div>
                            </div>
                            <!-- End Main Header Menu -->
                        </div>
                        <!-- End Header Left -->
                    </div>
                    <div class="col-9 col-lg-11 col-xl-8">
                        <!-- Header Right -->
                        <div class="main-header-right d-flex justify-content-end">
                            <ul class="nav">
                                <li class="d-none d-lg-flex">
                                    <!-- Main Header Time -->
                                    <div class="main-header-date-time text-right">
                                        <h3 class="time">
                                            <span id="hours">00</span>
                                            <span id="point">:</span>
                                            <span id="min">00</span>
                                        </h3>
                                        <span class="date"><span id="date"></span></span>
                                    </div>
                                    <!-- End Main Header Time -->
                                </li>
                            </ul>
                        </div>
                        <!-- End Header Right -->
                    </div>
                </div>
                </div>
            </div>
            <!-- End Main Header -->
        </header>
        <!-- End Header -->

        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <!-- Sidebar -->
            <nav class="sidebar" data-trigger="scrollbar">
                <!-- Sidebar Header -->
                <div class="sidebar-header d-none d-lg-block">
                <!-- Sidebar Toggle Pin Button -->
                <div class="sidebar-toogle-pin">
                    <i class="icofont-tack-pin"></i>
                </div>
                <!-- End Sidebar Toggle Pin Button -->
                </div>
                <!-- End Sidebar Header -->

                <!-- Sidebar Body -->
                <div class="sidebar-body">
                    <!-- Nav -->
                    <ul class="nav">
                        @can('admin.categories')
                            <li class="nav-category">Modulo Administrador</li>
                            <li>
                                <a href="{{ route('admin.categories') }}">
                                    <i class="icofont-ebook"></i>
                                    <span class="link-title">Categorias</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.pending') }}">
                                    <i class="icofont-ebook"></i>
                                    <span class="link-title">Cursos pendientes</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.receipt') }}">
                                    <i class="icofont-ebook"></i>
                                    <span class="link-title">Comprobantes pendientes</span>
                                </a>
                            </li>
                        @endcan
                        @can('teacher.courses')
                        <li class="nav-category">Modulo Profesores</li>
                        <li>
                            <a href="{{ route('teacher.courses') }}">
                                <i class="icofont-ebook"></i>
                                <span class="link-title">Cursos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('teacher.units') }}">
                                <i class="icofont-ebook"></i>
                                <span class="link-title">Unidades</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                    <!-- End Nav -->
                </div>
                <!-- End Sidebar Body -->
            </nav>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                <div class="container-fluid">
                    
                        
                        @yield('content')

                    
                </div>
            </div>
            <!-- End Main Content -->
        </div>
        <!-- End Main Wrapper -->

        <!-- Footer -->
        <footer class="footer">
            Educabol © 2021 created by <a href="#">  Instituo Ite</a>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- End wrapper -->

    <!-- ======= DATATABLE SCRIPTS ======= -->
    
    
    <!-- ======= DATATABLE SCRIPTS ======= -->

    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
    <script src="{{ asset('../../assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('../../assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('../../assets/js/script.js') }}"></script>
    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
    @include('sweet::alert')
    @stack('js')
</body>

</html>
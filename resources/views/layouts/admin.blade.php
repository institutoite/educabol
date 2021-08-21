<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('images/logo/icono.png') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Educabol</title>
        <!-- BEGIN: CSS Assets-->
        @stack('css')
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @livewireStyles
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="{{ url('/') }}" class="flex mr-auto">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-16" src="{{ asset('images/logo/logo.png') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            @can('admin.categories')
                <ul class="border-t border-theme-29 py-5 hidden">

                    <li>
                        <a href="{{ route('admin.categories') }}" class="menu menu">
                            <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="menu__title"> Categorias </div>
                        </a>
                    </li>

                    <li>
                        <a href="side-menu-light-point-of-sale.html" class="menu">
                            <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                            <div class="menu__title"> Pendientes </div>
                        </a>
                    </li>
                    <li class="menu__devider my-6"></li>
                
                </ul>
            @endcan
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="{{ url('/') }}" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-36" src="{{ asset('images/logo/logo.png') }}">
                    
                </a>
                
                <ul>
                    
                    @can('admin.categories')
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="{{ route('admin.users.index') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                                <div class="side-menu__title"> Usuarios </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.categories') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                                <div class="side-menu__title"> Categorias </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pending') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                                <div class="side-menu__title"> Cursos pendientes </div>
                            </a>
                        </li>
                    @endcan
                    @can('teacher.courses')
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="{{ route('teacher.courses') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                                <div class="side-menu__title"> Cursos </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('teacher.units') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                                <div class="side-menu__title"> Unidades </div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown mr-auto sm:mr-6">
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
                            <img alt="Rubick Tailwind HTML Admin Template" src="{{ asset('dist/images/profile-1.jpg') }}">
                        </div>
                        <div class="dropdown-menu w-56">
                            <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                                <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                                    <div class="font-medium">{{ auth()->user()->name }}</div>
                                </div>
                                
                                <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                                    <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Cerrar Sesion </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                @yield('content')
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
        @stack('js')
        @include('sweet::alert')
        
        <!-- END: JS Assets-->
        @livewireScripts
    </body>
</html>
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
   <link rel="shortcut icon" href="{{ asset('../../assets/img/favicon.png') }}">

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
                                    <a href="#">task</a>
                                    <a href="#">Settings</a>
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
                                            <span id="hours">21</span>
                                            <span id="point">:</span>
                                            <span id="min">06</span>
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
                        <li>
                            <a href="#">
                                <i class="icofont-student-alt"></i>
                                <span class="link-title">Mis estudiantes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('') }}../../pages/social-media.html">
                                <i class="icofont-chart-histogram"></i>
                                <span class="link-title">Social Media Analytics</span>
                            </a>
                        </li>
                        <li class="nav-category">apps</li>
                        <li>
                            <a href="#">
                                <i class="icofont-mail-box"></i>
                                <span class="link-title">Email</span>
                            </a>
                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../apps/email/inbox.html">Inbox</a></li>
                                <li><a href="../apps/email/read.html">Read</a></li>
                                <li><a href="../apps/email/compose.html">Compose</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="../apps/chat.html">
                                <i class="icofont-wechat"></i>
                                <span class="link-title">Chat</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-listing-box"></i>
                                <span class="link-title">To Do List</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../apps/todolist/todolist.html">Tasks</a></li>
                                <li><a href="../apps/todolist/add-new.html">add new</a></li>
                                <li><a href="../apps/todolist/task-details.html">details</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="icofont-calendar"></i>
                                <span class="link-title">Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-file-document"></i>
                                <span class="link-title">invoice</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../apps/invoice/invoice-list.html">Invoice List</a></li>
                                <li><a href="../apps/invoice/invoice-details.html">details</a></li>
                                <li><a href="../apps/invoice/invoice-add-new.html">add new</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-contact-add"></i>
                                <span class="link-title">contact</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../apps/../apps/contact/contact-list.html">list view</a></li>
                                <li><a href="../apps/../apps/contact/contact-grid.html">grid view</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-calendar"></i>
                                <span class="link-title">project manager</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../apps/project-manager/project.html">project status</a></li>
                                <li><a href="../apps/project-manager/task-list.html">task list</a></li>
                                <li><a href="../apps/project-manager/create-new.html">create new Board</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-files-stack"></i>
                                <span class="link-title">file manager</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../apps/file-manager/file-info.html">file info</a></li>
                                <li><a href="../apps/file-manager/share.html">share</a></li>
                                <li><a href="../apps/file-manager/upload.html">upload new file</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li class="nav-category">UI Elements</li>
                        <li>
                            <a href="../ui-elements/widget.html">
                                <i class="icofont-magic-alt"></i>
                                <span class="link-title">widgets</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-brand-icofont"></i>
                                <span class="link-title">Icons (Aniloan)</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../ui-elements/icons/iconfont.html">ico font</a></li>
                                <li><a href="../ui-elements/icons/materializeicon.html">Materialize Icons</a></li>
                                <li><a href="../ui-elements/icons/et-lineicon.html">Et-Line Icons</a></li>
                                <li><a href="../ui-elements/icons/eleganticon.html">Elegant Icons</a></li>
                                <li><a href="../ui-elements/icons/pe-7strokeicon.html">Pe-7 Stroke Icons</a></li>
                                <li><a href="../ui-elements/icons/themifyicon.html">Themify Icons</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="../ui-elements/color.html">
                                <i class="icofont-eye-dropper"></i>
                                <span class="link-title">color</span>
                            </a>
                        </li>
                        <li>
                            <a href="../ui-elements/extra-component.html">
                                <i class="icofont-plus"></i>
                                <span class="link-title">extra Component</span>
                            </a>
                        </li>
                        <li class="nav-category">Form & Table</li>
                        <li>
                            <a href="#">
                                <i class="icofont-table"></i>
                                <span class="link-title">Form Elements</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../form&table/form-elements/base-input.html">Base Input</a></li>
                                <li><a href="../form&table/form-elements/input-group.html">Input Groups</a></li>
                                <li><a href="../form&table/form-elements/checkbox.html">Checkbox</a></li>
                                <li><a href="../form&table/form-elements/radio.html">radio</a></li>
                                <li><a href="../form&table/form-elements/switch.html">Switch</a></li>
                                <li><a href="../form&table/form-elements/number-input.html">Number Input</a></li>
                                <li><a href="../form&table/form-elements/textarea.html">Text Area</a></li>
                                <li><a href="../form&table/form-elements/text-editor.html">Text Editor (Quill Editor)</a></li>
                                <li><a href="../form&table/form-elements/file-uploader.html">File Uploader</a></li>
                                <li><a href="../form&table/form-elements/datetime-picker.html">Date & Time Picker</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="form-layout.html">
                                <i class="icofont-layout"></i>
                                <span class="link-title">Form Layout</span>
                            </a>
                        </li>
                        <li>
                            <a href="form-wizard.html">
                                <i class="icofont-ui-file"></i>
                                <span class="link-title">Form Wizard</span>
                            </a>
                        </li>
                        <li>
                            <a href="form-validation.html">
                                <i class="icofont-exclamation-circle"></i>
                                <span class="link-title">Form Validation</span>
                            </a>
                        </li>
                        <li>
                            <a href="form-repeater.html">
                                <i class="icofont-meeting-add"></i>
                                <span class="link-title">Form Repeater</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="table.html">
                                <i class="icofont-table"></i>
                                <span class="link-title">Table</span>
                            </a>
                        </li>
                        <li>
                            <a href="table-extended.html">
                                <i class="icofont-contact-add"></i>
                                <span class="link-title">Table Extended</span>
                            </a>
                        </li>
                        <li class="nav-category">pages</li>
                        <li>
                            <a href="#">
                                <i class="icofont-ui-user"></i>
                                <span class="link-title">User Profile</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../pages/user-profile/news-feed.html">News Feed</a></li>
                                <li><a href="../pages/user-profile/about.html">about</a></li>
                                <li><a href="../pages/user-profile/gallery.html">gallery</a></li>                        
                                <li><a href="../pages/user-profile/connection.html">Connections</a></li>
                                <li><a href="../pages/user-profile/profile-chat.html">Chat</a></li>
                                <li><a href="../pages/user-profile/edit-profile.html">Edit Profile</a></li>
                                <li><a href="../pages/user-profile/user-dashboard.html">User Dashboard</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="../pages/faq.html">
                                <i class="icofont-support-faq"></i>
                                <span class="link-title">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a href="../pages/price.html">
                                <i class="icofont-price"></i>
                                <span class="link-title">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a href="../pages/timeline.html">
                                <i class="icofont-clock-time"></i>
                                <span class="link-title">Timeline</span>
                            </a>
                        </li>
                        <li>
                            <a href="../pages/account-setting.html">
                                <i class="icofont-settings-alt"></i>
                                <span class="link-title">Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-check-circled"></i>
                                <span class="link-title">Authentication</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../pages/authentication/login.html">Log In</a></li>
                                <li><a href="../pages/authentication/register.html">Register</a></li>
                                <li><a href="../pages/authentication/forget-pass.html">Forget Password</a></li>
                                <li><a href="../pages/authentication/reset-pass.html">Reset Password</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="icofont-exclamation-tringle"></i>
                                <span class="link-title">Miscellaneous</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../pages/miscellaneous/comming-soon.html">Coming Soon</a></li>
                                <li><a href="../pages/miscellaneous/404.html">404 Error</a></li>
                                <li><a href="../pages/miscellaneous/500.html">500 Error</a></li>
                                <li><a href="../pages/miscellaneous/page-not-authorized.html">Not Authorized</a></li>
                                <li><a href="../pages/miscellaneous/maintenance.html">Maintenance</a></li>
                                <li><a href="../pages/miscellaneous/session-timeout.html">Session Timeout</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li class="nav-category">Chart & Maps</li>
                        <li>
                            <a href="#">
                                <i class="icofont-chart-pie-alt"></i>
                                <span class="link-title">charts</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="../charts/apex.html">Apex</a></li>
                                <li><a href="../charts/chartjs.html">Chartjs</a></li>
                                <li><a href="../charts/morrischart.html">Morris Chart</a></li>
                                <li><a href="../charts/flotchart.html">Flot Chart</a></li>
                                <li><a href="../charts/chartist.html">Chartist Chart</a></li>
                                <li><a href="../charts/c3-chart.html">C3 Chart</a></li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>
                        <li class="nav-category">Extensions</li>
                        <li>
                            <a href="../extensions/sweet-alert.html">
                                <i class="icofont-notification"></i>
                                <span class="link-title">Sweet Alert</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/toastr.html">
                                <i class="icofont-dice"></i>
                                <span class="link-title">Toastr</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/noui-slider.html">
                                <i class="icofont-filter"></i>
                                <span class="link-title">NoUi Slider</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/dragdrop.html">
                                <i class="icofont-drag"></i>
                                <span class="link-title">Drag & Drop</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/tour.html">
                                <i class="icofont-education"></i>
                                <span class="link-title">Tour</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/swiper.html">
                                <i class="icofont-swoosh-right"></i>
                                <span class="link-title">Swiper</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/treeview.html">
                                <i class="icofont-tree-alt"></i>
                                <span class="link-title">Treeview</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/block-ui.html">
                                <i class="icofont-card"></i>
                                <span class="link-title">Block-UI</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/media-player.html">
                                <i class="icofont-multimedia"></i>
                                <span class="link-title">Media Player</span>
                            </a>
                        </li>
                        <li>
                            <a href="../extensions/i18n.html">
                                <i class="icofont-globe"></i>
                                <span class="link-title">i18n</span>
                            </a>
                        </li>
                        <li class="nav-category">others</li>
                        <li>
                            <a href="#">
                                <i class="icofont-navigation-menu"></i>
                                <span class="link-title">Menu Levels</span>
                            </a>

                            <!-- Sub Menu -->
                            <ul class="nav sub-menu">
                                <li><a href="#">Second Level 01</a>
                                <!-- Sub Menu -->
                                <ul class="nav sub-menu">
                                    <li><a href="#">Third Level 01</a></li>
                                    <li><a href="#">Third Level 02</a></li>
                                </ul>
                                <!-- End Sub Menu -->
                                </li>
                                <li><a href="#">Second Level 02</a>
                                <!-- Sub Menu -->
                                <ul class="nav sub-menu">
                                    <li><a href="#">Third Level 01</a></li>
                                    <li><a href="#">Third Level 02</a></li>
                                </ul>
                                <!-- End Sub Menu -->
                                </li>
                            </ul>
                            <!-- End Sub Menu -->
                        </li>

                        <li>
                            <a href="#" class="disabled">
                                <i class="icofont-not-allowed"></i>
                                <span class="link-title">Disable Menu</span>
                            </a>
                        </li>
                        <li class="nav-category">Support</li>
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
    @yield('js')
    
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
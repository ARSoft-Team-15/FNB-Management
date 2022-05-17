<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>FNB Group Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{!! asset('images/favicon.ico') !!}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- App css -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{!! asset('css/app.min.css') !!}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <!-- icons -->

    <link href="{!! asset('css/icons.min.css') !!}" rel="stylesheet" type="text/css" />
    @livewireStyles

</head>

<body class="loading">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <!-- LOGO -->
            <div class="logo-box">

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{!! asset('images/logo-sm.png') !!}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{!! asset('images/logo-light.png') !!}" alt="" height="20">
                    </span>
                </a>
            </div>

            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Management</li>

                        <li>
                            <a href="#collapseExample" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <i class="bi bi-person-rolodex"></i>
                                <span> Users </span>
                            </a>
                            <ul class="collapse" id="collapseExample">
                                <li>
                                    <a href="/getalluser">Manage Data Personel</a>
                                </li>
                                <li>
                                    <a href="/changepassword">Change Password</a>
                                </li>
                                <li>
                                    <a href="/getalluserlog">User Log</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-building"></i>
                                <span> Company </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-envelope"></i>
                                <span> SPB </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-credit-card"></i>
                                <span> Reimbursment </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-people"></i>
                                <span> Investor </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-cash"></i>
                                <span> Investment </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bi bi-file-plus"></i>
                                <span> Investment Report </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">

                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="d-none d-sm-inline-block">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>

                        <!-- LOGO -->
                        <div class="logo-box">

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                            <li>
                                <button class="button-menu-mobile waves-effect waves-light">
                                    <i class="fe-menu"></i>
                                </button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('content')

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())

                            </script> &copy; <a href="#">FNB Group</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="https://coderthemes.com/">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{!! asset('js/vendor.min.js') !!}"></script>

    <!-- App js -->
    <script src="{!! asset('js/app.min.js') !!}"></script>
    @livewireScripts

</body>

</html>

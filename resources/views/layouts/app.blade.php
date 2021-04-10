<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Headstone Young People&apos;s Platform">
    <meta name="author" content="HYPP: Festival of Talents">
    <meta name="keywords" content="Talent Show">
    <meta name="keywords" content="FOT">
    <meta name="keywords" content="Come show forth God&apos;s potential in you">
    <meta name="keywords" content="Its FOT Revsmped: The new normal...">
    <title>HYPP Festival of Talents</title>
    <link href="{{asset('assets/admin/img/icon/h_favicon.ico') }}" rel="icon">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand fixed-top bg-purple text-white">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ">
                <div class="">
                    <span class="btn btn-light">
                        {{ Auth::user()->getRole->role_name}} Reg Number: HFOT21-{{ Auth::user()->user_id }}
                    </span>
                </div>

            </ul>

        </nav>

        <aside class="main-sidebar sidebar-dark-purple elevation-4">
            <!-- Brand Logo -->
            <a href="https://thehypp.com.ng/" class="brand-link sidebar-dark-purple text-white text-center" target="_blank">
                <div class="icon brand-name">
                    <img class="img-fluid" src="{{asset('assets/admin/img/icon/hyppLogo.jpeg') }}" style="width: 50px; height:50px" alt="Hypp Logo">
                </div>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">
                                <div class="icon">
                                    <i class="nav-icon icofont-user text-white"></i>
                                    <p> Profile </p>
                                </div>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/profile/edit') }}" class="nav-link">
                                <i class="nav-icon icofont-id-card text-white"></i>
                                <p>Update Profile</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/profile/upload-video-entry') }}" class="nav-link">
                                <i class="nav-icon icofont-cloud-upload text-white"></i>
                                <p>Upload Videos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/profile/view-entry') }}" class="nav-link">
                                <i class="nav-icon icofont-presentation text-white"></i>
                                <p>Compettion Entries</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class=" nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="icon">
                                    <i class="icofont-sign-out text-danger"></i>
                                    <p>Logout</p>
                                </div>
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">

            @yield('content')

        </div>
        </section>
    </div>
    <footer id="footer" class="main-footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy; {{date('Y') }} <strong class="text-white"><span><a class="text-white" href="">Freitech Solutions</a></span></strong>. All Rights Reserved <br>
                <small>The information contained herein may not be published, broadcast, rewritten, or or redistributed
                    without the prior written authority of <strong><span><a class="text-white" href="">Freitech Solutions.</a></span></strong></small>
            </div>
        </div>
    </footer>
    </div>
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/adminlte.js') }}"></script>
    <script>
        $('#uploadVideo').bind('change', function() {

            if (this.files[0].size / (1024 * 1024) > 20) {
                alert('File size should not exceed 20MB');
            }


        });
    </script>
</body>

</html>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>5dmatk Panel</title>

    <!-- Font Awesome Icons -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('page')}}" class="nav-link">Home</a>
            </li>

        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->



        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->



        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                @if(Auth::user()->url)

                    <img src="{{asset('image/'.Auth::user()->url)}}" style="background: white" class="img-circle elevation-3" alt="User Image">
                    <div class="info">
                        <b style="color: white" class="d-block"> {{ Auth::user()->name}}</b>
                    </div>
                @else
                    <img src="{{asset('image/user.png')}}" style="background: white" class="img-circle elevation-3" alt="User Image">
                    <div class="info">
                        <b style="color: white" class="d-block"> {{ Auth::user()->name}}</b>
                    </div>
                @endif
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{route('panel')}}" class="nav-link active">
                            <i class="fas fa-address-card"></i>
                            <p>
                                Profile
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>


                            <li class="nav-item">
                                <a  href="{{route('all.post')}}" class="nav-link">
                                    <i class="fas fa-user-edit"></i>
                                    <p>Posts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('category')}}" class="nav-link">
                                    <i class="far fa-window-restore"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tags.index')}}" class="nav-link">
                                    <i class="fas fa-tags"></i>
                                    <p>Tags</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users')}}" class="nav-link">
                                    <i class="fas fa-users"></i>
                                    <p>Users</p>
                                </a>

                            </li>
                    <li class="nav-item">
                        <a href="{{route('feeds')}}" class="nav-link">
                            <i class="fas fa-comments"></i>
                            <p>Feedback</p>
                        </a>
                    </li>
                            <li class="nav-item">
                                <a href="{{route('setting.show')}}" class="nav-link">
                                    <i class="fas fa-cogs"></i>
                                    <p>Setting</p>
                                </a>
                            </li>


                </ul>

                        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark" style="    color: #007bff !important;
    font-size: 34px;
    font-weight: 600;">5dmatk</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('page')}}">Home</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>



                @yield('content')






        <!-- /.control-sidebar -->

        <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dashboard/js/adminlte.min.js')}}"></script>
</body>
</html>

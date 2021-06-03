<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ панель - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href='{{url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback")}}'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href='{{url("/admin/plugins/fontawesome-free/css/all.min.css")}}'>
    <!-- Ionicons -->
    <link rel="stylesheet" href='{{url("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}'>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href='{{url("/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}'>
    <!-- iCheck -->
    <link rel="stylesheet" href='{{url("/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}'>
    <!-- JQVMap -->
    <link rel="stylesheet" href='{{url("/admin/plugins/jqvmap/jqvmap.min.css")}}'>
    <!-- Theme style -->
    <link rel="stylesheet" href='{{url("/admin/dist/css/adminlte.min.css")}}'>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href='{{url("/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}'>
    <!-- Daterange picker -->
    <link rel="stylesheet" href='{{url("/admin/plugins/daterangepicker/daterangepicker.css")}}'>
    <!-- summernote -->
    <link rel="stylesheet" href='{{url("/admin/plugins/summernote/summernote-bs4.min.css")}}'>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin')}}" class="brand-link">
            <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Админ панель ХПИ</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/image/Avatar.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('post.index')}}" class="nav-link ">
                            <i class="far fa-newspaper"></i>
                            <p>Новости</p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('post.index')}}" class="nav-link ">
                                    <i class="far fa-folder-open"></i>
                                    <p>Все новости</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('post.create')}}" class="nav-link ">
                                    <i class="fas fa-plus"></i>
                                    <p>Добавить новость</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('vacancy.index')}}" class="nav-link ">
                            <i class="far fa-address-card"></i>
                            <p>
                                Вакансии

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('vacancy.index')}}" class="nav-link ">
                                    <i class="fas fa-check-circle"></i>
                                    <p>Одобрить вакансию</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('vacancies.index')}}" class="nav-link">
                                    <i class="fas fa-trash"></i>
                                    <p>Удалить активную</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('fair.index')}}" class="nav-link ">
                            <i class="fas fa-peace"></i>
                            <p>Ярмарка вакансий</p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('fair.index')}}" class="nav-link ">
                                    <i class="far fa-folder-open"></i>
                                    <p>Все ярмарки</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('fair.create')}}" class="nav-link ">
                                    <i class="fas fa-plus"></i>
                                    <p>Добавить новую</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('subscribe.index')}}" class="nav-link ">
                            <i class="fas fa-paper-plane"></i>
                            <p>Подписчики</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('response.index')}}" class="nav-link ">
                            <i class="fas fa-business-time"></i>
                            <p>Отклики на вакансии</p>
                        </a>
                    </li>
                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
<script src="/admin/admin.js"></script>

</body>
</html>

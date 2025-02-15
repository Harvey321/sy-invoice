<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>双于系统控制平台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icon图标 -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- 主要样式文件-->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- 弹框css-->
    <link rel="stylesheet" href="/admin/plugins/toastr/toastr.min.css">
    <!-- 数据表 -->
    <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- 左侧覆盖条菜单样式 -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!--  jquery -->
    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <!-- 弹框js -->
    <script src="/admin/plugins/toastr/toastr.min.js"></script>

{{--    <!-- 日期范围选择器 -->--}}
{{--    <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>--}}
{{--    <script src="/admin/plugins/daterangepicker/bootstrap-datetimepicker.js"></script>--}}
{{--    <script src="/admin/plugins/daterangepicker/bootstrap-datetimepicker.zh-CN.js"></script>--}}

    <!-- daterangepicker -->
    <script src="/admin/plugins/moment/moment.min.js"></script>
    <!-- 日期范围选取器 -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- 笔记 -->
    {{--    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.css">--}}
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>


    <!-- 警报 -->
{{--    <link rel="stylesheet" href="/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">--}}

    <!-- iCheck -->
    {{--    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">--}}
<!-- JQVMap -->
    {{--    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">--}}
</head>
<style>
    .custom-file-label:after {
        content: '上传文件' !important;
    }
</style>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <!-- 右侧上放菜单收缩按钮 以及退出按钮 -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="align-items: center">
            <li class="nav-item dropdown">
                <a href="/admin/loginOut" class=" btn btn-default  btn-sm">
                    登出
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-up-right"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M14.5 3A1.5 1.5 0 0 0 13 1.5H3A1.5 1.5 0 0 0 1.5 3v5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H9a.5.5 0 0 0 0 1h4a1.5 1.5 0 0 0 1.5-1.5V3z"/>
                        <path fill-rule="evenodd"
                              d="M4.5 6a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V6.5H5a.5.5 0 0 1-.5-.5z"/>
                        <path fill-rule="evenodd"
                              d="M10.354 5.646a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708l8-8a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

    <!-- 左侧菜单 -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="index3.html" class="brand-link">
            <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">双于项目logo</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">您好！{{session()->get('user')->username}}</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-legacy" data-widget="treeview"
                    role="menu"
                    data-accordion="false">
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                用户管理
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/user" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>查看用户</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/user/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>添加用户</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                角色管理
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/role" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>查看角色</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/role/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>添加角色</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-project-diagram"></i>
                            <p>
                                权限管理
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/permission" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>查看权限</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/permission/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>添加权限</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                客户管理
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/customer" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>查看客户</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/customer/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>添加客户</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-dolly-flatbed"></i>
                            <p>
                                产品管理
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>查看产品</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/product/add" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>添加产品</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- 右侧主内容 -->
    <div class="content-wrapper">
        @section('content-wrapper')@show
    </div>

    <!-- 网址注释 -->
    <footer class="main-footer" style="font-size:0.5em;">
        <strong>Copyright &copy; 2020 <a href="http://adminlte.io">
                上海双于通信技术有限公司</a>.</strong>All Right Reserved.
    </footer>
</div>


{{--<!-- AdminLTE App -->--}}
<script src="/admin/dist/js/adminlte.js"></script>
<!-- 数据表 -->
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
{{--<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>--}}




<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- jQuery UI 1.11.4 -->
{{--<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>--}}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{--<script>--}}
{{--    $.widget.bridge('uibutton', $.ui.button)--}}
{{--</script>--}}
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


{{--<!-- ChartJS -->--}}
{{--<script src="/admin/plugins/chart.js/Chart.min.js"></script>--}}
<!-- Sparkline -->
{{--<script src="/admin/plugins/sparklines/sparkline.js"></script>--}}
<!-- JQVMap -->
{{--<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>   //报错元凶--}}
{{--<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>--}}
<!-- jQuery Knob Chart -->
{{--<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>--}}


<!-- Summernote -->
{{--<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>--}}
<!-- overlayScrollbars -->
{{--<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="/dist/js/pages/dashboard.js"></script>  //报错元凶  --}}
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
{{--<script src="/admin/dist/js/adminlte.min.js"></script>   //阻碍菜单页弹出--}}
{{--<script src="/admin/plugins/sweetalert2/sweetalert2.min.js"></script>--}}

<script>
    function timeOut(url) {
        setTimeout(function () {
            window.location = url;
        }, 1000);
    }

    $(document).ready(function () {
        bsCustomFileInput.init();
    });

</script>
</body>
</html>
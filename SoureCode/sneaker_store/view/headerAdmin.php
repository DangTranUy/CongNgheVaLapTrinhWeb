<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
// include '../model/list_category.php';
include '../model/list_product.php';
include '../model/account.php';
?>
<!DOCTYPE html>

<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="../view/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="../view/css/style-admin.css" rel='stylesheet' type='text/css' />
    <link href="../view/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="../view/css/font.css" type="text/css" />
    <link href="../view/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="../view/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="../view/js/jquery2.0.3.min.js"></script>
    <script src="../view/js/raphael-min.js"></script>
    <script src="../view/js/morris.js"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    ADMIN
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="../view/images/4.png">
                            <span class="username">admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="../controller/index.php?act=dangxuatadmin"><i class="fa fa-key"></i> Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a href="indexAdmin.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="indexAdmin.php?act=quanlydanhmuc">
                                <!-- <i class="fa fa-book"></i> -->
                                <span>Quản lý danh mục</span>
                            </a>

                            <!-- <ul class="sub">
                                <li><a href="typography.html">Thêm danh mục</a></li>
                                <li><a href="glyphicon.html">Liệt kê</a></li>
                            </ul> -->
                        </li>

                        <li class="sub-menu">
                            <a href="indexAdmin.php?act=quanlysanpham">
                                <!-- <i class="fa fa-book"></i> -->
                                <span>Quản lý sản phẩm</span>
                            </a>
                            <!-- <ul class="sub">
                                <li><a href="typography.html">Thêm danh mục</a></li>
                                <li><a href="glyphicon.html">Liệt kê</a></li>
                            </ul> -->
                        </li>
                        <li class="sub-menu">
                            <a href="indexAdmin.php?act=quanlynguoidung">
                                <!-- <i class="fa fa-book"></i> -->
                                <span>Quản lý người dùng</span>
                            </a>
                            <!-- <ul class="sub">
                                <li><a href="typography.html">Thêm danh mục</a></li>
                                <li><a href="glyphicon.html">Liệt kê</a></li>
                            </ul> -->
                        </li>

                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:dangnhap.php");
    die("chuyentrang");
}
include("../connection/connection.php");

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nguyễn Văn Bảy - IT_PTIT</title>
    <meta name="description" content="Xmenkingofstar">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../public/admin/apple-icon.png">
    <link rel="shortcut icon" href="../public/admin/favicon.ico">

    <link rel="stylesheet" href="../public/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../public/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../public/admin/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../public/admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="../public/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../public/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../public/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../public/admin/assets/js/main.js"></script>


    <script src="../public/Datatables/jquery-3.3.1.js"></script>
    <script src="../public/Datatables/jquery.dataTables.js"></script>
    <script src="../public/Datatables/dataTables.bootstrap4.js"></script>

    <!-- json -->
    <script src="../public/json/json_parse.js"></script>
    <script src="../public/json/json_parse_state.js"></script>
    <script src="../public/json/json2.js"></script>
    <script src="../public/json/cycle.js"></script>

</head>

<body>




    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">Xmenkingofstar</a>
                <a class="navbar-brand hidden" href="#">X</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Chức năng</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Tài khoản</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=admin">Tài khoản</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="?page=addadmin">Thêm tài khoản</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-rub"></i>Danh mục loại bài viết</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=new-group">Loại bài viết</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="?page=addnew-group">Thêm loại bài viết</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-anchor"></i>Bài viết</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=new">Bài viết</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="?page=addnew">Thêm bài viết</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bell-o"></i>Loại sản phẩm</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=category">Loại sản phẩm</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="?page=addcategory">Thêm sản phẩm</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-briefcase"></i>Nhà cung cấp</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=producer">Nhà cung cấp</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="?page=addproducer">Thêm nhà cung cấp</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-eraser"></i>Sản phẩm</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=product">Sản phẩm</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="?page=addproduct">Thêm sản phẩm</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-eraser"></i>Quản lý tồn kho</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=warehouse">Danh sách tồn kho</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-eraser"></i>Nhập kho</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=warehousing">DS phiếu nhập</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="?page=addwarehousing">Nhập kho</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-eraser"></i>Đơn hàng</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=bill">DS Đơn hàng</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bell-o"></i>Slider</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=slider">Danh sách slider</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="?page=addslider">Thêm slider</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-eraser"></i>Quản lý khu vực</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=province">DS khu vực</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-eraser"></i>Font and icon</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="?page=icon">Font and icon</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <!-- <div class="col-sm-7"></div> -->

                <div class="offset-sm-7 col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="../public/admin/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../public/upload/avata/avata.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <?php if (isset($_SESSION['admin'])) {
                                echo ('<a class="nav-link" href="view/logout.php"><i class="fa fa-power-off"></i> Logout</a>');
                            } ?>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <?php

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {

                        // quản lý loại tin.
                    case 'new-group':
                        require 'view/new-group/new-group.php';
                        break;
                    case 'editnew-group':
                        require 'view/new-group/editnew-group.php';
                        break;
                    case 'deletenew-group':
                        require 'view/new-group/deletenew-group.php';
                        break;
                    case 'addnew-group':
                        require 'view/new-group/addnew-group.php';
                        break;
                        // end quản lý loại tin.

                        // quản lý bài viêt.
                    case 'new':
                        require 'view/new/new.php';
                        break;
                    case 'editnew':
                        require 'view/new/editnew.php';
                        break;
                    case 'deletenew':
                        require 'view/new/deletenew.php';
                        break;
                    case 'addnew':
                        require 'view/new/addnew.php';
                        break;
                        // end quản lý bài viết.

                        // quản lý loai san pham.
                    case 'category':
                        require 'view/category/category.php';
                        break;
                    case 'editcategory':
                        require 'view/category/editcategory.php';
                        break;
                    case 'deletecategory':
                        require 'view/category/deletecategory.php';
                        break;
                    case 'addcategory':
                        require 'view/category/addcategory.php';
                        break;
                        // end quản lý loại sản phẩm.

                        // quản lý tài khoản admin.
                    case 'admin':
                        require 'view/admin/admin.php';
                        break;
                    case 'editadmin':
                        require 'view/admin/editadmin.php';
                        break;
                    case 'deleteadmin':
                        require 'view/admin/deleteadmin.php';
                        break;
                    case 'addadmin':
                        require 'view/admin/addadmin.php';
                        break;
                        // end quản lý tài khoản admin.

                        // quản lý nha cung cap.
                    case 'producer':
                        require 'view/producer/producer.php';
                        break;
                    case 'editproducer':
                        require 'view/producer/editproducer.php';
                        break;
                    case 'deleteproducer':
                        require 'view/producer/deleteproducer.php';
                        break;
                    case 'addproducer':
                        require 'view/producer/addproducer.php';
                        break;
                        // end quản lý nha cung cap.

                        // quản lý KHO.
                    case 'warehouse':
                        require 'view/warehouse/warehouse.php';
                        break;
                    case 'editwarehouse':
                        require 'view/warehouse/editwarehouse.php';
                        break;
                    case 'addwarehousing':
                        require 'view/warehouse/addwarehousing.php';
                        break;
                    case 'warehousing':
                        require 'view/warehouse/warehousing.php';
                        break;
                    case 'warehousing_detail':
                        require 'view/warehouse/warehousing_detail.php';
                        break;
                        // end quản lý KHO.

                        // quản lý khu vực.
                    case 'province':
                        require 'view/province/province.php';
                        break;

                    case 'district':
                        require 'view/province/district.php';
                        break;

                        // end quản lý khu vực.

                        // quản lý san pham.
                    case 'product':
                        require 'view/product/product.php';
                        break;
                    case 'detailproduct':
                        require 'view/product/detailproduct.php';
                        break;
                    case 'editproduct':
                        require 'view/product/editproduct.php';
                        break;
                    case 'deleteproduct':
                        require 'view/product/deleteproduct.php';
                        break;
                    case 'addproduct':
                        require 'view/product/addproduct.php';
                        break;
                        // end quản lý sản phẩm.

                        // quản lý đơn hàng.
                    case 'bill':
                        require 'view/bill/bill.php';
                        break;
                    case 'billdetail':
                        require 'view/bill/billdetail.php';
                        break;
                    case 'updatestatus':
                        require 'view/bill/updatestatus.php';
                        break;
                        // end quản lý đơn hàng.


                        // quản lý icon
                    case 'icon':
                        require 'view/icon/icon.php';
                        break;
                        // end quản lý icon

                        // quản lý loai san pham.
                    case 'slider':
                        require 'view/slider/slider.php';
                        break;
                    case 'editslider':
                        require 'view/slider/editslider.php';
                        break;
                    case 'deleteslider':
                        require 'view/slider/deleteslider.php';
                        break;
                    case 'addslider':
                        require 'view/slider/addslider.php';
                        break;
                        // end quản lý loại sản phẩm.

                    default:
                        require 'view/index.php';
                        break;
                }
            }

            ?>
        </div>
    </div><!-- /#right-panel -->

</body>

</html>
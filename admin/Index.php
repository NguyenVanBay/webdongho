<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:dangnhap.php");
    die("chuyentrang");
}
include("../connection.php");

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
    <!-- <link rel="stylesheet" href="../public/DataTables/css/dataTables.bootstrap4.min.css"> -->



    <link rel="stylesheet" href="../public/admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="../public/bootstrap/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="../public/admin/vendors/jquery/dist/jquery.min.js"></script> -->
    <script src="../public/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../public/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../public/admin/assets/js/main.js"></script>
    <!-- <script src="../public/admin/assets/js/dashboard.js"></script> -->


    <script src="../public/Datatables/jquery-3.3.1.js"></script>
    <script src="../public/Datatables/jquery.dataTables.js"></script>
    <script src="../public/Datatables/dataTables.bootstrap4.js"></script>

    <!-- json -->
    <script src="../public/json/json_parse.js"></script>
    <script src="../public/json/json_parse_state.js"></script>
    <script src="../public/json/json2.js"></script>
    <script src="../public/json/cycle.js"></script>

    <!-- <link href="../public/DataTables/AutoFill/css/autoFill.bootstrap4.css" />
    <link href="../public/DataTables/Buttons/css/buttons.bootstrap4.css" />
    <link href="../public/DataTables/ColReorder/css/colReorder.bootstrap4.css" />
    <link href="../public/DataTables/FixedColumns/css/fixedColumns.bootstrap4.css" />
    <link href="../public/DataTables/Responsive/css/responsive.bootstrap4.css" />
    <link href="../public/DataTables/RowGroup/css/rowGroup.bootstrap4.css" />
    <link href="../public/DataTables/Scroller/css/scroller.bootstrap4.css" />
    <link href="../public/DataTables/Select/css/select.bootstrap4.css"/> -->


    <!-- <script src="../public/DataTables/AutoFill/js/autoFill.bootstrap.js"></script>
    <script src="../public/DataTables/AutoFill/js/autoFill.bootstrap4.js"></script>
    <script src="../public/DataTables/Buttons/js/buttons.bootstrap4.js"></script>
    <script src="../public/DataTables/ColReorder/js/colReorder.bootstrap4.js"></script>
    <script src="../public/DataTables/FixedColumns/js/fixedColumns.bootstrap4.js"></script>
    <script src="../public/DataTables/Responsive/js/responsive.bootstrap4.js"></script>
    <script src="../public/DataTables/RowGroup/js/rowGroup.bootstrap4.js"></script>
    <script src="../public/DataTables/Scroller/js/scroller.bootstrap4.js"></script>
    <script src="../public/DataTables/Select/js/select.bootstrap4.js"></script> -->

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

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="../public/admin/#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="../public/admin/#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="../public/admin/#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="../public/admin/#">
                                    <span class="photo media-left"><img alt="avatar" src="../public/admin/images/avatar/1.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="../public/admin/#">
                                    <span class="photo media-left"><img alt="avatar" src="../public/admin/images/avatar/2.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="../public/admin/#">
                                    <span class="photo media-left"><img alt="avatar" src="../public/admin/images/avatar/3.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                                <a class="dropdown-item media bg-flat-color-3" href="../public/admin/#">
                                    <span class="photo media-left"><img alt="avatar" src="../public/admin/images/avatar/4.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="../public/admin/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../public/upload/avata/avata.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../public/admin/#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="../public/admin/#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="../public/admin/#"><i class="fa fa-cog"></i> Settings</a>
                            <?php if (isset($_SESSION['admin'])) {
                                echo ('<a class="nav-link" href="view/logout.php"><i class="fa fa-power-off"></i> Logout</a>');
                            } ?>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="../public/admin/#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
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
<?php
session_start();
if(!isset($_SESSION['admin'])) {
	header("location:dangnhap.php");
	die("chuyentrang");
}
include("../connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/fonts/fontawesome.min.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/styleAdmin.css">
    <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <div class="menu-top">
        <ul class="menu">
            <li style="float: left; text-transform: uppercase">
                <?php if (isset($_SESSION['admin'])) {
					echo ("<a href=''><i class='glyphicon glyphicon-user' style='margin-right:4px;'></i> admin " . $_SESSION['admin'] . "</a>");
				}
				?>
            </li>
            <li style="float: left; text-transform:uppercase">
                <?php if (isset($_SESSION['admin'])) {
					echo ("<a href='View/dangxuat.php'><i class='glyphicon glyphicon-log-out' style='margin-right:4px;'></i>Đăng xuất</a>");
				} ?>
            </li>
            <li><a href="Index.php?page=trangchu"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="Index.php?page=quanlynhomtintuc"><span class="glyphicon glyphicon-tags"></span> Loại tin</a></li>
            <li><a href="Index.php?page=quanlytintuc"><span class="glyphicon glyphicon-pencil"></span> Tin tức</a></li>
            <li><a href="Index.php?page=quanlynhomsanpham"><span class="glyphicon glyphicon-tags" style="margin-right: 5px;"></span>Loại sản phẩm</a></li>
            <li><a href="Index.php?page=quanlysanpham"><span class="glyphicon glyphicon-tag" style="margin-right: 5px;"></span>Sản phẩm</a></li>
            <li><a href="Index.php?page=quanlynhasanxuat"><span class="	glyphicon glyphicon-folder-close" style="margin-right: 5px;"></span>NXS</a></li>
            <li><a href="Index.php?page=quanlydonhang"><span class="glyphicon glyphicon-shopping-cart"></span> Đơn hàng</a></li>
            <li><a href="Index.php?page=quanlykhachhang"><span class="glyphicon glyphicon-lock"></span>Khách hàng</a></li>
            <li><a href="Index.php?page=themtaikhoanadmin"><span class="glyphicon glyphicon-plus"></span>Tài khoản admin</a></li>
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </ul>
    </div>

    <div class="main">
        <div>
            <?php
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
				switch ($page) {
					case 'quanlytintuc':
						require 'View/quanlytintuc.php';
						break;
					case 'quanlynhomtintuc':
						require 'View/quanlynhomtintuc.php';
						break;
					case 'themtaikhoanadmin':
						require 'View/themtaikhoanadmin.php';
						break;
					case 'themtintuc':
						require 'View/themtintuc.php';
						break;
					case 'capnhattintuc':
						require 'View/suatintuc.php';
						break;
					case 'quanlysanpham':
						require 'View/quanlysanpham.php';
						break;
					case 'quanlynhomsanpham':
						require 'View/quanlynhomsanpham.php';
						break;
					case 'suanhomsanpham':
						require 'View/suanhomsp.php';
						break;
					case 'quanlytaikhoan':
						require 'View/quanlytaikhoan.php';
						break;
					case 'capnhatsanpham':
						require 'View/suasanpham.php';
						break;
					case 'quanlykhachhang':
						require 'View/quanlykhachhang.php';
						break;
					case 'quanlynhasanxuat':
						require 'View/quanlynhasanxuat.php';
						break;
					case 'quanlydonhang':
						require 'View/quanlydonhang.php';
						break;
					case 'xemdonhangchitiet':
						require 'View/xemdonhangchitiet.php';
						break;
					case 'suanhasanxuat':
						require 'View/suanhasanxuat.php';
						break;
					case 'themsanpham':
						require 'View/themsanpham.php';
						break;
					case 'suanhomtintuc':
						require 'View/suanhomtintuc.php';
						break;
					default:
						require 'View/trangchu.php';
						break;
				}
			}
			?>
        </div>
    </div>
</body>

</html> 
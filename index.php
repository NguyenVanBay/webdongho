<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Websize bán đồng hồ</title>
	<link rel="stylesheet" href="bootstrap/fonts/fontawesome.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
  </head>
<body>
	<?php
		include("connection.php");
		include("View/login.php");
		include("View/register.php");
	?>

	<?php
		require_once("View/menu.php");
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			switch ($page) {
				case 'detail':
					require 'View/detail_product.php';
					break;
				case 'search':
					require 'View/search.php';
					break;
				case 'group':
					require 'View/group_detail.php';
					break;
				case 'tintuctrongngay':
					require 'View/group_tintuctrongngay.php';
					break;
				case 'content':
					require 'View/content_new.php';
					break;
				case 'shoppingcart':
					require 'View/shoppingcart.php';
					break;
				case 'thanhtoan':
					require 'View/thanhtoan.php';
					break;
				default:{
					require 'View/slide.php';
					require 'View/main.php';
					}
					break;
			}
		}else{
			require 'View/slide.php';
			require 'View/main.php';
		}
	?>


		<?php
			require 'View/footer.php';
		?>

	<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/jquery.js"></script>
</body>
</html>
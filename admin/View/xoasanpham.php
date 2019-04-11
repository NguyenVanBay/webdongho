<?php
	include("../connection.php");
	$spct = $_GET['spct'];

	$sql = "SELECT Image FROM tbl_product_detail WHERE IdProduct = '".$spct."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$sql = "DELETE FROM tbl_product_detail WHERE IdProduct = '".$spct."'";
	mysqli_query($conn, $sql);

	if (file_exists('../upload/sanpham/' . $row['Image'])) {
		unlink('../upload/sanpham/' . $row['Image']);

	}
	header("location:../Index.php?page=quanlysanpham");
?>
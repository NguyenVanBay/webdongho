<?php
	include("../connection.php");
	$tt = $_GET['tt'];

	$sql = "SELECT Image FROM tbl_news_detail WHERE IdNews = $tt";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$sql = "DELETE FROM tbl_news_detail WHERE IdNews = $tt";
	mysqli_query($conn, $sql);

	if (file_exists('../upload/tintuc/' . $row['Image'])) {
		unlink('../upload/tintuc/' . $row['Image']);
	}

	header("location:../Index.php?page=quanlytintuc");
?>
<?php
	include("../connection/connection.php");
	$id = $_GET['id'];

	$sql = "SELECT image, thumbnail FROM product WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$sql = "DELETE FROM product WHERE id = $id";
	mysqli_query($conn, $sql);

	if (file_exists('../public/upload/product/' . $row['image'])) {
		unlink('../public/upload/product/' . $row['image']);
	}

	if (file_exists('../public/upload/product/' . $row['thumbnail'])) {
		unlink('../public/upload/product/' . $row['thumbnail']);
	}
	echo ('<script language = javascript>alert("thành công");location.href="index.php?page=product"</script>');
	
?>
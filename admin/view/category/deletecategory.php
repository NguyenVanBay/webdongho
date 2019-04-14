<?php
	include("../connection.php");
	$id = $_GET['id'];

	$sql = "SELECT image FROM category WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$sql = "DELETE FROM category WHERE id = $id";
	mysqli_query($conn, $sql);

	if (file_exists('../public/upload/category/' . $row['image'])) {
		unlink('../public/upload/category/' . $row['image']);
	}
	echo ('<script language = javascript>alert("Thành công");location.href="index.php?page=category"</script>');
	
?>
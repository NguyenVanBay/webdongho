<?php
	include("../connection/connection.php");
	$id = $_GET['id'];

	$sql = "SELECT image FROM slider WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$sql = "DELETE FROM slider WHERE id = $id";
	mysqli_query($conn, $sql);

	if (file_exists('../public/upload/slider/' . $row['image'])) {
		unlink('../public/upload/slider/' . $row['image']);
	}
	echo ('<script language = javascript>alert("Thành công");location.href="index.php?page=slider"</script>');
	
?>
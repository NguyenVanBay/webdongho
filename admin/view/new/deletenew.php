<?php
	include("../connection/connection.php");
	$id = $_GET['id'];

	$sql = "SELECT image FROM new WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$sql = "DELETE FROM new WHERE id = $id";
	mysqli_query($conn, $sql);

	if (file_exists('../public/upload/tintuc/' . $row['image'])) {
		unlink('../public/upload/tintuc/' . $row['image']);
	}
	echo ('<script language = javascript>alert("thành công");location.href="index.php?page=new"</script>');
	
?>
<?php
	include("../connection.php");
	$id = $_GET['id'];

	$sql = "SELECT image FROM producer WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$sql = "DELETE FROM producer WHERE id = $id";
	mysqli_query($conn, $sql);

	if (file_exists('../public/upload/producer/' . $row['image'])) {
		unlink('../public/upload/producer/' . $row['image']);
	}
	echo ('<script language = javascript>alert("Thành công");location.href="index.php?page=producer"</script>');
	
?>
<?php
	include("../connection/connection.php");
	$id = $_GET['id'];

	$sql = "DELETE FROM admin WHERE id = $id";
	mysqli_query($conn, $sql);

	echo ('<script language = javascript>alert("thành công");location.href="index.php?page=admin"</script>');
?>
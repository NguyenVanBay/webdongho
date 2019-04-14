<?php
	include("../connection.php");
	$id = $_GET['id'];

	$sql = "DELETE FROM new_group WHERE id = $id";
	mysqli_query($conn, $sql);

	echo ('<script language = javascript>alert("thành công");location.href="index.php?page=new-group"</script>');
?>
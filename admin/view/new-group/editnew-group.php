<?php
$id = $_GET['id'];
$sql = "SELECT* FROM new_group WHERE id ='" . $id . "'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query)
?>
<?php
if (isset($_POST['bt_submit'])) {
	$name = $_POST['name'];

	$sql = "UPDATE new_group SET name = '" . $name . "' WHERE id = '" . $id . "'";
	if (mysqli_query($conn, $sql))
		echo ('<script language = javascript>alert("thành công");location.href="index.php?page=new-group"</script>');
}
?>
<br><br>
<form method="POST" enctype="multipart/form-data">
	<table class="table table-striped table-bordered">
		<tr>
			<td style="font-weight: bold;">Tên thể loại</td>
			<td><input type="text" name="name" value="<?php echo ($row["name"]) ?>" class="form-control"></td>
		</tr>
	</table>

	<input type="submit" name="bt_submit" value="Thêm" class="btn btn-success">
</form>
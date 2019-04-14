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
<form method="POST">

	<div class="form-group">
		<label for="my-input">Tên thể loại</label>
		<input id="my-input" class="form-control" name="name" value="<?php echo ($row["name"]) ?>" type="text">
	</div>

	<input type="hidden" name="id" value="<?php echo ($row["id"]) ?>" readonly>

	<div class="form-group">
		<input type="submit" name="bt_submit" value="Cập nhật" class="btn btn-success">
	</div>


</form>
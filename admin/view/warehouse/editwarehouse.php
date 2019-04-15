<?php
$id = $_GET['id'];
$query = "SELECT warehouse.*, product.name FROM warehouse INNER JOIN product ON warehouse.product_id = product.id "
    . " WHERE warehouse.id = '" . $id . "'";
$db = mysqli_query($conn, $query);
$row = mysqli_fetch_array($db);


if (isset($_POST['bt_submit'])) {
    $id = $_POST['id'];
    $inventory = $_POST['inventory'];
    $inventory_actual = $_POST['inventory_actual'];
    $error = $_POST['error'];



    $sql = "UPDATE warehouse SET inventory = '$inventory', inventory_actual = '$inventory_actual', error = '$error' where warehouse.id = '$id'";
    // die($sql);
    if (mysqli_query($conn, $sql)) {
        echo ('<script>alert("Cập nhật thành công"); location.href="index.php?page=warehouse"</script>');
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Mã Loại sản phảm</td>
            <td><input type="text" class="form-control" name="id" value="<?php echo ($row["id"]) ?>" readonly></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tên sản phẩm</td>
            <td><input type="text" class="form-control" name="name" value="<?php echo ($row["name"]) ?>" readonly></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tồn lý thuyết</td>
            <td><input type="text" class="form-control" name="inventory" value="<?php echo ($row["inventory"]) ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tồn thực tế</td>
            <td><input type="text" class="form-control" name="inventory_actual" value="<?php echo ($row["inventory_actual"]) ?>"></td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Sản phẩm lỗi</td>
            <td><input type="text" class="form-control" name="error" value="<?php echo ($row["error"]) ?>"></td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="bt_submit" value="Cập nhật" class="btn btn-success">
            <td>
        </tr>

</form>
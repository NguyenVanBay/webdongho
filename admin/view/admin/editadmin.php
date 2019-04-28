<?php
$id = $_GET['id'];


$sql = "SELECT* FROM admin WHERE id ='" . $id . "'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>
<?php
if (isset($_POST['bt_submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "UPDATE admin SET name = '" . $name . "', email = '$email', address = '$address', password = '$password', phone ='$phone' WHERE id = '" . $id . "'";
    if (mysqli_query($conn, $sql))
        echo ('<script language = javascript>alert("Thành công");location.href="index.php?page=admin"</script>');
}
?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Tên</td>
            <td><input type="text" name="name"  value="<?php echo ($row["name"]) ?>" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Email</td>
            <td><input type="text" name="email" value="<?php echo ($row["email"]) ?>"  class="form-control"></td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Password</td>
            <td><input type="password" name="password" value="<?php echo ($row["password"]) ?>" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Địa chỉ</td>
            <td><input type="text" name="address" value="<?php echo ($row["address"]) ?>"  class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Số điện thoại</td>
            <td><input type="text" name="phone" value="<?php echo ($row["phone"]) ?>" class="form-control"></td>
        </tr>
    </table>
    <input type="submit" name="bt_submit" value="Thêm" class="btn btn-success btn-sm">
</form>
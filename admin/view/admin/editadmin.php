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
<br><br>
<form method="POST">

    <div class="form-group">
        <label for="my-input">Tên</label>
        <input id="my-input" class="form-control" name="name" value="<?php echo ($row["name"]) ?>" type="text">
    </div>

    <div class="form-group">
        <label for="my-input">Email</label>
        <input id="my-input" class="form-control" name="email" value="<?php echo ($row["email"]) ?>" type="text">
    </div>

    <div class="form-group">
        <label for="my-input">Password</label>
        <input id="my-input" class="form-control" name="password" value="<?php echo ($row["password"]) ?>" type="password">
    </div>

    <div class="form-group">
        <label for="my-input">Địa chỉ</label>
        <input id="my-input" class="form-control" name="address" value="<?php echo ($row["address"]) ?>" type="text">
    </div>

    <div class="form-group">
        <label for="my-input">SĐT</label>
        <input id="my-input" class="form-control" name="phone" value="<?php echo ($row["phone"]) ?>" type="text">
    </div>

    <div class="form-group">
        <input type="submit" name="bt_submit" value="Thêm" class="btn btn-success">
    </div>

</form>
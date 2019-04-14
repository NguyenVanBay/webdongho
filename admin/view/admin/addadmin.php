<?php
if (isset($_POST['bt_submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO admin(name, email, password, address, phone) VALUES ('$name','$email', '$password', '$address', '$phone')";
    if (mysqli_query($conn, $sql)) {
        echo ("<script language='javascript'>alert('Thêm thành công');location.href='Index.php?page=admin'</script>");
    }
}
?>
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="my-input">Tên</label>
        <input id="my-input" class="form-control" name="name" value="" type="text">
    </div>

    <div class="form-group">
        <label for="my-input">Email</label>
        <input id="my-input" class="form-control" name="email" value="" type="text">
    </div>

    <div class="form-group">
        <label for="my-input">Password</label>
        <input id="my-input" class="form-control" name="password" value="" type="password">
    </div>

    <div class="form-group">
        <label for="my-input">Địa chỉ</label>
        <input id="my-input" class="form-control" name="address" value="" type="text">
    </div>

    <div class="form-group">
        <label for="my-input">SĐT</label>
        <input id="my-input" class="form-control" name="phone" value="" type="text">
    </div>

    <div class="form-group">
        <input type="submit" name="bt_submit" value="Thêm" class="btn btn-success">
    </div>

</form>
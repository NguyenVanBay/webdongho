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
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Tên</td>
            <td><input type="text" name="name" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Email</td>
            <td><input type="text" name="email" class="form-control"></td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Password</td>
            <td><input type="password" name="password" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Địa chỉ</td>
            <td><input type="text" name="address" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Số điện thoại</td>
            <td><input type="text" name="phone" class="form-control"></td>
        </tr>
    </table>
    <input type="submit" name="bt_submit" value="Thêm" class="btn btn-success btn-sm">
</form>
<?php

if (isset($_POST['bt_submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    if ($_FILES["image"]["name"] != null) {

        if (
            $_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif"
        ) {
            if ($_FILES["image"]["size"] > 1048576) {
                echo ("<script language='javascript'>alert('File quá nặng');location.href='index.php?page=addcategory'</script>");
            }

            // kiem tra su ton tai cua file
            if (file_exists("" . $_FILES["image"]["name"])) {
                echo ("<script language='javascript'>alert('file đã tồn tại');location.href='index.php?page=addcategory'</script>");
            } else {

                $path = "../public/upload/producer/";
                $tmp_name = $_FILES['image']['tmp_name'];
                $image = time() . $_FILES['image']['name'];
                $type = $_FILES['image']['type'];
                $size = $_FILES['image']['size'];
                // Upload file
                move_uploaded_file($tmp_name, $path . $image);

                $sql = "INSERT INTO producer(name,address, image) VALUES ('$name','$address','$image')";
                if (mysqli_query($conn, $sql)) {
                    echo ("<script language='javascript'>alert('Thêm thành công');location.href='index.php?page=producer'</script>");
                }
            }
        } else {
            echo ("<script language='javascript'>alert('Thêm thành công');location.href='index.php?page=producer'</script>");
        }
    } else {
        echo ("<script language='javascript'>alert('Chưa chọn file');location.href='index.php?page=addproducer'</script>");
    }
}

?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Nhà cung cấp</td>
            <td><input type="text" name="name" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Địa chỉ</td>
            <td><input type="text" name="address" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Hình ảnh</td>
            <td><input type="file" name="image"></td>
        </tr>
    </table>
    <input type="submit" name="bt_submit" value="Thêm" class="btn btn-success btn-sm">
</form>
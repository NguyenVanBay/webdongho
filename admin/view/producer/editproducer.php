<?php
$id = $_GET['id'];
$query = "SELECT * FROM producer WHERE id ='" . $id . "'";
$db = mysqli_query($conn, $query);
$row = mysqli_fetch_array($db);

if (isset($_POST['bt_submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sort = $_POST['sort'];
	
    if (isset($_FILES["image"])) {

        if ($_FILES["image"]["name"] != null) {

            if (
                $_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif"
            ) {
                if ($_FILES["image"]["size"] > 1048576) {
                    echo ("<script language='javascript'>alert('File quá nặng');location.href='index.php?page=editcategory'</script>");
                }

                // kiem tra su ton tai cua file
                if (file_exists("" . $_FILES["image"]["name"])) {
                    echo ("<script language='javascript'>alert('file đã tồn tại');location.href='index.php?page=editcategory'</script>");
                } else {

                    $path = "../public/upload/producer/";
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $img = time() . $_FILES['image']['name'];
                    $type = $_FILES['image']['type'];
                    $size = $_FILES['image']['size'];
                    // Upload file
                    move_uploaded_file($tmp_name, $path . $img);

                    // xoa anh cu.
                    $sql = "SELECT image FROM category WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    if (file_exists('../public/upload/producer/' . $row['image'])) {
                        unlink('../public/upload/producer/' . $row['image']);
                    }

                    $sql = "UPDATE producer SET name = '$name', address = '$address', image = '$img', sort = '$sort' WHERE id ='$id' ";

                    if (mysqli_query($conn, $sql)) {
                        echo ('<script>alert("Cập nhật thành công"); location.href="index.php?page=producer"</script>');
                    }
                }
            } else {
                echo ('<script>alert("File được chọn không hợp lệ"); location.href="index.php?page=editproducer"</script>');
            }
        }
    } else {
		$sql = "UPDATE producer SET name = '$name', address = '$address', sort = '$sort' WHERE id ='$id' ";
        if (mysqli_query($conn, $sql)) {
            echo ('<script>alert("Cập nhật thành công"); location.href="index.php?page=producer"</script>');
        }
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Mã nhà cung cấp</td>
            <td><input type="text" class="form-control" name="id" value="<?php echo ($row["id"]) ?>" readonly></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tên nhà cung cấp</td>
            <td><input type="text" class="form-control" name="name" value="<?php echo ($row["name"]) ?>"></td>
		</tr>
		
		<tr>
            <td style="font-weight: bold;">Địa chỉ</td>
            <td><input type="text" class="form-control" name="address" value="<?php echo ($row["address"]) ?>"></td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Vị trí trên menu</td>
            <td><input type="text" class="form-control" name="sort" value="<?php echo ($row["sort"]) ?>"></td>
        </tr>
    <table>
        <tr>
            Cập nhật hình ảnh <input style="width: 30px;" type="checkbox" name="isSelected" id="status">
            <br><br>
			<img style="width: 20%" src="../public/upload/producer/<?php echo $row['image']; ?>" alt="">
			<br><br>
            <td id="Elementinput">

            </td>

            <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript">
                $("#status").change(function() {
                    if ($('#status').is(':checked')) {
                        $('#Elementinput').append('<input type="file" name="image">');
                    } else {
                        $('#Elementinput').empty();
                    }
                });
            </script>
        </tr>

    </table>
    <br>
    <input type="submit" name="bt_submit" value="Cập nhật" class="btn btn-success">
</form>
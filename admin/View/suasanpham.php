<head>
    <style type="text/css">
        input {
            width: 100%;
            border: 0px;
        }

        .nut_sub {
            width: 80px;
            height: 40px;
            border-radius: 8px;
            color: white;
            background: #10c221;
            font-weight: bold;
        }

        .dong {
            background: #3c763d;
        }
    </style>
</head>


<?php
$spct = $_GET['spct'];
$query = "SELECT* FROM tbl_product_detail WHERE IdProduct ='" . $spct . "'";
$db = mysqli_query($conn, $query);
$row = mysqli_fetch_array($db);

if (isset($_POST['bt_submit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$giacu = $_POST['giacu'];
	$giamoi = $_POST['giamoi'];
	$mansx = $_POST['mansx'];
	$groupsp = $_POST['mansp'];
	$Description = $_POST['Description'];
	$sl = $_POST['sl'];

	if (isset($_FILES["image"])) {

		if ($_FILES["image"]["name"] != null) {

			if (
				$_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif"
			) {
				if ($_FILES["image"]["size"] > 1048576) {
					echo ("<script language='javascript'>alert('File quá nặng');location.href='Index.php?page=quanlysanpham'</script>");
				}

				// kiem tra su ton tai cua file
				if (file_exists("" . $_FILES["image"]["name"])) {
					echo ("<script language='javascript'>alert('file đã tồn tại');location.href='Index.php?page=quanlysanpham'</script>");
				} else {

					$path = "./upload/sanpham/";
					$tmp_name = $_FILES['image']['tmp_name'];
					$name = $_FILES['image']['name'];
					$type = $_FILES['image']['type'];
					$size = $_FILES['image']['size'];
					// Upload file
					move_uploaded_file($tmp_name, $path . $name);

					// xoa anh cu.
					$sql = "SELECT Image FROM tbl_product_detail WHERE IdProduct = $id";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					if (file_exists('./upload/sanpham/' . $row['Image'])) {
						unlink('./upload/sanpham/' . $row['Image']);
					}
					
					$sql = "UPDATE tbl_product_detail SET IdProduct = '$spct', NameProduct = '$name', OldPrice = '$giacu', NewPrice = '$giamoi', IdProducer = '$mansx', IdGroupProduct = '$groupsp', Description = '$Description',Amount = '$sl', Image = '$name' WHERE IdProduct ='$spct' ";
					if (mysqli_query($conn, $sql)) {
						echo ('<script>alert("Cập nhật sản phẩm thành công"); location.href="Index.php?page=quanlysanpham"</script>');
					}
				}
			} else {
				echo ('<script>alert("File được chọn không hợp lệ"); location.href="Index.php?page=quanlysanpham"</script>');
			}
		}
	} else {
		$sql = "UPDATE tbl_product_detail SET NameProduct = '$name', OldPrice = '$giacu', NewPrice = '$giamoi', IdProducer = '$mansx', IdGroupProduct = '$groupsp', Description = '$Description',Amount = '$sl' WHERE IdProduct ='$spct' ";
		if (mysqli_query($conn, $sql)) {
			echo ('<script>alert("Cập nhật sản phẩm thành công"); location.href="Index.php?page=quanlysanpham"</script>');
		}
	}
}
?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Mã sản phẩm</td>
            <td><input type="text" name="id" value="<?php echo ($row["IdProduct"]) ?>" readonly></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tên sản phẩm</td>
            <td><input type="text" name="name" value="<?php echo ($row["NameProduct"]) ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Giá cũ</td>
            <td><input type="number" name="giacu" value="<?php echo ($row["OldPrice"]) ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Giá mới</td>
            <td><input type="number" name="giamoi" value="<?php echo ($row["NewPrice"]) ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Mã nhà sản xuất</td>
            <td>
                <select class="oip form-control" name="mansx">
                    <?php
					$sql1 = "SELECT * FROM tbl_producer";
					$query1 = mysqli_query($conn, $sql1);
					while ($row1 = mysqli_fetch_array($query1)) {
						?>
                    <option value="<?php echo ($row1['IdProducer']); ?>"><?php echo ($row1['NameProducer']); ?></option>
                    <?php 
				} ?>
                </select>
            </td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Mã nhóm sản phẩm</td>
            <td>
                <select class="oip form-control" name="mansp">
                    <?php
					$sql2 = "SELECT * FROM tbl_product_group";
					$query2 = mysqli_query($conn, $sql2);
					while ($row2 = mysqli_fetch_array($query2)) {
						?>
                    <option value="<?php echo ($row2['IdGroupProduct']); ?>"><?php echo ($row2['NameGroupProduct']); ?></option>
                    <?php 
				} ?>
                </select>
            </td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Số lượng</td>
            <td><input type="number" name="sl" value="<?php echo ($row["Amount"]) ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">
                Cập nhật hình ảnh <input style="width: 30px;" type="checkbox" name="isSelected" id="status">
                <br>
                <img style="width: 20%" src="./upload/sanpham/<?php echo $row['Image']; ?>" alt=""></td>
            <td id="ElementInput">
            </td>

            <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript">
                $("#status").change(function() {
                    if ($('#status').is(':checked')) {
                        $('#ElementInput').append('<input type="file" name="image">');
                    } else {
                        $('#ElementInput').empty();
                    }
                });
            </script>
        </tr>
        <tr>
            <td style="font-weight: bold;" colspan="2">Mô tả</td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="Description" style="width: 100%; height: 100px;"><?php echo ($row["Description"]) ?></textarea></td>
            <script type="text/javascript">
                CKEDITOR.replace("Description");
            </script>
        </tr>
    </table>
    <input type="submit" name="bt_submit" value="Cập nhật" class="nut_sub">
</form> 
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

if (isset($_POST['bt_submit'])) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$description = $_POST['description'];
	$id_group_new = $_POST['id_group_new'];

	if ($_FILES["image"]["name"] != null) {

		if (
			$_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif"
		) {
			if ($_FILES["image"]["size"] > 1048576) {
				echo ("<script language='javascript'>alert('File quá nặng');location.href='Index.php?page=quanlytintuc'</script>");
			}

			// kiem tra su ton tai cua file
			if (file_exists("" . $_FILES["image"]["name"])) {
				echo ("<script language='javascript'>alert('file đã tồn tại');location.href='Index.php?page=quanlytintuc'</script>");
			} else {

				$path = "./upload/tintuc/";
				$tmp_name = $_FILES['image']['tmp_name'];
				$name = $_FILES['image']['name'];
				$type = $_FILES['image']['type'];
				$size = $_FILES['image']['size'];
				// Upload file
				move_uploaded_file($tmp_name, $path . $name);

				$sql = "INSERT INTO tbl_news_detail(Title,Content,Description,IdNewsGroup,Image) VALUES ('$title','$content','$description','$id_group_new','$name')";
				if (mysqli_query($conn, $sql)) {
					echo ("<script language='javascript'>alert('Thêm tin tức thành công');location.href='Index.php?page=quanlytintuc'</script>");
				}
			}
		} else {
			echo ("<script language='javascript'>alert('Thêm sản phẩm thành công');location.href='Index.php?page=quanlytintuc'</script>");
		}
	} else {
		echo ("<script language='javascript'>alert('Chưa chọn file');location.href='Index.php?page=quanlytintuc'</script>");
	}
}

?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Tiêu đề</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Nội dung</td>
            <td><input type="text" name="content"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Mã nhóm tin tức</td>
            <td>
                <select name="id_group_new" class="form-control">
                    <?php
					$sql1 = "SELECT * FROM tbl_news_group";
					$query1 = mysqli_query($conn, $sql1);
					while ($row1 = mysqli_fetch_array($query1)) {
						?>
                    <option value="<?php echo ($row1['IdNewsGroup']); ?>"><?php echo ($row1['NameNewsGroup']); ?></option>
                    <?php 
				} ?>
                </select>
            </td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Hình ảnh</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;" colspan="2">Mô tả</td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="description" style="width: 100%; height: 100px;"></textarea></td>
            <script type="text/javascript">
                CKEDITOR.replace("description");
            </script>
        </tr>
    </table>
    <input type="submit" name="bt_submit" value="Thêm" class="nut_sub">
</form> 
<?php

if (isset($_POST['bt_submit'])) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$description = $_POST['description'];
	$new_group_id = $_POST['new_group_id'];

	if ($_FILES["image"]["name"] != null) {

		if (
			$_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif"
		) {
			if ($_FILES["image"]["size"] > 1048576) {
				echo ("<script language='javascript'>alert('File quá nặng');location.href='Index.php?page=addnew'</script>");
			}

			// kiem tra su ton tai cua file
			if (file_exists("" . $_FILES["image"]["name"])) {
				echo ("<script language='javascript'>alert('file đã tồn tại');location.href='Index.php?page=addnew'</script>");
			} else {

				$path = "../public/upload/tintuc/";
				$tmp_name = $_FILES['image']['tmp_name'];
				$name = time() . $_FILES['image']['name'];
				$type = $_FILES['image']['type'];
				$size = $_FILES['image']['size'];
				// Upload file
				move_uploaded_file($tmp_name, $path . $name);

				$sql = "INSERT INTO new(title,content,description,new_group_id, image) VALUES ('$title','$content','$description','$new_group_id','$name')";
				if (mysqli_query($conn, $sql)) {
					echo ("<script language='javascript'>alert('Thêm thành công');location.href='index.php?page=new'</script>");
				}
			}
		} else {
			echo ("<script language='javascript'>alert('Thêm thành công');location.href='index.php?page=new'</script>");
		}
	} else {
		echo ("<script language='javascript'>alert('Chưa chọn file');location.href='index.php?page=addnew'</script>");
	}
}

?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Tiêu đề</td>
            <td><input type="text" name="title" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Nội dung</td>
            <td><input type="text" name="content" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Mã nhóm tin tức</td>
            <td>
                <select name="new_group_id" class="form-control">
                    <?php
					$sql = "SELECT * FROM new_group";
					$query = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($query)) {
						?>
                    <option value="<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></option>
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
            <td colspan="2"><textarea name="description" class="form-control" style="width: 100%; height: 100px;"></textarea></td>
            <script type="text/javascript">
                CKEDITOR.replace("description");
            </script>
        </tr>
    </table>
    <input type="submit" name="bt_submit" value="Thêm" class="btn btn-success btn-sm">
</form> 
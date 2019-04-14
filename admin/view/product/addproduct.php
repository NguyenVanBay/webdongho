<?php

if (isset($_POST['bt_submit'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$sale = $_POST['sale'];
    $category_id = $_POST['category_id'];
    $producer_id = $_POST['producer_id'];
    $description = $_POST['description'];
    

	if ($_FILES["image"]["name"] != null || $_FILES["thumbnail"]["name"] != null) {

		if (
            $_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif" ||
            $_FILES["thumbnail"]["type"] == "image/jpeg" || $_FILES["thumbnail"]["type"] == "image/png" || $_FILES["thumbnail"]["type"] == "image/gif"
		) {
			if ($_FILES["image"]["size"] > 1048576 || $_FILES["thumbnail"]["size"] > 1048576) {
				echo ("<script language='javascript'>alert('File quá nặng');location.href='index.php?page=addproduct'</script>");
			}

			// kiem tra su ton tai cua file
			if (file_exists("" . $_FILES["image"]["name"]) || file_exists("" . $_FILES["thumbnail"]["name"])) {
				echo ("<script language='javascript'>alert('file đã tồn tại');location.href='index.php?page=addproduct'</script>");
			} else {

                $path = "../public/upload/product/";
                
				$tmp_name_thumbnal = $_FILES['thumbnail']['tmp_name'];
                $name_thumbnail = time() . $_FILES['thumbnail']['name'];
                
				$tmp_name_image = $_FILES['image']['tmp_name'];
                $name_image = time() . $_FILES['image']['name'];
                
				$type = $_FILES['image']['type'];
				$size = $_FILES['image']['size'];
				// Upload file
                move_uploaded_file($tmp_name_thumbnal, $path . $name_thumbnail);
                // Upload file
				move_uploaded_file($tmp_name_image, $path . $name_image);

                $sql = "INSERT INTO product(name,price,sale,producer_id, category_id, description, thumbnail, image) VALUES "
                                        . "('$name','$price','$sale','$producer_id','$category_id' ,'$description','$name_thumbnail','$name_image')";
				if (mysqli_query($conn, $sql)) {
					echo ("<script language='javascript'>alert('Thêm thành công');location.href='index.php?page=product'</script>");
				}
			}
		} else {
			echo ("<script language='javascript'>alert('Thêm thành công');location.href='index.php?page=product'</script>");
		}
	} else {
		echo ("<script language='javascript'>alert('Chưa chọn file');location.href='index.php?page=addproduct'</script>");
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
            <td style="font-weight: bold;">Giá</td>
            <td><input type="text" name="price" class="form-control"></td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Giảm giá</td>
            <td><input type="text" name="sale" class="form-control"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Nhà cung cấp</td>
            <td>
                <select name="producer_id" class="form-control">
                    <?php
					$sql_producer = "SELECT * FROM producer";
					$query_producer = mysqli_query($conn, $sql_producer);
					while ($row_producer = mysqli_fetch_array($query_producer)) {
						?>
                    <option value="<?php echo ($row_producer['id']); ?>"><?php echo ($row_producer['name']); ?></option>
                    <?php 
				} ?>
                </select>
            </td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Thể loại</td>
            <td>
                <select name="category_id" class="form-control">
                    <?php
					$sql_category = "SELECT * FROM category";
					$query_category = mysqli_query($conn, $sql_category);
					while ($row_category = mysqli_fetch_array($query_category)) {
						?>
                    <option value="<?php echo ($row_category['id']); ?>"><?php echo ($row_category['name']); ?></option>
                    <?php 
				} ?>
                </select>
            </td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Thumbnail</td>
            <td><input type="file" name="thumbnail"></td>
        </tr>


        <tr>
            <td style="font-weight: bold;">Hình ảnh</td>
            <td><input type="file" name="image"></td>
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
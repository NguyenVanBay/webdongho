<?php
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE id ='" . $id . "'";
$db = mysqli_query($conn, $query);
$row = mysqli_fetch_array($db);

if (isset($_POST['bt_submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $category_id = $_POST['category_id'];
    $producer_id = $_POST['producer_id'];
    $description = $_POST['description'];

    if (isset($_FILES["image"]) && $_FILES["image"]["name"] != null && $_FILES["thumbnail"]["name"] != null) {

        if (
            $_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif" ||
            $_FILES["thumbnail"]["type"] == "image/jpeg" || $_FILES["thumbnail"]["type"] == "image/png" || $_FILES["thumbnail"]["type"] == "image/gif"
        ) {
            if ($_FILES["image"]["size"] > 1048576 || $_FILES["thumbnail"]["size"] > 1048576) {
                echo ("<script language='javascript'>alert('File quá nặng');location.href='index.php?page=addproduct'</script>");
            }

            // kiem tra su ton tai cua file
            if (file_exists("" . $_FILES["image"]["name"]) || file_exists("" . $_FILES["thumbnail"]["name"])) {
                echo ("<script language='javascript'>alert('file đã tồn tại');location.href='index.php?page=editproduct'</script>");
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

                // xoa anh cu.
                $sql_img = "SELECT image, thumbnail FROM product WHERE id = $id";
                $result_img = mysqli_query($conn, $sql_img);
                $row_img = mysqli_fetch_assoc($result_img);

                if (file_exists('../public/upload/product/' . $row_img['image'])) {
                    unlink('../public/upload/product/' . $row_img['image']);
                }
                if (file_exists('../public/upload/product/' . $row_img['thumbnail'])) {
                    unlink('../public/upload/product/' . $row_img['thumbnail']);
                }

                $sql = "UPDATE product SET name = '$name', price = '$price', sale = '$sale', producer_id = '$producer_id', description = '$description', category_id = '$category_id', thumbnail = '$name_thumbnail', image = '$name_image'  WHERE id ='$id' ";
                if (mysqli_query($conn, $sql)) {
                    echo ('<script>alert("Cập nhật tin tức thành công"); location.href="index.php?page=product"</script>');
                }
            }
        } else {
            echo ('<script>alert("Không đúng định dạng"); location.href="index.php?page=editproduct"</script>');
        }
    } else {
        $sql = "UPDATE product SET name = '$name', price = '$price', sale = '$sale', producer_id = '$producer_id', description = '$description', category_id = '$category_id' WHERE id ='$id' ";
        if (mysqli_query($conn, $sql)) {
            echo ('<script>alert("Cập nhật tin tức thành công"); location.href="index.php?page=product"</script>');
        }
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Tên</td>
            <td><input type="text" name="name" value="<?php echo ($row["name"]) ?>" class="form-control"></td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Giá</td>
            <td><input type="text" name="price" class="form-control" value="<?php echo ($row["price"]) ?>"></td>
        </tr>

        <tr>
            <td style="font-weight: bold;">Giảm giá</td>
            <td><input type="text" name="sale" class="form-control" value="<?php echo ($row["sale"]) ?>"></td>
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
            <td colspan="2">
                <textarea name="description" class="form-control" style="width: 100%; height: 100px;">

            <?php echo ($row['description']); ?>
        </textarea></td>
            <script type="text/javascript">
                CKEDITOR.replace("description");
            </script>
        </tr>
    </table>
    <table>


        <tr>
            Cập nhật hình ảnh <input style="width: 30px;" type="checkbox" name="isSelected" id="status">
            <br><br>
            <img style="width: 20%" src="../public/upload/tintuc/<?php echo $row['image']; ?>" alt="">
            <td id="ElementInput">
            </td>
            <td id="ElementInput1">
            </td>

            <br><br>

            <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript">
                $("#status").change(function() {
                    if ($('#status').is(':checked')) {
                        $('#ElementInput').append('<label>Thumbnail </label><input type="file" name="thumbnail">');
                        $('#ElementInput1').append('<label>Image </label><input type="file" name="image">');
                    } else {
                        $('#ElementInput').empty();
                        $('#ElementInput1').empty();
                    }
                });
            </script>
        </tr>

    </table>
    <br>
    <input type="submit" name="bt_submit" value="Cập nhật" class="btn btn-success">
</form>
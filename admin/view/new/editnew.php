<?php
$id = $_GET['id'];
$query = "SELECT * FROM new WHERE id ='" . $id . "'";
$db = mysqli_query($conn, $query);
$row = mysqli_fetch_array($db);

if (isset($_POST['bt_submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $description = $_POST['description'];
    $new_group_id = $_POST['new_group_id'];

    if (isset($_FILES["image"])) {

        if ($_FILES["image"]["name"] != null) {

            if (
                $_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif"
            ) {
                if ($_FILES["image"]["size"] > 1048576) {
                    echo ("<script language='javascript'>alert('File quá nặng');location.href='Index.php?page=editnew'</script>");
                }

                // kiem tra su ton tai cua file
                if (file_exists("" . $_FILES["image"]["name"])) {
                    echo ("<script language='javascript'>alert('file đã tồn tại');location.href='Index.php?page=editnew'</script>");
                } else {

                    $path = "../public/upload/tintuc/";
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $img = time() . $_FILES['image']['name'];
                    $type = $_FILES['image']['type'];
                    $size = $_FILES['image']['size'];
                    // Upload file
                    move_uploaded_file($tmp_name, $path . $img);

                    // xoa anh cu.
                    $sql = "SELECT image FROM new WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    if (file_exists('../public/upload/tintuc/' . $row['image'])) {
                        unlink('../public/upload/tintuc/' . $row['image']);
                    }

                    $sql = "UPDATE new SET title = '$title', content = '$content', description = '$description', new_group_id = '$new_group_id', image = '$img' WHERE id ='$id' ";

                    if (mysqli_query($conn, $sql)) {
                        echo ('<script>alert("Cập nhật tin tức thành công"); location.href="index.php?page=new"</script>');
                    }
                }
            } else {
                echo ('<script>alert("File được chọn không hợp lệ"); location.href="index.php?page=editnew"</script>');
            }
        }
    } else {
        $sql = "UPDATE new SET title = '$title', content = '$content', description = '$description', new_group_id = '$new_group_id' WHERE id ='$id' ";
        if (mysqli_query($conn, $sql)) {
            echo ('<script>alert("Cập nhật tin tức thành công"); location.href="index.php?page=new"</script>');
        }
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Mã tin tức</td>
            <td><input type="text" class="form-control" name="id" value="<?php echo ($row["id"]) ?>" readonly></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tiêu đề</td>
            <td><input type="text" class="form-control" name="title" value="<?php echo ($row["title"]) ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Nội dung</td>
            <td><input type="text" class="form-control" name="content" value="<?php echo ($row["content"]) ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Mã nhóm tin tức</td>
            <td>
                <select name="new_group_id" class="form-control" class="form-control">
                    <?php
                    $sqlGroup = "SELECT * FROM new_group";
                    $queryGroup = mysqli_query($conn, $sqlGroup);
                    while ($rowGroup = mysqli_fetch_array($queryGroup)) {
                        ?>
                        <option value="<?php echo ($rowGroup['id']); ?>"><?php echo ($rowGroup['name']); ?></option>
                    <?php
                } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td style="font-weight: bold;" colspan="2">Mô tả</td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="description" style="width: 100%; height: 200px;"><?php echo ($row["description"]); ?></textarea></td>
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

            <br><br>

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

    </table>
    <br>
    <input type="submit" name="bt_submit" value="Cập nhật" class="btn btn-success">
</form>
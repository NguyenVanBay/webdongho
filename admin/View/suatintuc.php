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
$tt = $_GET['tt'];
$query = "SELECT* FROM tbl_news_detail WHERE IdNews ='" . $tt . "'";
$db = mysqli_query($conn, $query);
$row = mysqli_fetch_array($db);

if (isset($_POST['bt_submit'])) {
    $id_new = $_POST['id_new'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $description = $_POST['description'];
    $id_group_new = $_POST['id_group_new'];

    if (isset($_FILES["image"])) {

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

                    // xoa anh cu.
                    $sql = "SELECT Image FROM tbl_news_detail WHERE IdNews = $id_new";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    if (file_exists('./upload/tintuc/' . $row['Image'])) {
                        unlink('./upload/tintuc/' . $row['Image']);
                    }

                    $sql = "UPDATE tbl_news_detail SET Title = '$title', Content = '$content', Description = '$description', IdNewsGroup = '$id_group_new', Image = '$name' WHERE IdNews ='$tt' ";

                    if (mysqli_query($conn, $sql)) {
                        echo ('<script>alert("Cập nhật tin tức thành công"); location.href="Index.php?page=quanlytintuc"</script>');
                    }
                }
            } else {
                echo ('<script>alert("File được chọn không hợp lệ"); location.href="Index.php?page=quanlytintuc"</script>');
            }
        }
    } else {
        $sql = "UPDATE tbl_news_detail SET Title = '$title', Content = '$content', Description = '$description', IdNewsGroup = '$id_group_new' WHERE IdNews ='$tt' ";
        if (mysqli_query($conn, $sql)) {
            echo ('<script>alert("Cập nhật tin tức thành công"); location.href="Index.php?page=quanlytintuc"</script>');
        }
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Mã tin tức</td>
            <td><input type="text" name="id_new" value="<?php echo ($row["IdNews"]) ?>" readonly></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tiêu đề</td>
            <td><input type="text" name="title" value="<?php echo ($row["Title"]) ?>"></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Nội dung</td>
            <td><input type="text" name="content" value="<?php echo ($row["Content"]) ?>"></td>
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
            <td style="font-weight: bold;">
                Cập nhật hình ảnh <input style="width: 30px;" type="checkbox" name="isSelected" id="status">
                <br>
                <img style="width: 20%" src="./upload/tintuc/<?php echo $row['Image']; ?>" alt=""></td>
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
            <td colspan="2"><textarea name="description" style="width: 100%; height: 200px;"><?php echo ($row["Description"]) ?></textarea></td>
            <script type="text/javascript">
                CKEDITOR.replace("description");
            </script>
        </tr>
    </table>
    <input type="submit" name="bt_submit" value="Cập nhật" class="nut_sub">
</form> 
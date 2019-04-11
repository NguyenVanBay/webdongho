<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        .oip {
            width: 100%;
            display: block;
            height: 30px;
            border: 0px;
            line-height: 100%;
        }
    </style>
</head>

<body>
    <?php 

    if (isset($_POST['bt_submit'])) {
        $namesp = $_POST['namesp'];
        $giacu = $_POST['giacu'];
        $giamoi = $_POST['giamoi'];
        $mansx = $_POST['mansx'];
        $mansp = $_POST['mansp'];
        $sl = $_POST['sl'];
        $Description = $_POST['Description'];

        if ($_FILES["image"]["name"] != null) {

            if (
                $_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif"
            ) {
                $path = "./upload/sanpham/";

                if ($_FILES["image"]["size"] > 1048576) {
                    echo ("<script language='javascript'>alert('File quá nặng');location.href='Index.php?page=quanlysanpham'</script>");
                }

                // kiem tra su ton tai cua file
                if (file_exists($path . $_FILES["image"]["name"])) {
                    echo ("<script language='javascript'>alert('File đã tồn tại');location.href='Index.php?page=themsanpham'</script>");
                } else {

                    $tmp_name = $_FILES['image']['tmp_name'];
                    $name = $_FILES['image']['name'];
                    $type = $_FILES['image']['type'];
                    $size = $_FILES['image']['size'];
                    // Upload file
                    move_uploaded_file($tmp_name, $path . $name);

                    $sql = "INSERT INTO tbl_product_detail(	NameProduct,OldPrice,NewPrice,IdProducer,Description,IdGroupProduct,Amount,Image) VALUES ('$namesp','$giacu','$giamoi','$mansx','$Description','$mansp','$sl','$name')";
                    if (mysqli_query($conn, $sql)) {
                        echo ("<script language='javascript'>alert('Thêm thành công');location.href='Index.php?page=quanlysanpham'</script>");
                    }
                }
            } else {
                echo ("<script language='javascript'>alert('File không đúng định dạng');location.href='Index.php?page=themsanpham'</script>");
            }
        } else {
            echo ("<script language='javascript'>alert('File chưa tồn tại');location.href='Index.php?page=themsanpham'</script>");
        }
    }

    ?>
    <form method="POST" enctype="multipart/form-data">
        <table class="table table-striped table-bordered">
            <tr>
                <td style="font-weight: bold;">Tên sản phẩm</td>
                <td><input type="text" name="namesp" class="oip"></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Giá cũ</td>
                <td><input type="number" name="giacu" class="oip"></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Giá mới</td>
                <td><input type="number" name="giamoi" class="oip"></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Mã nhà sản xuất</td>
                <td>
                    <select class="oip" name="mansx">
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
                    <select class="oip" name="mansp">
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
                <td><input type="number" name="sl" class="oip" minlength="1" maxlength="1000"></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Thumbnail</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td style="font-weight: bold;" colspan="2">Mô tả</td>
            </tr>
            <tr>
                <td colspan="2"><textarea name="Description" style="width: 100%; height: 100px;"></textarea></td>
                <script type="text/javascript">
                    CKEDITOR.replace("Description");
                </script>
            </tr>
        </table>
        <input type="submit" name="bt_submit" value="Thêm sản phẩm" class="btn btn-success">
    </form>
</body>

</html> 
<?php
$id = $_GET['id'];
$query = "SELECT product.*, category.name as category_name , producer.name as producer_name FROM product "
        . " INNER JOIN category on category.id = product.category_id "
        . " INNER JOIN producer on producer.id = product.producer_id "
        . " WHERE product.id ='" . $id . "'";

$db = mysqli_query($conn, $query);
$row = mysqli_fetch_array($db);
?>

    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Mã sản phẩm</td>
            <td><?php echo ($row["id"]) ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tên sản phẩm</td>
            <td><?php echo ($row["name"]) ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Giảm giá</td>
            <td><?php echo ($row["sale"]) ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Giá</td>
            <td><?php echo ($row["price"]) ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Nhà cung cấp</td>
            <td><?php echo ($row["producer_name"]) ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Mô tả</td>
            <td><?php echo ($row["description"]) ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Thể loại</td>
            <td><?php echo ($row["category_name"]) ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Thumbnail</td>
            <td><img src="../public/upload/product/<?php echo ($row["thumbnail"]) ?>" alt=""></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Ảnh</td>
            <td><img src="../public/upload/product/<?php echo ($row["image"]) ?>" alt=""></td>
        </tr>
    </table>
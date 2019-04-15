<?php

$id = $_GET['id'];
$trangthai1 = $_GET['tt1'];
$trangthai2 = $_GET['tt2'];


$sql = "SELECT * from bill_detail LEFT JOIN warehouse ON warehouse.product_id = bill_detail.product_id  LEFT JOIN product ON product.id = bill_detail.product_id where bill_detail.bill_id = '$id' ";
// echo $sql;



if ($trangthai1 == 'Đang chờ duyệt' && $trangthai2 == 'Đang giao hàng') {

    $query = mysqli_query($conn, $sql);
    $trangthaikho = "";
    // check kho.
    while ($row = mysqli_fetch_array($query)) {
        if ($row['inventory_actual'] < $row['amount']) {
            $trangthaikho .= $row['name'] . " không đủ trong kho \\n";
        }
    }

    if ($trangthaikho != "") {
        echo ('<script language = javascript>alert("' . $trangthaikho . '");location.href="index.php?page=warehouse"</script>');
        die;
    }

    $query = mysqli_query($conn, $sql);
    // update số lượng.
    while ($row = mysqli_fetch_array($query)) {
        $inventory = $row['inventory'] - $row['amount'];
        $inventory_actual = $row['inventory_actual'] - $row['amount'];
        $product_id = $row['product_id'];
        // echo $row['product_id'];

        $sql = "UPDATE warehouse SET inventory = '$inventory', inventory_actual = '$inventory_actual' where warehouse.product_id = '$product_id' ";
        // echo ($sql);
        if (mysqli_query($conn, $sql)) {
            // echo ('<script>alert("Cập nhật thành công"); location.href="index.php?page=warehouse"</script>');
        }
    }
} else if ($trangthai1 == 'Đang giao hàng' && $trangthai2 == 'Đã giao hàng') {
    // không trừ số lượng.
} else if ($trangthai1 == 'Đã giao hàng' && $trangthai2 == 'Hủy đơn hàng') {
    $query = mysqli_query($conn, $sql);
    // update số lượng.
    while ($row = mysqli_fetch_array($query)) {
        $inventory = $row['inventory'] + $row['amount'];
        $inventory_actual = $row['inventory_actual'] + $row['amount'];
        $product_id = $row['product_id'];
        // echo $row['product_id'];

        $sql = "UPDATE warehouse SET inventory = '$inventory', inventory_actual = '$inventory_actual' where warehouse.product_id = '$product_id' ";
        // echo ($sql);
        if (mysqli_query($conn, $sql)) {
            // echo ('<script>alert("Cập nhật thành công"); location.href="index.php?page=warehouse"</script>');
        }
    }
}

$sql = "UPDATE bill SET status = '$trangthai2' WHERE id = '$id'";
if (mysqli_query($conn, $sql))
    echo ('<script language = javascript>alert("Thành công");location.href="index.php?page=bill"</script>');

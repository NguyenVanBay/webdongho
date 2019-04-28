<?php
session_start();
include('../../connection/connection.php');
if (isset($_POST['type']) && $_POST['type'] == 'removeCart') {
    $id = (int)$_POST['id'];
    $listProduct = [];
    if (isset($_SESSION['listProduct'])) {
        $listProduct = $_SESSION['listProduct'];
    }


    $tongtien = 0;

    foreach ($listProduct as $key => $value) {
        $masanpham = (int)$value['masanpham'];
        $soluong = (int)$value['soluong'];
        $query = "select * from product where id = ' $masanpham' ";
        $db = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($db);

        if ($masanpham == $id) {
            array_splice($listProduct, $key, 1);
        } else {
            $tongtien += $row['price'] * $soluong;
        }
    }
    $_SESSION['listProduct'] = $listProduct;
    echo $tongtien;
}

if (isset($_POST['type']) && $_POST['type'] == 'updatesoluong') {
    $listProduct = [];
    if (isset($_SESSION['listProduct'])) {
        $listProduct = $_SESSION['listProduct'];
    }
    foreach ($listProduct as $key => $value) {
        $masanpham = (int)$value['masanpham'];
        $soluong = (int)$value['soluong'];
        $query = "select * from product where id = ' $masanpham' ";
        $db = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($db);

        $soluongmoi = $_POST['soluongsanpham' . $value['masanpham']];
        $tongtien = $soluongmoi * $row['price'];

        $listProduct[$key] = ['soluong' => $soluongmoi, 'masanpham' => $masanpham, 'tongtien' => $tongtien];
        
    }
    $_SESSION['listProduct'] = $listProduct;
    
    echo json_encode($listProduct);
}

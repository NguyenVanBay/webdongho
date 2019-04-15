<?php

include ('../connection.php');

if(isset($_POST['type']) && $_POST['type'] == 'getproductbyid') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM product where id = '$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($query);
    echo json_encode($row);
}

?>
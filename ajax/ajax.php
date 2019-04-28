<?php
session_start();
include('../connection/connection.php');
include "../libraries/send_email/src/PHPMailer.php";
include "../libraries/send_email/src/Exception.php";
include "../libraries/send_email/src/OAuth.php";
include "../libraries/send_email/src/POP3.php";
include "../libraries/send_email/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['type']) && $_POST['type'] == 'getproductbyid') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM product where id = '$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($query);
    echo json_encode($row);
}


if (isset($_POST['type']) && $_POST['type'] == 'addToCart') {

    // $_SESSION['listProduct'] = []; die;


    $id = (int)$_POST['id'];
    $soluongThem = (int)$_POST['soluong'];

    // echo "soluong " . $soLuong;

    $listProduct = [];

    if (isset($_SESSION['listProduct'])) {
        $listProduct = $_SESSION['listProduct'];
    }

    $check = 1;
    foreach ($listProduct as $key => $value) {
        $masanpham = (int)$value['masanpham'];
        $soluongMoi = (int)$value['soluong'] + $soluongThem;
        // echo 'soluong' . (int)$value['soluong'];
        // echo 'moi' . $soluongMoi;
        // echo 'them' . $soluongThem;
        if ($masanpham == $id) {
            $listProduct[$key] = ['masanpham' => $masanpham, 'soluong' => $soluongMoi];
            $check = 0;
            break;
        }
    }

    if ($check == 1) {
        array_push($listProduct, ['masanpham' => $id, 'soluong' => $soluongThem]);
    }

    $_SESSION['listProduct'] = $listProduct;

    $tongsanpham = 0;
    $tongtien = 0;

    // nếu data yêu cầu là json thì trả về ds phần tử.
    if (isset($_POST['data']) && ($_POST['data'] == 'json')) {
        foreach ($listProduct as $key => $value) {
            $masanpham = (int)$value['masanpham'];
            $soluong = (int)$value['soluong'];
            $query = "select * from product where id = ' $masanpham' ";
            $db = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($db);

            $tongtien += $soluong * ((int)($row['price'] - (int)$row['price'] * ((int)$row['sale'] / 100)));
            $tongsanpham += $soLuong;

            echo json_encode($listProduct);
        }
    }
    ?>


    <!-- <script type="text/javascript" src="public/web/js/ajaxcart.js"></script>
    <script type="text/javascript" src="public/web/js/ajaxcart_effect.js"></script> -->

    <script>
        // jquery code.
        jQuery.noConflict();
        (function($) {
            $('.updateProductCart').submit(function(e) {
                e.preventDefault();

                var form = $(this);

                // update cart
                $.ajax({
                    type: "post",
                    url: "ajax/ajax.php",
                    data: form.serialize(),
                    dataType: "json",
                    success: function(response) {
                        console.log('edit thanh cong');

                        let soluong = response['soluong'];
                        let masanpham = response['masanpham'];
                        // update html.
                        $.ajax({
                            type: "post",
                            url: "ajax/ajax.php",
                            data: {
                                type: 'getinfo',
                                id: masanpham
                            },
                            dataType: "json",
                            success: function(response) {
                                console.log('get thanh cong');
                                console.log(response);
                                $('#soluongsanpham_footer').html(response['tongsanpham']);
                                $('#soluongsanpham_header').html(response['tongsanpham']);
                                $('#tongtien_footer').html(response['tongtien'] + ' đ');
                                $('#tongtien_header').html(response['tongtien'] + ' đ');
                                $('#soluongsanpham' + masanpham).html(soluong);
                            }
                        });
                    }
                });

            });

        })(jQuery);
    </script>


    <div class="cart-icon"></div>


    <div class="cart-items">
        <ul class="cart-products-list">
            <?php

            $tongtien = 0;
            $tongsanpham = 0;

            foreach ($listProduct as $key => $value) {
                $masanpham = (int)$value['masanpham'];
                $soluong = (int)$value['soluong'];
                $query = "select * from product where id = '$masanpham'";
                $db = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($db);

                $tongtien += $soluong * ((int)($row['price'] - (int)$row['price'] * ((int)$row['sale'] / 100)));
                $tongsanpham += $soluong;

                ?>
                <li class="cart-item">
                    <div class="product">
                        <strong id="soluongsanpham<?= $masanpham ?>"><?= $soluong ?></strong>
                        <span class="product-image"><img class="img-responsive" src="public/upload/product/<?= $row['thumbnail'] ?>"></span>
                    </div>

                    <div class="product-details">
                        <div class="product-hover-container">
                            <div class="product-hover-inner">
                                <form class="ajax-update-cart updateProductCart">
                                    <input type="hidden" name="masanpham" value="<?= $masanpham ?>">
                                    <input class="item-qty cart-item-qty" name="soluong" value="">
                                    <input type="hidden" name="type" value="editCart">
                                    <button type="submit" title="OK" class="btn-edit">OK</button>
                                    <!-- <a title="Remove This Item" masanpham="<?= $masanpham ?>" class="xoaSanPham btn-remove">Xóa Item</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            <?php
        }
        ?>

        </ul>
    </div>

    <div class="check-out">
        <div class="summary">
            <div class="cart-total-title">
                <h4>Số sản phẩm</h4>
                <p class="amount"><a href="#" id="soluongsanpham_footer"><?= $tongsanpham ?></a> </p>
            </div>
            <div class="subtotal">
                <div class="sub-total-label">Tổng tiền</div> <span class="price" id="tongtien_footer"><?= $tongtien ?> đ</span>
            </div>
        </div>
        <div class="actions">
            <a type="button" href="?page=checkout" title="Checkout" style="display: block; border: 2px solid #1d71ab; padding: 3px 13px;" class="button"><span><span>Checkout</span></span></a><br>
            <a type="button" href="?page=cart" title="Checkout" style="border: 2px solid #1d71ab; padding: 3px 16px;" class="button"><span><span>Giỏ hàng</span></span></a>
        </div>
    </div>
<?php
}

if (isset($_POST['type']) && $_POST['type'] == 'editCart') {


    $masanpham = (int)$_POST['masanpham'];
    $soLuongMoi = (int)$_POST['soluong'];
    $listProduct = [];

    if (isset($_SESSION['listProduct'])) {
        $listProduct = $_SESSION['listProduct'];
    }

    foreach ($listProduct as $key => $value) {
        $masanphamTemp = (int)$value['masanpham'];
        if ($masanpham == $masanphamTemp) {
            $listProduct[$key] = ['masanpham' => $masanpham, 'soluong' => $soLuongMoi];
            break;
        }
    }

    $_SESSION['listProduct'] = $listProduct;

    echo json_encode(['masanpham' => $masanpham, 'soluong' => $soLuongMoi]);
}


if (isset($_POST['type']) && $_POST['type'] == 'getinfo') {

    $listProduct = [];

    if (isset($_SESSION['listProduct'])) {
        $listProduct = $_SESSION['listProduct'];
    }

    $tongtien = 0;
    $tongsanpham = 0;

    foreach ($listProduct as $key => $value) {
        $masanpham = (int)$value['masanpham'];
        $soluong = (int)$value['soluong'];
        $query = "select * from product where id = '$masanpham'";
        $db = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($db);

        $tongtien += $soluong * ((int)($row['price'] - (int)$row['price'] * ((int)$row['sale'] / 100)));
        $tongsanpham += $soluong;
    }

    echo json_encode(['tongtien' => $tongtien, 'tongsanpham' => $tongsanpham]);
}

if (isset($_POST['type']) && $_POST['type'] == 'gethuyen') {

    $matinh = $_POST['matinh'];

    $sql = "select * from district where provinceid = '$matinh'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <option value="<?= $row['districtid'] ?>"><?= $row['name'] ?></option>
    <?php
}
}

if (isset($_POST['type']) && $_POST['type'] == 'checkout') {

    $name = $_POST['name'];
    $email  = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $tinh = $_POST['tinh'];
    $huyen = $_POST['huyen'];
    $kieuthanhtoan = $_POST['kieuthanhtoan'];
    $note = $_POST['note'];

    $listProduct = [];

    if (isset($_SESSION['listProduct'])) {
        $listProduct = $_SESSION['listProduct'];
    }

    $sql = "INSERT INTO bill (name, email, note, address, phone, status, district_id) VALUES('$name', '$email', '$note', '$address', '$phone', 'Đang chờ duyệt', '$huyen')";

    if (mysqli_query($conn, $sql)) { }

    $last_id = $conn->insert_id;

    $tongsanpham = 0;
    $tongtien = 0;

    $ttsanpham = '<tr>
    <th class="text-xs-center">TÊN SẢN PHẨM</th>
    <th class="text-xs-center">ĐƠN GIÁ</th>
    <th class="text-xs-center">SỐ LƯỢNG</th>
    <th class="text-xs-center">THÀNH TIỀN</th>
</tr>';

    foreach ($listProduct as $key => $value) {

        $masanpham = (int)$value['masanpham'];
        $soluong = (int)$value['soluong'];
        $query = "select * from product where id = ' $masanpham' ";
        $db = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($db);

        $giamotsanpham = ((int)($row['price'] - (int)$row['price'] * ((int)$row['sale'] / 100)));
        $giatheosp = $giamotsanpham * $soluong;
        $tongtien += $giatheosp;
        $tongsanpham += $soluong;

        $ttsanpham .= '<tr>
                            <td height="50px">' . $row['name'] . '</td>
                            <td height="50px">' . $giamotsanpham . '</td>
                            <td height="50px">' . $soluong . '</td>
                            <td height="50px">' . $giatheosp . '</td>
</tr>';

        $sql = "INSERT INTO bill_detail (bill_id, product_id, amount) VALUES('$last_id', '$masanpham', '$soluong')";

        if (mysqli_query($conn, $sql)) { }
    }

    $_SESSION['listProduct'] = [];

    $html = "<html>
<head>
    <title>Thông tin khách hàng</title>
</head>

<body>
<h3 style='text-align: center'>Thông tin khách hàng</h3>
    <table style='width:'60%; margin-left:20%' border='1' cellspacing='0'>
        <tr>
            <th height='50px'>Họ tên người mua:</th>
            <td width='80%'>$name</td>
        </tr>
        <tr>
            <th height='50px'>Số điện thoại:</th>
            <td>$phone</td>
        </tr>
        <tr>
            <th height='50px'>Email:</th>
            <td>$email</td>
        </tr>
        <tr>
            <th height='50px'>Số lượng sản phẩm:</th>
            <td>$tongsanpham</td>
        </tr>
        <tr>
            <th height='50px'>Số tiền:</th>
            <td>$tongtien VNĐ</td>
        </tr>
        <tr>
            <th height='50px'>Tin nhắn:</th>
            <td>$note</td>
        </tr>
    </table>
    <h3 style='text-align: center'>Thông tin sản phẩm</h3>
    
    <table style='width:'60%; margin-left:20%' border='1' cellspacing='0' >$ttsanpham</table>
    
</body>

</html>";



    $mail = new PHPMailer(true); // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2; // hiện lỗi.
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // ssử dụng gmail
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'nguyenvanbay.no1@gmail.com'; // SMTP username
        $mail->Password = 'ABC147258369ABCD'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->CharSet = "utf-8";
        $mail->setFrom('nguyenvanbay.no1@gmail.com', 'Nhóm thương mại điện tử');
        $mail->addAddress($email);

        // cấu hình email.
        $mail->isHTML(true);
        $mail->Subject = 'Thông tin sản phẩm thuê của cửa hàng';
        $mail->Body = $html;

        $mail->send();
        echo 'Đã gửi tin';
    } catch (Exception $e) {
        echo 'không thể gửi tin ', $mail->ErrorInfo;
    }
}

?>
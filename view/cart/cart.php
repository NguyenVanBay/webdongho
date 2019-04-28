<?php

include_once('view/config/config.php');

$listProduct = [];

if (isset($_SESSION['listProduct'])) {
    $listProduct = $_SESSION['listProduct'];
}

?>
<div class="row">
    <div class="col-sm-24 cdz-area02" style="margin: 20px 0px; padding: 10px 10px;">
        <div class="cart" style="background: #fff; padding: 10px;">
            <h1 class="title-head hidden"><a href="#">Giỏ hàng</a></h1>
            <form id="updatesoluongCart" method="post">
                <input type="hidden" name="type" value="updatesoluong">
                <div class="table-block">
                    <div class="table-responsive text-xs-center">
                        <table class="table table-bordered table-cart">
                            <thead>
                                <tr>
                                    <th class="text-xs-center">HÌNH ẢNH</th>
                                    <th class="text-xs-center">TÊN SẢN PHẨM</th>
                                    <th class="text-xs-center">ĐƠN GIÁ</th>
                                    <th class="text-xs-center">SỐ LƯỢNG</th>
                                    <th class="text-xs-center">THÀNH TIỀN</th>
                                    <th class="text-xs-center">XÓA</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $tongsanpham = 0;
                                $tongtien = 0;

                                foreach ($listProduct as $key => $value) {
                                    $masanpham = (int)$value['masanpham'];
                                    $soluong = (int)$value['soluong'];
                                    $query = "select * from product where id = ' $masanpham' ";
                                    $db = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($db);

                                    $tongtien += $soluong * ((int)($row['price'] - (int)$row['price'] * ((int)$row['sale'] / 100)));
                                    $tongsanpham += $soluong;

                                    ?>
                                    <tr id="sanpham<?= $row['id'] ?>">
                                        <td>
                                            <a class="img-product-cart">
                                                <img src="public/upload/product/<?= $row['thumbnail'] ?>" style="width:120px">
                                            </a>
                                        </td>
                                        <td>
                                            <h2>
                                                <a class="name-product-cart" href="#"><?= $row['name'] ?></a>
                                            </h2>
                                        </td>
                                        <td><span class="product-price"><?= $row['price'] ?></span></td>
                                        <td>
                                            <input type="number" max="50" title="Số lượng" class="inp-number" name="soluongsanpham<?= $row['id'] ?>" value="<?= $value['soluong'] ?>" name="soluong" min="1">
                                        </td>
                                        <td><span class="product-price" id="thanhtien<?= $row['id'] ?>"><?= $value['soluong'] * $row['price'] ?></span></td>
                                        <td>
                                            <a class="button xoasanpham" title="Xóa" masanpham="<?= $row['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <script>
                    // jquery code.
                    jQuery.noConflict();
                    (function($) {

                        // xoa san pham khoi gio hang.
                        $('.xoasanpham').click(function() {

                            var masanpham = $(this).attr('masanpham');

                            $.ajax({
                                type: "post",
                                url: "view/cart/todoCart.php",
                                data: {
                                    type: 'removeCart',
                                    id: masanpham
                                },
                                dataType: "text",
                                success: function(response) {
                                    $('#sanpham' + masanpham).html('');
                                    $('#tongtientra').html(response);
                                }
                            });
                        });

                        // update form.
                        $('#updatesoluongCart').submit(function(e) {

                            e.preventDefault();

                            var form = $(this);

                            // update cart
                            $.ajax({
                                type: "post",
                                url: "view/cart/todoCart.php",
                                data: form.serialize(),
                                dataType: "json",
                                success: function(response) {

                                    console.log(typeof(response));
                                    console.log(response);

                                    let tongtien = 0;

                                    response.forEach(element => {
                                        $('#thanhtien' + element['masanpham']).html(element['tongtien']);
                                        tongtien += element['tongtien'];
                                    });

                                    $('#tongtientra').html(tongtien);

                                }
                            });
                        });


                    })(jQuery);
                </script>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="no-border">
                            <input type="submit" name="update_cart" value="Cập nhật" class="btn btn-lg btn-style  btn-dark btn-style-active pull-xs-left"><br><br>
                            <a class="btn btn-lg btn-style btn-dark pull-xs-left" title="Tiếp tục mua hàng" type="button" href="<?= $base_url; ?>">Tiếp tục mua sắm</a>
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-offset-10 pull-xs-right">
                        <table class="table table-bordered table-cart-total">
                            <tbody>
                                <tr>
                                    <td class="text-xs-left">Tổng giá sản phẩm</td>
                                    <td class="text-xs-right">
                                        <div id="tongtientra" class="product-price"><?= $tongtien ?> VND</div>
                                    </td>
                                </tr>
                                <!-- <tr>
                                <td class="text-xs-left">Thuế</td>
                                <td class="text-xs-right">
                                    <div class="product-price">Tính lúc thanh toán</div>
                                </td>
                            </tr> -->
                                <tr>
                                    <td class="text-xs-left">Phí vận chuyển</td>
                                    <td class="text-xs-right">
                                        <div class="product-price">Tính lúc thanh toán</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="?page=checkout" class="btn btn-lg btn-style pull-xs-right btn-checkout width100" title="Tiến hành thanh toán" type="button"><span>Check out</span></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
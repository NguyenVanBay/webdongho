<?php


include_once('view/config/config.php');

$listProduct = [];

if (isset($_SESSION['listProduct'])) {
    $listProduct = $_SESSION['listProduct'];
}

?>

<div class="container">
    <div class="row">
        <form method="post" id="checkout">
            <input type="hidden" name="type" value="checkout">
            <div class="col-md-16">
                <div class="sidebar">
                    <div class="sidebar__content">
                        <div class="form-horizontal" method="post">
                            <div class="form-group ">
                                <label class="control-label col-md-6" for="cus_fullname"> Tên người dùng (<span class="error1">*</span>): </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" id="cus_fullname" value="" placeholder="Nhập tên người dùng">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-md-6" for="cus_email">Email (<span class="error1">*</span>):</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email" id="cus_email" value="" placeholder="Nhập Email">
                                </div>
                            </div>
                            <hr>

                            <div class="form-group ">
                                <label class="control-label col-md-6" for="cus_phone">Số điện thoại (<span class="error1">*</span>):</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="cus_phone" name="phone" value="" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-md-6" for="cus_xa">Địa chỉ (<span class="error1">*</span>):</label>
                                <div class="col-md-10">
                                    <input rows="4" class="form-control" id="cus_xa" name="address" value="" placeholder="Nhập địa chỉ">
                                </div>
                            </div>
                            <hr>

                            <div class="form-group ">
                                <label class="control-label col-md-6" for="cus_xa">Tỉnh / thành (<span class="error1">*</span>):</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="tinhthanh" name="tinh">
                                        <?php

                                        $sql = "select * from province";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <option value="<?= $row['provinceid'] ?>"><?= $row['name'] ?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group ">
                                <label class="control-label col-md-6" for="cus_xa">Quận / Huyện (<span class="error1">*</span>):</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="huyen" name="huyen">
                                        <option disabled="" selected="">--Huyện--</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-6" for="kieu">Kiểu thanh toán :</label>
                                <div class="col-md-10">
                                    <div class="checkbox">
                                        <label><input type="radio" id="sex" value="the" name="kieuthanhtoan" checked="checked"> Thẻ</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="radio" name="kieuthanhtoan" value="tienmat"> Tiền mặt</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-md-6" for="cus_note">Tin nhắn:</label>
                                <div class="col-md-16">
                                    <textarea rows="6" class="form-control" id="cus_note" name="note" value="" placeholder="..."></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="sidebar">
                    <div class="sidebar_header">
                        <h2>
                            <label class="control-label">Đơn hàng</label>
                            <label class="control-label">(<?= sizeof($listProduct) ?> sản phẩm)</label>
                        </h2>
                        <hr>
                    </div>
                    <div class="sidebar__content">
                        <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                            <div class="summary-body summary-section summary-product">
                                <div class="summary-product-list">
                                    <table class="product-table">
                                        <tbody>
                                            <?php
                                            $tongtien = 0;
                                            $tongsanpham = 0;

                                            foreach ($listProduct as $key => $value) {
                                                $masanpham = (int)$value['masanpham'];
                                                $soluong = (int)$value['soluong'];
                                                $query = "select * from product where id = ' $masanpham' ";
                                                $db = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_array($db);

                                                $tongtien += $soluong * ((int)($row['price'] - (int)$row['price'] * ((int)$row['sale'] / 100)));
                                                $tongsanpham += $soluong;

                                                ?>
                                                <tr class="product product-has-image clearfix">
                                                    <td>
                                                        <div class="product-thumbnail">
                                                            <div class="product-thumbnail__wrapper">
                                                                <img src="public/upload/product/<?= $row['thumbnail'] ?>" class="product-thumbnail__image">
                                                            </div>
                                                            <span class="product-thumbnail__quantity" aria-hidden="true"><?= $soluong ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="product-info">
                                                        <span class="product-info-name">
                                                            <?= $row['name'] ?></span>
                                                    </td>
                                                    <td class="product-price text-right">
                                                        <strike>(<?= $soluong * (int)($row['price']) ?> đ)</strike>
                                                        <span><?= $soluong * ((int)($row['price'] - (int)$row['price'] * ((int)$row['sale'] / 100))) ?> ₫</span>
                                                    </td>
                                                </tr>
                                            <?php
                                        }

                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="order-summary order-summary--total-lines">
                            <div class="summary-section border-top-none--mobile">
                                <div class="total-line total-line-subtotal clearfix">
                                    <span class="total-line-name pull-left">
                                        Tạm tính
                                    </span>
                                    <span class="total-line-subprice pull-right"><?= $tongtien ?> ₫</span>
                                </div>
                                <div class="total-line total-line-shipping clearfix" bind-show="requiresShipping">
                                    <span class="total-line-name pull-left">
                                        Phí vận chuyển
                                    </span>
                                    <span class="pull-right" id="giatienship">0₫</span>
                                    <span id="ship" hidden=""></span>
                                </div>
                                <div class="total-line total-line-total clearfix">
                                    <span class="total-line-name pull-left">
                                        Tổng cộng
                                    </span>
                                    <span class="total-line-price pull-right" id="tongcong"><?= $tongtien ?> ₫</span>
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group clearfix hidden-sm hidden-xs">
                            <div class="field__input-btn-wrapper mt10">
                                <a class="previous-link" href="<?= $base_url ?>?page=cart">
                                    <i class="fa fa-arrow-circle-left fa-md"></i>
                                    <span>Quay về giỏ hàng</span>
                                </a>
                                <input class="btn btn-primary btn-checkout pull-right" name="checkout" type="submit" value="ĐẶT HÀNG">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
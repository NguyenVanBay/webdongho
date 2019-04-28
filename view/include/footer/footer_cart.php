<div id="cart-footer-my" id="footer-cart" style="position:fixed; bottom:0; left:0; width:100%; z-index:10000; background:#FFF;">
    <div class="cart-footer-inner" id="cart-footer-inner">
        <!-- <a class="cart-trigger" id="showcart"></a> -->
        <div class="cart-content" id="cart-footer-product">
            <?php

            $listProduct = [];

            if (isset($_SESSION['listProduct'])) {
                $listProduct = $_SESSION['listProduct'];
            }

            $_SESSION['listProduct'] = $listProduct;

            ?>
            <div class="cart-icon"></div>


            <div class="cart-items">
                <ul class="cart-products-list">
                    <?php

                    $tongsanpham = 0;
                    $tongtien = 0;

                    foreach ($listProduct as $key => $value) {
                        $masanpham = $value['masanpham'];
                        $soluong = $value['soluong'];
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
                    <a type="button" href="?page=checkout" title="Checkout" style="display: block; margin-bottom: 0px; border: 2px solid #1d71ab; padding: 3px 13px;" class="button"><span><span>Checkout</span></span></a><br>
                    <a type="button" href="?page=cart" title="Checkout" style="border: 2px solid #1d71ab; padding: 3px 16px;" class="button"><span><span>Giỏ hàng</span></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
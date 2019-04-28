<div class="cdz-header-bottom no-padding sticky-menu has-sticky-menu active">
    <div class="cdz-header-bottom-content">
        <div class="cdz-bottom-logo-cart">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 cdz-header-logo">
                        <h1 class="logo"><strong>Watch Shop</strong><a href="<?php echo $base_url; ?>" title="Fastest" class="logo"><img src="public/upload/logo.png" alt="Fastest"></a></h1>
                    </div>
                    <div class="search-wrapper col-sm-9 col-sm-push-1">
                        <div class="search-content block block-search">
                            <div class="search-form-container" id="cdz-pc-search-form">
                                <form id="search_mini_form" action="" method="get">
                                    <div class="form-search cat-search-enable">
                                        <label for="search">Tìm kiếm:</label>
                                        <div class="search-input-wrap">
                                            <input type="hidden" name="cat" id="cdz-catsearch" value="">
                                            <div class="cat-input hidden-xs"><span class="current-cat cdz-trigger dd-trigger">Thể loại</span>
                                                <ul class="cat-tree cdz-dropdown-content dd-content" style="display:none">
                                                    <li data-cat="0">Thể loại</li>
                                                    <li data-cat="91">&nbsp;&nbsp;&nbsp;loại 1 </li>
                                                    <li data-cat="120">&nbsp;&nbsp;&nbsp;loại 2</li>
                                                </ul>
                                            </div>
                                            <script>
                                                jQuery('#search_mini_form').cdzCatSearch();
                                            </script>
                                            <input placeholder="Tìm kiếm tại đây..." id="search" type="text" name="q" value="" class="input-text" maxlength="128" autocomplete="off">
                                        </div>
                                        <button type="submit" title="Search" class="button"><span><span>Tìm kiếm</span></span></button>
                                        <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget-static-block">
                            <div class="row hidden-xs">
                                <div class="col-sm-15">
                                    <div class="header-phone pull-left"><span class="fa fa-truck">&nbsp;</span><span>Nguyễn Văn Bảy - 0962199791</span>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="header-help pull-right"><span><a title="Help" href="#">Giúp đỡ</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php

                    $listProduct = [];

                    if (isset($_SESSION['listProduct'])) {
                        $listProduct = $_SESSION['listProduct'];
                    }

                    $_SESSION['listProduct'] = $listProduct;

                    ?>
                    <?php

                    $tongtien = 0;
                    $tongsanpham = 0;

                    foreach ($listProduct as $key => $value) {
                        $masanpham = $value['masanpham'];
                        $soluong = $value['soluong'];
                        $query = "select * from product where id = '$masanpham'";
                        $db = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($db);

                        $tongtien += $soluong * ((int)($row['price'] - (int)$row['price'] * ((int)$row['sale'] / 100)));
                        $tongsanpham += $soluong;
                    }

                    ?>


                    <div class="col-sm-8 cart-wrapper">
                        <div class="cdz-header-cart">
                            <div class="cdz-top-cart cdz-dropdown">
                                <a class="cdz-trigger cart-icon dd-trigger" href="javascript:void(0)">
                                    <span class="cart-fa"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                    <span class="cart-label">Giỏ hàng</span>
                                    <span id="soluongsanpham_header" class="cart-qty"><?= $tongsanpham ?></span>
                                    <span class="cart-subtotal"><span class="price" id="tongtien_header"><?= $tongtien ?> VND</span></span>
                                </a>
                                <!-- <div class="block block-cart cdz-dropdown-content dd-content" style="display:none;">
                                    <div class="block-title">
                                        <strong><span>Giỏ hàng của tôi</span></strong>
                                    </div>
                                    <div class="block-content">
                                        <p class="empty">Bạn không có sản phẩm nào trong giỏ hàng</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cdz-header-menu">
            <div class="container">
                <div class="row">
                    <div class="cdz-header-menu-content  cdz-fix-left">
                        <div class="col-sm-6">
                            <div class="cdz-left-menu">
                                <div class="widget widget-static-block">
                                    <div class="space-small-base menu-vertical-block">
                                        <div class="menu-vertical-title">
                                            <h3>Watch Shop Xmen</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-18">
                            <div class="cdz-content-megamenu">
                                <div class="widget widget-static-block">
                                    <div class="cdz-main-menu">
                                        <div class="cdz-menu cdz-horizontal-menu  menu-wrapper cdz-translate" id="menu-17-5caf799860698" data-megamenu="{&quot;dropdownEffect&quot;:&quot;translate&quot;,&quot;type&quot;:&quot;0&quot;}">
                                            <ul class="groupmenu">



                                                <li class="item level0  level-top">
                                                    <a class="menu-link" href="<?php echo $base_url; ?>"><i class="menu-icon fa fa-home"></i>
                                                        <span><span>Trang chủ</span></span></a>
                                                </li>

                                                <?php

                                                $sql = "SELECT * FROM category where sort > '$from_menu_ngang' AND sort < '$to_menu_ngang' ORDER BY sort DESC";
                                                $query = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                    <li class="item level0  level-top">
                                                        <a class="menu-link" href="#">
                                                            <span><span><?= $row['name'] ?></span></span></a>
                                                    </li>
                                                <?php
                                            }

                                            ?>

                                                <li class="item level0  level-top">
                                                    <a class="menu-link" href="#">
                                                        <span><span>Liên hệ</span></span></a>
                                                </li>
                                                <li class="item level0  level-top">
                                                    <a class="menu-link" href="#"> <span><span>Bài viết</span></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
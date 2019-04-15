<div class="cdz-products col-sm-6 space-base">
    <div class="box-style06 product-list-style02">
        <div class="cdz-block-title">
            <p class="h2"><span>Phổ biến</span></p>
        </div>
        <div class="cdz-products-list">
            <div class="codazon-ajax-wrap loaded" id="ajax5caf79a589458">
                <div class="codazon-loader-wrap" style="display: none;"><span class="loader"></span></div>
                <div class="category-products codazon-filter codazon-list-style-03 " id="grid5caf8034505fe">
                    <div class="products-list">
                        <ul class="product-items">
                            <!-- sản phẩm -->

                            <?php

                            $sql = "SELECT * FROM product WHERE type = 'popular' ORDER BY price DESC LIMIT 4 ";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <li class="item product-item" style="min-height:auto;">
                                    <div class="product-item-info">
                                        <div class="cdz-product-left cdz-hover-section">
                                            <a href="#" title="Acer 14 Inch Celeron" class="product-image">
                                                <img width="70" height="70" class="img-responsive cdz-lazy" data-src="public/upload/product/<?php echo $row['thumbnail'] ?>" alt="Acer 14 Inch Celeron">
                                                <img width="70" height="70" data-src="public/upload/product/<?php echo $row['image'] ?>" alt="Acer 14 Inch Celeron" class="cdz-lazy alternative-img img-responsive">
                                            </a> F

                                            <a href="javascript:void(0)" class="qs-button" data-toggle="modal" data-target="#cdz-qsiframe">Quick
                                                shop</a>
                                        </div>

                                        <div class="cdz-product-right">
                                            <div class="product-item-details">
                                                <h2 class="product-name"><a href="#" title="Acer 14 Inch Celeron"><?= $row['name'] ?></a></h2>
                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-1170grid5caf803462e0d">
                                                        <span class="price"><?= $row['price'] ?>VND</span>
                                                    </span>

                                                </div>

                                            </div>
                                            <div class="cdz-product-bottom">
                                                <div class="cdz-buttons-container">
                                                    <div class="cdz-buttons-inner">
                                                        <div class="cart-wrapper">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php
                        }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                (function($) {
                    $(window).load(function() {
                        var loadProductsUrl =
                            'http://magento1.codazon.com/fastest/filterproducts/filterproducts/loadProductsBlock/';
                        var postData = {
                            "categories": "116,117",
                            "filtertype": "",
                            "attribute": "",
                            "orderby": "name",
                            "order": "asc",
                            "limit": "4",
                            "use_ajax": "1",
                            "custom_class": "",
                            "custom_template": "codazon_filterproducts\/home_list_style03.phtml",
                            "display": "name,image,label,price",
                            "thumb_width": "70",
                            "thumb_height": "70",
                            "columns_count": 1,
                            "use_slider": 0,
                            "auto_width": 0,
                            "margin": 0,
                            "items_1280": 4,
                            "items_1024": 3,
                            "items_768": 3,
                            "items_480": 3,
                            "items_320": 2,
                            "items_0": 1,
                            "auto_play": 0,
                            "show_dots": 0,
                            "show_nav": "1",
                            "lazy_load": 0,
                            "loop": 0,
                            "cur_page": 1,
                            "type": "filterproducts\/codazonfilterproducts",
                            "cache_lifetime": "1",
                            "cache_tags": ["CODAZON_FILTER"],
                            "cache_key": "BLOCK_codazon_filterproducts_34|0|USD|0|e1189af669615966cae524980ded3a91",
                            "module_name": "Codazon_Filterproducts",
                            "available_orders": {
                                "position": "Position",
                                "name": "Name",
                                "price": "Price"
                            },
                            "sort_by": "position",
                            "block_url": "http:\/\/magento1.codazon.com\/fastest\/"
                        };
                        var $productBlock = $('#ajax5caf79a589458');
                        $productBlock.cdzLoadProductBlock({
                            postData: postData,
                            loadProductsUrl: loadProductsUrl,
                            eventName: 'ajax5caf79a589458'
                        });
                    });
                })(jQuery);
            </script>
        </div>
    </div>
</div>
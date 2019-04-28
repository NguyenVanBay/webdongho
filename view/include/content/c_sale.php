<div class="cdz-block-title">
    <a href="javascript:void(0)" class="mobile-toggle visible-xs">Giảm giá</a>
    <ul class="nav nav-tabs hidden-xs abs-dropdown" id="cdz-nav-tabs-best-seller">
        <li class="item active"><a class="data switch" href="http://magento1.codazon.com/fastest/#best-seller-tab-1" data-role="tab_link">Giảm giá</a></li>
    </ul>
</div>

<div class="cdz-block-content">
    <div class="text-center box-content tab-content">
        <div class="tab-pane fade in active" id="best-seller-tab-1" data-role="content">
            <div class="codazon-ajax-wrap loaded" id="product-tab-11">
                <div class="codazon-loader-wrap" style="display: none;"><span class="loader"></span></div>


                <div class="codazon-filter codazon-filter-style-16 " id="grid5caf8033f40bc">
                    <div class="products-grid">
                        <div class="product-items owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1317px;">

                                    <?php

                                    $sql = "SELECT * FROM product WHERE sale != '0' ORDER BY price DESC ";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <!-- start product -->
                                        <div class="owl-item active" style="width: 199.5px; margin-right: 20px;">
                                            <ul class="item-group">
                                                <li class="item product-item">
                                                    <div class="product-item-info">
                                                        <div class="cdz-hover-section">
                                                            <div class="cdz-product-top">
                                                                <a href="#" title="Acer 14 Inch Celeron" class="product-image">
                                                                    <img class="img-responsive main-product-collection-image-1170" src="public/upload/product/<?php echo $row['thumbnail'] ?>" id="product-collection-image-1170" alt="Acer 14 Inch Celeron">
                                                                    <img src="public/upload/product/<?php echo $row['image'] ?>" alt="Acer 14 Inch Celeron" class="alternative-img img-responsive">
                                                                </a>
                                                            </div>
                                                            <ul class="cdz-product-lbs">
                                                                <li class="lb-item lb-sale">
                                                                    <div class="lb-content">-<?php echo $row['sale'] ?>%</div>
                                                                </li>
                                                            </ul>
                                                            <div class="addto-hover-container">

                                                                <div class="addto-button">
                                                                    <span data-toggle="modal" data-target="#cdz-qsiframe">
                                                                        <a href="#" class="qs-button" giatri="<?php echo $row['id'] ?>" data-original-title="Quick Shop" data-url="http://magento1.codazon.com/fastest/quickshop/index/view/id/1170/" data-toggle="tooltip">Quick
                                                                            shop</a>
                                                                    </span>

                                                                </div>

                                                                <a data-toggle="tooltip" data-original-title="Wishlist" href="#" class="action link-wishlist">Wishlist</a>

                                                                <a data-toggle="tooltip" data-original-title="Add to Compare" href="#" class="action link-compare">Compare</a>

                                                            </div>
                                                        </div>

                                                        <div class="product-item-details" style="height: 142px;">
                                                            <div class="info-details">

                                                                <h2 class="product-name">
                                                                    <a href="#" title="Acer 14 Inch Celeron"><?php echo $row['name'] ?></a>
                                                                </h2>
                                                                <div class="price-box">

                                                                    <p class="old-price">
                                                                        <span class="price-label">Giá gốc:</span>
                                                                        <span class="price" id="old-price-1185grid5caf8033a72c4">
                                                                            <?php echo $row['price'] ?> đ</span>
                                                                    </p>

                                                                    <p class="special-price">
                                                                        <span class="price-label">Giảm giá</span>
                                                                        <span class="price" id="product-price-1185grid5caf8033a72c4">
                                                                            <?php echo $row['price'] * ((100 - $row['sale']) / 100) ?> đ</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="product-item-inner">
                                                                <div class="cdz-buttons-container">
                                                                    <div class="cdz-buttons-inner">
                                                                        <button data-toggle="tooltip" data-original-title="Add to Cart" type="button"  msp="<?php echo $row['id']; ?>"  title="" class="button btn-cart"><span><span>Add to Cart</span></span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end -->
                                    <?php
                                }

                                ?>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="owl-prev disabled">Prev</div>
                                <div class="owl-next">Next</div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    var $container = $j('#grid5caf8033f40bc');
                    ConfigurableMediaImages.init('small_image');
                    ConfigurableMediaImages.setImageFallback(1170, {
                        "option_labels": [],
                        "small_image": {
                            "1170": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_11_1.jpg"
                        },
                        "base_image": []
                    });
                    ConfigurableMediaImages.setImageFallback(1166, {
                        "option_labels": [],
                        "small_image": {
                            "1166": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_7_1.jpg"
                        },
                        "base_image": []
                    });
                    ConfigurableMediaImages.setImageFallback(1168, {
                        "option_labels": [],
                        "small_image": {
                            "1168": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_9_1.jpg"
                        },
                        "base_image": []
                    });
                    ConfigurableMediaImages.setImageFallback(1171, {
                        "option_labels": [],
                        "small_image": {
                            "1171": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_12_1.jpg"
                        },
                        "base_image": []
                    });
                    ConfigurableMediaImages.setImageFallback(1167, {
                        "option_labels": [],
                        "small_image": {
                            "1167": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_8_1.jpg"
                        },
                        "base_image": []
                    });
                    ConfigurableMediaImages.setImageFallback(1169, {
                        "option_labels": [],
                        "small_image": {
                            "1169": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_10_1.jpg"
                        },
                        "base_image": []
                    });
                    $j(document).trigger('configurable-media-images-init', [
                        ConfigurableMediaImages, $container
                    ]);
                </script>
                <script type="text/javascript">
                    (function($) {
                        $(document).ready(function(e) {
                            var $wrapper = $('#grid5caf8033f40bc');
                            var $owl = $('.product-items',
                                $wrapper);
                            $owl.addClass('owl-carousel owl-theme');
                            $owl.owlCarousel({
                                autoplay: false,
                                autoplayTimeout: 5000,
                                smartSpeed: 250,
                                loop: false,
                                responsiveClass: true,
                                nav: true,
                                navText: ['Prev', 'Next'],
                                fluidSpeed: true,
                                responsive: {
                                    0: {
                                        items: 2
                                    },
                                    320: {
                                        items: 2
                                    },
                                    480: {
                                        items: 2
                                    },
                                    768: {
                                        items: 3
                                    },
                                    1024: {
                                        items: 4
                                    },
                                    1280: {
                                        items: 4
                                    }
                                },
                                margin: 20,
                                center: false,
                                dots: false
                            });
                            var makeSameHeight = function() {
                                $wrapper.sameHeightItems({
                                    parent: '.product-items',
                                    sItem: '.product-item-details'
                                });
                            };
                            $wrapper.find('.product-image').last()
                                .find('img').last().each(
                                    function() {
                                        if (this.complete) {
                                            makeSameHeight();
                                        } else {
                                            $(this).on(
                                                'load.setMaxHeight',
                                                function() {
                                                    makeSameHeight
                                                        ();
                                                    $(this).off(
                                                        'load.setMaxHeight'
                                                    );
                                                });
                                        }
                                    });
                            var timeout = false;
                            $(window).resize(function() {
                                if (timeout) clearTimeout(
                                    timeout);
                                timeout = setTimeout(
                                    makeSameHeight, 500);
                            });
                        });
                    })(jQuery);
                </script>

            </div>
            <script type="text/javascript">
                (function($) {
                    $(window).load(function() {
                        var loadProductsUrl =
                            'http://magento1.codazon.com/fastest/filterproducts/filterproducts/loadProductsBlock/';
                        var postData = {
                            "categories": "113",
                            "filtertype": "",
                            "attribute": "",
                            "orderby": "name",
                            "order": "asc",
                            "limit": "8",
                            "use_ajax": "1",
                            "custom_class": "",
                            "custom_template": "codazon_filterproducts\/home_grid_style16.phtml",
                            "display": "name,image,label,price,rating,addtocart_btn,wishlist_btn,compare_btn",
                            "thumb_width": "220",
                            "thumb_height": "220",
                            "columns_count": 1,
                            "use_slider": "1",
                            "auto_width": 0,
                            "margin": "20",
                            "items_1280": "4",
                            "items_1024": "4",
                            "items_768": "3",
                            "items_480": "2",
                            "items_320": "2",
                            "items_0": "2",
                            "auto_play": 0,
                            "show_dots": 0,
                            "show_nav": "1",
                            "lazy_load": 0,
                            "loop": 0,
                            "cur_page": 1,
                            "type": "filterproducts\/codazonfilterproducts",
                            "cache_lifetime": "1",
                            "uniq_id": "product-tab-11",
                            "cache_tags": ["CODAZON_FILTER"],
                            "cache_key": "BLOCK_codazon_filterproducts_34|0|USD|0|9e2658ec43b138e01ffa22f62969f542",
                            "module_name": "Codazon_Filterproducts",
                            "available_orders": {
                                "position": "Position",
                                "name": "Name",
                                "price": "Price"
                            },
                            "sort_by": "position",
                            "block_url": "http:\/\/magento1.codazon.com\/fastest\/"
                        };
                        var $productBlock = $('#product-tab-11');
                        $productBlock.cdzLoadProductBlock({
                            postData: postData,
                            loadProductsUrl: loadProductsUrl,
                            eventName: 'product-tab-11'
                        });
                    });
                })(jQuery);
            </script>
        </div>
        <div class="tab-pane fade" id="best-seller-tab-2" data-role="content">
            <div class="codazon-ajax-wrap" id="product-tab-12">
                <div class="codazon-loader-wrap" style="display: none;"><span class="loader"></span></div>
            </div>
            <script type="text/javascript">
                (function($) {
                    $(window).load(function() {
                        var loadProductsUrl =
                            'http://magento1.codazon.com/fastest/filterproducts/filterproducts/loadProductsBlock/';
                        var postData = {
                            "categories": "112",
                            "filtertype": "",
                            "attribute": "",
                            "orderby": "name",
                            "order": "asc",
                            "limit": "8",
                            "use_ajax": "1",
                            "custom_class": "",
                            "custom_template": "codazon_filterproducts\/home_grid_style16.phtml",
                            "display": "name,image,label,price,rating,addtocart_btn,wishlist_btn,compare_btn",
                            "thumb_width": "220",
                            "thumb_height": "220",
                            "columns_count": 1,
                            "use_slider": "1",
                            "auto_width": 0,
                            "margin": "20",
                            "items_1280": "4",
                            "items_1024": "4",
                            "items_768": "3",
                            "items_480": "2",
                            "items_320": "2",
                            "items_0": "2",
                            "auto_play": 0,
                            "show_dots": 0,
                            "show_nav": "1",
                            "lazy_load": 0,
                            "loop": 0,
                            "cur_page": 1,
                            "type": "filterproducts\/codazonfilterproducts",
                            "cache_lifetime": "1",
                            "uniq_id": "product-tab-12",
                            "cache_tags": ["CODAZON_FILTER"],
                            "cache_key": "BLOCK_codazon_filterproducts_34|0|USD|0|79a6f2bb7a300d25028a3dee0ca64709",
                            "module_name": "Codazon_Filterproducts",
                            "available_orders": {
                                "position": "Position",
                                "name": "Name",
                                "price": "Price"
                            },
                            "sort_by": "position",
                            "block_url": "http:\/\/magento1.codazon.com\/fastest\/"
                        };
                        var $productBlock = $('#product-tab-12');
                        $productBlock.cdzLoadProductBlock({
                            postData: postData,
                            loadProductsUrl: loadProductsUrl,
                            eventName: 'product-tab-12'
                        });
                    });
                })(jQuery);
            </script>
        </div>
        <div class="tab-pane fade" id="best-seller-tab-3" data-role="content">
            <div class="codazon-ajax-wrap" id="product-tab-13">
                <div class="codazon-loader-wrap" style="display: none;"><span class="loader"></span></div>
            </div>
            <script type="text/javascript">
                (function($) {
                    $(window).load(function() {
                        var loadProductsUrl =
                            'http://magento1.codazon.com/fastest/filterproducts/filterproducts/loadProductsBlock/';
                        var postData = {
                            "categories": "114",
                            "filtertype": "",
                            "attribute": "",
                            "orderby": "name",
                            "order": "asc",
                            "limit": "8",
                            "use_ajax": "1",
                            "custom_class": "",
                            "custom_template": "codazon_filterproducts\/home_grid_style16.phtml",
                            "display": "name,image,label,price,rating,addtocart_btn,wishlist_btn,compare_btn",
                            "thumb_width": "220",
                            "thumb_height": "220",
                            "columns_count": 1,
                            "use_slider": "1",
                            "auto_width": 0,
                            "margin": "20",
                            "items_1280": "4",
                            "items_1024": "4",
                            "items_768": "3",
                            "items_480": "2",
                            "items_320": "2",
                            "items_0": "2",
                            "auto_play": 0,
                            "show_dots": 0,
                            "show_nav": "1",
                            "lazy_load": 0,
                            "loop": 0,
                            "cur_page": 1,
                            "type": "filterproducts\/codazonfilterproducts",
                            "cache_lifetime": "1",
                            "uniq_id": "product-tab-13",
                            "cache_tags": ["CODAZON_FILTER"],
                            "cache_key": "BLOCK_codazon_filterproducts_34|0|USD|0|0970f12021cf9ca7feba9a237985b235",
                            "module_name": "Codazon_Filterproducts",
                            "available_orders": {
                                "position": "Position",
                                "name": "Name",
                                "price": "Price"
                            },
                            "sort_by": "position",
                            "block_url": "http:\/\/magento1.codazon.com\/fastest\/"
                        };
                        var $productBlock = $('#product-tab-13');
                        $productBlock.cdzLoadProductBlock({
                            postData: postData,
                            loadProductsUrl: loadProductsUrl,
                            eventName: 'product-tab-13'
                        });
                    });
                })(jQuery);
            </script>
        </div>
    </div>
</div>
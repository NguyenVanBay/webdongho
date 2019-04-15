<div class="cdz-products box-style06 space-base">
    <div class="cdz-block-title">
        <p class="h2"><span>Sản phẩm hot</span></p>
    </div>
    <div class="text-center box-content">
        <div class="codazon-ajax-wrap loaded" id="ajax5caf79a5609d0">
            <div class="codazon-loader-wrap" style="display: none;"><span class="loader"></span></div>

            <div class="codazon-filter codazon-filter-style-17 " id="grid5caf8033a72c4">
                <div class="products-grid">
                    <div class="product-items owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 771px;">
                                <?php

                                $sql = "SELECT * FROM product WHERE type = 'hot' ORDER BY price DESC LIMIT 10";
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="owl-item active" style="width: 258px; margin-right: -1px;">
                                        <ul class="item-group">
                                            <li class="item product-item">
                                                <div class="product-item-info">
                                                    <div class="cdz-hover-section">
                                                        <div class="cdz-product-top">
                                                            <a href="#" title="Canon Powershot SX43" class="product-image">
                                                                <img class="img-responsive main-product-collection-image-1185" src="public/upload/product/<?php echo $row['thumbnail'] ?>" id="product-collection-image-1185" alt="Canon Powershot SX43">
                                                                <img src="public/upload/product/<?php echo $row['image'] ?>" alt="Canon Powershot SX43" class="alternative-img img-responsive">
                                                            </a>
                                                        </div>
                                                        <ul class="cdz-product-lbs">
                                                            <li class="lb-item lb-new">
                                                                <div class="lb-content">
                                                                    New</div>
                                                            </li>
                                                            <li class="lb-item lb-sale">
                                                                <div class="lb-content">
                                                                    -<?php echo $row['sale']; ?>%</div>
                                                            </li>
                                                        </ul>
                                                        <div class="addto-hover-container">
                                                            <button data-toggle="tooltip" data-original-title="Add to Cart" type="button" title="" class="button btn-cart"><span><span>Add to Cart</span></span></button>

                                                            <div class="addto-button">
                                                                <span data-toggle="modal" data-target="#cdz-qsiframe">
                                                                    <a href="#" class="qs-button" data-original-title="Quick Shop" data-toggle="tooltip">Xem sản phẩm</a>
                                                                </span>

                                                            </div>
                                                            <a data-toggle="tooltip" data-original-title="Wishlist" href="#" class="action link-wishlist">Yêu thích</a>
                                                        </div>
                                                    </div>

                                                    <div class="product-item-details" style="height: 205px;">
                                                        <div class="info-details">
                                                            <div class="wrapper-rating">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div class="rating" style="width:93%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h2 class="product-name"><a href="#" title="Canon Powershot SX43"><?php echo $row['name'] ?></a>
                                                            </h2>

                                                            <div class="desc product-item-description"><?php echo $row['description'] ?></div>
                                                            <div class="price-box">

                                                                <p class="old-price">
                                                                    <span class="price-label">Giá gốc:</span>
                                                                    <span class="price" id="old-price-1185grid5caf8033a72c4">
                                                                        <?php echo $row['price']; ?> VND</span>
                                                                </p>

                                                                <p class="special-price">
                                                                    <span class="price-label">Giảm giá</span>
                                                                    <span class="price" id="product-price-1185grid5caf8033a72c4">
                                                                    <?php echo ($row['price']) * ((100 - $row['sale']) / 100); ?> VND</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                <?php } ?>
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
                var $container = $j('#grid5caf8033a72c4');
                ConfigurableMediaImages.init('small_image');
                ConfigurableMediaImages.setImageFallback(1185, {
                    "option_labels": [],
                    "small_image": {
                        "1185": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_26_1.jpg"
                    },
                    "base_image": []
                });
                ConfigurableMediaImages.setImageFallback(1190, {
                    "option_labels": [],
                    "small_image": {
                        "1190": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_31_1.jpg"
                    },
                    "base_image": []
                });
                ConfigurableMediaImages.setImageFallback(1193, {
                    "option_labels": [],
                    "small_image": {
                        "1193": "http:\/\/magento1.codazon.com\/fastest\/media\/catalog\/product\/cache\/34\/small_image\/220x220\/602f0fa2c1f0d1ba5e241f914e856ff9\/t\/e\/tech_34_1.jpg"
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
                        var $wrapper = $('#grid5caf8033a72c4');
                        var $owl = $('.product-items', $wrapper);
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
                                    items: 1
                                },
                                1024: {
                                    items: 1
                                },
                                1280: {
                                    items: 1
                                }
                            },
                            margin: -1,
                            center: false,
                            dots: false
                        });
                        var makeSameHeight = function() {
                            $wrapper.sameHeightItems({
                                parent: '.product-items',
                                sItem: '.product-item-details'
                            });
                        };
                        $wrapper.find('.product-image').last().find(
                            'img').last().each(function() {
                            if (this.complete) {
                                makeSameHeight();
                            } else {
                                $(this).on('load.setMaxHeight',
                                    function() {
                                        makeSameHeight();
                                        $(this).off(
                                            'load.setMaxHeight'
                                        );
                                    });
                            }
                        });
                        var timeout = false;
                        $(window).resize(function() {
                            if (timeout) clearTimeout(timeout);
                            timeout = setTimeout(makeSameHeight,
                                500);
                        });
                        $wrapper.on('layoutUpdated', makeSameHeight);
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
                        "categories": "111",
                        "filtertype": "5",
                        "attribute": "",
                        "orderby": "name",
                        "order": "asc",
                        "limit": "8",
                        "use_ajax": "1",
                        "custom_class": "",
                        "custom_template": "codazon_filterproducts\/home_grid_style17.phtml",
                        "display": "name,image,label,price,rating,description,addtocart_btn,wishlist_btn,compare_btn",
                        "thumb_width": "220",
                        "thumb_height": "220",
                        "columns_count": 1,
                        "use_slider": "1",
                        "auto_width": 0,
                        "margin": "-1",
                        "items_1280": "1",
                        "items_1024": "1",
                        "items_768": "1",
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
                        "cache_tags": ["CODAZON_FILTER"],
                        "cache_key": "BLOCK_codazon_filterproducts_34|0|USD|0|2261d8bdb556d54074338a594c74ae94",
                        "module_name": "Codazon_Filterproducts",
                        "available_orders": {
                            "position": "Position",
                            "name": "Name",
                            "price": "Price"
                        },
                        "sort_by": "position",
                        "block_url": "http:\/\/magento1.codazon.com\/fastest\/"
                    };
                    var $productBlock = $('#ajax5caf79a5609d0');
                    $productBlock.cdzLoadProductBlock({
                        postData: postData,
                        loadProductsUrl: loadProductsUrl,
                        eventName: 'ajax5caf79a5609d0'
                    });
                });
            })(jQuery);
        </script>
    </div>
</div>
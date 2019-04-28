<?php
session_start();

include("connection/connection.php");
include("view/config/config.php");

?>

<!DOCTYPE html>
<html lang="en" id="top" class=" js no-touch localstorage no-ios" style="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Watch</title>
    <meta name="description" content="Fastest – Multi-purpose Magento 1.9.x and 2.0.x theme with fully responsive- multipurpose Magento theme (10+ Unique design)">
    <meta name="keywords" content="magento 2,magento2,magento2.0,magento 2.0x,magento1,magento1.x,magento 1.9,magento theme,responsive theme, multipurpose theme, bootstrap theme, best magento theme,Magento Drug,Magento Pharmacy,Drug store,Pharmacy Shop,Handbag,Jewelry,Fashion Moderm,Fashion,sportswear store,sportswear">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="http://magento1.codazon.com/fastest/skin/frontend/codazon_fastest/default/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://magento1.codazon.com/fastest/skin/frontend/codazon_fastest/default/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="public/web/css/calendar-win2k-1.css">
    <link rel="stylesheet" type="text/css" href="public/web/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/bootstrap-theme.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/styles.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/responsive.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/widgets.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/owl.carousel.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/owl.theme.default.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/jasny-bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/animate.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/style_hightech_smartphone.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/filterproducts.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/menu.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/royalslider.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/rs-universal.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/growler.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/modalbox.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/bootstrap-slider.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="public/web/css/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="public/web/css/custom.css">
    <link rel="stylesheet" type="text/css" href="public/web/css/mystyle.css">


    <script type="text/javascript" src="public/jQuery-3.3.1/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="public/web/js/prototype.js"></script>
    <script type="text/javascript" src="public/web/js/ccard.js"></script>
    <script type="text/javascript" src="public/web/js/validation.js"></script>
    <script type="text/javascript" src="public/web/js/builder.js"></script>
    <script type="text/javascript" src="public/web/js/effects.js"></script>
    <script type="text/javascript" src="public/web/js/dragdrop.js"></script>
    <script type="text/javascript" src="public/web/js/controls.js"></script>
    <script type="text/javascript" src="public/web/js/slider.js"></script>
    <script type="text/javascript" src="public/web/js/js.js"></script>
    <script type="text/javascript" src="public/web/js/form.js"></script>
    <script type="text/javascript" src="public/web/js/translate.js"></script>
    <script type="text/javascript" src="public/web/js/cookies.js"></script>
    <script type="text/javascript" src="public/web/js/product.js"></script>
    <script type="text/javascript" src="public/web/js/configurable.js"></script>
    <script type="text/javascript" src="public/web/js/calendar.js"></script>
    <script type="text/javascript" src="public/web/js/calendar-setup.js"></script>
    <script type="text/javascript" src="public/web/js/product_options.js"></script>
    <script type="text/javascript" src="public/web/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="public/web/js/jquery-migrate-1.3.0.min.js"></script>
    <script type="text/javascript" src="public/web/js/jquery-noconflict.js"></script>
    <script type="text/javascript" src="public/web/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/web/js/theme.js"></script>
    <script type="text/javascript" src="public/web/js/hightech.js"></script>
    <script type="text/javascript" src="public/web/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="public/web/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="public/web/js/modernizr.custom.min.js"></script>
    <script type="text/javascript" src="public/web/js/enquire.js"></script>
    <script type="text/javascript" src="public/web/js/app.js"></script>
    <script type="text/javascript" src="public/web/js/jquery.unveil.js"></script>
    <script type="text/javascript" src="public/web/js/imagesloaded.js"></script>
    <script type="text/javascript" src="public/web/js/swatches-product.js"></script>
    <script type="text/javascript" src="public/web/js/filterproducts.js"></script>
    <script type="text/javascript" src="public/web/js/product-media.js"></script>
    <script type="text/javascript" src="public/web/js/swatches-list.js"></script>
    <script type="text/javascript" src="public/web/js/menu1.js"></script>
    <script type="text/javascript" src="public/web/js/jquery.royalslider.min.js"></script>
    <script type="text/javascript" src="public/web/js/quickshop.js"></script>
    <script type="text/javascript" src="public/web/js/msrp.js"></script>
    <script type="text/javascript" src="public/web/js/modalbox.js"></script>
    <script type="text/javascript" src="public/web/js/ajaxcart.js"></script>
    <script type="text/javascript" src="public/web/js/ajaxcart_effect.js"></script>
    <script type="text/javascript" src="public/web/js/bundle.js"></script>
    <script type="text/javascript" src="public/web/js/bootstrap-slider.min.js"></script>




    <script type="text/javascript">
        if (typeof Codazon == 'undefined') {
            var Codazon = {};
        }
        Codazon.nowDate = '2019-04-11 16:08:29';
        Codazon.ajaxCartPro = {
            enable: true,
        }
    </script>

    <link href="public/web/css/css.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        .royalSlider {
            height: 553.95px;
        }

        .no-fullscreen .rsOverflow {
            min-width: 450px !important;
            float: right;
        }

        .no-fullscreen .rsImg {
            width: auto !important;
            max-width: 100%;
            height: auto !important;
            margin-left: 0px !important;
        }

        .rsFullscreen .rsImg {
            height: 100vh;
        }

        .rsFullscreen .rsSlide {
            display: table !important;
            width: 100%;
        }

        .rsFullscreen .rsContent {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .rsFullscreen .rsImg {
            display: inline;
            height: auto;
            width: auto;
            max-height: 100vh;
            max-width: 100%;
        }

        .rs-inner {
            display: inline-block;
            height: auto;
            width: auto;
            max-height: 100%;
            max-width: 100%;
            position: relative;
        }

        .map-popup {
            z-index: 10000;
        }

        .cdz-qs-view .map-link {
            float: left;
        }
    </style>

    <script type="text/javascript">
        //<![CDATA[
        optionalZipCountries = ["HK", "IE", "MO", "PA"];
        //]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[
        var Translator = new Translate([]);
        //]]>
    </script>
    <link id="avast_os_ext_custom_font" href="public/web/css/fonts.css" rel="stylesheet" type="text/css">
</head>

<body class=" cms-index-index cms-fastest-fashion-homepage">

    <div class="wrapper">
        <div class="page">
            <div class="header-container cdz-header-style-09">
                <div class="header hidden-xs" style="min-height: 239px;">

                    <!-- include header  -->

                    <?php include 'view/include/header/header-top.php' ?>
                    <?php include 'view/include/header/header-bottom.php' ?>
                    <!-- end include header -->

                </div>
            </div>


            <?php
            if (!isset($_GET['page']) || $_GET['page'] == '') {
                include 'view/include/content/slider-show.php';
            }
            ?>

            <div class="main-container col1-layout">
                <div class="main">
                    <div class="container col-main-containter">

                        <!-- phàn thân -->
                        <?php

                        if (isset($_GET['page'])) {

                            $page = $_GET['page'];
                            switch ($page) {
                                case 'cart':
                                    require 'view/cart/cart.php';
                                    break;
                                case 'checkout':
                                    require 'view/cart/checkout.php';
                                    break;
                                default:
                                    require 'view/cart/index.php';
                                    break;
                            }
                        } else {
                            require 'view/index.php';
                        }

                        ?>

                        <!-- phần thân -->

                    </div>

                    <!-- footer -->
                    <?php include('view/include/footer/footer.php'); ?>
                    <!-- end footer -->

                    <!-- footer - cart -->
                    <div id="back-top" style=""><a title="Top" href="#top">Top</a></div>


                </div>


                <!-- footer cart -->
                <?php
                include('view/include/footer/footer_cart.php')
                ?>
                <!-- end footer - cart -->
                <script>
                    // jquery code.
                    jQuery.noConflict();
                    (function($) {


                        // ajax show product.
                        $('.qs-button').click(function() {
                            let id = $(this).attr('giatri');

                            $.ajax({
                                type: "post",
                                url: "ajax/ajax.php",
                                data: {
                                    type: 'getproductbyid',
                                    id: id
                                },
                                dataType: "json",
                                success: function(response) {
                                    console.log('a');
                                    $("#nameProductTop").html(response['name']);
                                    $("#imageProduct").attr('src', 'public/upload/product/' + response['thumbnail']);
                                    if (parseInt(response['sale']) != 0) {
                                        $("#oldPriceProduct").html(response['price'] + ' đ');
                                        let giamoi = parseInt(response['price']) - (parseInt(response['price']) * parseInt(response['sale']) / 100);
                                        // alert(giamoi);
                                        $("#newPriceProduct").html(giamoi + ' đ');
                                    } else {
                                        $("#oldPriceProduct").html(response['price'] + ' đ');

                                    }
                                    $("#descriptionProduct").html(response['description']);
                                }
                            });
                        });
                        // end show product


                        // add to cart click.
                        $('.btn-cart').click(function() {

                            let id = $(this).attr('msp');

                            $.ajax({
                                type: "post",
                                url: "ajax/ajax.php",
                                data: {
                                    type: 'addToCart',
                                    id: id,
                                    soluong: 1
                                },
                                dataType: "text",
                                success: function(response) {
                                    // alert("Thêm vào giỏ hàng thành công");

                                    $('#cart-footer-product').html("");
                                    $('#cart-footer-product').html(response);
                                    $('#soluongsanpham_footer').html(response['tongsanpham']);
                                    $('#soluongsanpham_header').html(response['tongsanpham']);
      s                          }
                            });

                        });

                        // end add to cart


                        // edit product

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

                        $('#tinhthanh').change(function() {

                            var matinh = $(this).val();
                            $.ajax({
                                type: "post",
                                url: "ajax/ajax.php",
                                data: {
                                    type: 'gethuyen',
                                    matinh: matinh
                                },
                                dataType: "html",
                                success: function(response) {

                                    $('#huyen').html(response);

                                }
                            });
                        });

                        // add to cart.-
                        $('#checkout').submit(function(e) {
                            e.preventDefault();

                            var form = $(this);

                            // update cart
                            $.ajax({
                                type: "post",
                                url: "ajax/ajax.php",
                                data: form.serialize(),
                                dataType: "json",
                                success: function(response) {

                                    // document.location.reload(true);
                                }
                            });

                        });


                    })(jQuery);
                </script>

                <!-- show product -->
                <div class="qs-modal modal" id="cdz-qsiframe" tabindex="-1" role="dialog" style="display: none;">
                    <div class="ajax-load-wrapper" style="display: none;">
                        <div class="ajax-load-button">
                            <div class="ajax-loader">Loading...</div>
                        </div>
                    </div>
                    <div class="modal-dialog modal-lg animated zoomIn" role="document" style="display: block;">
                        <div>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="action-close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="product-content">
                                        <div id="messages_product_view"></div>
                                        <div class="product-view cdz-qs-view row">
                                            <form action="" method="post" id="formAddToCart">
                                                <div class="cdz-qs-image col-sm-14">
                                                    <div class="col-sm-13 product-view-media product-img-box">
                                                        <div class="row">
                                                            <div class="product-image-moreview col-sm-24">
                                                                <div class="more-views">
                                                                    <div class="fwImage">
                                                                        <div id="qs-viewmore-slider" class="royalSlider rsUni product-image-thumbs cdz-zoom no-fullscreen rsHor rsWithThumbs rsWithThumbsVer" style="height: 463px;">
                                                                            <div class="rsOverflow grab-cursor" style="width: 463px; height: 463px;">
                                                                                <div class="rsContainer" style="transition-duration: 0s; transform: translate3d(0px, 0px, 0px); transition-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);">
                                                                                    <div style="left: 0px;" class="rsSlide rsActiveSlide product-image">
                                                                                        <div class="rsContent" style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
                                                                                            <div class="rs-inner">
                                                                                                <img id="imageProduct" class="rsImg rsMainSlideImage" src="">
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
                                                        <script>
                                                            if (typeof ConfigurableMediaImages !== 'undefined') {
                                                                ConfigurableMediaImages.updateImage = function(el) {
                                                                    var select = $j(el);
                                                                    var label = select.find('option:selected').attr(
                                                                        'data-label');
                                                                    var productId = optionsPrice.productId;
                                                                    var selectedLabels = new Array();
                                                                    $j('.product-options .super-attribute-select').each(
                                                                        function() {
                                                                            var $option = $j(this);
                                                                            if ($option.val() != '') {
                                                                                selectedLabels.push($option.find(
                                                                                    'option:selected').attr(
                                                                                    'data-label'));
                                                                            }
                                                                        });
                                                                    var swatchImageUrl = ConfigurableMediaImages.getSwatchImage(
                                                                        productId, label, selectedLabels);
                                                                    if (!ConfigurableMediaImages.isValidImage(swatchImageUrl)) {
                                                                        return;
                                                                    }
                                                                    var swatchImage = ConfigurableMediaImages.getImageObject(
                                                                        productId, swatchImageUrl);
                                                                    $j(window).trigger('swatchUpdateImage', [swatchImageUrl]);
                                                                };
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10 product-view-info">
                                                    <input name="form_key" type="hidden" value="SlgkdUqN1kdOJo71">
                                                    <div class="no-display">
                                                        <input type="hidden" name="product" value="1183">
                                                        <input type="hidden" name="related_product" id="related-products-field" value="">
                                                    </div>
                                                    <div class="product-shop">
                                                        <div class="product-shop-wrap product-shop-title">
                                                            <div class="product-name">
                                                                <h1 itemprop="name" id="nameProductBottom" class="product-name-h1">
                                                                </h1>
                                                            </div>
                                                            <div class="row product-rating-sku">
                                                                <div class="col-sm-24">
                                                                    <div class="row">
                                                                        <div class="col-sm-8">
                                                                            <h3 class="product-shop-sku" id="nameProductTop"></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-shop-wrap product-shop-price-stock">
                                                                <div itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                                    <div class="product-shop-stock-price">
                                                                        <div class="price-box">

                                                                            <p class="old-price">
                                                                                <span class="price-label">Giá gốc:</span>
                                                                                <span class="price" id="oldPriceProduct"> </span>
                                                                            </p>

                                                                            <p class="special-price">
                                                                                <span class="price-label">Giảm giá</span>
                                                                                <span class="price" id="newPriceProduct"> </span>
                                                                            </p>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="product-shop-wrap product-shop-button">
                                                            <div class="add-to-box">
                                                                <div class="add-to-cart">
                                                                    <div class="product-button-top">
                                                                        <label for="qty">Số lượng:</label>
                                                                        <div class="qty_cart">
                                                                            <div class="qty-ctl">
                                                                                <button title="decrease" onclick="changeQty(0); return false;" class="decrease">decrease</button>
                                                                            </div>
                                                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                                                            <div class="qty-ctl">
                                                                                <button title="increase" onclick="changeQty(1); return false;" class="increase">increase</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="product-button-bottom">
                                                                        <button type="button" title="Add to Cart" id="product-addtocart-button" class="button btn-cart"><span><span>Add
                                                                                    to Cart</span></span></button>
                                                                    </div>
                                                                </div>
                                                                <script type="text/javascript">
                                                                    var changeQty = function(increase) {
                                                                        var qty = parseInt($('qty').value);
                                                                        if (!isNaN(qty)) {
                                                                            qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
                                                                            $('qty').value = qty;
                                                                        }
                                                                    }
                                                                </script>
                                                                <span class="or">OR</span>


                                                                <ul class="add-to-links">
                                                                    <li class="wishlist"><a href="#" onclick="productAddToCartForm.submitLight(this, this.href); return false;" class="link-wishlist">Yêu thích</a></li>
                                                                    <li class="compare"><span class="separator">|</span> <a href="#" class="link-compare">So sánh</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="product-shop-wrap product-shop-social">
                                                        <div class="row">
                                                            <div class="col-sm-17">
                                                                <ul class="cdz-social-listing">
                                                                    <li class="cdz-facebook">
                                                                        <a href="#" title="" class="trasition-all" data-placement="top" data-toggle="tooltip" data-original-title="Share on Facebook"><i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="twitter">
                                                                        <a target="_blank" rel="nofollow" title="" href="#" class="trasition-all" data-placement="top" data-toggle="tooltip" data-original-title="Share on Twitter"><i class="fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="linkedin">
                                                                        <a rel="nofollow" title="" href="#" class="trasition-all" data-placement="top" data-toggle="tooltip" data-original-title="Share on LinkedIn"><i class="fa fa-linkedin"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="google-plus">
                                                                        <a rel="nofollow" title="" href="#" class="trasition-all" data-placement="top" data-toggle="tooltip" data-original-title="Share on Google Plus"><i class="fa fa-google-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="pinterest">
                                                                        <a rel="nofollow" title="" href="#" class="trasition-all" data-placement="top" data-toggle="tooltip" data-original-title="Pin this"><i class="fa fa-pinterest"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="email">
                                                                        <a rel="nofollow" title="" class="trasition-all" data-placement="top" data-toggle="tooltip" data-original-title="Email to a Friend" href="#"><i class="fa fa-envelope"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-7 align-right pull-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-shop-wrap short-description">
                                                        <div class="short-description">
                                                            <h2>Mô tả sản phẩm</h2>
                                                            <div class="std" id="descriptionProduct"></div>
                                                        </div>
                                                    </div>

                                                    <div class="clearer"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end show product -->


                <div class="bootbox modal fade bootbox-confirm in" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body"><button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;">×</button>
                                <div class="bootbox-body">Are you sure you would like to remove this item from the shopping cart?</div>
                            </div>
                            <div class="modal-footer"><button data-bb-handler="cancel" type="button" class="btn btn-default">Cancel</button><button data-bb-handler="confirm" type="button" class="btn btn-primary">OK</button></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>
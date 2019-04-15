<?php

$sql = "SELECT * FROM category where sort > '$from_menu_doc' AND sort < '$to_menu_doc' ORDER BY sort DESC";
$query = mysqli_query($conn, $sql);

?>

<div class="slideshow-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 main-content-top-left">
                <div class="widget widget-static-block">
                    <div class="space-small-base menu-vertical-block">
                        <div class="menu-vertical-title">
                            <h3>Danh sách thể loại</h3>
                        </div>
                        <div class="menu-vertical-content cdz-fix-left">
                            <div class="cdz-menu cdz-vertical-menu  menu-wrapper cdz-translate" id="menu-20-5caf799857ade" data-megamenu="{&quot;dropdownEffect&quot;:&quot;translate&quot;,&quot;type&quot;:&quot;1&quot;}">
                                <ul>


                                    <?php

                                    while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                        <li class="item level0  level-top parent">
                                            <a class="menu-link" href="">
                                                <i class="menu-icon <?= $row['icon'] ?>"></i> <span><span><?= $row['name'] ?></span></span></a>
                                            <ul class="groupmenu-drop">
                                                <li class="item level1  text-content">
                                                    <div class=" groupmenu-drop-content groupmenu-width-18" style=" ">
                                                        <div class="row">

                                                            <?php

                                                            $sql_producer = "SELECT * FROM producer where sort >= '$from_producer' AND sort <= '$to_producer' ORDER BY sort ASC";
                                                            $query_producer = mysqli_query($conn, $sql_producer);
                                                            $i = 0;
                                                            while ($row_producer = mysqli_fetch_assoc($query_producer)) {
                                                                $i++;
                                                                ?>
                                                                <div class="col-sm-4">
                                                                    <div class="groupdrop-banner">
                                                                        <a href="#"><img class="img-responsive" src="public/upload/producer/<?php echo $row_producer['image'] ?>" alt=""></a><br>
                                                                        <p><?= $row_producer['name'] ?></p>
                                                                    </div>
                                                                    <hr>
                                                                    <ul class="groupdrop-link">
                                                                        <?php
                                                                        $category_id = $row['id'];
                                                                        $sql_product = "SELECT product.*, producer.sort FROM product INNER JOIN producer on producer.id = product.producer_id where category_id = '$category_id' AND producer.sort = '$i' ORDER BY price DESC LIMIT 8";
                                                                        // echo $sql_product;
                                                                        $query_product = mysqli_query($conn, $sql_product);

                                                                        while ($row_product = mysqli_fetch_assoc($query_product)) {
                                                                            ?>
                                                                            <li class="item"><a href="#"><?= $row_product['name'] ?></a></li>
                                                                        <?php
                                                                    }
                                                                    ?>

                                                                    </ul>
                                                                </div>

                                                            <?php
                                                        }
                                                        ?>

                                                            <?php

                                                            $sql_producer = "SELECT * FROM producer";
                                                            $query_producer = mysqli_query($conn, $sql_producer);
                                                            
                                                            ?>

                                                            <div class="col-sm-8">
                                                                <div class="line-left">
                                                                    <p class="groupdrop-title text-uppercase">Nhà cung cấp</p>
                                                                    <ul class="groupdrop-link">
                                                                        
                                                                        <?php 
                                                                        
                                                                        while ($row_producer = mysqli_fetch_assoc($query_producer)) {
                                                                ?>
                                                                <li class="item"><a href="#"><?php echo $row_producer['name'] ?></a></li>
                                                                <?php
                                                                        }
                                                                        
                                                                        ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php
                                }

                                ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-18 main-content-top-right">

                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        
                        <div class="item">
                            <img alt="Second slide" src="public/upload/slideshow02.jpg">

                        </div>
                        <div class="item active">
                            <img alt="Third slide" src="public/upload/slideshow01.jpg">

                        </div>
                    </div>
                    <div style="text-align: center;">
                    <a class="left" href="#carousel-id" data-slide="prev"><span class="fa fa-arrow-left"></span></a>
                    <a class="right" href="#carousel-id" data-slide="next"><span class="fa fa-arrow-right"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
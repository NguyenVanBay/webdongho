<div class="box-style06 space-base">
    <div class="cdz-block-title">
        <p class="h2"><span>Nhà chung cấp</span></p>
    </div>
    <div class="cdz-brand-slider box-content">
        <div class="cdz-slider cdz-slider-banners cdz-slider-navigation-icon owl-carousel owl-theme owl-loaded owl-drag" data-items-0="1" data-items-320="2" data-items-480="2" data-items-768="1" data-items-1024="2" data-items-1280="2" data-loop="true" data-nav="true" data-dots="false" data-margin="20">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-556px, 0px, 0px); transition: all 0s ease 0s; width: 2224px;">


                    <!-- thương hiệu -->
                    <?php
                    $sql = "SELECT * FROM producer";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div class="owl-item" style="width: 119px; margin-right: 20px;">
                            <div class="cdz-banners-item">
                                <a href="#"><img class="img-responsive" src="public/upload/producer/<?php echo $row['image'] ?>" alt="cdz_brand_06.jpg"></a>
                                <?php echo $row['name']; ?>
                            </div>
                        </div>
                    <?php
                }
                ?>
                </div>
            </div>
            <div class="owl-nav">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
            </div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</div>
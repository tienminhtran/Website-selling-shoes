<div class="slider-area home2">
    <div class="bend niceties preview-2">
        <div id="nivoslider" class="slides">
            <?php
            $i = 0;
            $array = '#slider-direction-';
            foreach ($data_banner  as $value) {
                $i++;
            ?>
                <img src="admin/public_admin/image/banner/<?php echo $value['anh'] ?>" alt="" title="<?php echo ($array . $i); ?>">

            <?php } ?>

        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-progress"></div>
            <div class="slider-content t-lfl s-tb slider-1">
                <div class="title-container s-tb-c title-compress">
                    <h1 class="title1">Khuyến mãi</h1>
                    <h2 class="title2">Khuyến Mãi Hấp Dẫn Lên Đến 30%</h2>
                    <h3 class="title3"></h3>
                    <a href="#"><span>Mua Ngay</span></a>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction">
            <div class="slider-progress"></div>
            <div class="slider-content t-lfl s-tb slider-2">
                <div class="title-container s-tb-c">
                    <h1 class="title1">Khuyến mãi đặc biệt</h1>
                    <h2 class="title2">sports center james</h2>
                    <h3 class="title3">Lorem Ipsum is simply dummy text of the printing</h3>
                    <a href="#"><span>Mua Ngay</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider area end -->


<!-- service area end -->
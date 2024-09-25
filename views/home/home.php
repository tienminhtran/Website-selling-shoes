<?php require_once('./views/slider/slider.php');  ?>



<!-- new products area start -->
<div class="new-product home2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-title">
                    <h2>Sản Phẩm Mới</h2>
                    <a href="?action=cuahang1" style="margin-left:60%" id="textid">Xem tất cả >></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-home2-slider">
                <?php foreach ($data_sanphamtrangchu as $value) {  ?>
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="level-pro-new">
                                <span>new</span>
                            </div>
                            <div class="product-img">
                                <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>" title="" class="thumb">
                                    <img class="primary-img-1" src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="">
                                    <img class="primary-img-2" src="admin/public_admin/image/sanpham/<?php echo $value['anh2'] ?>" alt="">
                                </a>
                            </div>
                            <div class="actions">
                                <a href="?action=giohang&act=add_giohang&id=<?= $value['idSP'] ?>">
                                    <button onclick="" type="submit" class="cart-btn" title="Add to cart">Thêm vào giỏ</button></a>
                                <ul class="add-to-link">
                                    <li><a class="modal-view" href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>"> <i class="fa fa-search"></i></a></li>
                                    <!-- <li><a href="../wishlist/index"> <i class="fa fa-heart-o"></i></a></li> -->
                                </ul>
                            </div>
                            <div class="product-price">
                                <div class="product-name">
                                    <a href="" title="" class="name-product"> <?php echo $value['tenSP'] ?> </a>
                                </div>
                                <div class="price-rating">
                                    <span><?= number_format($value['Dongia']); ?> VND</span>
                                    <!-- <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>




<!-- new products area start -->
<?php foreach ($data_loaisanphamhome as $row) : ?>
<div class="new-product home2">
  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-title">
                        <h2><?= $row['tenLSP'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features-home2-slider">
                    <?php foreach ($data_allsanphamtrangchu as $value) :
                        if ($row['idLoaiSP'] == $value['idLoaiSP']) {
                    ?>
                            <div class="col-md-12">
                                <div class="single-product">
                                    <div class="level-pro-new">
                                        <span>new</span>
                                    </div>
                                    <div class="product-img">
                                        <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>" title="" class="thumb">
                                            <img class="primary-img-1" src="admin/public_admin/image/sanpham/<?= $value['anh1'] ?>" alt="">
                                            <img class="primary-img-2" src="admin/public_admin/image/sanpham/<?= $value['anh2'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="actions">
                                        <a href="?action=giohang&act=add_giohang&id=<?= $value['idSP'] ?>">
                                            <button onclick="" type="submit" class="cart-btn" title="Add to cart">Thêm vào giỏ</button></a>
                                        <ul class="add-to-link">
                                            <li><a class="modal-view" href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>"> <i class="fa fa-search"></i></a></li>
                                            <!-- <li><a href="../wishlist/index"> <i class="fa fa-heart-o"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <div class="product-name">
                                            <a href="" title="" class="name-product"> <?php echo $value['tenSP'] ?> </a>
                                        </div>
                                        <div class="price-rating">
                                            <span><?= number_format($value['Dongia']); ?> VND</span>
                                            <!-- <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php }
                    endforeach ?>
                </div>
            </div>
        </div>
   
</div>
<?php endforeach ?>




 <!-- testimonial area start -->
 <!-- <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="testimonial-slider">
                        <div class="single-testimonial">
                            <div class="spech">
                                <a href="#">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat ”</a>
                            </div>
                            <div class="avater">
                                <img src="img/testimonial/1.jpg" alt="">
                            </div>
                            <div class="post-by">
                                <span>Salim Rana</span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="spech">
                                <a href="#">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat ”</a>
                            </div>
                            <div class="avater">
                                <img src="img/testimonial/2.jpg" alt="">
                            </div>
                            <div class="post-by">
                                <span>Hridoy Roy</span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="spech">
                                <a href="#">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat ”</a>
                            </div>
                            <div class="avater">
                                <img src="img/testimonial/3.jpg" alt="">
                            </div>
                            <div class="post-by">
                                <span>themesplaza</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- testimonial area end -->

<!-- <?php// require_once('./views/sanphammoinhat/sanphammoinhat.php');  ?>  -->
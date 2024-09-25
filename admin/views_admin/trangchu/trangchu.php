<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-body">
      <h1>THỐNG KÊ</h1>
      <form action="?action=trangchu" method="POST">
        <input type="date" name="ngay_gui">
        <input type="submit" value="Gửi">
      </form>
      <br>
      <div class="col-sm-4">
        <div class="div1">
          Doanh thu <?php echo $loai_ngay; ?><br>
          - Có <?php $dem1 = 0;
                $tongthu1 = 0;
                foreach ($thongke_hoadon_ngay as $key => $value) {
                  $dem1++;
                  $tongthu1 += $value['tongtien'];
                } ?>
          <span style="color: orange"><?php echo $dem1; ?></span> hóa đơn<br>
          - Tổng thu<span style="color: orange"> <?php echo $tongthu1 . '.000 VND'; ?> </span>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="div1">
          Doanh thu Tháng <?php echo $loai_thang; ?><br>
          - Có <?php $dem1 = 0;
                $tongthu1 = 0;
                foreach ($thongke_hoadon_thang as $key => $value) {
                  $dem1++;
                  $tongthu1 += $value['tongtien'];
                } ?>
          <span style="color: orange"><?php echo $dem1; ?></span> hóa đơn<br>
          - Tổng thu <span style="color: orange"><?php echo $tongthu1 . '.000 VND'; ?></span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="div1">
          Doanh thu Năm <?php echo $loai_nam; ?><br>
          - Có <?php $dem1 = 0;
                $tongthu1 = 0;
                foreach ($thongke_hoadon_nam as $key => $value) {
                  $dem1++;
                  $tongthu1 += $value['tongtien'];
                } ?>
          <span style="color: orange"><?php echo $dem1; ?></span> hóa đơn<br>
          - Tổng thu <span style="color: orange"><?php echo $tongthu1 . '.000 VND'; ?></span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="div1">
          <?php
          $sum_user = 0;

          foreach ($data_user as $value) {
            $sum_user += 1;
          }
          echo "Tổng tài khoản là: " . "<br><span style='color:orange;'> $sum_user</span>";
          ?>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="div1">
          <?php
          $sum_sanpham = 0;

          foreach ($data_sanpham as $value) {
            $sum_sanpham += 1;
          }
          echo "Tổng sản phẩm là: " . "<br><span style='color:orange;'>$sum_sanpham</span>";
          ?>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="div1">
          <?php
          $sum_loaisanpham = 0;

          foreach ($data_loaisanpham as $value) {
            $sum_loaisanpham += 1;
          }
          echo "Tổng Loại sản phẩm là: " . "<br><span style='color:orange;'>$sum_loaisanpham</span>";
          ?>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="div1">
          <?php
          $sum_hoadon = 0;

          foreach ($data_hoadon as $value) {
            $sum_hoadon += 1;
          }
          echo "Tổng hóa đơn là: " . "<br><span style='color:orange;'>$sum_hoadon</span>";
          ?>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="div1">
          <?php
          $sum_banner = 0;

          foreach ($data_banner as $value) {
            $sum_banner += 1;
          }
          echo "Tổng banner là: " . "<br><span style='color:orange;'>$sum_banner</span>";
          ?>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="div1">
          <?php
          $sum_khuyenmai = 0;

          foreach ($data_khuyenmai as $value) {
            $sum_khuyenmai += 1;
          }
          echo "Tổng các khuyến mãi là: " . "<br><span style='color:orange;'>$sum_khuyenmai</span>";
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php if ($_SESSION['admin'] == true) { ?>

    <div class="col-sm-12">
      <!--        <a href="?action=xoalayout" class="pull-right">Reset data layout</a>    -->
      <button onclick="myFunction()"><a href="#sualayout">Chỉnh sửa thông tin cửa hàng</a></button>
      <p><br><br></p>
    </div>
  <?php } else {
  } ?>


  <div id="myDIV" hidden>
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="container">
          <div class="col-sm-12" style="background-color: lightgray;">
            <div class="panel-body">
              <form method="POST" action="?action=sualayout" enctype="multipart/form-data">
                <h3 style="margin: 30px;"><span id="sualayout">Footer</span></h3>

                <?php

                foreach ($data_layout as $value) {  ?>


                  <!-- rows -->
                  <div class="row" style="margin-top:25px;">
                    <div class="col-md-2">Gmail</div>
                    <div class="col-md-10">
                      <input style="margin-left:30px" name="mail" size="70" type="text" value="<?php echo $value['mail'] ?>" required>
                    </div>
                  </div>
                  <div class="row" style="margin-top:25px;">
                    <div class="col-md-2"> Địa chỉ</div>
                    <div class="col-md-10">
                      <input style="margin-left:30px"  name="diachi" size="70" type="text" value="<?php echo $value['diachi'] ?>" required>
                    </div>
                  </div>
                  <div class="row" style="margin-top:25px;">
                    <div class="col-md-2">Số điện thọai</div>
                    <div class="col-md-10">
                      +84 <input name="phone" size="70" type="text" value="<?php echo $value['phone'] ?>" required>
                    </div>
                  </div>
                  <div class="row" style="margin-top:25px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                      <button type="submit" name="create" class="btn btn-primary">Thêm</button>
                    </div>
                  </div>
                  <!-- end rows -->
              </form>
            </div>

          <?php }  ?>
          </form>
          </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- </div> -->




<script>
  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>
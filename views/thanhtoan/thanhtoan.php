<!-- trang checkout -->

<div class="shopping-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="location">
					<ul>
						<li><a href="index.html" title="go to homepage">Home<span>/</span></a> </li>
						<li><strong> Shopping cart</strong></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Thanh Toán</h2>
						</div>
					</div>
				</div>
			</div>
		</div>




		<section class="pages checkout section-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="main-input single-cart-form padding60">
							<div class="log-title">
								<h3><strong>Chi tiết hóa đơn</strong></h3>
							</div>
							<div class="custom-input">
								<form action="?action=hoanthanhdonhang&idUser=<?php echo $data_user['idUser']; ?>" method="post" style="max-width: 500px; margin: auto;">
									<div class="form-group">
										<label for="NguoiNhan">Người nhận:</label>
										<input type="text" id="NguoiNhan" name="NguoiNhan" placeholder="Người nhận" required value="<?php echo htmlspecialchars($data_user['ho'] . ' ' . $data_user['ten']); ?>" />
									</div>

									<div class="form-group">
										<label for="Email">Địa chỉ Email:</label>
										<input type="email" id="Email" name="Email" placeholder="Địa chỉ Email.." required value="<?php echo htmlspecialchars($data_user['email']); ?>" />
									</div>

									<div class="form-group">
										<label for="SDT">Số điện thoại:</label>
										<input type="text" id="SDT" name="SDT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" value="<?php echo htmlspecialchars($data_user['sodienthoai']); ?>" />
									</div>

									<div class="form-group">
										<label for="DiaChi">Địa chỉ giao hàng:</label>
										<input type="text" id="DiaChi" name="DiaChi" placeholder="Địa chỉ giao hàng" required value="<?php echo htmlspecialchars($data_user['diachi']); ?>" />
									</div>
									
									<div class="submit-text" style="margin-top: 20px;">
										<button type="submit">Thanh toán</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="padding60">
							<div class="log-title">
								<h3><strong>Hóa đơn</strong></h3>
							</div>
							<div class="cart-form-text pay-details table-responsive">
								<table>
									<thead>
										<tr>
											<th>Sản phẩm</th>
											<td>Thành Tiền</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th><?php foreach ($_SESSION['sanpham'] as $key => $value) { ?>
													<?php echo $value['tenSP']; ?>
													<?php echo "SL: " . $value['soluong'] . '<br>'; ?>
												<?php } ?>
											</th>
											<td>
												<?php echo $_SESSION['tongtien'] . '.000 vnd<br>'; ?>
											</td>
										</tr>
										<tr>
											<th>Giảm Giá</th> <!-- lấy a trên địa chỉ rồi inner join với bảng khuyễn mã để lấy giá trị khuyến mãi -->
											<td><?php $_SESSION['giatriKM'] = $data_sanpham['giatriKM'];
												echo $_SESSION['giatriKM'] . '%'; ?></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>Tổng</th>
											<td>
												<?php
												if ($_SESSION['giatriKM'] != 0) {
													$_SESSION['tongtien_KM'] = ($_SESSION['tongtien'] - ($_SESSION['tongtien'] * ($data_sanpham['giatriKM'])) / 100);
													echo $_SESSION['tongtien_KM'];
												} else {
													echo $_SESSION['tongtien'];
												}
												?>.000 VNĐ
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>


<?php
if (!isset($_SESSION['userId'])) {
	include ROOT.'/module/user/login.php';
}
else {
	$dbOrder = new Order();
	$userDB = new User();
  $userId = $_SESSION['userId'];
  $rows = $userDB->getUserById($userId);
  $r = $rows[0];
  ?>
  <div class="mt-products-list" style="width:40%;padding:20px 2%;margin-right:2%">
    <table class="table table-hover table-condensed">
      <thead>
        <tr>
          <th style="width:40%"></th>
          <th style="width:60%"></th>
        </tr>
      </thead>
      <tbody>
				<tr>
					<td colspan="2"><h1><span style="color:#008">&diams;Thông tin đăng nhập</span></h1></td>
				</tr>
        <tr>
          <td><h4>Mã tài khoản:</h4></td>
          <td>
            <h4>
            <?php echo $r['id'] ?>
            </h4>
          </td>
        </tr>
        <tr>
          <td><h4>Tên tài khoản:</h4></td>
          <td>
            <h4>
            <?php echo $r['username'] ?>
            </h4>
          </td>
        </tr>
				<tr>
					<td><h4>Mật khẩu:</h4></td>
          <td><h4>&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;</h4></td>
				</tr>
				<tr>
					<td colspan="2"><h1><span style="color:#008">&diams;Thông tin cá nhân</span></h1></td>
				</tr>
        <tr>
          <td><h4>Tên đầy đủ:</h4></td>
          <td>
            <h4>
            <?php echo $r['name'] ?>
            </h4>
          </td>
        </tr>
				<tr>
          <td><h4>Ngày sinh:</h4></td>
          <td>
            <h4>
            <?php echo $r['dateOfBirth'] ?>
            </h4>
          </td>
        </tr>
				<tr>
          <td><h4>Địa chỉ:</h4></td>
          <td>
            <h4>
            <?php echo $r['address'] ?>
            </h4>
          </td>
        </tr>
				<tr>
          <td><h4>Số điện thoại:</h4></td>
          <td>
            <h4>
            <?php echo $r['phoneNumber'] ?>
            </h4>
          </td>
        </tr>
				<tr>
          <td><h4>Email:</h4></td>
          <td>
            <h4>
            <?php echo $r['email'] ?>
            </h4>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td>
            <a href="<?php echo SERVER_NAME ?>/logout" style="text-decoration:none">
              <button type="submit" name="button" class="btn btn-success btn-block"><i class="fa fa-angle-left"></i>Đăng xuất
              </button>
            </a>
          </td>
					<td class="hidden-xs">
						<a href=<?=SERVER_NAME.'/editProfile'?> class="btn btn-warning btn-block" style="color:#fff;">Chỉnh sửa</a>
					</td>
        </tr>
      </tfoot>
    </table>
  </div>

	<?php
	$dsDonHang = $dbOrder->getOrdersByUser($userId);
	if (count($dsDonHang) == 0) {

	?>
		<form class="log-form" action="<?php echo SERVER_NAME ?>/product" method="post" style="padding:20px 2%;float:left">
		  <h2 style="text-align:center">Bạn chưa có đơn hàng nào!</h2>
		  <br><button type="submit" name="button">Mua hàng</button>
		</form>
	<?php } else { ?>
		<div class="mt-products-list" style="width:50%;padding:20px 2%;">
			<h4>
				<table class="table table-hover table-condensed">
					<thead>
						<th style="width:5%"></th>
						<th style="width:40%"></th>
						<th style="width:20%"></th>
						<th style="width:5%"></th>
						<th style="width:30%"></th>
					</thead>
					<tbody>
						<tr>
							<td colspan="5"><h1><span style="color:#008">&diams;Danh sách đơn hàng</span></h1></td>
						</tr>
						<?php foreach ($dsDonHang as $donHang ) {
							echo '<tr>';
							switch ($donHang['tinhTrang']) {
								case 'Chưa xử lý':
									echo '<td colspan="3"><h4><span class="label label-warning">'.$donHang['tinhTrang'].'</span>';
									break;

								case 'Đã thanh toán':
									echo '<td colspan="3"><h4><span class="label label-info">'.$donHang['tinhTrang'].'</span>';
									break;

								case 'Đã hoàn tất':
									echo '<td colspan="3"><h4><span class="label label-success">'.$donHang['tinhTrang'].'</span>';
									break;

								default:
									# code...
									break;
							}
							echo '&nbsp;#'.$donHang['id'].'</h4></td>';
							echo '<td colspan="2"><b syle="text-align:right">'.$donHang['ngayDatHang'].'</b></td></tr>';

							$tongtien = 0;
							foreach ($donHang['dsChiTiet'] as $chiTietDH ) {
								echo '<tr>';
								echo '<td>'.$chiTietDH['soLuong'].'x</td>';
								echo '<td><a href='.SERVER_NAME.'/product/detail/'.$chiTietDH['sanPhamId'].'>'.$chiTietDH['tenSP'].'</a></td>';
								echo '<td>'.number_format($chiTietDH['gia']).' VND</td>';
								echo '<td>=</td><td>'.number_format($chiTietDH['gia']*$chiTietDH['soLuong']).' VND</td></tr>';
								$tongtien += $chiTietDH['gia']*$chiTietDH['soLuong'];
							}
							echo '<tr><td colspan="2"><b><u>Ghi chú:</u></b> '.$donHang['ghiChu'].'</td>';
							echo '<td colspan="2"><b>Tổng cộng</b></td><td><b>'.number_format($tongtien).' VND</b></td></tr><tr><td colspan="5"><h2>&nbsp;</h2></tr>';
						} ?>
					</tbody>
				</table>
			</h4>
		</div>
	<?php } } ?>

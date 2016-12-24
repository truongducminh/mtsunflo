

<?php
if (isset($_SESSION['userId'])) {
	include ROOT.'/module/user/profile.php';
}
else {

?>

<div class="log-option">
	<span>Đăng ký</span>
	<a href=<?php echo '"'.SERVER_NAME.'/forgotPassword"'; ?>>Quên mật khẩu</a>
	<a href=<?php echo '"'.SERVER_NAME.'/login"'; ?>>Đăng nhập</a>
</div>
<form class="log-form" action="<?= SERVER_NAME ?>/registerExecute" method="post" onsubmit="return ktra();">
	<h4>&diams;Thông tin đăng nhập</h4>
	<input type="text" name="username" value="" placeholder="Tên tài khoản" maxlength="16" required>
	<span>Độ dài 8-16 kí tự, chỉ bao gồm các chữ viết thường và số.</span>
	<input type="password" name="password" value="" placeholder="Mật khẩu" maxlength="32" required>
	<span>Mật khẩu có độ dài 8-32 kí tự.</span>
	<input type="password" name="retypePassword" value="" placeholder="Nhập lại mật khẩu" maxlength="32" onpaste="return false;" required>
	<h4>&nbsp;</h4>
	<h4>&diams;Thông tin cá nhân</h4>
	<input type="text" name="name" value="" placeholder="Tên đầy đủ">
	<span></span>
	<input type="text" name="dateOfBirth" value="" placeholder="Ngày sinh (dd/mm/yyyy)">
	<span></span>
	<input type="text" name="address" value="" placeholder="Địa chỉ">
	<span></span>
	<input type="text" name="phone" value="" placeholder="Số điện thoại">
	<span></span>
	<input type="email" name="email" value="" placeholder="Email">
	<button type="submit" name="submit">Đăng ký</button>
</form>
<script>
	function ktra() {
		var username = document.getElementsByName('username')[0].value;
		var password = document.getElementsByName('password')[0].value;
		var retypePassword = document.getElementsByName('retypePassword')[0].value;
		var dateOfBirth = document.getElementsByName('dateOfBirth')[0].value;
		var phone = document.getElementsByName('phone')[0].value;
		var pattern = new RegExp(/\W/i);
		if (pattern.test(username)) {
			alert('Tên tài khoản chỉ bao gồm các chữ viết thường và số.');
			return false;
		}
		if (username.length < 8){
			alert('Tên tài khoản quá ngắn!');
			return false;
		}
		if (password.length < 8){
			alert('Mật khẩu quá ngắn!');
			return false;
		}
		if (password != retypePassword) {
			alert('Mật khẩu nhập lại chưa đúng!');
			return false;
		}
		if (dateOfBirth != '') {
			var pattern = new RegExp(/^\d{1,2}\D\d{1,2}\D\d{1,4}/i);
			if (!pattern.test(dateOfBirth)) {
				alert('Ngày sinh không hợp lệ');
				return false;
			}
			var pattern = new RegExp(/\D/g);
			var parts = dateOfBirth.split(pattern);

			// Parse the date parts to integers
	    var day = parseInt(parts[0]);
	    var month = parseInt(parts[1]);
	    var year = parseInt(parts[2]);
			if ((day > 29 && month == 2)
				|| (day > 30 && (month == 4 || month == 6 || month == 9 || month == 11))
				|| day > 31) {
				alert('Ngày sinh không hợp lệ');
				return false;
			}
			if (month > 12) {
				alert('Tháng sinh không hợp lệ');
				return false;
			}
			var today = new Date();
			if (year > today.getFullYear() - 15 || year < today.getFullYear() - 120) {
				alert('Năm sinh không hợp lệ');
				return false;
			}
		}
		if (phone != ''){
			var pattern = new RegExp(/^\d{10,16}/i);
			if (!pattern.test(phone)) {
				alert('Số điện thoại không hợp lệ');
				return false;
			}
		}
		return true;
	}
</script>

<?php } ?>

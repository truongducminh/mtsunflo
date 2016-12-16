

<?php
if (isset($_SESSION['userId'])) {
	include ROOT.'/module/user/profile.php';
}
else {

?>


<div class="log-option">
	<span>Đăng nhập</span>
	<a href=<?php echo '"'.SERVER_NAME.'/forgotPassword"'; ?>>Quên mật khẩu</a>
	<a href=<?php echo '"'.SERVER_NAME.'/register"'; ?>>Đăng ký</a>
</div>
<form class="log-form" action="<?php echo SERVER_NAME ?>/loginExecute" method="post" onsubmit="return ktra()">
	<input type="text" name="username" value="" placeholder="Tài khoản">
	<span></span>
	<input type="password" name="password" value="" placeholder="Mật khẩu">
	<button type="submit">Đăng nhập</button>
</form>
<script>
	function ktra() {
		var username = document.getElementsByName('username')[0].value;
		var password = document.getElementsByName('password')[0].value;
		if (username == '' || password == '') {
			alert('Vui lòng nhập đầy đủ thông tin');
			return false;
		} else
			return true;
	}
</script>
<?php } ?>

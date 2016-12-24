<?php
$username = postValue('username');
$password = postValue('password');
$userDB = new User();
$rows = $userDB->verifyAccount($username, md5($password));
?>

<form class="log-form" action=<?php echo SERVER_NAME ?> method="post" >
<?php
if (count($rows) > 0) {
  $r = $rows[0];
	$_SESSION['userId'] = $r['id'];
	$_SESSION['email'] = $r['email'];
	$_SESSION['name'] = $r['name'];
	echo '<h2 style="text-align:center">Đăng nhập thành công</h2>';
  echo '<br><button type="submit" name="button"><a>Trang chủ</a></button>';
  $flag = true;
} else {
  echo '<h2 style="text-align:center">Đăng nhập thất bại!</h2>';
  echo '<br>
    <a href="'.SERVER_NAME.'/login">
      <button type="button" name="button">
        Thử lại
      </button>
    </a>
  ';
}
?>
</form>

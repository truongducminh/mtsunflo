

<form class="log-form" action=<?php echo SERVER_NAME ?> method="post">
<?php
$name = postValue('name');
$username = postValue('username');
$password = postValue('password');
$dateOfBirth = postValue('dateOfBirth');
$address = postValue('address');
$phone = postValue('phone');
$email = postValue('email');

if ($dateOfBirth != ''){
  $arr = preg_split("/\D/", $dateOfBirth);
  if ($arr[0] < 10) $arr[0] = '0'.$arr[0];
  if ($arr[1] < 10) $arr[1] = '0'.$arr[1];
  $dateOfBirth = $arr[2].'-'.$arr[1].'-'.$arr[0];
}
$userDB = new User();
$result = $userDB->insertUser($name, strtolower($username), md5($password), $dateOfBirth, $address, $phone, $email);
if ($result < 0) {
  echo '<h2 style="text-align:center">Tạo tài khoản thất bại!</h2>';
  echo '<br><a href="'.SERVER_NAME.'/register"><button type="button">Thử lại</button></a>';
} else {
	$_SESSION['userId'] = $result;
	echo '<h2 style="text-align:center">Tạo tài khoản thành công!</h2>';
  echo '<br><button type="submit" name="button">Trang chủ</button>';
}
?>
</form>

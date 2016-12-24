<?php
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $msg = '';
  if (!$username) $msg .= 'Username rỗng<br>';
  if (!$password) $msg .= 'Password rỗng<br>';
  if ($msg == '') {
    $userDB = new User();
    $u = $userDB->getAdminUser($username, md5($password));
    if ($u) {
      $_SESSION['adminId'] = $u[0]['id'];
      header('Location:'.SERVER_NAME.'/admin');
    } else {
      $msg = 'Sai tài khoản hoặc mật khẩu!';
    }
  }
  echo $msg;
}

?>

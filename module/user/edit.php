

<?php
if (!isset($_SESSION['userId'])) {
	include ROOT.'/module/user/login.php';
}
else {
  if (count($_POST)) {
    $userId = postValue('userId');
    $password = postValue('password');
    $oldpassword = postValue('oldpassword');
    $name = postValue('name');
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
    $msg = '';
    $userDB = new User();
    if ($oldpassword != '') {
      $user = $userDB->getUserById($userId)[0];
      if ($user['password'] != md5($oldpassword)) {
        $msg = 'Mật khẩu cũ không đúng';
        $action = SERVER_NAME.'/editProfile';
        $actionName = 'Thử lại';
      }
    }
    if ($msg == '') {
      $result = $userDB->updateUser($password==''?'':md5($password), $name, $dateOfBirth, $address, $phone, $email, $userId);
      if ($result) {
        $msg = 'Cập nhật thành công';
        $action = SERVER_NAME.'/profile';
        $actionName = 'Trở về hồ sơ';
      } else {
        $msg = 'Cập nhật thất bại';
        $action = SERVER_NAME.'/editProfile';
        $actionName = 'Thử lại';
      }
    }
    include ROOT.'/module/user/message.php';
  }
  else include ROOT.'/module/user/edit-form.php';
}
?>

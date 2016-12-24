<?php
$userId = $_SESSION['userId'];
$userDB = new User();
$rows = $userDB->getUserById($userId);
$r = $rows[0];
$array = explode('-',$r['dateOfBirth']);
$r['dateOfBirth'] = $array[2].'/'.$array[1].'/'.$array[0];
?>


<form class="log-form" action="<?= SERVER_NAME ?>/editProfile" method="post" onsubmit="return ktra();">
  <h4>&diams;Thay đổi mật khẩu</h4>
  <input type="hidden" name="userId" value=<?=$_SESSION['userId']?>>
  <input type="password" name="oldpassword" value="" placeholder="Mật khẩu cũ" maxlength="32">
  <span></span>
	<input type="password" name="password" value="" placeholder="Mật khẩu mới" maxlength="32">
	<span>Mật khẩu có độ dài 8-32 kí tự.</span>
	<input type="password" name="retypePassword" value="" placeholder="Nhập lại mật khẩu" maxlength="32" onpaste="return false;">
	<h4>&nbsp;</h4>
	<h4>&diams;Thông tin cá nhân</h4>
	<input type="text" name="name" value="<?=$r['name']?>" placeholder="Tên đầy đủ">
	<span></span>
	<input type="text" name="dateOfBirth" value="<?=$r['dateOfBirth']?>" placeholder="Ngày sinh (dd/mm/yyyy)">
	<span></span>
	<input type="text" name="address" value="<?=$r['address']?>" placeholder="Địa chỉ">
	<span></span>
	<input type="text" name="phone" value="<?=$r['phoneNumber']?>" placeholder="Số điện thoại">
	<span></span>
	<input type="email" name="email" value="<?=$r['email']?>" placeholder="Email">
	<button type="submit" name="submit">Lưu</button>
</form>
<script>
	function ktra() {
    var oldpassword = document.getElementsByName('oldpassword')[0].value;
		var password = document.getElementsByName('password')[0].value;
		var retypePassword = document.getElementsByName('retypePassword')[0].value;
		var dateOfBirth = document.getElementsByName('dateOfBirth')[0].value;
		var phone = document.getElementsByName('phone')[0].value;
		var pattern = new RegExp(/\W/i);
    if (oldpassword != '' && password != '' && retypePassword != '') {
      if (password.length < 8){
        alert('Mật khẩu quá ngắn!');
        return false;
      }
      if (password != retypePassword) {
        alert('Mật khẩu nhập lại chưa đúng!');
        return false;
      }
    } else if (oldpassword != '' || password != '' || retypePassword != '') {
      alert('Hãy nhập đầy đủ mật khẩu nếu bạn muốn thay đổi mật khẩu');
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

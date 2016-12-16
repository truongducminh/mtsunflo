

<form class="log-form" action=<?php echo SERVER_NAME ?> method="post">
<?php
$dbMessage = new Message();
$name = postValue('name');
$email = postValue('email');
$subject = postValue('subject');
$message = postValue('message');

$result = $dbMessage->insertMessage($name, $email, $subject, $message);
if ($result < 0) {
  echo '<h2 style="text-align:center">Gửi thất bại!';
  echo '<br><a href="<?php echo SERVER_NAME ?>/contact"><button type="button">Thử lại</button></a></h2>';
} else {
	echo '<h2 style="text-align:center">Gửi thành công!</h2>';
  echo '<br><button type="submit" name="button">Trang chủ</button>';
}
?>
</form>

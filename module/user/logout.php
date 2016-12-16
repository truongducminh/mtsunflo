<?php
unset($_SESSION['userId']);
?>
<form class="log-form" action=<?php echo SERVER_NAME ?> method="post">
  <h2 style="text-align:center">Bạn đã đăng xuất!</h2>
  <br><button type="submit" name="button">Trang chủ</button>
</form>

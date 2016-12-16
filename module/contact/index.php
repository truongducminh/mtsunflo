<?php
$name = '';
$email = '';
if (isset($_SESSION['userId'])) {
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
}
?>
<div class="mt-products-list">
  <form id="contactform" name="contact" method="post" action="<?php echo SERVER_NAME ?>/sendMessage">
    <p class="note"><span class="req"></span>Hãy liên hệ với chúng tôi, chúng tôi mong nhận được nhiều sự phản hồi cũng như cơ hội hợp tác.</p>

    <div class="row">
      <label for="name">Tên <span class="req">*</span></label>
      <input type="text" name="name" value="<?php echo $name ?>" id="name" class="txt" tabindex="1" placeholder="Steve Jobs" required>
    </div>

    <div class="row">
      <label for="email">Địa chỉ E-mail <span class="req">*</span></label>
      <input type="email" name="email" value="<?php echo $email ?>" id="email" class="txt" tabindex="2" placeholder="address@domain.com" required>
    </div>

    <div class="row">
      <label for="subject">Tiêu đề <span class="req">*</span></label>
      <input type="text" name="subject" id="subject" class="txt" tabindex="3" placeholder="Advertising/Press Ideas" required>
    </div>

    <div class="row">
      <label for="message">Nội dung <span class="req">*</span></label>
      <textarea name="message" id="message" class="txtarea" tabindex="4" required></textarea>
    </div>

    <div class="center">
      <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Gửi đi">
    </div>
  </form>
</div>

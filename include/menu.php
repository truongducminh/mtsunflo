

<?php
if (isset($_SESSION['userId'])) {
  $userAction = 'profile';
  $userMenu = 'Thông tin';
} else {
  $userAction = 'login';
  $userMenu = 'Đăng nhập';
}

?>

<!--mobile -->
<div class="navbar-container">
  <div class="container">
    <div class="navbar hidden-desktop">
      <div class="navbar-inner">
        <div class="container"> <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <span class="brand">Menu</span>
          <div class="nav-collapse collapse">
            <ul id="mt_accordionmenu" class="nav-accordion">
              <li>
                <a href="<?php echo SERVER_NAME; ?>/http://phattaiphatloc.esy.es/">Trang chủ</a>
              </li>
              <li class="item nav-love">
                <a class="item" href="<?php echo SERVER_NAME ?>/product">Sản Phẩm</a>
              </li>
              <li class="item nav-funeral">
                <a class="item" href="<?php echo SERVER_NAME ?>/info">Về chúng tôi</a>
              </li>
              <li class="item nav-week">
                <a class="item" href="<?php echo SERVER_NAME ?>/contact">Liên hệ</a>
              </li>
              <li class="item nav-week">
                <a class="item" href=<?php echo SERVER_NAME."/".$userAction.">".$userMenu ?></a>
              </li>
              <li class="item nav-week">
                <a class="item" href="<?php echo SERVER_NAME ?>/cart">Giỏ hàng</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--desktop-->
<div class="mt-navigation visible-desktop">
  <div class="container">
    <ul id="nav" class="megamenu">
      <li class="level0 level-top ">
        <a href=<?php echo SERVER_NAME; ?>><span>Trang chủ</span></a> </li>
      <li class="level0 nav-2 level-top">
        <a href="<?php echo SERVER_NAME; ?>/product" class="level-top"> <span>Sản Phẩm</span> </a> </li>
      <li class="level0 nav-3 level-top">
        <a href="<?php echo SERVER_NAME; ?>/info" class="level-top"> <span>Về chúng tôi</span> </a></li>
      <li class="level0 nav-4 level-top">
        <a href="<?php echo SERVER_NAME; ?>/contact" class="level-top"> <span>Liên hệ</span> </a> </li>
      <li class="level0 nav-5 level-top">
        <a href="<?php echo SERVER_NAME."/".$userAction ?>" class="level-top">
          <img src="<?php echo SERVER_NAME; ?>/images/login_icon.png" width="35" height="35"/>
        </a> </li> </a> </li>
      <li class="level0 nav-6 level-top last">
        <a href="<?php echo SERVER_NAME; ?>/cart" class="level-top" onclick="return cartCheck();">
          <img src="<?php echo SERVER_NAME; ?>/images/cart.png" width="35" height="35"/>
        </a> </li>
    </ul>
  </div>


</div>

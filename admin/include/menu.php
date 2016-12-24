<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="main-menu">
<li class="text-center">
    <img src="<?= SERVER_NAME.'/admin/assets/img/find_user.png'?>" class="user-image img-responsive"/>
</li>

<li>
  <a class="active-menu"  href=<?=SERVER_NAME.'/admin'?>><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
</li>

<li>
  <a href="#"><i class="fa fa-sitemap fa-3x"></i> Quản lý<span class="fa arrow"></span></a>
  <ul class="nav nav-second-level">
      <li>
          <a href=<?= SERVER_NAME.'/admin/product' ?>>Sản phẩm</a>
      </li>
      <li>
          <a href=<?= SERVER_NAME.'/admin/category' ?>>Phân loại</a>
      </li>
      <li>
          <a href=<?= SERVER_NAME.'/admin/order' ?>>Đơn hàng</a>
      </li>
      <li>
          <a href=<?= SERVER_NAME.'/admin/user' ?>>Khách hàng</a>
      </li>
  </ul>
</li>
<li>
   <a  href=<?= SERVER_NAME.'/admin/inbox' ?>><i class="fa fa-envelope-o fa-3x"></i> Hộp thư</a>
</li>

</nav>

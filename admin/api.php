<?php
if (!isset($_SESSION)) session_start();
include "../config.php";
include ROOT."/include/function.php";
include ROOT."/class/database.class.php";
include ROOT."/class/product.class.php";
include ROOT."/class/image.class.php";
include ROOT."/class/category.class.php";
include ROOT."/class/user.class.php";
include ROOT."/class/order.class.php";
include ROOT."/class/order-detail.class.php";
include ROOT."/class/message.class.php";

$mod = getValue('mod');
switch ($mod) {
  case 'login':
    include ROOT.'/admin/module/login/login.php';
    break;

  case 'logout':
    include ROOT.'/admin/module/login/logout.php';
    break;

  default:
    # code...
    break;
}
?>

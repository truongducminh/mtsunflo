<?php
if (!isset($_SESSION)) session_start();
if (!isset($db)) {
	include "config.php";
  include ROOT."/include/function.php";
  include ROOT."/class/database.class.php";
  include ROOT."/class/product.class.php";
  $db = new product();
}


$fmod = getValue("fmod");
switch ($fmod) {
	case 'loadmore':
		require ROOT.'/module/product/list-product.php';
		break;

	case 'add-to-cart':
		require ROOT.'/module/cart/add-to-cart.php';
		break;

	default:

		break;
}
?>

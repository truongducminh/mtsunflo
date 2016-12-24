<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['cart'])) {
	$id = getValue('id');
	$arrayCart = array($id);
	$_SESSION['cart'] = $arrayCart;
	echo "Đã thêm";
	exit();
}
else {
	$arrayCart = $_SESSION['cart'];
	$id = getValue('id');
	$arrayKeys = array_keys($arrayCart, $id);
	if (count($arrayKeys) > 0) {
		unset($arrayCart[$arrayKeys[0]]);
		$_SESSION['cart'] = $arrayCart;
		echo "Thêm vào giỏ hàng";
	}
	else {
		$arrayCart[] = $id;
		$_SESSION['cart'] = $arrayCart;
		echo "Đã thêm";
	}
	exit();
}
echo 0;
?>

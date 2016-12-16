<?php $name = postValue('name');
$price = postValue('price');
$categoryId = postValue('category');
$desc = postValue('desc');
$dbProduct = new Product();
$productId = $dbProduct->insertProduct($name, $categoryId, $desc, $price);
if ($productId > 0) {
  $image = new Image();
  $image->insertImage($productId,$_FILES['image']);
}

?>

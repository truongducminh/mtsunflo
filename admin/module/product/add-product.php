<?php $name = postValue('name');
$price = postValue('price');
$categoryId = postValue('category');
$desc = postValue('desc');

$msgSubject = 'Kết quả thêm sản phẩm';
$msgClass = 'panel panel-danger';
$action = SERVER_NAME.'/admin/product';
$actionClass = 'btn btn-danger';
$actionName = 'Trở về';
$msg = '';
if (!$name) $msg .= 'Tên sản phẩm trống<br>';
if (!$price) $msg .= 'Giá sản phẩm trống<br>';
else if (preg_match('/\D+/',$price) || strlen($price)<4) $msg .= 'Giá sản phẩm không hợp lệ<br>';
if (!$_FILES['image']['name']) $msg .= 'Sản phẩm chưa có hình<br>';

if ($msg == '') {
  $dbProduct = new Product();
  $productId = $dbProduct->insertProduct($name, $categoryId, $desc, $price);
  $msg = 'Có lỗi trong quá trình thêm sản phẩm';
  if ($productId > 0) {
    $msg = 'Thêm sản phẩm thành công';
    $image = new Image();
    $result = $image->insertImage($productId,$_FILES['image']);
    if ($result > 0) {
      $msgClass = 'panel panel-success';
      $actionClass = 'btn btn-primary';
    } else {
      $msg .= '<br>Đăng ảnh thất bại';
    }
  }
}
include ROOT.'/admin/module/product/message.php';
?>

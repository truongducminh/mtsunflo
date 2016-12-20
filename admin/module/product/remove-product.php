<?php
if (getValue('key')) {
  $id = getValue('key');
  $imageDB = new Image();
  $result = $imageDB->deleteImage($id);
  if ($result > 0) {
    $productDB = new Product();
    $result = $productDB->deleteProduct($id);
    if ($result > 0) {
      header('Location:'.SERVER_NAME.'/admin/product');
    } else {
      $msgSubject = 'Lỗi';
      $msgClass = 'panel panel-danger';
      $msg = 'Lỗi xóa sản phẩm<br>Xóa sản phẩm không thành công';
      $action = SERVER_NAME.'/admin/product';
      $actionClass = 'btn btn-danger';
      $actionName = 'Trở về';
      include ROOT.'/admin/module/product/message.php';
    }
  } else {
    $msgSubject = 'Lỗi';
    $msgClass = 'panel panel-danger';
    $msg = 'Lỗi xóa hình ảnh<br>Xóa sản phẩm không thành công';
    $action = SERVER_NAME.'/admin/product';
    $actionClass = 'btn btn-danger';
    $actionName = 'Trở về';
    include ROOT.'/admin/module/product/message.php';
  }
}
?>

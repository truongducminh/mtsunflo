<?php
  if (getValue('key')) {
    include ROOT.'/admin/module/product/edit-form.php';
  } else {
    $id = postValue('id');
    $name = postValue('name');
    $price = postValue('price');
    $categoryId = postValue('category');
    $desc = postValue('desc');
    $image = postValue('image');
    $newImage = $_FILES['newImage'];
    $msg = '';
    if ($newImage['type'] && $newImage['type'] != 'image/jpeg' && $newImage['type'] != 'image/png') $msg .= 'Hình ảnh không hợp lệ<br>';
    if (!$name) $msg .= 'Tên sản phẩm trống<br>';
    if (!$price) $msg .= 'Giá sản phẩm trống<br>';
    else if (preg_match('/\D+/',$price) || strlen($price)<4) $msg .= 'Giá sản phẩm không hợp lệ<br>';
    if ($msg!='') {
        $msgClass = 'panel panel-danger';
        $action = SERVER_NAME.'/admin/editProduct/'.$id;
        $actionClass = 'btn btn-danger';
        $actionName = 'Thử lại';
    } else {
      $productDB = new Product();
      $result = $productDB->updateProduct($id, $name, $categoryId, $desc, $price);
      if ($result > 0) {
        $msgClass = 'panel panel-success';
        $msg = 'Cập nhật thành công';
        $action = SERVER_NAME.'/admin/product';
        $actionClass = 'btn btn-primary';
        $actionName = 'Trở về';
      } else {
        $msgClass = 'panel panel-danger';
        $msg = 'Cập nhật thất bại';
        $action = SERVER_NAME.'/admin/editProduct/'.$id;
        $actionClass = 'btn btn-danger';
        $actionName = 'Thử lại';
      }
    }
    include ROOT.'/admin/module/product/message.php';

    if ($newImage['name']){
      $imageDB = new Image();
      $result = $imageDB->updateImage($id,$image,$newImage);
      if ($result > 0) {
        $msgClass = 'panel panel-success';
        $msg = 'Đổi ảnh thành công';
        $action = SERVER_NAME.'/admin/product';
        $actionClass = 'btn btn-primary';
        $actionName = 'Trở về';
      } else {
        $msgClass = 'panel panel-danger';
        $msg = 'Đổi ảnh thất bại';
        $action = SERVER_NAME.'/admin/editProduct/'.$id;
        $actionClass = 'btn btn-danger';
        $actionName = 'Thử lại';
      }
      include ROOT.'/admin/module/product/message.php';
    }
  }
?>

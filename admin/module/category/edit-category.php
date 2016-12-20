<?php
  if (getValue('key')) {
    include ROOT.'/admin/module/category/edit-form.php';
  } else {
    $id = postValue('id');
    $name = postValue('name');
    $desc = postValue('desc');
    echo $id.','.$name.','.$desc;
    $msgSubject = 'Kết quả cập nhật';
    $msg = '';
    if (!$name) $msg .= 'Tên loại sản phẩm trống<br>';
    if ($msg!='') {
        $msgClass = 'danger';
        $action = SERVER_NAME.'/admin/editCategory/'.$id;
        $actionClass = 'danger';
        $actionName = 'Thử lại';
    } else {
      $categoryDB = new Category();
      $result = $categoryDB->updateCategory($id, $name, $desc);
      if ($result > 0) {
        $msgClass = 'success';
        $msg = 'Cập nhật thành công';
        $action = SERVER_NAME.'/admin/category';
        $actionClass = 'primary';
        $actionName = 'Trở về';
      } else {
        $msgClass = 'danger';
        $msg = 'Cập nhật thất bại';
        $action = SERVER_NAME.'/admin/editCategory/'.$id;
        $actionClass = 'danger';
        $actionName = 'Thử lại';
      }
    }
    include ROOT.'/admin/module/category/message.php';
  }
?>

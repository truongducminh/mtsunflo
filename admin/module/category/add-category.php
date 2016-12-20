<?php
$name = postValue('name');
$desc = postValue('desc');
$msgClass = 'danger';
$msgSubject = 'Lỗi';
$msg = '';
$actionClass = 'danger';
$action = SERVER_NAME.'/admin/category';
$actionName = 'Trở về';
if ($name == '') {
  $msg = 'Tên loại sản phẩm không được rỗng';
}
else {
  $categoryDB = new Category();
  $result = $categoryDB->insertCategory($name,$desc);
  if ($result > 0) {
    $msgClass = 'success';
    $msgSubject = 'Kết quả';
    $msg = 'Thêm loại sản phẩm mới thành công';
    $actionClass = 'primary';
  } else {
    $msg = 'Thêm loại sản phẩm mới thất bại';
  }
}
include ROOT.'/admin/module/category/message.php';
?>

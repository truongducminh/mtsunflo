<?php
if (getValue('key')) {
  $id = getValue('key');
  $categoryDB = new Category();
  $result = $categoryDB->deleteCategory($id);
  if ($result > 0) {
    header('Location:'.SERVER_NAME.'/admin/category');
  } else {
    $msgSubject = 'Kết quả xóa';
    $msgClass = 'danger';
    $msg = 'Có lỗi trong quá trình xóa';
    $action = SERVER_NAME.'/admin/category';
    $actionClass = 'danger';
    $actionName = 'Trở về';
    include ROOT.'/admin/module/category/message.php';
  }
}
?>

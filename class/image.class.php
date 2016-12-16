<?php
/**
 *
 */
class Image extends database
{

  public function moveUploadedFile($image)
  {
    $tmp_name = $image["tmp_name"];
    $name = basename($image["name"]);
    move_uploaded_file($tmp_name, ROOT."/images/product/$name");
    return SERVER_NAME.'/images/product/'.$name;
  }

  public function insertImage($productId,$image)
  {
    $url = $this->moveUploadedFile($image);
    $sql = 'INSERT INTO hinh(sanPhamId,url) VALUES (?,?)';
    $array = array($productId,$url);
    $this->query($sql,$array);
  }

  public function updateImage($productId, $url, $image)
  {
    $this->removeImageFile($url);
    $url = $this->moveUploadedFile($image);
    $sql = 'UPDATE hinh SET url=? WHERE sanPhamId=?';
    $array = array($url,$productId);
    $this->query($sql,$array);
    return $this->row;
  }

  public function removeImageFile($url)
  {
    $name = basename($url);
    unlink(ROOT.'/images/product/'.$name);
  }

  public function getImageByProductId($productId)
  {
    $sql = 'SELECT url FROM hinh WHERE sanPhamId=?';
    $array = array($productId);
    return $this->query($sql,$array)[0];
  }
}
?>

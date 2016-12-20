<?php
/**
 *
 */
class Category extends Database
{

  public function insertCategory($name, $desc)
  {
    $sql = 'INSERT INTO loai(ten,moTa) VALUES(?,?)';
    $array = array($name, $desc);
    $this->query($sql,$array);
    return $this->row;
  }

  public function updateCategory($id, $name, $desc)
  {
    $sql = 'UPDATE loai SET ten=?,moTa=? WHERE id=?';
    $array = array($name, $desc, $id);
    $this->query($sql,$array);
    return $this->row;
  }

  public function deleteCategory($id)
  {
    $sql = 'DELETE FROM loai WHERE id=?';
    $array = array($id);
    $this->query($sql,$array);
    return $this->row;
  }

  public function getCategoriesById($id)
  {
    $sql = 'SELECT * FROM loai WHERE id = ?';
    $array = array($id);
    return $this->query($sql,$array)[0];
  }

  public function getCategoriesCount()
  {
    $sql = 'SELECT COUNT(id) FROM loai';
    $row = $this->query($sql)[0];
    print_r($row);
  }

  public function getAllCategories()
  {
    $categories = array();
    $rows = $this->query("SELECT * FROM loai");
    foreach ($rows as $r ) {
      $category['id'] = $r['id'];
      $category['name'] = $r['ten'];
      $categories[] = $category;
    }
    return $categories;
  }

  public function get100Categories($page = 0)
  {
    $categories = array();
    $rows = $this->query("SELECT * FROM loai ORDER BY id LIMIT ".($page*100).",100");
    foreach ($rows as $r ) {
      $category['id'] = $r['id'];
      $category['name'] = $r['ten'];
      $category['desc'] = $r['moTa'];
      $categories[] = $category;
    }
    return $categories;
  }
}


?>

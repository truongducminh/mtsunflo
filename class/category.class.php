<?php
/**
 *
 */
class Category extends Database
{

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

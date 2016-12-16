<?php
/**
 *
 */
class OrderDetail {

  function __construct($sanPhamId, $soLuong)
  {
    $this->sanPhamId = $sanPhamId;
    $this->soLuong = $soLuong;
  }

  public function getSanPhamID() {
    return $this->sanPhamId;
  }

  public function setSanPhamId($sanPhamId) {
    $this->sanPhamId = $sanPhamId;
  }

  public function getSoLuong() {
    return $this->soLuong;
  }

  public function setSoLuong($soLuong)
  {
    $this->soLuong = $soLuong;
  }
}

?>

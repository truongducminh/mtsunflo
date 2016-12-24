<?php
class Order extends database
{

  public function getOrderById($id)
  {
    $row = $this->query("SELECT * FROM donhang WHERE id = ?", array($id))[0];
    $donHang = array();
    $donHang['id'] = $row['id'];
    $donHang['tinhTrang'] = $row['tinhTrang'];
    $donHang['ngayDatHang'] = $row['ngayDatHang'];
    $donHang['ghiChu'] = $row['ghiChu'];
    $donHang['dsChiTiet'] = $this->getOrderDetails($row['id']);
    return $donHang;
  }

  public function getOrdersByUser($userId)
  {
    $dsDonHang = array();
    $rows = $this->query("SELECT * FROM donhang WHERE userId = ?", array($userId));
    foreach ($rows as $r) {
      $donHang = array();
      $donHang['id'] = $r['id'];
      $donHang['tinhTrang'] = $r['tinhTrang'];
      $donHang['ngayDatHang'] = $r['ngayDatHang'];
      $donHang['ghiChu'] = $r['ghiChu'];
      $donHang['dsChiTiet'] = $this->getOrderDetails($r['id']);
      $dsDonHang[] = $donHang;
    }
    return $dsDonHang;
  }

  public function getOrderDetails($orderId)
  {
    $dsChiTiet = array();
    $rows = $this->query("SELECT * FROM ctdonhang INNER JOIN sanpham ON ctdonhang.sanPhamId = sanpham.id WHERE donHangId = ?", array($orderId));
    foreach ($rows as $r) {
      $chiTietDH = array();
      $chiTietDH['sanPhamId'] = $r['sanPhamId'];
      $chiTietDH['tenSP'] = $r['ten'];
      $chiTietDH['gia'] = $r['gia'];
      $chiTietDH['soLuong'] = $r['soLuong'];
      $dsChiTiet[] = $chiTietDH;
    }
    return $dsChiTiet;
  }

  public function insertOrder($userId, $comment, $arrayOrder) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $this->query("INSERT INTO donhang (userId, ghiChu) VALUES (?, ?)", array($userId, $comment));
    if ($this->row <= 0) return -1;
    $id = $this->pdo->lastInsertId();
    foreach ($arrayOrder as $orderDetail) {
      $this->query("INSERT INTO ctdonhang (donHangId, sanPhamId, soLuong) VALUES (?, ?, ?)",
        array($id, $orderDetail->getSanPhamId(), $orderDetail->getSoLuong())
      );
      if ($this->row <= 0) return -1;
    }
    return 1;
  }

  public function get100Orders($page = 0)
  {
    $orders = array();
    $rows = $this->query("SELECT donhang.*,user.name FROM donhang INNER JOIN user ON donhang.userId = user.id ORDER BY donhang.ngayDatHang LIMIT ".($page*100).",100");
    foreach ($rows as $r) {
      $order = array();
      $order['id'] = $r['id'];
      $order['status'] = $r['tinhTrang'];
      $order['orderDate'] = $r['ngayDatHang'];
      $order['userId'] = $r['userId'];
      $order['userName'] = $r['name'];
      $order['comment'] = $r['ghiChu'];
      $order['orderDetails'] = $this->getOrderDetails($r['id']);
      $orders[] = $order;
    }
    return $orders;
  }

}

?>

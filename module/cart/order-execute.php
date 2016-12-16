<div class="product-view ">
  <div class="product-essential row-fluid show-grid">
    <div id="product_addtocart_form">
      <div class="product-name" >
        <h1>Đặt hàng</h1>
      </div>
      <div class="clickable clearfix">
        <?php
        if (!isset($_SESSION['userId'])) {
          echo 'Hãy <a href='.SERVER_NAME.'>đăng nhập</a> để đặt hàng!';
        } else {
          $dbOrder = new Order();
          $userId = $_SESSION['userId'];
          $arrayCart = $_SESSION['cart'];
          $arrayQuantity = postValue('quantity');
          $comment = postValue('comment');
          $arrayOrder = array();
          for ($i=0; $i < count($arrayCart); $i++) {
            $arrayOrder[$i] = new OrderDetail($arrayCart[$i], $arrayQuantity[$i]);
          }
          $result = $dbOrder->insertOrder($userId, $comment, $arrayOrder);
          if ($result > 0) {
            echo '<h1 style="text-align:center">Đặt hàng thành công!</h1>';
            echo '<br><a href='.SERVER_NAME.'><button type="submit" name="button" class="btn btn-success btn-block" style="width:20%;margin:auto;">Trang chủ</button></a>';
            unset($_SESSION['cart']);
          }
          else {
            echo '<h1 style="text-align:center">Đặt hàng thất bại!</h1>';
            echo '<br><a href="'.SERVER_NAME.'/cart" ><button type="submit" name="button" class="btn btn-success btn-block" style="width:20%;margin:auto;">Thử lại</button></a>';
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>

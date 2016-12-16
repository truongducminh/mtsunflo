

<div id="messages_product_view"></div>
<div class="product-view ">
  <div class="product-essential row-fluid show-grid">
    <div id="product_addtocart_form">
      <div class="product-name" >
        <h1>Giỏ hàng</h1>
      </div>

      <?php
      if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
        echo '<h1 style="margin-left:20px">Giỏ hàng rỗng! Mời bạn xem <a href='.SERVER_NAME.'/product>danh sách sản phẩm!</a> và thêm sản phẩm vào giỏ hàng</h1>';
      } else {
        $arrayCart = $_SESSION['cart'];

      ?>
      <form id="cart-form" class="" action="<?php echo SERVER_NAME ?>/orderExecute" method="post" onsubmit="return confirm('Bạn muốn đặt hàng?')">

        <table id="cart" class="table table-hover table-condensed">
          <thead>
            <tr>
              <th style="width:50%">Tên sản phẩm</th>
              <th style="width:10%">Giá</th>
              <th style="width:8%">Số lượng</th>
              <th style="width:22%" class="text-center">Thành tiền</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $total = 0;
            foreach ($arrayCart as $id) {
              $rows = $db->getProductById($id);
              $r = $rows[0];
              $total += $r['gia'];
            ?>
            <!--Item product-->
            <tr id=<?php echo $r['sanPhamId']?>>
              <td data-th="Product"><div class="row">
                  <div class="col-sm-2 hidden-xs"> <img src=<?php echo $r['url'] ?>
                    alt=<?php echo $r['ten'] ?> width="100" class="img-responsive"></div>
                  <div class="col-sm-10">
                    <h4 class="nomargin"><?php echo $r['ten'] ?></h4>
                    <p style="text-align:justify"><?php echo $r['moTa'] ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div></td>
              <td data-th="Price"><?php echo number_format($r['gia']) ?></td>
              <td data-th="Quantity"><input type="number" name="quantity[]" class="form-control text-center" value="1" min="1"
                onchange="changeSubtotal(this.value, <?php echo $r['sanPhamId'].', '.$r['gia'] ?>)"
                onkeyup="changeSubtotal(this.value, <?php echo $r['sanPhamId'].', '.$r['gia'] ?>)"></td>
              <td data-th="Subtotal" class="text-center"><?php echo number_format($r['gia']) ?></td>
            </tr>
            <?php } ?>

          </tbody>

          <!--Sum money-->
          <tfoot>
            <tr class="visible-xs">
              <td><textarea name="comment" rows="8" cols="80" class="txtarea" tabindex="4" style="margin-left:30px"></textarea></td>
              <td class="hidden-xs"></td>
              <td class="text-center"><h1>Tổng tiền</h1></td>
              <td class="text-center" id="total"><h1><?php echo number_format($total) ?> VND</h1></td>
            </tr>
            <tr>

              <!-- <td class="hidden-xs text-center"><strong>Tổng tiền 60.000 đ</strong></td> -->
              <td><button type="submit" name="button" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></button></td>
              <td colspan="2" class="hidden-xs"></td>
              <td><a href="<?php echo SERVER_NAME ?>/product" class="btn btn-warning btn-block"><i class="fa fa-angle-left"></i>Tiếp tục mua hàng</a></td>
            </tr>
          </tfoot>
        </table>
      </form>
    </div>

  </div>
</div>

<?php } ?>

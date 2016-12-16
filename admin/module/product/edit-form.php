<?php
$productDB = new Product();
$p = $productDB->getProductById(getValue('key'))[0];
?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          Sửa thông tin sản phẩm
      </div>
      <div class="panel-body">
        <div class="row">
          <form role="form" action=<?=SERVER_NAME.'/admin/editProduct' ?> method="post" enctype="multipart/form-data">
            <div class="col-md-6">
              <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="hidden" name="id" value=<?=$p['sanPhamId']?>>
                  <input type="hidden" name="image" value="<?=$p['url']?>">
                  <input class="form-control" name="name" value="<?=$p['ten']?>"/>
              </div>
              <label>Giá</label>
              <div class="form-group input-group">
                  <input class="form-control" name="price" align="right" value="<?=$p['gia']?>"/>
                  <span class="input-group-addon"> VND</span>
              </div>
              <div class="form-group">
                  <label>Loại</label>
                  <select class="form-control" name="category">
                    <?php $db = new Category();
                    $categories = $db->getAllCategories();
                    foreach ($categories as $c) {
                      echo '<option value='.$c['id'].' '.($p['loaiId']==$c['id']?'selected="selected"':'').'>'.$c['name'].'</option>';
                    }
                    ?>
                  </select>
              </div>
              <button type="submit" class="btn btn-default">Lưu</button>
              <button type="reset" class="btn btn-primary">Reset</button>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="desc" rows="5" style="resize:none"><?=$p['moTa']?></textarea>
              </div>
              <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="newImage">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

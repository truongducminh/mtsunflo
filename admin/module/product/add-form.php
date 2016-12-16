<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          Thêm sản phẩm
      </div>
      <div class="panel-body">
        <div class="row">
          <form role="form" action=<?=SERVER_NAME.'/admin/addProduct' ?> method="post" enctype="multipart/form-data">
            <div class="col-md-6">
              <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input class="form-control" name="name"/>
              </div>
              <label>Giá</label>
              <div class="form-group input-group">
                  <input class="form-control" name="price" align="right"/>
                  <span class="input-group-addon"> VND</span>
              </div>
              <div class="form-group">
                  <label>Loại</label>
                  <select class="form-control" name="category">
                    <?php $db = new Category();
                    $categories = $db->getAllCategories();
                    foreach ($categories as $c) {
                      echo '<option value='.$c['id'].'>'.$c['name'].'</option>';
                    }
                    ?>
                  </select>
              </div>
              <button type="submit" class="btn btn-default">Thêm mới</button>
              <button type="reset" class="btn btn-primary">Reset</button>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="desc" rows="5" style="resize:none"></textarea>
              </div>
              <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="image">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

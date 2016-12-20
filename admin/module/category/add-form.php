<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">
          Thêm sản phẩm
      </div>
      <div class="panel-body">
        <div class="row">
          <form role="form" action=<?=SERVER_NAME.'/admin/addCategory' ?> method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                  <label>Tên loại sản phẩm</label>
                  <input class="form-control" name="name"/>
                  <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="desc" rows="5" style="resize:none"></textarea>
                  </div>
              </div>
              <button type="submit" class="btn btn-default">Thêm mới</button>
              <button type="reset" class="btn btn-primary">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

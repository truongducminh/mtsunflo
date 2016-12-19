<div id="page-inner">
<div class="row">
    <div class="col-md-12">
      <h2>Quản lý loại sản phẩm</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          Thêm loại sản phẩm
      </div>
      <div class="panel-body">
        <div class="row">
          <form role="form" action="<?=SERVER_NAME?>/admin/addCategory" method="post">
            <div class="col-md-6">
              <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input class="form-control" name="name"/>
              </div>
              <button type="submit" class="btn btn-default">Thêm mới</button>
              <button type="reset" class="btn btn-primary">Reset</button>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="desc" rows="5" style="resize:none"></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 Advanced Tables
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Mã Loại</th>
                                <th>Tên loại</th>
                                <th>Mô tả</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $db = new Category();
                            $categories = $db->get100Categories();
                            foreach ($categories as $c) {
                              echo '<tr><td>'.$c['id'].'</td>';
                              echo '<td>'.$c['name'].'</td>';
                              echo '<td>'.$c['desc'].'</td></tr>';
                            }
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="#">Next 100</a>
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->
</div>

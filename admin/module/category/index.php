<div id="page-inner">
<div class="row">
    <div class="col-md-12">
      <h2>Quản lý loại sản phẩm</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />

<?php include ROOT.'/admin/module/category/add-form.php'; ?>

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
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $db = new Category();
                            $categories = $db->get100Categories();
                            foreach ($categories as $c) {
                              echo '<tr><td>'.$c['id'].'</td>';
                              echo '<td>'.$c['name'].'</td>';
                              echo '<td>'.$c['desc'].'</td>';
                              echo '<td><a class="btn btn-warning" href='.SERVER_NAME.'/admin/editCategory/'.$c['id'].'><i class="fa fa-edit "></i> Sửa</a></td>';
                              echo '<td><a class="btn btn-danger" href='.SERVER_NAME.'/admin/removeCategory/'.$c['id'].'><i class="fa fa-pencil"></i> Xóa</a></td></tr>';
                            }
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->
</div>

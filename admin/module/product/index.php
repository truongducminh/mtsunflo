<div id="page-inner">
<div class="row">
    <div class="col-md-12">
      <h2>Quản lý sản phẩm</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />

<?php include ROOT.'/admin/module/product/add-form.php'; ?>

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
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Mã Loại</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Ngày ra mắt</th>
                                <th>Lượt mua</th>
                                <th>Ảnh</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $db = new Product();
                            $products = $db->get100Products();
                            foreach ($products as $p) {
                              echo '<tr><td>'.$p['id'].'
                                <br><br><a class="btn btn-warning" href='.SERVER_NAME.'/admin/editProduct/'.$p['id'].'><i class="fa fa-edit "></i> Sửa</a>
                                <br><br><a class="btn btn-danger" href='.SERVER_NAME.'/admin/removeProduct/'.$p['id'].'><i class="fa fa-pencil"></i> Xóa</a></td>';
                              echo '<td>'.$p['name'].'</td>';
                              echo '<td>'.$p['cateId'].'</td>';
                              echo '<td>'.$p['desc'].'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</td>';
                              echo '<td>'.number_format($p['price']).'</td>';
                              echo '<td>'.$p['date'].'</td>';
                              echo '<td>'.$p['buy'].'</td>';
                        			echo '<td><img src='.$p['image'].' style="width:150px;height:180px;"></td></tr>';
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

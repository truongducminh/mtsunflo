
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
      <h2>Quản lý đơn hàng</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />


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
                              <th>Mã</th>
                              <th>Tình trạng</th>
                              <th>Ngày đặt hàng</th>
                              <th>Khách hàng</th>
                              <th>Chi tiết</th>
                              <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $db = new Order();
                            $orders = $db->get100Orders();
                            foreach ($orders as $o) {
                              //Order id and action
                              echo '<tr><td>'.$o['id'];
                              echo '<br><br><a class="btn btn-warning" href='.SERVER_NAME.'/admin/editOrder/'.$o['id'].'><i class="fa fa-edit "></i> Sửa</a>';
                              echo '<br><br><a class="btn btn-danger" href='.SERVER_NAME.'/admin/removeOrder/'.$o['id'].'><i class="fa fa-pencil"></i> Xóa</a></td>';
                              //Order status
                              echo '<td>'.$o['status'].'</td>';
                              //Order date
                              echo '<td>'.$o['orderDate'].'</td>';
                              //User's comment
                              echo '<td><u><b>Mã khách hàng:</b></u> '.$o['userId'];
                              echo '<br><u><b>Tên khách hàng:</b></u> '.$o['userName'];
                              echo '<br><u><b>Ghi chú:</b></u> '.$o['comment'].'</td>';

                              //Order details
                              echo '<td>';
                              $total = 0;
                              foreach ($o['orderDetails'] as $d) {
                                echo $d['soLuong'];
                                echo ' x '.$d['tenSP'];
                                echo ' x '.number_format($d['gia']).' VND<hr>';
                                $total += $d['gia'];
                              }
                              echo '</td>';
                              //Total
                              echo '<td>'.number_format($total).'</td>';
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

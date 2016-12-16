
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
      <h2>Quản lý khách hàng</h2>
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
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Ngày sinh</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $db = new User();
                            $users = $db->get100Users();
                            foreach ($users as $u) {
                              echo '<tr><td>'.$u['id'].'<div>Xóa</div><div>Sửa</div></td>';
                              echo '<td>'.$u['name'].'</td>';
                              echo '<td>'.$u['dateOfBirth'].'</td>';
                              echo '<td>'.$u['address'].'</td>';
                              echo '<td>'.$u['phoneNumber'].'</td>';
                              echo '<td>'.$u['email'].'</td></tr>';
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

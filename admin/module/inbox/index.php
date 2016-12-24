<div id="page-inner">
<div class="row">
    <div class="col-md-12">
      <h2>Hộp thư</h2>
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
                                <th>Người gửi</th>
                                <th>Email</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Thời gian</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $db = new Message();
                            $messages = $db->get100Messages();
                            foreach ($messages as $m) {
                              echo '<tr><td>'.$m['id'].'</td>';
                              echo '<td>'.$m['sender'].'</td>';
                              echo '<td>'.$m['email'].'</td>';
                              echo '<td>'.$m['subject'].'</td>';
                              echo '<td>'.$m['content'].'</td>';
                              echo '<td>'.$m['time'].'</td></tr>';
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

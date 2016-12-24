<div id="page-inner">
<div class="row">
  <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">
          Đăng nhập admin
      </div>
      <div class="panel-body">
        <div class="row">
          <form role="form" action=<?=SERVER_NAME.'/admin/api.php?mod=login' ?> method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="username">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password">
              </div>
              <button type="submit" class="btn btn-default">Đăng nhập</button>
              <button type="reset" class="btn btn-primary">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

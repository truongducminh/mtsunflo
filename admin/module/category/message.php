<?php
if (isset($msg)) {
?>
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-<?=$msgClass?>">
        <div class="panel-heading">
          <?=$msgSubject?>
        </div>
        <div class="panel-body">
          <?=$msg?>
        </div>
        <div class="panel-footer">
          <a class="btn btn-<?=$actionClass?>" href="<?=SERVER_NAME.'/admin'.$action?>"><?=$actionName?></a>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>

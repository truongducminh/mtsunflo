
<div class="mt-products-list">
  <section id="options" class="mt-prolist-title clearfix">
    <div class="top-actions-inner">
      <div class="product-title">
        <h2>Phát tài phát lộc mới</h2>
      </div>
    </div>
  </section>

  <div id="mtcontainer" class=" clickable clearfix">
    <?php
		$_GET['view']='new';
		include ROOT.'/module/product/list-product.php';
		?>
  </div>
</div>




<div class="mt-products-list">
  <section id="options" class="mt-prolist-title clearfix">
    <div class="top-actions-inner">
      <div class="product-title">
        <h2>Phát tài phát lộc dạng thuyền</h2>
      </div>
			<a href="<?php echo SERVER_NAME.'/product/dangthuyen'; ?>">Xem thêm >></a>
    </div>
  </section>

  <div id="mtcontainer" class=" clickable clearfix">
    <?php
		$_GET['view']='top4dangthuyen';
		include ROOT.'/module/product/list-product.php';
		?>
  </div>
</div>



<div class="mt-products-list">
  <section id="options" class="mt-prolist-title clearfix">
    <div class="top-actions-inner">
      <div class="product-title">
        <h2>Phát tài phát lộc dạng quạt</h2>
      </div>
			<a href="<?php echo SERVER_NAME.'/product/dangquat'; ?>" >Xem thêm >></a>
    </div>
  </section>

  <div id="mtcontainer" class=" clickable clearfix">
		<?php
		$_GET['view']='top4dangquat';
		include ROOT.'/module/product/list-product.php';
		?>
  </div>
</div>


<div class="mt-products-list">
  <section id="options" class="mt-prolist-title clearfix">
    <div class="top-actions-inner">
      <div class="product-title">
        <h2>Phát tài phát lộc dạng tháp</h2>
      </div>
			<a href="<?php echo SERVER_NAME.'/product/dangthap'; ?>">Xem thêm >></a>
    </div>
  </section>

  <div id="mtcontainer" class=" clickable clearfix">
		<?php
		$_GET['view']='top4dangthap';
		include ROOT.'/module/product/list-product.php';
		?>
  </div>
</div>

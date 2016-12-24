

<?php
$productDB = new product();
$sort = getValue('sort', 'asc');
$page = getValue('page',0);
if (isset($_POST['q'])) $view = $_POST['q'];
else $view = getValue('view','all');
settype($page, "int");
if ($view != '') {
	switch ($view) {
		case 'new':
			$rows = $productDB->getTop4NewProducts();
			break;

		case 'top4dangthap':
			$rows = $productDB->getTop4SellingProducts(1);
			break;

		case 'top4dangthuyen':
			$rows = $productDB->getTop4SellingProducts(2);
			break;

		case 'top4dangquat':
			$rows = $productDB->getTop4SellingProducts(3);
			break;

		case 'all':
			$rows = $productDB->getProducts($page, $sort);
			break;

		case 'dangthap':
			$rows = $productDB->getProductsByType(1,$page, $sort);
			break;

		case 'dangthuyen':
			$rows = $productDB->getProductsByType(2,$page, $sort);
			break;

		case 'dangquat':
			$rows = $productDB->getProductsByType(3,$page, $sort);
			break;

		default:
			$rows = $productDB->searchProducts($view,$page,$sort);
			break;
	}
}
$arrayCart = isset($_SESSION['cart'])?$_SESSION['cart']:array();
foreach ($rows as $r) {
	$arrayKeys = array_keys($arrayCart, $r['sanPhamId']);
	$cartAction = (count($arrayKeys)>0)?'Đã thêm':'Thêm vào giỏ hàng';
?>

<div class="item element filter-cat-3" data-category="filter-cat-3" style="width: 266px;">
  <div id="products-name">
    <h2 class="product-name"><a href=<?php echo SERVER_NAME."/product/detail/".$r['sanPhamId'] ?> title="Watercolor Beauty">
			<span><span><?php echo $r['ten'] ?></span></span></a></h2>
  </div>
  <div class="item-inner" style="height:300px;">
		<a href="<?php echo SERVER_NAME ?>/watercolor-beauty.html" title="Watercolor Beauty">
    <div id="30">
      <a href=<?php echo SERVER_NAME."/product/detail/".$r['sanPhamId'] ?>>
        <img src=<?=SERVER_NAME.'/images/product/'.$r['tenHinh']; ?> alt="Watercolor Beauty" style="max-height:300px;" />
      </a>
     </div>
    </a>
	</div>

  <div class="top-actions">
    <div class="top-actions-inner">
      <div class="mt-price">
        <div class="price-box"> <span class="regular-price" id="product-price-30"> <span class="price"><?php echo number_format($r['gia']) ?> VND</span> </span> </div>
      </div>
      <div class="mt-button">
        <button type="button" title="Add to Cart" class="button btn-cart <?=$r['sanPhamId'] ?>" onclick="addToCart(<?=$r['sanPhamId'] ?>)"><span><span><?=$cartAction ?></span></span></button>
      </div>
    </div>
  </div>

</div>
<?php } ?>

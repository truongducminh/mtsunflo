<?php
	if (isset($_POST['q'])) $view = $_POST['q'];
	else $view = getValue('view','all');
	$sort = getValue('sort','asc');
?>
<script>
var view = "<?php echo $view ?>";
var sort = "<?php echo $sort ?>";
var page = 0;

$(document).ready(function(){
	$("#loadmore").click(function(){
		page = page + 1;
		$.get("<?php echo SERVER_NAME; ?>/function.php", {fmod:"loadmore", page:page, view:view, sort:sort}, function(data){
			$("#mtcontainer").append(data);
		});
	});
});
</script>


<div class="mt-products-list">
  <section id="options" class="mt-prolist-title clearfix">
    <div class="top-actions-inner">
      <div class="product-title">
        <h2>Products List</h2>
      </div>
      <div class="order-fillter">
        <ul id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
          <li><a href=<?php echo SERVER_NAME."/product/".$view."/asc" ?> data-option-value="true" >Giá tăng dần</a></li>
          <li><a href=<?php echo SERVER_NAME."/product/".$view."/desc" ?> data-option-value="false" >Giá giảm dần</a></li>
        </ul>
      </div>
      <div class="cat-fillter">
        <ul id="filters" class="option-set clearfix" data-option-key="filter">
          <li><a href=<?php echo SERVER_NAME."/product/all/".$sort ?> data-option-value="*">Tất cả</a></li>
          <li><a href=<?php echo SERVER_NAME."/product/dangthuyen/".$sort ?> data-option-value=".filter-cat-3" >Dạng thuyền</a></li>
          <li><a href=<?php echo SERVER_NAME."/product/dangquat/".$sort ?> data-option-value=".filter-cat-4" >Dạng quạt</a></li>
          <li><a href=<?php echo SERVER_NAME."/product/dangthap/".$sort ?> data-option-value=".filter-cat-5" >Dạng tháp</a></li>
        </ul>
      </div>
    </div>
  </section>

  <div id="mtcontainer" class=" clickable clearfix">
    <?php include ROOT.'/module/product/list-product.php'; ?>
  </div>
	<div id="loadmore">Xem thêm >></div>
</div>


<script>
if (sort == "asc") {
	$("[data-option-value='true']").addClass("selected");
}
else {
	$("[data-option-value='false']").addClass("selected");
}

switch (view) {
	case "all":
		$("[data-option-value='*']").addClass("selected");
		break;

	case "dangthuyen":
		$("[data-option-value='.filter-cat-3']").addClass("selected");
		break;

	case "dangquat":
		$("[data-option-value='.filter-cat-4']").addClass("selected");
		break;

	case "dangthap":
		$("[data-option-value='.filter-cat-5']").addClass("selected");
		break;

	default:
		break;
}
</script>

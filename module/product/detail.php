<?php
$id = getValue('id');
$rows = $db->getProductById($id);
$r = $rows[0];
$categoryId = $r['loaiId'];
?>


<div id="messages_product_view"></div>
<div class="product-view ">
  <div class="product-essential row-fluid show-grid">
    <form action="" method="post" id="product_addtocart_form">
      <div class="product-name">
        <h1><?php echo $r['ten'] ?></h1>
      </div>
      <div class="product-img-box span6">
        <div id="wrap" style="top:0px;z-index:99;position:relative;">
			<img class="imgbox" src=<?php echo $r['url'] ?> alt="" title="Optional title display" style="display: block;">
        </div>
      </div>

      <div class="product-shop span6">
        <input id="optioncheck" name="optioncheck" value="0" type="hidden">
        <div class="products-type">
          <p class="availability in-stock">Availability: <span>In stock</span></p>
          <div class="price-box"> <span class="regular-price" id="product-price-8"> <span class="price"><?php echo number_format($r['gia']) ?> VND</span> </span> </div>
        </div>
        <div class="add-to-box">
          <div class="add-to-cart">
            <label for="qty">Qty:</label>
            <input name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" type="text">
            <button type="button" title="Add to Cart" class="button btn-cart" onclick="productAddToCartForm.submit(this)"><span><span>Add to Cart</span></span></button>
            <span class="textrepuired"></span>
          </div>
		    </div>


        <div class="clearer"></div>
        <div class="short-description">
          <h2>Quick Overview</h2>
          <div class="std">In hac habitasse platea dictumst. Cras id odio tellus, sed dignissim lacus! Aliquam ac purus at enim volutpat fringilla eu quis nibh. Proin et nibh quis mi aliquet scelerisque. Donec a eros a nibh dapibus aliquet! Nullam fringilla semper risus sit amet posuere. Aliquam ornare accumsan libero ac rhoncus? Nulla mi tellus, viverra non pulvinar sed, ornare porta sem. Aenean id interdum nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sed lectus a ligula tristique laoreet. Mauris eu mi ut dolor iaculis luctus. Aliquam auctor, tellus nec convallis scelerisque, urna urna elementum felis, lobortis porta ligula tortor nec ante. Proin luctus elementum viverra!</div>
        </div>
        <div class="clearer"></div>
      </div>
    </form>
  </div>
</div>



<div class="product-collateral">
  <ul class="product-tabs">
    <li id="product_tabs_description" class=" active first"><a href="javascript:void(0)">Product Description</a></li>
    <li id="product_tabs_product_additional_data" class=""><a href="javascript:void(0)">Reviews</a></li>
  </ul>

  <!-- Product Description-->
  <div class="product-tabs-content" id="product_tabs_description_contents">
    <h2>Details</h2>
    <div class="std">
      <p>In hac habitasse platea dictumst. Cras id odio tellus, sed dignissim lacus! Aliquam ac purus at enim volutpat fringilla eu quis nibh. Proin et nibh quis mi aliquet scelerisque. Donec a eros a nibh dapibus aliquet! Nullam fringilla semper risus sit amet posuere. Aliquam ornare accumsan libero ac rhoncus? Nulla mi tellus, viverra non pulvinar sed, ornare porta sem. Aenean id interdum nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sed lectus a ligula tristique laoreet. Mauris eu mi ut dolor iaculis luctus. Aliquam auctor, tellus nec convallis scelerisque, urna urna elementum felis, lobortis porta ligula tortor nec ante. Proin luctus elementum viverra!</p>
      <p>In hac habitasse platea dictumst. Cras id odio tellus, sed dignissim lacus! Aliquam ac purus at enim volutpat fringilla eu quis nibh. Proin et nibh quis mi aliquet scelerisque. Donec a eros a nibh dapibus aliquet! Nullam fringilla semper risus sit amet posuere. Aliquam ornare accumsan libero ac rhoncus? Nulla mi tellus, viverra non pulvinar sed, ornare porta sem. Aenean id interdum nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sed lectus a ligula tristique laoreet. Mauris eu mi ut dolor iaculis luctus. Aliquam auctor, tellus nec convallis scelerisque, urna urna elementum felis, lobortis porta ligula tortor nec ante. Proin luctus elementum viverra!</p>
    </div>
  </div>


  <!--Reviews-->
  <div class="product-tabs-content" id="product_tabs_product_additional_data_contents" style="display: none;">
    <div class="box-collateral box-reviews" id="customer-reviews">
      <div class="form-add">
        <h2>Write Your Own Review</h2>
        <form action="review/product/post/id/8/" method="post" id="review-form">
          <fieldset>
            <h3>You're reviewing: <span>Dandelion</span></h3>
            <h4>How do you rate this product? <em class="required">*</em></h4>
            <span id="input-message-box"></span>
            <table class="data-table" id="product-review-table">
              <colgroup>
              <col>
              <col width="1">
              <col width="1">
              <col width="1">
              <col width="1">
              <col width="1">
              </colgroup>
              <thead>
                <tr class="first last">
                  <th>&nbsp;</th>
                  <th><span class="nobr">1 star</span></th>
                  <th><span class="nobr">2 stars</span></th>
                  <th><span class="nobr">3 stars</span></th>
                  <th><span class="nobr">4 stars</span></th>
                  <th><span class="nobr">5 stars</span></th>
                </tr>
              </thead>
              <tbody>
                <tr class="first odd">
                  <th>Quality</th>
                  <td class="value"><input name="ratings[1]" id="Quality_1" value="1" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[1]" id="Quality_2" value="2" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[1]" id="Quality_3" value="3" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[1]" id="Quality_4" value="4" class="radio" type="radio"></td>
                  <td class="value last"><input name="ratings[1]" id="Quality_5" value="5" class="radio" type="radio"></td>
                </tr>
                <tr class="even">
                  <th>Price</th>
                  <td class="value"><input name="ratings[3]" id="Price_1" value="11" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[3]" id="Price_2" value="12" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[3]" id="Price_3" value="13" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[3]" id="Price_4" value="14" class="radio" type="radio"></td>
                  <td class="value last"><input name="ratings[3]" id="Price_5" value="15" class="radio" type="radio"></td>
                </tr>
                <tr class="last odd">
                  <th>Value</th>
                  <td class="value"><input name="ratings[2]" id="Value_1" value="6" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[2]" id="Value_2" value="7" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[2]" id="Value_3" value="8" class="radio" type="radio"></td>
                  <td class="value"><input name="ratings[2]" id="Value_4" value="9" class="radio" type="radio"></td>
                  <td class="value last"><input name="ratings[2]" id="Value_5" value="10" class="radio" type="radio"></td>
                </tr>
              </tbody>
            </table>
            <input name="validate_rating" class="validate-rating" value="" type="hidden">
            <script type="text/javascript">decorateTable('product-review-table')</script>
            <ul class="form-list">
              <li>
                <label for="nickname_field" class="required"><em>*</em>Nickname</label>
                <div class="input-box">
                  <input name="nickname" id="nickname_field" class="input-text required-entry" value="" type="text">
                </div>
              </li>
              <li>
                <label for="summary_field" class="required"><em>*</em>Summary of Your Review</label>
                <div class="input-box">
                  <input name="title" id="summary_field" class="input-text required-entry" value="" type="text">
                </div>
              </li>
              <li>
                <label for="review_field" class="required"><em>*</em>Review</label>
                <div class="input-box">
                  <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                </div>
              </li>
            </ul>
          </fieldset>
          <div class="buttons-set">
            <button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span></button>
          </div>
        </form>
        <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('review-form');
        Validation.addAllThese(
        [
               ['validate-rating', 'Please select one of each of the ratings above', function(v) {
                    var trs = $('product-review-table').select('tr');
                    var inputs;
                    var error = 1;

                    for( var j=0; j < trs.length; j++ ) {
                        var tr = trs[j];
                        if( j > 0 ) {
                            inputs = tr.select('input');

                            for( i in inputs ) {
                                if( inputs[i].checked == true ) {
                                    error = 0;
                                }
                            }

                            if( error == 1 ) {
                                return false;
                            } else {
                                error = 1;
                            }
                        }
                    }
                    return true;
                }]
        ]
        );
    //]]>
    </script>
      </div>
    </div>
  </div>
  <script type="text/javascript">
	//<![CDATA[
	Varien.Tabs = Class.create();
	Varien.Tabs.prototype = {
	  initialize: function(selector) {
		var self=this;
		$$(selector+' a').each(this.initTab.bind(this));
	  },

	  initTab: function(el) {
		  el.href = 'javascript:void(0)';
		  if ($(el.parentNode).hasClassName('active')) {
			this.showContent(el);
		  }
		  el.observe('click', this.showContent.bind(this, el));
	  },

	  showContent: function(a) {
		var li = $(a.parentNode), ul = $(li.parentNode);
		ul.select('li').each(function(el){
		  var contents = $(el.id+'_contents');
		  if (el==li) {
			el.addClassName('active');
			contents.show();
		  } else {
			el.removeClassName('active');
			contents.hide();
		  }
		});
	  }
	}
	new Varien.Tabs('.product-tabs');
	//]]>
	</script>
</div>




<div class="block block-related">
  <div class="block-title"> <strong><span>Related Products</span></strong> </div>
  <div class="block-content">
    <div class="mini-products-list row-fluid show-grid" id="block-related" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 1122px;">
      <ul class="last odd" style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 2805px; left: -748px;">

      <?php
			$rows = $db->getProductsByType($categoryId, 0);
			foreach ($rows as $r) {

			?>
      	<!--Item product-->
        <li style="width: 155px; padding: 16px; overflow: hidden; float: left;">
          <div class="item">
            <div id="products-name">
              <p class="product-name"><a href="#"><span><span><?php $r['ten'] ?></span></span></a></p>
            </div>
            <div class="item-inner">
              <div class="product"> <a href="#" title="Tháp 3 tầng" class="product-image">
             	  <img src=<?php echo $r['url'] ?> orchids="" flower="" alt="" style="height:200;"></a>
                <div class="product-details">
                  <input class="checkbox related-checkbox" id="related-checkbox5" name="related_products[]" value="5" type="checkbox">
                </div>
              </div>
            </div>
            <div class="price-box">
            	<span class="regular-price" id="product-price-5-related">
            		<span class="price"><?php echo number_format($r['gia']); ?> VND</span>
              </span>
            </div>
          </div>
        </li>
      <?php } ?>

      </ul>
    </div>
    <div class="pagenav"> <span class="rprev">Prev</span> <span class="rnext">Next</span> </div>
    <script type="text/javascript">decorateList('block-related', 'none-recursive')</script>
  </div>
  <script type="text/javascript">
    //<![CDATA[
    $mtkb(function() {
    	$mtkb(".mini-products-list").jCarouselLite({
                btnPrev: ".rprev",
                btnNext: ".rnext",
            vertical: false,
            hoverPause:true,
            visible: 6,
            auto: 4000,
            speed: 1000
        });
    });
    $$('.related-checkbox').each(function(elem){
        Event.observe(elem, 'click', addRelatedToProduct)
    });

    var relatedProductsCheckFlag = false;
    function selectAllRelated(txt){
        if (relatedProductsCheckFlag == false) {
            $$('.related-checkbox').each(function(elem){
                elem.checked = true;
            });
            relatedProductsCheckFlag = true;
            txt.innerHTML="unselect all";
        } else {
            $$('.related-checkbox').each(function(elem){
                elem.checked = false;
            });
            relatedProductsCheckFlag = false;
            txt.innerHTML="select all";
        }
        addRelatedToProduct();
    }

    function addRelatedToProduct(){
        var checkboxes = $$('.related-checkbox');
        var values = [];
        for(var i=0;i<checkboxes.length;i++){
            if(checkboxes[i].checked) values.push(checkboxes[i].value);
        }
        if($('related-products-field')){
            $('related-products-field').value = values.join(',');
        }
    }
    //]]>
    </script>
</div>
<script type="text/javascript">
    var lifetime = 3600;
    var expireAt = Mage.Cookies.expires;
    if (lifetime > 0) {
        expireAt = new Date();
        expireAt.setTime(expireAt.getTime() + lifetime * 1000);
    }
    Mage.Cookies.set('external_no_cache', 1, expireAt);
</script>

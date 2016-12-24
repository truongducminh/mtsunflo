

function addToCart(id) {
	$.get(window.location.origin + "/mtsunflo/function.php", {fmod:"add-to-cart", id:id}, function(data){
		$(".btn-cart." + id).html("<span><span>" + data + "</span></span>");
	});
}


function changeSubtotal(value, sanPhamId, price) {
	var total = 0;
	var subtotal = parseInt(price) * value;
	$('#' + sanPhamId + ' td[data-th="Subtotal"]').html(addCommas(subtotal));
	$('td[data-th="Subtotal"]').each(function(){
		total += parseInt(removeCommas($(this).html()));
	});
	$('#total h1').html(addCommas(total) + ' VND');
}


function removeCommas(numberStr) {
    numberStr = numberStr.replace(/,/g,"");
    return numberStr;
}
function addCommas(number) {
    number += '';
    x = number.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

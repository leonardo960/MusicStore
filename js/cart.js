function remove_item(item_name){
	//$.post("cart.php", {remove_item: item_name});
	alert('lol');
}

$('#cart-item-amount').bind('keyup input', function(){
	if(Number(this.value) >= Number(this.max) ){
	
	}else{
		
	}
});


function checkout(){
	document.getElementById("cart_form").submit();
}
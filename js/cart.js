function remove_item(item_name) {
	//$.post("cart.php", { remove_item: item_name });
	alert("test");
}

function quantity_change(item_name, quantity, max_quantity){
	if(quantity > max_quantity){
		alert("Please, select a quantity amount lesser than " + max_quantity)
	}else{
		var temp = {};
		temp['item_name'] = item_name;
		temp['amount'] = quantity;
		$.post("cart.php", { quantity_change: temp });
}

function checkout(){
	document.getElementById("cart_form").submit();
}

function test(){
	alert("CIAOH COME VAH");
}
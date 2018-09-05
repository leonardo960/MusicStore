function add_to_cart(id){
    $.post( "add_to_cart.php", { "item_id": id })
	.done(function( response ){
		if(response === 'success'){
			alert("Successfully added the item to cart!");
			var cartItems = parseInt(document.getElementById("cart-text").innerHTML.substring(document.getElementById("cart-text").innerHTML.length-1));
			cartItems++;
			document.getElementById("cart-text").innerHTML = document.getElementById("cart-text").innerHTML.substring(0, $('#cart-text').innerHTML.length-1);
			document.getElementById("cart-text").innerHTML = document.getElementById("cart-text").innerHTML + cartItems;
		} else if(response === 'already_added') {
			alert("Item already added to cart!");
		} else {
			alert("Error adding item to cart.");
		}
	});
}
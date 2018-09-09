function add_to_cart(id){
    $.post( "add_to_cart.php", { "item_id": id })
	.done(function( response ){
		if(response === 'success'){
			alert("Successfully added the item to cart!");
		} else if(response === 'already_added') {
			alert("Item already added to cart!");
		} else {
			alert("Error adding item to cart.");
		}
	});
}
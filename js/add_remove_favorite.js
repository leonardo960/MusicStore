function add_to_favorites(album_id){
	$.post( "add_favorite.php", { "item_id": album_id })
	.done(function( response ){
		if(response === 'success'){
			alert("Album added to your favorites!");
		} else if(response === 'already_added') {
			alert("Album already in your favorites.");
		} else {
			alert("Error adding album to your favorites.");
		}
	});
}

function remove_from_favorites(album_id){
	$.post( "remove_favorite.php", { "item_id": album_id })
	.done(function( response ){
		if(response === 'success'){
			alert("Album removed from your favorites.");
		} else {
			alert("Error removing album from your favorites.");
		}
	});
}
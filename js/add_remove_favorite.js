function add_to_favorites(album_id){
	$.post( "favorites.php", { "add_favorite": album_id })
	.done(function( response ){
		if(response === 'added'){
			alert("Album added to your favorites!");
			location.reload(true);
		} else if(response === 'already_added') {
			alert("Album already in your favorites.");
		} else {
			alert(response);
		}
	});
}

function remove_from_favorites(album_id, refresh){
	$.post( "favorites.php", { "delete_favorite": album_id })
	.done(function( response ){
		if(response === 'deleted'){
			alert("Album removed from your favorites.");
			if(refresh){
				location.reload(true);
			}
		} else if (response === 'already_deleted') {
			alert("Album already removed from your favorites.");
		} else {
			alert(response);
		}
	});
}
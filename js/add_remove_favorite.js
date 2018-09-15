function add_to_favorites(album_id){
	$.post( "favorites.php", { "add_favorite": album_id })
	.done(function( response ){
		if(response === 'added'){
			toggleAddFavoriteModal();
		} else if(response === 'already_added') {
			alert("Album already in your favorites.");
		} else {
			alert(response);
		}
	});
}

function toggleAddFavoriteModal() {
	var modal = document.querySelector(".add-favorite-modal");
    modal.classList.toggle("add-favorite-show-modal");
}

function toggleRemoveFavoriteModal() {
	var modal = document.querySelector(".remove-favorite-modal");
    modal.classList.toggle("remove-favorite-show-modal");
}


function remove_from_favorites(album_id){
	$.post( "favorites.php", { "delete_favorite": album_id })
	.done(function( response ){
		if(response === 'deleted'){
			toggleRemoveFavoriteModal();
		} else if (response === 'already_deleted') {
			alert("Album already removed from your favorites.");
		} else {
			alert(response);
		}
	});
}
var addFavoriteCloseButton = document.querySelector(".add-favorite-close-button");
var removeFavoriteCloseButton = document.querySelector(".remove-favorite-close-button");

addFavoriteCloseButton.addEventListener("click", function(){location.reload(true);});
removeFavoriteCloseButton.addEventListener("click", function(){location.reload(true);});

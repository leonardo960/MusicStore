function add_to_favorites(album_id){
	$("#add-to-favorites-"+album_id).css("pointer-events", "none");
	$.post( "favorites.php", { "add_favorite": album_id })
	.done(function( response ){
		if(response === 'added'){
			toggleAddFavoriteModal();
			$("#add-to-favorites-"+album_id).css("pointer-events", "auto");
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
	$("#remove-from-favorites-"+album_id).css("pointer-events", "none");
	$.post( "favorites.php", { "delete_favorite": album_id })
	.done(function( response ){
		if(response === 'deleted'){
			$("#remove-from-favorites-"+album_id).css("pointer-events", "auto");
			toggleRemoveFavoriteModal();
		} else if (response === 'already_deleted') {
			alert("Album already removed from your favorites.");
		} else {
			alert(response);
		}
	});
}

$(document).ready(function() { 
    var addFavoriteCloseButton = document.querySelector(".add-favorite-close-button");
	var removeFavoriteCloseButton = document.querySelector(".remove-favorite-close-button");
	if(addFavoriteCloseButton)
		addFavoriteCloseButton.addEventListener("click", function(){location.reload(true);});
	if(removeFavoriteCloseButton)
		removeFavoriteCloseButton.addEventListener("click", function(){location.reload(true);}); 
 });
 


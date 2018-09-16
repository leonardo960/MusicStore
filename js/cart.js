function remove_item(item_id){
	$("#remove-from-cart-"+item_id).css("pointer-events", "none");
	$.post("cart.php", {remove_item: item_id}).done(
		function(response){
			toggleDeleteCartModal(); 
			$("#remove-from-cart-"+item_id).css("pointer-events", "auto");
		}
	);
}



/*$('#cart-item-amount').bind('keyup input', function(){
	if(Number(this.value) >= Number(this.max) ){
	
	}else{
		
	}
});*/


function checkout(){
	document.getElementById("cart_form").submit();
}

function add_to_cart(id){
    $("#add-to-cart-"+id).css("pointer-events", "none");
	$.post( "cart.php", { "add_item": id })
	.done(function( response ){
		if(response === 'success'){
			toggleAddCartModal();
			modifyCartNumber();
			$("#add-to-cart-"+id).css("pointer-events", "auto");
		} else if(response === 'already_added') {
			toggleAlreadyAddedCartModal();
		} else {
			alert("Error adding item to cart.");
		}
	});
}

function modifyCartNumber(){
	realInnerHTML = document.getElementById('cart-text').innerHTML.substring(0, document.getElementById('cart-text').innerHTML.indexOf("<"));
	firstDigit = realInnerHTML.substring(realInnerHTML.length-1);
	if(firstDigit == ']'){		
		document.getElementById('cart-text').innerHTML = "cart: 1" + document.getElementById('cart-text').innerHTML.substring(document.getElementById('cart-text').innerHTML.indexOf('<'));
		return;
	}
	possibleSecondDigit = realInnerHTML.substring(realInnerHTML.length-2, realInnerHTML.length-1);
	if(possibleSecondDigit == ' '){
		firstDigitValue = parseInt(firstDigit);
		if(firstDigitValue == 9){
			realInnerHTML = realInnerHTML.substring(0, realInnerHTML.length-1) + 10;
		} else {
			realInnerHTML = realInnerHTML.substring(0, realInnerHTML.length-1) + ++firstDigitValue;
		}
	} else {
		firstDigitValue = parseInt(firstDigit);
		secondDigitValue = parseInt(possibleSecondDigit);
		if(firstDigitValue+1 == 10){
			realInnerHTML = realInnerHTML.substring(0, realInnerHTML.length-2) + ++secondDigitValue + 0;
		} else {
			realInnerHTML = realInnerHTML.substring(0, realInnerHTML.length-2) + secondDigitValue + ++firstDigitValue;
		}
	}
	document.getElementById('cart-text').innerHTML = realInnerHTML + document.getElementById('cart-text').innerHTML.substring(document.getElementById('cart-text').innerHTML.indexOf('<'));
}

function toggleAddCartModal() {
	var modal = document.querySelector(".add-cart-modal");
    modal.classList.toggle("add-cart-show-modal");
}

function toggleDeleteCartModal() {
	var modal = document.querySelector(".delete-cart-modal");
    modal.classList.toggle("delete-cart-show-modal");
}

function toggleAlreadyAddedCartModal() {
	var modal = document.querySelector(".already-added-cart-modal");
    modal.classList.toggle("already-added-cart-show-modal");
}

var addCartCloseButton = document.querySelector(".add-cart-close-button");
var alreadyAddedCartCloseButton = document.querySelector(".already-added-cart-close-button");

if(addCartCloseButton)
	addCartCloseButton.addEventListener("click", toggleAddCartModal);
if(alreadyAddedCartCloseButton)
	alreadyAddedCartCloseButton.addEventListener("click", toggleAlreadyAddedCartModal);

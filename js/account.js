var name = document.getElementById("name_input").value;
var surname = document.getElementById("surname_input").value;
var email = document.getElementById("email_input").value;

function edit_click() {
	document.getElementById('name_input').removeAttribute('disabled');
	document.getElementById('surname_input').removeAttribute('disabled');
	document.getElementById('email_input').removeAttribute('disabled');
	document.getElementById('edit-button-box').style.visibility = "hidden";
	document.getElementById('save-button-box').style.visibility = "visible";
	
	document.getElementById('name_li').style.background = "#fafafa";
	document.getElementById('surname_li').style.background = "#fafafa";
	document.getElementById('email_li').style.background = "#fafafa";

}
function cancel_click() {
	document.getElementById('name_input').value = name;
	document.getElementById('surname_input').value = surname;
	document.getElementById('email_input').value = email;
	
	document.getElementById('name_input').setAttribute('disabled','disabled');
	document.getElementById('surname_input').setAttribute('disabled','disabled');
	document.getElementById('email_input').setAttribute('disabled','disabled');
	
	document.getElementById('edit-button-box').style.visibility = "visible";
	document.getElementById('save-button-box').style.visibility = "hidden";
	
	
	document.getElementById('name_li').style.background = "#a5a5a5";
	document.getElementById('surname_li').style.background = "#a5a5a5";
	document.getElementById('email_li').style.background = "#a5a5a5";

}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function save_click() {
	//Controllo pattern dei vari campi
	//Campo username
	var re = new RegExp("^([A-Za-z0-9]{4,20})$");
	if (re.test(document.getElementById('username_input').value)) {
		//Campo nome
		re = new RegExp("^([A-Za-z]{1,20})$");
		if(re.test(document.getElementById('name_input').value)) {
			//Campo cognome
			if(re.test(document.getElementById('surname_input').value)) {
				//Campo email
				if(validateEmail(document.getElementById('email_input').value)) {
					//Submittiamo essendo i dati corretti
					document.getElementById('change_info_form').submit();
				} else {
					alert("Error: non valid email. Please insert a valid one.");
				}
			} else {
				alert("Error: non valid surname. Please insert a valid one.");
			}
		} else {
			alert("Error: non valid name. Please insert a valid one.");
		}
	} else {
		alert("Error: non valid username. Please insert a valid one.");
	}
	
}

function toggleAddressAddedModal() {
	var modal = document.querySelector(".address-added-modal");
    modal.classList.toggle("address-added-show-modal");
}

function toggleAddressEditModal() {
	var modal = document.querySelector(".address-edit-modal");
    modal.classList.toggle("address-edit-show-modal");
}



var addressAddedCloseButton = document.querySelector(".address-added-close-button");
addressAddedCloseButton.addEventListener("click", function(){window.location.href = "http://localhost:8080/MusicStore/php/account.php";});

var addressAddedCloseButton = document.querySelector(".address-edit-close-button");
addressAddedCloseButton.addEventListener("click", function(){window.location.href = "http://localhost:8080/MusicStore/php/account.php";});


$(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#address-form').ajaxForm(function() { 
				$("#spinner").css("display", "none");
                toggleAddressAddedModal();
            }); 
			$('#edit-address-form').ajaxForm(function() { 
				$("#spinner").css("display", "none");
                toggleAddressEditModal();
            }); 
 });
		
function send_address(){
	//submit form
	$('#address-form').submit();
	//close form popup
	$("#openModal").css("display", "none");
	//show loading popup
	$("#spinner").css("display", "inline-block");
}

function delete_address(id){
	$.post( "account.php", { "delete_address": id })
	.done(function( response ){
		if(response === 'deleted'){
			window.location.href = "http://localhost:8080/MusicStore/php/account.php";
		} else {
			alert("Error deleting address.");
		}
	});
}

function modify_address(){
	//submit form
	$('#edit-address-form').submit();
	//close form popup
	$("#addressEditOpenModal").css("display", "none");
	//show loading popup
	$("#spinner").css("display", "inline-block");
}

function populate_address_edit_form(addressId){
	$('#edit-customer-name').val($('#address-'+addressId+'-name').html());
	$('#edit-customer-surname').val($('#address-'+addressId+'-surname').html());
	$('#edit-customer-country').val($('#address-'+addressId+'-country').html());
	$('#edit-customer-province').val($('#address-'+addressId+'-province').html());
	$('#edit-customer-city').val($('#address-'+addressId+'-city').html());
	$('#edit-customer-postal-code').val($('#address-'+addressId+'-postal-code').html());
	$('#edit-customer-address').val($('#address-'+addressId+'-address').html());
	$('#edit-customer-telephone').val($('#address-'+addressId+'-telephone').html());
	$('#edit-address-id').val(addressId);
}

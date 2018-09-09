var username = document.getElementById("username_input").value;
var name = document.getElementById("name_input").value;
var surname = document.getElementById("surname_input").value;
var email = document.getElementById("email_input").value;

function edit_click() {
	document.getElementById('username_input').removeAttribute('disabled');
	document.getElementById('name_input').removeAttribute('disabled');
	document.getElementById('surname_input').removeAttribute('disabled');
	document.getElementById('email_input').removeAttribute('disabled');
	document.getElementById('edit-button-box').style.visibility = "hidden";
	document.getElementById('save-button-box').style.visibility = "visible";
	
	document.getElementById('username_li').style.background = "#fafafa";
	document.getElementById('name_li').style.background = "#fafafa";
	document.getElementById('surname_li').style.background = "#fafafa";
	document.getElementById('email_li').style.background = "#fafafa";

}
function cancel_click() {
	document.getElementById('username_input').value = username;
	document.getElementById('name_input').value = name;
	document.getElementById('surname_input').value = surname;
	document.getElementById('email_input').value = email;
	
	document.getElementById('username_input').setAttribute('disabled','disabled');
	document.getElementById('name_input').setAttribute('disabled','disabled');
	document.getElementById('surname_input').setAttribute('disabled','disabled');
	document.getElementById('email_input').setAttribute('disabled','disabled');
	
	document.getElementById('edit-button-box').style.visibility = "visible";
	document.getElementById('save-button-box').style.visibility = "hidden";
	
	
	document.getElementById('username_li').style.background = "#a5a5a5";
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

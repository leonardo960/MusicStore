<?php
	//Init view
	require "init_smarty.php";
	
	$head = "../templates/mod_login_head.html";
	$content = "../templates/mod_login_content.html";
	
	if (isset($_POST['username']) && isset($_POST['password'])) {
		require "include/dbms.inc.php";
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['username'] = test_input($_POST['username']);
		
		
		require "include/mod.auth.inc.php";
		//Se arrivo fin qui vuol dire che il login ha avuto successo
		//Devo tornare alla home stavolta con l'utente loggato
		//Quindi l'index diventa anche lui un .php che si occupa, ad esempio,
		//di iniettare "log in" o meno a seconda che $_SESSION['auth'] contenga qualcosa
		//o no.
		
		Header('Location: mod_panel.php');
		exit();
	} elseif (isset($_GET['error'])) {
		if ($_GET['error'] === 'dataincorrect') {
			//Username o password non corretti
			$error = "../templates/errors/username_or_password_incorrect_error.html";
			$smarty->assign("error", $error);
		} elseif ($_GET['error'] === 'databaseerror') {
			//Errore nella comunicazione con il DB
			$error = "../templates/errors/database_error.html";
			$smarty->assign("error", $error);
		}
	} 
	
	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
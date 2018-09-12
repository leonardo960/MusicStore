<?php
	//Init view
	require "init_smarty.php";
	
	$content = "../templates/login_content.html";
		
	if (isset($_POST['username']) && isset($_POST['password'])) {
		require "include/dbms.inc.php";
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['username'] = test_input($_POST['username']);
		
		
		require "include/auth.inc.php";
		//Se arrivo fin qui vuol dire che il login ha avuto successo
		
		
		Header('Location: index.php');
		exit();
	} elseif (isset($_GET['error'])) {
		if ($_GET['error'] === 'usertaken') {
			//Username già in uso	
			$error = "../templates/errors/taken_username_error.html";
			$smarty->assign("error", $error);
		} elseif ($_GET['error'] === 'dataincorrect') {
			//Username o password non corretti
			$error = "../templates/errors/username_or_password_incorrect_error.html";
			$smarty->assign("error", $error);
		} elseif ($_GET['error'] === 'databaseerror') {
			//Errore nella comunicazione con il DB
			$error = "../templates/errors/database_error.html";
			$smarty->assign("error", $error);
		}
	} 

	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	require "include/set_active_logo.inc.php";

	$smarty->assign("content", $content);
	
	$smarty->display("../templates/frame_public.html");
?>
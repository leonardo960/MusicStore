<?php
	//Init view
	require "init_smarty.php";
	
	$head = "../templates/mod_signup_head.html";
	$content = "../templates/mod_signup_content.html";
	
	if (isset($_POST['username']) && isset($_POST['password'])) { //E GLI ALTRI DATI DEL MOD
		require "include/dbms.inc.php";
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['username'] = test_input($_POST['username']); //test_input SU TUTTI I DATI DEL MOD
		
		
		require "include/mod.signup.inc.php";
		
		$content = "../templates/mod_registration_successful.html";
		
		require "include/mod.set_logged_header.inc.php";
		
		$smarty->assign("head", $head);
		$smarty->assign("content", $content);
	
		$smarty->display("../templates/mod_frame_public.html");
		exit();
	} elseif (isset($_GET['error'])) 
			if ($_GET['error'] === 'usertaken') {
				//Username già in uso	
				$error = "../templates/errors/taken_username_error.html";
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
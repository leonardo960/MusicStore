<?php
	//Init view
	require "init_smarty.php";
	
	
	if (isset($_POST['username']) && isset($_POST['password'])) {
		require "include/dbms.inc.php";
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['username'] = test_input($_POST['username']);
		$_POST['password'] = test_input($_POST['password']);
		
		require "include/mod.auth.inc.php";
		//Se arrivo fin qui vuol dire che il login ha avuto successo
		
		
		Header('Location: mod_panel.php');
		exit();
	} elseif (isset($_GET['message'])) {
		switch($_GET['message']){
			case 'dataincorrect':
				//Username o password non corretti
				$message = "../templates/errors/mod_login_data_error.html";
				$smarty->assign("message", $message);
				break;
			case 'logout':
				$message = "../templates/messages/logout_successful.html";
				$smarty->assign("message", $message);
				break;
		}
	} 
	
	
	$smarty->display("../templates/mod_login.html");
?>
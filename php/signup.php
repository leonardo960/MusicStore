<?php
	require "include/dbms.inc.php";
	require "init_smarty.php";
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data; 
	}
	$_POST['username'] = test_input($_POST['username']);
	$_POST['name'] = test_input($_POST['name']);
	$_POST['surname'] = test_input($_POST['surname']);
	$_POST['email'] = test_input($_POST['email']);
	require "include/signup.inc.php";
	//E' andato tutto bene, mostro un messaggio di registrazione avvenuta con successo

	$head = "../templates/index_head.html";
	$content = "../templates/messages/registration_successful.html";
	
	$smarty->assign("newuser", $_SESSION['auth']['nome']);
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	
	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	require "include/set_active_logo.inc.php";
	
	$smarty->display("../templates/frame_public.html");

?>
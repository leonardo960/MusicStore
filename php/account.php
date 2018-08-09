<?php
	require "init_smarty.php";
	
	session_start();
	if ( isset($_SESSION['auth']) ) {
	
	$head = "../templates/account_head.html";
	$content = "../templates/account_content.html";
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	

	$smarty->assign("username", $_SESSION['auth']['username']);
	$smarty->assign("name", $_SESSION['auth']['nome']);
	$smarty->assign("surname", $_SESSION['auth']['cognome']);
	$smarty->assign("email", $_SESSION['auth']['email']);
	
	
	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	
	$smarty->display("../templates/frame_public.html");
	} else {
		Header("Location: login.php");
		exit();
	}
?>
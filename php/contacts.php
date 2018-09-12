<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$content = "../templates/contacts_content.html";
	
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	require "include/set_active_logo.inc.php";

	
	$smarty->display("frame_public.html");
	
?>
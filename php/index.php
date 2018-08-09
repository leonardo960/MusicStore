<?php	
	require "init_smarty.php";	
	
	session_start();
	
	$head = "../templates/index_head.html";
	$content = "../templates/index_content.html";
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	
	
	$smarty->display("frame_public.html");
	
?>
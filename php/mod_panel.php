<?php
	require "init_smarty.php";
	
	$head = "../templates/mod_panel_head.html";
	$content = "../templates/mod_panel_content.html";
	
	
	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
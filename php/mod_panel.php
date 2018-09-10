<?php
	require 'include/mod.check_service_permission.inc.php';
	
	require "init_smarty.php";
	
	$content = "../templates/mod_panel_content.html";
	
	
	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
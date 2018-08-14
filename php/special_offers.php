<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$head = "../templates/special_offers_head.html";
	$content = "../templates/special_offers_content.html";
	
	//Recuperiamo le offerte speciali
	$result = $db->query("select * from offerte_speciali");
	if($result){
		$smarty->assign("special_offers", $result);
	}
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	
	
	$smarty->display("frame_public.html");
	
?>
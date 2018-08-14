<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$head = "../templates/index_head.html";
	$content = "../templates/index_content.html";
	
	//Recuperiamo le ultime uscite e gli album in offerta
	/*$result = $db->query("select * from album order by data_inserimento limit 5");
	if($result){
		$smarty->assign("recent_albums", $result);
	}
	$result = $db->query("select * from offerte_speciali limit 5");
	if($result){
		$smarty->assign("special_offers", $result);
	}*/
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	
	
	$smarty->display("frame_public.html");
	
?>
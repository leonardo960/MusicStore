<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$content = "../templates/special_offers_content.html";
	
	//Recuperiamo le offerte speciali
	$result = $db->query("select * from offerte_speciali inner join album on album.id_album = offerte_speciali.album");
	if($result){
		$smarty->assign("special_offers", $result);
	}
	
	$result = $db->query("select * from artisti");
	if($result){
		$smarty->assign("special_offers_artists", $result);
	}
	
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	require "include/set_active_logo.inc.php";

	
	
	$smarty->display("frame_public.html");
	
?>
<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$head = "../templates/index_head.html";
	$content = "../templates/index_content.html";
	
	//Recuperiamo le ultime uscite e gli album in offerta
	$result = $db->query("SELECT * FROM album ORDER BY data_inserimento LIMIT 5");
	if($result){
		$smarty->assign("recent_albums", $result);
	}
    $result = $db->query("SELECT * FROM album JOIN offerte_speciali ON album.id_album = offerte_speciali.album LIMIT 5");
	if($result){
		$smarty->assign("special_offers", $result);
	}
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	require "include/set_active_logo.inc.php";
	
	$smarty->display("frame_public.html");
	
?>
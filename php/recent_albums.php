<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$head = "../templates/recent_albums_head.html";
	$content = "../templates/recent_albums_content.html";
	
	//Recuperiamo le ultime uscite
	$result = $db->query("select * from album order by data_inserimento limit 20");

	if($result){
		$smarty->assign("recent_albums", $result);
	}
	
	$result = $db->query("select * from artisti");
	
	if($result){
		$smarty->assign("recent_albums_artists", $result);
	}
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	
	
	$smarty->display("frame_public.html");
	
?>
<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$head = "../templates/artists_head.html";
	$content = "../templates/artists_content.html";
	
	//Recuperiamo le ultime uscite
	$result = $db->query("select * from artisti order by nome_artista limit 20");

	if($result){
		$smarty->assign("artists", $result);
	}
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	
	
	$smarty->display("frame_public.html");
	
?>
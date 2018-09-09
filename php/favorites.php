<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$head = "../templates/favorites_head.html";
	$content = "../templates/favorites_content.html";
	
	if(isset($_SESSION['auth'])){
		//Recuperiamo gli album preferiti dell'utente
		$result = $db->query("select * from album_preferiti join album on album_preferiti.album = album.id_album join genere on genere.id_genere = album.fk_genere where utente = '{$_SESSION['auth']['username']}'");
		if($result){
			$smarty->assign("album", $result);
		}
	
		$smarty->assign("head", $head);
		$smarty->assign("content", $content);
	
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";
	
	
		$smarty->display("frame_public.html");
	} else {
		$smarty->assign("head", $head);
		$smarty->assign("content", $content);
	
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";
	
	
		$smarty->display("frame_public.html");
	}
	
	
?>
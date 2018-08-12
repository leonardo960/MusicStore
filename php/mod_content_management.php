<?php
	require "init_smarty.php";
	
	$head = "../templates/mod_content_management_head.html";
	$content = "../templates/mod_content_management_content.html";
	
	switch($_GET['message']){ //Settato dalle varie pagine di manipolazione dei dati
		case "artist_inserted":
			$smarty->assign("message", "L'artista è stato inserito con successo nel sistema.");
			break;
		case "album_inserted":
			$smarty->assign("message", "L'album è stato inserito con successo nel sistema.");
			break;
		case "song_inserted":
			$smarty->assign("message", "La canzone è stata inserita con successo nel sistema.");
			break;
		case "modify_artist_error":
			$smarty->assign("message", "Errore nella selezione dell'artista per la modifica.");
			break;
	}
	
	require "include/set_logged_header.inc.php";
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
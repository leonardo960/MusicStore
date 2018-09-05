<?php
	require 'include/check_service_permission.inc.php';
	
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
		case "modify_artist_url_error":
			$smarty->assign("message", "Url della pagina di modifica dell'artista non corretto.");
			break;
		case "modify_artist_not_found":
			$smarty->assign("message", "Artista non trovato nel database.");
			break;
		case "artist_modified":
			$smarty->assign("message", "L'artista è stato modificato con successo.");
			break;
		case "artist_modify_error":
			$smarty->assign("message", "Si è verificato un errore durante la modifica dell'artista.");
			break;
		case "artist_delete_error":
			$smarty->assign("message", "Si è verificato un errore durante l'eliminazione dell'artista.");
			break;
		case "artist_deleted":
			$smarty->assign("message", "L'artista e tutti i suoi album sono stati eliminati dal sistema.");
			break;
		case "song_delete_error":
			$smarty->assign("message", "Si è verificato un errore durante l'eliminazione della canzone.");
			break;
		case "song_deleted":
			$smarty->assign("message", "La canzone è stata eliminata dall'album in cui era inserita.");
			break;
		case "modify_song_not_found":
			$smarty->assign("message", "Canzone non trovata nel database.");
			break;
		case "song_modify_error":
			$smarty->assign("message", "Si è verificato un errore durante la modifica della canzone.");
			break;
		case "song_modified":
			$smarty->assign("message", "Canzone modificata con successo.");
			break;
		case "modify_song_url_error":
			$smarty->assign("message", "Url della pagina di modifica della canzone non corretto.");
			break;
		case "album_deleted":
			$smarty->assign("message", "L'album è stato eliminato con successo dal sistema.");
			break;
		case "modify_album_not_found":
			$smarty->assign("message", "Album non trovato nel database.");
			break;
		case "album_modified":
			$smarty->assign("message", "Album modificato con successo.");
			break;
		case "modify_album_url_error":
			$smarty->assign("message", "Url della pagina di modifica dell'album non corretto.");
			break;
		case "album_modify_error":
			$smarty->assign("message", "Si è verificato un errore durante la modifica dell'album.");
			break;
		case "album_delete_error":
			$smarty->assign("message", "Si è verificato un errore durante l'eliminazione dell'album.");
			break;
		
	}
	
	require "include/set_logged_header.inc.php";
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
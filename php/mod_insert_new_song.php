<?php
	require 'include/mod.check_service_permission.inc.php';
	//Init view
	require "init_smarty.php";
	
	$content = "../templates/mod_insert_new_song_content.html";
	
	if (isset($_POST['album-info']) && isset($_POST['nome_canzone']) ) { //I DATI DERIVATI DALL'INSERIMENTO DELLA CANZONE
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['nome_canzone'] = test_input($_POST['nome_canzone']);
		$_POST['album-info'] = json_decode($_POST['album-info'], true);
		$_POST['fk_album'] = $_POST['album-info']['id_album'];
		$_POST['fk_artista'] = $_POST['album-info']['id_artista'];
		$target_dir = "../songs/";
		require "include/mod.insert_new_song.inc.php";
		
		
		Header("Location: mod_content_management.php?message=song_inserted");
		exit();
	} elseif (isset($_GET['error'])){ 
		switch($_GET['error']){
			case "databaseerror":
				//Errore nella comunicazione con il DB
				$error = "../templates/errors/database_error.html";
				$smarty->assign("error", $error);
				break;
		}
		$smarty->assign("fk_album", $_SESSION['new_song_data']['fk_album']);
		$smarty->assign("fk_artista", $_SESSION['new_song_data']['fk_artista']);
		$smarty->assign("descrizione", $_SESSION['new_song_data']['descrizione']);
		$smarty->assign("nome_canzone", $_SESSION['new_song_data']['nome_canzone']);
		$smarty->assign("pubblicazione", $_SESSION['new_song_data']['pubblicazione']);
		$smarty->assign("durata", $_SESSION['new_song_data']['durata']);
} 
	
	require "include/mod.set_logged_header.inc.php";
	$result = $db->query("select * from genere");
	$smarty->assign("generi", $result);
	$result = $db->query("select id_album, nome_album, id_artista from album join artisti where album.fk_artista = artisti.id_artista");
	$smarty->assign("album", $result);
    $result = $db->query("SELECT * FROM canzoni");
    $smarty->assign("canzoni", $result);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
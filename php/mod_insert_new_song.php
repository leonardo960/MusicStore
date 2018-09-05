<?php
	require 'include/check_service_permission.inc.php';
	//Init view
	require "init_smarty.php";
	
	$head = "../templates/mod_insert_new_song_head.html";
	$content = "../templates/mod_insert_new_song_content.html";
	
	if (isset($_POST['fk_genere']) && isset($_POST['fk_album']) && isset($_POST['fk_artista']) && isset($_POST['descrizione']) && isset($_POST['nome_canzone']) && isset($_POST['pubblicazione']) && isset($_POST['durata'])) { //I DATI DERIVATI DALL'INSERIMENTO DELLA CANZONE
		require "include/dbms.inc.php";
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['fk_genere'] = test_input($_POST['fk_genere']); //test_input SU TUTTI I DATI DELLA CANZONE
		$_POST['fk_album'] = test_input($_POST['fk_album']);
		$_POST['fk_artista'] = test_input($_POST['fk_artista']);
		$_POST['descrizione'] = test_input($_POST['descrizione']);
		$_POST['nome_canzone'] = test_input($_POST['nome_canzone']);
		$_POST['pubblicazione'] = test_input($_POST['pubblicazione']);
		$_POST['durata'] = test_input($_POST['durata']);
		
		$target_dir = "../songs";
		$target_file = $target_dir . basename($_FILES["song_file"]["name"]);
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
		$smarty->assign("fk_genere", $_SESSION['new_song_data']['fk_genere']);
		$smarty->assign("fk_album", $_SESSION['new_song_data']['fk_album']);
		$smarty->assign("fk_artista", $_SESSION['new_song_data']['fk_artista']);
		$smarty->assign("descrizione", $_SESSION['new_song_data']['descrizione']);
		$smarty->assign("nome_canzone", $_SESSION['new_song_data']['nome_canzone']);
		$smarty->assign("pubblicazione", $_SESSION['new_song_data']['pubblicazione']);
		$smarty->assign("durata", $_SESSION['new_song_data']['durata']);
} 
	
	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
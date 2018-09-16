<?php
	require 'include/mod.check_service_permission.inc.php';
	//Init view
	require "init_smarty.php";
	
	$content = "../templates/mod_insert_new_artist_content.html";
	if (isset($_POST['nome_artista']) && isset($_POST['biografia']) && isset($_POST['inizio_attivita']) && isset($_POST['fine_attivita']) && isset($_POST['generi'])) { //I DATI DERIVATI DALL'INSERIMENTO DELL'ARTISTA
		
		$target_dir = "../images/artists/";
		require "include/mod.insert_new_artist.inc.php";
		
		Header("Location: mod_insert_new_artist.php?message=artist_inserted");
		exit();
	} elseif (isset($_GET['message'])){ 
		switch($_GET['message']){
			case "artist_inserted":
				//Artista inserito con successo
				$smarty->assign("message", 'Artista correttamente inserito nel sistema.');
				break;
		}
	}

	$result = $db->query("select * from genere");
	$smarty->assign("generi", $result);
    $result = $db->getResult("select * from artisti");
    $smarty->assign("artisti", $result);

	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
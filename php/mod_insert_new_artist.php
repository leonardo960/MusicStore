<?php
	require 'include/mod.check_service_permission.inc.php';
	//Init view
	require "init_smarty.php";
	
	$content = "../templates/mod_insert_new_artist_content.html";
	
	if (isset($_POST['nome_artista']) && isset($_POST['biografia']) && isset($_POST['inizio_attivita']) && isset($_POST['fine_attivita']) && isset($_POST['genere'])) { //I DATI DERIVATI DALL'INSERIMENTO DELL'ARTISTA
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['nome_artista'] = test_input($_POST['nome_artista']); //test_input SU TUTTI I DATI DELL'ARTISTA
		$_POST['biografia'] = test_input($_POST['biografia']);
		$_POST['inizio_attivita'] = test_input($_POST['inizio_attivita']);
		$_POST['fine_attivita'] = test_input($_POST['fine_attivita']);
		$_POST['genere'] = test_input($_POST['genere']);
		
		$target_dir = "../images/artists/";
		require "include/mod.insert_new_artist.inc.php";
		
		Header("Location: mod_content_management.php?message=artist_inserted");
		exit();
	} elseif (isset($_GET['error'])){ 
		switch($_GET['error']){
			case "databaseerror":
				//Errore nella comunicazione con il DB
				$error = "../templates/errors/database_error.html";
				$smarty->assign("error", $error);
				break;
		}
		//Rimetto i campi del form come stavano prima di convalidare
		$smarty->assign("nome_artista", $_SESSION['new_artist_data']['nome_artista']);
		$smarty->assign("biografia", $_SESSION['new_artist_data']['biografia']);
		$smarty->assign("inizio_attivita", $_SESSION['new_artist_data']['inizio_attivita']);
		$smarty->assign("fine_attivita", $_SESSION['new_artist_data']['fine_attivita']);
		$smarty->assign("genere", $_SESSION['new_artist_data']['genere']);
	}

	$result = $db->query("select * from genere");
	$smarty->assign("generi", $result);
    $result = $db->getResult("select * from artisti");
    $smarty->assign("artisti", $result);

	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
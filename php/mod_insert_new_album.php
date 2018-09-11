<?php
	require 'include/mod.check_service_permission.inc.php';
	//Init view
	require "init_smarty.php";
	
	$content = "../templates/mod_insert_new_album_content.html";
	
	if (isset($_POST['data_inserimento']) && isset($_POST['nome_album']) && isset($_POST['fk_genere']) && isset($_POST['fk_artista']) && isset($_POST['descrizione']) && isset($_POST['prezzo']) && isset($_POST['pubblicazione']) && isset($_POST['dischi']) && isset($_POST['tracce']) && isset($_POST['etichetta']) && isset($_POST['stock'])) { //I DATI DERIVATI DALL'INSERIMENTO DELL'ALBUM
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['nome_album'] = test_input($_POST['nome_album']); //test_input SU TUTTI I DATI DELL'ALBUM
		$_POST['fk_genere'] = test_input($_POST['fk_genere']);
		$_POST['fk_artista'] = test_input($_POST['fk_artista']);
		$_POST['descrizione'] = test_input($_POST['descrizione']);
		$_POST['prezzo'] = test_input($_POST['prezzo']);
		$_POST['pubblicazione'] = test_input($_POST['pubblicazione']);
		$_POST['dischi'] = test_input($_POST['dischi']);
		$_POST['tracce'] = test_input($_POST['tracce']);
		$_POST['etichetta'] = test_input($_POST['etichetta']);
		$_POST['stock'] = test_input($_POST['stock']);
		$_POST['data_inserimento'] = test_input($_POST['data_inserimento']);
		
		$target_dir = "../images/album/";
		require "include/mod.insert_new_album.inc.php";
		
		
		Header("Location: mod_content_management.php?message=album_inserted");
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
		$smarty->assign("nome_album", $_SESSION['new_album_data']['nome_album']);
		$smarty->assign("fk_genere", $_SESSION['new_album_data']['fk_genere']);
		$smarty->assign("fk_artista", $_SESSION['new_album_data']['fk_artista']);
		$smarty->assign("descrizione", $_SESSION['new_album_data']['descrizione']);
		$smarty->assign("prezzo", $_SESSION['new_album_data']['prezzo']);
		$smarty->assign("pubblicazione", $_SESSION['new_album_data']['pubblicazione']);
		$smarty->assign("dischi", $_SESSION['new_album_data']['dischi']);
		$smarty->assign("tracce", $_SESSION['new_album_data']['tracce']);
		$smarty->assign("etichetta", $_SESSION['new_album_data']['etichetta']);
		$smarty->assign("stock", $_SESSION['new_album_data']['stock']);
		$smarty->assign("data_inserimento", $_SESSION['new_album_data']['data_inserimento']);
	}

	
	require "include/mod.set_logged_header.inc.php";
	$result = $db->query("select * from genere");
	$smarty->assign("generi", $result);
	$result = $db->getResult("select nome_artista, id_artista from artisti order by nome_artista");
	$smarty->assign("artisti", $result);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
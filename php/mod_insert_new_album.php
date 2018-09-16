<?php
	require 'include/mod.check_service_permission.inc.php';
	//Init view
	require "init_smarty.php";
	
	$content = "../templates/mod_insert_new_album_content.html";
	
	if (isset($_POST['nome_album']) && isset($_POST['generi']) && isset($_POST['fk_artista']) && isset($_POST['descrizione']) && isset($_POST['prezzo']) && isset($_POST['pubblicazione']) && isset($_POST['dischi']) && isset($_POST['tracce']) && isset($_POST['etichetta']) && isset($_POST['stock'])) { //I DATI DERIVATI DALL'INSERIMENTO DELL'ALBUM
		$target_dir = "../images/album/";
		require "include/mod.insert_new_album.inc.php";
		
		
		Header("Location: mod_insert_new_album.php?message=album_inserted");
		exit();
	} elseif (isset($_GET['message'])){ 
		switch($_GET['message']){
			case "album_inserted":
				//Album inserito con successo
				$smarty->assign("message", 'Album inserito con successo nel sistema.');
				break;
		}
	}

	
	require "include/mod.set_logged_header.inc.php";
	$result = $db->query("select * from genere");
	$smarty->assign("generi", $result);
	$result = $db->getResult("select nome_artista, id_artista from artisti order by nome_artista");
	$smarty->assign("artisti", $result);
    $result = $db->getResult("select * from album");
    $smarty->assign("albums", $result);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
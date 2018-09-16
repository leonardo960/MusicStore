<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if(isset($_FILES["album-img"])){
		$ps = $db->get_connection()->prepare("update album set nome_album = ?, descrizione = ?, prezzo = ?, pubblicazione = ?,
											  dischi = ?, tracce = ?, etichetta = ?, stock = ?, img_path = ? where id_album = ?");
		$ps->bind_param('ssdsiisisi', $_POST["nome_album"], $_POST["descrizione"], $_POST["prezzo"], 
										$_POST["pubblicazione"], $_POST["dischi"], $_POST["tracce"], $_POST["etichetta"], $_POST["stock"], $target_file,
										$_POST["id_album"]);
		$ps->execute();
	} else {
		$ps = $db->get_connection()->prepare("update album set nome_album = ?, descrizione = ?, prezzo = ?, pubblicazione = ?,
											  dischi = ?, tracce = ?, etichetta = ?, stock = ? where id_album = ?");
		$ps->bind_param('ssdsiisii', $_POST["nome_album"], $_POST["descrizione"], $_POST["prezzo"], 
										$_POST["pubblicazione"], $_POST["dischi"], $_POST["tracce"], $_POST["etichetta"], $_POST["stock"], $_POST["id_album"]);
		$ps->execute();
	}
	
																											 
	if(isset($_FILES["album-img"])){
		move_uploaded_file($_FILES["album-img"]["tmp_name"], $target_file);
	}
	


?>
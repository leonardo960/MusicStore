<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if(isset($_FILES["album-img"])){
		$result = $db->query("update album set nome_album = '{$_POST["nome_album"]}', fk_genere = '{$_POST["fk_genere"]}',
												descrizione = '{$_POST["descrizione"]}', prezzo = '{$_POST["prezzo"]}',
												pubblicazione = '{$_POST["pubblicazione"]}', dischi = '{$_POST["dischi"]}',
												tracce = '{$_POST["tracce"]}', etichetta = '{$_POST["etichetta"]}',
												stock = '{$_POST["stock"]}', img_path = '{$target_file}' where id_album = '{$_POST["id_album"]}'");
	} else {
		$result = $db->query("update album set nome_album = '{$_POST["nome_album"]}', fk_genere = '{$_POST["fk_genere"]}',
												descrizione = '{$_POST["descrizione"]}', prezzo = '{$_POST["prezzo"]}',
												pubblicazione = '{$_POST["pubblicazione"]}', dischi = '{$_POST["dischi"]}',
												tracce = '{$_POST["tracce"]}', etichetta = '{$_POST["etichetta"]}',
												stock = '{$_POST["stock"]}' where id_album = '{$_POST["id_album"]}'");
	}
	
																											 
	if(isset($_FILES["album-img"])){
		move_uploaded_file($_FILES["album-img"]["tmp_name"], $target_file);
	}
	


?>
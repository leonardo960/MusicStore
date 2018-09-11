<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->query("INSERT INTO album (nome_album, fk_genere, fk_artista, descrizione, prezzo, pubblicazione, dischi, tracce, etichetta, stock, data_inserimento) VALUES ('{$_POST["nome_album"]}',
															  '{$_POST["fk_genere"]}',
														     '{$_POST["fk_artista"]}',
															 '{$_POST["descrizione"]}',
															 '{$_POST["prezzo"]}',
															 '{$_POST["pubblicazione"]}',
															 '{$_POST["dischi"]}',
															 '{$_POST["tracce"]}',
															 '{$_POST["etichetta"]}',
															 '{$_POST["stock"]}',
															 '{$_POST["data_inserimento"]}')");
																											 
	
	$result = $db->getResult("select id_album from album where descrizione = '{$_POST["descrizione"]}'");
	$ext = pathinfo($_FILES['album-img']['name'], PATHINFO_EXTENSION);
	$target_file = $target_dir . $result[0]['id_album'] . '.' . $ext;
	move_uploaded_file($_FILES["album-img"]["tmp_name"], $target_file);
	$db->query("update album set img_path = '{$target_file}' where id_album = '{$result[0]["id_album"]}'");

?>
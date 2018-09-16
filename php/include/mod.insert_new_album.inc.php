<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}					
	
	$ps = $db->get_connection()->prepare("insert into album (nome_album, fk_artista, descrizione, prezzo, pubblicazione, dischi, tracce, etichetta, stock, data_inserimento) values (?, ?, ?, ?, ?, ?, ?, ?, ?, CURDATE())");
	$ps->bind_param('sisisiisi', $_POST["nome_album"], $_POST["fk_artista"], $_POST["descrizione"], $_POST["prezzo"], $_POST["pubblicazione"], $_POST["dischi"], $_POST["tracce"], $_POST["etichetta"], $_POST["stock"]);
	$ps->execute();
	
	$new_id = mysqli_insert_id($db->get_connection());
	$ext = pathinfo($_FILES['album-img']['name'], PATHINFO_EXTENSION);
	$target_file = $target_dir . $new_id . '.' . $ext;
	move_uploaded_file($_FILES["album-img"]["tmp_name"], $target_file);
	$db->query("update album set img_path = '{$target_file}' where id_album = '{$new_id}'");

?>
<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}																										 
	$ps = $db->get_connection()->prepare("insert into canzoni (fk_album, fk_artista, nome_canzone) values (?, ?, ?)");
	$ps->bind_param('iis', $_POST["fk_album"], $_POST["fk_artista"], $_POST["nome_canzone"]);
	$ps->execute();
	
	$result = $db->getResult("select nome_canzone, MAX(id_canzone) from canzoni where nome_canzone = '{$_POST["nome_canzone"]}'");
	
	
	$ext = pathinfo($_FILES['song-file']['name'], PATHINFO_EXTENSION);
	$target_file = $target_dir . $result[0]['MAX(id_canzone)'] . '.' . $ext;
	move_uploaded_file($_FILES["song-file"]["tmp_name"], $target_file);
	$db->query("update canzoni set song_path = '{$target_file}' where id_canzone = '{$result[0]["MAX(id_canzone)"]}'");
?>
<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if(isset($_FILES["song-preview"])){
		$ps = $db->get_connection()->prepare("update canzoni set nome_canzone = ?, song_path = ? where id_canzone = ?");
		$ps->bind_param('ssi', $_POST["nome_canzone"], $target_file, $_POST["id_canzone"]);
	} else {
		$ps = $db->get_connection()->prepare("update canzoni set nome_canzone = ? where id_canzone = ?");
		$ps->bind_param('si', $_POST["nome_canzone"], $_POST["id_canzone"]);
	}
	
	
																											 
	if(isset($_FILES["song-preview"])){
		move_uploaded_file($_FILES["song-preview"]["tmp_name"], $target_file);
	}
	


?>
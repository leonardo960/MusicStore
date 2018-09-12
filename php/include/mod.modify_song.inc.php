<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if(isset($_FILES["song-preview"])){
		$result = $db->query("update canzoni set nome_canzone = '{$_POST["nome_canzone"]}', song_path = '{$target_file}' where id_canzone = '{$_POST["id_canzone"]}'");
	} else {
		$result = $db->query("update canzoni set nome_canzone = '{$_POST["nome_canzone"]}' where id_canzone = '{$_POST["id_canzone"]}'");
	}
	
	
																											 
	if(isset($_FILES["song-preview"])){
		move_uploaded_file($_FILES["song-preview"]["tmp_name"], $target_file);
	}
	


?>
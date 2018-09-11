<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if($_POST['fine_attivita'] === ''){
		$result = $db->query("INSERT INTO artisti (nome_artista, biografia, inizio_attivita, genere, album_pubblicati) VALUES ('{$_POST["nome_artista"]}', 
															  '{$_POST["biografia"]}',
														     '{$_POST["inizio_attivita"]}',
															 '{$_POST["genere"]}',
															 '{$_POST['album_pubblicati']}')");
	} else {
	$result = $db->query("INSERT INTO artisti (nome_artista, biografia, inizio_attivita, fine_attivita, genere, album_pubblicati) VALUES ('{$_POST["nome_artista"]}', 
															  '{$_POST["biografia"]}',
														     '{$_POST["inizio_attivita"]}',
															 '{$_POST["fine_attivita"]}',
															 '{$_POST["genere"]}',
															 '{$_POST['album_pubblicati']}')");
																											 
	}
																											 
	
	$result = $db->getResult("select id_artista from artisti where biografia = '{$_POST["biografia"]}'");
	$ext = pathinfo($_FILES['artist-img']['name'], PATHINFO_EXTENSION);
	$target_file = $target_dir . $result[0]['id_artista'] . '.' . $ext;
	move_uploaded_file($_FILES["artist-img"]["tmp_name"], $target_file);
	$db->query("update artisti set img_path = '{$target_file}' where id_artista = '{$result[0]["id_artista"]}'");
?>
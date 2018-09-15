<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if(isset($_FILES["artist-img"])){
		if($_POST['fine_attivita'] === ''){
			$ps = $db->get_connection()->prepare('update artisti set nome_artista = ?, biografia = ?,
												inizio_attivita = ?, fine_attivita = null,
												genere = ?, img_path = ?, album_pubblicati = ? where id_artista = ?');			
			$ps->bind_param('ssiisii', $_POST["nome_artista"], $_POST["biografia"], $_POST["inizio_attivita"], $_POST["genere"], $target_file, $_POST['album_pubblicati'], $_POST["id_artista"]);
			$ps->execute();
		} else {
			$ps = $db->get_connection()->prepare('update artisti set nome_artista = ?, biografia = ?, inizio_attivita = ?, fine_attivita = ?, genere = ?, img_path = ?, album_pubblicati = ? where id_artista = ?');
			$ps->bind_param('ssiiisii', $_POST["nome_artista"], $_POST["biografia"], $_POST["inizio_attivita"], $_POST['fine_attivita'], $_POST["genere"], $target_file, $_POST['album_pubblicati'], $_POST["id_artista"]);
			$ps->execute();
		}
	} else if($_POST['fine_attivita'] === ''){ 
		$ps = $db->get_connection()->prepare('update artisti set nome_artista = ?, biografia = ?, inizio_attivita = ?, fine_attivita = null, genere = ?, album_pubblicati = ? where id_artista = ?');
		$ps->bind_param('ssiiii', $_POST["nome_artista"], $_POST["biografia"], $_POST["inizio_attivita"], $_POST["genere"], $_POST['album_pubblicati'], $_POST["id_artista"]);
		$ps->execute();
	} else {
		$ps = $db->get_connection()->prepare('update artisti set nome_artista = ?, biografia = ?, inizio_attivita = ?, fine_attivita = ?, genere = ?, album_pubblicati = ? where id_artista = ?');
		$ps->bind_param('ssiiiii', $_POST["nome_artista"], $_POST["biografia"], $_POST["inizio_attivita"], $_POST['fine_attivita'], $_POST["genere"], $_POST['album_pubblicati'], $_POST["id_artista"]);
		$ps->execute();
	}
	
																											 
	
	if(isset($_FILES["artist-img"])){
		move_uploaded_file($_FILES["artist-img"]["tmp_name"], $target_file);
	}
	


?>
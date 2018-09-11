<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if(isset($_FILES["artist-img"])){
		$result = $db->query("update artisti set nome_artista = '{$_POST["nome_artista"]}', biografia = '{$_POST["biografia"]}',
												inizio_attivita = '{$_POST["inizio_attivita"]}', fine_attivita = '{$_POST["fine_attivita"]}',
												genere = '{$_POST["genere"]}', img_path = '{$target_file}' where id_artista = '{$_POST["id_artista"]}'");
	} else {
		$result = $db->query("update artisti set nome_artista = '{$_POST["nome_artista"]}', biografia = '{$_POST["biografia"]}',
												inizio_attivita = '{$_POST["inizio_attivita"]}', fine_attivita = '{$_POST["fine_attivita"]}',
												genere = '{$_POST["genere"]}' where id_artista = '{$_POST["id_artista"]}'");
	}
	
																											 
	
	if(isset($_FILES["artist-img"])){
		move_uploaded_file($_FILES["artist-img"]["tmp_name"], $target_file);
	}
	
}

?>
<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->query("INSERT INTO artisti (nome_artista, biografia, inizio_attivita, fine_attivita, genere) VALUES ('{$_POST["nome_artista"]}', 
															  '{$_POST["biografia"]}',
														     '{$_POST["inizio_attivita"]}',
															 '{$_POST["fine_attivita"]}',
															 '{$_POST["genere"]}')");
																											 
	if($result){
		$result = $db->query("select id_artista from artisti where biografia = '{$_POST["biografia"]}'");
		$target_file = $target_dir . "/" . $result[0]['id_artista'] . '.jpg');
		move_uploaded_file($_FILES["artist_img"]["tmp_name"], $target_file);
		$db->query("update artisti set img_path = '{$target_file}' where id_artista = '{$result[0]["id_artista"]}'");
	}else{
		$_SESSION['new_artist_data'] = ["nome_artista"=>$_POST['nome_artista'], "biografia"=>$_POST['biografia'], "inizio_attivita"=>$_POST['inizio_attivita'], "fine_attivita"=>$_POST['fine_attivita'], "genere"=>$_POST['genere']];
		Header("Location: mod_insert_new_artist.php?error=databaseerror");
		exit();
	}
}

?>
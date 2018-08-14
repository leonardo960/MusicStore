<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->query("INSERT INTO artisti (nome_artista, biografia, inizio_attivita, fine_attivita, genere, img_path) VALUES ('{$_POST["nome_artista"]}', 
															  '{$_POST["biografia"]}',
														     '{$_POST["inizio_attivita"]}',
															 '{$_POST["fine_attivita"]}',
															 '{$_POST["genere"]}',
															 '{$target_file}')");
																											 
	if($result){
		move_uploaded_file($_FILES["artist_img"]["tmp_name"], $target_file);
	}else{
		$_SESSION['new_artist_data'] = ["nome_artista"=>$_POST['nome_artista'], "biografia"=>$_POST['biografia'], "inizio_attivita"=>$_POST['inizio_attivita'], "fine_attivita"=>$_POST['fine_attivita'], "genere"=>$_POST['genere']];
		Header("Location: mod_insert_new_artist.php?error=databaseerror");
		exit();
	}
}

?>
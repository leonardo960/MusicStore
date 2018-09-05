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
																											 
	if($result){
		//Insert ok
		$result = $db->query("select id_album from album where descrizione = '{$_POST["descrizione"]}'");
		$target_file = $target_dir . "/" . $result[0]['id_album'] . '.jpg');
		move_uploaded_file($_FILES["album_img"]["tmp_name"], $target_file);
		$db->query("update album set img_path = '{$target_file}' where id_album = '{$result[0]["id_album"]}'");
	} else {
		$_SESSION['new_album_data'] = ["nome_album"=>$_POST['nome_album'], "fk_genere"=>$_POST['fk_genere'], "fk_artista"=>$_POST['fk_artista'], "descrizione"=>$_POST['descrizione'], "prezzo"=>$_POST['prezzo'], "pubblicazione"=>$_POST['pubblicazione'], "dischi"=>$_POST['dischi'], "tracce"=>$_POST['tracce'], "etichetta"=>$_POST['etichetta'], "stock"=>$_POST['stock']];
		Header("Location: mod_insert_new_album.php?error=databaseerror");
		exit();
	}
}

?>
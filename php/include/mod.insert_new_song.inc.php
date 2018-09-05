<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$result = $db->query("INSERT INTO canzoni (fk_genere, fk_album, fk_artista, descrizione, nome_canzone, pubblicazione, durata) VALUES ('{$_POST["fk_genere"]}', //DA MODIFICARE CON I DATI DELLA CANZONE
															  '{$_POST["fk_album"]}',
														     '{$_POST["fk_artista"]}',
															 '{$_POST["descrizione"]}',
															 '{$_POST["nome_canzone"]}',
															 '{$_POST["pubblicazione"]}',
															 '{$_POST["durata"]}'");
																											 
	if($result){
		//Insert ok
		$result = $db->query("select id_canzone from canzone where descrizione = '{$_POST["descrizione"]}'");
		$target_file = $target_dir . "/" . $result[0]['id_canzone'] . '.mp3');
		move_uploaded_file($_FILES["song_file"]["tmp_name"], $target_file);
		$db->query("update canzoni set song_path = '{$target_file}' where id_canzone = '{$result[0]["id_canzone"]}'");
	} else {
		$_SESSION['new_song_data'] = ["fk_genere"=>$_POST['fk_genere'], "fk_album"=>$_POST['fk_album'], "fk_artista"=>$_POST['fk_artista'], "descrizione"=>$_POST['descrizione'], "nome_canzone"=>$_POST['nome_canzone'], "pubblicazione"=>$_POST['pubblicazione'], "durata"=>$_POST['durata'], "song_path"=>$_POST['song_path']];
		Header("Location: mod_insert_new_song.php?error=databaseerror");
		exit();
	}

}

?>
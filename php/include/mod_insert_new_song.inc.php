<?php

	session_start();
	//TODO: aggiungere la preview (file mp3 nel file system che viene associato tipo l'immagine, quindi è un path)
	$result = $db->query("INSERT INTO canzoni (fk_genere, fk_album, fk_artista, descrizione, nome_canzone, pubblicazione, durata) VALUES ('{$_POST["username"]}', //DA MODIFICARE CON I DATI DELLA CANZONE
															  '{$md5d}',
														     '{$_POST["email"]}',
															 '{$_POST["name"]}',
															 '{$_POST["surname"]}')");
																											 
	if($result){
		//Insert ok
		$temp = array("username"=>$_POST["username"], "email"=>$_POST["email"], "nome"=>$_POST["name"], "cognome"=>$_POST["surname"]); //DA MODIFICARE
		$_SESSION['auth'] = $temp; //Usiamo $_SESSION per passare i dati da un php all'altro?
	} else {
		Header("Location: mod_insert_new_song.php?error=databaseerror");
		exit();
	}
}

?>
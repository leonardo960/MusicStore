<?php

	session_start();
	
	$result = $db->query("INSERT INTO album (nome_album, fk_genere, fk_artista, descrizione, prezzo, pubblicazione, dischi, tracce, etichetta, stock, img_path) VALUES ('{$_POST["username"]}', //DA MODIFICARE CON I DATI DELL'ALBUM
															  '{$md5d}',
														     '{$_POST["email"]}',
															 '{$_POST["name"]}',
															 '{$_POST["surname"]}')");
																											 
	if($result){
		//Insert ok
		$temp = array("username"=>$_POST["username"], "email"=>$_POST["email"], "nome"=>$_POST["name"], "cognome"=>$_POST["surname"]); //DA MODIFICARE
		$_SESSION['auth'] = $temp; //Usiamo $_SESSION per passare i dati da un php all'altro?
	} else {
		Header("Location: mod_insert_new_album.php?error=databaseerror");
		exit();
	}
}

?>
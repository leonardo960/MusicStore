<?php

	session_start();
	
	$result = $db->query("INSERT INTO artisti (nome_artista, biografia, inizio_attivita, fine_attivita, genere, album_pubblicati) VALUES ('{$_POST["username"]}', //DA MODIFICARE CON I DATI DELL'ARTISTA
															  '{$md5d}',
														     '{$_POST["email"]}',
															 '{$_POST["name"]}',
															 '{$_POST["surname"]}')");
																											 
	if($result){
		//Insert ok
		$temp = array("username"=>$_POST["username"], "email"=>$_POST["email"], "nome"=>$_POST["name"], "cognome"=>$_POST["surname"]); //DA MODIFICARE
		$_SESSION['auth'] = $temp; //Usiamo $_SESSION per passare i dati da un php all'altro?
	} else {
		Header("Location: mod_insert_new_artist.php?error=databaseerror");
		exit();
	}
}

?>
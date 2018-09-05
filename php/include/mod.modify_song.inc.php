<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if(isset($_FILES["song_preview"])){
		$result = $db->query("update canzoni set fk_genere = '{$_POST["fk_genere"]}', descrizione = '{$_POST["descrizione"]}',
												nome_canzone = '{$_POST["nome_canzone"]}', pubblicazione = '{$_POST["pubblicazione"]}',
												durata = '{$_POST["genere"]}', song_path = '{$target_file}' where id_canzone = '{$_POST["id_canzone"]}'");
	} else {
		$result = $db->query("update canzoni set fk_genere = '{$_POST["fk_genere"]}', descrizione = '{$_POST["descrizione"]}',
												nome_canzone = '{$_POST["nome_canzone"]}', pubblicazione = '{$_POST["pubblicazione"]}',
												durata = '{$_POST["genere"]}' where id_canzone = '{$_POST["id_canzone"]}'");
	}
	
	
																											 
	if($result){
		if(isset($_FILES["song_preview"])){
			move_uploaded_file($_FILES["song_file"]["tmp_name"], $target_file);
		}
	} else {
		Header("Location: mod_content_management.php?message=song_modify_error");
		exit();
	}
}

?>
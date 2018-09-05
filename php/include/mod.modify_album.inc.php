<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if(isset($_FILES["album_img"])){
		$result = $db->query("update album set nome_album = '{$_POST["nome_album"]}', fk_genere = '{$_POST["fk_genere"]}',
												descrizione = '{$_POST["descrizione"]}', prezzo = '{$_POST["prezzo"]}',
												pubblicazione = '{$_POST["pubblicazione"]}', dischi = '{$_POST["dischi"]}',
												tracce = '{$_POST["tracce"]}', etichetta = '{$_POST["etichetta"]}',
												stock = '{$_POST["stock"]}', img_path = '{$target_file}',
												data_inserimento = '{$_POST['data_inserimento']}' where id_album = '{$_POST["id_album"]}'");
	} else {
		$result = $db->query("update album set nome_album = '{$_POST["nome_album"]}', fk_genere = '{$_POST["fk_genere"]}',
												descrizione = '{$_POST["descrizione"]}', prezzo = '{$_POST["prezzo"]}',
												pubblicazione = '{$_POST["pubblicazione"]}', dischi = '{$_POST["dischi"]}',
												tracce = '{$_POST["tracce"]}', etichetta = '{$_POST["etichetta"]}',
												stock = '{$_POST["stock"]}', data_inserimento = '{$_POST['data_inserimento']}' where id_album = '{$_POST["id_album"]}'");
	}
	
																											 
	if($result){
		if(isset($_FILES["album_img"])){
			move_uploaded_file($_FILES["album_img"]["tmp_name"], $target_file);
		}
	}else{
		//$_SESSION['modified_artist_data'] = ["nome_artista"=>$_POST['nome_artista'], "biografia"=>$_POST['biografia'], "inizio_attivita"=>$_POST['inizio_attivita'], "fine_attivita"=>$_POST['fine_attivita'], "genere"=>$_POST['genere']];
		Header("Location: mod_content_management.php?message=album_modify_error");
		exit();
	}
}

?>
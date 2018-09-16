<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if($_POST['fine_attivita'] === ''){
		$ps = $db->get_connection()->prepare("insert into artisti (nome_artista, biografia, inizio_attivita, album_pubblicati) values (?, ?, ?, ?)");
		$ps->bind_param('ssii', $_POST["nome_artista"], $_POST["biografia"], $_POST["inizio_attivita"], $_POST['album_pubblicati']);
		$ps->execute();
	} else {
		$ps = $db->get_connection()->prepare("insert into artisti (nome_artista, biografia, inizio_attivita, fine_attivita, album_pubblicati) values (?, ?, ?, ?, ?)");
		$ps->bind_param('ssiii', $_POST["nome_artista"], $_POST["biografia"], $_POST["inizio_attivita"], $_POST["fine_attivita"], $_POST['album_pubblicati']);
		$ps->execute();
	}
	$new_id = mysqli_insert_id($db->get_connection());
	
	$ext = pathinfo($_FILES['artist-img']['name'], PATHINFO_EXTENSION);
	$target_file = $target_dir . $new_id . '.' . $ext;
	move_uploaded_file($_FILES["artist-img"]["tmp_name"], $target_file);
	$db->query("update artisti set img_path = '{$target_file}' where id_artista = '{$new_id}'");
    //GENERI
    for($i = 0; $i < count($_POST['generi']); $i++){
        $ps = $db->get_connection()->prepare("insert into genere_artisti values (?, ?)");
        $ps->bind_param('si', $_POST['generi'][$i], $new_id);
        $ps->execute();
    }
?>
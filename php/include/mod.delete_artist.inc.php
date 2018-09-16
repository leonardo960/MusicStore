<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$ps = $db->get_connection()->prepare("delete from artisti where id_artista = ?");
	$ps->bind_param('i', $_GET["delete"]);
	$ps->execute();																										 



?>
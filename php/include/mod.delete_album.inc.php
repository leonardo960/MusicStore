<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$ps = $db->get_connection()->prepare("delete from album where id_album = ?");
	$ps->bind_param('i', $_GET["delete"]);
	$ps->execute();


?>
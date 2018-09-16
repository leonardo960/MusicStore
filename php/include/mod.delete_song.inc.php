<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$ps = $db->get_connection()->prepare("delete from canzoni where id_canzone = ?");
	$ps->bind_param('i', $_GET["delete"]);
	$ps->execute();
	unlink("../songs/'{$_GET["delete"]}'.mp3");
																										 
	
}

?>
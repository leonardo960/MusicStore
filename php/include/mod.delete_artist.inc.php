<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->query("delete from artisti where id_artista = '{$_GET["delete"]}'");
																											 



?>
<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->query("delete from album where id_album = '{$_GET["delete"]}'");
																											 


?>
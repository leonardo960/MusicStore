<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->query("delete from artisti where id_artista = '{$_GET["delete"]}'");
																											 
	if(!$result){
		Header("Location: mod_content_management.php?message=artist_delete_error");
		exit();
	}
}

?>
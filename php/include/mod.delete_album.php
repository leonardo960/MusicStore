<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->query("delete from album where id_album = '{$_GET["delete"]}'");
																											 
	if(!$result){
		Header("Location: mod_content_management.php?message=album_delete_error");
		exit();
	}
}

?>
<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$result = $db->query("delete from canzoni where id_canzone = '{$_GET["delete"]}'");
	unlink("../../songs/'{$_GET["delete"]}'.mp3");
																										 
	if(!$result){
		Header("Location: mod_content_management.php?message=song_delete_error");
		exit();
	}
}

?>
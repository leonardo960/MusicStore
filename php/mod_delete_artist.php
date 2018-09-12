 <?php
	require 'include/mod.check_service_permission.inc.php';
	require 'include/mod.delete_artist.inc.php';
	header("location: mod_content_management.php?message=artist_deleted");
	exit();
 ?>
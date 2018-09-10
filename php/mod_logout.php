<?php
	require 'include/mod.check_service_permission.inc.php';
	unset($_SESSION['mod']);
	
	Header('Location: mod_login.php?message=logout');
	exit();
?>
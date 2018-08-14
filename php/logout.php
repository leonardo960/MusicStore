<?php
	require 'include/check_service_permission.inc.php';
	unset($_SESSION['auth']);
	
	Header('Location: index.php');
	exit();
?>
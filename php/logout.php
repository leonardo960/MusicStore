<?php
	session_start();
	
	unset($_SESSION['auth']);
	
	Header('Location: index.php');
	exit();
?>
<?php
	require "include/dbms.inc.php";
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if(isset($_SESSION['mod'])){
		$current_username = $_SESSION['mod']['username'];
	} else {
		header("location: permission_denied.php");
		exit();
	}
	$requested_service = substr($_SERVER["PHP_SELF"], strrpos($_SERVER["PHP_SELF"], "/")+1); //Nome del php che ha incluso questo
	unset($_SESSION['requested_service']); //Per non lasciare traccia del trasferimento del dato
	
	//Controlliamo se l'utente ha il permesso di accedere al servizio richiesto
	$result = $db->getResult("select permessi.servizio from account inner join permessi on account.gruppo = permessi.gruppo where account.username = '{$current_username}' and permessi.servizio = '{$requested_service}'");
	if(count($result[0]) == 0){
		header("location: permission_denied.php");
		exit();
	}
	
?>
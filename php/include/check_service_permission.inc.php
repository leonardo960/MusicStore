<?php
	require "include/dbms.inc.php";
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$current_username = $_SESSION['auth']['username'];
	$requested_service = substr($_SERVER["PHP_SELF"], strrpos($_SERVER["PHP_SELF"], "/")+1); //Nome del php che ha incluso questo
	unset($_SESSION['requested_service']); //Per non lasciare traccia del trasferimento del dato
	
	//Controlliamo se l'utente ha il permesso di accedere al servizio richiesto
	$result = $db->getResult("select permessi.servizio from utenti inner join permessi on utenti.gruppo = permessi.gruppo where utenti.username = '{$current_username}' and permessi.servizio = '{$requested_service}'");
	if(!isset($result[0])){
		header("location: permission_denied.php");
		exit();
	}
?>
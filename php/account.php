<?php
	require "init_smarty.php";
	require "include/dbms.inc.php";
	
	session_start();
	if ( isset($_SESSION['auth']) ) {
	
	$content = "../templates/account_content.html";
	
	$smarty->assign("content", $content);
	

	$smarty->assign("username", $_SESSION['auth']['username']);
	$smarty->assign("name", $_SESSION['auth']['nome']);
	$smarty->assign("surname", $_SESSION['auth']['cognome']);
	$smarty->assign("email", $_SESSION['auth']['email']);
	
	$result = $db->getResult("select id_indirizzo, nome, cognome, metodo_pagamento, tipo_spedizione, paese, indirizzo, citta, provincia, cap, recapito from utenti join indirizzi_utenti on utenti.username = indirizzi_utenti.utente where username = '{$_SESSION['auth']['username']}'");
	if($result){
		$smarty->assign("addresses", $result);
	}
	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	require "include/set_active_logo.inc.php";
	
	$smarty->display("../templates/frame_public.html");
	} else {
		Header("Location: login.php");
		exit();
	}
?>
<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	
	for ($i = 0; $i < count($_SESSION['cart']); $i++) {
		$ps = $db->get_connection()->prepare("insert into ordini (cliente, album, status, data, metodo_pagamento, tipo_spedizione, indirizzo_ordine, totale) values (?, ?, 'Inserito', CURDATE(), ?, ?, ?, ?)");
		$ps->bind_param('sissid', $_SESSION["auth"]["username"], $_SESSION["cart"][$i], $_POST["metodo_pagamento"], $_POST["tipo_spedizione"], $_POST['indirizzo_ordine'], $_POST['totale']);
		$ps->execute();
		
		$new_id = mysqli_insert_id($db->get_connection());
		
		$ps = $db->get_connection()->prepare("insert into carte_ordini values (?, ?, ?, ?, ?)");
		$ps->bind_param('issss', $new_id, $_POST['numero_carta'], $_POST['data_scadenza'], $_POST['nome_carta'], $_POST['cognome_carta']);
		$ps->execute();
	}
				
	unset($_SESSION['cart']);
	

?>

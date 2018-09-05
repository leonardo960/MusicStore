<?php
	<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	for ($i = 0; $i < $_SESSION['cart']; $i++) {
		$result = $db->query("insert into ordini (cliente, album, status, data, metodo_pagamento, tipo_spedizione, paese, indirizzo, 
		citta, provincia, cap, recapito) values ('{$_SESSION["auth"]["username"]}', '{$_SESSION["cart"][$i]}', "Inserito", curdate(), '{$_POST["metodo_pagamento"]}',
		'{$_POST["tipo_spedizione"]}', '{$_POST["paese"]}', '{$_POST["indirizzo"]}', '{$_POST["citta"]}', '{$_POST["provincia"]}', '{$_POST["cap"]}', '{$_POST["recapito"]}')");
		if(!$result){
			Header("Location: cart.php?error=cashout_error");
			exit();
		}
		$result = $db->query("select id_ordine from ordini where cliente = '{$_SESSION["auth"]["username"]}' and album = '{$_SESSION["cart"][$i]}'");
		if($result){
			$result = $db->query("insert into carte_ordini values ('{$result[0]["id_ordine"]}', '{$_POST["numero_carta"]}', '{$_POST["data_scadenza"]}', '{$_POST["nome_carta"]}', '{$_POST["cognome_carta"]}')");
			if(!$result){
				Header("Location: cart.php?error=cashout_error");
				exit();
			}
		}else{
			Header("Location: cart.php?error=cashout_error");
			exit();
		}
	}
																											 
	
}

?>


?>
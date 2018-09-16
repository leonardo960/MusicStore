 <?php
	require "init_smarty.php";
	require "include/dbms.inc.php";
	$content = "../templates/cart_cashout_content.html";
	
	session_start();
	
	if(isset($_SESSION['auth'])){
		if(isset($_POST['metodo_pagamento']) && isset($_POST['tipo_spedizione']) && isset($_POST['indirizzo']) && isset($_POST['totale'])) { //I campi dell'ordine
		
		require 'include/cart_cashout.inc.php';
		
		header("location: index.php?message=order_placed");
		exit();
		
		
		/*require "include/set_logged_header.inc.php";
		require "include/set_active_logo.inc.php";
		
		$content = "../templates/order_confirm_content.html";
		
		$smarty->assign("metodo_pagamento", $_POST['metodo_pagamento']);
		$smarty->assign("tipo_spedizione", $_POST['tipo_spedizione']);
		$smarty->assign("paese", $_POST['paese']);
		$smarty->assign("indirizzo", $_POST['indirizzo']);
		$smarty->assign("citta", $_POST['citta']);
		$smarty->assign("provincia", $_POST['provincia']);
		$smarty->assign("cap", $_POST['cap']);
		$smarty->assign("recapito", $_POST['recapito']);
		
		if($_POST['metodo_pagamento'] === 'carta'){
			$smarty->assign("numero_carta", $_POST['numero_carta']);
			$smarty->assign("data_scadenza", $_POST['data_scadenza']);
			$smarty->assign("nome_carta", $_POST['nome_carta']);
			$smarty->assign("cognome_carta", $_POST['cognome_carta']);
		}
		
		$albums = array();
		for($i = 0; $i < count($_SESSION['cart']); $i++){
			$album_offerta = $db->query("select * from album inner join offerte_speciali on offerte_speciali.album = album.id_album where id_album = '{$_SESSION["cart"][$i]}' and id_album in (select album from offerte_speciali)");
			if($album_offerta){
				$album_offerta['quantity'] = $_SESSION['cart'][$i]['item_quantity'];
				$album_offerta['prezzo'] = $album_offerta['prezzo_offerta'];
				array_push($albums, $album_offerta);
			} else {
				$album = $db->query("select * from album where id_album = '{$_SESSION["cart"][$i]}'");
				$album['quantity'] = $_SESSION['cart'][$i]['item_quantity'];
				array_push($albums, $album);
			}
		}
		
		require "include/set_cart_header.inc.php";
		require "include/set_logged_header.inc.php";
		require "include/set_active_logo.inc.php";
	
		$smarty->assign("content", $content);
		unset($_SESSION['cart']);
		$smarty->display("../templates/frame_public.html");
		exit();
		*/
	} 
	
	if(isset($_SESSION['cart'][0])){
			$cart_content = array();
			for($i = 0; $i < count($_SESSION['cart']); $i++){
				$result = $db->getResult("select * from album left join offerte_speciali on album.id_album = offerte_speciali.album where id_album = '{$_SESSION['cart'][$i]['item_id']}'");
				if(!($result[0]['prezzo_offerta'] === NULL)) $result[0]['prezzo'] = $result[0]['prezzo_offerta'];
				$cart_content[$i] = $result[0];
				$cart_content[$i]['item_quantity'] = $_SESSION['cart'][$i]['item_quantity'];
			}
			$smarty->assign("cart_content", $cart_content);
			$smarty->assign("content", $content);
			
			$result = $db->getResult("select * from tipo_spedizioni");
			$smarty->assign("shipping_methods", $result);
			
			$result = $db->getResult("select * from indirizzi_utenti where utente = '{$_SESSION['auth']['username']}'");
			$smarty->assign("addresses", $result);
			
			require "include/set_logged_header.inc.php";
			require "include/set_cart_header.inc.php";
			require "include/set_active_logo.inc.php";
 
			$smarty->display("../templates/frame_public.html");
		} else {
			Header("Location: cart.php");
			exit();
		}
	
	} else {
		//Per comprare bisogna essere registrati
		header("location: login.php");
		exit();
	}
 ?>
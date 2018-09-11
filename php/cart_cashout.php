 <?php
	require "include/check_service_permission.inc.php";
	require "init_smarty.php";
 
	$head = "../templates/cart_cashout_head.html";
	$content = "../templates/cart_cashout_content.html";
	
	session_start();
	
	if(isset($_SESSION['auth'])){
		if(isset($_SESSION['cart'][0])){
			$smarty->assign("head", $head);
			$cart_content = array();
			for($i = 0; $i < count($_SESSION['cart']); $i++){
				$result = $db->getResult("select * from album where id_album = '{$_SESSION['cart'][$i]['item_id']}'");
				array_push($cart_content, $result);
			}
			$smarty->assign("cart_content", $cart_content);
			$smarty->assign("content", $content);
 
			require "include/set_logged_header.inc.php";
 
			$smarty->display("../templates/frame_public.html");
		} else {
			Header("Location: cart.php");
			exit();
		}
	if(isset($_POST['metodo_pagamento']) && isset($_POST['tipo_spedizione']) && isset($_POST['paese']) && isset($_POST['indirizzo']) && isset($_POST['citta']) && isset($_POST['provincia']) && isset($_POST['cap']) && isset($_POST['recapito'])) { //I campi dell'ordine
		//Prevenzione dall'SQL injection sui dati specificati dal cliente per l'ordine
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['metodo_pagamento'] = test_input($_POST['metodo_pagamento']); //test_input SU TUTTI I DATI DELL'ORDINE
		if($_POST['metodo_pagamento'] === 'carta'){
			$_POST['numero_carta'] = test_input($_POST['numero_carta']);
			$_POST['data_scadenza'] = test_input($_POST['data_scadenza']);
			$_POST['nome_carta'] = test_input($_POST['nome_carta']);
			$_POST['cognome_carta'] = test_input($_POST['cognome_carta']);
		}
		$_POST['tipo_spedizione'] = test_input($_POST['tipo_spedizione']);
		$_POST['paese'] = test_input($_POST['paese']);
		$_POST['indirizzo'] = test_input($_POST['indirizzo']);
		$_POST['citta'] = test_input($_POST['citta']);
		$_POST['provincia'] = test_input($_POST['provincia']);
		$_POST['cap'] = test_input($_POST['cap']);
		$_POST['recapito'] = test_input($_POST['recapito']);
		
		require 'include/cart_cashout.inc.php';
		
		$head = "../templates/order_confirm_head.html";
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
	
		$smarty->assign("head", $head);
		$smarty->assign("content", $content);
		unset($_SESSION['cart']);
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
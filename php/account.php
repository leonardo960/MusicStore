<?php
	require "init_smarty.php";
	require "include/dbms.inc.php";
	
	session_start();
	
	
	if ( isset($_SESSION['auth']) ) {
		if( isset($_POST['delete_address']) ) {
			$ps = $db->get_connection()->prepare("delete from indirizzi_utenti where id_indirizzo = ?");
			$ps->bind_param('i', $_POST['delete_address']);
			$ps->execute();
			echo 'deleted';
			exit();
		}
		if( isset($_POST['address_id']) ) {
			$ps = $db->get_connection()->prepare("update indirizzi_utenti set paese = ?, indirizzo = ?, citta = ?, provincia = ?, cap = ?, recapito = ?, nome = ?, cognome = ? where id_indirizzo = ?");
			$ps->bind_param('ssssssssi', $_POST['customer_country'], $_POST['customer_address'], $_POST['customer_city'], $_POST['customer_province'], $_POST['customer_postal_code'], $_POST['customer_telephone'], $_POST['customer_name'], $_POST['customer_surname'], $_POST['address_id']);
			$ps->execute();
			echo 'modified';
			exit();
		}
		if( isset($_POST['customer_name'])  && isset($_POST['customer_surname']) && isset($_POST['customer_country']) && isset($_POST['customer_province'])
			&& isset($_POST['customer_city']) && isset($_POST['customer_postal_code']) && isset($_POST['customer_address']) && isset($_POST['customer_telephone'])){
				$ps = $db->get_connection()->prepare("insert into indirizzi_utenti (utente, paese, indirizzo, citta, provincia, cap, recapito, nome, cognome) values
				(?, ?, ?, ?, ?, ?, ?, ?, ?)");
				$ps->bind_param('sssssssss', $_SESSION['auth']['username'], $_POST['customer_country'], 
				$_POST['customer_address'], $_POST['customer_city'], $_POST['customer_province'], $_POST['customer_postal_code'], 
				$_POST['customer_telephone'], $_POST['customer_name'], $_POST['customer_surname']);
				$ps->execute();
				exit();
			} else {
				$content = "../templates/account_content.html";
				
				$smarty->assign("content", $content);
				

				$smarty->assign("username", $_SESSION['auth']['username']);
				$smarty->assign("name", $_SESSION['auth']['nome']);
				$smarty->assign("surname", $_SESSION['auth']['cognome']);
				$smarty->assign("email", $_SESSION['auth']['email']);
				
				$result = $db->getResult("select * from indirizzi_utenti where utente = '{$_SESSION['auth']['username']}'");
				
				if($result)
					$smarty->assign("addresses", $result);
				
				
				require "include/set_logged_header.inc.php";
				require "include/set_cart_header.inc.php";
				require "include/set_active_logo.inc.php";
				
				$smarty->display("../templates/frame_public.html");
			}
	} else {
		Header("Location: login.php");
		exit();
	}
?>
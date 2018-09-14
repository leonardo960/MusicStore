<?php	
	require "init_smarty.php";		
	require 'include/mod.check_service_permission.inc.php';

	$content = "../templates/mod_orders_panel_content.html";
	
	if(isset($_POST['new_status']) && isset($_POST['id_ordine'])){
		$db->query("update ordini set status = '{$_POST['new_status']}' where id_ordine = '{$_POST['id_ordine']}'");
		echo " Stato dell'ordine cambiato. ";
		exit();
	}
	//Vediamo quanti ordini ci sono e generiamo i numeretti per le pagine
	$result = $db->getResult("select count(*) from ordini");
	$totalItems = 0;
	if($result){
		$totalItems = $result[0]["count(*)"]; //Da controllare se funziona così
	}
	
	//Popoliamo la lista degli ordini
	if($_GET['page'] && $_GET['page'] > 0){
		if($_GET['page'] == 1){
			$base = 0; //comincia dal record 1 (mysql lo incrementa di 1)
			$offset = $base + 5; //ritorna 10 record
			$result = $db->getResult("select * from ordini order by data limit {$base},{$offset}");
			if(!count($result[0]) == 0){
				$smarty->assign("orders", $result);
			}
		} else {
			$base = $_GET['page']*5 - 5; //e.g page=2 2*5=10-5=5 quindi comincia dal record 6
			$offset = $base + 5; //dall'esempio qui sopra, $offset = 5 + 5 = 10; quindi fino al record 10
			$result = $db->getResult("select * from ordini order by data limit {$base},{$offset}");
			if(!count($result[0]) == 0){
				$smarty->assign("orders", $result);
			}
		}
		
	} else {
		header("location: mod_orders_panel.php?page=1");
		exit();
	}
	
	$pagesNeeded = ceil($totalItems / 5);
	
	$smarty->assign("pages_needed", $pagesNeeded);
	$smarty->assign("content", $content);

	if(isset($_GET['message'])){
		switch($_GET['message']){
			case "status_updated":
				$smarty->assign("message", "Lo stato dell'ordine è stato aggiornato con successo.");
				break;
		}
	}
	
	
	require "include/mod.set_logged_header.inc.php";
	
	
	$smarty->display("mod_frame_public.html");
	
?>
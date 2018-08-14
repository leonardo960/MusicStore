<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	require 'include/check_service_permission.inc.php';
	
	$head = "../templates/orders_panel_head.html";
	$content = "../templates/orders_panel_content.html";
	
	
	//Vediamo quanti ordini ci sono e generiamo i numeretti per le pagine
	$result = $db->query("select count(*) from ordini");
	$totalItems = 0;
	if($result){
		$totalItems = $result[0]["count(*)"]; //Da controllare se funziona così
	}
	
	//Popoliamo la lista degli ordini
	if($_GET['page'] && $_GET['page'] > 0){
		$base = $_GET['page']*10 - 11; //e.g page=2 2*10=20-11=9 quindi comincia dal record 10
		$offset = $base + 10; //dall'esempio qui sopra, $offset = 10 + 10 = 20; quindi fino al record 20
		$result = $db->query("select * from ordini order by data limit {$base},{$offset}");
		if($result){
			$smarty->assign("orders", $result);
		}
	} else {
		header("location: orders_panel.php?page=1");
		exit();
	}
	
	$pagesNeeded = ceil($totalItems / 10);
	
	$smarty->assign("pages_needed", $pagesNeeded);
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);

	if($_GET['message']){
		switch($_GET['message']){
			case "status_updated":
				$smarty->assign("message", "Lo stato dell'ordine è stato aggiornato con successo.");
				break;
		}
	}
	
	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	
	
	$smarty->display("frame_public.html");
	
?>
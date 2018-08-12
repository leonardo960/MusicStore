<?php
	session_start();
	
	require "init_smarty.php";
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$_GET['query'] = test_input($_GET['query']);	
	require "include/dbms.inc.php";
	require "include/search.inc.php";

	
	$head = "../templates/resultpage_head.html";
	$content = "../templates/resultpage_content.html";
	
	if (isset($_SESSION['search'][1])) {
		$smarty->assign("artists", $_SESSION['search'][1]);
	}else{
		$smarty->assign("artists", array());
	}
	
	if (isset($_SESSION['search'][2])) {
		$smarty->assign("songs", $_SESSION['search'][2]);
	}else{
		$smarty->assign("songs", array());
	}
	
	if (isset($_SESSION['search'][0])) {
		$smarty->assign("albums", $_SESSION['search'][0]);
	}else{
		$smarty->assign("albums", array());
	}
	
	//Genero i numeretti corrispondenti alle pagine dei risultati
	//Calcolo le pagine necessarie a mostrare i risultati
	$pagesNeeded = ceil($totalItems / 10);
	
	$smarty->assign("query", $_GET['query']);
	
	//Controllo se mi trovo nella ricerca semplice o advanced
	if ( isset($_GET['MIN']) ) {
		$smarty->assign("min", $_GET['MIN']);
		$smarty->assign("max", $_GET['MAX']);
		if ( isset($_GET['filter']) ) {
			$filter = $_GET['filter'];
		} else {
			$filter = '';
		}
		$smarty->assign("filter", $filter);
		$smarty->assign("page_counter", $pagesNeeded);
	} else {
		$smarty->assign("min", '');
		$smarty->assign("max", '');
		$smarty->assign("filter", '');
		$smarty->assign("page_counter", $pagesNeeded);
	}
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";

	//Impostiamo i valori di default per i campi della pagina che generiamo e rispediamo a ricerca fatta
	if(isset($_GET['MIN'])){
		$smarty->assign("min", $_GET['MIN']);
	}
	if(isset($_GET['MAX'])){
		$smarty->assign("max", $_GET['MAX']);
	}
	if(isset($_GET['filter'])){
		$smarty->assign("filter", $_GET['filter']);
	}
	if(isset($_GET['query'])){
		$smarty->assign("query", $_GET['query']);
	}
	
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	$smarty->display("../templates/frame_public.html");
?>
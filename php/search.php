<?php
	session_start();
	
	require "init_smarty.php";
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if(isset($_GET['query'])){
		$_GET['query'] = test_input($_GET['query']);	
	require "include/dbms.inc.php";
	require "include/search.inc.php";

	
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
	if (isset($_SESSION['search'][1])) {
		$pagesNeededArtists = ceil(count($_SESSION['search'][1]) / 10);
	} else {
		$pagesNeededArtists = 0;
	}
	if (isset($_SESSION['search'][0])) {
	$pagesNeededAlbum = ceil(count($_SESSION['search'][0]) / 10);
	} else {
		$pagesNeededAlbum = 0;
	}
	if (isset($_SESSION['search'][2])) {
	$pagesNeededSongs = ceil(count($_SESSION['search'][2]) / 10);
	} else {
		$pagesNeededSongs = 0;
	}
	$pagesNeeded = max($pagesNeededArtists, $pagesNeededAlbum, $pagesNeededSongs);
	
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
	require "include/set_active_logo.inc.php";


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
	

	$smarty->assign("content", $content);
	$smarty->display("../templates/frame_public.html");
	} else {
		header("Location: index.php");
		exit();
	}
	
?>
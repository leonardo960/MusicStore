<?php
	require 'include/mod.check_service_permission.inc.php';
	require "init_smarty.php";
	
	$content = "../templates/mod_special_offers_panel_content.html";
	
	if(isset($_GET['query'])){
		require "include/search.inc.php";
		if (isset($_SESSION['search'][0])) {
			for($i = 0; $i < count($_SESSION['search'][0]); $i++){
				$result = $db->getResult("select prezzo_offerta from album left join offerte_speciali on album.id_album = offerte_speciali.album where id_album = '{$_SESSION['search'][0][$i]['id_album']}'");
				if(isset($result[0]['prezzo_offerta'])){
					$_SESSION['search'][0][$i]['prezzo_offerta'] = $result[0]['prezzo_offerta'];
				}
			}
			$smarty->assign("albums", $_SESSION['search'][0]);
		}else{
			$smarty->assign("albums", array());
		}
		//Genero i numeretti corrispondenti alle pagine dei risultati
		//Calcolo le pagine necessarie a mostrare i risultati
		if (isset($_SESSION['search'][0])) {
			$pagesNeededAlbum = ceil(count($_SESSION['search'][0]) / 3);
		} else {
			$pagesNeededAlbum = 0;
		}
		
		$pagesNeeded = $pagesNeededAlbum;
		
		$smarty->assign("query", $_GET['query']);
		$smarty->assign("page_counter", $pagesNeeded);
	} else if (isset($_POST['id_album']) && isset($_POST['mode'])){
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		$_POST['id_album'] = test_input($_POST['id_album']);
		if(isset($_POST['prezzo_offerta'])){
			$_POST['prezzo_offerta'] = test_input($_POST['prezzo_offerta']);
		}
		$_POST['mode'] = test_input($_POST['mode']);
		switch($_POST['mode']){
			case 'change':
					$db->query("update offerte_speciali set prezzo_offerta = '{$_POST['prezzo_offerta']}' where album = '{$_POST['id_album']}'");
				break;
			case 'insert':
					$db->query("insert into offerte_speciali values ('{$_POST['id_album']}', '{$_POST['prezzo_offerta']}')");
				break;
			case 'delete':
					$db->query("delete from offerte_speciali where album = '{$_POST['id_album']}'");
				break;
		}
		
		header("location: mod_special_offers_panel.php");
		exit();
	}
	
	$smarty->assign("page_counter", 0);
    $result = $db->getResult("select * from album left join offerte_speciali on album.id_album = offerte_speciali.album WHERE offerte_speciali.album IS NOT NULL");
    $smarty->assign("album", $result);
    $result = $db->getResult("select * from album left join offerte_speciali on album.id_album = offerte_speciali.album WHERE offerte_speciali.album IS NULL");
    $smarty->assign("album_scontati", $result);


	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
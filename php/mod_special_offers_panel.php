<?php
	require 'include/mod.check_service_permission.inc.php';
	require "init_smarty.php";
	
	$content = "../templates/mod_special_offers_panel_content.html";
	
	if (isset($_POST['selezioni_offerta_add']) && isset($_POST['prezzo_offerta_add'])){
		for($i = 0; $i < count($_POST['selezioni_offerta_add']); $i++){
			$ps = $db->get_connection()->prepare("insert into offerte_speciali values (?, ?)");
			$ps->bind_param('id', $_POST['selezioni_offerta_add'][$i], $_POST['prezzo_offerta_add'][$i]);
			$ps->execute();
		}
		header("location: mod_special_offers_panel.php");
		exit();
	}
	
	if (isset($_POST['selezioni_offerta']) && isset($_POST['prezzo_offerta']) && isset($_POST['mode'])){
		switch($_POST['mode']){
			case 'modify':
				for($i = 0; $i < count($_POST['selezioni_offerta']); $i++){
					$ps = $db->get_connection()->prepare("update offerte_speciali set prezzo_offerta = ? where album = ?");
					$ps->bind_param('di', $_POST['prezzo_offerta'][$i], $_POST['selezioni_offerta'][$i]);
					$ps->execute();
				}
				break;
			case 'delete':
				for($i = 0; $i < count($_POST['selezioni_offerta']); $i++){
					$ps = $db->get_connection()->prepare("delete from offerte_speciali where album = ?");
					$ps->bind_param('i', $_POST['selezioni_offerta'][$i]);
					$ps->execute();
				}
				break;
		}
		
		header("location: mod_special_offers_panel.php");
		exit();
	}
	
    $result = $db->getResult("select * from album left join offerte_speciali on album.id_album = offerte_speciali.album join artisti on artisti.id_artista = album.fk_artista WHERE offerte_speciali.album IS NOT NULL");
    $smarty->assign("album_scontati", $result);
    $result = $db->getResult("select * from album left join offerte_speciali on album.id_album = offerte_speciali.album join artisti on artisti.id_artista = album.fk_artista WHERE offerte_speciali.album IS NULL");
    $smarty->assign("album", $result);


	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$content = "../templates/recent_albums_content.html";
	
	//Recuperiamo le ultime uscite
	$result = $db->getResult("select album.img_path, nome_album, nome_artista, descrizione, id_album, id_artista, prezzo, prezzo_offerta from album left join offerte_speciali on album.id_album = offerte_speciali.album join artisti on artisti.id_artista = album.fk_artista order by data_inserimento limit 20");
	
	for($i = 0; $i < count($result); $i++){
		if(!($result[$i]['prezzo_offerta'] === NULL)){
			$result[$i]['prezzo'] = $result[$i]['prezzo_offerta'];
		}
	}
	
	if($result){
		$smarty->assign("recent_albums", $result);
	}
	
	$smarty->assign("content", $content);

	
	require "include/set_logged_header.inc.php";
	require "include/set_cart_header.inc.php";
	require "include/set_active_logo.inc.php";

	
	
	$smarty->display("frame_public.html");
	
?>
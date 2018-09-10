<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$head = "../templates/favorites_head.html";
	$content = "../templates/favorites_content.html";
	
	if(isset($_SESSION['auth'])){
		//Recuperiamo gli album preferiti dell'utente
		$result = $db->getResult("select album.img_path, album.nome_album, artisti.nome_artista, album.prezzo, album.descrizione, prezzo_offerta from album_preferiti join album on album_preferiti.album = album.id_album join genere on genere.id_genere = album.fk_genere join artisti on artisti.id_artista = album.fk_artista join offerte_speciali on album_preferiti.album = offerte_speciali.album where utente = '{$_SESSION['auth']['username']}'");
		
		for($i = 0; $i < count($result); $i++){
		if(!($result[$i]['prezzo_offerta'] === NULL)){
			$result[$i]['prezzo'] = $result[$i]['prezzo_offerta'];
			}
		}
		
		if($result){
			$smarty->assign("album", $result);
		}
	
		$smarty->assign("head", $head);
		$smarty->assign("content", $content);
	
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";
	
	
		$smarty->display("frame_public.html");
	} else {
		$smarty->assign("head", $head);
		$smarty->assign("content", $content);
	
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";
	
	
		$smarty->display("frame_public.html");
	}
	
	
?>
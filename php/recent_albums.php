<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$content = "../templates/recent_albums_content.html";
	
	if(isset($_SESSION['auth'])){
		$result = $db->getResult("select album.img_path, nome_album, nome_artista, descrizione, id_album, id_artista, prezzo, prezzo_offerta, album_preferiti.utente as preferito from album left join offerte_speciali on album.id_album = offerte_speciali.album join artisti on artisti.id_artista = album.fk_artista left join album_preferiti on album_preferiti.album = album.id_album and album_preferiti.utente = '{$_SESSION['auth']['username']}' order by data_inserimento limit 20");
	
		for($i = 0; $i < count($result); $i++){
			if(!($result[$i]['prezzo_offerta'] === NULL)){
				$result[$i]['prezzo'] = $result[$i]['prezzo_offerta'];
			}
		}
		
		for($i = 0; $i < count($result); $i++){
			if( $result[$i]['preferito'] === $_SESSION['auth']['username']){
				$result[$i]['preferito'] = true;
			}
		}
	
		
		$smarty->assign("recent_albums", $result);
		$smarty->assign("user_logged", true);
	
		$smarty->assign("content", $content);

	
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";
		
	
	
		$smarty->display("frame_public.html");
	} else {
		$result = $db->getResult("select album.img_path, nome_album, nome_artista, descrizione, id_album, id_artista, prezzo, prezzo_offerta, album_preferiti.utente as preferito from album left join offerte_speciali on album.id_album = offerte_speciali.album join artisti on artisti.id_artista = album.fk_artista order by data_inserimento limit 20");
	
		for($i = 0; $i < count($result); $i++){
			if(!($result[$i]['prezzo_offerta'] === NULL)){
				$result[$i]['prezzo'] = $result[$i]['prezzo_offerta'];
			}
		}
		
		
		$smarty->assign("recent_albums", $result);
		$smarty->assign("user_logged", false);
	
		$smarty->assign("content", $content);

	
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";
		
	
	
		$smarty->display("frame_public.html");
	}
?>
<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$content = "../templates/special_offers_content.html";
	
	if(isset($_SESSION['auth'])){
		$result = $db->getResult("select album.img_path, album.nome_album, album.descrizione, album.id_album, artisti.nome_artista, artisti.id_artista, prezzo_offerta, album_preferiti.utente as preferito from offerte_speciali inner join album on album.id_album = offerte_speciali.album left join album_preferiti on album_preferiti.album = album.id_album and album_preferiti.utente = '{$_SESSION['auth']['username']}' join artisti on artisti.id_artista = album.fk_artista");
		
		for($i = 0; $i < count($result); $i++){
			if( $result[$i]['preferito'] === $_SESSION['auth']['username']){
				$result[$i]['preferito'] = true;
			}
		}
		
		$smarty->assign("special_offers", $result);
		$smarty->assign("user_logged", true);
		$smarty->assign("content", $content);

		
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";

		
		
		$smarty->display("frame_public.html");
	} else {
		$result = $db->query("select album.img_path, album.nome_album, album.descrizione, album.id_album, artisti.nome_artista, artisti.id_artista, prezzo_offerta, album_preferiti.utente as preferito from offerte_speciali inner join album on album.id_album = offerte_speciali.album join artisti on artisti.id_artista = album.fk_artista");
		
		$smarty->assign("special_offers", $result);
		$smarty->assign("content", $content);
		$smarty->assign("user_logged", false);
		
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";

		
		
		$smarty->display("frame_public.html");
	}
	
	
?>
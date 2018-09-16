<?php	
	require "init_smarty.php";	
	require "include/dbms.inc.php";
	
	session_start();
	
	$content = "../templates/favorites_content.html";
	
	if(isset($_POST['add_favorite'])){
		if(isset($_SESSION['auth'])){
			$result = $db->getResult("select * from album_preferiti where utente = '{$_SESSION['auth']['username']}' and album = '{$_POST['add_favorite']}'");
			if( isset($result[0]['album']) ){
				echo 'already_added';
				exit();
			}
			$db->query("insert into album_preferiti values ('{$_POST['add_favorite']}', '{$_SESSION['auth']['username']}')");
			echo 'added';
			exit(); 
		} else {
			echo 'Login required to perform this operation.';
			exit();
		}
	}
	
	if(isset($_POST['delete_favorite'])){
		if(isset($_SESSION['auth'])){
			$result = $db->getResult("select * from album_preferiti where utente = '{$_SESSION['auth']['username']}' and album = '{$_POST['delete_favorite']}'");
			if( !(isset($result[0]['album'])) ){
				echo 'already_removed';
				exit();
			}
			$db->query("delete from album_preferiti where album = '{$_POST['delete_favorite']}' and utente = '{$_SESSION['auth']['username']}' ");
			echo 'deleted';
			exit(); 
		} else {
			echo 'Login required to perform this operation.';
			exit();
		}
	}
	
	if(isset($_SESSION['auth'])){
		//Recuperiamo gli album preferiti dell'utente
		$result = $db->getResult("select album.id_album, album.img_path, album.nome_album, artisti.nome_artista, album.prezzo, album.descrizione, prezzo_offerta from album_preferiti join album on album_preferiti.album = album.id_album join artisti on artisti.id_artista = album.fk_artista left join offerte_speciali on album_preferiti.album = offerte_speciali.album where utente = '{$_SESSION['auth']['username']}'");
		
		for($i = 0; $i < count($result); $i++){
		if(!($result[$i]['prezzo_offerta'] === NULL)){
			$result[$i]['prezzo'] = $result[$i]['prezzo_offerta'];
			}
		}
		for($i = 0; $i < count($result); $i++){
			if(strlen($result[$i]['descrizione']) > 338){
				$result[$i]['descrizione'] = substr($result[$i]['descrizione'], 0, 333) . " . . ."; 
			}
		}
		if($result){
			$smarty->assign("album", $result);
		}
	
		$smarty->assign("content", $content);
	
		require "include/set_logged_header.inc.php";
		require "include/set_cart_header.inc.php";
		require "include/set_active_logo.inc.php";
		require "include/populate_favorites.inc.php";
	
		$smarty->display("frame_public.html");
	} else {
		header("location: login.php");
		exit();
	}
	
	
?>
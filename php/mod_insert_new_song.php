<?php
	//Init view
	require "init_smarty.php";
	
	$head = "../templates/mod_insert_new_song_head.html";
	$content = "../templates/mod_insert_new_song_content.html";
	
	if (isset($_POST['username']) && isset($_POST['password'])) { //I DATI DERIVATI DALL'INSERIMENTO DELLA CANZONE
		require "include/dbms.inc.php";
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['username'] = test_input($_POST['username']); //test_input SU TUTTI I DATI DELLA CANZONE
		
		
		require "include/mod.insert_new_song.inc.php";
		
		
		Header("Location: mod_content_management.php?message=song_inserted");
		exit();
	} elseif (isset($_GET['error'])){ 
		switch($_GET['error']){
			case "databaseerror":
				//Errore nella comunicazione con il DB
				$error = "../templates/errors/database_error.html";
				$smarty->assign("error", $error);
				break;
		}
	}
} 
	
	require "include/mod.set_logged_header.inc.php";
	
	$smarty->assign("head", $head);
	$smarty->assign("content", $content);
	
	$smarty->display("../templates/mod_frame_public.html");
?>
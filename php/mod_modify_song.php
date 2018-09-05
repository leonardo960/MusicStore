 <?php
	require 'include/check_service_permission.inc.php';
	require "include/dbms.inc.php";
	require "init_smarty.php";
 
	$head = "../templates/mod_modify_song_head.html";
	$content = "../templates/mod_modify_song_content.html";
	
	if(isset($_GET['delete')){
		require 'include/mod.delete_song.inc.php';
		
		Header("Location: mod_content_management.php?message=song_deleted");
		exit();
	}
	
	if(isset($_GET['song_id']){
		$result = $db->query("select * from canzoni where id_canzone = '{$_GET['song_id']}'");
		if($result){
			$smarty->assign("head", $head);
			$smarty->assign("canzone", $result[0]);
			$smarty->assign("content", $content);
 
			require "include/mod.set_logged_header.inc.php";
 
			$smarty->display("../templates/mod_frame_public.html");
		} else {
			Header("Location: mod_content_management.php?message=modify_song_not_found");
		}
	} else if(isset($_POST['id_canzone']) && isset($_POST['fk_genere']) && isset($_POST['descrizione']) && isset($_POST['nome_canzone']) && isset($_POST['pubblicazione']) && isset($_POST['durata'])) { //I campi dell'artista
		//modifica le info dell'artista
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['fk_genere'] = test_input($_POST['fk_genere']); //test_input SU TUTTI I DATI DELLA CANZONE
		$_POST['descrizione'] = test_input($_POST['descrizione']);
		$_POST['nome_canzone'] = test_input($_POST['nome_canzone']);
		$_POST['pubblicazione'] = test_input($_POST['pubblicazione']);
		$_POST['durata'] = test_input($_POST['durata']);
			
		if(isset($_FILES["song_preview"])){
			$target_dir = "../songs";
			$target_file = $target_dir . "/" . $_POST['id_canzone'] . '.mp3');
		}
	
		require 'include/mod.modify_song.inc.php';
		
		Header("Location: mod_content_management.php?message=song_modified");
		exit();
	} else {
		Header("Location: mod_content_management.php?message=modify_song_url_error");
		}
	}
 ?>
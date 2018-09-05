 <?php
	require 'include/check_service_permission.inc.php';
	require "include/dbms.inc.php";
	require "init_smarty.php";
 
	$head = "../templates/mod_modify_album_head.html";
	$content = "../templates/mod_modify_album_content.html";
	
	if(isset($_GET['delete')){
		require 'include/mod.delete_album.inc.php';
		
		Header("Location: mod_content_management.php?message=album_deleted");
		exit();
	}
	
	if(isset($_GET['album_id']){
		$result = $db->query("select * from album where id_album = '{$_GET['album_id']}'");
		if($result){
			$smarty->assign("head", $head);
			$smarty->assign("album", $result[0]);
			$smarty->assign("content", $content);
 
			require "include/mod.set_logged_header.inc.php";
 
			$smarty->display("../templates/mod_frame_public.html");
		} else {
			Header("Location: mod_content_management.php?message=modify_album_not_found");
		}
	} else if(isset($_POST['data_inserimento']) && isset($_POST['id_album']) && isset($_POST['nome_album']) && isset($_POST['fk_genere']) && isset($_POST['descrizione']) && isset($_POST['prezzo']) && isset($_POST['pubblicazione']) && isset($_POST['dischi']) && isset($_POST['tracce']) && isset($_POST['etichetta']) && isset($_POST['stock'])) { //I campi dell'album
		//modifica le info dell'album
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['nome_album'] = test_input($_POST['nome_album']); //test_input SU TUTTI I DATI DELL'ALBUM
		$_POST['fk_genere'] = test_input($_POST['fk_genere']);
		$_POST['descrizione'] = test_input($_POST['descrizione']);
		$_POST['prezzo'] = test_input($_POST['prezzo']);
		$_POST['pubblicazione'] = test_input($_POST['pubblicazione']);
		$_POST['dischi'] = test_input($_POST['dischi']);
		$_POST['tracce'] = test_input($_POST['tracce']);
		$_POST['etichetta'] = test_input($_POST['etichetta']);
		$_POST['stock'] = test_input($_POST['stock']);
		$_POST['id_album'] = test_input($_POST['id_album']);
		$_POST['data_inserimento'] = test_input($_POST['data_inserimento']);
		
		if(isset($_FILES["album_img"])){
			$target_dir = "../images/album";
			$target_file = $target_dir . "/" . $_POST['id_album'] . '.jpg');
		}
		
		require 'include/mod.modify_album.inc.php';
		
		Header("Location: mod_content_management.php?message=album_modified");
		exit();
	} else {
		Header("Location: mod_content_management.php?message=modify_album_url_error");
		exit();
		}
	}
 ?>
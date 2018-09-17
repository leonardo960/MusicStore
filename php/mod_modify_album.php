 <?php
	require 'include/mod.check_service_permission.inc.php';
	require "init_smarty.php";
 
	$content = "../templates/mod_modify_album_content.html";
	
	
	if(isset($_GET['album_id'])){
		$result = $db->getResult("select * from album where id_album = '{$_GET['album_id']}'");
		if($result){
			$smarty->assign("album", $result[0]);
			$smarty->assign("content", $content);
 
			require "include/mod.set_logged_header.inc.php";
			
			$result = $db->query("select * from genere");
			$smarty->assign("generi", $result);
			
			$result = $db->getResult("select nome_artista, id_artista from artisti order by nome_artista");
			$smarty->assign("artisti", $result);
 
			$smarty->display("../templates/mod_frame_public.html");
		} else {
			Header("Location: mod_content_management.php?message=modify_album_not_found");
		}
	} else if(isset($_POST['id_album']) && isset($_POST['nome_album']) && isset($_POST['fk_genere']) && isset($_POST['descrizione']) && isset($_POST['prezzo']) && isset($_POST['pubblicazione']) && isset($_POST['dischi']) && isset($_POST['tracce']) && isset($_POST['etichetta']) && isset($_POST['stock'])) { //I campi dell'album
		
		if(isset($_FILES["album-img"])){
			$target_dir = "../images/album/";
			$ext = pathinfo($_FILES['album-img']['name'], PATHINFO_EXTENSION);
			$target_file = $target_dir . $_POST['id_album'] . '.' . $ext;
		}
		
		require 'include/mod.modify_album.inc.php';
		
		Header("Location: mod_content_management.php?message=album_modified");
		exit();
	} else {
		Header("Location: mod_content_management.php?message=modify_album_url_error");
		exit();
		}
	
 ?>
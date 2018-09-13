 <?php
	require 'include/mod.check_service_permission.inc.php';
	require "init_smarty.php";
 
	$content = "../templates/mod_modify_artist_content.html";
	
	
	if(isset($_GET['artist_id'])){
		$result = $db->getResult("select * from artisti where id_artista = '{$_GET['artist_id']}'");
		if($result){
			$smarty->assign("artista", $result[0]);
			$smarty->assign("content", $content);
 
			require "include/mod.set_logged_header.inc.php";
			$result = $db->query("select * from genere");
			$smarty->assign("generi", $result);
			$smarty->display("../templates/mod_frame_public.html");
		} else {
			Header("Location: mod_content_management.php?message=modify_artist_not_found");
		}
	} else if(isset($_POST['album_pubblicati']) && isset($_POST['id_artista']) && isset($_POST['nome_artista']) && isset($_POST['biografia']) && isset($_POST['inizio_attivita']) && isset($_POST['fine_attivita']) && isset($_POST['genere'])) { //E gli altri campi dell'artista
		if(isset($_FILES["artist-img"])){
			$target_dir = "../images/artists/";
			$ext = pathinfo($_FILES['artist-img']['name'], PATHINFO_EXTENSION);
			$target_file = $target_dir . $_POST['id_artista'] . '.' . $ext;
		}
		
		require 'include/mod.modify_artist.inc.php';
		
		Header("Location: mod_content_management.php?message=artist_modified");
		exit();
	} else {
		Header("Location: mod_content_management.php?message=modify_artist_url_error");
		exit();
		}
	
 ?>
 
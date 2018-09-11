 <?php
	require 'include/mod.check_service_permission.inc.php';
	require "init_smarty.php";
 
	$content = "../templates/mod_modify_artist_content.html";
	
	if(isset($_GET['delete'])){
		require 'include/mod.delete_artist.inc.php';
		
		Header("Location: mod_content_management.php?message=artist_deleted");
		exit();
	}
	
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
	} else if(isset($_POST['id_artista']) && isset($_POST['nome_artista']) && isset($_POST['biografia']) && isset($_POST['inizio_attivita']) && isset($_POST['fine_attivita']) && isset($_POST['genere'])) { //E gli altri campi dell'artista
		//modifica le info dell'artista
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['nome_artista'] = test_input($_POST['nome_artista']); //test_input SU TUTTI I DATI DELL'ARTISTA
		$_POST['biografia'] = test_input($_POST['biografia']);
		$_POST['inizio_attivita'] = test_input($_POST['inizio_attivita']);
		$_POST['fine_attivita'] = test_input($_POST['fine_attivita']);
		$_POST['genere'] = test_input($_POST['genere']);
		$_POST['id_artista'] = test_input($_POST['id_artista']);
		
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
 
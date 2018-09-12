 <?php
	require 'include/mod.check_service_permission.inc.php';
	require "init_smarty.php";
 
	$content = "../templates/mod_modify_song_content.html";
	
	
	if(isset($_GET['song_id'])){
		$result = $db->getResult("select * from canzoni where id_canzone = '{$_GET['song_id']}'");
		if($result){
			$smarty->assign("canzone", $result[0]);
			
			$smarty->assign("content", $content);
 
			require "include/mod.set_logged_header.inc.php";
 
			$smarty->display("../templates/mod_frame_public.html");
		} else {
			Header("Location: mod_content_management.php?message=modify_song_not_found");
		}
	} else if( isset($_POST['id_canzone']) && isset($_POST['nome_canzone']) ) { 
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}		
		$_POST['id_canzone'] = test_input($_POST['id_canzone']);
		$_POST['nome_canzone'] = test_input($_POST['nome_canzone']);
		
			
		if(isset($_FILES["song-preview"])){
			$target_dir = "../songs/";
			$ext = pathinfo($_FILES['song-preview']['name'], PATHINFO_EXTENSION);
			$target_file = $target_dir . $_POST['id_canzone'] . '.' . $ext;
		}
	
		require 'include/mod.modify_song.inc.php';
		
		Header("Location: mod_content_management.php?message=song_modified");
		exit();
	} else {
		Header("Location: mod_content_management.php?message=modify_song_url_error");
		exit();
		}
	
 ?>
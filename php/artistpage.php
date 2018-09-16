 <?php
 require "init_smarty.php";
 require "include/dbms.inc.php";
 
 //TODO completare
 $content = "../templates/artistpage_content.html";
 
 $smarty->assign("content", $content);
 
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
 $_GET['id_artista'] = test_input($_GET['id_artista']);

 $artista = $db->getResult("SELECT nome_artista, inizio_attivita, fine_attivita, biografia, img_path FROM artisti WHERE id_artista = '{$_GET['id_artista']}'");
 $genres = $db->getResult("select * from genere_artisti where artista = '{$_GET['id_artista']}'");
 $artista[0]['generi'] = array();
 for($i = 0; $i < count($genres); $i++){
	array_push($artista[0]['generi'], $genres[$i]['genere']);
 }
 $smarty->assign("artista", $artista[0]);
 
 
 $result = $db->getResult("SELECT nome_album, album.descrizione, prezzo, id_album, pubblicazione, dischi, tracce, etichetta, album.img_path, data_inserimento FROM artisti JOIN album ON artisti.id_artista = album.fk_artista WHERE id_artista = '{$_GET['id_artista']}' ");
 $smarty->assign("album", $result);
 
 require "include/set_logged_header.inc.php";
 require "include/set_cart_header.inc.php";
 require "include/set_active_logo.inc.php";
 
 $smarty->display("../templates/frame_public.html");
 ?>
 
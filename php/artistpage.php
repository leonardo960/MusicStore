 <?php
 require "init_smarty.php";
 require "include/dbms.inc.php";
 
 //TODO completare
 $head = "../templates/artistpage_head.html";
 $content = "../templates/artistpage_content.html";
 
 $smarty->assign("head", $head);
 $smarty->assign("content", $content);
 
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
 $_GET['id_artista'] = test_input($_GET['id_artista']);

 $result = $db->getResult("SELECT nome_artista, genere.genere, inizio_attivita, fine_attivita, biografia, img_path FROM artisti join genere on artisti.genere = genere.id_genere WHERE id_artista = '{$_GET['id_artista']}'");
 $smarty->assign("artista", $result[0]);
 
 $result = $db->getResult("SELECT nome_album, genere.genere, album.descrizione, prezzo, id_album, pubblicazione, dischi, tracce, etichetta, album.img_path, data_inserimento FROM artisti JOIN album ON artisti.id_artista = album.fk_artista JOIN genere ON genere.id_genere = album.fk_genere WHERE id_artista = '{$_GET['id_artista']}' ");
 $smarty->assign("album", $result);
 
 require "include/set_logged_header.inc.php";
 require "include/set_cart_header.inc.php";
require "include/set_active_logo.inc.php";
 
 $smarty->display("../templates/frame_public.html");
 ?>
 
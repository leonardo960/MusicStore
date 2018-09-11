<?php
 require "init_smarty.php";
 require "include/dbms.inc.php";
 //TODO completare
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$_GET['id_album'] = test_input($_GET['id_album']);

$result = $db->getResult("SELECT album.img_path, album.nome_album, artisti.nome_artista, artisti.id_artista, genere.genere, album.etichetta, album.dischi, album.tracce, album.descrizione, album.pubblicazione, album.prezzo, offerte_speciali.prezzo_offerta, album.stock FROM album JOIN artisti on album.fk_artista = artisti.id_artista JOIN offerte_speciali on album.id_album = offerte_speciali.album JOIN genere on album.fk_genere = genere.id_genere WHERE id_album = '{$_GET['id_album']}' ");
$smarty->assign("album", $result[0]);

$result = $db->getResult("SELECT id_canzone, nome_canzone, song_path FROM album JOIN canzoni ON canzoni.fk_album = album.id_album WHERE id_album = '{$_GET['id_album']}' ");
$smarty->assign("songs", $result);


$head = "../templates/albumpage_head.html";
$content = "../templates/albumpage_content.html";
 
$smarty->assign("head", $head);
$smarty->assign("content", $content);
 
require "include/set_logged_header.inc.php";
require "include/set_cart_header.inc.php";
require "include/set_active_logo.inc.php";
 
$smarty->display("../templates/frame_public.html");

?>
 
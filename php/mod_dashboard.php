<?php
//require 'include/mod.check_service_permission.inc.php';
require "init_smarty.php";
require "include/dbms.inc.php";
$content = "../templates/mod_dashboard_content.html";

//Numero utenti
$result = $db->getResult("SELECT COUNT(username) as numero FROM account");
$numUtenti = 0;
if ($result) {
    $numUtenti = $result[0];
}
$smarty->assign("numero_utenti", $numUtenti);

//Numero album
$result = $db->getResult("SELECT COUNT(nome_album) as numero FROM album");
$numAlbums = 0;
if ($result) {
    $numAlbums = $result[0];
}
$smarty->assign("numero_album", $numAlbums);

//Numero artisti
$result = $db->getResult("SELECT COUNT(nome_artista) as numero FROM artisti");
$numArtisti = 0;
if ($result) {
    $numArtisti = $result[0];
}
$smarty->assign("numero_artisti", $numArtisti);

//Numero canzoni
$result = $db->getResult("SELECT COUNT(id_canzone) as numero FROM canzoni");
$numCanzoni = 0;
if ($result) {
    $numCanzoni = $result[0];
}
$smarty->assign("numero_canzoni", $numCanzoni);

//Numero ordini da spedire
$result = $db->getResult("SELECT COUNT(id_ordine) as numero FROM ordini WHERE status = 'inserito'");
$numOrdini = 0;
if ($result) {
    $numOrdini = $result[0];
}
$smarty->assign("da_spedire", $numOrdini);

//Numero ordini in consegna
$result = $db->getResult("SELECT COUNT(id_ordine) as numero FROM ordini WHERE status = 'spedito'");
$numOrdini = 0;
if ($result) {
    $numOrdini = $result[0];
}
$smarty->assign("in_consegna", $numOrdini);

//Soldi negli ultimi 30 giorni ""
$result = $db->getResult("SELECT SUM(prezzo) as numero FROM ordini WHERE data BETWEEN NOW() - INTERVAL 30 DAY  AND  NOW()");
$soldi = 0;
if ($result[0]['numero'] !== NULL) {
    $soldi = $result[0];
} else {
	$soldi = array("numero" => 0);
}
$smarty->assign("profitto", $soldi);

//Ordini
//Query coi JOIN da fare
$result = $db->getResult("SELECT * FROM ordini");
if($result){
    $ordini = $result;
}
$smarty->assign("ordini", $ordini);

require "include/mod.set_logged_header.inc.php";
$smarty->assign("content", $content);
$smarty->display("../templates/mod_frame_public.html");

?>


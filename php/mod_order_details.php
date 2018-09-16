<?php
require "init_smarty.php";
require "include/dbms.inc.php";
$content = "../templates/mod_dettaglio_ordine_content.html";

if(isset($_POST['new_status']) && isset($_POST['id_ordine'])){
	$ps = $db->get_connection()->prepare("update ordini set status = ? where id_ordine = ?");
	$ps->bind_param('si', $_POST['new_status'], $_POST['id_ordine']);
	$ps->execute();
}
if(isset($_GET['id_ordine'])){
	$result = $db->getResult("select * from ordini join indirizzi_utenti on ordini.indirizzo_ordine = indirizzi_utenti.id_indirizzo left join carte_ordini on carte_ordini.ordine = ordini.id_ordine join album on album.id_album = ordini.album where id_ordine = '{$_GET['id_ordine']}'");
	$smarty->assign("ordine", $result[0]);
	$smarty->assign("content", $content);
	require "include/mod.set_logged_header.inc.php";
	$smarty->display("../templates/mod_frame_public.html");
} else {
	header("location: mod_dashboard.php");
	exit();
}

?>
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
$result = $db->getResult("SELECT * FROM album JOIN canzoni ON canzoni.fk_album = album.id_album AND id_album = '{$_GET['id_album']}' ");

$smarty->assign("album", $result[0]);
$smarty->assign("songs", $result);


 $head = "../templates/albumpage_head.html";
 $content = "../templates/albumpage_content.html";
 
 $smarty->assign("head", $head);
 $smarty->assign("content", $content);
 
 require "include/set_logged_header.inc.php";
 require "include/set_cart_header.inc.php";
 
 $smarty->display("../templates/frame_public.html");
 ?>
 
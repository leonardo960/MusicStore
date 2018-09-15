<?php

//Ancora da mettere a posto
require "init_smarty.php";
require 'include/mod.check_service_permission.inc.php';

$content = "../templates/mod_slider_content.html";
//Eseguiamo eventuali richieste
if (isset($_POST['new_image'])) {
    $result = $db->query("INSERT INTO immagini_slider(name) VALUES ('{$_FILES['image-file']['name']}')");
    $result = $db->getResult("SELECT id FROM immagini_slider where name = '{$_FILES['image-file']['name']}'");
    //
    $target_dir = "../images/slider/";
    $ext = pathinfo($_FILES['image-file']['name'], PATHINFO_EXTENSION);
    $target_file = $target_dir . $result[0]['MAX(id_canzone)'] . '.' . $ext;
    move_uploaded_file($_FILES["image-file"]["tmp_name"], $target_file);
    //
    $db->query("update ordini set status = '{$_POST['new_status']}' where id_ordine = '{$_POST['id_ordine']}'");
}
//Mostriamo la pagina


?>
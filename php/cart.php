<?php
session_start();
if(isset($_POST['quantity_change'])){
	foreach($_SESSION['cart'] as $value){
		if($value['item_name'] === $_POST['quantity_change']['item_name']){
			$value['item_quantity'] = $_POST['quantity_change']['amount'];
			exit();
		}
	}
} elseif (isset($_POST['remove_item'])) {
	foreach($_SESSION['cart'] as $key => $value){
		if($value['item_name'] === $_POST['remove_item']){
			print_r($_SESSION['cart'][$key]);
			unset($_SESSION['cart'][$key]);
			print_r($_SESSION['cart'][$key]);
			exit();
		}
	}
}
require "include/dbms.inc.php";
require "init_smarty.php";


$head = "../templates/cart_head.html";
$content = "../templates/cart_content.html";


$total = 0;
if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
}
$cart = $_SESSION['cart'];
$cart_content = array();
foreach ($cart as $value) {
	$cartsql = "SELECT * FROM album WHERE nome_album like '{$value['item_name']}'";
	$result = $db->getResult($cartsql)[0];
	$total += ($result['prezzo']*$value['item_quantity']);
	$cart_content[] = (object)array("item-name" => $result['nome_album'], "item-price" => $result['prezzo'], "item-image-path" => $result['img_path'], "item-description" => "\"" . substr($result['descrizione'], 0, 100) . "...\"", "in-stock" => $result['stock']); 
}
$smarty->assign("total-item-price", $total);
$smarty->assign("cart_content", $cart);

require "include/set_logged_header.inc.php";
require "include/set_cart_header.inc.php";
$smarty->assign("head", $head);
$smarty->assign("content", $content);
$smarty->display("../templates/frame_public.html");
?>

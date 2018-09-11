<?php
if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
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
	$cartsql = "SELECT * FROM album WHERE id_album like '{$value['item_id']}'";
	$result = $db->getResult($cartsql)[0];
	$total += ($result['prezzo']*$value['item_quantity']);
	$cart_content[] = array("item_id" => $result['id_album'], "item_name" => $result['nome_album'], "item_price" => $result['prezzo'], "item_image_path" => $result['img_path'], "item_description" => "\"" . substr($result['descrizione'], 0, 100) . "...\"", "in_stock" => $result['stock']); 
	//echo '<pre>'; print_r($cart_content); echo '</pre>';
}
$smarty->assign("total-item-price", $total);
$smarty->assign("cart_content", $cart_content);

require "include/set_logged_header.inc.php";
require "include/set_cart_header.inc.php";
require "include/set_active_logo.inc.php";
$smarty->assign("head", $head);
$smarty->assign("content", $content);
if(isset($_GET['error'])){
	switch($_GET['error']){
		case 'cashout_error':
			$smarty->assign("error", "../templates/errors/cashout_error.html");
			break;
	}
}
$smarty->display("../templates/frame_public.html");
?>

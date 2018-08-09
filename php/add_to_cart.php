<?php
session_start();

if(isset($_POST['item_name']) & !empty($_POST['item_name'])){
	$item_name = $_POST['item_name'];
	
	if(!is_array($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	foreach($_SESSION['cart'] as $value){
		if($value === $item_name){
			echo 'already_added';
			exit();
		}
	}
	array_push($_SESSION['cart'], array("item_name"=>$item_name, "item_quantity"=>1));
	echo 'success';
}else{
	echo 'failure';
}

?>

<?php

if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

if(isset($_POST["item_id"])){
	$item_id = $_POST["item_id"];
	
	if(!is_array($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	foreach($_SESSION['cart'] as $value){
		if($value === $item_id){
			echo 'already_added';
			exit();
		}
	}
	array_push($_SESSION['cart'], array("item_id"=>$item_id, "item_quantity"=>1));
	echo 'success';
}else{
	echo 'failure';
}

?>

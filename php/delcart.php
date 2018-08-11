<?php
session_start();
if(isset($_GET['index']) & !empty($_GET['index'])){
	$index = $_GET['index'];
	unset($_SESSION['cart'][$index]);
	header('location: cart.php');
}
?>

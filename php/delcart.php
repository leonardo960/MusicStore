<?php
if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
if(isset($_GET['index'])){
	$index = $_GET['index'];
	unset($_SESSION['cart'][$index]);
	header('location: cart.php');
	exit();
} else {
	header('location: index.php');
	exit();
}
?>

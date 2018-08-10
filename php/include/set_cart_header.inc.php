<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$cartString = 'cart: ';
	if ( isset($_SESSION['cart']) ) {
		$smarty->assign("cart", $cartString . count($_SESSION['cart']));
	} else {
		$smarty->assign("cart", $cartString . '[empty]');
	}
?>
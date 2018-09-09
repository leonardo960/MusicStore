<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$cartString = 'cart: ';
	if ( !isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 ) {
		$smarty->assign("cart", $cartString . '[empty]');
	} else {
		$smarty->assign("cart", $cartString . count($_SESSION['cart']));
	}
?>
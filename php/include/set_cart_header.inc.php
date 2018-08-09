<?php
$cartString = 'cart: ';
	if ( isset($_SESSION['cart']) ) {
		$smarty->assign("cart", $cartString . count($_SESSION['cart']));
	} else {
		$smarty->assign("cart", $cartString . '[empty]');
	}
?>
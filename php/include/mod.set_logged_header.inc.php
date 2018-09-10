<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ( isset($_SESSION['mod']) ) {
		$smarty->assign("logged_moderator", $_SESSION['mod']['username']);
}
?>
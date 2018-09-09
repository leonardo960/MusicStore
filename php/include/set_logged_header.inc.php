<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ( isset($_SESSION['auth']) ) {
		$smarty->assign("logged_username", $_SESSION['auth']['username']);
}
?>
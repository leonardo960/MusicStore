<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ( isset($_SESSION['auth']) ) {
		$logged_in_header = $smarty->fetch("../templates/mod_logged_in_header.html");
		$smarty->assign("logged", "Logged Moderator: " . $_SESSION['auth']['username']);
	} else {
		$not_logged_in_header = $smarty->fetch("../templates/mod_not_logged_in_header.html");
		$smarty->assign("logged", $not_logged_in_header);
	}
?>
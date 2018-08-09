<?php

if ( isset($_SESSION['auth']) ) {
		//$logged_in_header = new Template("../logged_in_header.html");
		$logged_in_header = $smarty->fetch("../templates/logged_in_header.html");
		$smarty->assign("logged", "logged in as: " . $_SESSION['auth']['username']);
		//$logged_in_header->setContent("logged", "logged in as: " . $_SESSION['auth']['username']);
		//$main->setContent("logged", $logged_in_header->get());
	} else {
		//$not_logged_in_header = new Template("../not_logged_in_header.html");
		$not_logged_in_header = $smarty->fetch("../templates/not_logged_in_header.html");
		$smarty->assign("logged", $not_logged_in_header);
		//$main->setContent("logged", $not_logged_in_header->get());
	}
?>
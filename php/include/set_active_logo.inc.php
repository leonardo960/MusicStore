<?php
	$active_page = substr($_SERVER["PHP_SELF"], strrpos($_SERVER["PHP_SELF"], "/")+1);
	$active_page = substr($active_page, 0, strrpos($active_page, "."));
	switch($active_page){
		case 'index':
			$smarty->assign('active_logo', 'Home');
			break;
		case 'favorites':
			$smarty->assign('active_logo', 'Favorites');
			break;
		case 'recent_albums':
			$smarty->assign('active_logo', 'Recent Albums');
			break;
		case 'special_offers':
			$smarty->assign('active_logo', 'Specials');
			break;
		case 'contacts':
			$smarty->assign('active_logo', 'Contact Us');
			break;
		default:
			$smarty->assign('active_logo', '');
			break;
	}
?>
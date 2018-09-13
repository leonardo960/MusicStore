<?php
	$result = $db->getResult("select album from album_preferiti where utente = '{$_SESSION['auth']['username']}'");
	$ids = [];
	for($i = 0; $i < count($result); $i++){
		array_push($ids, $result[$i]['album']);
	}
	$smarty->assign("favorites", $ids);
?>
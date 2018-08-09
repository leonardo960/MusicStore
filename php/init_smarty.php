<?php
	require "../Smarty/libs/Smarty.class.php";
	
	$smarty = new Smarty();
	$smarty->setTemplateDir('../templates');
	$smarty->setCompileDir('../templates/templates_c');
	$smarty->setCacheDir('../smarty_cache');
	$smarty->setConfigDir('../smarty_configs');
?>
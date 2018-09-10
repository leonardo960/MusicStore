<?php
	require 'include/mod.check_service_permission.inc.php';	
	
	require "include/dbms.inc.php";
	if($_GET['new_order_status'] and $_GET['id_ordine']){
		$db->query("update ordini set status = '{$_GET['new_order_status']}' where id_ordine = '{$_GET['id_ordine']}'");
		header("location: orders_panel.php?message=status_updated");
		exit();
	}

?>
<?php
	if(isset($_POST['username_input']) or isset($_POST['name_input']) or isset($_POST['surname_input']) or isset($_POST['email_input'])){
		require "include/dbms.inc.php";
		
		session_start();
		
		
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}	
		
		if(isset($_POST['name_input'])){
			$_POST['name_input'] = test_input($_POST['name_input']);
			$db->query("update utenti set nome = '{$_POST['name_input']}' where username = '{$_SESSION['auth']['username']}'");
			$_SESSION['auth']['nome'] = $_POST['name_input'];
		}
		if(isset($_POST['surname_input'])){
			$_POST['surname_input'] = test_input($_POST['surname_input']);
			$db->query("update utenti set cognome = '{$_POST['surname_input']}' where username = '{$_SESSION['auth']['username']}'");
			$_SESSION['auth']['cognome'] = $_POST['surname_input'];
		}
		if(isset($_POST['email_input'])){
			$_POST['email_input'] = test_input($_POST['email_input']);
			$db->query("update utenti set email = '{$_POST['email_input']}' where username = '{$_SESSION['auth']['username']}'");
			$_SESSION['auth']['email'] = $_POST['email_input'];
		}
		
		if(isset($_POST['username_input'])){
			$result = $db->getResult("select * from utenti where nome = '{$_POST['username_input']}");
			$_POST['username_input'] = test_input($_POST['username_input']);
			$db->query("update utenti set username = '{$_POST['username_input']}' where username = '{$_SESSION['auth']['username']}'");
			$_SESSION['auth']['username'] = $_POST['username_input'];
		}
		Header("Location: account.php");
	} else {
		//E' stato chiamato questo php in modo non corretto
		Header("Location: index.php");
		exit();
	}

?>
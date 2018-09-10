<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->getResult("SELECT * FROM account WHERE username = '{$_POST["username"]}'");
	
	if(count($result[0]) > 0){
	Header("Location: login.php?error=usertaken");
	exit();
	
	}else{
		//Lo username non è in uso, tutto ok
		$md5d = MD5('{$_POST["password"]}'); //Evito cose brutte
		$result = $db->query("INSERT INTO account VALUES ('{$_POST["username"]}',
															  '{$md5d}',
														     'Clienti')");
		$result = $db->query("INSERT INTO anagrafica_clienti VALUES ('{$_POST['username']}',
														   '{$_POST['name']}',
														   '{$_POST['surname']}',
														   '{$_POST['email']}')");
		if($result){
			//Insert ok
			$temp = array("username"=>$_POST["username"], "email"=>$_POST["email"], "nome"=>$_POST["name"], "cognome"=>$_POST["surname"]);
			$_SESSION['auth'] = $temp;
		} else {
			Header("Location: login.php?error=databaseerror");
			exit();
		}
	}




?>
<?php

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$result = $db->getResult("SELECT * FROM moderatori WHERE username = '{$_POST["username"]}'");
	
	if($result){
	Header("Location: mod_signup.php?error=usertaken");
	exit();
	
	}else{
		//Lo username non è in uso, tutto ok
		$md5d = MD5('{$_POST["password"]}'); //Evito cose brutte
		$result = $db->query("INSERT INTO moderatori VALUES ('{$_POST["username"]}', //DA MODIFICARE CON I DATI DEL MOD
															  '{$md5d}',
														     '{$_POST["email"]}',
															 '{$_POST["name"]}',
															 '{$_POST["surname"]}')");
																											 
		if($result){
			//Insert ok
			$temp = array("username"=>$_POST["username"], "email"=>$_POST["email"], "nome"=>$_POST["name"], "cognome"=>$_POST["surname"]); //DA MODIFICARE
			$_SESSION['auth'] = $temp;
		} else {
			Header("Location: mod_signup.php?error=databaseerror");
			exit();
		}
	}




?>
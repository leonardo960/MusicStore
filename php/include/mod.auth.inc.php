<?php

    session_start(); // attiva la gestione sessione 
        
  

		$md5d = MD5('{$_POST["password"]}');
        $result = $db->getResult("SELECT * FROM moderatori
                                   WHERE username = '{$_POST['username']}'
                                     AND password = '{$md5d}'");
									 
        if (!$result) {
            /* utente o password errate */
            Header("Location: mod_login.php?error=dataincorrect");
			exit();
        } 
        
        /* 
         * username e password corrette, utente loggato
         */
        
        $_SESSION['auth'] = $result[0];
        
?>
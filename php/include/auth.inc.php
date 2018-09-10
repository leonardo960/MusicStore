<?php

    if (session_status() == PHP_SESSION_NONE) {
		session_start();
	} // attiva la gestione sessione 
        
  

		$md5d = MD5('{$_POST["password"]}');
        $result = $db->getResult("SELECT account.username, password, email, nome, cognome FROM account join anagrafica_clienti on account.username = anagrafica_clienti.username
                                   WHERE account.username = '{$_POST['username']}'
                                     AND password = '{$md5d}'");
									 
        if (count($result[0]) == 0) {
            /* utente o password errate */
            Header("Location: login.php?error=dataincorrect");
			exit();
        } 
        
        /* 
         * username e password corrette, utente loggato
         */
        
        $_SESSION['auth'] = $result[0];
        
?>
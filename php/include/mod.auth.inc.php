<?php

		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		} // attiva la gestione sessione 
        
  

        $result = $db->getResult("SELECT * FROM account
                                   WHERE username = '{$_POST['username']}'
                                     AND password = '{$_POST['password']}'
									 AND gruppo = 'Admin' or gruppo = 'Moderatori_Base'");
									 
        if (count($result[0]) == 0) {
			$result = $db->getResult("SELECT * FROM admin
                                   WHERE username = '{$_POST['username']}'
                                     AND password = '{$_POST['password']}' ");
            /* utente o password errate */
			if (count($result[0]) == 0) {
            Header("Location: mod_login.php?error=dataincorrect");
			exit();
			}
        } 
        
        /* 
         * username e password corrette, utente loggato
         */
        
        $_SESSION['mod'] = $result[0];
        
?>
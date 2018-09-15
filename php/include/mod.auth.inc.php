<?php

		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		} // attiva la gestione sessione 
        
  

        $result = $db->getResult("SELECT * FROM account
                                   WHERE username = '{$_POST['username']}'
                                     AND password = '{$_POST['password']}'
									 AND gruppo = 'Admin' or gruppo = 'Moderatori_Base'");
									 

        
        /* 
         * username e password corrette, utente loggato
         */
        if($result)
			$_SESSION['mod'] = $result[0];
        
?>
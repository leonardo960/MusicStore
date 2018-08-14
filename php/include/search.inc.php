<?php
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		if(!isset($_GET['page_id'])){
			$_GET['page_id'] = 1;
		}
		
		
		$totalItems = 0;
		$offset = 10 * ($_GET['page_id']-1);
		$_SESSION['search'] = array();
		
		//Capiamo se ci troviamo nella ricerca semplice o advanced
		if( !isset($_GET['MIN']) ) {
		$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%'";
		$result = $db->getResult($query);
		if($result) {
			$totalItems += count($result);
		}
		$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%'";
		$result = $db->getResult($query);
		if($result) {
			$totalItems += count($result);
		}
		$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%'";
		$result = $db->getResult($query);
		if($result) {
			$totalItems += count($result);
		}
	
	
		$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' LIMIT $offset,10";
		$result = $db->getResult($query);
	
		if($result){
			$_SESSION['search'][0] = $result;
		}
	
		$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%' LIMIT $offset,10";
		$result = $db->getResult($query);

		if($result){
			$_SESSION['search'][1] = $result;
		}
	
		$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%' LIMIT $offset,10";
		$result = $db->getResult($query);
	
		if($result){
			$_SESSION['search'][2] = $result;
		}
		
		} else {
			if( isset($_GET['filter']) and $_GET['filter'] !== '') {
				if( $_GET['filter'] === 'artists' ) {
					$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%'";
					$result = $db->getResult($query);
					if($result) {
						$totalItems += count($result);
					}
					$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%' LIMIT $offset,10";
					$result = $db->getResult($query);
					if($result){
						$_SESSION['search'][1] = $result;
					}
				} elseif ( $_GET['filter'] === 'albums' ) {
					if( $_GET['MIN'] !== '' and $_GET['MIN'] >= 0 ) {
						if( $_GET['MAX'] !== '' and $_GET['MAX'] >= 0 ) {
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo >= {$_GET['MIN']} AND prezzo <= {$_GET['MAX']}";
							$result = $db->getResult($query);
							if($result) {
								$totalItems += count($result);
							}
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo >= {$_GET['MIN']} AND prezzo <= {$_GET['MAX']} LIMIT $offset,10";
							$result = $db->getResult($query);
							if($result){
								$_SESSION['search'][0] = $result;
							}
						} else {
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo >= {$_GET['MIN']}";
							$result = $db->getResult($query);
							if($result) {
								$totalItems += count($result);
							}
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo >= {$_GET['MIN']} LIMIT $offset,10";
							$result = $db->getResult($query);
							if($result){
								$_SESSION['search'][0] = $result;
							}
						}
					} else {
						if( $_GET['MAX'] !== '' and $_GET['MAX'] >= 0 ) {
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo <= {$_GET['MAX']}";
							$result = $db->getResult($query);
							if($result) {
								$totalItems += count($result);
							}
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo <= {$_GET['MAX']} LIMIT $offset,10";
							$result = $db->getResult($query);
							if($result){
								$_SESSION['search'][0] = $result;
							}
						} else {
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%'";
							$result = $db->getResult($query);
							if($result) {
								$totalItems += count($result);
							}
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' LIMIT $offset,10";
							$result = $db->getResult($query);
							if($result){
								$_SESSION['search'][0] = $result;
							}
						}
					}
					
				} elseif ( $_GET['filter'] === 'songs' ) {
					$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%'";
					$result = $db->getResult($query);
					if($result) {
						$totalItems += count($result);
					}
					$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%' LIMIT $offset,10";
					$result = $db->getResult($query);
	
					if($result){
						$_SESSION['search'][2] = $result;
					}
				}
			} else {
				if( $_GET['MIN'] !== '' and $_GET['MIN'] >= 0 ) {
					if( $_GET['MAX'] !== '' and $_GET['MAX'] >= 0 ) {
						$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo >= {$_GET['MIN']} AND prezzo <= {$_GET['MAX']}";
						$result = $db->getResult($query);
						if($result) {
							$totalItems += count($result);
						}
						$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%'";
						$result = $db->getResult($query);
						if($result) {
							$totalItems += count($result);
						}
						$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%'";
						$result = $db->getResult($query);
						if($result) {
							$totalItems += count($result);
						}
						$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo >= {$_GET['MIN']} AND prezzo <= {$_GET['MAX']} LIMIT $offset,10";
						$result = $db->getResult($query);
	
						if($result){
							$_SESSION['search'][0] = $result;
						}
	
						$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%' LIMIT $offset,10";
						$result = $db->getResult($query);

						if($result){
							$_SESSION['search'][1] = $result;
						}
	
						$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%' LIMIT $offset,10";
						$result = $db->getResult($query);
	
						if($result){
							$_SESSION['search'][2] = $result;
						}
					} else {
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo >= {$_GET['MIN']} ";
							$result = $db->getResult($query);
							if($result) {
								$totalItems += count($result);
							}
							$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%'";
							$result = $db->getResult($query);
							if($result) {
								$totalItems += count($result);
							}
							$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%'";
							$result = $db->getResult($query);
							if($result) {
								$totalItems += count($result);
							}
							$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo >= {$_GET['MIN']} LIMIT $offset,10";
							$result = $db->getResult($query);
		
							if($result){
								$_SESSION['search'][0] = $result;
							}
	
							$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%' LIMIT $offset,10";
							$result = $db->getResult($query);

							if($result){
								$_SESSION['search'][1] = $result;
							}
	
							$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%' LIMIT $offset,10";
							$result = $db->getResult($query);
	
							if($result){
								$_SESSION['search'][2] = $result;
							}
					}
			} elseif ( $_GET['MAX'] !== '' and $_GET['MAX'] >= 0 ) {
					$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo <= {$_GET['MAX']}";
					$result = $db->getResult($query);
					if($result) {
						$totalItems += count($result);
					}
					$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%'";
					$result = $db->getResult($query);
					if($result) {
						$totalItems += count($result);
					}
					$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%'";
					$result = $db->getResult($query);
					if($result) {
						$totalItems += count($result);
					}
					$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' AND prezzo <= {$_GET['MAX']} LIMIT $offset,10";
					$result = $db->getResult($query);
		
					if($result){
						$_SESSION['search'][0] = $result;
					}
	
					$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%' LIMIT $offset,10";
					$result = $db->getResult($query);

					if($result){
						$_SESSION['search'][1] = $result;
					}
	
					$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%' LIMIT $offset,10";
					$result = $db->getResult($query);
	
					if($result){
						$_SESSION['search'][2] = $result;
					}
			} else {
				$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%'";
				$result = $db->getResult($query);
				if($result) {
					$totalItems += count($result);
				}
				$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%'";
				$result = $db->getResult($query);
				if($result) {
					$totalItems += count($result);
				}
				$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%'";
				$result = $db->getResult($query);
				if($result) {
					$totalItems += count($result);
				}
				$query = "SELECT * FROM album WHERE nome_album LIKE '%{$_GET['query']}%' LIMIT $offset,10";
				$result = $db->getResult($query);
	
				if($result){
					$_SESSION['search'][0] = $result;
				}
	
				$query = "SELECT * FROM artisti WHERE nome_artista LIKE '%{$_GET['query']}%' LIMIT $offset,10";
				$result = $db->getResult($query);

				if($result){
					$_SESSION['search'][1] = $result;
				}		
	
				$query = "SELECT * FROM canzoni WHERE nome_canzone LIKE '%{$_GET['query']}%' LIMIT $offset,10";
				$result = $db->getResult($query);
	
				if($result){
					$_SESSION['search'][2] = $result;
				}
			}
		}
	}
?>
-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Set 10, 2018 alle 17:50
-- Versione del server: 5.7.19
-- Versione PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_store`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gruppo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `account`
--

INSERT INTO `account` (`username`, `password`, `gruppo`) VALUES
('admin', 'admin', 'Admin'),
('leonardo96', '7150404d07e506d07bf13d1aade209bf', 'Clienti'),
('mod', 'mod', 'Moderatori_Base');

-- --------------------------------------------------------

--
-- Struttura della tabella `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `nome_album` varchar(30) NOT NULL,
  `fk_genere` int(11) NOT NULL,
  `fk_artista` int(11) NOT NULL,
  `descrizione` varchar(1000) DEFAULT NULL,
  `prezzo` int(11) NOT NULL,
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `pubblicazione` date DEFAULT NULL,
  `dischi` int(11) DEFAULT NULL,
  `tracce` int(11) DEFAULT NULL,
  `etichetta` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `data_inserimento` date DEFAULT NULL,
  PRIMARY KEY (`id_album`),
  KEY `fk_artista` (`fk_artista`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `album`
--

INSERT INTO `album` (`nome_album`, `fk_genere`, `fk_artista`, `descrizione`, `prezzo`, `id_album`, `pubblicazione`, `dischi`, `tracce`, `etichetta`, `stock`, `img_path`, `data_inserimento`) VALUES
('Bye Bye', 1, 2, 'Sixth studio album from singer Annalisa. The publishing was anticipated by the release of two singles: \"Direzione La Vita\", which made up for an all-women music video, and \"Il Mondo Prima di Te\", which placed third in Italian national singing competition Sanremo.', 20, 1, '2018-02-16', 1, 13, 'Warner Music Italy', 5, '../images/bye_bye_album_cover.jpg', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `album_preferiti`
--

DROP TABLE IF EXISTS `album_preferiti`;
CREATE TABLE IF NOT EXISTS `album_preferiti` (
  `album` int(11) NOT NULL,
  `utente` varchar(20) NOT NULL,
  PRIMARY KEY (`album`,`utente`),
  KEY `fk_utente` (`utente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `anagrafica_clienti`
--

DROP TABLE IF EXISTS `anagrafica_clienti`;
CREATE TABLE IF NOT EXISTS `anagrafica_clienti` (
  `username` varchar(20) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cognome` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `anagrafica_clienti`
--

INSERT INTO `anagrafica_clienti` (`username`, `nome`, `cognome`, `email`) VALUES
('leonardo96', 'Leonardo', 'Formichetti', 'rosso_x96@hotmail.it');

-- --------------------------------------------------------

--
-- Struttura della tabella `artisti`
--

DROP TABLE IF EXISTS `artisti`;
CREATE TABLE IF NOT EXISTS `artisti` (
  `nome_artista` varchar(30) NOT NULL,
  `id_artista` int(11) NOT NULL AUTO_INCREMENT,
  `biografia` varchar(1000) DEFAULT NULL,
  `genere` int(11) DEFAULT NULL,
  `album_pubblicati` int(11) DEFAULT NULL,
  `inizio_attivita` year(4) DEFAULT NULL,
  `fine_attivita` year(4) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_artista`),
  KEY `fk_genere` (`genere`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `artisti`
--

INSERT INTO `artisti` (`nome_artista`, `id_artista`, `biografia`, `genere`, `album_pubblicati`, `inizio_attivita`, `fine_attivita`, `img_path`) VALUES
('Annalisa', 2, 'I consider my phisics degree a reason to be proud of myself.', 2, 6, 2004, NULL, '../images/2.jpg'),
('Francesco Gabbani', 6, 'Two times winner of the national italian singing contest Sanremo.', 1, 4, 2000, NULL, '../images/6.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `canzoni`
--

DROP TABLE IF EXISTS `canzoni`;
CREATE TABLE IF NOT EXISTS `canzoni` (
  `fk_album` int(11) NOT NULL,
  `fk_artista` int(11) NOT NULL,
  `id_canzone` int(11) NOT NULL AUTO_INCREMENT,
  `nome_canzone` varchar(30) NOT NULL,
  `song_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_canzone`),
  KEY `fk_album` (`fk_album`),
  KEY `fk_artista` (`fk_artista`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `canzoni`
--

INSERT INTO `canzoni` (`fk_album`, `fk_artista`, `id_canzone`, `nome_canzone`, `song_path`) VALUES
(1, 2, 2, 'Il Mondo Prima Di Te', 'http://localhost:8080/MusicStore/songs/Annalisa-Il-Mondo-Prima-Di-Te.mp3');

-- --------------------------------------------------------

--
-- Struttura della tabella `carte_ordini`
--

DROP TABLE IF EXISTS `carte_ordini`;
CREATE TABLE IF NOT EXISTS `carte_ordini` (
  `ordine` int(11) NOT NULL,
  `numero_carta` varchar(100) DEFAULT NULL,
  `data_scadenza` date DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cognome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ordine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `genere`
--

DROP TABLE IF EXISTS `genere`;
CREATE TABLE IF NOT EXISTS `genere` (
  `genere` varchar(30) NOT NULL,
  `id_genere` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_genere`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `genere`
--

INSERT INTO `genere` (`genere`, `id_genere`) VALUES
('Pop', 1),
('Commerciale', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `gruppi`
--

DROP TABLE IF EXISTS `gruppi`;
CREATE TABLE IF NOT EXISTS `gruppi` (
  `nome_gruppo` varchar(30) NOT NULL,
  PRIMARY KEY (`nome_gruppo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `gruppi`
--

INSERT INTO `gruppi` (`nome_gruppo`) VALUES
('Admin'),
('Clienti'),
('Moderatori_Base');

-- --------------------------------------------------------

--
-- Struttura della tabella `indirizzi_utenti`
--

DROP TABLE IF EXISTS `indirizzi_utenti`;
CREATE TABLE IF NOT EXISTS `indirizzi_utenti` (
  `id_indirizzo` int(11) NOT NULL AUTO_INCREMENT,
  `utente` varchar(20) NOT NULL,
  `metodo_pagamento` varchar(100) DEFAULT NULL,
  `tipo_spedizione` varchar(100) DEFAULT NULL,
  `paese` varchar(100) DEFAULT NULL,
  `indirizzo` varchar(100) DEFAULT NULL,
  `citta` varchar(100) DEFAULT NULL,
  `provincia` varchar(10) DEFAULT NULL,
  `cap` varchar(10) DEFAULT NULL,
  `recapito` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_indirizzo`,`utente`),
  KEY `utente` (`utente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `offerte_speciali`
--

DROP TABLE IF EXISTS `offerte_speciali`;
CREATE TABLE IF NOT EXISTS `offerte_speciali` (
  `album` int(11) NOT NULL,
  `prezzo_offerta` float DEFAULT NULL,
  PRIMARY KEY (`album`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `offerte_speciali`
--

INSERT INTO `offerte_speciali` (`album`, `prezzo_offerta`) VALUES
(1, 14.99);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

DROP TABLE IF EXISTS `ordini`;
CREATE TABLE IF NOT EXISTS `ordini` (
  `id_ordine` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(20) DEFAULT NULL,
  `album` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `indirizzo_ordine` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ordine`),
  KEY `fk_cliente` (`cliente`),
  KEY `fk_indirizzo_ordine` (`indirizzo_ordine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `permessi`
--

DROP TABLE IF EXISTS `permessi`;
CREATE TABLE IF NOT EXISTS `permessi` (
  `servizio` varchar(70) NOT NULL,
  `gruppo` varchar(30) NOT NULL,
  PRIMARY KEY (`servizio`,`gruppo`),
  KEY `gruppo` (`gruppo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `permessi`
--

INSERT INTO `permessi` (`servizio`, `gruppo`) VALUES
('mod_content_management.php', 'Admin'),
('mod_insert_new_album.php', 'Admin'),
('mod_insert_new_artist.php', 'Admin'),
('mod_insert_new_song.php', 'Admin'),
('mod_logout.php', 'Admin'),
('mod_orders_panel.php', 'Admin'),
('mod_panel.php', 'Admin'),
('mod_update_order_status.php', 'Admin'),
('change_info.php', 'Clienti'),
('logout.php', 'Clienti'),
('mod_content_management.php', 'Moderatori_Base'),
('mod_insert_new_album.php', 'Moderatori_Base'),
('mod_insert_new_artist.php', 'Moderatori_Base'),
('mod_insert_new_song.php', 'Moderatori_Base'),
('mod_logout.php', 'Moderatori_Base'),
('mod_panel.php', 'Moderatori_Base');

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi`
--

DROP TABLE IF EXISTS `servizi`;
CREATE TABLE IF NOT EXISTS `servizi` (
  `nome_servizio` varchar(70) NOT NULL,
  PRIMARY KEY (`nome_servizio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `servizi`
--

INSERT INTO `servizi` (`nome_servizio`) VALUES
('account.php'),
('add_to_cart.php'),
('cart.php'),
('change_info.php'),
('contacts.php'),
('delcart.php'),
('index.php'),
('login.php'),
('logout.php'),
('mod_content_management.php'),
('mod_insert_new_album.php'),
('mod_insert_new_artist.php'),
('mod_insert_new_song.php'),
('mod_login.php'),
('mod_logout.php'),
('mod_orders_panel.php'),
('mod_panel.php'),
('mod_signup.php'),
('mod_update_order_status.php'),
('recent_albums.php'),
('search.php'),
('signup.php'),
('special_offers.php');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_artista` FOREIGN KEY (`fk_artista`) REFERENCES `artisti` (`id_artista`) ON DELETE CASCADE;

--
-- Limiti per la tabella `anagrafica_clienti`
--
ALTER TABLE `anagrafica_clienti`
  ADD CONSTRAINT `fk_utente` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE CASCADE;

--
-- Limiti per la tabella `artisti`
--
ALTER TABLE `artisti`
  ADD CONSTRAINT `fk_genere` FOREIGN KEY (`genere`) REFERENCES `genere` (`id_genere`) ON DELETE SET NULL;

--
-- Limiti per la tabella `canzoni`
--
ALTER TABLE `canzoni`
  ADD CONSTRAINT `canzoni_ibfk_1` FOREIGN KEY (`fk_artista`) REFERENCES `artisti` (`id_artista`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_album` FOREIGN KEY (`fk_album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE;

--
-- Limiti per la tabella `carte_ordini`
--
ALTER TABLE `carte_ordini`
  ADD CONSTRAINT `carte_ordini_ibfk_1` FOREIGN KEY (`ordine`) REFERENCES `ordini` (`id_ordine`) ON DELETE CASCADE;

--
-- Limiti per la tabella `indirizzi_utenti`
--
ALTER TABLE `indirizzi_utenti`
  ADD CONSTRAINT `indirizzi_utenti_ibfk_1` FOREIGN KEY (`utente`) REFERENCES `anagrafica_clienti` (`username`) ON DELETE CASCADE;

--
-- Limiti per la tabella `offerte_speciali`
--
ALTER TABLE `offerte_speciali`
  ADD CONSTRAINT `offerte_speciali_ibfk_1` FOREIGN KEY (`album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE;

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `fk_indirizzo_ordine` FOREIGN KEY (`indirizzo_ordine`) REFERENCES `indirizzi_utenti` (`id_indirizzo`) ON DELETE SET NULL;

--
-- Limiti per la tabella `permessi`
--
ALTER TABLE `permessi`
  ADD CONSTRAINT `permessi_ibfk_1` FOREIGN KEY (`servizio`) REFERENCES `servizi` (`nome_servizio`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

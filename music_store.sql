-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Set 09, 2018 alle 09:59
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
('Bye Bye', 1, 2, 'Sesto album in studio della cantante Annalisa pubblicato il 16 Febbraio 2018 dalla Warner Music Company', 20, 1, NULL, NULL, NULL, NULL, 5, '../images/bye_bye_album_cover.jpg', NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `album_preferiti`
--

INSERT INTO `album_preferiti` (`album`, `utente`) VALUES
(1, 'leonardo96');

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
  `inizio_attivita` date DEFAULT NULL,
  `fine_attivita` date DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_artista`),
  KEY `genere` (`genere`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `artisti`
--

INSERT INTO `artisti` (`nome_artista`, `id_artista`, `biografia`, `genere`, `album_pubblicati`, `inizio_attivita`, `fine_attivita`, `img_path`) VALUES
('Dua Lipa', 1, NULL, NULL, NULL, NULL, NULL, NULL),
('Annalisa', 2, NULL, 2, NULL, NULL, NULL, NULL),
('Adriano Celentano', 3, NULL, NULL, NULL, NULL, NULL, NULL),
('Black Eyed Peas', 4, NULL, NULL, NULL, NULL, NULL, NULL),
('Shakira', 5, NULL, NULL, NULL, NULL, NULL, NULL),
('Mika', 6, NULL, NULL, NULL, NULL, NULL, NULL),
('Lorenzo Baglioni', 7, NULL, NULL, NULL, NULL, NULL, NULL),
('Lo Stato Sociale', 8, NULL, NULL, NULL, NULL, NULL, NULL),
('Ed Sheeran', 9, NULL, NULL, NULL, NULL, NULL, NULL),
('Francesca Michielin', 10, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `canzoni`
--

DROP TABLE IF EXISTS `canzoni`;
CREATE TABLE IF NOT EXISTS `canzoni` (
  `fk_genere` int(11) NOT NULL,
  `fk_album` int(11) NOT NULL,
  `fk_artista` int(11) NOT NULL,
  `descrizione` varchar(200) NOT NULL,
  `id_canzone` int(11) NOT NULL AUTO_INCREMENT,
  `nome_canzone` varchar(30) NOT NULL,
  `pubblicazione` date DEFAULT NULL,
  `durata` int(11) DEFAULT NULL,
  `song_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_canzone`),
  KEY `fk_album` (`fk_album`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `canzoni`
--

INSERT INTO `canzoni` (`fk_genere`, `fk_album`, `fk_artista`, `descrizione`, `id_canzone`, `nome_canzone`, `pubblicazione`, `durata`, `song_path`) VALUES
(1, 1, 1, 'Brano della cantante italiana Annalisa, secondo estratto dal sesto album Bye Bye e pubblicato il 6 Febbraio 2018.', 1, 'Il Mondo Prima di Te', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

DROP TABLE IF EXISTS `carrello`;
CREATE TABLE IF NOT EXISTS `carrello` (
  `id_carrello` int(11) NOT NULL,
  PRIMARY KEY (`id_carrello`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Struttura della tabella `lista_desideri`
--

DROP TABLE IF EXISTS `lista_desideri`;
CREATE TABLE IF NOT EXISTS `lista_desideri` (
  `utente` varchar(20) NOT NULL,
  `album` int(11) NOT NULL,
  PRIMARY KEY (`utente`,`album`),
  KEY `fk_album` (`album`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `moderatori`
--

DROP TABLE IF EXISTS `moderatori`;
CREATE TABLE IF NOT EXISTS `moderatori` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `offerte_speciali`
--

DROP TABLE IF EXISTS `offerte_speciali`;
CREATE TABLE IF NOT EXISTS `offerte_speciali` (
  `album` int(11) NOT NULL,
  `prezzo_offerta` float DEFAULT NULL,
  PRIMARY KEY (`album`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `metodo_pagamento` varchar(100) DEFAULT NULL,
  `tipo_spedizione` varchar(100) DEFAULT NULL,
  `paese` varchar(100) DEFAULT NULL,
  `indirizzo` varchar(100) DEFAULT NULL,
  `citta` varchar(100) DEFAULT NULL,
  `provincia` varchar(100) DEFAULT NULL,
  `cap` varchar(10) DEFAULT NULL,
  `recapito` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_ordine`)
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `permessi`
--

INSERT INTO `permessi` (`servizio`, `gruppo`) VALUES
('change_info.php', 'Clienti'),
('logout.php', 'Clienti'),
('mod_content_management.php', 'Admin'),
('mod_content_management.php', 'Moderatori_Base'),
('mod_insert_new_album.php', 'Admin'),
('mod_insert_new_album.php', 'Moderatori_Base'),
('mod_insert_new_artist.php', 'Admin'),
('mod_insert_new_artist.php', 'Moderatori_Base'),
('mod_insert_new_song.php', 'Admin'),
('mod_insert_new_song.php', 'Moderatori_Base'),
('mod_panel.php', 'Admin'),
('mod_panel.php', 'Moderatori_Base'),
('orders_panel.php', 'Admin'),
('update_order_status.php', 'Admin');

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi`
--

DROP TABLE IF EXISTS `servizi`;
CREATE TABLE IF NOT EXISTS `servizi` (
  `nome_servizio` varchar(70) NOT NULL,
  PRIMARY KEY (`nome_servizio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('mod_panel.php'),
('mod_signup.php'),
('recent_albums.php'),
('search.php'),
('signup.php'),
('special_offers.php');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

DROP TABLE IF EXISTS `utenti`;
CREATE TABLE IF NOT EXISTS `utenti` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `gruppo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`username`, `password`, `email`, `nome`, `cognome`, `gruppo`) VALUES
('leonardo96', '7150404d07e506d07bf13d1aade209bf', 'rosso_x96@hotmail.it', 'Leonardo', 'Formichetti', 'Clienti');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_artista` FOREIGN KEY (`fk_artista`) REFERENCES `artisti` (`id_artista`) ON DELETE CASCADE;

--
-- Limiti per la tabella `artisti`
--
ALTER TABLE `artisti`
  ADD CONSTRAINT `artisti_ibfk_1` FOREIGN KEY (`genere`) REFERENCES `genere` (`id_genere`);

--
-- Limiti per la tabella `canzoni`
--
ALTER TABLE `canzoni`
  ADD CONSTRAINT `fk_album` FOREIGN KEY (`fk_album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

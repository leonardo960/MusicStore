-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Set 12, 2018 alle 18:00
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
  PRIMARY KEY (`username`),
  KEY `gruppo` (`gruppo`)
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
  KEY `fk_artista` (`fk_artista`),
  KEY `fk_genere` (`fk_genere`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `album`
--

INSERT INTO `album` (`nome_album`, `fk_genere`, `fk_artista`, `descrizione`, `prezzo`, `id_album`, `pubblicazione`, `dischi`, `tracce`, `etichetta`, `stock`, `img_path`, `data_inserimento`) VALUES
('Bye Bye', 1, 2, 'Sixth studio album from singer Annalisa. The publishing was anticipated by the release of two singles: \"Direzione La Vita\", which made up for an all-women music video, and \"Il Mondo Prima di Te\", which placed third in Italian national singing competition Sanremo.', 20, 1, '2018-02-16', 1, 13, 'Warner Music Italy', 5, '../images/album/1.jpg', NULL),
('Magellano', 1, 6, 'Third studio album by italian singer Francesco Gabbani.', 12, 2, '2017-04-28', 1, 9, 'BMG Rights Management', 3, '../images/album/2.jpg', '2018-09-11'),
('Crazy Love', 3, 7, 'Crazy Love is the sixth studio album (and fourth major label studio album) by Canadian vocalist Michael BublÃ©. It was released by 143 Records and Reprise Records on October 9, 2009', 20, 3, '2009-10-16', 1, 12, 'Reprise Records (Warner Music)', 1, '../images/album/3.jpg', '2018-09-11'),
('Evolve', 6, 9, 'Evolve (stylized as ÆŽVOLVE) is the third studio album by American rock band Imagine Dragons, released on June 23, 2017 through Kidinakorner and Interscope Records. The album is the band new material follow-up to their second studio album, Smoke + Mirrors.', 25, 4, '2017-06-23', 1, 11, 'Interscope Records', 6, '../images/album/4.jpg', '2018-09-11'),
('Blood Stained Love Story', 7, 10, 'Blood Stained Love Story is the fifth studio album by American rock band Saliva which was released on January 23, 2007. This is their first album with guitarist Jonathan Montoya after the departure of Chris Dâ€™Abaldo.', 22, 5, '2007-01-23', 1, 10, 'Island Records', 2, '../images/album/5.jpg', '2018-09-11');

-- --------------------------------------------------------

--
-- Struttura della tabella `album_preferiti`
--

DROP TABLE IF EXISTS `album_preferiti`;
CREATE TABLE IF NOT EXISTS `album_preferiti` (
  `album` int(11) NOT NULL,
  `utente` varchar(20) NOT NULL,
  PRIMARY KEY (`album`,`utente`),
  KEY `utente` (`utente`)
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `artisti`
--

INSERT INTO `artisti` (`nome_artista`, `id_artista`, `biografia`, `genere`, `album_pubblicati`, `inizio_attivita`, `fine_attivita`, `img_path`) VALUES
('Annalisa', 2, 'I consider my phisics degree a reason to be proud of myself.', 2, 6, 2004, NULL, '../images/artists/2.jpg'),
('Francesco Gabbani', 6, 'Two times winner of the national italian singing contest Sanremo.', 1, 4, 2000, NULL, '../images/artists/6.jpg'),
('Micheal BublÃ©', 7, 'Michael Steven BublÃ© (born 9 September 1975) is a Canadian-Italian singer, songwriter, actor and record producer. He has won several awards, including four Grammy Awards and multiple Juno Awards.', 3, 16, 1996, NULL, '../images/artists/7.jpg'),
('Madonna', 8, 'Madonna Louise Ciccone (born August 16, 1958) is an American singer, songwriter, actress, and businesswoman. Referred to as the &quot;Queen of Pop&quot; since the 1980s, Madonna is known for pushing the boundaries of songwriting in mainstream popular music, as well as imagery in music videos and on stage. She has also frequently reinvented both her music and image while maintaining autonomy within the recording industry. Besides sparking controversy, her works have been praised by music critics. Madonna is often cited as an influence by other artists.', 1, 29, 1979, NULL, '../images/artists/8.jpg'),
('Imagine Dragons', 9, 'Imagine Dragons is an American pop rock band from Las Vegas, Nevada, consisting of lead vocalist Dan Reynolds, lead guitarist Wayne Sermon, bassist Ben McKee, and drummer Daniel Platzman.', 1, 5, 2008, NULL, '../images/artists/9.jpg'),
('Saliva', 10, 'Saliva is an American rock band formed in Memphis, Tennessee in 1996. Saliva released their self-titled debut album on August 26, 1997, through Rockingchair Records, a record label owned and operated by Mark Yoshida, who recorded and produced the release at his studio, Rockingchair Studios.', 7, 11, 1996, NULL, '../images/artists/10.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `canzoni`
--

INSERT INTO `canzoni` (`fk_album`, `fk_artista`, `id_canzone`, `nome_canzone`, `song_path`) VALUES
(1, 2, 2, 'Il Mondo Prima Di Te', '../songs/2.mp3'),
(2, 6, 4, 'Pachidermi e Pappagalli', '../songs/4.mp3'),
(4, 9, 5, 'Next To Me', '../songs/5.mp3'),
(5, 10, 6, 'Ladies And Gentlemen', '../songs/6.mp3'),
(3, 7, 7, 'Havent Met You Yet', '../songs/7.mp3');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `genere`
--

INSERT INTO `genere` (`genere`, `id_genere`) VALUES
('Pop', 1),
('Commerciale', 2),
('Swing', 3),
('Jazz', 4),
('Soul', 5),
('Indie', 6),
('Rock', 7);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 14.5),
(2, 11.99),
(4, 19.99);

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
('mod_delete_album.php', 'Admin'),
('mod_delete_artist.php', 'Admin'),
('mod_delete_song.php', 'Admin'),
('mod_insert_new_album.php', 'Admin'),
('mod_insert_new_artist.php', 'Admin'),
('mod_insert_new_song.php', 'Admin'),
('mod_logout.php', 'Admin'),
('mod_modify_album.php', 'Admin'),
('mod_modify_artist.php', 'Admin'),
('mod_modify_delete.php', 'Admin'),
('mod_modify_song.php', 'Admin'),
('mod_orders_panel.php', 'Admin'),
('mod_panel.php', 'Admin'),
('mod_special_offers_panel.php', 'Admin'),
('mod_update_order_status.php', 'Admin'),
('cart_cashout.php', 'Clienti'),
('change_info.php', 'Clienti'),
('logout.php', 'Clienti'),
('mod_content_management.php', 'Moderatori_Base'),
('mod_delete_album.php', 'Moderatori_Base'),
('mod_delete_artist.php', 'Moderatori_Base'),
('mod_delete_song.php', 'Moderatori_Base'),
('mod_insert_new_album.php', 'Moderatori_Base'),
('mod_insert_new_artist.php', 'Moderatori_Base'),
('mod_insert_new_song.php', 'Moderatori_Base'),
('mod_logout.php', 'Moderatori_Base'),
('mod_modify_album.php', 'Moderatori_Base'),
('mod_modify_artist.php', 'Moderatori_Base'),
('mod_modify_delete.php', 'Moderatori_Base'),
('mod_modify_song.php', 'Moderatori_Base'),
('mod_panel.php', 'Moderatori_Base'),
('mod_special_offers_panel.php', 'Moderatori_Base');

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
('cart_cashout.php'),
('change_info.php'),
('contacts.php'),
('delcart.php'),
('index.php'),
('login.php'),
('logout.php'),
('mod_content_management.php'),
('mod_delete_album.php'),
('mod_delete_artist.php'),
('mod_delete_song.php'),
('mod_insert_new_album.php'),
('mod_insert_new_artist.php'),
('mod_insert_new_song.php'),
('mod_login.php'),
('mod_logout.php'),
('mod_modify_album.php'),
('mod_modify_artist.php'),
('mod_modify_delete.php'),
('mod_modify_song.php'),
('mod_orders_panel.php'),
('mod_panel.php'),
('mod_signup.php'),
('mod_special_offers_panel.php'),
('mod_update_order_status.php'),
('recent_albums.php'),
('search.php'),
('signup.php'),
('special_offers.php');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`gruppo`) REFERENCES `gruppi` (`nome_gruppo`);

--
-- Limiti per la tabella `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`fk_genere`) REFERENCES `genere` (`id_genere`),
  ADD CONSTRAINT `fk_artista` FOREIGN KEY (`fk_artista`) REFERENCES `artisti` (`id_artista`) ON DELETE CASCADE;

--
-- Limiti per la tabella `album_preferiti`
--
ALTER TABLE `album_preferiti`
  ADD CONSTRAINT `album_preferiti_ibfk_1` FOREIGN KEY (`album`) REFERENCES `album` (`id_album`) ON DELETE CASCADE,
  ADD CONSTRAINT `album_preferiti_ibfk_2` FOREIGN KEY (`utente`) REFERENCES `account` (`username`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `permessi_ibfk_1` FOREIGN KEY (`servizio`) REFERENCES `servizi` (`nome_servizio`) ON DELETE CASCADE,
  ADD CONSTRAINT `permessi_ibfk_2` FOREIGN KEY (`gruppo`) REFERENCES `gruppi` (`nome_gruppo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

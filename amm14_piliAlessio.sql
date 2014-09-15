-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Set 15, 2014 alle 11:48
-- Versione del server: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amm14_pilialessio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `canzone`
--

CREATE TABLE IF NOT EXISTS `canzone` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `artista` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dump dei dati per la tabella `canzone`
--

INSERT INTO `canzone` (`id`, `titolo`, `artista`) VALUES
(1, 'Problem', 'Ariana grande'),
(2, 'Love is gone', 'David Guetta'),
(3, 'Paradise', 'Coldplay'),
(4, 'Tre minuti', 'Negramaro'),
(5, 'House party', 'PIP'),
(6, 'Feel the love', 'Klaas'),
(7, 'I m yours', 'Jason Mraz');

-- --------------------------------------------------------

--
-- Struttura della tabella `libreria`
--

CREATE TABLE IF NOT EXISTS `libreria` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `prezzo` float NOT NULL,
  `quantita` float NOT NULL,
  `id_canzone` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_canzone` (`id_canzone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dump dei dati per la tabella `libreria`
--

INSERT INTO `libreria` (`id`, `prezzo`, `quantita`, `id_canzone`) VALUES
(1, 12, 3, 3),
(2, 4, 5, 1),
(3, 8, 10, 2),
(4, 10, 4, 5),
(5, 14, 6, 6),
(6, 3, 7, 4),
(7, 20, 2, 7);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `cognome` varchar(32) NOT NULL,
  `ruolo` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `username`, `password`, `nome`, `cognome`, `ruolo`) VALUES
(1, 'alessio', 'alessio', 'Alessio Admin', 'Pili', '0'),
(2, 'utente', 'utente', 'Alessio User', 'Pili', '1');
ALTER TABLE `libreria`
  ADD CONSTRAINT `libreria_ibfk_1` FOREIGN KEY (`id_canzone`) REFERENCES `libreria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

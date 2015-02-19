-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2015 alle 13:44
-- Versione del server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `musicexpress`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `canzone`
--
CREATE DATABASE IF NOT EXISTS `amm14_piliAlessio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `amm14_piliAlessio`
CREATE TABLE IF NOT EXISTS `canzone` (
`Codice` int(11) NOT NULL,
  `Titolo` varchar(255) NOT NULL,
  `Artista` varchar(255) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Anno` varchar(255) NOT NULL,
  `Prezzo` float NOT NULL,
  `Eliminata` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `canzone`
--

INSERT INTO `canzone` (`Codice`, `Titolo`, `Artista`, `Album`, `Anno`, `Prezzo`, `Eliminata`) VALUES
(3, 'What the hell', 'Avril Lavigne', 'Goodbye lullaby', '2011', 0.82, 0),
(4, 'Crazy', 'Simple Plan', 'Still Not Getting Any', '2004', 0.61, 0),
(5, 'Me Against The World', 'Simple Plan', 'Still Not Getting Any', '2004', 0.64, 0),
(6, 'Black star', 'Avril Lavigne', 'Goodbye lullaby', '2011', 0.86, 0),
(7, 'Smile', 'Avril Lavigne', 'Goodbye lullaby', '2011', 0.55, 0),
(8, 'Love you ', 'Avril Lavigne ', 'Goodbye Lullaby', '2011', 0.68, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

CREATE TABLE IF NOT EXISTS `ordine` (
`Codice` int(11) NOT NULL,
  `Codice_Utente` int(11) NOT NULL,
  `Codice_Canzone` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Pagata` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ordine`
--

INSERT INTO `ordine` (`Codice`, `Codice_Utente`, `Codice_Canzone`, `Data`, `Pagata`) VALUES
(1, 1, 4, '2015-02-19', 1),
(2, 1, 6, '2015-02-18', 0),
(3, 1, 5, '2015-02-19', 0),
(4, 1, 8, '2015-02-19', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
`Codice` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Livello` int(11) NOT NULL,
  `Indirizzo` varchar(255) NOT NULL,
  `Cellulare` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`Codice`, `User`, `Email`, `Password`, `Livello`, `Indirizzo`, `Cellulare`) VALUES
(1, 'user', 'user@prova.it', 'user', 1, 'Via stazione 44 Sassari', '345221754'),
(2, 'admin', 'admin@prova.it', 'admin', 2, 'Via principale 3 Olbia', '3498978754');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canzone`
--
ALTER TABLE `canzone`
 ADD PRIMARY KEY (`Codice`);

--
-- Indexes for table `ordine`
--
ALTER TABLE `ordine`
 ADD PRIMARY KEY (`Codice`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
 ADD PRIMARY KEY (`Codice`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canzone`
--
ALTER TABLE `canzone`
MODIFY `Codice` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ordine`
--
ALTER TABLE `ordine`
MODIFY `Codice` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `utente`
--
ALTER TABLE `utente`
MODIFY `Codice` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

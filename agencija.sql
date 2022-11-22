-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2021 at 12:17 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencija`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email_address`, `message`) VALUES
('Meho', 'email.ba@gmail.com', 'Neka niko nista ne zna'),
('', '', ''),
('Mislilac', 'mislilac@gmail.com', 'Ovo je mislilac teski hahah'),
('Mislilac', 'mislilac@gmail.com', 'Ovo je mislilac teski hahah'),
('Mislilac', 'mislilac@gmail.com', 'Ovo je mislilac teski hahah'),
('Mislilac', 'mislilac@gmail.com', 'Ovo sam ja ili neko drugi'),
('Mislilac', 'mislilac@gmail.com', 'Ovo sam ja ili neko drugi'),
('Mislilac', 'mislilac@gmail.com', 'Ovo sam ja ili neko drugi'),
('Mislilac', 'mislilac@gmail.com', 'Ovo sam ja ili neko drugi'),
('Mislilac', 'mislilac@gmail.com', 'Moja poruka'),
('Meho Kodro', 'meho@mail.ba', 'Ja sam meho kodro'),
('Mislilac', 'mislilac@gmail.com', 'Poruka velikog mislioca');

-- --------------------------------------------------------

--
-- Table structure for table `gradovi`
--

DROP TABLE IF EXISTS `gradovi`;
CREATE TABLE IF NOT EXISTS `gradovi` (
  `id_grada` int(4) NOT NULL,
  `naziv` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_grada`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gradovi`
--

INSERT INTO `gradovi` (`id_grada`, `naziv`) VALUES
(1, 'Visoko'),
(2, 'Sarajevo'),
(3, 'Neum');

-- --------------------------------------------------------

--
-- Table structure for table `hoteli`
--

DROP TABLE IF EXISTS `hoteli`;
CREATE TABLE IF NOT EXISTS `hoteli` (
  `id_hotela` int(4) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(40) DEFAULT NULL,
  `id_grada` int(5) NOT NULL,
  PRIMARY KEY (`id_hotela`),
  KEY `id_grada` (`id_grada`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoteli`
--

INSERT INTO `hoteli` (`id_hotela`, `naziv`, `id_grada`) VALUES
(1, 'Grand Hotel Neum', 3),
(2, 'Hotel Sunce', 3),
(3, 'Hotel Centar', 1),
(4, 'Hotel Bella', 1),
(5, 'Hotel Grand Sarajevo', 2),
(6, 'Hotel Hayat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `klijent`
--

DROP TABLE IF EXISTS `klijent`;
CREATE TABLE IF NOT EXISTS `klijent` (
  `ID_klijent` int(5) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_klijent`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klijent`
--

INSERT INTO `klijent` (`ID_klijent`, `ime`, `email`) VALUES
(1, 'Nina Badric', 'nina@gmail.com'),
(2, 'Nasrudin Hodza', 'hodza@gmail.com'),
(3, 'Neki', 'neki@neki.com'),
(4, 'Neki', 'neki@neki.com'),
(5, 'Nina zvekalo', 'nin@mail.ba'),
(6, 'Nina Badric', 'ninanebu@hotmail.com'),
(7, 'Nina Badric', 'ninanebu@hotmail.com'),
(8, 'Edina Zigonja', 'edina@gmail.com'),
(9, 'Edin Tabak', 'edo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('edina', 'edina123');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

DROP TABLE IF EXISTS `rezervacija`;
CREATE TABLE IF NOT EXISTS `rezervacija` (
  `id_rezervacija` int(5) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `grad` int(5) NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `datum_prijave` date NOT NULL,
  `datum_odjave` date NOT NULL,
  `odrasli` int(4) NOT NULL,
  `djeca` int(4) NOT NULL,
  `sobe` int(3) NOT NULL,
  `poruka` varchar(1000) DEFAULT NULL,
  `telefon` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_rezervacija`),
  KEY `grad` (`grad`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id_rezervacija`, `ime`, `email`, `grad`, `hotel`, `datum_prijave`, `datum_odjave`, `odrasli`, `djeca`, `sobe`, `poruka`, `telefon`) VALUES
(3, 'Meho kodro', 'meho@mail.ba', 1, '1', '2021-05-20', '2021-05-27', 2, 1, 1, 'Nista vala', '123-456-789'),
(13, 'Edina Zigonja', 'edinaa@gmail.com', 2, '1', '2021-06-02', '2021-06-23', 2, 2, 1, 'Zelim dobre peskire', '123225789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 08:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sminke`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `ID` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(129) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ID`, `username`, `password`) VALUES
(1, 'Nina', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2');

-- --------------------------------------------------------

--
-- Table structure for table `sminke`
--

CREATE TABLE `sminke` (
  `ID` int(11) NOT NULL,
  `Naziv` varchar(100) NOT NULL,
  `Brend` varchar(100) NOT NULL,
  `Cijena` float NOT NULL,
  `Opis` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(256) NOT NULL DEFAULT '/images/no-image.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sminke`
--

INSERT INTO `sminke` (`ID`, `Naziv`, `Brend`, `Cijena`, `Opis`, `image`) VALUES
(11, 'Effaclar DUO', 'La Roche-Posay', 95, 'Korektivna obnavljajuća antirecidivna njega protiv nesavršenosti lica i akni', 'uploads/la-roche-posay-effaclar-duo-korektivna-obnavljajuca-antirecidivna-njega-protiv-nesavrsenosti-lica-i-akni___5.jpg'),
(12, 'Today Tomorrow Always Today', 'Avon', 62, 'parfemska voda za žene', './uploads/avon-today-tomorrow-always-today-parfemska-voda-za-zene___34.jpg'),
(13, 'Mascara Volume Effet Faux Cils', 'Yves Saint Laurent', 222, 'Nijansa 1 Noir Haute Densité / High Density Black 7,5 ml', './uploads/yves-saint-laurent-mascara-volume-effet-faux-cils-maskara-za-volumen___7.jpg'),
(14, 'Dermablend', 'Vichy', 155, 'korektivni puder s UV faktorom', './uploads/vichy-dermablend-korektivni-puder-s-uv-faktorom___23.jpg'),
(15, 'Anti-Blemish Solutions™ Liquid Makeup', 'Clinique', 211, 'nijansa 01 Fresh Alabaster 30 ml', './uploads/clinique-anti-blemish-solutions-liquid-makeup-tekuci-puder-za-problematicno-lice-akne___27.jpg'),
(16, 'Reloaded', 'Makeup Revolution', 44, 'paleta sjenila za oči', './uploads/makeup-revolution-reloaded-paleta-sjenila-za-oci___5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sminke`
--
ALTER TABLE `sminke`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sminke`
--
ALTER TABLE `sminke`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

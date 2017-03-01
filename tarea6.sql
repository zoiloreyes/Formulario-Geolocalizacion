-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2017 at 11:47 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarea6`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Comentario` text NOT NULL,
  `Latitud` varchar(20) NOT NULL,
  `Longitud` varchar(20) NOT NULL,
  `Ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ID`, `Cedula`, `Nombre`, `Email`, `Telefono`, `Comentario`, `Latitud`, `Longitud`, `Ip`) VALUES
(48, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '19.5261268', '-69.8835651', '::1'),
(49, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(50, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(51, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(52, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(53, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(54, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(55, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(56, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(57, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(58, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(59, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-69.8835651', '::1'),
(60, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '17.5261268', '-67.8835651', '::1'),
(61, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-67.8835651', '::1'),
(62, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '17.5261268', '-69.8835651', '::1'),
(63, '40214353704', 'Zoilo', 'elcomelon@gmail.com', '80930213', 'Esto mola', '18.5261268', '-68.8835651', '::1'),
(64, '40294385392', 'John', 'johnsapiens@gmail.com', '943023040', 'This gud', '18.5261268', '-69.8835651', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

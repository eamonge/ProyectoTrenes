-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2020 at 04:20 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `estaciones`
--

DROP TABLE IF EXISTS `estaciones`;
CREATE TABLE IF NOT EXISTS `estaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEstacion` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `PaisEstacion` varchar(60) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `estaciones`
--

INSERT INTO `estaciones` (`id`, `NombreEstacion`, `PaisEstacion`) VALUES
(1, 'San José', 'Costa Rica'),
(2, 'Panama City', 'Panamá'),
(3, 'Managua', 'Nicaragua'),
(4, 'Tegucigalpa', 'Honduras'),
(5, 'San Salvador', 'El Salvador'),
(6, 'Guatemala', 'Guatemala'),
(7, 'Belmopan', 'Belize'),
(8, 'México', 'México'),
(9, 'Washington DC', 'Estados Unidos'),
(10, 'Ottawa', 'Canada'),
(11, 'Rejkjavik', 'Iceland***'),
(12, 'Dublin', 'Irlanda'),
(13, 'Londres', 'Reino Unido'),
(14, 'Madrid', 'España'),
(15, 'París', 'Francia'),
(16, 'Berlín', 'Alemania'),
(17, 'Roma', 'Italia'),
(18, 'Budapest***', 'Hungría'),
(19, 'Warsaw', 'Polonia'),
(20, 'Minsk', 'Belorusia'),
(21, 'Kyiv', 'Ukrania'),
(22, 'Sofia', 'Bulgaria'),
(23, 'Ankara', 'Turquía'),
(24, 'Moscú', 'Rusia'),
(25, 'Tehran', 'Irán'),
(26, 'Cairo', 'Egipto'),
(27, 'Tripoli', 'Libya'),
(28, 'NDjamena', 'Chad'),
(29, 'Addis Ababa', 'Etiopía'),
(30, 'Dooma', 'Tanzania'),
(31, 'Gaborone', 'Botswana'),
(32, 'Maseru', 'Suráfrica'),
(33, 'Kuala Lumpur', 'Malasia'),
(34, 'Singapore', 'Indonesia'),
(35, 'Canberra', 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `horarioestaciones`
--

DROP TABLE IF EXISTS `horarioestaciones`;
CREATE TABLE IF NOT EXISTS `horarioestaciones` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdEstacion` int(11) NOT NULL,
  `HoraLlegada` time NOT NULL,
  `HoraSalida` time NOT NULL,
  UNIQUE KEY `Id` (`Id`),
  KEY `IdEstacion` (`IdEstacion`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `horarioestaciones`
--

INSERT INTO `horarioestaciones` (`Id`, `IdEstacion`, `HoraLlegada`, `HoraSalida`) VALUES
(1, 1, '11:07:00', '11:10:00'),
(2, 2, '11:08:00', '11:09:00'),
(3, 3, '11:08:00', '11:08:00'),
(4, 4, '11:08:00', '11:08:00'),
(5, 5, '11:08:00', '11:08:00'),
(6, 6, '11:08:00', '11:08:00'),
(7, 7, '11:08:00', '11:08:00'),
(8, 8, '11:08:00', '11:08:00'),
(9, 9, '11:08:00', '11:08:00'),
(10, 10, '11:08:00', '11:08:00'),
(11, 11, '11:08:00', '11:08:00'),
(12, 12, '11:08:00', '11:08:00'),
(13, 13, '11:08:00', '11:08:00'),
(14, 14, '11:08:00', '11:08:00'),
(15, 15, '11:08:00', '11:08:00'),
(16, 16, '11:08:00', '11:08:00'),
(17, 17, '11:08:00', '11:08:00'),
(18, 18, '11:08:00', '11:08:00'),
(19, 19, '11:08:00', '11:08:00'),
(20, 20, '11:08:00', '11:08:00'),
(21, 21, '11:08:00', '11:08:00'),
(22, 22, '11:08:00', '11:08:00'),
(23, 23, '11:08:00', '11:08:00'),
(24, 24, '11:08:00', '11:08:00'),
(25, 25, '11:08:00', '11:08:00'),
(26, 25, '11:08:00', '11:08:00'),
(27, 26, '11:08:00', '11:08:00'),
(28, 27, '11:08:00', '11:08:00'),
(29, 28, '11:08:00', '11:08:00'),
(30, 29, '11:08:00', '11:08:00'),
(31, 30, '11:08:00', '11:08:00'),
(32, 31, '11:08:00', '11:08:00'),
(33, 32, '11:08:00', '11:08:00'),
(34, 33, '11:08:00', '11:08:00'),
(35, 34, '11:08:00', '11:08:00'),
(36, 35, '11:08:00', '11:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idTren` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Horarioid` int(11) NOT NULL,
  UNIQUE KEY `Id` (`Id`),
  UNIQUE KEY `Horarioid` (`Horarioid`),
  KEY `idTren` (`idTren`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`Id`, `idTren`, `Fecha`, `Horarioid`) VALUES
(1, 1, '2020-02-25', 1),
(2, 2, '2020-02-26', 2),
(3, 3, '2020-02-26', 3),
(4, 4, '2020-02-26', 4),
(5, 5, '2020-02-26', 5),
(6, 6, '2020-02-26', 6),
(7, 7, '2020-02-26', 7),
(8, 8, '2020-02-26', 8),
(9, 9, '2020-02-26', 9),
(10, 10, '2020-02-26', 10),
(11, 11, '2020-02-26', 11),
(12, 12, '2020-02-26', 12),
(13, 13, '2020-02-26', 13),
(14, 14, '2020-02-26', 14),
(15, 15, '2020-02-26', 15),
(16, 16, '2020-02-26', 16),
(17, 17, '2020-02-26', 17),
(18, 18, '2020-02-26', 18),
(19, 19, '2020-02-26', 19),
(20, 20, '2020-02-26', 20),
(21, 21, '2020-02-26', 21),
(22, 22, '2020-02-26', 22),
(23, 23, '2020-02-26', 23),
(24, 24, '2020-02-26', 24),
(25, 25, '2020-02-26', 25),
(26, 26, '2020-02-26', 26),
(27, 27, '2020-02-26', 27),
(28, 28, '2020-02-26', 28),
(29, 29, '2020-02-26', 29),
(30, 30, '2020-02-26', 30),
(31, 31, '2020-02-26', 31),
(32, 32, '2020-02-26', 32),
(33, 33, '2020-02-26', 33),
(34, 34, '2020-02-26', 34),
(35, 35, '2020-02-26', 35);

-- --------------------------------------------------------

--
-- Table structure for table `horariosdias`
--

DROP TABLE IF EXISTS `horariosdias`;
CREATE TABLE IF NOT EXISTS `horariosdias` (
  `idHorario` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  KEY `idHorario` (`idHorario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `horariosdias`
--

INSERT INTO `horariosdias` (`idHorario`, `Fecha`) VALUES
(1, '2020-02-25'),
(2, '2020-02-26'),
(3, '2020-02-26'),
(4, '2020-02-26'),
(5, '2020-02-26'),
(6, '2020-02-26'),
(7, '2020-02-26'),
(8, '2020-02-26'),
(9, '2020-02-26'),
(10, '2020-02-26'),
(11, '2020-02-26'),
(12, '2020-02-26'),
(13, '2020-02-26'),
(14, '2020-02-26'),
(15, '2020-02-26'),
(16, '2020-02-26'),
(17, '2020-02-26'),
(18, '2020-02-26'),
(19, '2020-02-26'),
(20, '2020-02-26'),
(21, '2020-02-26'),
(22, '2020-02-26'),
(23, '2020-02-26'),
(24, '2020-02-26'),
(25, '2020-02-26'),
(26, '2020-02-26'),
(27, '2020-02-26'),
(28, '2020-02-26'),
(29, '2020-02-26'),
(30, '2020-02-26'),
(31, '2020-02-26'),
(32, '2020-02-26'),
(33, '2020-02-26'),
(34, '2020-02-26'),
(35, '2020-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `horariostestinsert`
--

DROP TABLE IF EXISTS `horariostestinsert`;
CREATE TABLE IF NOT EXISTS `horariostestinsert` (
  `idInsert` int(11) NOT NULL AUTO_INCREMENT,
  `NumTren` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Salida` date NOT NULL,
  `NombreEstacion` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `Estado` varchar(25) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `idInsert` (`idInsert`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab07`
--

DROP TABLE IF EXISTS `lab07`;
CREATE TABLE IF NOT EXISTS `lab07` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `Apellido` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `Correo` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `Telefono` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `Cedula` varchar(25) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `idUser` (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lab07`
--

INSERT INTO `lab07` (`idUser`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Cedula`) VALUES
(1, 'Ernesto', 'Monge', 'emb1098@hotmail.com', '83781308', '117910852'),
(2, 'Veronica', 'Siblesz', 'veesibleez@gmail.com', '6989865', '174656565'),
(3, 'Javier', 'Echeverría', 'edavecherr@gmail.com', '62656825', '17526566'),
(4, 'Luis', 'Pimpollo', 'limpollo@yahoo.com', '55656649', '1476269898'),
(6, 'b', 'b', 'b', 'b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `reservaciones`
--

DROP TABLE IF EXISTS `reservaciones`;
CREATE TABLE IF NOT EXISTS `reservaciones` (
  `idReservacion` int(11) NOT NULL AUTO_INCREMENT,
  `EstacionIncio` varchar(140) COLLATE latin1_general_ci NOT NULL,
  `EstacionFinal` varchar(140) COLLATE latin1_general_ci NOT NULL,
  `HoraSalida` time NOT NULL,
  `SubComp` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `NombreCliente` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `ApellidoCliente` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `FechaReservacion` date NOT NULL,
  `idtarjeta` int(11) NOT NULL,
  UNIQUE KEY `idReservacion` (`idReservacion`),
  KEY `idtarjeta` (`idtarjeta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tarjetasreserv`
--

DROP TABLE IF EXISTS `tarjetasreserv`;
CREATE TABLE IF NOT EXISTS `tarjetasreserv` (
  `idtarjeta` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDuenioTarj` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `CorreoDuenioTarj` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `NoTarjeta` varchar(145) COLLATE latin1_general_ci NOT NULL,
  `FechaVenc` date NOT NULL,
  `TipoTarj` varchar(40) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `idtarjeta` (`idtarjeta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trenes`
--

DROP TABLE IF EXISTS `trenes`;
CREATE TABLE IF NOT EXISTS `trenes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TrainNo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Estado` int(1) NOT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `trenes`
--

INSERT INTO `trenes` (`Id`, `TrainNo`, `Estado`) VALUES
(1, '926', 1),
(2, '726', 0),
(3, '787', 1),
(4, '088', 0),
(5, '875', 0),
(6, '437', 0),
(7, '892', 1),
(8, '786', 0),
(9, '153', 0),
(10, '084', 0),
(11, '845', 1),
(12, '042', 1),
(13, '580', 1),
(14, '691', 0),
(15, '182', 0),
(16, '805', 0),
(17, '369', 1),
(18, '818', 0),
(19, '666', 1),
(20, '790', 0),
(21, '535', 0),
(22, '376', 1),
(23, '027', 0),
(24, '147', 0),
(25, '838', 1),
(26, '557', 1),
(27, '480', 0),
(28, '281', 0),
(29, '022', 0),
(30, '503', 1),
(31, '925', 0),
(32, '408', 0),
(33, '912', 1),
(34, '960', 0),
(35, '288', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `PrimerApellido` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `SegundoApellido` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Cedula` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Correo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Contrasena` varchar(130) COLLATE latin1_general_ci NOT NULL,
  `FdN` date NOT NULL,
  `TipoUsuario` int(1) NOT NULL,
  UNIQUE KEY `idUsuario` (`idUsuario`),
  UNIQUE KEY `Correo` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `PrimerApellido`, `SegundoApellido`, `Cedula`, `Correo`, `Contrasena`, `FdN`, `TipoUsuario`) VALUES
(1, 'Ernesto', 'Monge', 'Bolívar', '117910852', 'emb1098@hotmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '1998-10-28', 1),
(2, 'Emilio', 'Solano', 'Flores', '59899292', 'emiliosolanoflores@gmail.com', 'ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015ad', '2020-03-16', 0),
(3, 'a', 'a', 'a', 'a', 'aa', 'b3a8e0e1f9ab1bfe3a36f231f676f78bb30a519d2b21e6c530c0eee8ebb4a5d0', '2020-03-01', 0),
(4, 'b', 'b', 'b', 'b', 'b', '3', '2020-03-01', 0),
(5, 'c', 'c', 'c', 'c', 'c', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '2020-03-01', 0),
(6, 'Thomas', 'Perez', 'Sanchez', '45898988', 'tperez@hotmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '2001-10-02', 0),
(7, 'Luis Carlos', 'Rojas', 'Azul', '65656589', 'lcarlosroaz@gmail.com', '6d1182c02a8d1a877768bcc37a5dedfb11fdfe0394df93d9ad202ecd79f805cb', '1420-04-12', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `horarioestaciones`
--
ALTER TABLE `horarioestaciones`
  ADD CONSTRAINT `horarioestaciones_ibfk_1` FOREIGN KEY (`IdEstacion`) REFERENCES `estaciones` (`id`);

--
-- Constraints for table `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`idTren`) REFERENCES `trenes` (`Id`),
  ADD CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`Horarioid`) REFERENCES `estaciones` (`id`);

--
-- Constraints for table `horariosdias`
--
ALTER TABLE `horariosdias`
  ADD CONSTRAINT `horariosdias_ibfk_1` FOREIGN KEY (`idHorario`) REFERENCES `horarios` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

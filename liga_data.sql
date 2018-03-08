-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2015 a las 18:48:08
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fermat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liga_mx_ascenso`
--

CREATE TABLE `liga_mx_ascenso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `jj` int(11) NOT NULL,
  `jjl` int(11) NOT NULL,
  `jjv` int(11) NOT NULL,
  `jg` int(11) NOT NULL,
  `jgl` int(11) NOT NULL,
  `jgv` int(11) NOT NULL,
  `je` int(11) NOT NULL,
  `jel` int(11) NOT NULL,
  `jev` int(11) NOT NULL,
  `jp` int(11) NOT NULL,
  `jpl` int(11) NOT NULL,
  `jpv` int(11) NOT NULL,
  `gf` int(11) NOT NULL,
  `gfl` int(11) NOT NULL,
  `gfv` int(11) NOT NULL,
  `gc` int(11) NOT NULL,
  `gcl` int(11) NOT NULL,
  `gcv` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

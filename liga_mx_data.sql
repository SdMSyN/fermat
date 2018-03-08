-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-04-2015 a las 04:41:38
-- Versión del servidor: 5.5.42-cll
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `puraslin_fermat`
--

--
-- Volcado de datos para la tabla `liga_mx`
--

INSERT INTO `liga_mx` (`id`, `nombre`, `jj`, `jjl`, `jjv`, `jg`, `jgl`, `jgv`, `je`, `jel`, `jev`, `jp`, `jpl`, `jpv`, `gf`, `gfl`, `gfv`, `gc`, `gcl`, `gcv`, `puntos`) VALUES
(1, 'America', 14, 8, 6, 6, 5, 1, 4, 1, 3, 4, 2, 2, 15, 11, 4, 15, 7, 8, 22),
(2, 'Atlas', 14, 6, 8, 6, 2, 4, 4, 2, 2, 4, 2, 2, 14, 7, 7, 16, 10, 6, 22),
(3, 'Cruz Azul', 14, 6, 8, 6, 4, 2, 4, 1, 3, 4, 1, 3, 13, 8, 5, 11, 4, 7, 22),
(4, 'Guadalajara', 14, 6, 8, 7, 5, 2, 4, 1, 3, 3, 0, 3, 16, 8, 8, 10, 1, 9, 25),
(5, 'Toluca', 14, 6, 8, 5, 4, 1, 5, 2, 3, 4, 0, 4, 17, 10, 7, 15, 3, 12, 22),
(6, 'Tijuana', 14, 7, 7, 7, 5, 2, 3, 1, 2, 4, 1, 3, 27, 18, 9, 21, 11, 10, 24),
(7, 'Santos laguna', 14, 7, 7, 5, 3, 2, 3, 2, 1, 6, 2, 4, 18, 13, 5, 17, 10, 7, 18),
(8, 'Tigres', 14, 8, 6, 7, 6, 1, 1, 0, 1, 6, 2, 4, 18, 14, 4, 13, 5, 8, 22),
(9, 'Jaguares', 14, 8, 6, 4, 3, 1, 5, 4, 1, 5, 1, 4, 20, 13, 7, 27, 11, 16, 17),
(10, 'Monterrey', 14, 6, 8, 5, 4, 1, 2, 2, 0, 7, 0, 7, 20, 13, 7, 25, 6, 19, 17),
(11, 'Pachuca', 14, 7, 7, 5, 4, 1, 4, 2, 2, 5, 1, 4, 19, 10, 9, 16, 5, 11, 19),
(12, 'Pumas', 14, 8, 6, 6, 5, 1, 2, 1, 1, 6, 2, 4, 17, 12, 5, 21, 9, 12, 20),
(13, 'LeÃ³n', 14, 7, 7, 3, 2, 1, 4, 3, 1, 7, 2, 5, 19, 12, 7, 25, 12, 13, 13),
(14, 'QuerÃ©taro', 14, 6, 8, 6, 4, 2, 2, 0, 2, 6, 2, 4, 21, 7, 14, 19, 4, 15, 20),
(15, 'Leones Negros', 14, 8, 6, 4, 2, 2, 3, 3, 0, 7, 3, 4, 10, 6, 4, 16, 8, 8, 15),
(16, 'Puebla', 14, 7, 7, 4, 3, 1, 4, 1, 3, 6, 3, 3, 16, 9, 7, 16, 6, 10, 16),
(17, 'Veracruz', 14, 7, 7, 6, 4, 2, 6, 3, 3, 2, 0, 2, 22, 13, 9, 12, 3, 9, 24),
(18, 'Morelia', 14, 8, 6, 2, 2, 0, 4, 3, 1, 8, 3, 5, 13, 8, 5, 20, 8, 12, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2014 a las 10:50:47
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pro`
--
CREATE DATABASE IF NOT EXISTS `vino` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vino`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terrenos`
--

CREATE TABLE IF NOT EXISTS `terrenos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `des` varchar(80) NOT NULL,
  `cordenadas` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `terrenos`
--

INSERT INTO `terrenos` (`id`, `name`, `des`, `cordenadas`) VALUES
(1, 'Edificio de Computo', 'Biblioteca y Laboratorio', ' -116.5903575069294,31.80612264837023,0 -116.5902882199217,31.80575732695361,0 -116.5898709518118,31.80581726970463,0 -116.5899412005359,31.80618363058182,0 -116.5903575069294,31.80612264837023,0'),
(2, 'Edificio Docientos', 'Edifico de ingeneria y sala de maestros.', '-116.5911671298519,31.80670664243337,0 -116.5911291136688,31.80651800325973,0 -116.5906896169378,31.80659131900197,0            -116.5907264565679,31.80678022126911,0 -116.5911671298519,31.80670664243337,0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2017 a las 12:29:57
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `encuestas`
--
CREATE DATABASE IF NOT EXISTS `encuestas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `encuestas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE IF NOT EXISTS `opciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` bit(1) NOT NULL,
  `voto` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pregunta` (`id_pregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id`, `nombre`, `descripcion`, `tipo`, `voto`, `id_pregunta`, `fecha_creacion`) VALUES
(1, 'Menos de un año', '', b'0', 0, 1, '2017-05-07'),
(2, 'Entre 1 y 3 años', '', b'0', 0, 1, '2017-05-07'),
(3, 'Entre 4 y 8 años', '', b'0', 0, 1, '2017-05-07'),
(4, 'Más de 9 años', '', b'0', 0, 1, '2017-05-07'),
(5, 'Internet', '', b'0', 0, 2, '2017-05-07'),
(6, 'Prensa o Revistas', '', b'0', 0, 2, '2017-05-07'),
(7, 'Contactos Empresariales', '', b'0', 0, 2, '2017-05-07'),
(8, 'Amistades', '', b'0', 0, 2, '2017-05-07'),
(9, 'Envió de Información (Publicidad directa)', '', b'0', 0, 2, '2017-05-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `titulo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `titulo` (`titulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `nombre`, `descripcion`, `fecha_creacion`, `titulo`) VALUES
(1, '¿Desde cuando es usted cliente?', '', '2017-05-07', 1),
(2, '¿Cómo nos conoció?', '', '2017-05-07', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE IF NOT EXISTS `titulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `titulo`
--

INSERT INTO `titulo` (`id`, `nombre`, `descripcion`, `fecha_creacion`) VALUES
(1, 'clientes', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `funcionario` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `ibfk_4` FOREIGN KEY (`titulo`) REFERENCES `titulo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

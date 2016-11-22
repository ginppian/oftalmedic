-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2016 a las 18:13:41
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `optica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id_user` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_p`,`id_user`,`fecha`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `color` varchar(10) NOT NULL,
  `precio` int(6) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_p`, `marca`, `modelo`, `color`, `precio`, `cantidad`, `imagen`) VALUES
(1, 'Ray Ban', 'f555', 'negro', 2500, 3, 'ray.jpg'),
(2, 'Ray Ban', 'a222', 'azul', 2300, 2, 'ray2.jpg'),
(3, 'Ray Ban', 'w123', 'azul', 2000, 5, 'ray3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(64) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `tipo` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `user`, `nombre`, `password`, `telefono`, `correo`, `tipo`) VALUES
(1, 'fernando', 'FERNANDO', 'fernando', '2221111184', 'fercalata@gmail.com', 0),
(2, 'nuevo', 'xxxxxxx', 'nuevo', '2342342342', 'nuevo@gmail.com', 0),
(3, 'cliente', 'nuevo', 'cliente', '1234567890', 'cliente@gmail.com', 1),
(4, 'baruc', 'baruc', 'baruc', '12324242', 'jshsjdhjshdjsdh', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `producto` (`id_p`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

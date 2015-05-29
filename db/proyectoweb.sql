-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2015 a las 05:22:09
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'LUCHA'),
(2, 'CARRERA'),
(3, 'DEPORTE'),
(4, 'ROL'),
(5, 'SHOOTER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consola`
--

CREATE TABLE IF NOT EXISTS `consola` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consola`
--

INSERT INTO `consola` (`id`, `nombre`) VALUES
(1, 'PLAY STATION 3'),
(2, 'PLAY STATION 4'),
(3, 'XBOX 360'),
(4, 'XBOX ONE'),
(5, 'WII'),
(6, 'WII U');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE IF NOT EXISTS `juegos` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(45) CHARACTER SET utf8 NOT NULL,
  `categoria_id` int(11) NOT NULL DEFAULT '0',
  `consola_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `precio`, `cantidad`, `imagen`, `categoria_id`, `consola_id`) VALUES
(1, 'Gears Of War 3', 399.99, 20, 'images/games/946406696.png', 5, 3),
(2, 'Mortal Kombat X', 999.99, 50, 'images/games/654164761.jpg', 1, 2),
(3, 'FIFA 15', 899.99, 50, 'images/games/572742052.jpg', 3, 4),
(4, 'Mario Kart 8', 799.99, 50, 'images/games/339991353.jpg', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `apellido`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'admin', 'admin@hotmail.com', 'adminadmin', 1),
(2, 'cliente', 'cliente', 'cliente@hotmail.com', 'cliente123', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_juegos`
--

CREATE TABLE IF NOT EXISTS `usuarios_has_juegos` (
  `usuarios_id` int(11) NOT NULL,
  `juegos_id` int(11) NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consola`
--
ALTER TABLE `consola`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
 ADD PRIMARY KEY (`id`,`categoria_id`,`consola_id`), ADD UNIQUE KEY `id_2` (`id`), ADD KEY `fk_juegos_categoria1_idx` (`categoria_id`), ADD KEY `fk_juegos_consola1_idx` (`consola_id`), ADD KEY `id` (`id`), ADD KEY `id_3` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indices de la tabla `usuarios_has_juegos`
--
ALTER TABLE `usuarios_has_juegos`
 ADD PRIMARY KEY (`usuarios_id`,`juegos_id`), ADD KEY `fk_usuarios_has_juegos_juegos1_idx` (`juegos_id`), ADD KEY `fk_usuarios_has_juegos_usuarios1_idx` (`usuarios_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
ADD CONSTRAINT `fk_juegos_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_juegos_consola1` FOREIGN KEY (`consola_id`) REFERENCES `consola` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_has_juegos`
--
ALTER TABLE `usuarios_has_juegos`
ADD CONSTRAINT `fk_usuarios_has_juegos_juegos1` FOREIGN KEY (`juegos_id`) REFERENCES `juegos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_usuarios_has_juegos_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

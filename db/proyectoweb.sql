-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2015 a las 21:15:32
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
(6, 'WII U'),
(7, 'PC');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `precio`, `cantidad`, `imagen`, `categoria_id`, `consola_id`) VALUES
(1, 'Gears Of War 3', 399.99, 20, 'images/games/568979338.jpg', 5, 3),
(2, 'Mortal Kombat X', 999.99, 50, 'images/games/654164761.jpg', 1, 2),
(3, 'FIFA 15', 899.99, 60, 'images/games/572742052.jpg', 3, 4),
(5, 'Brawl', 599.9, 90, 'images/games/127483241.jpg', 1, 5),
(6, 'Mario Kart 8', 39.99, 90, 'images/games/446941233.jpg', 2, 6),
(7, 'Halo 4', 499.9, 30, 'images/games/578992711.jpg', 5, 3),
(8, 'NFS U. 3', 799.99, 20, 'images/games/851947505.png', 2, 4),
(9, 'NFS Rivals ', 550.5, 20, 'images/games/629449609.jpg', 2, 1),
(10, 'Avengers', 399, 10, 'images/games/760225543.jpg', 4, 3),
(11, 'Halo 3', 350.9, 30, 'images/games/21339993.jpg', 5, 3),
(12, 'FIFA 15', 999.99, 50, 'images/games/440913939.jpg', 3, 2),
(13, 'GTA V', 500, 25, 'images/games/49482373.png', 4, 7),
(14, 'Wolfenstein', 750.5, 5, 'images/games/351912413.jpg', 4, 2),
(15, 'TLOZ Skyward', 600, 30, 'images/games/360177492.jpg', 4, 5);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `apellido`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'Adminmin', 'admin@hotmail.com', 'adminadmin', 1),
(2, 'cliente', 'cliente', 'cliente@hotmail.com', 'cliente123', 0),
(3, 'Oscar', 'Perez', 'nike-o_94@hotmail.com', 'holahola', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_juegos`
--

CREATE TABLE IF NOT EXISTS `usuarios_has_juegos` (
  `usuarios_id` int(11) NOT NULL,
  `juegos_id` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_has_juegos`
--

INSERT INTO `usuarios_has_juegos` (`usuarios_id`, `juegos_id`, `cantidad`, `fecha`) VALUES
(2, 1, 1, '2015-05-31'),
(2, 9, 1, '2015-05-31'),
(3, 3, 1, '2015-05-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
`ventas_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `juegos_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ventas_id`, `usuarios_id`, `juegos_id`, `cantidad`, `fecha`) VALUES
(1, 2, 2, 1, '2015-05-30'),
(2, 2, 3, 2, '2015-05-30'),
(3, 2, 5, 20, '2015-05-29'),
(4, 3, 1, 8, '2015-05-29'),
(5, 3, 3, 4, '2015-05-30'),
(6, 3, 6, 7, '2015-05-30'),
(8, 3, 6, 5, '2015-04-15'),
(9, 2, 3, 1, '2015-05-30'),
(10, 2, 5, 1, '2015-05-30'),
(11, 2, 6, 1, '2015-05-30'),
(12, 3, 2, 3, '2015-05-30'),
(13, 3, 7, 2, '2015-05-30'),
(15, 3, 1, 4, '2015-05-30'),
(16, 2, 2, 1, '2015-05-30'),
(17, 2, 3, 1, '2015-05-31'),
(18, 2, 5, 1, '2015-05-30'),
(19, 2, 6, 1, '2015-05-30'),
(20, 2, 7, 1, '2015-05-30');

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
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
 ADD PRIMARY KEY (`ventas_id`), ADD KEY `usuarios_id` (`usuarios_id`), ADD KEY `juegos_id` (`juegos_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
MODIFY `ventas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
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

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
ADD CONSTRAINT `res1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `res2` FOREIGN KEY (`juegos_id`) REFERENCES `juegos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

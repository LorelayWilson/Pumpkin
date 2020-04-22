-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-04-2020 a las 21:24:08
-- Versión del servidor: 5.7.29-0ubuntu0.16.04.1
-- Versión de PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liflores_Pumpkin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campos`
--

CREATE TABLE `campos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campos`
--

INSERT INTO `campos` (`id`, `nombre`, `user`) VALUES
(1, 'Campo de patatas', 'aghost13'),
(2, 'Campo de alcachofas', 'aghost13'),
(3, 'Campo de calabazas', 'beton2p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `email`, `telefono`) VALUES
(1, 'Thiel, Schowalter and Cruickshank', 'fduchan0@nifty.com', 6265400000),
(2, 'Hermann, Kertzmann and O\'Kon', 'ivillar1@woothemes.com', 3029910000),
(3, 'Schroeder-Abernathy', 'aarlidge2@msu.edu', 7911190000),
(4, 'Hamill, Cruickshank and Hudson', 'nhawton3@zdnet.com', 8753750000),
(5, 'Zieme-O\'Keefe', 'hdeware4@miitbeian.gov.cn', 9986060000),
(6, 'Feest LLC', 'jtarquini5@amazon.de', 1255170000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediciones`
--

CREATE TABLE `mediciones` (
  `fecha` date NOT NULL,
  `posicion` int(11) NOT NULL,
  `humedad` float NOT NULL,
  `salinidad` float NOT NULL,
  `temperatura` float NOT NULL,
  `luminosidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mediciones`
--

INSERT INTO `mediciones` (`fecha`, `posicion`, `humedad`, `salinidad`, `temperatura`, `luminosidad`) VALUES
('2019-04-25', 9, 134, 113, 41, 231),
('2019-08-06', 5, 325, 325, 15, 125),
('2019-08-15', 7, 216, 326, 36, 116),
('2019-11-16', 4, 214, 214, 14, 324),
('2019-12-11', 1, 232, 32, 32, 342),
('2020-03-10', 3, 123, 343, 23, 433);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `nie` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` float NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nie`, `nombre`, `apellido`, `email`, `telefono`, `id_empresa`) VALUES
(124, 'Stoddard', 'Bartol', 'sbartol14@xing.com', 1797210000, 2),
(135, 'Ulrica', 'Trevarthen', 'utrevarthen1b@bloomberg.com', 7375410000, 3),
(140, 'Emmalyn', 'Norridge', 'enorridge8@about.me', 5735640000, 1),
(169, 'Sheri', 'Huxtable', 'shuxtable6@a8.net', 8669210000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE `posiciones` (
  `id` int(11) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posiciones`
--

INSERT INTO `posiciones` (`id`, `lat`, `lng`) VALUES
(1, -7.01696, 112.446),
(2, 5.80663, 8.07653),
(3, 64.1918, 20.8489),
(4, 36.7595, 110.632),
(5, 41.4267, 48.4346),
(6, -34.4419, 19.4538),
(7, 29.0755, -110.961),
(8, 38.9957, -0.17884),
(9, 38.9956, -0.16709),
(10, 38.9935, -0.16756),
(11, 38.9931, -0.1778);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'Admin'),
(2, 'Equipo Técnico'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sonda`
--

CREATE TABLE `sonda` (
  `id` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sonda`
--

INSERT INTO `sonda` (`id`, `posicion`, `fecha`) VALUES
(1, 9, '2019-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sondas`
--

CREATE TABLE `sondas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sondas`
--

INSERT INTO `sondas` (`id`, `nombre`) VALUES
(1, 'Isoodon obe'),
(2, 'Chelodina l'),
(3, 'Callipepla '),
(4, 'Choloepus h');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `nie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user`, `rol`, `contraseña`, `nie`) VALUES
('aghost13', 3, 'iT3XaR', 124),
('beton2p', 3, 'hIr4aZ17M2bk', 135),
('bpemberton1k', 1, 'JQ02ljkS9x', 140),
('hgrinikhinov2d', 2, 'GBenuvtHU7K', 169);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vertices`
--

CREATE TABLE `vertices` (
  `id_parcelas` int(11) NOT NULL,
  `id_posiciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vertices`
--

INSERT INTO `vertices` (`id_parcelas`, `id_posiciones`) VALUES
(1, 8),
(1, 9),
(1, 10),
(1, 11);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campos`
--
ALTER TABLE `campos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD PRIMARY KEY (`fecha`,`posicion`),
  ADD KEY `fecha` (`fecha`,`posicion`),
  ADD KEY `posicion` (`posicion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`nie`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sonda`
--
ALTER TABLE `sonda`
  ADD PRIMARY KEY (`id`,`posicion`,`fecha`),
  ADD KEY `posicion` (`posicion`),
  ADD KEY `fecha` (`fecha`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `sondas`
--
ALTER TABLE `sondas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`),
  ADD KEY `rol` (`rol`),
  ADD KEY `nie` (`nie`);

--
-- Indices de la tabla `vertices`
--
ALTER TABLE `vertices`
  ADD PRIMARY KEY (`id_parcelas`,`id_posiciones`),
  ADD UNIQUE KEY `id_posiciones` (`id_posiciones`),
  ADD KEY `id_parcelas` (`id_parcelas`,`id_posiciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campos`
--
ALTER TABLE `campos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campos`
--
ALTER TABLE `campos`
  ADD CONSTRAINT `campos_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD CONSTRAINT `mediciones_ibfk_1` FOREIGN KEY (`posicion`) REFERENCES `posiciones` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sonda`
--
ALTER TABLE `sonda`
  ADD CONSTRAINT `sonda_ibfk_1` FOREIGN KEY (`posicion`) REFERENCES `mediciones` (`posicion`),
  ADD CONSTRAINT `sonda_ibfk_2` FOREIGN KEY (`fecha`) REFERENCES `mediciones` (`fecha`),
  ADD CONSTRAINT `sonda_ibfk_3` FOREIGN KEY (`id`) REFERENCES `sondas` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`nie`) REFERENCES `persona` (`nie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vertices`
--
ALTER TABLE `vertices`
  ADD CONSTRAINT `vertices_ibfk_1` FOREIGN KEY (`id_posiciones`) REFERENCES `posiciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vertices_ibfk_2` FOREIGN KEY (`id_parcelas`) REFERENCES `campos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

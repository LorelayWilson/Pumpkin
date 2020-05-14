-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2020 a las 19:56:55
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd_pumpkin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campos`
--

CREATE TABLE `campos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `ccaa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campos`
--

INSERT INTO `campos` (`id`, `nombre`, `user`, `localidad`, `ccaa`) VALUES
(1, 'Campo de patatas', 'aghost13', 'Gandia', 'Comunidad Valenciana'),
(2, 'Campo de alcachofas', 'aghost13', 'Murcia', 'Region de Murcia'),
(3, 'Campo de calabazas', 'beton2p', 'Xeraco', 'Comunidad Valenciana'),
(4, 'Campo de laureles', 'admin', 'San Sebastian', 'Pais Vasco'),
(5, 'Campo de papayas', 'admin', 'Platja Gandia', 'Comunidad Valenciana'),
(9, 'Plataneras Bollullo S.L', 'admin', 'Tenerife', 'Canarias'),
(10, 'Campo de amapolas', 'admin', 'Sagunto', 'Comunidad Valenciana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nie` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` float NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nie`, `nombre`, `apellido`, `email`, `telefono`, `id_empresa`) VALUES
(124, 'Stoddard', 'Bartol', 'sbartol14@xing.com', 1797210000, 2),
(135, 'Ulrica', 'Trevarthen', 'utrevarthen1b@bloomberg.com', 7375410000, 3),
(140, 'Emmalyn', 'Norridge', 'enorridge8@about.me', 5735640000, 1),
(169, 'Sheri', 'Huxtable', 'shuxtable6@a8.net', 8669210000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `email`, `telefono`) VALUES
(1, 'Thiel, Schowalter and Cruickshank', 'fduchan0@nifty.com', 6265400000),
(2, 'Hermann, Kertzmann and O\'Kon', 'ivillar1@woothemes.com', 3029910000),
(3, 'Schroeder-Abernathy', 'aarlidge2@msu.edu', 7911190000),
(4, 'Hamill, Cruickshank and Hudson', 'nhawton3@zdnet.com', 8753750000),
(5, 'Zieme-O\'Keefe', 'hdeware4@miitbeian.gov.cn', 9986060000),
(6, 'Feest LLC', 'jtarquini5@amazon.de', 1255170000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_sondas`
--

CREATE TABLE `info_sondas` (
  `id` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `info_sondas`
--

INSERT INTO `info_sondas` (`id`, `posicion`, `fecha`) VALUES
(1, 3, '2020-05-07'),
(2, 4, '2020-04-05'),
(4, 1009, '2020-05-17'),
(4, 1014, '2020-05-01'),
(13, 2, '2020-05-05'),
(13, 1008, '2020-05-24');

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
('2020-04-05', 4, 53, 64, 22, 88),
('2020-04-06', 4, 43, 55, 31, 55),
('2020-04-07', 4, 53, 61, 22, 55),
('2020-04-08', 4, 96, 45, 24, 22),
('2020-04-09', 4, 12, 78, 15, 33),
('2020-04-10', 4, 34, 13, 17, 63),
('2020-04-11', 4, 43, 55, 15, 75),
('2020-04-12', 4, 33, 13, 21, 47),
('2020-05-01', 1014, 51, 55, 7, 44),
('2020-05-02', 1014, 14, 51, 9, 9),
('2020-05-03', 1014, 14, 42, 10, 22),
('2020-05-04', 2, 52, 55, 12, 32),
('2020-05-04', 1014, 24, 51, 11, 33),
('2020-05-05', 2, 53, 55, 22, 44),
('2020-05-05', 1014, 52, 86, 6, 22),
('2020-05-06', 2, 24, 35, 23, 15),
('2020-05-06', 1014, 85, 44, -4, 3),
('2020-05-07', 2, 53, 73, 33, 53),
('2020-05-07', 3, 35, 11, 27, 64),
('2020-05-07', 1014, 96, 91, 2, 30),
('2020-05-08', 2, 25, 55, 29, 88),
('2020-05-08', 3, 42, 44, 23, 51),
('2020-05-09', 2, 25, 33, 26, 63),
('2020-05-09', 3, 77, 55, 22, 54),
('2020-05-10', 2, 45, 25, 25, 77),
('2020-05-10', 3, 83, 81, 23, 16),
('2020-05-11', 2, 77, 75, 26, 29),
('2020-05-11', 3, 72, 44, 19, 92),
('2020-05-12', 3, 73, 24, 24, 64),
('2020-05-13', 3, 85, 57, 30, 24),
('2020-05-14', 3, 27, 29, 21, 37),
('2020-05-15', 3, 72, 42, 12, 41),
('2020-05-17', 1009, 62, 55, 21, 51),
('2020-05-18', 1009, 32, 55, 15, 53),
('2020-05-19', 1009, 73, 33, 13, 52),
('2020-05-20', 1009, 59, 99, 29, 44),
('2020-05-21', 1009, 44, 11, 31, 78),
('2020-05-22', 1008, 61, 55, 27, 41),
('2020-05-23', 1009, 51, 77, 18, 91),
('2020-05-24', 1008, 12, 13, 27, 66),
('2020-05-25', 1008, 72, 54, 22, 92),
('2020-05-26', 1008, 13, 33, 13, 14),
('2020-05-27', 1008, 23, 25, 19, 45),
('2020-05-28', 1008, 12, 51, 20, 51),
('2020-05-30', 1008, 55, 62, 18, 73),
('2020-05-31', 1008, 42, 38, 21, 62);

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
(2, 38.9963, -0.168032),
(3, 38.9965, -0.169487),
(4, 39.6707, -0.298888),
(5, 39.671, -0.299368),
(6, 39.6709, -0.298448),
(7, 39.6704, -0.298684),
(8, 39.6705, -0.299392),
(9, 39.6707, -0.299258),
(10, 39.6708, -0.299537),
(11, 38.9965, -0.167436),
(12, 38.9958, -0.167667),
(13, 38.9958, -0.171229),
(14, 38.9981, -0.172066),
(1004, 28.4169, -16.5222),
(1005, 28.4151, -16.5221),
(1006, 28.4153, -16.5186),
(1007, 28.417, -16.5196),
(1008, 28.4155, -16.5193),
(1009, 28.4162, -16.5213),
(1010, 43.3204, -2.01544),
(1011, 43.3182, -2.01573),
(1012, 43.3188, -2.01166),
(1013, 43.3211, -2.01196),
(1014, 43.32, -2.01304);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Admin'),
(2, 'Equipo Técnico'),
(3, 'Cliente');

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
(4, 'Choloepus h'),
(13, 'Callipepla ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `nie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user`, `rol`, `contraseña`, `nie`) VALUES
('admin', 1, 'admin', 140),
('aghost13', 3, 'iT3XaR', 124),
('beton2p', 3, 'hIr4aZ17M2bk', 135),
('hgrinikhinov2d', 2, 'GBenuvtHU7K', 169),
('hola', 1, 'hola', 140);

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
(4, 1010),
(4, 1011),
(4, 1012),
(4, 1013),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(9, 1004),
(9, 1005),
(9, 1006),
(9, 1007),
(10, 5),
(10, 6),
(10, 7),
(10, 8),
(10, 9),
(10, 10);

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
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`nie`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `info_sondas`
--
ALTER TABLE `info_sondas`
  ADD PRIMARY KEY (`id`,`posicion`,`fecha`),
  ADD KEY `posicion` (`posicion`),
  ADD KEY `fecha` (`fecha`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD PRIMARY KEY (`fecha`,`posicion`),
  ADD KEY `fecha` (`fecha`,`posicion`),
  ADD KEY `posicion` (`posicion`);

--
-- Indices de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sondas`
--
ALTER TABLE `sondas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campos`
--
ALTER TABLE `campos`
  ADD CONSTRAINT `campos_ibfk_1` FOREIGN KEY (`user`) REFERENCES `usuarios` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `info_sondas`
--
ALTER TABLE `info_sondas`
  ADD CONSTRAINT `info_sondas_ibfk_1` FOREIGN KEY (`posicion`) REFERENCES `mediciones` (`posicion`),
  ADD CONSTRAINT `info_sondas_ibfk_2` FOREIGN KEY (`fecha`) REFERENCES `mediciones` (`fecha`),
  ADD CONSTRAINT `info_sondas_ibfk_3` FOREIGN KEY (`id`) REFERENCES `sondas` (`id`);

--
-- Filtros para la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD CONSTRAINT `mediciones_ibfk_1` FOREIGN KEY (`posicion`) REFERENCES `posiciones` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`nie`) REFERENCES `clientes` (`nie`) ON DELETE CASCADE ON UPDATE CASCADE;

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

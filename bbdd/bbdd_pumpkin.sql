-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2020 a las 20:42:43
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
(5, 'Campo de papayas', 'admin', 'Tarragona', 'Catalunya'),
(9, 'Campo de olivos', 'admin', 'Jaen', 'Andalucia'),
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
-- Estructura de tabla para la tabla `sonda`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sonda`
--

INSERT INTO `datos` (`id`, `posicion`, `fecha`) VALUES
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
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

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
-- Filtros para la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD CONSTRAINT `mediciones_ibfk_1` FOREIGN KEY (`posicion`) REFERENCES `posiciones` (`id`);

--
-- Filtros para la tabla `sonda`
--
ALTER TABLE `datos`
  ADD CONSTRAINT `datos_ibfk_1` FOREIGN KEY (`posicion`) REFERENCES `mediciones` (`posicion`),
  ADD CONSTRAINT `datos_ibfk_2` FOREIGN KEY (`fecha`) REFERENCES `mediciones` (`fecha`),
  ADD CONSTRAINT `datos_ibfk_3` FOREIGN KEY (`id`) REFERENCES `sondas` (`id`);

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

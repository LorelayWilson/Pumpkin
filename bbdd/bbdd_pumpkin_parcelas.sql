-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2020 a las 03:57:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd_pumpkin_parcelas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campos`
--

CREATE TABLE `campos` (
  `id_campos` int(11) NOT NULL,
  `nombre_campos` varchar(100) NOT NULL,
  `id_clientes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campos`
--

INSERT INTO `campos` (`id_campos`, `nombre_campos`, `id_clientes`) VALUES
(1, 'campo de patatas', 1),
(2, 'campos de alcachofas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `nombre_clientes` varchar(100) NOT NULL,
  `apellidos_clientes` varchar(100) NOT NULL,
  `id_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `nombre_clientes`, `apellidos_clientes`, `id_usuario`) VALUES
(1, 'Harp', 'Tattersill', 1),
(2, 'Tricia', 'Manuele', 2),
(3, 'Shanon', 'Siggers', 3),
(4, 'Gerrard', 'Erskine', 4),
(5, 'Augustin', 'Greenleaf', 5),
(6, 'Cammie', 'Godfery', 6),
(7, 'Zenia', 'Quilty', 7),
(8, 'Riobard', 'Ganning', 8),
(9, 'Clarence', 'Harvatt', 9),
(10, 'Gaelan', 'Jansa', 10),
(11, 'Archaimbaud', 'Knipe', 11),
(12, 'Dominica', 'Mechell', 12),
(13, 'Vickie', 'Spinks', 13),
(14, 'Ediva', 'Sautter', 14),
(15, 'Geoffrey', 'McLeese', 15),
(16, 'Claudia', 'Forder', 16),
(17, 'Robby', 'Brownlee', 17),
(18, 'Halsey', 'Manntschke', 18),
(19, 'Teresina', 'Hamments', 19),
(20, 'Brandy', 'Lanchberry', 20),
(21, 'Becka', 'Dahlback', 21),
(22, 'Sapphire', 'Battill', 22),
(23, 'Mayne', 'Penton', 23),
(24, 'Angelina', 'Poultney', 24),
(25, 'Katherina', 'Skittreal', 25),
(26, 'Clint', 'Nudde', 26),
(27, 'Hildagarde', 'Lyvon', 27),
(28, 'Margery', 'Easter', 28),
(29, 'Becky', 'Brumbie', 29),
(30, 'Debbie', 'Carlson', 30),
(31, 'Lutero', 'Dikles', 31),
(32, 'Edythe', 'Cline', 32),
(33, 'Emmalyn', 'Truce', 33),
(34, 'Mar', 'Frude', 34),
(35, 'Skipp', 'Gradly', 35),
(36, 'Rafaelia', 'Loncaster', 36),
(37, 'Findley', 'Tyre', 37),
(38, 'Kori', 'Linkie', 38),
(39, 'Lorilyn', 'Lacer', 39),
(40, 'Valry', 'Partington', 40),
(41, 'Eunice', 'Hamblin', 41),
(42, 'Mill', 'Pinnington', 42),
(43, 'Hugo', 'Bortol', 43),
(44, 'Mindy', 'McCrainor', 44),
(45, 'Aggy', 'Reford', 45),
(46, 'Roselin', 'Cale', 46),
(47, 'Nissie', 'Trusler', 47),
(48, 'Cad', 'Holsall', 48),
(49, 'Trudi', 'Savile', 49),
(50, 'Meghann', 'Seabrocke', 50),
(51, 'Gregor', 'Jeske', 51),
(52, 'Karlens', 'Bartalucci', 52),
(53, 'Analiese', 'Rosa', 53),
(54, 'Iver', 'Sykora', 54),
(55, 'Maddi', 'Stephenson', 55),
(56, 'Gus', 'Burnel', 56),
(57, 'Kristy', 'Bastable', 57),
(58, 'Shoshana', 'Doulton', 58),
(59, 'Gordon', 'Leafe', 59),
(60, 'Meggy', 'MacCaughey', 60),
(61, 'Arly', 'Sawford', 61),
(62, 'Kirsteni', 'Stepney', 62),
(63, 'Darda', 'Haversum', 63),
(64, 'Erl', 'Rice', 64),
(65, 'Marlena', 'Kareman', 65),
(66, 'Fredra', 'Matresse', 66),
(67, 'Ashlie', 'MacBey', 67),
(68, 'Tiff', 'Paolozzi', 68),
(69, 'Chere', 'Knox', 69),
(70, 'Ly', 'Porker', 70),
(71, 'Corny', 'Crittal', 71),
(72, 'Rayshell', 'Wapplington', 72),
(73, 'Jourdan', 'Bleue', 73),
(74, 'Mohandis', 'Tomasini', 74),
(75, 'Odo', 'Anstie', 75),
(76, 'Liesa', 'Kubas', 76),
(77, 'Vladamir', 'Glynn', 77),
(78, 'Timothee', 'Tortice', 78),
(79, 'Bethanne', 'Smoth', 79),
(80, 'Harcourt', 'Farnan', 80),
(81, 'Minerva', 'Gouldie', 81),
(82, 'Demetria', 'Simoens', 82),
(83, 'Magdalene', 'Baddow', 83),
(84, 'Wyndham', 'Maynell', 84),
(85, 'Allie', 'Alleburton', 85),
(86, 'Adam', 'Redmore', 86),
(87, 'Corenda', 'Minelli', 87),
(88, 'Kiley', 'Rennie', 88),
(89, 'Charissa', 'Filpo', 89),
(90, 'Alanna', 'Whiteside', 90),
(91, 'Nolly', 'Westmerland', 91),
(92, 'Corina', 'Daveley', 92),
(93, 'Bibi', 'Malpass', 93),
(94, 'Benji', 'Kimmel', 94),
(95, 'Christian', 'Barrs', 95),
(96, 'Laurie', 'Varcoe', 96),
(97, 'Tracey', 'Croshaw', 97),
(98, 'Janeczka', 'Burdekin', 98),
(99, 'Heywood', 'Warbys', 99),
(100, 'Amber', 'Wegenen', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `humedad`
--

CREATE TABLE `humedad` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `id_localizacion` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizacion`
--

CREATE TABLE `localizacion` (
  `id_localizacion` int(11) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localizacion`
--

INSERT INTO `localizacion` (`id_localizacion`, `lat`, `lng`) VALUES
(1, 48.1496, 24.2824),
(2, 3.11214, 101.694),
(3, 8.58224, 125.893),
(4, 41.5737, 120.449),
(5, -7.09706, 107.577),
(6, -8.90663, 121.306),
(7, 33.5138, 36.2765),
(8, 37.2426, 111.857),
(9, 28.6428, 111.161),
(10, 53.1459, 20.8157);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `luminosidad`
--

CREATE TABLE `luminosidad` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `id_localizacion` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos_clave`
--

CREATE TABLE `puntos_clave` (
  `id` int(11) NOT NULL,
  `id_campo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'administrador'),
(2, 'equipo técnico'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salinidad`
--

CREATE TABLE `salinidad` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `id_localizacion` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sondas`
--

CREATE TABLE `sondas` (
  `id` int(11) NOT NULL,
  `mac` varchar(15) NOT NULL,
  `id_localizacion` int(11) NOT NULL,
  `id_campo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temperatura`
--

CREATE TABLE `temperatura` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `id_localizacion` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre_usuario`, `contraseña`, `id_rol`) VALUES
(1, 'sbryer0', 'tned5xB', 3),
(2, 'zgrim1', '4YX20VhrCMk', 1),
(3, 'apresslee2', 'azaz2ZphRQ', 1),
(4, 'rhouliston3', 'fRMgIIGhl', 1),
(5, 'fawde4', 'y3uO1RMgoOvf', 3),
(6, 'bbaile5', 'SrIWdXxXD', 2),
(7, 'alunbech6', 'A6eHwKginn1', 1),
(8, 'iwithrop7', 'sUSYpIqMob', 1),
(9, 'cconichie8', 'MSLYdwX9GkL', 1),
(10, 'hmandeville9', 'jBqUeCi', 3),
(11, 'swakelina', 'fSUiYgN', 2),
(12, 'cgoodchildb', 'NbhYpDQBwu', 2),
(13, 'ycrickmerc', 'iGT5PS6A', 3),
(14, 'afelminghamd', 'CcCVWW4Bem', 2),
(15, 'ejowerse', '7DCuWB09t', 3),
(16, 'ndinkinf', 'HbdCaNvJpBvp', 2),
(17, 'dcammiemileg', 'wgA274SYo1', 3),
(18, 'mhawkeridgeh', 'Ik3Y9w', 1),
(19, 'gstreetfieldi', 'CwyIktwEk2N', 2),
(20, 'cfilintsevj', 'qnY5Zm', 1),
(21, 'asauterk', 'EvVtgt5dFO', 3),
(22, 'ychstneyl', 'KEUgSfj', 1),
(23, 'mlenehamm', 'KWj1U9pKusB6', 3),
(24, 'acomellin', 'jJ8geuvn6Mg7', 1),
(25, 'djuanicoo', 'juJxfNmd', 2),
(26, 'lplainp', 'NpHXZunmbcXW', 2),
(27, 'jclintonq', 'YL6qRvzy', 2),
(28, 'mriccir', 'm5AE9UqlTV', 1),
(29, 'rrisboroughs', 'K5vW6Yz', 3),
(30, 'kmandyt', 'Bg79ixzR0', 1),
(31, 'iculrossu', 'tCScGMLD0Cw', 1),
(32, 'gclaybournv', 'dEhG62yG', 3),
(33, 'harmallw', 'qRlO6fH', 2),
(34, 'gchessx', 'PLiPum6Ss4U', 2),
(35, 'fwinsladey', 'SM8ICmit', 3),
(36, 'yhaffardz', 'TlTj4ylokdRB', 1),
(37, 'sveevers10', 'fkp6pMSdC', 2),
(38, 'emartel11', 'mv21yeEJ', 3),
(39, 'emyerscough12', 'fLifNJ', 2),
(40, 'sroache13', 'ZLqXaqW', 2),
(41, 'bpumfrey14', 'qXpbbmyHZvAV', 3),
(42, 'wbarsby15', '6HY0MLf6KJew', 1),
(43, 'tsidwick16', '0j939WQyAH9', 3),
(44, 'wmcrinn17', 'mbeh5D', 3),
(45, 'mshergill18', '3jkrR7ESCrQ', 2),
(46, 'rebbens19', 'Ec2P87b9hX', 3),
(47, 'mfesby1a', 'Ki5pIZ4Q4I', 2),
(48, 'tgadd1b', 'PWEIu1V', 1),
(49, 'sbriscoe1c', 'CR2tnYp', 1),
(50, 'gacock1d', 'v4PstHdUbXzS', 3),
(51, 'mphilbrook1e', 'DtB0CKcjk5', 1),
(52, 'rchanders1f', '2jd4CY', 1),
(53, 'rdrinkwater1g', 'NnEXyAjNe', 3),
(54, 'wbaldetti1h', 'T5vy4i6tGLAS', 1),
(55, 'smcmenamin1i', 'H4f3LV', 2),
(56, 'abeckwith1j', 'mMmedVxpzWgQ', 2),
(57, 'ipirt1k', 'n7WAmF', 2),
(58, 'smacpeake1l', 'FgYe79pMg9', 2),
(59, 'hgoudard1m', '74sKowi', 3),
(60, 'jsneddon1n', '74J0dA', 3),
(61, 'rburnie1o', 'ifZmZ5PoPPh', 3),
(62, 'pwebley1p', 'HQCWHNrj', 2),
(63, 'dgatley1q', 'HqXzfcghjY7', 1),
(64, 'mgouch1r', 'zG4906S9m', 2),
(65, 'jhounsome1s', 'kz9nsZ9irf', 2),
(66, 'cpontin1t', 'XCVqOWVx', 3),
(67, 'skatt1u', 'vSyEda', 1),
(68, 'aklauber1v', 'ff3RuE', 3),
(69, 'lsatterley1w', 'J7EDrYB1myp', 2),
(70, 'amahody1x', 'IcuqZEl6iMP', 2),
(71, 'gcroot1y', 'jbvPbjLCo', 2),
(72, 'mblagden1z', 'tTsWahF4', 1),
(73, 'kcallum20', 'n8r7ynJEW8', 3),
(74, 'npittoli21', 'WOmTNpgPCR', 2),
(75, 'bparradye22', 'j99yEo', 1),
(76, 'ncandie23', 'b3Xin4fmvcuB', 3),
(77, 'rmillan24', 'ulvWQmd4d', 3),
(78, 'acordes25', 'qj3RSIB', 1),
(79, 'mchisnell26', 'MOIjO0Gl', 1),
(80, 'kcanas27', 'a0u00eF', 2),
(81, 'jkarpmann28', 'PFycpxpeeH', 2),
(82, 'ncahani29', 'whDjRo', 1),
(83, 'sviggars2a', 'ryfKGv4', 1),
(84, 'soslar2b', 'tP3Yty7ooGGs', 3),
(85, 'jaldis2c', 'UzamuQeIl2', 1),
(86, 'feller2d', 'uGMBwBVV', 2),
(87, 'calbinson2e', 'KzxQ4tpr', 3),
(88, 'csambell2f', 'lKOabkKUhk', 3),
(89, 'ahamshaw2g', 'PDExTBorJ', 3),
(90, 'rfoldes2h', 'NkuDWODsfQyl', 1),
(91, 'olyddyard2i', 'zOjqO6nexgg5', 3),
(92, 'stixall2j', 'q9Kp13', 1),
(93, 'nshane2k', 'osAkwE', 3),
(94, 'ewittleton2l', 'rfldK5R4GG', 2),
(95, 'pchristall2m', 'WtMJjuzvlfd', 3),
(96, 'pmckiddin2n', 'Egvg2JDXGo', 2),
(97, 'ldebanke2o', '4BF0FV78z', 3),
(98, 'aderks2p', 'tl5WjDzrwMC', 1),
(99, 'hdesporte2q', 'vWaR4oSd1AGW', 2),
(100, 'jderill2r', 'ELhlAEdT', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campos`
--
ALTER TABLE `campos`
  ADD PRIMARY KEY (`id_campos`),
  ADD KEY `id_clientes` (`id_clientes`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `humedad`
--
ALTER TABLE `humedad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_localizacion` (`id_localizacion`);

--
-- Indices de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD PRIMARY KEY (`id_localizacion`);

--
-- Indices de la tabla `luminosidad`
--
ALTER TABLE `luminosidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_localizacion` (`id_localizacion`);

--
-- Indices de la tabla `puntos_clave`
--
ALTER TABLE `puntos_clave`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_campo` (`id_campo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `salinidad`
--
ALTER TABLE `salinidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_localizacion` (`id_localizacion`);

--
-- Indices de la tabla `sondas`
--
ALTER TABLE `sondas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mac` (`mac`),
  ADD KEY `id_localizacion` (`id_localizacion`),
  ADD KEY `id_campo` (`id_campo`);

--
-- Indices de la tabla `temperatura`
--
ALTER TABLE `temperatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_localizacion` (`id_localizacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD UNIQUE KEY `nombre_usuario_2` (`nombre_usuario`),
  ADD KEY `nombre_usuario` (`nombre_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campos`
--
ALTER TABLE `campos`
  ADD CONSTRAINT `campos_ibfk_1` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `humedad`
--
ALTER TABLE `humedad`
  ADD CONSTRAINT `humedad_ibfk_1` FOREIGN KEY (`id_localizacion`) REFERENCES `localizacion` (`id_localizacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `luminosidad`
--
ALTER TABLE `luminosidad`
  ADD CONSTRAINT `luminosidad_ibfk_1` FOREIGN KEY (`id_localizacion`) REFERENCES `localizacion` (`id_localizacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `puntos_clave`
--
ALTER TABLE `puntos_clave`
  ADD CONSTRAINT `puntos_clave_ibfk_1` FOREIGN KEY (`id_campo`) REFERENCES `campos` (`id_campos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `puntos_clave_ibfk_2` FOREIGN KEY (`id`) REFERENCES `localizacion` (`id_localizacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salinidad`
--
ALTER TABLE `salinidad`
  ADD CONSTRAINT `salinidad_ibfk_1` FOREIGN KEY (`id_localizacion`) REFERENCES `localizacion` (`id_localizacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sondas`
--
ALTER TABLE `sondas`
  ADD CONSTRAINT `sondas_ibfk_1` FOREIGN KEY (`id_campo`) REFERENCES `campos` (`id_campos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sondas_ibfk_2` FOREIGN KEY (`id_localizacion`) REFERENCES `localizacion` (`id_localizacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `temperatura`
--
ALTER TABLE `temperatura`
  ADD CONSTRAINT `temperatura_ibfk_1` FOREIGN KEY (`id_localizacion`) REFERENCES `localizacion` (`id_localizacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

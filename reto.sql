-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2021 a las 04:44:28
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `nombre_corredor` varchar(30) NOT NULL,
  `pista_id` tinyint(3) NOT NULL,
  `carro_id` tinyint(3) NOT NULL,
  `recorrido` smallint(200) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `puesto` tinyint(2) NOT NULL,
  `veces_ganadas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `nombre_corredor`, `pista_id`, `carro_id`, `recorrido`, `codigo`, `puesto`, `veces_ganadas`) VALUES
(2001, '1', 1, 1, 2400, '6405129738', 2, 1),
(2002, '2', 1, 2, 2700, '6405129738', 3, 0),
(2003, '3', 1, 3, 2400, '6405129738', 1, 1),
(2004, '4', 1, 4, 2700, '6405129738', 4, 0),
(2005, '1', 3, 1, 1400, '6490751823', 1, 2),
(2006, '2', 3, 2, 1400, '6490751823', 4, 3),
(2007, '3', 3, 3, 1500, '6490751823', 2, 0),
(2008, '4', 3, 4, 1400, '6490751823', 3, 0),
(2009, '1', 3, 1, 1500, '8907264153', 3, 2),
(2010, '2', 3, 2, 1800, '8907264153', 1, 3),
(2011, '3', 3, 3, 1400, '8907264153', 2, 0),
(2012, '4', 3, 4, 1500, '8907264153', 4, 0),
(2013, '5', 3, 5, 1500, '8907264153', 5, 1),
(2014, '1', 5, 1, 2600, '1357820496', 2, 1),
(2015, '2', 5, 2, 2500, '1357820496', 1, 1),
(2016, '3', 5, 3, 2500, '1357820496', 4, 1),
(2017, '4', 5, 4, 2100, '1357820496', 0, 1),
(2018, '5', 5, 5, 2700, '1357820496', 3, 1),
(2019, '6', 5, 6, 2300, '1357820496', 0, 0),
(2020, '1', 4, 1, 2100, '2964870531', 4, 3),
(2021, '2', 4, 2, 2300, '2964870531', 2, 1),
(2022, '3', 4, 3, 2200, '2964870531', 3, 0),
(2023, '4', 4, 4, 2200, '2964870531', 5, 0),
(2024, '5', 4, 5, 1800, '2964870531', 0, 0),
(2025, '6', 4, 6, 2400, '2964870531', 1, 1),
(2026, '1', 3, 1, 1400, '4850723961', 4, 2),
(2027, '2', 3, 2, 1700, '4850723961', 1, 3),
(2028, '3', 3, 3, 1500, '4850723961', 2, 0),
(2029, '4', 3, 4, 1400, '4850723961', 3, 0),
(2030, '5', 3, 5, 1800, '4850723961', 5, 1),
(2031, '1', 2, 1, 1000, '9726084531', 3, 1),
(2032, '2', 2, 2, 900, '9726084531', 1, 1),
(2033, '3', 2, 3, 600, '9726084531', 4, 0),
(2034, '4', 2, 4, 1000, '9726084531', 2, 1),
(2035, '1', 2, 1, 800, '6178430925', 1, 1),
(2036, '2', 2, 2, 800, '6178430925', 2, 1),
(2037, '3', 2, 3, 1100, '6178430925', 4, 0),
(2038, '4', 2, 4, 700, '6178430925', 3, 1),
(2039, '1', 4, 1, 2100, '3714206598', 4, 3),
(2040, '2', 4, 2, 2500, '3714206598', 1, 1),
(2041, '3', 4, 3, 2400, '3714206598', 2, 0),
(2042, '4', 4, 4, 2900, '3714206598', 6, 0),
(2043, '5', 4, 5, 2100, '3714206598', 3, 0),
(2044, '1', 4, 1, 2100, '1096857234', 1, 3),
(2045, '2', 4, 2, 2400, '1096857234', 4, 1),
(2046, '3', 4, 3, 2100, '1096857234', 2, 0),
(2047, '4', 4, 4, 2200, '1096857234', 3, 0),
(2048, '5', 4, 5, 2100, '1096857234', 5, 0),
(2049, '1', 3, 1, 1400, '5974823610', 1, 2),
(2050, '2', 3, 2, 1400, '5974823610', 2, 3),
(2051, '3', 3, 3, 1500, '5974823610', 3, 0),
(2052, '4', 3, 4, 1400, '5974823610', 5, 0),
(2053, '5', 3, 5, 1600, '5974823610', 4, 1),
(2054, '6', 3, 6, 1400, '5974823610', 6, 0),
(2055, '1', 5, 1, 2300, '5298631740', 0, 1),
(2056, '2', 5, 2, 2400, '5298631740', 2, 1),
(2057, '3', 5, 3, 2600, '5298631740', 3, 1),
(2058, '4', 5, 4, 2700, '5298631740', 1, 1),
(2059, '1', 5, 1, 2600, '0693258147', 1, 1),
(2060, '2', 5, 2, 2400, '0693258147', 2, 1),
(2061, '3', 5, 3, 2400, '0693258147', 4, 1),
(2062, '4', 5, 4, 2400, '0693258147', 3, 1),
(2063, '1', 4, 1, 2100, '1830479265', 1, 3),
(2064, '2', 4, 2, 2300, '1830479265', 2, 1),
(2065, '3', 4, 3, 2300, '1830479265', 3, 0),
(2066, '4', 4, 4, 2200, '1830479265', 4, 0),
(2067, '5', 4, 5, 2200, '1830479265', 5, 0),
(2068, '1', 5, 1, 600, '9127450683', 0, 1),
(2069, '2', 5, 2, 100, '9127450683', 0, 1),
(2070, '3', 5, 3, 200, '9127450683', 0, 1),
(2071, '4', 5, 4, 500, '9127450683', 0, 1),
(2072, '5', 5, 5, 500, '9127450683', 0, 1),
(2073, '1', 3, 1, 1400, '7541639820', 2, 2),
(2074, '2', 3, 2, 1500, '7541639820', 1, 3),
(2075, '1', 1, 1, 2400, '6274081953', 1, 1),
(2076, '2', 1, 2, 2500, '6274081953', 2, 0),
(2077, '3', 1, 3, 2100, '6274081953', 0, 0),
(2078, '4', 1, 4, 2800, '6274081953', 3, 0),
(2079, '5', 1, 5, 2800, '6274081953', 4, 0),
(2080, '6', 1, 6, 2300, '6274081953', 5, 0),
(2081, '1', 3, 1, 1400, '2436150789', 4, 2),
(2082, '2', 3, 2, 1500, '2436150789', 5, 3),
(2083, '3', 3, 3, 1400, '2436150789', 6, 0),
(2084, '4', 3, 4, 1800, '2436150789', 2, 0),
(2085, '5', 3, 5, 1600, '2436150789', 1, 1),
(2086, '6', 3, 6, 1400, '2436150789', 3, 0),
(2087, '1', 4, 1, 2100, '9072465813', 1, 3),
(2088, '2', 4, 2, 2600, '9072465813', 4, 1),
(2089, '3', 4, 3, 2200, '9072465813', 2, 0),
(2090, '4', 4, 4, 2500, '9072465813', 3, 0),
(2091, '5', 4, 5, 2400, '9072465813', 6, 0),
(2092, '1', 2, 1, 1100, '1976534208', 5, 1),
(2093, '2', 2, 2, 800, '1976534208', 2, 1),
(2094, '3', 2, 3, 600, '1976534208', 3, 0),
(2095, '4', 2, 4, 600, '1976534208', 1, 1),
(2096, '5', 2, 5, 700, '1976534208', 4, 0),
(2097, '1', 5, 1, 2600, '9138402567', 5, 1),
(2098, '2', 5, 2, 2500, '9138402567', 2, 1),
(2099, '3', 5, 3, 2500, '9138402567', 7, 1),
(2100, '4', 5, 4, 2800, '9138402567', 3, 1),
(2101, '5', 5, 5, 2600, '9138402567', 1, 1),
(2102, '6', 5, 6, 2500, '9138402567', 4, 0),
(2103, '1', 5, 1, 2600, '0964257831', 4, 1),
(2104, '2', 5, 2, 2500, '0964257831', 3, 1),
(2105, '3', 5, 3, 2800, '0964257831', 1, 1),
(2106, '4', 5, 4, 2500, '0964257831', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id` tinyint(3) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id`, `direccion`) VALUES
(1, '../../Assets/img/carro1.png'),
(2, '../../Assets/img/carro2.png'),
(3, '../../Assets/img/carro3.png'),
(4, '../../Assets/img/carro4.png'),
(5, '../../Assets/img/carro5.png'),
(6, '../../Assets/img/carro6.png'),
(7, '../../Assets/img/car_7.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corredor`
--

CREATE TABLE `corredor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `corredor`
--

INSERT INTO `corredor` (`id`, `nombre`, `pais`, `edad`) VALUES
(1, 'Maracas', 'Colombia', 52),
(2, 'Jorge', 'Colombia', 18),
(3, 'Silviata', 'Venezuela', 25),
(4, 'Ramiro', 'Uruguay', 35),
(5, 'Carlos', 'Colombia', 28),
(6, 'Beatriz', 'Colombia', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pista`
--

CREATE TABLE `pista` (
  `id` tinyint(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `distancia` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pista`
--

INSERT INTO `pista` (`id`, `nombre`, `distancia`) VALUES
(1, 'Panama', 2210),
(2, 'Monteria', 510),
(3, 'Cali', 1400),
(4, 'Cartagena', 2090),
(5, 'Medellin', 2340);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pista_id` (`pista_id`),
  ADD KEY `carro_id` (`carro_id`);

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `corredor`
--
ALTER TABLE `corredor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pista`
--
ALTER TABLE `pista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2107;

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `corredor`
--
ALTER TABLE `corredor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pista`
--
ALTER TABLE `pista`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`pista_id`) REFERENCES `pista` (`id`),
  ADD CONSTRAINT `carrera_ibfk_2` FOREIGN KEY (`carro_id`) REFERENCES `carro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

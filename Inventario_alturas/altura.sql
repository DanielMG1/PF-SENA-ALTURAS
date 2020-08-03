-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2020 a las 18:00:22
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `altura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(230) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(230) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(230) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`, `foto`) VALUES
(4, 'Lasos', 'herramientas utilizadas para alturas', ''),
(11, 'Pastel', 'utilizado para alturas', ''),
(12, 'Pastel', 'utilizado para alturas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `cargo` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `entidad` text COLLATE utf8_spanish_ci NOT NULL,
  `anio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`id`, `nombre`, `telefono`, `cargo`, `documento`, `email`, `ciudad`, `direccion`, `entidad`, `anio`) VALUES
(5, 'Arturo Torres', '243453434', 'Instructor', 32454344, 'arturo@gmail.com', 'Manizales', 'cr6523654', 'SENA', 2016);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tool`
--

CREATE TABLE `tool` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `longitud` int(11) NOT NULL,
  `serie` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `acomulado` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `entidad_cert` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_fbc` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `norma_cert` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `limite_vid` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_cate_her` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tool`
--

INSERT INTO `tool` (`id`, `nombre`, `marca`, `longitud`, `serie`, `descripcion`, `acomulado`, `foto`, `entidad_cert`, `fecha_fbc`, `norma_cert`, `limite_vid`, `id_cate_her`) VALUES
(21, 'Lasos', 'Textil', 42356, 56356364, 'tipo de Cuerda ', 34, '', 'Casass', '2020-06-19', 'Colombia', '23', NULL),
(27, 'Cascos', 'lorems', 12, 2334, 'Material de lorem', 23, 'photo4927207721040717909.jpg', 'Casa', '2020-07-25', 'Caldas', '23', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tool`
--
ALTER TABLE `tool`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cate_her` (`id_cate_her`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tool`
--
ALTER TABLE `tool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tool`
--
ALTER TABLE `tool`
  ADD CONSTRAINT `tool_ibfk_1` FOREIGN KEY (`id_cate_her`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

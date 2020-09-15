-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-09-2020 a las 21:40:46
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

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
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(230) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(230) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(230) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'Cascos', 'Tipo de laso', ''),
(2, 'Correas', 'Riatas y correas', ''),
(3, 'Ganchos', 'Los ganchos', NULL),
(4, 'Otros ganchos', 'los ganchos', NULL),
(5, 'Otros ganchos', 'los ganchos', NULL),
(6, 'Correas', 'las correas', NULL),
(7, 'arnes', 'arnes', NULL),
(8, 'Rescate', 'Equipos de rescate', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

CREATE TABLE `herramientas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `longitud` int(11) NOT NULL,
  `serie` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `entidad_cert` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_fbc` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `norma_cert` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `vencimiento` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`id`, `nombre`, `marca`, `longitud`, `serie`, `descripcion`, `cantidad`, `foto`, `entidad_cert`, `fecha_fbc`, `norma_cert`, `vencimiento`) VALUES
(2, 'Serrucho', 'stanley', 10, 3333, 'lso serruchos', 8, NULL, 'ISO9000', '2020-09-16', 'ISO9001', '2020-09-10'),
(6, 'Martillo', 'stanley', 10, 123, 'Los martillos', 6, NULL, 'ISO9000', '2020-09-09', 'ISO9000', '2020-09-20'),
(7, 'Ganchos', 'stanley', 2, 3333, 'Los ganchos', 2, NULL, 'ISO9000', '2020-09-16', 'ISO9000', '2020-09-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `herramienta_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `devuelto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id`, `fecha`, `herramienta_id`, `cantidad`, `usuario_id`, `devuelto`) VALUES
(2, '2020-09-03 00:00:00', 2, 10, 1, 1),
(4, '2020-09-09 00:00:00', 6, 4, 2, 1),
(5, '2020-09-22 00:00:00', 2, 3, 6, 1),
(8, '2020-09-15 00:00:00', 2, 7, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `rol_id`, `password`) VALUES
(1, 'Daniel', 'daniel@mail.com', 1, '$2y$10$TNkKcN3aryXBOzE6vbjiA.8Uc109rT0HR1N8ij1hbhOaZaoRo6rpW'),
(2, 'Leonardo', 'leo@mail.com', 2, '$2y$12$NGO4H.2W/sIvlzW.AxtFj.c4X8CONFUa0wft2E8GvP6oR/02D24lG'),
(3, 'Diana', 'diana@mail.com', 2, '$2y$10$TNkKcN3aryXBOzE6vbjiA.8Uc109rT0HR1N8ij1hbhOaZaoRo6rpW'),
(6, 'Andrea', 'andre@mail.com', 2, '$2y$12$wlG5NQam3CHaKC8qvEuZVeNoNeYYCEXx69CoMzv1gQpGRqKeWKZTO'),
(11, 'Luisa', 'lulu@mail.com', 2, '$2y$12$GFpb4WjryTTmrMzCa698KudOFscxxuPQvcecTb5nBDSougekW0u4C'),
(12, 'Sebastian', 'seabs@mail.com', 1, '$2y$12$xmKJcIN3D6MKEcyCAIdry.yGvn5tKQD2/rWIyfodZfbZM9xcbIw56'),
(15, 'User', 'user@mail.com', 2, '$2y$12$Jt6r2O6u0utY3G4KZ27u/uFlrSg0CRUYIvprmnyHs38NKw0GWlUzG'),
(16, 'User1', 'user1@mail.com', 2, '$2y$12$QVn6WdS2FExzCAYcjBUccuCMeT/sQFbBs2ym7UNygCAsnPNKzm7G2'),
(17, 'user2', 'user2@mail.com', 2, '$2y$12$bgOcKSG8DPbPz7gyPmko3OouvuBQPt7gd/8OndAdUXTEXRzVMIh4a'),
(19, 'User3', 'user3@mail.com', 2, '$2y$12$vS.waa9m2lUdVsuP5mr0JexW3erKyTq3jaD1eObMEArighpwQClM6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `herramienta_id` (`herramienta_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`herramienta_id`) REFERENCES `herramientas` (`id`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

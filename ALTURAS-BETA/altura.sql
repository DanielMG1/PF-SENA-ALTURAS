-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2020 a las 18:15:10
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
(10, 'Arnés', 'Utilizado en el área de alturas', NULL),
(11, 'Poleas', 'Equipo Utilizado en el area de alturas', NULL),
(13, 'Lasos', 'Equipo utilizado en el área de alturas \r\n', NULL),
(14, 'Guantes', 'Equipo de alturas Requerido', NULL);

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
(1, 'Arnes', 'textil', 12, 24243243, 'lowrnfasklf', 12, NULL, 'alturas', '', '123213', '2020-08-14'),
(6, 'Cuerda Vida', 'textil', 12, 24243243, 'obg{log{o', 3, NULL, 'alturas', '2020-08-30', '123213', '2020-07-27'),
(7, 'Cascos', 'Mors', 23, 123424, 'lorems sinpu', 23, NULL, 'ausgkjbasd', '2020-08-14', 'saf', '2020-08-07'),
(8, 'Polea', 'Alturas', 12, 0, 'adstfdashg', 2, NULL, 'caesrsyd', '2020-08-12', 'cc45', '2020-08-27'),
(9, 'Lasos de', 'alturas', 12, 24243243, 'Equipo utilizado en alturas', 3, NULL, 'alturas', '2020-09-10', '123213', '2020-09-03'),
(10, 'Ganchos', 'alturas', 12, 8743, 'Equipo utilizado en el área de alturas', 4, NULL, 'Sena', '2020-09-04', 'jhdfj647', '2020-09-01'),
(12, 'Herramienta altura', 'alturas ', 653, 67534, 'Equipo de alturas', 5, NULL, '45trr6', '2020-09-04', 'hgds677', '2020-09-11');

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
(9, '2020-09-03 00:00:00', 8, 1, 2, 0),
(12, '2020-09-17 00:00:00', 9, 20, 11, 1),
(16, '2020-09-05 00:00:00', 1, 5, 6, 0),
(17, '2020-09-05 00:00:00', 6, 4, 15, 0);

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
(2, 'Sebastian', 'sebasco@gmail.co', 1, '$2y$12$y82MsouFa0sULKaml3GEROmFX.dIph91D8yxdWTpapVV/EbmwsBLa'),
(6, 'Prueba3', 'prueba3@mail.com', 2, '$2y$12$Yj7xcYkVTHGFhBWjrOMmCe3BUB7SGDE0aOf5dPjzlEvUSNtNlViBm'),
(10, 'Prueba6', 'prueba6@mail.com', 2, '$2y$12$AnLXV/cVcqfh0hmKZQwqyeK6dd/FZ3dlHfNPp9h2B4/ldoO9dvO3O'),
(11, 'Prueba7', 'prueba7@mail.com', 2, '$2y$12$YTH7XOBz/o0D2ix6eXKL..1ZNOtwdVScF9dFYmGbxY3pFYzthmbtK'),
(12, 'prueba8', 'prueba8@mail.com', 2, '$2y$12$V9/XysPsm5FngGWRbgoi8usvkvUOPyaXzjdJu6PXuV/wU1ivyoxjW'),
(14, 'Pruba8', 'prueba9@mail.co', 1, '$2y$12$b9/RUyJqzOw9OH.HKBjtnOxS.QL4yZTYFtaYYBrpKpZ4.qLrcXV9a'),
(15, 'Prueba10', 'prueba10@mail.com', 2, '$2y$12$/VtsfdkNq1Ksb0LehBR5K.BsMID8qlDUP5lWprjx1D9f77B3dhKYS'),
(16, 'Prueba11', 'prueba11@mail.com', 2, '$2y$12$NwHs.KWFZK4G.przgl3/Cu/xbITszbf.O4wfL1J.rRehzeyU1XDya'),
(17, 'Prueba12', 'prueba12@mail.co', 2, '$2y$12$No.HZmI33vySzDUBSea6e.NEroZicticXZJ/YUEVvjY9kCb2kM6Xe'),
(18, 'Prueba13', 'prueba13@mail.co', 2, '$2y$12$SgJB/Fmyl82pW0lCuVn3GOQg5ZFjkfXlW0cbQOA1CFdxoqkjvTI2m');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`herramienta_id`) REFERENCES `herramientas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

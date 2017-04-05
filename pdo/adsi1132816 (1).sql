-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2017 a las 14:09:58
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi1132816`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(24) CHARACTER SET latin1 NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `precio`) VALUES
(1, 'Nintendo Switch', 1699000),
(2, 'Lavadora Mabe', 2400000),
(3, 'Tablet Samsung', 900000),
(4, 'Gafas de sol', 220000),
(5, 'Barril de Cerveza', 160000),
(6, 'Martillo', 20000),
(7, 'Secadora Cabello', 75000),
(8, 'Balon de futbol', 90000),
(9, 'Telefono Celular', 140000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatars`
--

CREATE TABLE `avatars` (
  `id` int(11) NOT NULL,
  `name` varchar(16) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `image` varchar(64) COLLATE utf8_bin DEFAULT 'public/imgs/avatar.png',
  `color` varchar(16) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `avatars`
--

INSERT INTO `avatars` (`id`, `name`, `gender`, `image`, `color`) VALUES
(2, 'Luisa Fernanda', 'Femenino', 'public/imgs/avatars/1490203394.png', '#fbf995');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `articulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `cliente_id`, `articulo_id`) VALUES
(2, 1, 1),
(4, 2, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copia_articulos`
--

CREATE TABLE `copia_articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(24) CHARACTER SET latin1 NOT NULL DEFAULT 'televisor',
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `copia_articulos`
--

INSERT INTO `copia_articulos` (`id`, `nombre`, `precio`) VALUES
(1, 'chocolatina', 500),
(3, 'televisor', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `documento` bigint(20) NOT NULL,
  `nombres` varchar(32) COLLATE utf8_bin NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direccion` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `ciudad` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT 'springfield',
  `correo` varchar(32) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(64) COLLATE utf8_bin NOT NULL,
  `rol` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `documento`, `nombres`, `telefono`, `direccion`, `ciudad`, `correo`, `contrasena`, `rol`) VALUES
(1, 75000001, 'Jeremias Springfield', 8800011, 'Calle 100 con 23', 'springfield', 'jeremias@mail.com', '21232f297a57a5a743894a0e4a801fc3', 'administrador'),
(2, 75000002, 'Homero Simpson', 8800022, 'Calle 100 con 100', 'springfield', 'homero@mail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(3, 75000003, 'Bob Patiño', 8800033, 'Carrera 23 con 89', 'springfield', 'bob@mail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(4, 75000004, 'lisa simpson', 8800044, 'Calle 100', 'springfield', 'lisa@mail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `articulo_id` (`articulo_id`);

--
-- Indices de la tabla `copia_articulos`
--
ALTER TABLE `copia_articulos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `copia_articulos`
--
ALTER TABLE `copia_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

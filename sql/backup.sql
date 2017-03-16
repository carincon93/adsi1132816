-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2017 a las 13:35:55
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
  `nombre` varchar(24) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `documento` bigint(20) NOT NULL,
  `nombres` varchar(32) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direccion` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `documento`, `nombres`, `telefono`, `direccion`) VALUES
(1, 75000001, 'Jeremias Springfield', 8800011, 'Calle 100 con 23'),
(2, 84000401, 'Homero Simpson', 8800033, 'Calle 100 con 100'),
(3, 65000011, 'Bob Patiño', 88066541, 'Carrera 23 con 89');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `articulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nombre` varchar(24) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `copia_articulos`
--

INSERT INTO `copia_articulos` (`id`, `nombre`, `precio`) VALUES
(1, 'Nintendo Switch', 1699000),
(2, 'Lavadora Mabe', 2400000),
(3, 'Tablet Samsung', 900000),
(4, 'Gafas de sol', 220000),
(5, 'Barril de Cerveza', 160000),
(6, 'Martillo', 20000),
(7, 'Secadora Cabello', 75000),
(8, 'Balon de futbol', 90000),
(9, 'Telefono Celular', 140000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `copia_articulos`
--
ALTER TABLE `copia_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
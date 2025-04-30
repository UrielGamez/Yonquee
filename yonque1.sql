-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2025 a las 22:53:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yonque1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diferenciales`
--

CREATE TABLE `diferenciales` (
  `id_diferencial` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_modelo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `diferenciales`
--

INSERT INTO `diferenciales` (`id_diferencial`, `tipo`, `id_modelo`) VALUES
(1, 'Tracción delantera', 1),
(2, 'Tracción trasera', 2),
(3, '4x4', 3),
(5, 'Tracción trasera', 4),
(6, '4x4', 5),
(7, 'Tracción delantera', 6),
(8, 'Tracción delantera', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `id_parte` int(11) DEFAULT NULL,
  `id_motor` int(11) DEFAULT NULL,
  `id_transmision` int(11) DEFAULT NULL,
  `id_suspension` int(11) DEFAULT NULL,
  `id_diferencial` int(11) DEFAULT NULL,
  `id_modelo` int(11) NOT NULL,
  `estado` enum('Nuevo','Usado','Reconstruido') NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `id_parte`, `id_motor`, `id_transmision`, `id_suspension`, `id_diferencial`, `id_modelo`, `estado`, `cantidad`, `precio`) VALUES
(1, 1, 3, 4, 2, 3, 1, 'Nuevo', 10, 1500.00),
(2, 2, NULL, NULL, NULL, NULL, 2, 'Usado', 5, 1200.00),
(3, 3, NULL, NULL, NULL, NULL, 3, 'Reconstruido', 7, 500.00),
(4, 4, NULL, NULL, NULL, NULL, 4, 'Nuevo', 3, 3500.00),
(5, 5, NULL, NULL, NULL, NULL, 5, 'Usado', 4, 2200.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`) VALUES
(3, 'Chevrolet'),
(2, 'Ford'),
(5, 'Honda'),
(4, 'Nissan'),
(1, 'Toyota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id_modelo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `anio` int(11) NOT NULL,
  `id_marca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id_modelo`, `nombre`, `anio`, `id_marca`) VALUES
(1, 'Corolla', 2018, 1),
(2, 'Camry', 2020, 1),
(3, 'F-150', 2017, 2),
(4, 'Mustang', 2019, 2),
(5, 'Silverado', 2018, 3),
(6, 'Altima', 2019, 4),
(7, 'Civic', 2021, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_componentes`
--

CREATE TABLE `modelo_componentes` (
  `id_modelo_componete` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `id_transmision` int(11) NOT NULL,
  `id_diferencial` int(11) NOT NULL,
  `id_suspension` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modelo_componentes`
--

INSERT INTO `modelo_componentes` (`id_modelo_componete`, `id_modelo`, `id_motor`, `id_transmision`, `id_diferencial`, `id_suspension`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 2, 2, 2, 2, 2),
(3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motores`
--

CREATE TABLE `motores` (
  `id_motor` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `cilindrada` varchar(50) DEFAULT NULL,
  `hp` int(11) DEFAULT NULL,
  `id_modelo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `motores`
--

INSERT INTO `motores` (`id_motor`, `tipo`, `cilindrada`, `hp`, `id_modelo`) VALUES
(1, 'Gasolina', '2.0L', 168, 1),
(2, 'Gasolina', '2.5L', 203, 2),
(3, 'Gasolina', '5.0L', 395, 4),
(4, 'Diesel', '3.0L', 277, 5),
(5, 'Gasolina', '2.5L', 188, 6),
(6, 'Gasolina', '1.5L', 180, 7),
(7, 'Gasolina', '4.2L', 202, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes`
--

CREATE TABLE `partes` (
  `id_parte` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `partes`
--

INSERT INTO `partes` (`id_parte`, `nombre`, `descripcion`) VALUES
(1, 'Batería', 'Batería de 12V para automóvil'),
(2, 'Faro delantero', 'Faro delantero LED con proyector'),
(3, 'Filtro de aire', 'Filtro de aire de alto rendimiento'),
(4, 'Alternador', 'Alternador de 120 amperios'),
(5, 'Radiador', 'Radiador de aluminio para sistema de enfriamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suspensiones`
--

CREATE TABLE `suspensiones` (
  `id_suspension` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_modelo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `suspensiones`
--

INSERT INTO `suspensiones` (`id_suspension`, `tipo`, `id_modelo`) VALUES
(1, 'Independiente', 1),
(2, 'MacPherson', 2),
(3, 'Eje rígido', 3),
(4, 'Deportiva', 4),
(5, 'Neumática', 5),
(6, 'Independiente', 6),
(7, 'MacPherson', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transmisiones`
--

CREATE TABLE `transmisiones` (
  `id_transmision` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_modelo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `transmisiones`
--

INSERT INTO `transmisiones` (`id_transmision`, `tipo`, `id_modelo`) VALUES
(1, 'Automática', 1),
(2, 'Manual', 1),
(3, 'Automática', 2),
(4, 'Automática', 3),
(5, 'Manual', 4),
(6, 'CVT', 6),
(7, 'CVT', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diferenciales`
--
ALTER TABLE `diferenciales`
  ADD PRIMARY KEY (`id_diferencial`),
  ADD KEY `id_modelo` (`id_modelo`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `id_parte` (`id_parte`),
  ADD KEY `id_motor` (`id_motor`),
  ADD KEY `id_transmision` (`id_transmision`),
  ADD KEY `id_suspension` (`id_suspension`),
  ADD KEY `id_diferencial` (`id_diferencial`),
  ADD KEY `id_modelo` (`id_modelo`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id_modelo`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `modelo_componentes`
--
ALTER TABLE `modelo_componentes`
  ADD PRIMARY KEY (`id_modelo_componete`,`id_modelo`,`id_motor`,`id_transmision`,`id_diferencial`,`id_suspension`),
  ADD KEY `id_modelo` (`id_modelo`),
  ADD KEY `id_motor` (`id_motor`),
  ADD KEY `id_transmision` (`id_transmision`),
  ADD KEY `id_diferencial` (`id_diferencial`),
  ADD KEY `id_suspension` (`id_suspension`);

--
-- Indices de la tabla `motores`
--
ALTER TABLE `motores`
  ADD PRIMARY KEY (`id_motor`),
  ADD KEY `id_modelo` (`id_modelo`);

--
-- Indices de la tabla `partes`
--
ALTER TABLE `partes`
  ADD PRIMARY KEY (`id_parte`);

--
-- Indices de la tabla `suspensiones`
--
ALTER TABLE `suspensiones`
  ADD PRIMARY KEY (`id_suspension`),
  ADD KEY `id_modelo` (`id_modelo`);

--
-- Indices de la tabla `transmisiones`
--
ALTER TABLE `transmisiones`
  ADD PRIMARY KEY (`id_transmision`),
  ADD KEY `id_modelo` (`id_modelo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diferenciales`
--
ALTER TABLE `diferenciales`
  ADD CONSTRAINT `diferenciales_ibfk_1` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id_modelo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_parte`) REFERENCES `partes` (`id_parte`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`id_motor`) REFERENCES `motores` (`id_motor`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_3` FOREIGN KEY (`id_transmision`) REFERENCES `transmisiones` (`id_transmision`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_4` FOREIGN KEY (`id_suspension`) REFERENCES `suspensiones` (`id_suspension`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_5` FOREIGN KEY (`id_diferencial`) REFERENCES `diferenciales` (`id_diferencial`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_6` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id_modelo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`) ON DELETE CASCADE;

--
-- Filtros para la tabla `modelo_componentes`
--
ALTER TABLE `modelo_componentes`
  ADD CONSTRAINT `modelo_componentes_ibfk_1` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id_modelo`) ON DELETE CASCADE,
  ADD CONSTRAINT `modelo_componentes_ibfk_2` FOREIGN KEY (`id_motor`) REFERENCES `motores` (`id_motor`) ON DELETE CASCADE,
  ADD CONSTRAINT `modelo_componentes_ibfk_3` FOREIGN KEY (`id_transmision`) REFERENCES `transmisiones` (`id_transmision`) ON DELETE CASCADE,
  ADD CONSTRAINT `modelo_componentes_ibfk_4` FOREIGN KEY (`id_diferencial`) REFERENCES `diferenciales` (`id_diferencial`) ON DELETE CASCADE,
  ADD CONSTRAINT `modelo_componentes_ibfk_5` FOREIGN KEY (`id_suspension`) REFERENCES `suspensiones` (`id_suspension`) ON DELETE CASCADE;

--
-- Filtros para la tabla `motores`
--
ALTER TABLE `motores`
  ADD CONSTRAINT `motores_ibfk_1` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id_modelo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `suspensiones`
--
ALTER TABLE `suspensiones`
  ADD CONSTRAINT `suspensiones_ibfk_1` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id_modelo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `transmisiones`
--
ALTER TABLE `transmisiones`
  ADD CONSTRAINT `transmisiones_ibfk_1` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id_modelo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2022 a las 06:46:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yaxja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contaminacion`
--

CREATE TABLE `contaminacion` (
  `codigoAgua` int(10) NOT NULL,
  `nombreAgua` varchar(20) NOT NULL,
  `cuerpoAgua` varchar(20) NOT NULL,
  `nivelContaminativo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contaminacion`
--

INSERT INTO `contaminacion` (`codigoAgua`, `nombreAgua`, `cuerpoAgua`, `nivelContaminativo`) VALUES
(1, 'Lago Calima', 'Lago', 30),
(2, 'Mar Caribe', 'Mar', 27),
(3, 'Rio Magdalena', 'Rio', 23),
(4, 'Oceano Pacifico', 'Oceano', 28),
(5, 'Ocenao Atlántico', 'Oceano', 32),
(6, 'Rio Cali', 'Rio', 12),
(7, 'Rio Pance', 'Rio', 27),
(8, 'Rio Juanchito', 'Rio', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmPassword` varchar(20) NOT NULL,
  `telefono` int(15) NOT NULL,
  `fechaCumpleaños` date NOT NULL,
  `tipoUsuario` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `username`, `password`, `confirmPassword`, `telefono`, `fechaCumpleaños`, `tipoUsuario`) VALUES
('Andrés Felipe', 'Medina Díaz', 'anfeli201111@gmail.com', 'Anfeli52', '123456789', '123456789', 2147483647, '2006-01-06', 'admin'),
('Andrés Felipe', 'Medina Díaz', 'anfelime@gmail.com', 'P4iN', '123456789', '123456789', 2147483647, '2006-01-06', 'user'),
('Luis Carlos', 'Calderón Ríos', 'lccalderon1218@gmail.com', 'Pock', 'soymarica', 'soymarica', 2147483647, '2006-12-18', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contaminacion`
--
ALTER TABLE `contaminacion`
  ADD PRIMARY KEY (`codigoAgua`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contaminacion`
--
ALTER TABLE `contaminacion`
  MODIFY `codigoAgua` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

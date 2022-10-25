-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 06:40:32
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
  `nivelContaminativo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contaminacion`
--

INSERT INTO `contaminacion` (`codigoAgua`, `nombreAgua`, `cuerpoAgua`, `nivelContaminativo`) VALUES
(1, 'Calima, Darien', 'Lago', 34),
(2, 'Pacifico', 'Oceano', 24),
(3, 'Pance', 'Rio', 55),
(4, 'Amazonas', 'Rio', 82),
(5, 'Cauca', 'Rio', 87),
(6, 'Magdalena', 'Rio', 97),
(7, 'La Cocha', 'Lago', 67),
(8, 'Laguna de sonso', 'Lago', 88),
(9, 'Orinoco', 'Rio', 44),
(10, 'Yari', 'Rio', 68),
(11, 'Guainia', 'Rio', 95),
(12, 'Igara Parana', 'Rio', 34),
(13, 'Ariporo', 'Rio', 87),
(14, 'Caribe', 'Mar', 53),
(15, 'Meta', 'Rio', 28),
(16, 'Atlántico', 'Oceano', 42),
(17, 'Putumayo', 'Rio', 15),
(18, 'Guaviare', 'Rio', 21);

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
('Juan Esteban', 'Idrobo Lucio', 'jslucio100@gmail.com', 'Jslucio', 'ronaldinho', 'ronaldinho', 2147483647, '2006-01-08', 'admin'),
('Juan Esteban', 'Soto Potes', 'Juanesteban9283@gmail.com', 'Juanes', 'juanes123', 'juanes123', 2147483647, '2006-05-07', 'admin'),
('Luis Carlos', 'Calderón Ríos', 'lccalderon1218@gmail.com', 'Pock', 'pock123', 'pock123', 2147483647, '2006-12-18', 'admin'),
('Venus Sayuri', 'Almeida Enriquez', 'venusayurialmeida.99@gmail.com', 'Venussa', 'frisby', 'frisby', 2147483647, '2006-09-09', 'user');

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
  MODIFY `codigoAgua` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

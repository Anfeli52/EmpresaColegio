-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 14:54:52
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `CorreoAdmin` varchar(25) NOT NULL,
  `NombreAdmin` varchar(25) NOT NULL,
  `ContraseñaAdmin` varchar(25) NOT NULL,
  `EdadAdmin` int(2) NOT NULL,
  `GeneroAdmin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campaña`
--

CREATE TABLE `campaña` (
  `CodigoCampaña` varchar(20) NOT NULL,
  `NombreCampaña` varchar(25) NOT NULL,
  `DescripcionCampaña` text NOT NULL,
  `ColorCampaña` varchar(25) NOT NULL,
  `LugarCampaña` varchar(25) NOT NULL,
  `FechaCampaña` varchar(25) NOT NULL,
  `correoAdmin` varchar(25) NOT NULL,
  `correoUsuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colorcampaña`
--

CREATE TABLE `colorcampaña` (
  `IdColor` varchar(20) NOT NULL,
  `ColorCampaña` varchar(25) NOT NULL,
  `CodigoCampaña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contaminacion`
--

CREATE TABLE `contaminacion` (
  `IdContaminacion` varchar(25) NOT NULL,
  `NivelContaminacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `IdInformacion` text NOT NULL,
  `CodigoCampaña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacion`
--

CREATE TABLE `recomendacion` (
  `CodigoRecomendacion` varchar(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Informacion` text NOT NULL,
  `CorreoUsuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rio`
--

CREATE TABLE `rio` (
  `CodigoRio` varchar(25) NOT NULL,
  `NombreRio` varchar(25) NOT NULL,
  `IdcuerpodeAgua` varchar(25) NOT NULL,
  `Idcontaminacion` int(20) NOT NULL,
  `correoAdmin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocuerpodeagua`
--

CREATE TABLE `tipocuerpodeagua` (
  `IdCuerpoDeAgua` varchar(25) NOT NULL,
  `TipoCuerpoDeAgua` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CorreoUsuario` varchar(25) NOT NULL,
  `NombreUsuario` varchar(25) NOT NULL,
  `ContraseñaUsuario` varchar(25) NOT NULL,
  `EdadUsuario` int(2) NOT NULL,
  `GeneroUsuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`CorreoAdmin`);

--
-- Indices de la tabla `campaña`
--
ALTER TABLE `campaña`
  ADD PRIMARY KEY (`CodigoCampaña`),
  ADD KEY `campaña-usuario` (`correoUsuario`);

--
-- Indices de la tabla `colorcampaña`
--
ALTER TABLE `colorcampaña`
  ADD PRIMARY KEY (`IdColor`),
  ADD KEY `colorcampaña-campaña` (`CodigoCampaña`);

--
-- Indices de la tabla `contaminacion`
--
ALTER TABLE `contaminacion`
  ADD PRIMARY KEY (`IdContaminacion`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD KEY `Campaña-informacion` (`CodigoCampaña`);

--
-- Indices de la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD PRIMARY KEY (`CodigoRecomendacion`),
  ADD KEY `recomendacion-usuario` (`CorreoUsuario`);

--
-- Indices de la tabla `rio`
--
ALTER TABLE `rio`
  ADD PRIMARY KEY (`CodigoRio`),
  ADD KEY `rio-admin` (`correoAdmin`);

--
-- Indices de la tabla `tipocuerpodeagua`
--
ALTER TABLE `tipocuerpodeagua`
  ADD PRIMARY KEY (`IdCuerpoDeAgua`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CorreoUsuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campaña`
--
ALTER TABLE `campaña`
  ADD CONSTRAINT `campaña-admin` FOREIGN KEY (`CodigoCampaña`) REFERENCES `administrador` (`CorreoAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `campaña-usuario` FOREIGN KEY (`correoUsuario`) REFERENCES `usuario` (`CorreoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `colorcampaña`
--
ALTER TABLE `colorcampaña`
  ADD CONSTRAINT `colorcampaña-campaña` FOREIGN KEY (`CodigoCampaña`) REFERENCES `campaña` (`CodigoCampaña`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD CONSTRAINT `Campaña-informacion` FOREIGN KEY (`CodigoCampaña`) REFERENCES `campaña` (`CodigoCampaña`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD CONSTRAINT `recomendacion-usuario` FOREIGN KEY (`CorreoUsuario`) REFERENCES `usuario` (`CorreoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rio`
--
ALTER TABLE `rio`
  ADD CONSTRAINT `rio-admin` FOREIGN KEY (`correoAdmin`) REFERENCES `administrador` (`CorreoAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rio-contaminacion` FOREIGN KEY (`CodigoRio`) REFERENCES `contaminacion` (`IdContaminacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipocuerpodeagua`
--
ALTER TABLE `tipocuerpodeagua`
  ADD CONSTRAINT `tipoCuerpodeAgua-rio` FOREIGN KEY (`IdCuerpoDeAgua`) REFERENCES `rio` (`CodigoRio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

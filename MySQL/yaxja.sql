-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2023 a las 07:06:29
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `correoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colorcampaña`
--

CREATE TABLE `colorcampaña` (
  `IdColor` varchar(20) NOT NULL,
  `ColorCampaña` varchar(25) NOT NULL,
  `CodigoCampaña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contaminacion`
--

CREATE TABLE `contaminacion` (
  `codigoAgua` varchar(25) NOT NULL,
  `nivelContaminante` int(10) NOT NULL,
  `nombreAgua` varchar(20) NOT NULL,
  `cuerpoAgua` varchar(20) NOT NULL,
  `correoContaminacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contaminacion`
--

INSERT INTO `contaminacion` (`codigoAgua`, `nivelContaminante`, `nombreAgua`, `cuerpoAgua`, `correoContaminacion`) VALUES
('R1500', 34, 'Igara Parana', 'Rio', 'anfeli201111@gmail.com'),
('R1510', 87, 'Ariporo', 'Rio', 'anfeli201111@gmail.com'),
('R1520', 34, 'Calima, Darien', 'Lago', 'venusayurialmeida.99@gmail.com'),
('R1530', 95, 'Guainia', 'Rio', 'venusayurialmeida.99@gmail.com'),
('R1540', 53, 'Caribe', 'Mar', 'venusayurialmeida.99@gmail.com'),
('R1550', 68, 'Yari', 'Rio', 'venusayurialmeida.99@gmail.com'),
('R1560', 28, 'Meta', 'Rio', 'jslucio100@gmail.com'),
('R1570', 42, 'Atlántico', 'Oceano', 'jslucio100@gmail.com'),
('R1580', 15, 'Putumayo', 'Rio', 'alexandracortes@comfandi.edu.co'),
('R1590', 21, 'Guaviare', 'Rio', 'alexandracortes@comfandi.edu.co'),
('R1600', 24, 'Pacifico', 'Oceano', 'alexandracortes@comfandi.edu.co'),
('R1610', 55, 'Pance', 'Rio', 'Juanesteban9283@gmail.com'),
('R1620', 82, 'Amazonas', 'Rio', 'Juanesteban9283@gmail.com'),
('R1630', 87, 'Cauca', 'Rio', 'lccalderon1218@gmail.com'),
('R1640', 97, 'Magdalena', 'Rio', 'lccalderon1218@gmail.com'),
('R1650', 67, 'La Cocha', 'Lago', 'lccalderon1218@gmail.com'),
('R1660', 88, 'Laguna de sonso', 'Lago', 'anfeli201111@gmail.com'),
('R1670', 44, 'Orinoco', 'Rio', 'venusayurialmeida.99@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `IdInformacion` text NOT NULL,
  `CodigoCampaña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacion`
--

CREATE TABLE `recomendacion` (
  `CodigoRecomendacion` varchar(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Informacion` text NOT NULL,
  `CorreoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocuerpodeagua`
--

CREATE TABLE `tipocuerpodeagua` (
  `IdCuerpoDeAgua` varchar(25) NOT NULL,
  `TipoCuerpoDeAgua` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `correo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmPassword` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fechaCumpleaños` date NOT NULL,
  `tipoUsuario` varchar(20) NOT NULL,
  `fotoPerfil` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`correo`, `nombre`, `apellido`, `username`, `password`, `confirmPassword`, `telefono`, `fechaCumpleaños`, `tipoUsuario`, `fotoPerfil`) VALUES
('alexandracortes@comfandi.edu.co', 'Alexandra', 'Cortes', 'Alexacoba', '123456789', '123456789', '1234567890', '1990-01-06', 'user', '../../IMG/FotosPerfil/Anonimo.png'),
('anfeli201111@gmail.com', 'Andrés Felipe', 'Medina Díaz', 'Anfeli52', '1234567890', '1234567890', '3107171889', '2006-01-06', 'admin', '../../IMG/FotosPerfil/Anakin.jpeg'),
('anfelime@gmail.com', 'Andrés Felipe', 'Medina Díaz', 'P4iN', '1234567890', '1234567890', '3107171889', '2006-01-06', 'user', '../../IMG/FotosPerfil/la-paz-nunca-fue-una-opcion-juego-de-ganso-gorra-snapback.jpg'),
('jslucio100@gmail.com', 'Juan Esteban', 'Idrobo Lucio', 'Jslucio', 'ronaldinho', 'ronaldinho', '2147483647', '2006-01-08', 'admin', '../../IMG/FotosPerfil/Anonimo.png'),
('Juanesteban9283@gmail.com', 'Juan Esteban', 'Soto Potes', 'Juanes', 'juanes123', 'juanes123', '2147483647', '2006-05-07', 'admin', '../../IMG/FotosPerfil/Anonimo.png'),
('lccalderon1218@gmail.com', 'Luis Carlos', 'Calderón Ríos', 'Pock', 'pock123', 'pock123', '2147483647', '2006-12-18', 'admin', '../../IMG/FotosPerfil/Anonimo.png'),
('venusayurialmeida.99@gmail.com', 'Venus Sayuri', 'Almeida Enriquez', 'Venussa', 'frisby', 'frisby', '3122691411', '2006-09-09', 'user', '../../IMG/FotosPerfil/desayuno1-producto.jpeg');

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
  ADD PRIMARY KEY (`codigoAgua`),
  ADD KEY `contaminacion-correo` (`correoContaminacion`);

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
  ADD PRIMARY KEY (`correo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campaña`
--
ALTER TABLE `campaña`
  ADD CONSTRAINT `campaña-admin` FOREIGN KEY (`CodigoCampaña`) REFERENCES `administrador` (`CorreoAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `campaña-usuario` FOREIGN KEY (`correoUsuario`) REFERENCES `usuario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `colorcampaña`
--
ALTER TABLE `colorcampaña`
  ADD CONSTRAINT `colorcampaña-campaña` FOREIGN KEY (`CodigoCampaña`) REFERENCES `campaña` (`CodigoCampaña`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contaminacion`
--
ALTER TABLE `contaminacion`
  ADD CONSTRAINT `contaminacion-correo` FOREIGN KEY (`correoContaminacion`) REFERENCES `usuario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD CONSTRAINT `Campaña-informacion` FOREIGN KEY (`CodigoCampaña`) REFERENCES `campaña` (`CodigoCampaña`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD CONSTRAINT `recomendacion-usuario` FOREIGN KEY (`CorreoUsuario`) REFERENCES `usuario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rio`
--
ALTER TABLE `rio`
  ADD CONSTRAINT `rio-admin` FOREIGN KEY (`correoAdmin`) REFERENCES `administrador` (`CorreoAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rio-contaminacion` FOREIGN KEY (`CodigoRio`) REFERENCES `contaminacion` (`codigoAgua`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipocuerpodeagua`
--
ALTER TABLE `tipocuerpodeagua`
  ADD CONSTRAINT `tipoCuerpodeAgua-rio` FOREIGN KEY (`IdCuerpoDeAgua`) REFERENCES `rio` (`CodigoRio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2023 a las 23:11:24
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
-- Estructura de tabla para la tabla `campaña`
--

CREATE TABLE `campaña` (
  `CodigoCampaña` int(20) NOT NULL,
  `ImagenCampaña` varchar(1000) NOT NULL,
  `NombreCampaña` varchar(40) NOT NULL,
  `DescripcionCampaña` varchar(300) NOT NULL,
  `DetallesLink` varchar(1000) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `campaña`
--

INSERT INTO `campaña` (`CodigoCampaña`, `ImagenCampaña`, `NombreCampaña`, `DescripcionCampaña`, `DetallesLink`, `correoUsuario`) VALUES
(19, '../../IMG/FotosCampanas/Linkin Park.jpg', 'Linkin Park', 'Linkin Park es una banda estadounidense de rock alternativo procedente de Agoura Hills, California formada en 1996. Integrada por Mike Shinoda, Dave Farrell, Joe Hahn, Brad Delson, Rob Bourdon y Chester Bennington, este último como voz principal.', 'https://es.wikipedia.org/wiki/Linkin_Park', 'anfeli201111@gmail.com'),
(20, '../../IMG/FotosCampanas/Hybrid Theory.png', 'Hybrid Theory ', 'First Album', 'https://www.youtube.com/watch?v=vjVkXlxsO8Q&list=PLlqZM4covn1EVQPNevXbBHMa62g0LcQaz', 'anfeli201111@gmail.com'),
(21, '../../IMG/FotosCampanas/Meteora.jpg', 'Meteora', 'Second Album', 'https://www.youtube.com/watch?v=U6R-twDkrcI&list=PLlqZM4covn1EbvC_6cuERQ59QaMbPkUyE', 'anfeli201111@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contaminacion`
--

CREATE TABLE `contaminacion` (
  `codigoAgua` varchar(25) NOT NULL,
  `nivelContaminante` float(10,0) NOT NULL,
  `nivelTurbidad` float NOT NULL,
  `nombreAgua` varchar(20) NOT NULL,
  `cuerpoAgua` varchar(20) NOT NULL,
  `fechaMuestra` date NOT NULL,
  `fotoAgua` varchar(300) NOT NULL,
  `correoContaminacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contaminacion`
--

INSERT INTO `contaminacion` (`codigoAgua`, `nivelContaminante`, `nivelTurbidad`, `nombreAgua`, `cuerpoAgua`, `fechaMuestra`, `fotoAgua`, `correoContaminacion`) VALUES
('R12345', 23, 1, 'Laguinho', 'Lago', '2022-03-12', '../../IMG/Anonimo.png', 'anfeli201111@gmail.com');

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
('alejandroescobar@gmail.com', 'Alejandro', 'Escobar', 'Alejo', '1234567890', '1234567890', '3162358566', '1992-12-24', 'user', '../../IMG/FotosPerfil/Anonimo.png'),
('anfeli201111@gmail.com', 'Andrés Felipe', 'Medina Díaz', 'Anfeli52', '1234567890', '1234567890', '3107171889', '2006-01-06', 'admin', '../../IMG/FotosPerfil/Kenny South Park.jpg'),
('anfelime@gmail.com', 'Andrés Felipe', 'Medina Díaz', 'P4iN', '1234567890', '1234567890', '3107171889', '2006-01-06', 'user', '../../IMG/FotosPerfil/la-paz-nunca-fue-una-opcion-juego-de-ganso-gorra-snapback.jpg'),
('dani2111@gmail.com', 'Daniela', 'Monsalve', 'Dani', '12345', '12345', '3175576660', '2006-02-11', 'user', '../../IMG/FotosPerfil/Dani.jpeg'),
('jslucio100@gmail.com', 'Juan Esteban', 'Idrobo Lucio', 'Jslucio', 'ronaldinho', 'ronaldinho', '3164208464', '2006-01-08', 'admin', '../../IMG/FotosPerfil/Anonimo.png'),
('Juanesteban9283@gmail.com', 'Juan Esteban', 'Soto Potes', 'Juanes', 'juanes123', 'juanes123', '3161499556', '2006-05-07', 'admin', '../../IMG/FotosPerfil/Anonimo.png'),
('karolgrain@gmail.com', 'Karol Lizeth', 'Grain Mosquera', 'KG', '1234', '1234', '3186520341', '2006-02-02', 'admin', '../../IMG/FotosPerfil/Anonimo.png'),
('lccalderon1218@gmail.com', 'Luis Carlos', 'Calderón Ríos', 'Pock', 'pock123', 'pock123', '3122487782', '2006-12-18', 'admin', '../../IMG/FotosPerfil/Anonimo.png'),
('venusayurialmeida.99@gmail.com', 'Venus Sayuri', 'Almeida Enriquez', 'Venussa', 'frisby', 'frisby', '3122691411', '2006-09-09', 'user', '../../IMG/FotosPerfil/20221208_193023.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `correoCliente` varchar(50) NOT NULL,
  `orderNumber` int(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `estadoEnvio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campaña`
--
ALTER TABLE `campaña`
  ADD PRIMARY KEY (`CodigoCampaña`),
  ADD KEY `campaña-usuario` (`correoUsuario`);

--
-- Indices de la tabla `contaminacion`
--
ALTER TABLE `contaminacion`
  ADD PRIMARY KEY (`codigoAgua`),
  ADD KEY `contaminacion-correo` (`correoContaminacion`);

--
-- Indices de la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD PRIMARY KEY (`CodigoRecomendacion`),
  ADD KEY `recomendacion-usuario` (`CorreoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`orderNumber`),
  ADD KEY `correo-ventas` (`correoCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campaña`
--
ALTER TABLE `campaña`
  MODIFY `CodigoCampaña` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campaña`
--
ALTER TABLE `campaña`
  ADD CONSTRAINT `campaña-usuario` FOREIGN KEY (`correoUsuario`) REFERENCES `usuario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contaminacion`
--
ALTER TABLE `contaminacion`
  ADD CONSTRAINT `contaminacion-correo` FOREIGN KEY (`correoContaminacion`) REFERENCES `usuario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD CONSTRAINT `recomendacion-usuario` FOREIGN KEY (`CorreoUsuario`) REFERENCES `usuario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `correo-ventas` FOREIGN KEY (`correoCliente`) REFERENCES `usuario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

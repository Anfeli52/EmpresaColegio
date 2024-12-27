-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2024 a las 06:36:09
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
  `DescripcionCampaña` varchar(200) NOT NULL,
  `DetallesLink` varchar(1000) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contaminacion`
--

CREATE TABLE `contaminacion` (
  `codigoAgua` varchar(25) NOT NULL,
  `nivelContaminante` float NOT NULL,
  `nivelTurbidad` float NOT NULL,
  `nombreAgua` varchar(20) NOT NULL,
  `cuerpoAgua` varchar(20) NOT NULL,
  `fechaMuestra` date NOT NULL,
  `fotoAgua` varchar(300) NOT NULL,
  `correoContaminacion` varchar(50) NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contaminacion`
--

INSERT INTO `contaminacion` (`codigoAgua`, `nivelContaminante`, `nivelTurbidad`, `nombreAgua`, `cuerpoAgua`, `fechaMuestra`, `fotoAgua`, `correoContaminacion`, `imagen`) VALUES
('R4048', 1.56, 2873.19, 'Hola', 'Oceano', '2023-06-16', '', 'yaxjaUsuario@gmail.com', 0x40696d6167656e);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosfacturacion`
--

CREATE TABLE `datosfacturacion` (
  `nombreFactura` varchar(30) NOT NULL,
  `apellidoFactura` varchar(30) NOT NULL,
  `direccion1` varchar(100) NOT NULL,
  `direccion2` varchar(100) NOT NULL,
  `ciudadFactura` varchar(60) NOT NULL,
  `codepostal` varchar(20) NOT NULL,
  `paisFactura` varchar(60) NOT NULL,
  `estadoFactura` varchar(60) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dw23`
--

CREATE TABLE `dw23` (
  `imgProducto` varchar(1000) NOT NULL,
  `nameProducto` varchar(60) NOT NULL,
  `descripcionProducto` varchar(500) NOT NULL,
  `precioProducto` int(7) NOT NULL,
  `caracteristica1` varchar(60) NOT NULL,
  `caracteristica2` varchar(60) NOT NULL,
  `caracteristica3` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dw23`
--

INSERT INTO `dw23` (`imgProducto`, `nameProducto`, `descripcionProducto`, `precioProducto`, `caracteristica1`, `caracteristica2`, `caracteristica3`) VALUES
('../../IMG/WhatsApp Image 2023-05-26 at 8.07.06 AM.jpeg', 'DW-23', 'Descubre el DW-23, un dispositivo compacto y poderoso que evalúa la calidad del agua al instante. Equipado con sensores de pH y turbidez, te brinda información precisa sobre la contaminación del agua en tiempo real. ¡Compra ahora y ayuda a proteger nuestro recurso más preciado!', 450000, 'Sensor de PH y turbidez.', 'Arduino uno y mini proto.', 'Pantalla LCD 20x4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `cardNumber` varchar(19) NOT NULL,
  `cardHolder` varchar(32) NOT NULL,
  `expMM` int(2) NOT NULL,
  `expYY` int(2) NOT NULL,
  `cvv` int(4) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL
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
('yaxjaAdministrador@gmail.com', 'Yaxja', 'Administrador', 'YaxjaAdmin', '1234567890', '1234567890', '1111111111', '1992-12-24', 'admin', '../../IMG/FotosPerfil/Anonimo.png'),
('yaxjaUsuario@gmail.com', 'Yaxja', 'Usuario', 'YaxjaUser', '1234567890', '1234567890', '1111111111', '2006-12-24', 'user', '../../IMG/FotosPerfil/Anonimo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `correoCliente` varchar(50) NOT NULL,
  `orderNumber` int(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `estadoEnvio` varchar(50) NOT NULL,
  `precioTotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`correoCliente`, `orderNumber`, `productName`, `cantidad`, `estadoEnvio`, `precioTotal`) VALUES
('yaxjaUsuario@gmail.com', 34, 'DW-23', 100, 'Success', 500000000),
('yaxjaUsuario@gmail.com', 38, 'DW-23', 8, 'Success', 40000000),
('yaxjaUsuario@gmail.com', 41, 'DW-23', 0, 'Success', 0);

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
-- Indices de la tabla `datosfacturacion`
--
ALTER TABLE `datosfacturacion`
  ADD KEY `factura-user` (`correoUsuario`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD KEY `pago-usuario` (`correoUsuario`);

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
  MODIFY `CodigoCampaña` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `orderNumber` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- Filtros para la tabla `datosfacturacion`
--
ALTER TABLE `datosfacturacion`
  ADD CONSTRAINT `factura-user` FOREIGN KEY (`correoUsuario`) REFERENCES `usuario` (`correo`) ON UPDATE CASCADE;

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

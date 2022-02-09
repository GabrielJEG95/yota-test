-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2022 a las 16:30:25
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testyota`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion`
--

CREATE TABLE `gestion` (
  `IdGestion` int(11) NOT NULL,
  `CodigoGestion` varchar(30) DEFAULT NULL,
  `NombreGestion` varchar(50) DEFAULT NULL,
  `AplicaVisita` tinyint(1) DEFAULT NULL,
  `CodigoUsuario` int(11) DEFAULT NULL,
  `FechaCreacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gestion`
--

INSERT INTO `gestion` (`IdGestion`, `CodigoGestion`, `NombreGestion`, `AplicaVisita`, `CodigoUsuario`, `FechaCreacion`) VALUES
(7, 'G-AP', 'Arreglo de Pago', 0, 1, '2022-02-08 20:33:12'),
(8, 'G-ST', 'Soporte Tecnico', 1, 1, '2022-02-08 20:33:12'),
(9, 'G-CC', 'Cancelacion', 0, 1, '2022-02-08 20:33:12'),
(10, 'G-Dev', 'Devolución', 0, 1, '2022-02-08 20:33:12'),
(11, 'G-Compra', 'Compra', 0, 1, '2022-02-08 20:33:12'),
(12, 'G-Consulta', 'Consulta', 0, 1, '2022-02-08 20:33:12'),
(13, 'G-NS', 'Nuevo Servicio', 1, 1, '2022-02-08 20:45:55'),
(14, 'G-Rec', 'Reclamo', 0, 1, '2022-02-08 20:45:55'),
(15, 'G-Re', 'Reemplazo', 1, 1, '2022-02-08 20:45:55'),
(16, 'G-Ren', 'Renovación', 0, 1, '2022-02-08 20:45:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestioncliente`
--

CREATE TABLE `gestioncliente` (
  `CodGestion` int(11) NOT NULL,
  `C_Gestion` int(11) DEFAULT NULL,
  `atendido` tinyint(1) DEFAULT NULL,
  `FechaCreacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gestioncliente`
--

INSERT INTO `gestioncliente` (`CodGestion`, `C_Gestion`, `atendido`, `FechaCreacion`) VALUES
(1, 8, 1, '2022-02-08 21:09:30'),
(2, 7, 0, '2022-02-08 21:09:55'),
(3, 11, 0, '2022-02-08 21:10:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `CodigoTicket` int(30) NOT NULL,
  `CodigoGestion` int(11) DEFAULT NULL,
  `NombreCliente` varchar(30) DEFAULT NULL,
  `ApellidoCliente` varchar(30) DEFAULT NULL,
  `DireccionCliente` varchar(30) DEFAULT NULL,
  `TelefonoCliente` int(11) DEFAULT NULL,
  `C_Gestion` int(11) DEFAULT NULL,
  `ProblemaExpuesta` varchar(500) DEFAULT NULL,
  `Solucion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`CodigoTicket`, `CodigoGestion`, `NombreCliente`, `ApellidoCliente`, `DireccionCliente`, `TelefonoCliente`, `C_Gestion`, `ProblemaExpuesta`, `Solucion`) VALUES
(5, 1, 'Gabriel', 'Espinoza Genet', 'managua,Nicaragua', 77829982, 8, 'Problema de Prueba', 'Solucion de Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `CodigoUsuario` int(11) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `NombreUsuario` varchar(30) DEFAULT NULL,
  `ApellidoUsuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`CodigoUsuario`, `login`, `password`, `NombreUsuario`, `ApellidoUsuario`) VALUES
(1, 'GabrielEG', '77429982', 'Gabriel de Jesús', 'Espinoza Genet');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gestion`
--
ALTER TABLE `gestion`
  ADD PRIMARY KEY (`IdGestion`),
  ADD KEY `CodigoUsuario` (`CodigoUsuario`);

--
-- Indices de la tabla `gestioncliente`
--
ALTER TABLE `gestioncliente`
  ADD PRIMARY KEY (`CodGestion`),
  ADD KEY `C_Gestion` (`C_Gestion`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`CodigoTicket`),
  ADD KEY `CodigoGestion` (`CodigoGestion`),
  ADD KEY `C_Gestion` (`C_Gestion`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`CodigoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gestion`
--
ALTER TABLE `gestion`
  MODIFY `IdGestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `gestioncliente`
--
ALTER TABLE `gestioncliente`
  MODIFY `CodGestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `CodigoTicket` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `CodigoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gestion`
--
ALTER TABLE `gestion`
  ADD CONSTRAINT `gestion_ibfk_1` FOREIGN KEY (`CodigoUsuario`) REFERENCES `users` (`CodigoUsuario`);

--
-- Filtros para la tabla `gestioncliente`
--
ALTER TABLE `gestioncliente`
  ADD CONSTRAINT `gestioncliente_ibfk_1` FOREIGN KEY (`C_Gestion`) REFERENCES `gestion` (`IdGestion`);

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`CodigoGestion`) REFERENCES `gestioncliente` (`CodGestion`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`C_Gestion`) REFERENCES `gestion` (`IdGestion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

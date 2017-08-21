-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2016 a las 21:40:44
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `information`
--

CREATE TABLE `information` (
  `Id` int(255) NOT NULL,
  `NombreUsuario` varchar(255) NOT NULL,
  `PrimerNombre` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `information`
--

INSERT INTO `information` (`Id`, `NombreUsuario`, `PrimerNombre`, `Correo`, `Password`) VALUES
(1, 'ElPeluca', 'Carlos', 'ACM1PT@hotmail.com', '12345678'),
(2, 'RosaMeltrozo69', 'Arturo', 'sadsad@hotmail.com', 'ABCDEFGH'),
(3, 'CholoLoco', 'Omar', 'nananabatman@hotmail.com', 'qwertyui');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micarrodecompras`
--

CREATE TABLE `micarrodecompras` (
  `Id` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Objeto` text NOT NULL,
  `Precio` double NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `IdObjeto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `Id` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Objeto` text NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `IdObjeto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`Id`, `Precio`, `IdUsuario`, `Objeto`, `Cantidad`, `IdObjeto`) VALUES
(5, 99.99, 1, 'Adobe Photoshop: CS5 Extended', 1, 6),
(18, 29.99, 1, 'RockMan X4', 1, 4),
(19, 14.99, 2, 'Conter Strike: Global Offence', 2, 2),
(20, 99.99, 2, 'Adobe Photoshop: CS5 Extended', 1, 6),
(21, 59.99, 1, 'Grand Theft Auto V', 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `micarrodecompras`
--
ALTER TABLE `micarrodecompras`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `information`
--
ALTER TABLE `information`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `micarrodecompras`
--
ALTER TABLE `micarrodecompras`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

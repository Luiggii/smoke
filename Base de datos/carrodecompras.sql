-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2016 a las 21:40:37
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrodecompras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` text NOT NULL,
  `Precio` double NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`) VALUES
(1, 'Metal Gear Solid V: The Phantom Pain', 'mnnn...bleh!', 'mgsv.png', 59.99, 3),
(2, 'Conter Strike: Global Offence', 'FPS no genérico!', 'csgo.jpg', 14.99, 9),
(3, 'Grand Theft Auto V', 'GTA niggas!!', 'gtv.jpg', 59.99, 1),
(4, 'RockMan X4', 'Ideal para Speedrunners novatos!', 'x4.png', 29.99, 4),
(5, 'Pokemon: Yellow Version', 'Pocketmostahs!', 'pokemon.jpg', 29.99, 0),
(6, 'Adobe Photoshop: CS5 Extended', 'Programita para... para...', 'photoshop5.png', 99.99, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `NombreUsuario` text NOT NULL,
  `PrimerNombre` text NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Producto` text NOT NULL,
  `Fecha` date NOT NULL,
  `Precio` double NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id`, `IdUsuario`, `NombreUsuario`, `PrimerNombre`, `IdProducto`, `Producto`, `Fecha`, `Precio`, `Cantidad`) VALUES
(1, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(2, 1, 'ElPeluca', 'Carlos', 4, 'RockMan X4', '2016-02-16', 29.99, 1),
(3, 2, 'RosaMeltrozo69', 'Arturo', 5, 'Pokemon: Yellow Version', '2016-02-16', 29.99, 1),
(4, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(5, 1, 'ElPeluca', 'Carlos', 4, 'RockMan X4', '2016-02-16', 29.99, 1),
(6, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(7, 1, 'ElPeluca', 'Carlos', 4, 'RockMan X4', '2016-02-16', 29.99, 1),
(8, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(9, 1, 'ElPeluca', 'Carlos', 4, 'RockMan X4', '2016-02-16', 29.99, 1),
(10, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(11, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(12, 1, 'ElPeluca', 'Carlos', 4, 'RockMan X4', '2016-02-16', 29.99, 1),
(13, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(14, 1, 'ElPeluca', 'Carlos', 4, 'RockMan X4', '2016-02-16', 29.99, 1),
(15, 2, 'RosaMeltrozo69', 'Arturo', 5, 'Pokemon: Yellow Version', '2016-02-16', 29.99, 1),
(16, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(17, 1, 'ElPeluca', 'Carlos', 6, 'Adobe Photoshop: CS5 Extended', '2016-02-16', 99.99, 1),
(18, 1, 'ElPeluca', 'Carlos', 4, 'RockMan X4', '2016-02-16', 29.99, 1),
(19, 1, 'ElPeluca', 'Carlos', 4, 'RockMan X4', '2016-02-16', 29.99, 1),
(20, 2, 'RosaMeltrozo69', 'Arturo', 5, 'Pokemon: Yellow Version', '2016-02-16', 29.99, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

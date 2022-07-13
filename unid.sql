-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2022 a las 16:52:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `cumid` int(11) UNSIGNED NOT NULL,
  `Cumbre` varchar(31) COLLATE utf8_spanish2_ci NOT NULL,
  `CUMellido` varchar(31) COLLATE utf8_spanish2_ci NOT NULL,
  `CUMofono` varchar(16) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `licenciatura` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cuatrimestre` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`cumid`, `Cumbre`, `CUMellido`, `CUMofono`, `correo`, `licenciatura`, `cuatrimestre`, `status`) VALUES
(1, 'juan', 'torres', '9984994991', '00624032@red.unid.com', 'ing. en so', '6to', '1'),
(2, 'hola', 'Realpozo', '9984994991', '00624032@red.unid.com', 'ing. en so', '6to', '1'),
(3, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', 'ing. en so', '6to', '1'),
(4, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '10', 'ingles', '1'),
(5, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(6, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(7, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(8, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(9, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(10, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(11, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(12, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(13, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(14, 'Andres', 'Realpozo', '9984994991', '00624032@red.unid.com', '6to', 'ing. en so', ''),
(15, '', '2', '204050', '43434', '34343434', 'iujfbhtr', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Status` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`ID`, `nombre`, `apellido`, `telefono`, `correo`, `Status`) VALUES
(1, 'Carloh', 'Ojeda', '998 2418239012', '00300673@red.unid.mx', '1'),
(2, 'Carloh', 'Ojeda', '998 2418239012', '00300673@red.unid.mx', '1'),
(3, 'Carlos', 'pech', '998 2418239012', '00300673@red.unid.mx', '1'),
(4, 'profe', 'de servidores', '123123123123', '23483728372@red.unid', '1'),
(5, 'pablo', 'Hipolito', 'awdawdawd', 'awdawdawd', '1'),
(6, 'mr', 'krlos', 'al habla', '12', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Materia` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Licenciatura` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Cuatrimestre` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Status` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID`, `Nombre`, `Materia`, `Licenciatura`, `Cuatrimestre`, `Status`) VALUES
(0, 'agua', 'de', 'coco', '1', '1'),
(47652, 'Prog.A objetos', 'Prog.A objetos', 'Soft y sistemas computacionales', '6to', '1'),
(47654, 'diseño de base de datos', 'diseño de base de datos', 'Soft y sistemas computacionales', '6to', '1'),
(47656, 'gestion de servidores', 'diseño de base de datos', 'Soft y sistemas computacionales', '6to', '1'),
(56444, 'proyect. de transformacion', 'proyect. de transformacion', 'Soft y sistemas computacionales', '6to', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`cumid`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `cumid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

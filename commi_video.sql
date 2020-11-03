-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2020 a las 16:00:47
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `commi_video`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura_1`
--

CREATE TABLE `asignatura_1` (
  `id` int(11) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `link_video` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura_1`
--

INSERT INTO `asignatura_1` (`id`, `materia`, `titulo`, `link_video`, `fecha`) VALUES
(1, 'Matemáticas', 'Matemáticas deber N°1', 'http://192.168.0.8/videos/mate/2020-09-29%2012-02-46.mp4', '2020-10-21 20:54:21'),
(2, 'Matemáticas', 'Matemáticas Logaritmos Clase1', 'http://192.168.0.8/videos/mate/2020-10-06%2012-19-35.mp4', '2020-10-21 22:21:44'),
(3, 'Matemáticas ', 'Matemáticas Logaritmos Clase2', 'http://192.168.0.8/videos/mate/2020-10-08%2010-43-15.mp4', '2020-10-21 22:22:59'),
(5, 'Matemáticas ', 'Matemáticas Indicaciones', 'http://192.168.0.8/videos/mate/2020-10-15%2015-28-18.mp4', '2020-10-21 22:25:03'),
(8, 'Matemáticas ', 'Matemáticas E.Exponenciales', 'http://192.168.0.8/videos/mate/2020-10-20%2011-57-34.mp4', '2020-10-21 22:27:15'),
(9, 'Física', 'Física leyes de Newton 1y2', 'http://192.168.0.8/videos/fisica/2020-10-21%2009-02-37.mp4', '2020-10-21 22:37:49'),
(10, 'Historia', 'Historia Presentación', 'http://192.168.0.8/videos/historia/2020-10-05%2008-00-35.mp4', '2020-10-21 22:45:02'),
(11, 'Historia', 'Historia Proyecto N°1 S1', 'http://192.168.0.8/videos/historia/2020-10-12%2008-35-04.mp4', '2020-10-21 22:46:27'),
(12, 'Matemáticas', 'Matemáticas -Matemáticas E.Exponenciales 2', 'http://192.168.0.8/videos/mate/2020-10-22%2010-27-55.mp4', '2020-10-22 12:04:48'),
(21, 'Física', 'Física-P1-S4-Leyes de N..', 'http://192.168.0.8/videos/fisica/2020-10-28%2009-36-06.mp4', '2020-10-28 11:29:42'),
(22, 'Matemáticas', 'Matemáticas-Revisión de proyectos1 s1-s4', 'http://192.168.0.8/videos/mate/2020-10-27%2012-03-15.mp4', '2020-10-28 11:31:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login_user`
--

INSERT INTO `login_user` (`id`, `nombre`, `apellido`, `correo`, `contrasena`) VALUES
(8, 'Bryan', 'Becerra', 'xyx@gmgh.com', 'zx'),
(9, 'Cristian', 'Baraja', 'baraja.cristian01@gmail.com', 'admin7664');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura_1`
--
ALTER TABLE `asignatura_1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura_1`
--
ALTER TABLE `asignatura_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

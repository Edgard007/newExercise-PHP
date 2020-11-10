-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2020 a las 20:26:09
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `rol` varchar(25) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `rol`, `estado`) VALUES
(1, 'guillermo.jandres', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ADMIN', 1),
(2, 'juan.perez', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ADMIN', 1),
(3, 'guillermo.jandres', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ADMIN', 1),
(4, 'guillermo.jandres', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ADMIN', 1),
(5, 'guillermo.jandres', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ADMIN', 1),
(6, 'algo', 'da3a3689f08133be60e694a8bc626ae3a4f57c4b', 'ADMIN', 1),
(7, 'algo', 'da3a3689f08133be60e694a8bc626ae3a4f57c4b', 'ADMIN', 1),
(8, 'assa', '65417b70a1a7bd08a6189f4d309d90979cbe7b56', 'ADMIN', 1),
(9, 'asas', '286c42a2b9dabb536c87b1a88a6842117bfb37ab', 'ADMIN', 1),
(10, 'asasas', '286c42a2b9dabb536c87b1a88a6842117bfb37ab', 'ADMIN', 1),
(11, 'asas', '3f6e92b41e6c09daacbbe57ed65d7ef8e1c7f0c3', 'ADMIN', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

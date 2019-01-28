-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-03-2018 a las 10:38:12
-- Versión del servidor: 5.6.38
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `cedula` varchar(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cedula`, `nombres`, `apellidos`, `fecha`, `matricula`, `user`, `password`) VALUES
('13587642', 'YAJAIRA ELISA', 'USECHE RIVAS', '1976-12-31', '2126N13578642', 'yayayeur', '123456'),
('13587648', 'JEAN CARLO', 'ALVAREZ SANCEZ', '1978-04-10', '2126N13587648', 'agrojean', '123456'),
('26607655', 'CARLOS AGUSTIN', 'GUANIPA ALVAREZ', '1998-03-29', '2126N26607655', 'agustinguanipa', 'y6fTDgGZh3qY'),
('30100200', 'ABRIL SALOME', 'ALVAREZ USECHE', '2017-10-06', '2126N30100200', 'abrilsalome', '123456'),
('5028153', 'ALBA ALIDA', 'ALVAREZ SANCHEZ', '1957-09-20', '2126N5028153', 'albaalvarez', '6CdchEdxcUyf'),
('7491156', 'CARLOS LUIS', 'GUANIPA BUENO', '1963-04-07', '2126N7491156', 'carlosguaniap', '6yBiW5vKNmER');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2022 a las 18:19:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_yeryencinas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoproceso`
--

CREATE TABLE `flujoproceso` (
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `ProcesoSiguiente` varchar(3) DEFAULT NULL,
  `Tipo` varchar(1) DEFAULT NULL,
  `Pantalla` varchar(20) DEFAULT NULL,
  `Rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujoproceso`
--

INSERT INTO `flujoproceso` (`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES
('F1', 'P1', 'P2', 'I', 'PreparaDocumentos', 'estudiante'),
('F1', 'P2', 'P3', 'P', 'Formulario', 'estudiante'),
('F1', 'P3', '-', 'F', 'Enviado', 'postulante'),
('F1', 'P4', '-', 'C', 'Verifica', 'Kardex'),
('F1', 'P5', '-', 'F', 'DatosGuardados', 'Kardex'),
('F1', 'P6', '-', 'F', 'Rechazo', 'Kardex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoprocesocondicionante`
--

CREATE TABLE `flujoprocesocondicionante` (
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `ProcesoSI` varchar(3) DEFAULT NULL,
  `ProcesoNO` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujoprocesocondicionante`
--

INSERT INTO `flujoprocesocondicionante` (`Flujo`, `Proceso`, `ProcesoSI`, `ProcesoNO`) VALUES
('F1', 'P4', 'P5', 'P6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoprocesoseguimiento`
--

CREATE TABLE `flujoprocesoseguimiento` (
  `id` int(11) NOT NULL,
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `Usuario` varchar(10) DEFAULT NULL,
  `contra` varchar(50) NOT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `rechazo` varchar(10) DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujoprocesoseguimiento`
--

INSERT INTO `flujoprocesoseguimiento` (`id`, `Flujo`, `Proceso`, `Usuario`, `contra`, `FechaInicio`, `FechaFin`, `rechazo`) VALUES
(1, 'F1', 'P3', 'mariel', '12345678', '2022-12-04', NULL, 'Revision'),
(2, 'F1', 'P3', 'noemi', '12345678', '2022-12-04', '2022-12-04', 'Aceptado'),
(3, 'F1', 'P1', 'carlos', '12345678', '2022-12-04', '2022-12-04', 'Rechazado'),
(4, 'F1', 'P4', 'yery', '12345678', '2022-11-01', '2022-11-03', 'kardista');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flujoprocesoseguimiento`
--
ALTER TABLE `flujoprocesoseguimiento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flujoprocesoseguimiento`
--
ALTER TABLE `flujoprocesoseguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

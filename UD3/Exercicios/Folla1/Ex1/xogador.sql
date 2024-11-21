-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: dbXdebug
-- Tiempo de generación: 24-10-2024 a las 07:30:02
-- Versión del servidor: 9.1.0
-- Versión de PHP: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xogador`
--

CREATE TABLE `xogador` (
  `idXogador` int NOT NULL,
  `dni` char(9) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `apelidos` varchar(60) NOT NULL,
  `idade` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `xogador`
--

INSERT INTO `xogador` (`idXogador`, `dni`, `nome`, `apelidos`, `idade`) VALUES
(1, '05467417H', 'FRANCESC', 'NAVAS DIAZ', 17),
(2, '96418994G', 'TANIA', 'IGLESIAS MONTES', 16),
(3, '76533048L', 'ESPERANZA', 'FERREIRO TOLEDO', 18),
(4, '21053408J', 'MARTIN', 'GALAN DE LA FUENTE', 17),
(5, '97020749X', 'IZAN', 'PEREZ MORALES', 16),
(6, '47542560L', 'ERIK', 'ESCOBAR ROMERO', 17),
(7, '94671549F', 'AMAYA', 'GRACIA PONS', 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `xogador`
--
ALTER TABLE `xogador`
  ADD PRIMARY KEY (`idXogador`),
  ADD UNIQUE KEY `dni_unique` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `xogador`
--
ALTER TABLE `xogador`
  MODIFY `idXogador` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

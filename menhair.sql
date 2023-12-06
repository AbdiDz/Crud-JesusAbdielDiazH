-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2023 a las 04:09:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `menhair`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioing`
--

CREATE TABLE `usuarioing` (
  `id_usuario` int(40) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `id_trabajador` varchar(50) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarioing`
--

INSERT INTO `usuarioing` (`id_usuario`, `nombre`, `apellido`, `correo`, `id_trabajador`, `contraseña`) VALUES
(1, 'Natanael', 'Troche Flores', 'trochenathan63@gmail.com', 'NA10PW', '8891011'),
(2, 'Jesus Abdiel', 'Diaz', 'alJesus@gmail.com', 'JADH87S', 'JADH10'),
(3, 'Miguel ', 'Lopez', 'extra@gmail.com', 'OM123', '321'),
(5, 'Vanessa', 'Diaz', 'al2222134@gmail.com', '15', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarioing`
--
ALTER TABLE `usuarioing`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarioing`
--
ALTER TABLE `usuarioing`
  MODIFY `id_usuario` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

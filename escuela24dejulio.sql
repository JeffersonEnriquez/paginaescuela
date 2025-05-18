-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 18-05-2025 a las 16:43:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela24dejulio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cedula` int(10) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombre`, `nombre_usuario`, `apellido`, `cedula`, `fecha_registro`) VALUES
(2, 'kaicerssfgtt.56@gmail.com', '$2y$10$tOE/4I2CGNfWL3hJjLMItuLMUCPRQPofatsU90c/pgk2Q5DzAGNF2', 'Jefferson', 'jose56', 'Enriquez', 245631589, '2025-05-17 17:49:45'),
(9, 'ad@utpl.edu.ec', '$2y$10$emsirvZxHArQYq.tp7SmfuCfPKstVWxuCK8wkNPK2W8wBBMU10Pg2', 'juan', 'juan345', 'perez', 245631547, '2025-05-17 19:09:40'),
(10, 'adj@utpl.edu.ec', '$2y$10$EcZ6Uk85P8wVvPtItIMVfOdMWAjdWkOuu/Hz81NmBAXJYKpXtz0ii', 'admin', 'admin', 'jeff', 245361256, '2025-05-17 20:56:47'),
(11, 'jdjd@utpl.edu.ec', '$2y$10$za/T3Is2QsX5S1oMWW9EjOIR0/xP4wd/vA.VgYw3RxOSp6NiDIm2m', 'erika', 'kerije', 'suarez', 2147483647, '2025-05-17 22:11:08'),
(12, 'gssgh@gmail.com', '$2y$10$CVLsHd6Dr902SbjvqGib9On9vcxxx7lNfQmNK/BQKlt1GSrjDoEx6', 'juan', 'juanr', 'ramirez', 245631598, '2025-05-18 00:24:22'),
(13, 'hsj@gmail.com', '$2y$10$ic/T0DN8skqXjSJkZgLZeeBYlJz8oa32vuFHIQiy7wqkPwDxYFF5m', 'jose', 'jose', 'montenegro', 245631056, '2025-05-18 13:15:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

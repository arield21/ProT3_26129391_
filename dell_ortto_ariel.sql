-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2024 a las 06:52:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dell_ortto_ariel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'admin', 'admi', 'admin', 'admin@admin.com', '$2y$10$2HnOYQOYHkL/44Ikekgt0.jijRvUM5rilukuCa6q4Uo3DviG6FUCC', 1, 'NO'),
(2, 'usuario', 'usuario', 'usuario', 'usuario@usuario.com', '$2y$10$BTaBJOpp/r3cOGuQv4DrBOK2t7MjgWVqJTP8W1BlSIUJSeccLTx3.', 2, 'NO'),
(3, 'cliente', 'cliente', 'cliente', 'cliente@cliente.com', '$2y$10$Zq3El3ieFJyk2wUCElofAOiqBj9aSlMVUiVEok7Y3tneKVW4oU4eW', 2, 'NO'),
(4, 'asdfa', 'asdfa', 'asdkljlk', 'alguien@admin.com', '$2y$10$rpf7qkw16/9uPuR6ScKO1.L80cKvXCgIJXsLRialIsLJA/PDbNqDi', 2, 'NO'),
(5, 'admin', 'amdmin', 'admin', 'admin@gmail.com', '$2y$10$2ZqVwqp0/Algceour3qJM.8wlwiSd0qH8J.cZVaGnG6huCrE.pY5C', 1, 'NO'),
(6, 'cliente', 'cliente', 'cliente', 'cliente@gmail.com', '$2y$10$a/tBM6tROHFGLvHWY885d.sA0IIZuyfVDVt5bvznNrlw.19MXqUwm', 2, 'NO'),
(7, 'usuario', 'usuario', 'usuario', 'usuario@gmail.com', '$2y$10$ub.YPNQEKeEYHkV3ZBap0evo6l5po.yh8PDeCdPKOuQwN.ShplE0m', 2, 'NO'),
(8, 'admin', 'admin', 'amkdlkfk', 'admin1@gmail.com', '$2y$10$Ej7NoOdgv7Dux2Nv2/xES.cN0M3eJXcZ/Rkxaya2tqkiMLIF1tuZW', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

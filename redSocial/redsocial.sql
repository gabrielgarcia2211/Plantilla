-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2020 a las 11:51:33
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redsocial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `id` int(12) NOT NULL autoincrement ,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `usuario` varchar(120) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `correo` varchar(120) NOT NULL,
  `contrasenia` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`usuario`, `nombre`, `correo`, `contrasenia`) VALUES
('gabriel', 'arturo', 'garcia@garcia.com', 'qqqq'),
('mariaa', 'gagag', 'mari@gg.com', 'qweee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_foto`
--

CREATE TABLE `persona_foto` (
  `userPersona` varchar(120) NOT NULL,
  `foto` int(12) NOT NULL,
  `perfil` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person_sigue`
--

CREATE TABLE `person_sigue` (
  `usuario` varchar(120) NOT NULL,
  `userSeguido` varchar(120) NOT NULL,
  `reaccion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`usuario`,`correo`);

--
-- Indices de la tabla `persona_foto`
--
ALTER TABLE `persona_foto`
  ADD PRIMARY KEY (`userPersona`,`foto`),
  ADD KEY `persona_foto_foto_fk` (`foto`),
  ADD KEY `persona_foto_perfil_fk` (`perfil`);

--
-- Indices de la tabla `person_sigue`
--
ALTER TABLE `person_sigue`
  ADD PRIMARY KEY (`usuario`,`userSeguido`),
  ADD KEY `person_sigue_fk` (`userSeguido`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona_foto`
--
ALTER TABLE `persona_foto`
  ADD CONSTRAINT `persona_foto_foto_fk` FOREIGN KEY (`foto`) REFERENCES `foto` (`id`),
  ADD CONSTRAINT `persona_foto_perfil_fk` FOREIGN KEY (`perfil`) REFERENCES `foto` (`id`),
  ADD CONSTRAINT `persona_foto_userPersona_fk` FOREIGN KEY (`userPersona`) REFERENCES `persona` (`usuario`);

--
-- Filtros para la tabla `person_sigue`
--
ALTER TABLE `person_sigue`
  ADD CONSTRAINT `person_fk` FOREIGN KEY (`usuario`) REFERENCES `persona` (`usuario`),
  ADD CONSTRAINT `person_sigue_fk` FOREIGN KEY (`userSeguido`) REFERENCES `persona` (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

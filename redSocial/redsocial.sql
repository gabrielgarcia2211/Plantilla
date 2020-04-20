-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2020 a las 11:12:11
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
  `id` int(12) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`id`, `nombre`, `descripcion`, `url`) VALUES
(1, 'vegeta', 'kkkk', 'índice.jpg'),
(2, 'vegeta-san 2', 'cccc', 'eaee8416f02260ec3203d966146460a6.jpg'),
(7, 'tanjiro', 'aaa', 'JOgH2y3__400x400.jpg'),
(8, 'Tanjiro', 'aa', 'JOgH2y3__400x400.jpg'),
(12, 'vegeta', 'sss d', 'eaee8416f02260ec3203d966146460a6.jpg'),
(13, 'Tanjiro', 'hola xd', 'JOgH2y3__400x400.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `usuario` varchar(120) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `correo` varchar(120) DEFAULT NULL,
  `contrasenia` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`usuario`, `nombre`, `correo`, `contrasenia`) VALUES
('arturo23', 'garcia', 'garcia@gar.com', '12345'),
('gabriel23', 'arturo', 'garcia@garcia.com', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_foto`
--

CREATE TABLE `persona_foto` (
  `userPersona` varchar(120) NOT NULL,
  `foto` int(12) NOT NULL,
  `perfil` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona_foto`
--

INSERT INTO `persona_foto` (`userPersona`, `foto`, `perfil`) VALUES
('arturo23', 12, '1'),
('arturo23', 13, '0'),
('gabriel23', 1, '0'),
('gabriel23', 2, '0'),
('gabriel23', 7, '0');

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
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `persona_foto`
--
ALTER TABLE `persona_foto`
  ADD PRIMARY KEY (`userPersona`,`foto`),
  ADD KEY `persona_foto_foto_fk` (`foto`);

--
-- Indices de la tabla `person_sigue`
--
ALTER TABLE `person_sigue`
  ADD PRIMARY KEY (`usuario`,`userSeguido`),
  ADD KEY `person_sigue_fk` (`userSeguido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona_foto`
--
ALTER TABLE `persona_foto`
  ADD CONSTRAINT `persona_foto_foto_fk` FOREIGN KEY (`foto`) REFERENCES `foto` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `persona_foto_userPersona_fk` FOREIGN KEY (`userPersona`) REFERENCES `persona` (`usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `person_sigue`
--
ALTER TABLE `person_sigue`
  ADD CONSTRAINT `person_fk` FOREIGN KEY (`usuario`) REFERENCES `persona` (`usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `person_sigue_fk` FOREIGN KEY (`userSeguido`) REFERENCES `persona` (`usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

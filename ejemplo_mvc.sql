-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2023 a las 19:48:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemplo_mvc`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertUpdate` (IN `_id` INT(11), IN `_dni` INT(11), IN `_apePaterno` VARCHAR(45), IN `_apeMaterno` VARCHAR(45), IN `_nombres` VARCHAR(45), IN `_correo` VARCHAR(255), IN `_lenguaje` VARCHAR(255), IN `_fase` INT(11), IN `_edad` INT(11), IN `_comprendido` INT(11))   BEGIN
	IF _id IS NULL THEN
		INSERT INTO personas (dni, apePaterno, apeMaterno, nombres, correo, lenguaje, fase, edad, comprendido) 
		VALUES (_dni, _apePaterno, _apeMaterno, _nombres, _correo, _lenguaje, _fase, _edad, _comprendido);
	ELSE
		UPDATE personas SET
			dni = _dni, 
			apePaterno = _apePaterno,
			apeMaterno = _apeMaterno,
			nombres = _nombres, 
			correo = _correo, 
			lenguaje = _lenguaje, 
			fase = _fase, 
			edad = _edad, 
			comprendido = _comprendido
		WHERE id = _id;
	END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `dni` int(11) DEFAULT NULL,
  `apePaterno` varchar(255) DEFAULT NULL,
  `apeMaterno` varchar(255) DEFAULT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `lenguaje` varchar(255) DEFAULT NULL,
  `fase` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `comprendido` int(11) DEFAULT NULL,
  `fechInsertado` datetime DEFAULT current_timestamp(),
  `fechModificado` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `dni`, `apePaterno`, `apeMaterno`, `nombres`, `correo`, `lenguaje`, `fase`, `edad`, `comprendido`, `fechInsertado`, `fechModificado`) VALUES
(1, 75684123, 'Paterno', 'Materno', 'Nombres', 'email@gmail.com', 'Lenguaje', 1, 40, 1, '2023-01-07 13:46:43', '2023-01-07 13:47:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

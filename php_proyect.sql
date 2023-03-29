-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-03-2023 a las 15:28:46
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_proyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Accion'),
(2, 'Comedia'),
(3, 'Terror'),
(4, 'ROLEPLAY'),
(8, 'piti'),
(9, 'FFF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

DROP TABLE IF EXISTS `entradas`;
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int DEFAULT NULL,
  `categoria_id` int DEFAULT NULL,
  `titulo` varchar(155) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_entradas_usuarios` (`usuario_id`),
  KEY `fk_entradas_categorias` (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 1, 2, 'Entradas para Airon Man', 'Por puerta principal', '2023-02-08'),
(2, 2, 3, 'Entradas para Actividad Paranormal', 'Por puerta trasera', '2023-02-08'),
(3, 3, 1, 'Entradas para Harry', 'Por puerta trasera', '2023-02-08'),
(22, 10, 2, 'Editado en pagina web ', 'Editado en la pagina web de blog', '2023-02-15'),
(23, 10, 1, 'dasd', 'asd', '2023-02-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(155) NOT NULL,
  `apellidos` varchar(155) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(1, 'Matias', 'Torres', 'matiasnicolastorres71@gmail.com', '123dqw', '2023-02-08'),
(2, 'Juan', 'Torres', 'torresjuan@gmail.com', '123dqw', '2023-02-08'),
(3, 'Mike', 'Rodriguez', 'mikelon@gmail.com', '123dqw', '2023-02-08'),
(8, 'RODRIGUEZ', 'RODRIGUEZ', 'javior@crediguia.com', '$2y$04$B.EFgcWV3b8qLTjxw5jpNeT5HbxXpF3EqYGlgK34YxyS/23bNacT6', '2023-02-10'),
(9, 'DARIO', 'TORRES', 'DARO@GMAIL.COM', '$2y$04$VhrpL57MIbihQzpDSQb08ePzh8xomG.fdL/39/7fsIGc/2Oomdv8C', '2023-02-11'),
(10, 'Franco', 'Campas', 'francoxd@gmail.com', '$2y$04$tYRYa8kRlWq17LsgCQHY3uvmW82fkD6/uAQGnMq1ZXAFJxL72qWEG', '2023-02-11');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_entradas_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fk_entradas_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

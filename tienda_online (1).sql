-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-03-2023 a las 15:28:31
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
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'REMERAS'),
(2, 'PANTALONES'),
(3, 'ZAPATILLAS'),
(6, 'medias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_pedidos`
--

DROP TABLE IF EXISTS `lineas_pedidos`;
CREATE TABLE IF NOT EXISTS `lineas_pedidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `producto_id` int NOT NULL,
  `unidades` int NOT NULL,
  `pedido_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_linea_producto` (`producto_id`),
  KEY `fk_linea_pedido` (`pedido_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `lineas_pedidos`
--

INSERT INTO `lineas_pedidos` (`id`, `producto_id`, `unidades`, `pedido_id`) VALUES
(11, 42, 3, 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `coste` float(200,2) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `localidad` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pedidos_usuario` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `provincia`, `direccion`, `coste`, `estado`, `fecha`, `hora`, `localidad`) VALUES
(28, 26, 'asd', 'candelaria 524', 79101.00, 'confirm', '2023-03-08', '14:53:58', 'neuquen'),
(31, 26, 'neuquen', 'CANDELARIA 524', 54026.00, 'confirm', '2023-03-09', '10:56:03', 'asd'),
(32, 26, 'neuquen', 'neuquen', 54026.00, 'ready', '2023-03-09', '10:56:26', 'neuquen'),
(33, 26, 'neuquen', 'CANDELARIA 524', 54026.00, 'confirm', '2023-03-09', '11:17:57', 'NEUQUEN'),
(34, 26, 'Neuquen', 'Corrientes 231', 54023.00, 'confirm', '2023-03-09', '12:10:44', 'Neuquen'),
(35, 26, 'neuquen', 'asdasd', 23000.00, 'confirm', '2023-03-09', '13:50:40', 'neuquen'),
(36, 27, 'neuquen', 'candelaria 524', 23000.00, 'sended', '2023-03-09', '14:24:14', 'neuquen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria_id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text,
  `precio` float(100,2) NOT NULL,
  `stock` int NOT NULL,
  `oferta` varchar(2) DEFAULT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_categoria` (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `stock`, `oferta`, `fecha`, `imagen`) VALUES
(40, 1, 'REMERA 2', '123', 23.00, 23, 'si', '2023-03-06', 'descarga.jpeg'),
(41, 1, 'CAMISETA NEGRA ', 'camiseta cambiada a negra', 100.00, 20, 'si', '2023-03-06', 'negra.png'),
(42, 1, 'CAMISETA BLANCA', 'camiseta blanca ', 26.00, 25, 'si', '2023-03-06', 'blanca.jpeg'),
(43, 3, 'ZAPATILLAS NIKE', 'zapatillas talle 432', 23000.00, 23, 'si', '2023-03-07', 'zapa1.jpeg'),
(44, 3, 'ZAPATIILAS SALOMON', 'zapatillas salomon descriptivas', 50000.00, 31, 'si', '2023-03-07', 'zapa2.jpeg'),
(45, 3, 'ZAPATILLAS RUNNING', 'zapatillas para correr muchos kilometros', 54000.00, 50, 'si', '2023-03-07', 'zapa3.jpeg'),
(46, 2, 'PANTALON NIKE', 'PANTALONES DE GABARDINA', 5400.00, 53, 'no', '2023-03-07', 'pantalon1.jpeg'),
(47, 2, 'PANTALON OUTFITTER', 'PANTALON FACHERASO MAL', 6000.00, 40, 'si', '2023-03-07', 'pantalon2.jpeg'),
(48, 2, 'PANTALON COULDER', 'PANTALON PARA INVIERNO ', 25000.00, 10, 'si', '2023-03-07', 'pantalon3.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `rol`, `image`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', '123456', 'Admin', NULL),
(26, 'matias nicolas', 'torres', 'matiasnicolastorres71@gmail.com', '$2y$04$eGF8ru4MlRRq7bnih8H7tOVEVwHMnoX1nb8Oq8IYwmTbHj.4tbcQG', 'admin', NULL),
(27, 'roberto', 'carlos', 'robert123@gmail.com', '$2y$04$u3ol5VEt6D.ODoZ960JT2.ainEnqAVBu7IyHz3dgnkfGXTEyaYW46', 'user', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lineas_pedidos`
--
ALTER TABLE `lineas_pedidos`
  ADD CONSTRAINT `fk_linea_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `fk_linea_producto` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

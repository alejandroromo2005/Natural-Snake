-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2021 a las 03:53:49
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimension_cliente`
--

CREATE TABLE `dimension_cliente` (
  `id_cliente` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimension_pedido`
--

CREATE TABLE `dimension_pedido` (
  `id_pedido` bigint(20) NOT NULL,
  `id_cliente` bigint(20) NOT NULL,
  `id_producto` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimension_producto`
--

CREATE TABLE `dimension_producto` (
  `id_producto` bigint(20) NOT NULL,
  `producto` varchar(20) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dimension_producto`
--

INSERT INTO `dimension_producto` (`id_producto`, `producto`, `precio`, `descripcion`, `url`) VALUES
(1, 'postre galletas', 10000, 'Este es\r\nun delicioso postre de galletas y frutos rojos.\r\nUn dulce sabor', '/proyecto/trabajo/proyecto/plantilla/public/imagenes/galleta.png'),
(2, 'postre de maracuya', 10000, 'Este es\r\nun delicioso postre de maracuya con una combinacion de dulce y acido.una gran experiencia', '/proyecto/trabajo/proyecto/plantilla/public/imagenes/mara.png'),
(3, 'postre de fresa', 10000, 'Este un delicioso postre sabor de fresa con la caracteristica unica de esta dulce fruta', '/proyecto/trabajo/proyecto/plantilla/public/imagenes/fres.jpg'),
(4, 'sagargala', 10000, 'Es un pastel que se caracteriza por su dulce sabor a manzana y una textura cremosa en su interior', '/proyecto/trabajo/proyecto/plantilla/public/imagenes/galle.jpg'),
(5, 'postre de milo', 10000, 'Un postre con el caracteristico sabor a milo', '/proyecto/trabajo/proyecto/plantilla/public/imagenes/milo.jpg'),
(6, 'flan', 10000, 'Es un postre que se prepara con huevos enteros, leche y azúcar', '/proyecto/trabajo/proyecto/plantilla/public/imagenes/flan.jpg'),
(7, 'postre de limon', 10000, 'un delicioso postre entre el amargo limon y un dulce delicioso', '/proyecto/trabajo/proyecto/plantilla/public/imagenes/limon.jpg'),
(8, 'postre fresa 2.0', 5000, 'un delicioso postre de fresa en una presentacion mas pequeña', '/proyecto/trabajo/proyecto/plantilla/public/imagenes/postre.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dimension_cliente`
--
ALTER TABLE `dimension_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `dimension_pedido`
--
ALTER TABLE `dimension_pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_cliente` (`id_cliente`),
  ADD KEY `fk_producto` (`id_producto`);

--
-- Indices de la tabla `dimension_producto`
--
ALTER TABLE `dimension_producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dimension_cliente`
--
ALTER TABLE `dimension_cliente`
  MODIFY `id_cliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `dimension_pedido`
--
ALTER TABLE `dimension_pedido`
  MODIFY `id_pedido` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dimension_producto`
--
ALTER TABLE `dimension_producto`
  MODIFY `id_producto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dimension_pedido`
--
ALTER TABLE `dimension_pedido`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `dimension_cliente` (`id_cliente`),
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`id_producto`) REFERENCES `dimension_producto` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2017 a las 04:35:45
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-04:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultradadb`
--

-- --------------------------------------------------------
DROP TABLE IF EXISTS productos;
--
-- Estructura de tabla para la tabla `productos`
--
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `barcode` varchar(18) NOT NULL,
  `barcode_final` varchar(50) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `missing` varchar(40) NOT NULL,
  `qty` int(6) NOT NULL,
  `ubicacion` varchar(10) NOT NULL,
  `nu_foto` varchar(20) NOT NULL,
  `comentario` varchar(250) NOT NULL,
  `realizado` varchar(20) NOT NULL,
  `imagen` varchar(70) NOT NULL,
  `id_corte` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty_total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `productos` (`id_producto`, `barcode`, `barcode_final`, `nombre_producto`, `condicion`, `missing`, `qty`, `ubicacion`, `nu_foto`, `comentario`, `realizado`, `imagen`, `id_corte`, `fecha_creacion`, `qty_total`) VALUES
(1, '888182998397', '888182998397 GA B','HP 920XL Magenta High Yield Original Ink Cartridge (CD973AN)', 'GA', 'B', 5, 'B05','101', 'N/A', 'NO', 'notebook.jpg', 1, '2018-01-25 18:43:20',5),
(2, '013803238310', '013803238310 O M','Black & Decker Lithium Hand Vacuum Lightweight Portable (Red)', 'O', 'M', 2, 'A02','102', 'N/A', 'SI', 'playstation.jpg', 1, '2018-01-25 18:43:20',10),
(3, '884420736783', '884420736783','AT&T Prepaid - Bring Your Own Phone or Tablet SIM Card (AT&T)', 'NEW', '-', 1, 'B25','103', 'N/A', 'NO', 'iphone.jpg', 1, '2018-01-25 18:43:20',25),
(4, '848467051391', '848467051391', 'Ifrogz Earpollution Plugz Wireless Bluetooth Earphones Blue By Zagg', 'NEW', '', 1, 'A10', '104', 'N/A', 'NO', '848467051391/img_1520541689.jpg', 1, '2018-03-08 20:41:29', 2),
(5, 'Does not apply', 'LC0000000000', 'C--105--LC0000000000--', 'NEW', '', 2, 'A10', '105', 'N/A', 'NO', 'no-foto.png', 1, '2018-03-08 23:07:48', 2),
(6, '810864021024', '810864021024', 'Wireless Portable Charger with 3000mAh Battery, Black', 'NEW', '', 2, 'B10', '106', 'N/A', 'NO', '810864021024/img_1520622346.jpg', 1, '2018-03-09 19:05:46', 2),
(7, '27242878037', '27242878037 GA M', 'Sony Bluetooth Audio System Mex-n4100bt Made For Ipod Iphone Android Phone Aux,', 'GA', 'M ', 2, 'B01', '107', 'Para danny', 'NO', '27242878037/img_1520622476.jpg', 1, '2018-03-09 19:07:56', 2),
(8, '660543402213', '660543402213 GC B CH', 'iPhone 7 Plus Case - Otterbox Steamboat Defender - Black', 'GC', 'B CH ', 2, 'A10', '107', 'N/A', 'NO', '660543402213/img_1520622508.jpg', 1, '2018-03-09 19:08:28', 2),
(9, 'Does not apply', 'LC0000000001 GA M', 'C--108--LC0000000001--', 'GA', 'M ', 2, 'A10', '108', 'N/A', 'NO', 'no-foto.png', 1, '2018-03-09 19:08:49', 2),
(10, '889842161175', '889842161175 O BY', 'Xbox One Wireless Controller, Green And Organge', 'O', 'BY ', 5, 'A55', '108', 'N/A', 'NO', '889842161175/img_1520622562.jpg', 1, '2018-03-09 19:09:22', 5);
-- --------------------------------------------------------
DROP TABLE IF EXISTS socios;
--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `codigo` varchar(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `fnacimiento` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `telefono2` varchar(20) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `fexpiracion` varchar(20) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_full_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_date` varchar(20) NOT NULL,
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`codigo`, `nombres`, `apellidos`, `cedula`, `fnacimiento`, `sexo`, `localidad`, `ocupacion`, `correo`, `telefono`, `telefono2`, `categoria`, `fexpiracion`, `created_user`, `created_full_date`, `created_date`, `updated_user`, `updated_date`) VALUES
('CAP-000362', 'Juan Carlos', 'Perez Valles', '40220564542', '1991-07-24', 'Masculino', 'Santo Domingo', 'Estudiante', 'juancarlos@gmail.com', '809-123-3211', '809-231-1211','Standar', '2018-01-26', 1, '2017-07-24 16:43:20', '2018-01-01', 1, '2017-07-26 02:09:06'),
('CAP-000363', 'Jose Luis', 'De jesus', '00256432541', '1990-04-22', 'Masculino', 'Santo Domingo', 'Estudiante', 'jose@gmail.com', '809-143-3151', '849-543-4121','Standar', '2018-01-26', 1, '2017-07-24 16:43:20', '2017-01-26', 1, '2017-07-26 02:09:06'),
('CAP-000364', 'Maria Rosa', 'Rodriguez Almonte', '001114343541', '1987-01-12', 'Femenino', 'Santo Domingo', 'Estudiante', 'maria@gmail.com', '849-643-2151', '829-623-3358','Standar', '2018-01-26', 1, '2017-07-24 16:43:20', '2017-01-02', 1, '2017-07-26 02:09:06');

-- --------------------------------------------------------
DROP TABLE IF EXISTS logs;
--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fecha_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `registro` varchar(200) NOT NULL,
  `qty` int(6) NOT NULL,
  `edicion` varchar(50) NOT NULL,
  `ubicacion` varchar(20) NOT NULL,
  `qty_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id_log`, `id_producto`, `id_user`, `fecha_log`, `registro`, `qty`,`edicion`,`ubicacion`,`qty_total`) VALUES
(1, 1, 1, '2018-01-25 17:09:06', 'Articulo creado', 5,'condicion','A15',11),
(2, 2, 1, '2018-01-25 17:09:06', 'Articulo creado', 2,'cantidad','A18',10),
(3, 3, 1, '2018-01-25 17:09:06', 'Articulo creado', 1,'titulo','A25',8),
(4, 1, 1, '2018-02-02 17:09:06', 'Articulo creado', 0,'condicion','A30',1),
(5, 2, 1, '2018-02-06 17:09:06', 'Articulo creado', 0,'cantidad','A35',2),
(6, 2, 1, '2018-02-05 17:09:06', 'Articulo creado', 0,'titulo','A40',3),
(7, 4, 1, '2018-03-09 01:41:29', 'Articulo creado', 1, 'creado', 'A10', 1),
(8, 4, 1, '2018-03-08 20:41:36', 'Articulo editado', 1, '1 (+)', 'A10', 2),
(9, 5, 1, '2018-03-09 04:07:48', 'Articulo creado', 2, 'creado', 'A10', 2),
(10, 3, 1, '2018-03-09 18:59:56', 'Articulo editado', 0, 'Movido a (A38)', 'A38', 25),
(11, 6, 1, '2018-03-10 00:05:46', 'Articulo creado', 2, 'creado', 'B10', 2),
(12, 7, 1, '2018-03-10 00:07:56', 'Articulo creado', 2, 'creado', 'B01', 2),
(13, 8, 1, '2018-03-10 00:08:28', 'Articulo creado', 2, 'creado', 'A10', 2),
(14, 9, 1, '2018-03-10 00:08:49', 'Articulo creado', 2, 'creado', 'A10', 2),
(15, 10, 1, '2018-03-10 00:09:22', 'Articulo creado', 5, 'creado', 'A55', 5);

-- --------------------------------------------------------
DROP TABLE IF EXISTS cortes;
--
-- Estructura de tabla para la tabla `cortes`
--

CREATE TABLE `cortes` (
  `id_corte` int(11) NOT NULL,
  `nombre_corte` varchar(100) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `num_productos` int(6) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cortes`
--

INSERT INTO `cortes` (`id_corte`, `nombre_corte`, `fecha`, `num_productos`, `estado`) VALUES
(1, 'Corte #0001', '2018-01-25 17:09:06', 52, 'actual');

-- --------------------------------------------------------
DROP TABLE IF EXISTS usuarios;
--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `permisos_acceso` enum('Super Admin','Gerente','Almacen') NOT NULL,
  `status` enum('activo','bloqueado') NOT NULL DEFAULT 'activo',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `username`, `name_user`, `password`, `email`, `telefono`, `foto`, `permisos_acceso`, `status`, `created_at`, `updated_at`) VALUES
(1, 'cristobal', 'Cristobal Bello', '21232f297a57a5a743894a0e4a801fc3', 'lccristobalbello@gmail.com', '809-709-1500', 'foto.jpg', 'Super Admin', 'activo', '2017-01-26 08:15:15', '2017-01-26 08:15:15'),
(2, 'kelvin', 'Kelvin Reyes', '21232f297a57a5a743894a0e4a801fc3', 'ingkelvinreyes@gmail.com', '829-713-8928', 'foto.jpg', 'Super Admin', 'activo', '2017-01-26 08:15:15', '2017-01-26 08:15:15'),
(3, 'demo', 'Demostracion', '21232f297a57a5a743894a0e4a801fc3', 'demo@demo.com', '809-000-9999', '1469574176_users-7.png', 'Almacen', 'activo', '2017-01-26 22:34:03', '2017-01-26 22:34:03');

--                              --
-- Índices para tablas volcadas --
--                              --

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `barcode_final` (`barcode_final`),
  ADD KEY `id_corte` (`id_corte`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `logs`
--

ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`permisos_acceso`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `cortes`
--
  ALTER TABLE `cortes`
    ADD PRIMARY KEY (`id_corte`),
    ADD UNIQUE KEY `nombre_corte` (`nombre_corte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cortes`
--
ALTER TABLE `cortes`
  MODIFY `id_corte` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `socios`
--
ALTER TABLE `socios`
  ADD CONSTRAINT `socios_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `socios_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_corte`) REFERENCES `cortes` (`id_corte`) ON UPDATE CASCADE;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

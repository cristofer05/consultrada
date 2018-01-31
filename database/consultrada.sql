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

--
-- Estructura de tabla para la tabla `productos`
--
CREATE TABLE `productos` (
  `id_producto` int(6) NOT NULL,
  `barcode` varchar(18) NOT NULL,
  `barcode_final` varchar(18) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `missing` varchar(20) NOT NULL,
  `qty` int(6) NOT NULL,
  `ubicacion` varchar(10) NOT NULL,
  `nu_foto` varchar(20) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `realizado` varchar(20) NOT NULL,
  `imagen` varchar(70) NOT NULL,
  `id_corte` int(6) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty_total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `productos` (`id_producto`, `barcode`, `barcode_final`, `nombre_producto`, `condicion`, `missing`, `qty`, `ubicacion`, `nu_foto`, `comentario`, `realizado`, `imagen`, `fecha_creacion`, `qty_total`) VALUES
('1', '888182998397', '888182998397 GA B','HP 920XL Magenta High Yield Original Ink Cartridge (CD973AN)', 'GA', 'B', 5, 'B05','101', 'N/A', 'NO', 'notebook.jpg', '2018-01-25 18:43:20',5),
('2', '013803238310', '888182998397 O M','Black & Decker Lithium Hand Vacuum Lightweight Portable (Red)', 'O', 'M', 2, 'A02','102', 'N/A', 'NO', 'playstation.jpg', '2018-01-25 18:43:20',10),
('3', '884420736783', '888182998397','AT&T Prepaid - Bring Your Own Phone or Tablet SIM Card (AT&T)', 'NEW', '-', 1, 'B25','103', 'N/A', 'NO', 'iphone.jpg', '2018-01-25 18:43:20',25);

-- --------------------------------------------------------

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

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id_log` int(6) NOT NULL,
  `id_producto` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `fecha_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `registro` varchar(200) NOT NULL,
  `qty` int(6) NOT NULL,
  `edicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id_log`, `id_producto`, `id_usuario`, `fecha_log`, `registro`, `qty`,`edicion`) VALUES
(1, 1, 1, '2018-01-25 17:09:06', 'Articulo creado', 5,'condicion'),
(2, 2, 1, '2018-01-25 17:09:06', 'Articulo creado', 2,'cantidad'),
(3, 3, 1, '2018-01-25 17:09:06', 'Articulo creado', 1,'titulo');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `cortes`
--

CREATE TABLE `cortes` (
  `id_corte` int(3) NOT NULL,
  `nombre_corte` varchar(100) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `qty_productos` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(3) NOT NULL,
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
(1, 'admin', 'Lord Computer Admin', '21232f297a57a5a743894a0e4a801fc3', 'info@lordcomputer.com', '827-123-4564', 'foto.jpg', 'Super Admin', 'activo', '2017-01-26 08:15:15', '2017-01-26 08:15:15'),
(2, 'demo', 'Demostracion', '21232f297a57a5a743894a0e4a801fc3', 'demo@demo.com', '809-000-9999', '1469574176_users-7.png', 'Almacen', 'activo', '2017-01-26 22:34:03', '2017-01-26 22:34:03');

--                              --
-- Índices para tablas volcadas --
--                              --

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `barcode_final` (`barcode_final`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indices de la tabla `transaccion_medicamentos`
--

ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_producto` (`id_producto`);

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
-- Filtros para la tabla `transaccion_medicamentos`
--
/*
ALTER TABLE `transaccion_medicamentos`
  ADD CONSTRAINT `transaccion_medicamentos_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `socios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_medicamentos_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
*/
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

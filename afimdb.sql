-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-10-2020 a las 21:41:13
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `afimdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenan`
--

DROP TABLE IF EXISTS `almacenan`;
CREATE TABLE IF NOT EXISTS `almacenan` (
  `ID_BodProd` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto_FK` int(11) NOT NULL,
  `id_bodega_FK` int(11) NOT NULL,
  `fecha_guardado` date NOT NULL,
  PRIMARY KEY (`ID_BodProd`),
  KEY `Id_producto_FK` (`id_producto_FK`,`id_bodega_FK`),
  KEY `Id_bodega_FK` (`id_bodega_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodegas`
--

DROP TABLE IF EXISTS `bodegas`;
CREATE TABLE IF NOT EXISTS `bodegas` (
  `ID_bodega` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  PRIMARY KEY (`ID_bodega`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `ID_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(20) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido_1` varchar(45) NOT NULL,
  `apellido_2` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_clientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clisuc`
--

DROP TABLE IF EXISTS `clisuc`;
CREATE TABLE IF NOT EXISTS `clisuc` (
  `ID_CliSuc` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente_FK` int(11) NOT NULL,
  `id_sucursal_FK` int(11) NOT NULL,
  PRIMARY KEY (`ID_CliSuc`),
  KEY `Id_cliente_FK` (`id_cliente_FK`,`id_sucursal_FK`),
  KEY `Id_sucursal_FK` (`id_sucursal_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_factura`
--

DROP TABLE IF EXISTS `detalles_factura`;
CREATE TABLE IF NOT EXISTS `detalles_factura` (
  `ID_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto_FK` int(11) NOT NULL,
  `id_factura_FK` int(11) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `cant_total` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  PRIMARY KEY (`ID_detalle`),
  KEY `Id_producto_FK` (`id_producto_FK`,`id_factura_FK`),
  KEY `Id_factura_FK` (`id_factura_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `ID_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `NIT` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  PRIMARY KEY (`ID_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=1424 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`ID_empresa`, `NIT`, `nombre`, `direccion`, `telefono`) VALUES
(1, '456789', 'Olimpica', 'CLL90KR3C-40', 3204728);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregan`
--

DROP TABLE IF EXISTS `entregan`;
CREATE TABLE IF NOT EXISTS `entregan` (
  `ID_ProvProd` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto_FK` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `existencias_entregadas` int(11) NOT NULL,
  PRIMARY KEY (`ID_ProvProd`),
  KEY `Id_producto_FK` (`id_producto_FK`,`id_proveedor`),
  KEY `Id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

DROP TABLE IF EXISTS `facturas`;
CREATE TABLE IF NOT EXISTS `facturas` (
  `ID_factura` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_creada` datetime NOT NULL,
  `iva` tinyint(3) NOT NULL,
  `tipo_pago` tinyint(1) NOT NULL,
  `id_cliente_FK` int(11) NOT NULL,
  PRIMARY KEY (`ID_factura`),
  KEY `Id_cliente_FK` (`id_cliente_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `ID_productos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `existencias` int(11) NOT NULL,
  `lote` date NOT NULL,
  `vencimiento` date NOT NULL,
  `precio_compra` int(11) NOT NULL,
  PRIMARY KEY (`ID_productos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `ID_proveedores` int(11) NOT NULL AUTO_INCREMENT,
  `NIT` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  PRIMARY KEY (`ID_proveedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
CREATE TABLE IF NOT EXISTS `sucursales` (
  `ID_sucursales` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_empresa_FK` int(11) NOT NULL,
  PRIMARY KEY (`ID_sucursales`),
  KEY `ID_empresa_FK` (`id_empresa_FK`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`ID_sucursales`, `nombre`, `direccion`, `telefono`, `id_empresa_FK`) VALUES
(1, 'Olimpica santo domingo', 'CLL90KR3C-40', 3204728, 1),
(2, 'Olimpica san luis', 'CLL30KR3C-40', 3207828, 1),
(3, 'Olimpica santo thomas', 'CLL90KR3C-40', 3207828, 1),
(4, 'Olimpica guaviare', 'CLL80KR3C-40', 3214728, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacenan`
--
ALTER TABLE `almacenan`
  ADD CONSTRAINT `almacenan_ibfk_1` FOREIGN KEY (`Id_producto_FK`) REFERENCES `productos` (`ID_productos`) ON UPDATE CASCADE,
  ADD CONSTRAINT `almacenan_ibfk_2` FOREIGN KEY (`Id_bodega_FK`) REFERENCES `bodegas` (`ID_bodega`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `clisuc`
--
ALTER TABLE `clisuc`
  ADD CONSTRAINT `clisuc_ibfk_2` FOREIGN KEY (`Id_cliente_FK`) REFERENCES `clientes` (`ID_clientes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clisuc_ibfk_3` FOREIGN KEY (`Id_sucursal_FK`) REFERENCES `sucursales` (`ID_sucursales`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_factura`
--
ALTER TABLE `detalles_factura`
  ADD CONSTRAINT `detalles_factura_ibfk_1` FOREIGN KEY (`Id_producto_FK`) REFERENCES `productos` (`ID_productos`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_factura_ibfk_2` FOREIGN KEY (`Id_factura_FK`) REFERENCES `facturas` (`ID_factura`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `entregan`
--
ALTER TABLE `entregan`
  ADD CONSTRAINT `entregan_ibfk_1` FOREIGN KEY (`Id_producto_FK`) REFERENCES `productos` (`ID_productos`) ON UPDATE CASCADE,
  ADD CONSTRAINT `entregan_ibfk_2` FOREIGN KEY (`Id_proveedor`) REFERENCES `proveedores` (`ID_proveedores`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`Id_cliente_FK`) REFERENCES `clientes` (`ID_clientes`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `sucursales_ibfk_1` FOREIGN KEY (`ID_empresa_FK`) REFERENCES `empresas` (`ID_empresa`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

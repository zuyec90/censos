-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2015 a las 17:34:20
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `censos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_fliar`
--

CREATE TABLE IF NOT EXISTS `grupo_fliar` (
  `Nombre` varchar(30) NOT NULL COMMENT 'Nombre de la persona del grupo familiar',
  `Apellido` varchar(30) NOT NULL COMMENT 'Apellido de la persona del grupo familiar',
  `Cedula` int(10) NOT NULL COMMENT 'Cedula de la persona del grupo familiar',
  `Sexo` varchar(9) NOT NULL COMMENT 'Sexo de la persona del grupo familiar',
  `Fnacimiento` int(8) NOT NULL COMMENT 'Fecha de nacimiento de la persona del grupo familiar',
  `Edad` int(3) NOT NULL COMMENT 'Edad de la persona del grupo familiar',
  `Incapacitado` varchar(2) NOT NULL COMMENT 'Si la persona es discapicitada',
  `Tipoincap` varchar(20) NOT NULL COMMENT 'Tipo de incapacidad de la persona del grupo familiar',
  `Emb_tempr` varchar(2) NOT NULL COMMENT 'Si lapersona posee un embarazo temprano',
  `Parentesco` varchar(10) NOT NULL COMMENT 'Parentesco de la persona del grupo familiar con el jefe de familia',
  `Nintrucción` varchar(20) NOT NULL COMMENT 'Nivel de intruccion de la persona del grupo familiar',
  `CNE` varchar(2) NOT NULL COMMENT 'Si la persona esta inscrita en el CNE',
  `Profesion` varchar(20) NOT NULL COMMENT 'Profesion de la persona del grupo familiar',
  `Pensionado` varchar(2) NOT NULL COMMENT 'Si la persopna es pensionada',
  `Ing_mensual` varchar(10) NOT NULL COMMENT 'Ingreso mensual de la persona del grupo familiar',
  `Observacion` varchar(50) NOT NULL COMMENT 'Si se le desea agregar alguna otra observacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Caracteristicas del grupo familiar con el jefe de familia';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefeflia`
--

CREATE TABLE IF NOT EXISTS `jefeflia` (
  `Nombres` varchar(30) NOT NULL COMMENT 'nombre jefe flia',
  `Apellidos` varchar(30) NOT NULL COMMENT 'apellido jefe flia',
  `id_cedula` varchar(10) NOT NULL COMMENT 'cedula jefe flia',
  `Fnacimiento` int(8) NOT NULL COMMENT 'fecha nacimiento jefe flia',
  `Edad` int(3) NOT NULL COMMENT 'edad jefe flia',
  `Sexo` varchar(9) NOT NULL COMMENT 'sexo jefe flia',
  `CNE` varchar(2) NOT NULL COMMENT 'CNE jefe flia',
  `Tcomunidad` varchar(8) NOT NULL COMMENT 'tiempo en la comunidad  jefe flia',
  `Incapacitado` varchar(2) NOT NULL COMMENT 'incapacitado jefe flia',
  `Tipoincap` varchar(20) NOT NULL COMMENT 'tipo incapacidad jefe flia',
  `Pensionado` varchar(2) NOT NULL COMMENT 'pensionado jefe flia',
  `Institucion` varchar(20) NOT NULL COMMENT 'institucion pensionado jefe flia',
  `Telfcel` int(11) NOT NULL COMMENT 'telefono celular jefe flia',
  `Telfhab` int(11) NOT NULL COMMENT 'telefono habitacion  jefe flia',
  `Telfofic` int(11) NOT NULL COMMENT 'telefono ofic jefe flia',
  `Email` varchar(30) NOT NULL COMMENT 'email jefe flia',
  `Ecivil` varchar(10) NOT NULL COMMENT 'estado civil jefe flia',
  `Ninstruccion` varchar(20) NOT NULL COMMENT 'nivel de instruccion jefe flia',
  `Profesion` varchar(20) NOT NULL COMMENT 'profesion jefe flia',
  `Trabaja` varchar(2) NOT NULL COMMENT 'trabaja jefe flia',
  `Ingresofliar` varchar(22) NOT NULL COMMENT 'clasificacion ingreso familiar',
  `Ingreso` varchar(10) NOT NULL COMMENT 'ingreso mensual jefe flia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='registro de datos de censo';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupo_fliar`
--
ALTER TABLE `grupo_fliar`
 ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `jefeflia`
--
ALTER TABLE `jefeflia`
 ADD PRIMARY KEY (`id_cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

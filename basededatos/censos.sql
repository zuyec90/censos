-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2015 a las 06:32:47
-- Versión del servidor: 5.5.44-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.13

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
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `idjefe_familia` int(255) NOT NULL,
  `fecha_accion` date NOT NULL,
  `accion` text NOT NULL,
  PRIMARY KEY (`id_bitacora`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `id_user`, `idjefe_familia`, `fecha_accion`, `accion`) VALUES
(1, 0, 0, '2015-08-03', 'Eliminar'),
(2, 0, 0, '0000-00-00', ''),
(3, 0, 0, '0000-00-00', ''),
(4, 0, 0, '0000-00-00', ''),
(5, 0, 0, '0000-00-00', ''),
(6, 5, 34, '2015-10-11', 'Creacion del primer registro'),
(7, 5, 35, '2015-10-11', 'Creacion del primer registro'),
(8, 5, 36, '2015-10-19', 'Creacion del primer registro'),
(9, 5, 37, '2015-10-19', 'Creacion del primer registro'),
(10, 5, 38, '2015-10-19', 'Creacion del primer registro'),
(11, 5, 39, '2015-10-19', 'Creacion del primer registro'),
(12, 5, 39, '2015-10-19', 'Modifico el registro'),
(13, 5, 39, '2015-10-19', 'Modifico el registro'),
(14, 5, 39, '2015-10-19', 'Modifico el registro'),
(15, 5, 39, '2015-10-19', 'Modifico el registro'),
(16, 5, 39, '2015-10-19', 'Modifico el registro'),
(17, 5, 37, '2015-10-19', 'Modifico el registro'),
(18, 5, 36, '2015-10-19', 'Modifico el registro'),
(19, 5, 36, '2015-10-19', 'Modifico el registro'),
(20, 5, 36, '2015-10-19', 'Modifico el registro'),
(21, 5, 36, '2015-10-19', 'Modifico el registro'),
(22, 5, 36, '2015-10-19', 'Modifico el registro'),
(23, 5, 36, '2015-10-19', 'Modifico el registro'),
(24, 5, 39, '2015-10-23', 'Modifico el registro'),
(25, 5, 39, '2015-10-23', 'Modifico el registro'),
(26, 5, 39, '2015-10-23', 'Modifico el registro'),
(27, 5, 39, '2015-10-23', 'Modifico el registro'),
(28, 5, 39, '2015-10-23', 'Modifico el registro'),
(29, 5, 39, '2015-10-23', 'Modifico el registro'),
(30, 5, 39, '2015-10-23', 'Modifico el registro'),
(31, 5, 39, '2015-10-23', 'Modifico el registro'),
(32, 5, 39, '2015-10-23', 'Modifico el registro'),
(33, 5, 39, '2015-10-23', 'Modifico el registro'),
(34, 5, 39, '2015-10-23', 'Modifico el registro'),
(35, 5, 39, '2015-10-23', 'Modifico el registro'),
(36, 5, 39, '2015-10-23', 'Modifico el registro'),
(37, 5, 39, '2015-10-23', 'Modifico el registro'),
(38, 5, 39, '2015-10-23', 'Modifico el registro'),
(39, 5, 36, '2015-10-23', 'Elimino el registro '),
(40, 5, 39, '2015-10-23', 'Elimino el registro '),
(41, 5, 38, '2015-10-23', 'Elimino el registro '),
(42, 5, 40, '2015-10-24', 'Creacion del primer registro'),
(43, 5, 41, '2015-10-24', 'Creacion del primer registro'),
(44, 5, 42, '2015-10-24', 'Creacion del primer registro'),
(45, 5, 41, '2015-10-24', 'Elimino el registro '),
(46, 5, 42, '2015-10-24', 'Elimino el registro '),
(47, 5, 40, '2015-10-24', 'Elimino el registro '),
(48, 5, 43, '2015-10-25', 'Creacion del primer registro'),
(49, 5, 44, '2015-10-25', 'Creacion del primer registro'),
(50, 5, 45, '2015-10-25', 'Creacion del primer registro'),
(51, 5, 46, '2015-10-25', 'Creacion del primer registro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_fliar`
--

CREATE TABLE IF NOT EXISTS `grupo_fliar` (
  `id_familiar` int(255) NOT NULL AUTO_INCREMENT,
  `idjefe_familia` int(255) NOT NULL,
  `nacionalidad` varchar(2) NOT NULL,
  `cedula` int(8) NOT NULL COMMENT 'cedula',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre de la persona del grupo familiar',
  `apellido` varchar(30) NOT NULL COMMENT 'Apellido de la persona del grupo familiar',
  `sexo` varchar(1) NOT NULL COMMENT 'Sexo de la persona del grupo familiar',
  `fecha_nacimiento` date NOT NULL COMMENT 'Fecha de nacimiento de la persona del grupo familiar',
  `edad` int(3) NOT NULL COMMENT 'Edad de la persona del grupo familiar',
  `incapacitado` varchar(2) NOT NULL COMMENT 'Si la persona es discapicitada',
  `Tipo_incapacitado` varchar(20) NOT NULL COMMENT 'Tipo de incapacidad de la persona del grupo familiar',
  `Embarazo_tempr` varchar(2) NOT NULL COMMENT 'Si lapersona posee un embarazo temprano',
  `parentesco` varchar(10) NOT NULL COMMENT 'Parentesco de la persona del grupo familiar con el jefe de familia',
  `nivel_instruccion` varchar(20) NOT NULL COMMENT 'Nivel de intruccion de la persona del grupo familiar',
  `cne` varchar(2) NOT NULL COMMENT 'Si la persona esta inscrita en el CNE',
  `profesion` varchar(20) NOT NULL COMMENT 'Profesion de la persona del grupo familiar',
  `pensionado` varchar(2) NOT NULL COMMENT 'Si la persopna es pensionada',
  `ingreso_mensual` varchar(6) NOT NULL COMMENT 'Ingreso mensual de la persona del grupo familiar',
  `observacion` varchar(50) NOT NULL COMMENT 'Si se le desea agregar alguna otra observacion',
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id_familiar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='Caracteristicas del grupo familiar con el jefe de familia' AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `grupo_fliar`
--

INSERT INTO `grupo_fliar` (`id_familiar`, `idjefe_familia`, `nacionalidad`, `cedula`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `edad`, `incapacitado`, `Tipo_incapacitado`, `Embarazo_tempr`, `parentesco`, `nivel_instruccion`, `cne`, `profesion`, `pensionado`, `ingreso_mensual`, `observacion`, `status`) VALUES
(46, 37, 'V', 16516516, 'SDsad', 'dsadasd', 'f', '2015-10-13', 132, 'si', 'sdaa', 'si', 'asdsdasd', 'Bachiller', 'si', 'sdasdas', 'si', '31231', 'sdasdasd', 1),
(47, 37, 'V', 12312312, 'sdasd', 'asdasd', 'f', '2015-10-20', 123, 'si', 'cxsadasd', 'si', 'dasdasd', 'Bachiller', 'si', 'wqeqwe', 'si', 'eqweqw', 'qweqweqw', 1),
(48, 37, 'V', 12312312, 'sdasd', 'asdasd', 'f', '2015-10-20', 123, 'si', 'cxsadasd', 'si', 'dasdasd', 'Bachiller', 'si', 'wqeqwe', 'si', 'eqweqw', 'qweqweqw', 1),
(49, 37, 'V', 23112312, 'sadad', 'asdsdas', 'f', '2015-10-21', 231, 'si', 'saasw', 'si', 'dadasd', 'BÃ¡sica', 'no', 'asdasdas', 'no', '213123', 'adasd', 1),
(50, 37, 'V', 2312312, 'zuyewcci', 'sadasd2', 'f', '2015-10-14', 123, 'si', 'asdasdasd', 'si', 'dasdas', ' TÃ©cnico Superior', 'si', 'asdasd', 'si', '213123', 'dsadads', 1),
(51, 38, 'V', 321321, 'dasdasd', 'ASDASDa', 'f', '2015-10-19', 32, 'si', 'sdsdasd', 'si', 'asdasdas', 'dasd', 'si', 'asdasd', 'si', '123123', '23213213', 1),
(52, 36, 'V', 12312323, 'aqdasdasd', 'sadasdasdasd', 'm', '2015-10-19', 12, 'no', '', 'no', 'sadasdasd', ' Sin InstrucciÃ³n', 'no', 'dasdsadasd', 'no', '213123', 'asdasdasd', 1),
(53, 39, 'V', 2147483647, 'csadcsdczzz', 'sadasda adasszz', 'm', '2015-10-23', 12322, 'no', '22', 'no', '2ssss', '', 'no', 'sdasdasd', 'no', '22', '222', 1),
(54, 37, 'V', 11111111, 'prueba de registro', 'sadasdas', 'f', '2015-10-24', 11, 'si', '111111111111111', 'si', 'asdasdasd', 'Bachiller', 'si', 'eqweqw', 'si', '131231', 'asdasdasdasd', 1),
(55, 46, 'V', 21312123, 'aaaaaa', 'dasdasd', 'f', '2015-10-25', 123, 'si', 'sdasdasdasdasd', 'si', 'dasdasd', ' Sin InstrucciÃ³n', 'si', 'asdasd', 'si', '132123', 'ewqweqwe', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefeflia`
--

CREATE TABLE IF NOT EXISTS `jefeflia` (
  `idjefe_familia` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',
  `nombres` varchar(30) NOT NULL COMMENT 'nombre jefe flia',
  `apellidos` varchar(30) NOT NULL COMMENT 'apellido jefe flia',
  `nacionalidad` varchar(1) NOT NULL,
  `cedula` int(10) NOT NULL COMMENT 'cedula jefe flia',
  `fecha_nacimiento` date NOT NULL COMMENT 'fecha nacimiento jefe flia',
  `edad` int(3) NOT NULL COMMENT 'edad jefe flia',
  `sexo` varchar(1) NOT NULL COMMENT 'sexo jefe flia',
  `cne` varchar(2) NOT NULL COMMENT 'CNE jefe flia',
  `tiempo_comunidad` varchar(6) NOT NULL COMMENT 'tiempo en la comunidad  jefe flia',
  `incapacitado` varchar(2) NOT NULL COMMENT 'incapacitado jefe flia',
  `tipo_incapacitado` varchar(20) NOT NULL COMMENT 'tipo incapacidad jefe flia',
  `pensionado` varchar(2) NOT NULL COMMENT 'pensionado jefe flia',
  `institucion` varchar(20) NOT NULL COMMENT 'institucion pensionado jefe flia',
  `codigo_cel` int(4) NOT NULL COMMENT 'codigo de telefono',
  `telfcel` int(11) NOT NULL COMMENT 'telefono celular jefe flia',
  `codigo_hab` int(4) NOT NULL COMMENT 'codigo ',
  `telfhab` int(11) NOT NULL COMMENT 'telefono habitacion  jefe flia',
  `codigo_ofic` int(4) NOT NULL COMMENT 'codigo oficina',
  `telfofic` int(11) NOT NULL COMMENT 'telefono ofic jefe flia',
  `email` varchar(30) NOT NULL COMMENT 'email jefe flia',
  `estado_civil` varchar(10) NOT NULL COMMENT 'estado civil jefe flia',
  `nivel_instruccion` varchar(20) NOT NULL COMMENT 'nivel de instruccion jefe flia',
  `status` int(10) NOT NULL,
  `profesion` varchar(20) NOT NULL COMMENT 'profesion jefe flia',
  `trabaja` varchar(2) NOT NULL COMMENT 'trabaja jefe flia',
  `clasificacion_ingreso_familiar` varchar(22) NOT NULL COMMENT 'clasificacion ingreso familiar',
  `ingreso_mensual` int(6) NOT NULL COMMENT 'ingreso mensual jefe flia',
  `fecha_creacion` datetime NOT NULL,
  PRIMARY KEY (`idjefe_familia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='registro de datos de censo' AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `jefeflia`
--

INSERT INTO `jefeflia` (`idjefe_familia`, `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `codigo_cel`, `telfcel`, `codigo_hab`, `telfhab`, `codigo_ofic`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`, `fecha_creacion`) VALUES
(36, 'asda', 'assadasa', 'v', 255555, '2015-10-11', 21, 'e', 'si', 'sdas', 'si', '1asdasdasdasdasdasda', 'si', 'asdadasd', 426, 1231231, 0, 0, 0, 0, 'sauwwwwwwwwwwwl_cfa@hotmail.co', 'soltero (a', 'Basica', 0, 'qweqweqweqwe', 'si', 'Semanal', 123123, '2015-10-19 04:16:01'),
(37, 'sdsa', 'sdas3', 'v', 13212312, '2015-10-19', 12, '', 'si', '12312', 'si', 'asasdasdasdasdasdxas', 'si', 'qweqw', 416, 2131233, 0, 0, 0, 0, 'saulqweqweqwe_cfa@hotmail.com', 'soltero (a', 'Sin Instruccion', 1, 'qweqwe', 'si', '', 123123, '2015-10-19 04:20:38'),
(38, 'dasasdas', 'dasdas', 'v', 213123, '2015-10-08', 0, 'f', 'si', 'qweqw', 'si', 'asdasdaqwesqweqadasd', 'si', 'sdasd', 426, 2131231, 0, 0, 0, 0, '', 'soltero (a', 'Basica', 0, 'asdasdas', 'si', 'Semanal', 123123, '2015-10-19 04:27:56'),
(39, 'asdas', 'asdasd11133322=', 'e', 1231231, '2015-10-20', 12, 'v', 'no', '12123=', 'no', '21312sdasdadasdasda', 'no', 'qweqweq', 416, 12312312, 0, 5444, 0, 21231211, 'saul_wcfa@hotmail.com', 'Divorciado', 'Bachiller', 0, 'qwqweqwe2', 'no', '', 12312, '2015-10-19 04:30:53'),
(40, 'zullys', 'marcano', 'v', 8453223, '1964-03-24', 51, 'f', 'si', '1 anio', 'no', '', 'no', '', 426, 2890251, 212, 3266565, 0, 0, '', '', '', 0, '', '', '', 0, '2015-10-14 06:12:36'),
(41, 'dfdsf', 'asdasd', 'v', 23123123, '2015-10-24', 123, 'f', 'si', '231212', 'si', 'dasdasdaasdasasdsasw', 'si', 'dsads', 416, 2312312, 0, 0, 0, 0, '', 'Casado (a)', 'Bachiller', 0, 'dasas', 'si', 'Diario', 312312, '2015-10-24 21:48:28'),
(42, 'dfdsf', 'asdasd', 'v', 11111555, '2015-10-24', 123, 'f', 'si', '231212', 'si', 'dasdasdaasdasasdsasw', 'si', 'dsads', 416, 2312312, 212, 1111111, 212, 2222222, '2222222@22222222222.com', 'Casado (a)', 'Bachiller', 0, 'dasas', 'si', 'Diario', 312312, '2015-10-24 21:57:29'),
(43, 'hola', 'valera', 'v', 18820856, '1992-02-06', 23, 'f', 'si', '2', 'no', '', 'no', '', 426, 8110256, 0, 0, 0, 0, '', 'soltero (a', 'Tecnico Superior', 1, '', 'si', '', 165465, '2015-10-25 06:43:01'),
(44, 'asdafg', 'dhthdhgh', 'v', 36889898, '2015-10-16', 42, 'f', 'si', 'df', 'no', '', 'no', '', 0, 0, 0, 0, 0, 0, '', '', '', 1, '', '', '', 0, '2015-10-25 07:00:27'),
(45, 'dasdas', 'sdad', 'v', 12312312, '2015-10-25', 123, 'f', 'si', 'sdasda', 'si', 'qweqweqweqweqweqweqw', 'si', 'qwqwdqwdqw', 416, 2131231, 212, 3123123, 212, 23123, 'asd@sadasd.com', 'Divorciado', 'Tecnico Medio', 1, 'qweqwe', 'si', 'Semanal', 0, '2015-10-25 09:34:27'),
(46, 'dasdas', 'sdad', 'v', 78954623, '2015-10-25', 123, 'f', 'si', 'sdasda', 'si', 'qweqweqweqweqweqweqw', 'si', 'qwqwdqwdqw', 416, 2131231, 212, 3123123, 212, 23123, 'asd@sadasd.com', 'Divorciado', 'Tecnico Medio', 1, 'qweqwe', 'si', 'Semanal', 0, '2015-10-25 09:39:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE IF NOT EXISTS `notificacion` (
  `id_notificacion` int(255) NOT NULL AUTO_INCREMENT,
  `id_respuesta` int(255) NOT NULL,
  `id_user_rece` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_creacion` date NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_notificacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=84 ;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_notificacion`, `id_respuesta`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES
(48, 47, 5, 2, 'Hola que tal', '2015-06-28', 1),
(51, 48, 2, 1, 'Como estas?', '2015-06-29', 1),
(52, 48, 2, 5, 'cambio', '2015-06-29', 1),
(60, 0, 1, 4, 'correoooooo', '2015-09-29', 1),
(61, 0, 6, 5, 'Hola', '2015-10-01', 2),
(62, 0, 6, 6, 'Chao', '2015-10-01', 2),
(63, 62, 5, 5, 'que vaina ', '2015-10-11', 1),
(64, 62, 5, 8, 'hay vale', '2015-10-11', 0),
(65, 61, 5, 3, '', '2015-10-11', 0),
(66, 60, 4, 1, '', '2015-10-13', 0),
(67, 60, 6, 4, 'gegggdgdgdfg', '2015-10-13', 2),
(68, 60, 6, 4, '', '2015-10-13', 2),
(69, 61, 3, 5, '', '2015-10-13', 0),
(70, 60, 1, 4, '', '2015-10-13', 1),
(71, 60, 1, 4, '', '2015-10-13', 1),
(72, 0, 9, 6, 'wasdas', '2015-10-14', 0),
(73, 0, 9, 11, 'dfsfsdf', '2015-10-19', 0),
(74, 0, 9, 11, 'dfsfsdf', '2015-10-19', 0),
(75, 0, 4, 11, 'GHGHGH', '2015-10-19', 0),
(76, 0, 13, 11, 'este es un mensaje', '2015-10-23', 1),
(77, 76, 11, 13, 'ya esta listo mi pana ', '2015-10-23', 1),
(78, 77, 13, 11, 'verga que ladilla', '2015-10-24', 1),
(79, 0, 6, 11, 'este es un mensaje que debe ver saul', '2015-10-24', 2),
(80, 79, 11, 6, 'vamosa ver si responde saul ', '2015-10-24', 1),
(81, 80, 6, 11, 'verga si respondio', '2015-10-24', 2),
(82, 0, 13, 11, 'vyufytfgyutfiufgtyu', '2015-10-25', 0),
(83, 0, 1, 11, 'njhgvhgvgh hv hghyvi', '2015-10-25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `tipo_perfil` int(20) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE IF NOT EXISTS `respuesta` (
  `id_respuesta` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `respuesta_1` varchar(200) NOT NULL,
  `respuesta_2` varchar(200) NOT NULL,
  `respuesta_3` varchar(200) NOT NULL,
  `cant_intentos` int(2) NOT NULL,
  PRIMARY KEY (`id_respuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nacionalidad` varchar(2) NOT NULL COMMENT 'nacionalidad usuarios',
  `cedula` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` int(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `voceria` varchar(60) NOT NULL,
  `perfil` int(1) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `fecha_creado` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `email`, `celular`, `sexo`, `voceria`, `perfil`, `usuario`, `contrasenia`, `status`, `fecha_creado`) VALUES
(1, 'usuario', '1', '', 0, 'nnn@csd.com', 12, 'm', 'df', 2, 'prueba', '123456', 1, '2015-05-13'),
(3, 'ddq', 'dded1sdasd', '', 231231231, 'zuyecci@gmail.com1', 2147483647, 'm', 'usuario11', 1, 'fcg1sd', 'fgf1', 2, '2015-05-29'),
(4, 'sadasd', 'sadasd', '', 125216, 'saul_cfa@hotmail.com', 1165161, 'f', 'usuario1', 1, 'gvghv', 'asdasd', 1, '2015-05-30'),
(5, 'saul1', 'dasdasd', 'e', 45616514, 'sdasdasdasdas@sadasd.asdajnkjnjk12', 156161652, 'm', 'usuario1', 1, 'usuario', '123456', 3, '2015-05-30'),
(6, 'saul de prueba', 'dasd', '', 23123, 'sadas@sdas.asd', 123123, 'm', 'usuario2', 2, 'SAUL', '2', 2, '2015-06-24'),
(7, 'jos', 'sassa', 'v', 1234567, 'saassa@dsdas.com', 1234567, 'm', 'Unidad de ContralorÃ­a Social', 2, 'asa', '12345', 3, '2015-10-05'),
(9, 'SDADAS2', 'ASDASD2', 'v', 12312334, 'DA2SDA@ASDASDASD2321.COM', 44444, 'm', 'Unidad Ejecutiva2', 1, 'saulsadas213123', '2', 1, '2015-10-11'),
(10, 'QWEQWEQWEQW545', 'QQWE', 'v', 15156165, 'DQWzuyecciv@hotmail.com', 2147483647, 'f', 'Unidad Ejecutiva', 2, '556465DASDAS', '1651651', 2, '2015-10-11'),
(11, 'root', 'sdas', 'e', 123456, '454zuyecciv@hotmail.com', 123213123, 'f', 'Unidad de ContralorÃ­a Social', 0, 'root', '123456', 2, '2015-10-11'),
(12, 'dasdas', 'sdadsdas', 'v', 15616516, 'sauasal_cfa@hotmail.com', 2147483647, 'f', 'Unidad Ejecutiva', 1, 'root211', '123456', 1, '2015-10-18'),
(13, 'ejemplo', 'de ', 'v', 12315646, 'asdassaul_cfa@hotmail.com', 2147483647, 'f', 'Unidad Ejecutiva', 1, 'dasd2', '123456', 1, '2015-10-18'),
(14, 'dasd', 'sadas', 'v', 14654654, 's565465465aul_cfa@hotmail.com', 2147483647, 'f', 'Unidad Ejecutiva', 2, 'asdasd4', '123456', 1, '2015-10-18'),
(15, 'ASdd', 'asdasd', 'v', 56465665, 'asdas454545d@asda.asda', 2147483647, 'f', 'Unidad de ContralorÃ­a Social', 1, 'root545454', '123456', 1, '2015-10-18'),
(16, 'sdasd', 'asdasd', 'v', 51516165, '454545saul_cfa@hotmail.com', 2147483647, 'f', 'Unidad Ejecutiva', 1, 'root54545454', '123456', 1, '2015-10-18'),
(17, 'Sdasd', 'sdasd', 'e', 12316516, 's151515aul_cfa@hotmail.com', 1516516515, 'f', 'Unidad de ContralorÃ­a Social', 1, 'asda', '123456', 1, '2015-10-18'),
(18, 'sdasd', 'asdasd', 'v', 56565656, 'sasdasdasaul_cfa@hotmail.com', 1234567, 'f', 'Unidad Ejecutiva', 1, 'asdas454', '123456', 1, '2015-10-18'),
(19, 'Sdasd', 'asdasdas', 'v', 13212313, 'sasasasd44aul_cfa@hotmail.com', 123456444, 'm', 'Unidad Ejecutiva', 2, 'dasdasdasd', '123456789', 1, '2015-10-18'),
(20, 'Asdasd', 'ASDASD', 'v', 45455465, 'Gdsadasdgomez@smartappsla.com', 2147483647, 'f', 'Unidad Ejecutiva', 1, 'asdasd', '123456', 1, '2015-10-18'),
(21, 'dasdasd', 'dasdas', 'v', 12312312, 'sdasdas23123dasdas@sadasd.asdajnkjnj', 2147483647, 'f', 'Unidad de ContralorÃ­a Social', 1, '123123', '123456', 2, '2015-10-18'),
(22, 'MAtthew', 'valeram', 'v', 25205809, 'matthew@gmail.com', 2147483647, 'm', 'Unidad de ContralorÃ­a Social', 1, 'mat', '123456', 1, '2015-10-25'),
(23, 'nuvo', 'catagu', 'v', 12345678, 'ctagagua@catagua.com', 2147483647, 'f', 'Unidad Ejecutiva', 1, 'catagua23123', '123456789', 1, '2015-10-28');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_respuesta`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

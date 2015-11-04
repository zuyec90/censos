-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2015 a las 04:29:42
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
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
`id_bitacora` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `idjefe_familia` int(255) NOT NULL,
  `fecha_accion` date NOT NULL,
  `accion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

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
(51, 5, 46, '2015-10-25', 'Creacion del primer registro'),
(52, 11, 56, '2015-10-29', 'se registro un familiar'),
(53, 11, 57, '2015-10-31', 'se registro un familiar'),
(54, 11, 47, '2015-11-01', 'Creacion del primer registro'),
(55, 11, 47, '2015-11-01', 'Modifico el registro'),
(56, 11, 47, '2015-11-01', 'Modifico el registro'),
(57, 11, 47, '2015-11-01', 'Modifico el registro'),
(58, 11, 44, '2015-11-01', 'Modifico el registro'),
(59, 11, 48, '2015-11-01', 'Creacion del primer registro'),
(60, 11, 58, '2015-11-01', 'se registro un familiar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_fliar`
--

CREATE TABLE IF NOT EXISTS `grupo_fliar` (
`id_familiar` int(255) NOT NULL,
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
  `status` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COMMENT='Caracteristicas del grupo familiar con el jefe de familia';

--
-- Volcado de datos para la tabla `grupo_fliar`
--

INSERT INTO `grupo_fliar` (`id_familiar`, `idjefe_familia`, `nacionalidad`, `cedula`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `edad`, `incapacitado`, `Tipo_incapacitado`, `Embarazo_tempr`, `parentesco`, `nivel_instruccion`, `cne`, `profesion`, `pensionado`, `ingreso_mensual`, `observacion`, `status`) VALUES
(57, 44, 'V', 31231321, 'dgfgdf', 'fgdfhdfh', 'm', '2015-10-09', 25, 'no', '', 'no', 'ghghdgh', 'BÃ¡sica', 'si', 'ghdfhdfhdfh', 'no', 'hdghh', 'ghdhdh', 1),
(58, 48, 'V', 8453223, 'zullys', 'marcano', 'f', '1968-03-24', 50, 'no', '', 'no', 'esposa', 'TÃ©cnico Medio', 'si', 'dfsfgsg', 'no', 'quince', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefeflia`
--

CREATE TABLE IF NOT EXISTS `jefeflia` (
`idjefe_familia` int(255) NOT NULL COMMENT 'Llave primaria',
  `estado` varchar(20) NOT NULL,
  `municipio` varchar(20) NOT NULL,
  `parroquia` varchar(20) NOT NULL,
  `sector` varchar(20) NOT NULL,
  `nombre_comunidad` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
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
  `estado_civil` varchar(15) NOT NULL COMMENT 'estado civil jefe flia',
  `nivel_instruccion` varchar(25) NOT NULL COMMENT 'nivel de instruccion jefe flia',
  `status` int(10) NOT NULL,
  `profesion` varchar(20) NOT NULL COMMENT 'profesion jefe flia',
  `trabaja` varchar(2) NOT NULL COMMENT 'trabaja jefe flia',
  `clasificacion_ingreso_familiar` varchar(22) NOT NULL COMMENT 'clasificacion ingreso familiar',
  `ingreso_mensual` int(6) NOT NULL COMMENT 'ingreso mensual jefe flia',
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COMMENT='registro de datos de censo';

--
-- Volcado de datos para la tabla `jefeflia`
--

INSERT INTO `jefeflia` (`idjefe_familia`, `estado`, `municipio`, `parroquia`, `sector`, `nombre_comunidad`, `direccion`, `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `codigo_cel`, `telfcel`, `codigo_hab`, `telfhab`, `codigo_ofic`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`, `fecha_creacion`) VALUES
(36, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'asda', 'assadasa', 'v', 255555, '2015-10-11', 21, 'e', 'si', 'sdas', 'si', '1asdasdasdasdasdasda', 'si', 'asdadasd', 426, 1231231, 0, 0, 0, 0, 'sauwwwwwwwwwwwl_cfa@hotmail.co', 'soltero (a)', 'Basica', 0, 'qweqweqweqwe', 'si', 'Semanal', 123123, '2015-10-19 04:16:01'),
(37, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'sdsa', 'sdas3', 'v', 13212312, '2015-10-19', 12, '', 'si', '12312', 'si', 'asasdasdasdasdasdxas', 'si', 'qweqw', 416, 2131233, 0, 0, 0, 0, 'saulqweqweqwe_cfa@hotmail.com', 'soltero (a)', 'Sin Instruccion', 1, 'qweqwe', 'si', '', 123123, '2015-10-19 04:20:38'),
(38, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'dasasdas', 'dasdas', 'v', 213123, '2015-10-08', 0, 'f', 'si', 'qweqw', 'si', 'asdasdaqwesqweqadasd', 'si', 'sdasd', 426, 2131231, 0, 0, 0, 0, '', 'soltero (a)', 'Basica', 1, 'asdasdas', 'si', 'Semanal', 123123, '2015-10-19 04:27:56'),
(39, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'asdas', 'asdasd11133322=', 'e', 1231231, '2015-10-20', 12, 'v', 'no', '12123=', 'no', '21312sdasdadasdasda', 'no', 'qweqweq', 416, 12312312, 0, 5444, 0, 21231211, 'saul_wcfa@hotmail.com', 'Divorciado', 'Bachiller', 0, 'qwqweqwe2', 'no', '', 12312, '2015-10-19 04:30:53'),
(40, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'zullys', 'marcano', 'v', 8453223, '1964-03-24', 51, 'f', 'si', '1 anio', 'no', '', 'no', '', 426, 2890251, 212, 3266565, 0, 0, '', '', '', 0, '', '', '', 0, '2015-10-14 06:12:36'),
(41, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'dfdsf', 'asdasd', 'v', 23123123, '2015-10-24', 123, 'f', 'si', '231212', 'si', 'dasdasdaasdasasdsasw', 'si', 'dsads', 416, 2312312, 0, 0, 0, 0, '', 'Casado (a)', 'Bachiller', 0, 'dasas', 'si', 'Diario', 312312, '2015-10-24 21:48:28'),
(42, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'dfdsf', 'asdasd', 'v', 11111555, '2015-10-24', 123, 'f', 'si', '231212', 'si', 'dasdasdaasdasasdsasw', 'si', 'dsads', 416, 2312312, 212, 1111111, 212, 2222222, '2222222@22222222222.com', 'Casado (a)', 'Bachiller', 1, 'dasas', 'si', 'Diario', 312312, '2015-10-24 21:57:29'),
(43, 'Distrito Capital', 'Libertador', 'Sucre', '', '', 'fgdfhfhgfgh', 'hola', 'valera', 'v', 18820856, '1992-02-06', 23, 'f', 'si', '2', 'no', '', 'no', '', 426, 8110256, 0, 0, 0, 0, '', 'soltero (a)', 'Tecnico Superior', 1, '', 'si', '', 165465, '2015-10-25 06:43:01'),
(44, 'Distrito Capital', 'Libertador', 'Sucre', '', '', 'gsgfsgffg', 'asdafg', 'dhthdhgh', 'v', 36889898, '2015-10-16', 42, 'f', 'si', 'df', 'no', '', 'no', '0', 0, 0, 0, 0, 0, 0, '', '', '', 1, '', '', '', 0, '2015-10-25 07:00:27'),
(45, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'dasdas', 'sdad', 'v', 12312312, '2015-10-25', 123, 'f', 'no', 'sdasda', 'si', 'qweqweqweqweqweqweqw', 'si', 'qwqwdqwdqw', 416, 2131231, 212, 3123123, 212, 23123, 'asd@sadasd.com', 'Divorciado', 'Tecnico Medio', 1, 'qweqwe', 'si', 'Semanal', 0, '2015-10-25 09:34:27'),
(46, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'dasdas', 'sdad', 'v', 78954623, '2015-10-25', 123, 'f', 'si', 'sdasda', 'si', 'qweqweqweqweqweqweqw', 'si', 'qwqwdqwdqw', 416, 2131231, 212, 3123123, 212, 23123, 'asd@sadasd.com', 'Divorciado', 'Tecnico Medio', 1, 'qweqwe', 'si', 'Semanal', 0, '2015-10-25 09:39:25'),
(47, 'Distrito Capital', 'Libertador', 'Sucre', '', '', '', 'ureyjfyjstjngjdkfg', 'gkjdsngjksdnfg', 'v', 12345678, '2014-12-01', 1, 'm', 'no', '5', 'no', '', 'no', '', 0, 0, 0, 0, 0, 0, '', 'Concubinato (a)', 'Tecnico Superior', 1, 'nfhnhn', 'no', '', 545452, '2015-11-01 07:40:48'),
(48, 'Distrito Capital', 'Libertador', 'Sucre', 'aefefef', 'ewfwefwef', 'wefwefwef', 'jesus', 'centyeno', 'v', 8453226, '1965-10-15', 50, 'm', 'si', '10', 'no', '', 'no', '', 416, 5656565, 0, 0, 0, 0, '', 'Casado (a)', 'Bachiller', 1, 'effedf', 'si', 'Quincenal', 566665, '2015-11-01 15:26:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE IF NOT EXISTS `notificacion` (
`id_notificacion` int(255) NOT NULL,
  `id_respuesta` int(255) NOT NULL,
  `id_user_rece` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_creacion` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;

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
`id_perfil` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `tipo_perfil` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE IF NOT EXISTS `respuesta` (
`id_respuesta` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `respuesta_1` varchar(200) NOT NULL,
  `respuesta_2` varchar(200) NOT NULL,
  `respuesta_3` varchar(200) NOT NULL,
  `cant_intentos` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_user` int(255) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nacionalidad` varchar(2) NOT NULL COMMENT 'nacionalidad usuarios',
  `cedula` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `voceria` varchar(60) NOT NULL,
  `perfil` int(1) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `fecha_creado` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `email`, `celular`, `sexo`, `voceria`, `perfil`, `usuario`, `contrasenia`, `status`, `fecha_creado`) VALUES
(24, 'Edelis', 'Simons', 'v', 20603430, 'girl@gmail.com', '04122161518', 'f', 'Unidad de ContralorÃ­a Social', 1, 'prueba', '123456', 1, '2015-11-02'),
(25, 'Gleiver', 'Gil', 'v', 18761800, 'giegm_0507@hotmail.com', '04123154389', 'm', 'Unidad Ejecutiva', 2, 'prueba2', '123456', 1, '2015-11-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
 ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `grupo_fliar`
--
ALTER TABLE `grupo_fliar`
 ADD PRIMARY KEY (`id_familiar`);

--
-- Indices de la tabla `jefeflia`
--
ALTER TABLE `jefeflia`
 ADD PRIMARY KEY (`idjefe_familia`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
 ADD PRIMARY KEY (`id_notificacion`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
 ADD PRIMARY KEY (`id_respuesta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
MODIFY `id_bitacora` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de la tabla `grupo_fliar`
--
ALTER TABLE `grupo_fliar`
MODIFY `id_familiar` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `jefeflia`
--
ALTER TABLE `jefeflia`
MODIFY `idjefe_familia` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
MODIFY `id_notificacion` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
MODIFY `id_perfil` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
MODIFY `id_respuesta` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
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

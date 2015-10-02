-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2015 a las 10:44:39
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `censo`
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
  `accion` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `id_user`, `idjefe_familia`, `fecha_accion`, `accion`) VALUES
(1, 0, 0, '2015-08-03', 'Eliminar'),
(2, 0, 0, '0000-00-00', ''),
(3, 0, 0, '0000-00-00', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COMMENT='Caracteristicas del grupo familiar con el jefe de familia';

--
-- Volcado de datos para la tabla `grupo_fliar`
--

INSERT INTO `grupo_fliar` (`id_familiar`, `idjefe_familia`, `nacionalidad`, `cedula`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `edad`, `incapacitado`, `Tipo_incapacitado`, `Embarazo_tempr`, `parentesco`, `nivel_instruccion`, `cne`, `profesion`, `pensionado`, `ingreso_mensual`, `observacion`, `status`) VALUES
(32, 13, 'E', 82179830, 'Luis', 'Mendez', 'm', '1990-02-12', 25, 'si', 'Mocho', 'no', 'Hijo', 'nivel_instruccion', 'si', 'Estudiante', 'no', '20000', 'buen hijo', 1),
(33, 13, 'V', 18670132, 'Pedro', 'Mendez', 'm', '1998-02-12', 15, 'si', 'Tuerto', 'no', 'hermano ti', 'TÃ©cnico Medio', 'si', 'Obrero', 'no', '20000', 'panita', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefeflia`
--

CREATE TABLE IF NOT EXISTS `jefeflia` (
  `idjefe_familia` int(255) NOT NULL COMMENT 'Llave primaria',
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
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COMMENT='registro de datos de censo';

--
-- Volcado de datos para la tabla `jefeflia`
--

INSERT INTO `jefeflia` (`idjefe_familia`, `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `codigo_cel`, `telfcel`, `codigo_hab`, `telfhab`, `codigo_ofic`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`, `fecha_creacion`) VALUES
(5, 'A', 'sda', 'f', 23131231, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 0, 2147483647, 0, 2147483647, 0, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 0, 'ASDASWDAS ', 'si', 'Mensual', 123123, '0000-00-00 00:00:00'),
(7, 'lolo', 'sdas', 'v', 21474836, '2001-03-01', 23, '', 'no', '1a', 'no', '', 'no', '', 0, 0, 0, 0, 0, 0, '', 'soltero (a', 'Sin InstrucciÃ³n', 1, '', 'no', '', 0, '2015-09-21 14:00:00'),
(11, 'Gleiver', 'Gil', 'v', 18761800, '1990-01-07', 25, '', 'si', '2 aÃ±o', 'no', '', 'no', '', 0, 3154389, 0, 2422175, 0, 8807196, 'giegm_0507@hotmail.com', 'soltero (a', 'Bachiller', 1, 'Estudiante', 'no', '', 7000, '2015-09-29 15:40:00'),
(12, 'ede', '', '', 0, '0000-00-00', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', '', 0, '0000-00-00 00:00:00'),
(13, 'Edelis', 'Simons', 'v', 20603430, '1992-04-18', 23, 'f', 'si', '2 aÃ±o', 'no', '', 'no', '', 0, 0, 0, 0, 0, 0, 'girlcarolay@hotmail.com', 'soltero (a', 'Bachiller', 0, 'Estudiante', 'no', 'Mensual', 7000, '2015-09-29 15:44:31'),
(14, 'Gleiver Ivan Ernesto', 'Gil Miranda', 'E', 12435678, '1990-03-17', 25, 'm', 'si', '23 aÃ±', 'no', '', 'no', '', 0, 3154389, 0, 2422175, 0, 8807106, 'fffff@hjkl.com', 'soltero (a', 'Postgrado', 1, 'Estudiante', 'no', 'Mensual', 20000, '2015-09-30 00:00:00'),
(15, 'Gleiver Ivan Ernesto', 'Gil Miranda', 'E', 12435678, '1990-03-17', 25, 'm', 'si', '23 aÃ±', 'no', '', 'no', '', 0, 3154389, 0, 2422175, 0, 8807106, 'fffff@hjkl.com', 'soltero (a', 'Postgrado', 1, 'Estudiante', 'no', 'Mensual', 20000, '2015-09-30 00:00:00'),
(16, 'Pedro David', 'Jimenez Toro', 'v', 20123456, '1950-03-01', 65, 'm', 'si', '', 'si', 'Tuerto', 'si', 'IVSS', 0, 0, 0, 0, 0, 0, 'teque_silva@hotmail.com', 'soltero (a', 'Sin InstrucciÃ³n', 1, 'jubilado', 'no', 'Mensual', 10000, '2015-09-30 18:00:18'),
(18, 'Edelis Carolay', 'Simons Escalona', 'v', 6438133, '1943-03-19', 12, 'f', 'no', '2 aÃ±o', 'no', '', 'no', '', 0, 2161517, 0, 8807106, 0, 8807106, '', 'Casado (a)', 'Sin InstrucciÃ³n', 1, 'estudiante', 'no', 'Semanal', 10000, '2015-10-01 14:04:51'),
(29, 'Samuel', 'Simons', 'v', 21436598, '1946-08-16', 32, 'm', 'no', '2 aÃ±o', 'no', '', 'no', '', 416, 7195851, 212, 1234567, 212, 8807106, '', 'Casado (a)', 'Sin InstrucciÃ³n', 1, 'qqqqq', 'no', 'Mensual', 12345, '2015-10-01 15:24:55');

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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_notificacion`, `id_respuesta`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES
(48, 47, 5, 2, 'Hola que tal', '2015-06-28', 1),
(51, 48, 2, 5, 'Como estas?', '2015-06-29', 1),
(52, 48, 2, 5, 'cambio', '2015-06-29', 1),
(60, 0, 1, 5, 'correoooooo', '2015-09-29', 1),
(61, 0, 3, 5, 'Hola', '2015-10-01', 1),
(62, 0, 5, 5, 'Chao', '2015-10-01', 1);

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
  `cedula` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` int(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `voceria` varchar(60) NOT NULL,
  `perfil` int(1) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `fecha_creado` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `apellido`, `cedula`, `email`, `celular`, `sexo`, `direccion`, `voceria`, `perfil`, `usuario`, `contrasenia`, `status`, `fecha_creado`) VALUES
(1, 'usuario', '1', 0, 'nnn@csd.com', 12, 'm', 'fd', 'df', 2, 'prueba', '123456', 1, '2015-05-13'),
(2, 'zuye', 'zxczx', 0, '2147483647', 2147483647, '', '', '', 0, '0', 'vocero1', 2, '2015-05-29'),
(3, 'ddq', 'dded1sdasd', 231231231, 'zuyecci@gmail.com1', 2147483647, 'm', 'asdfghjkl1', 'usuario11', 1, 'fcg1sd', 'fgf1', 1, '2015-05-29'),
(4, 'sadasd', 'sadasd', 125216, 'saul_cfa@hotmail.com', 1165161, 'f', 'asdasdasdasdasd', 'usuario1', 1, 'gvghv', 'asdasd', 1, '2015-05-30'),
(5, 'sdasd', 'dasdasd', 45616514, 'sdasdasdasdas@sadasd.asda', 1561616, 'm', 'dasdasd', 'usuario1', 1, 'asdasd', 'asdasd', 3, '2015-05-30'),
(6, 'sdasd', 'dasd', 23123, 'sadas@sdas.asd', 123123, 'm', 'dasda', 'usuario2', 2, 'SAUL', '123456', 1, '2015-06-24');

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
  MODIFY `id_bitacora` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `grupo_fliar`
--
ALTER TABLE `grupo_fliar`
  MODIFY `id_familiar` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `jefeflia`
--
ALTER TABLE `jefeflia`
  MODIFY `idjefe_familia` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id_notificacion` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
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
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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

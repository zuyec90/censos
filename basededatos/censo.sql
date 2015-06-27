-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2015 a las 16:22:08
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

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
-- Estructura de tabla para la tabla `grupo_fliar`
--

CREATE TABLE IF NOT EXISTS `grupo_fliar` (
`id_familiar` int(255) NOT NULL,
  `idjefe_familia` int(255) NOT NULL,
  `cedula` int(15) DEFAULT NULL,
  `Nombre` varchar(30) NOT NULL COMMENT 'Nombre de la persona del grupo familiar',
  `Apellido` varchar(30) NOT NULL COMMENT 'Apellido de la persona del grupo familiar',
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
  `Observacion` varchar(50) NOT NULL COMMENT 'Si se le desea agregar alguna otra observacion',
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Caracteristicas del grupo familiar con el jefe de familia';

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
  `telfcel` int(11) NOT NULL COMMENT 'telefono celular jefe flia',
  `telfhab` int(11) NOT NULL COMMENT 'telefono habitacion  jefe flia',
  `telfofic` int(11) NOT NULL COMMENT 'telefono ofic jefe flia',
  `email` varchar(30) NOT NULL COMMENT 'email jefe flia',
  `estado_civil` varchar(10) NOT NULL COMMENT 'estado civil jefe flia',
  `nivel_instruccion` varchar(20) NOT NULL COMMENT 'nivel de instruccion jefe flia',
  `status` int(10) NOT NULL,
  `profesion` varchar(20) NOT NULL COMMENT 'profesion jefe flia',
  `trabaja` varchar(2) NOT NULL COMMENT 'trabaja jefe flia',
  `clasificacion_ingreso_familiar` varchar(22) NOT NULL COMMENT 'clasificacion ingreso familiar',
  `ingreso_mensual` int(6) NOT NULL COMMENT 'ingreso mensual jefe flia'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='registro de datos de censo';

--
-- Volcado de datos para la tabla `jefeflia`
--

INSERT INTO `jefeflia` (`idjefe_familia`, `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `telfcel`, `telfhab`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`) VALUES
(1, 'ASDASDASD', 'sdasDASDASD', 'f', 12312312, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 0, 'ASDASWDAS ', 'si', 'Mensual', 123123),
(2, 'ASDASDASD', 'sdasDASDASD', 'f', 11123333, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 1, 'ASDASWDAS ', 'si', 'Mensual', 123123),
(4, 'ASDASDASD', 'sdasDASDASD', 'f', 22234542, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 1, 'ASDASWDAS ', 'si', 'Mensual', 123123),
(5, 'ASDASDASD', 'sdasDASDASD', 'f', 23131231, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 0, 'ASDASWDAS ', 'si', 'Mensual', 123123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE IF NOT EXISTS `notificacion` (
`id_notificacion` int(255) NOT NULL,
  `id_user_rece` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_notificacion`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES
(1, 5, 8, 'hola como estas', '2015-06-13', 0),
(2, 0, 0, '', '2015-06-20', 0);

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
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(50) NOT NULL,
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
(1, 'd', '', 0, '14', 12, 'f', 'fd', 'df', 0, '1', 'gfds', 3, '2015-05-13'),
(2, 'zuye', 'zxczx', 0, '2147483647', 2147483647, '', '', '', 0, '0', 'vocero1', 3, '2015-05-29'),
(3, 'ddq', 'dded1sdasd', 231231231, 'zuyecci@gmail.com1', 2147483647, 'm', 'asdfghjkl1', 'usuario11', 1, 'fcg1sd', 'fgf1', 1, '2015-05-29'),
(4, 'sadasd', 'sadasd', 125216, 'saul_cfa@hotmail.com', 1165161, 'f', 'asdasdasdasdasd', 'usuario1', 1, 'gvghv', 'asdasd', 1, '2015-05-30'),
(5, 'sdasd', 'dasdasd', 45616514, 'sdasdasdasdas@sadasd.asda', 1561616, 'm', 'dasdasd', 'usuario1', 1, 'asdasd', 'asdasd', 3, '2015-05-30'),
(6, 'sdasd', 'dasd', 23123, 'sadas@sdas.asd', 123123, 'm', 'dasda', 'usuario2', 2, 'aweqwe', '123123123', 1, '2015-06-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupo_fliar`
--
ALTER TABLE `grupo_fliar`
 ADD PRIMARY KEY (`id_familiar`), ADD UNIQUE KEY `cedula` (`cedula`);

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
-- AUTO_INCREMENT de la tabla `grupo_fliar`
--
ALTER TABLE `grupo_fliar`
MODIFY `id_familiar` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `jefeflia`
--
ALTER TABLE `jefeflia`
MODIFY `idjefe_familia` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
MODIFY `id_notificacion` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
-- Filtros para la tabla `notificacion`
--
ALTER TABLE `notificacion`
ADD CONSTRAINT `notificacion_ibfk_1` FOREIGN KEY (`id_notificacion`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

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

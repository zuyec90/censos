-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2015 a las 12:10:34
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
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
`id_bitacora` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `idjefe_familia` int(255) NOT NULL,
  `fecha_accion` date NOT NULL,
  `accion` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `id_user`, `idjefe_familia`, `fecha_accion`, `accion`) VALUES
(1, 0, 0, '2015-08-03', 'Eliminar');

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
  `ingreso_mensual` int(6) NOT NULL COMMENT 'ingreso mensual jefe flia',
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COMMENT='registro de datos de censo';

--
-- Volcado de datos para la tabla `jefeflia`
--

INSERT INTO `jefeflia` (`idjefe_familia`, `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `telfcel`, `telfhab`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`, `fecha_creacion`) VALUES
(5, 'A', 'sda', 'f', 23131231, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 0, 'ASDASWDAS ', 'si', 'Mensual', 123123, '0000-00-00 00:00:00'),
(7, 'lolo', 'sdas', 'v', 21474836, '2001-03-01', 23, '', 'no', '1a', 'no', '', 'no', '', 0, 0, 0, '', 'soltero (a', 'Sin InstrucciÃ³n', 1, '', 'no', '', 0, '2015-09-21 14:00:00'),
(11, 'Gleiver', 'Gil', 'v', 18761800, '1990-01-07', 25, '', 'si', '2 aÃ±o', 'no', '', 'no', '', 3154389, 2422175, 8807196, 'giegm_0507@hotmail.com', 'soltero (a', 'Bachiller', 1, 'Estudiante', 'no', '', 7000, '2015-09-29 15:40:00'),
(12, 'ede', '', '', 0, '0000-00-00', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0, '', '', '', 0, '0000-00-00 00:00:00'),
(13, 'Edelis', 'Simons', 'v', 20603430, '1992-04-18', 23, 'f', 'si', '2 aÃ±o', 'no', '', 'no', '', 0, 0, 0, 'girlcarolay@hotmail.com', 'soltero (a', 'Bachiller', 0, 'Estudiante', 'no', 'Mensual', 7000, '2015-09-29 15:44:31'),
(14, 'Gleiver Ivan Ernesto', 'Gil Miranda', 'E', 12435678, '1990-03-17', 25, 'm', 'si', '23 aÃ±', 'no', '', 'no', '', 3154389, 2422175, 8807106, 'fffff@hjkl.com', 'soltero (a', 'Postgrado', 1, 'Estudiante', 'no', 'Mensual', 20000, '2015-09-30 00:01:11'),
(15, 'Gleiver Ivan Ernesto', 'Gil Miranda', 'E', 12435678, '1990-03-17', 25, 'm', 'si', '23 aÃ±', 'no', '', 'no', '', 3154389, 2422175, 8807106, 'fffff@hjkl.com', 'soltero (a', 'Postgrado', 1, 'Estudiante', 'no', 'Mensual', 20000, '2015-09-30 00:01:11');

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_notificacion`, `id_respuesta`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES
(41, 0, 6, 5, 'cvccxvxcv', '2015-06-28', 2),
(42, 0, 2, 5, 'hola que msad a', '2015-06-28', 2),
(43, 0, 4, 5, 'dfsdfsdfsd', '2015-06-28', 2),
(44, 0, 3, 5, 'sdfsdfsdfs', '2015-06-28', 2),
(45, 0, 6, 5, 'fsdfsfsdf', '2015-06-28', 2),
(46, 0, 6, 5, 'sdasdas', '2015-06-28', 2),
(47, 0, 2, 5, 'Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza clÂ´sica de la literatura del Latin, que data del aÃ±o 45 antes de Cristo, haciendo que este adquiera mas de 2000 aÃ±os de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontrÃ³ una de las palabras mÃ¡s oscuras de la lengua del latÃ­n, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latÃ­n, descubriÃ³ la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los Extremos del Bien y El Mal) por Cicero, escrito en el aÃ±o 45 antes de Cristo. Este libro es un tratado de teorÃ­a de Ã©ticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum', '2015-06-28', 2),
(48, 47, 5, 2, 'dsasdasdasdasd', '2015-06-28', 1),
(50, 0, 2, 5, 'sadasdasd', '2015-06-29', 2),
(51, 48, 2, 5, 'asdasdasdas que vaina ', '2015-06-29', 1),
(52, 48, 2, 5, 'asdasdasdas que vaina ', '2015-06-29', 1),
(53, 47, 5, 2, 'dasdahjsdvhasvdhgasvdhgsvadhgasvd dsfsgdfvhsdvfhsvdfhvsdhvfshdgfvhgsdvfhgsdvfhgsd f sgdh fgs vdfhgs vdfh gsvdhgf svdhg fsdhg fshgd vghsd vfhgs dvfhgs dvfhg svdfhgs', '2015-06-29', 0),
(54, 47, 2, 5, 'que vaina ', '2015-06-29', 0),
(55, 50, 5, 2, 'miera esta vaina', '2015-06-29', 0),
(56, 0, 6, 5, 'fbrwsdbcsnvfejmirebvsduibufvig', '2015-08-19', 2),
(57, 0, 6, 5, 'thddgrsdhthtrth', '2015-08-19', 2),
(58, 44, 5, 3, 'hola', '2015-09-29', 0),
(59, 44, 3, 5, 'ddedd', '2015-09-29', 0),
(60, 0, 1, 5, 'www', '2015-09-29', 1);

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
MODIFY `id_bitacora` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `grupo_fliar`
--
ALTER TABLE `grupo_fliar`
MODIFY `id_familiar` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `jefeflia`
--
ALTER TABLE `jefeflia`
MODIFY `idjefe_familia` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
MODIFY `id_notificacion` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
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

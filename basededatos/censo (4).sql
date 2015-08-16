-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2015 a las 22:41:07
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
  `cedula` int(8) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre de la persona del grupo familiar',
  `apellido` varchar(30) NOT NULL COMMENT 'Apellido de la persona del grupo familiar',
  `sexo` varchar(1) NOT NULL COMMENT 'Sexo de la persona del grupo familiar',
  `fecha_nacimiento` date NOT NULL COMMENT 'Fecha de nacimiento de la persona del grupo familiar',
  `edad` int(3) NOT NULL COMMENT 'Edad de la persona del grupo familiar',
  `incapacitado` varchar(2) DEFAULT NULL COMMENT 'Si la persona es discapicitada',
  `Tipo_incapacitado` varchar(20) DEFAULT NULL COMMENT 'Tipo de incapacidad de la persona del grupo familiar',
  `Embarazo_tempr` varchar(2) DEFAULT NULL COMMENT 'Si lapersona posee un embarazo temprano',
  `parentesco` varchar(10) NOT NULL COMMENT 'Parentesco de la persona del grupo familiar con el jefe de familia',
  `nivel_instruccion` varchar(20) NOT NULL COMMENT 'Nivel de intruccion de la persona del grupo familiar',
  `cne` varchar(2) DEFAULT NULL COMMENT 'Si la persona esta inscrita en el CNE',
  `profesion` varchar(20) DEFAULT NULL COMMENT 'Profesion de la persona del grupo familiar',
  `pensionado` varchar(2) DEFAULT NULL COMMENT 'Si la persopna es pensionada',
  `ingreso_mensual` varchar(6) DEFAULT NULL COMMENT 'Ingreso mensual de la persona del grupo familiar',
  `observacion` varchar(50) DEFAULT NULL COMMENT 'Si se le desea agregar alguna otra observacion',
  `status` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COMMENT='Caracteristicas del grupo familiar con el jefe de familia';

--
-- Volcado de datos para la tabla `grupo_fliar`
--

INSERT INTO `grupo_fliar` (`id_familiar`, `idjefe_familia`, `cedula`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `edad`, `incapacitado`, `Tipo_incapacitado`, `Embarazo_tempr`, `parentesco`, `nivel_instruccion`, `cne`, `profesion`, `pensionado`, `ingreso_mensual`, `observacion`, `status`) VALUES
(1, 2, 2063, 'edelis', 'dwf', 'f', '2015-06-02', 12, 'no', 'gb', 'xv', 'gsg', 'xg', 'xf', 'xf', 'ze', '10', 'RFF', 1),
(3, 2, 15151556, 'saul', 'sdasd', 'f', '2015-06-12', 231, 'as', 'dasd', 'as', 'dasd', 'dasd', 'sa', 'sdas', 'as', 'das', 'dasd', 1),
(4, 2, 0, 'asdnkajsnbdksdasd', 'sadasd', 'f', '2015-06-07', 23123, 'si', 'asdas', 'si', 'asdas', 'dsad', 'si', 'ASDASd', 'si', '231312', 'asdasdasasd as as dasd', 1),
(5, 2, 123, 'asdasd12', 'sadasd12', 'f', '2015-06-10', 0, 'si', '12', 'si', 'qwe', 'qwe', 'si', 'qd', 'no', 'wqeqw', 'qew', 1),
(10, 4, 26031322, 'asdasd12', 'sdasd', 'm', '2015-06-10', 23, 'si', 'edqwa', 'no', 'DQADC', 'Xddddddd', 'si', 'ddddddddd', 'no', '2000', 'jsmOM', 1),
(12, 4, 123123, 'dasdasd', 'dasdasd', 'f', '2015-06-10', 31231, 'da', '', 'si', 'eqweqw', 'nivel_instruccion', 'si', 'eqweqwe', 'si', '231231', 'wqeqweqweqwe', 1),
(13, 0, 20603430, 'edelis', 'perez', 'f', '2000-01-02', 23, '', '', 'no', 'hija', 'nivel_instruccion', 'si', 'lalal', 'no', '2000', 'hiiiii', 1),
(14, 0, NULL, 'ede', '', '', '0000-00-00', 0, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 0),
(15, 0, NULL, 'lola', '', '', '0000-00-00', 0, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COMMENT='registro de datos de censo';

--
-- Volcado de datos para la tabla `jefeflia`
--

INSERT INTO `jefeflia` (`idjefe_familia`, `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `telfcel`, `telfhab`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`, `fecha_creacion`) VALUES
(1, 'ASDASDASD', 'sdasDASDASD', 'f', 12312312, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 0, 'ASDASWDAS ', 'si', 'Mensual', 123123, '0000-00-00 00:00:00'),
(2, 'ASDASDASD3213123', 'sdasDASDASD', '', 11123333, '2015-06-25', 213, '', '', '123123', '', '', '', '', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', '', '', 1, 'ASDASWDAS ', '', '', 123123, '0000-00-00 00:00:00'),
(4, 'ASDASDASD', 'sdasDASDASD', 'f', 22234542, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 1, 'ASDASWDAS ', 'si', 'Mensual', 123123, '2015-06-28 10:56:00'),
(5, 'A', 'sda', 'f', 23131231, '2015-06-25', 213, 'm', 'si', '123123', 'si', '23123', 'si', 'WEQWEQWEQWEQWEQWEQWE', 2147483647, 2147483647, 2147483647, 'sadas@sdas.asd', 'soltero (a', 'BÃ¡sica', 0, 'ASDASWDAS ', 'si', 'Mensual', 123123, '0000-00-00 00:00:00'),
(6, 'ede', 'sum', 'v', 20603430, '1912-03-04', 23, 'f', 'si', '1d', 'no', '', 'no', '', 0, 0, 0, '', 'soltero (a', 'Sin InstrucciÃ³n', 1, 'dsasdasd', 'no', '', 0, '0000-00-00 00:00:00'),
(7, 'ede', 'sdas', 'v', 21474836, '1913-03-03', 23, 'f', 'no', '1a', 'no', '', 'no', '', 0, 0, 0, '', 'soltero (a', 'Sin InstrucciÃ³n', 1, '', 'no', '', 0, '0000-00-00 00:00:00'),
(9, 'TTRYRT', 'RT', 'v', 34534132, '1926-03-13', 231, 'f', 'si', '132', 'si', '3', 'no', '3123FSDDFSSDSDSDFSDS', 2147483647, 2147483647, 2147483647, 'saul_cfa@hotmail.com', 'soltero (a', 'BÃ¡sica', 1, 'DDSAASDASD', 'si', 'Diario', 123123, '0000-00-00 00:00:00'),
(10, 'etetett', 'etetertet', 'v', 21312312, '1923-05-16', 121, 'm', 'si', '1231', 'si', '21312', 'si', '12fsdfsdfsdfsdfsdfsd', 2147483647, 2147483647, 2147483647, 'saul_cfa@hotmail.com', 'Casado (a)', 'TÃ©cnico Superior', 0, 'qweqwe', 'si', 'Semanal', 231231, '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_notificacion`, `id_respuesta`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES
(41, 0, 6, 5, 'cvccxvxcv', '2015-06-28', 2),
(42, 0, 2, 5, 'hola que msad a', '2015-06-28', 2),
(43, 0, 4, 5, 'dfsdfsdfsd', '2015-06-28', 1),
(44, 0, 3, 5, 'sdfsdfsdfs', '2015-06-28', 1),
(45, 0, 6, 5, 'fsdfsfsdf', '2015-06-28', 1),
(46, 0, 6, 5, 'sdasdas', '2015-06-28', 1),
(47, 0, 2, 5, 'Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza clÂ´sica de la literatura del Latin, que data del aÃ±o 45 antes de Cristo, haciendo que este adquiera mas de 2000 aÃ±os de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontrÃ³ una de las palabras mÃ¡s oscuras de la lengua del latÃ­n, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latÃ­n, descubriÃ³ la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los Extremos del Bien y El Mal) por Cicero, escrito en el aÃ±o 45 antes de Cristo. Este libro es un tratado de teorÃ­a de Ã©ticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum', '2015-06-28', 2),
(48, 47, 5, 2, 'dsasdasdasdasd', '2015-06-28', 1),
(50, 0, 2, 5, 'sadasdasd', '2015-06-29', 2),
(51, 48, 2, 5, 'asdasdasdas que vaina ', '2015-06-29', 1),
(52, 48, 2, 5, 'asdasdasdas que vaina ', '2015-06-29', 1),
(53, 47, 5, 2, 'dasdahjsdvhasvdhgasvdhgsvadhgasvd dsfsgdfvhsdvfhsvdfhvsdhvfshdgfvhgsdvfhgsdvfhgsd f sgdh fgs vdfhgs vdfh gsvdhgf svdhg fsdhg fshgd vghsd vfhgs dvfhgs dvfhg svdfhgs', '2015-06-29', 0),
(54, 47, 2, 5, 'que vaina ', '2015-06-29', 0),
(55, 50, 5, 2, 'miera esta vaina', '2015-06-29', 0);

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
(1, 'd', '', 0, '14', 12, 'f', 'fd', 'df', 0, '1', 'gfds', 3, '2015-05-13'),
(2, 'zuye', 'zxczx', 0, '2147483647', 2147483647, '', '', '', 0, '0', 'vocero1', 3, '2015-05-29'),
(3, 'ddq', 'dded1sdasd', 231231231, 'zuyecci@gmail.com1', 2147483647, 'm', 'asdfghjkl1', 'usuario11', 1, 'fcg1sd', 'fgf1', 1, '2015-05-29'),
(4, 'sadasd', 'sadasd', 125216, 'saul_cfa@hotmail.com', 1165161, 'f', 'asdasdasdasdasd', 'usuario1', 1, 'gvghv', 'asdasd', 1, '2015-05-30'),
(5, 'sdasd', 'dasdasd', 45616514, 'sdasdasdasdas@sadasd.asda', 1561616, 'm', 'dasdasd', 'usuario1', 1, 'asdasd', 'asdasd', 3, '2015-05-30'),
(6, 'sdasd', 'dasd', 23123, 'sadas@sdas.asd', 123123, 'm', 'dasda', 'usuario2', 2, 'SAUL', '123456', 1, '2015-06-24');

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
MODIFY `id_familiar` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `jefeflia`
--
ALTER TABLE `jefeflia`
MODIFY `idjefe_familia` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
MODIFY `id_notificacion` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
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

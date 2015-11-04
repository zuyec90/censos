-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2015 a las 04:44:29
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Caracteristicas del grupo familiar con el jefe de familia';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='registro de datos de censo';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `apellido`, `nacionalidad`, `cedula`, `email`, `celular`, `sexo`, `voceria`, `perfil`, `usuario`, `contrasenia`, `status`, `fecha_creado`) VALUES
(1, 'Ulises', 'Robles', 'V', 0, 'ulises@gmail.com', '', 'M', '', 1, 'ulises', '123456', 1, '2015-11-03');

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
MODIFY `id_bitacora` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupo_fliar`
--
ALTER TABLE `grupo_fliar`
MODIFY `id_familiar` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `jefeflia`
--
ALTER TABLE `jefeflia`
MODIFY `idjefe_familia` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria';
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
MODIFY `id_notificacion` int(255) NOT NULL AUTO_INCREMENT;
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
MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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

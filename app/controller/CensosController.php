<?php
/* veremos cuales son los
errores
Esperanza*/
include ('../config/config.php');

class censo extends DataModel
{
	public function segundos_tiempo($segundos){

		$minutos=$segundos/60;
		$horas=floor($minutos/60);
		$dias=floor($horas/24);
		$horas2=$horas;
		//if($horas2>24)$horas2=$horas-24;
		$horas2=$horas%24;
		$minutos2=$minutos%60;
		$segundos_2=$segundos%60%60%60;

		if($minutos2<10)$minutos2='0'.$minutos2;

		if($segundos_2<10)$segundos_2='0'.$segundos_2;

		if($segundos<60){ /* segundos */

			$resultado= round($segundos).' Segundos';

		}elseif($segundos>60 && $segundos<3600){/* minutos */

			$resultado= $minutos2.':'.$segundos_2.' Minutos';

		}elseif($segundos>3599 && $segundos<86400){/* horas */

			$resultado= $horas.':'.$minutos2.':'.$segundos_2;

		}else{

			$resultado= $dias.' '.$horas2.':'.$minutos2.':'.$segundos_2;

		}
			return $resultado;
		}

	public	function calcula_hora($fecha_entrada,$fecha_salida) {

		$fecha1=strtotime($fecha_salida);		//strtotime convirte la fecha y la hora en un valor unico (numero calculable)

		$fecha2=strtotime($fecha_entrada);

		$diferencia=$fecha1-$fecha2;

		$total=date("Y-m-d H:i:s",$diferencia);

		return $this->segundos_tiempo($diferencia);

		}

	public function ValidacionTiempo($fecha = Null)

	{
		$this->Conect();
		if (!empty($fecha)) {
			$sql = "SELECT * FROM `jefeflia` WHERE  `idjefe_familia` = '".$fecha."'";
			$validacion = mysql_query($sql) or die ('Error ');
			$row = mysql_fetch_assoc($validacion);

			$fecha = $row['fecha_creacion']; //fecha que tengo en formato UNIX en mi tabla

			$fecha1 = date("Y-m-d H:i:s",time()); //tomo fecha y hora actual

		$resultado= $this->calcula_hora($fecha, $fecha1)."<br>";
		if ($resultado<=4) {
			return "1";
		}

		}
		else{
			return "0";
		}
	}
	public function Registrar($datos = Null)
	{

		$this->Conect();

		$cedula = $this->Verificarcenso($datos['cedula']); //los datos dentro del parentesis se pasan al INSERT luego de values

		if (!empty($cedula)){

		return "0";
		}else{
						// cambiar segun base de datos INSERT
			$datos['fecha_nacimiento'] = $datos['fecha_a']."-".$datos['fecha_m']."-".$datos['fecha_d'];

			$sql = "INSERT INTO `jefeflia` ( `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `telfcel`, `telfhab`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`) VALUES ( '".$datos['nombre']."', '".$datos['apellido']."', '".$datos['nacionalidad']."', '".$datos['cedula']."','".$datos['fecha_nacimiento']."' , '".$datos['edad']."', '".$datos['sexo']."', '".$datos['cne']."', '".$datos['tiempo_comunidad']."', '".$datos['incapacitado']."', '".$datos['tipo_incapacitado']."', '".$datos['pensionado']."', '".$datos['institucion']."', '".$datos['telfcel']."', '".$datos['telfhab']."', '".$datos['telfofic']."', '".$datos['email']."', '".$datos['estado_civil']."', '".$datos['nivel_instruccion']."', '1','".$datos['profesion']."', '".$datos['trabaja']."', '".$datos['clasificacion_ingreso_familiar']."', '".$datos['ingreso_mensual']."')";

			mysql_query($sql) or die ('error 201 no se pudo crear el usuario');

				return "1";
		}

	}

	public function Verificarcenso($cedula = Null)
	{

		$sql = "SELECT * FROM `jefeflia` WHERE `cedula`= ".$cedula."";

		$respuesta = mysql_query($sql) or die ("Error 202 no se encontraron resultados");
		$correcto = mysql_fetch_assoc($respuesta);

		return $correcto; //imprimirlo en la vista
	}

	public function ModificarJefeflia($datos = Null)
	{
		$this->Conect();
		if (!empty($datos['idjefe_familia'])) {
			$sql = "UPDATE `jefeflia` SET `nombres` = '".$datos['nombres']."', `apellidos` = '".$datos['apellidos']."', `nacionalidad` = '".$datos['nacionalidad']."',`cedula` = '".$datos['cedula']."', `fecha_nacimiento` = '".$datos['fecha_nacimiento']."' , `edad` = '".$datos['edad']."', `sexo` = '".$datos['sexo']."', `cne` = '".$datos['cne']."', `tiempo_comunidad` = '".$datos['tiempo_comunidad']."', `incapacitado` = '".$datos['incapacitado']."', `tipo_incapacitado` = '".$datos['tipo_incapacitado']."', `pensionado` ='".$datos['pensionado']."', `institucion` = '".$datos['institucion']."', `telfcel` = '".$datos['telfcel']."', `telfhab` = '".$datos['telfhab']."', `telfofic` = '".$datos['telfofic']."', `email` = '".$datos['email']."', `estado_civil` = '".$datos['estado_civil']."', `nivel_instruccion` = '".$datos['nivel_instruccion']."', `profesion` ='".$datos['profesion']."', `trabaja` = '".$datos['trabaja']."', `clasificacion_ingreso_familiar` = '".$datos['clasificacion_ingreso_familiar']."', `ingreso_mensual` = '".$datos['ingreso_mensual'] ."' WHERE `idjefe_familia` = '".$datos['idjefe_familia'] ."'";
			mysql_query($sql) or die ('Error 203 no se pueden modificar los datos');

			return "1";
		}
		else{
			return "0";
		}
	}

	public function RegistrarFamiliar($datos = Null)
	{

		$this->Conect();

		$valido = $this->VerificarFamiliar($datos['nombre'], $datos['apellido'], $datos['cedula']); //los datos dentro del parentesis se pasan al INSERT luego de values

		if (!empty($valido)){

		return "0";
		}else{
			// cambiar segun base de datos INSERT


			$sql = "INSERT INTO `grupo_fliar` (`id_familiar`, `idjefe_familia`, `cedula`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `edad`, `incapacitado`, `Tipo_incapacitado`, `Embarazo_tempr`, `parentesco`, `nivel_instruccion`, `cne`, `profesion`, `pensionado`, `ingreso_mensual`, `observacion`, `status`) VALUES (NULL, '".$datos['idjefe_familia']."', '".$datos['cedula']."', '".$datos['nombre']."', '".$datos['apellido']."', '".$datos['sexo']."', '".$datos['fecha_nacimiento']."', '".$datos['edad']."', '".$datos['incapacitado']."', '".$datos['Tipo_incapacitado']."', '".$datos['Embarazo_tempr']."', '".$datos['parentesco']."', '".$datos['nivel_instruccion']."', '".$datos['cne']."', '".$datos['profesion']."', '".$datos['pensionado']."', '".$datos['ingreso_mensual']."', '".$datos['observacion']."', '1')";

			mysql_query($sql) or die ('error 201 no se pudo crear el usuario');

				return "1";
		}

	}
	public function VerificarFamiliar($nombre = NULL, $apellido = NULL, $cedula = NULL)
	{
		if (!empty($cedula)) {
		$sql = "SELECT * FROM `grupo_fliar` WHERE ( `nombre`= '".$nombre."' and `apellido`= '".$apellido."' ) or  `cedula`= ".$cedula." " ;

		}else{
		$sql = "SELECT * FROM `grupo_fliar` WHERE  `nombre`= '".$nombre."' and `apellido`= '".$apellido."' " ;

		}
		//echo $sql;
		$respuesta = mysql_query($sql) or die ("Error 203 no se encontraron resultados");
		$correcto = mysql_fetch_assoc($respuesta);

		return $correcto; //imprimirlo en la vista
	}

	public function ModificarFamiliar($datos = Null)
	{
		$this->Conect();
		if (!empty($datos['id_familiar'])) {
			$sql = "UPDATE `grupo_fliar` SET `cedula` = '".$datos['cedula']."', `nombre = '".$datos['nombre']."', `apellido` = '".$datos['apellido']."', `sexo` = '".$datos['sexo']."', `fecha_nacimiento` = '".$datos['fecha_nacimiento']."', `edad` = '".$datos['edad']."', `incapacitado` = '".$datos['incapacitado']."', `Tipo_incapacitado` = '".$datos['Tipo_incapacitado']."', `Embarazo_tempr` = '".$datos['Embarazo_tempr']."', `parentesco` = '".$datos['parentesco']."', `nivel_instruccion` = '".$datos['nivel_instruccion']."', `cne` = '".$datos['cne']."', `profesion` = '".$datos['profesion']."', `pensionado` = '".$datos['pensionado']."', `ingreso_mensual` = '".$datos['ingreso_mensual']."', `observacion` = '".$datos['observacion'] ."' WHERE `id_familiar` = '".$datos['id_familiar'] ."' ";
			echo $sql;
			mysql_query($sql) or die ('Error 204 no se pueden modificar los datos');

			return "1";
		}
		else{
			return "0";
		}
	}


	public function Consulta($id = Null)
	{
		$this->Conect();
		$sql = "SELECT * FROM `jefeflia` WHERE `idjefe_familia`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("Error 202 no se logro consultar");
		$correcto = mysql_fetch_assoc($respuesta);

		return $correcto; //imprimirlo en la vista


	}

	public function Selectjefe($id = Null)
	{
		$this->Conect();
		if (!empty($id)) {
			$sql = "SELECT * FROM `jefeflia` WHERE `idjefe_familia`= '".$id."' ";
			$Selection = mysql_query($sql) or die ("Error 203 no se logró consultar");
			$respuesta = mysql_fetch_assoc($Selection);

		}else{
			$sql = "SELECT * FROM `jefeflia` WHERE  `status` <> '0'";
			$respuesta = mysql_query($sql) or die ("Error 204 no se logró consultar");

		}


		return $respuesta; //imprimirlo en la vista

	}

	public function SelectFamiliar($id = Null)
		{
			$this->Conect();
			if (!empty($id)) {
				$sql = "SELECT * FROM `grupo_fliar` WHERE `id_familiar`= '".$id."' AND  `status` <> 0 ";

				$respuesta = mysql_query($sql) or die ("Error 203 no se logró consultar");

			}else{
				return 0;
			}

			return $respuesta; //imprimirlo en la vista

		}


		public function Eliminarjefe($id = Null)
	{
		$this->Conect();

		if (!empty($id)) {
			$sql = "UPDATE `jefeflia` SET `status` = '0' WHERE `idjefe_familia`  = '".$id."' ";
			mysql_query($sql) or die ('Error 205 no se pudo eliminar');

			$sql = "UPDATE `grupo_fliar` SET `status` = '0' WHERE `id_familiar`  = '".$id_."' ";
			mysql_query($sql) or die ('Error 205 no se pudo eliminar');

			return "1";
		}
		else{
			return "0";
		}
	}

	public function Eliminarjefe($id = Null)
	{
		$this->Conect();

		if (!empty($id)) {

			$sql = "UPDATE `grupo_fliar` SET `status` = '0' WHERE `id_familiar`  = '".$id_."' ";
			mysql_query($sql) or die ('Error 205 no se pudo eliminar');

			return "1";
		}
		else{
			return "0";
		}
	}


	public function ConsultaUser($id_user = Null)
		{
			$this->Conect();
			if (!empty($id_user)) {
				$sql = "SELECT * FROM `usuario` WHERE `id_user` = '".$id_user."' ";
				$SelectionMsj = mysql_query($sql) or die ("Error 307 no se logró consultar");
				$respuesta = mysql_fetch_assoc($SelectionMsj);
			}else{
				$sql = "SELECT * FROM `usuario` WHERE  `status` <> '2'";
				$respuesta = mysql_query($sql) or die ("Error 308 no se logró consultar");
			}
			return $respuesta;
		}


}


?>
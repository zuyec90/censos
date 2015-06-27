<?php
/* veremos cuales son los
errores
Esperanza*/
include ('../config/config.php');

class censo extends DataModel
{

	public function Registrar($datos = Null)
	{

		$this->Conect();

		$cedula = $this->Verificarcenso($datos['cedula']); //los datos dentro del parentesis se pasan al INSERT luego de values

		if (!empty($cedula)){

		return "0";
		}else{
						// cambiar segun base de datos INSERT
			$sql = "INSERT INTO `jefeflia` ( `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `telfcel`, `telfhab`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`) VALUES ( '".$datos['nombre']."', '".$datos['apellido']."', '".$datos['nacionalidad']."', '".$datos['cedula']."', NOW(), '".$datos['edad']."', '".$datos['sexo']."', '".$datos['cne']."', '".$datos['tiempo_comunidad']."', '".$datos['incapacitado']."', '".$datos['tipo_incapacitado']."', '".$datos['pensionado']."', '".$datos['institucion']."', '".$datos['telfcel']."', '".$datos['telfhab']."', '".$datos['telfofic']."', '".$datos['email']."', '".$datos['estado_civil']."', '".$datos['nivel_instruccion']."', '1','".$datos['profesion']."', '".$datos['trabaja']."', '".$datos['clasificacion_ingreso_familiar']."', '".$datos['ingreso_mensual']."')";

			mysql_query($sql) or die ('error 201 no se pudo crear el usuario');

				return "1";
		}

	}

	public function Verificarcenso($cedula = Null)
	{

		$sql = "SELECT * FROM `jefeflia` WHERE `cedula`= ".$cedula."";

		$respuesta = mysql_query($sql) or die ("Error 201 no se encontraron resultados");
		$correcto = mysql_fetch_assoc($respuesta);

		return $correcto; //imprimirlo en la vista
	}


	public function Consulta($id = Null)
	{
		$this->Conect();
		$sql = "SELECT * FROM `jefeflia` WHERE `idjefe_familia`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("Error 202 no se logró consultar");
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
				$sql = "SELECT * FROM `grupo_fliar` WHERE `idjefe_familia`= '".$id."' AND  `status` <> 0";
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
			$sql = "UPDATE `jefeflia` SET `status` = '0' WHERE `idjefe_familia` = '".$id."' ";
			mysql_query($sql) or die ('Error 205 no se pudo eliminar');

			return "1";
		}
		else{
			return "0";
		}
	}


}


?>
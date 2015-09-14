<?php

include ('../config/config.php');

class Bitacora extends DataModel
{

	public function Accion($accion=Null)
	{
		if(!empty($accion['idjefe_familia'])){

			$sql= "SELECT * FROM `jefeflia` WHERE `status`= '1' " ;

		}else{
		$sql = "SELECT * FROM `jefeflia` WHERE  `status`= '0' " ;

		}
	}

	public function bitacora($datos= Null)
	{
		$this->Conect();

		if (!empty($datos['id_bitacora'])) {
			return "0";

		}else{
			$sql = "INSERT INTO `bitacora` (`id_bitacora`, `id_user`, `idjefe_familia`, `fecha_accion`, `accion`) VALUES (NULL, '', '', '".$datos['fecha_accion'] ."', '".$datos['accion'] ."');";
			mysql_query($sql) or die ('501 NO existen datos');

			return "1";
		}


	}


	public function Registro($datos = Null)
	{

		$this->Conect();

		$cedula = $this->Verificarcenso($datos['cedula']); //los datos dentro del parentesis se pasan al INSERT luego de values

		if (!empty($cedula)){

		return "0";
		}else{
					
			$datos['fecha_nacimiento'] = $datos['fecha_a']."-".$datos['fecha_m']."-".$datos['fecha_d'];

			$sql = "INSERT INTO `jefeflia` ( `idjefe_familia`,`nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `telfcel`, `telfhab`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`) VALUES (NULL, '".$datos['nombres']."', '".$datos['apellidos']."', '".$datos['nacionalidad']."', '".$datos['cedula']."','".$datos['fecha_nacimiento']."' , '".$datos['edad']."', '".$datos['sexo']."', '".$datos['cne']."', '".$datos['tiempo_comunidad']."', '".$datos['incapacitado']."', '".$datos['tipo_incapacitado']."', '".$datos['pensionado']."', '".$datos['institucion']."', '".$datos['telfcel']."', '".$datos['telfhab']."', '".$datos['telfofic']."', '".$datos['email']."', '".$datos['estado_civil']."', '".$datos['nivel_instruccion']."', '1','".$datos['profesion']."', '".$datos['trabaja']."', '".$datos['clasificacion_ingreso_familiar']."', '".$datos['ingreso_mensual']."')";

			mysql_query($sql) or die ('Error 201 no se pudo crear el usuario');

				return "1";
		}

	}

	public function Modificacion($datos= Null)
	{
		$this->Conect();
		if (!empty($datos['idjefe_familia'])) {
			$sql = "UPDATE `bitacora` SET `id_user` = '".$datos['nombre']."', `idjefe_familia` = '".$datos['nombres']."', `fecha_accion` = '".$datos['fecha_accion']."',`accion` = '".$datos['accion']."', `fecha_nacimiento` = '".$datos['fecha_nacimiento']."' , `edad` = '".$datos['edad']."', `sexo` = '".$datos['sexo']."'";
			mysql_query($sql) or die ('502 No existen modificaciones');

			return "1";
		}
		else{
			return "0";
		}
	}

	public function Consultas($id = Null)
	{
		$this->Conect();
		$sql = "SELECT * FROM `bitacora` WHERE `id_bitacora`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("503 No existen consultas");
		$correcto = mysql_fetch_assoc($respuesta);

		return $correcto; //imprimirlo en la vista


	}

	public function Elimino($id = Null)
	{
		$this->Conect();

		if (!empty($id)) {
			$sql = "UPDATE `jefeflia` SET `status` = '0' WHERE `idjefe_familia`  = '".$id."' ";
			mysql_query($sql) or die ('Error 210 no se pudo eliminar');

			return "1";
		}
		else{
			return "0";
		}
	}

	public function Selectbitacora($id = Null)
	{
		$this->Conect();
		if (!empty($id)) {
			$sql = "SELECT * FROM `jefeflia` WHERE `idjefe_familia`= '".$id."' ";
			$Selection = mysql_query($sql) or die ("Error 504 no se logró consultar");
			$respuesta = mysql_fetch_assoc($Selection);

		}else{
			$sql = "SELECT * FROM `jefeflia` WHERE  `status` <> '0'";
			$respuesta = mysql_query($sql) or die ("Error 505 no se logró consultar");

		}
	}

	public function SelectbitacoraUser($id = Null)
	{
		$this->Conect();
		if (!empty($id)) {
			$sql = "SELECT * FROM `usuario` WHERE `id_user`= '".$id."' ";
			$Selection = mysql_query($sql) or die ("Error 506 no se logró consultar");
			$respuesta = mysql_fetch_assoc($Selection);

		}else{
			$sql = "SELECT * FROM `usuario` WHERE  `status` <> '0'";
			$respuesta = mysql_query($sql) or die ("Error 506 no se logró consultar");

		}
	}

	public function BitacoraValidacionTiempo($fecha = Null)

	{
		$this->Conect();
		if (!empty($fecha)) {
			$sql = "SELECT * FROM `jefeflia` WHERE  `idjefe_familia` = '".$fecha."'";
			$validacion = mysql_query($sql) or die ('Error ');
			$row = mysql_fetch_assoc($validacion);

			$fecha = $row['fecha_creacion']; //fecha que tengo en formato UNIX en mi tabla

			$fecha1 = date("Y-m-d H:i:s",time()); //tomo fecha y hora actual

		$resultado= $this->calcula_hora($fecha, $fecha1);

		if ($resultado<=4) {
			return "1";
		}else{
			return "0";
		}

		}
		else{
			return "0";
		}
	}

	

}
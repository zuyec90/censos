<?php

include ('../config/config.php');

class Bitacora extends DataModel
{

	public function Registro($datos= Null)
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
}
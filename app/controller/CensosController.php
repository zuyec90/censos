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

		$e = $this->Verificarcenso($datos['cedula']); //los datos dentro del parentesis se pasan al INSERT luego de values

		if (!empty($e)){

			return "0";
		}else{
						// cambiar segun base de datos INSERT
			$sql = "INSERT INTO `jefeflia` (`Nombres`, `Apellidos`, `id_cedula`) VALUES ('".$datos['Nombres']."', '".$datos['Apellidos']."', '".$datos['id_cedula']."'";
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


	

}


?>
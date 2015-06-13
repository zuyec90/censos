<?php
/* veremos cuales son los
errores 
Esperanza*/
include ('../config/config.php');

class censo extends DataModel
{
	public function Consulta($id = Null)
	{
		$this->Conect();
		$sql = "SELECT * FROM `jefeflia` WHERE `idjefe_familia`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("Error 201 no se logró consultar");
		$correcto = mysql_fetch_assoc($respuesta); 

		return $correcto; //imprimirlo en la vista

		
	}


	public function Verificarcenso($cedula = Null)
	{

		$sql = "SELECT * FROM `jefeflia` WHERE `cedula`= ".$cedula."";

		$respuesta = mysql_query($sql) or die ("Error 202 no se encontraron resultados");
		$correcto = mysql_fetch_assoc($respuesta); 

		return $correcto; //imprimirlo en la vista
	}

}


?>
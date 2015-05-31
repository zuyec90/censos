<?php
/* veremos cuales son los
errores 
Esperanza*/
include ('../config/config.php');

class jefe extends DataModel
{
	public function Consulta($id = Null)
	{
		$this->Conect();
		$sql = "SELECT * FROM `jefe` WHERE `id_cedula`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("Error 201 no se logró consultar");
		$correcto = mysql_fetch_assoc($respuesta); 

		return $correcto; //imprimirlo en la vista

		
	}

}


?>
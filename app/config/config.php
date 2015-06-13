<?php

/**
* 1.0 v
* saul catagua 12/05/2015
* clase para la conexion a la base de datos
*/
class DataModel
{

	 public function Conect()
	{
		$user = 'root';
		$pass ='';
		$bd = 'censos';
		$servidor = 'localhost';
		$Conexion =  mysql_connect($servidor, $user, $pass ) or die("Error 101 conexion bd ");
		mysql_select_db($bd) or die ('Error 102 No se ha seleccionado la base de datos ');
		return $Conexion ;
	}



}


?>
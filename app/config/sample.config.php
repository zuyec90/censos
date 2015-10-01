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
		//error_reporting(0);
		$user = 'root';
		$pass ='123456';
		$bd = 'censo';
		$servidor = 'localhost';
		$Conexion =  mysql_connect($servidor, $user, $pass ) or die("Error 101 conexion bd ");
		mysql_select_db($bd) or die ('Error 102 No se ha seleccionado la base de datos ');
		return $Conexion ;


	}

	public function Seguridad()
	{

		if (empty($_SESSION['login'])) {
			header("Location: login.php");
		}

	}

	public function ValidaPerfil($perfil = Null)
	{

		if ($_SESSION['perfil'] != $perfil  ) {
			//echo $_SESSION['perfil']." - ". $perfil ;
			header("Location: home.php?auth=no");
		}

	}



}


?>
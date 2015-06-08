<?php
/* Mensajes
*/
include ('../config/config.php'); //el llamado a la funcion cuando el usuario ingresa al sistema 

class mensaje extends DataModel
{
	public function mensaje($id_notificacion = Null) //el id_notificacion viene de la tabla de base de datos
	{
		$this->Conect();
		$sql = "SELECT * FROM `notificacion` WHERE `notificacion`= '".$id_notificacion."' ";

		$enviar = mysql_query($sql) or die ("Error 301 no se logró consultar"); // del error 300 para alla es para mensaje
		$respuesta = mysql_fetch_assoc($enviar); //las funciones `pueden tener otro nombre

		return $respuesta; 

		
	}


	public function VerificarMensaje($id_notificacion = Null) //verificar que existe el mensaje
	{

		$sql = "SELECT * FROM `notificacion` WHERE `notificacion`= ".$id_notificacion." or ( `fecha`= '".$fecha_creacion.""; //verificando a traves del numero del mensaje y la fecha

		$enviar = mysql_query($sql) or die ("Error 301 no se logró consultar");
		$respuesta = mysql_fetch_assoc($enviar); 

		return $respuesta; 
	}

}


?>
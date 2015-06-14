<?php
include ('../config/config.php');

class Mensaje extends DataModel
{

	public function Crear($data = NULL)
	{

		$this->Conect();

		if (!empty($data)){			//Estuve verificando y observe que al dejarle el signo de exclamacion al empty
									//y cambianto el return 0 por 1 y en el "else" el 1 por 0 el mensaje se envia
			return "1";				//Esto porque en la libreria se crea el msj si es igual a 1.
		}else{						//Sin embargo al entrar directamente en MensajeCrear.php siguen los errores. Escribo este
									//comentario para que lo observe y puedan ayudarme Gracias.

			//Puse el var_dump($data); que le agrego saul en comentario 
			$sql = "INSERT INTO `notificacion` (`id_notificacion`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES (NULL, '".$data['id_user_rece'] ."', '".$data['id_user'] ."', '".$data['mensaje'] ."', NOW(), '0')";
			mysql_query($sql) or die ('error 301 no se pudo crear el mensaje');

			return "0";
		}

	}
	public function Select($msj = Null)
	{
		$this->Conect();
		if (!empty($msj)) {
			$sql = "SELECT * FROM `notificacion` WHERE `id_notificacion`= '".$msj."' ";
			$SelectionMsj = mysql_query($sql) or die ("Error 301 no se logró consultar");
			$respuesta = mysql_fetch_assoc($SelectionMsj);

		}else{
			$sql = "SELECT * FROM `notificacion` WHERE  `status` <> '0'";
			$respuesta = mysql_query($sql) or die ("Error 301 no se logró consultar");

		}
		return $respuesta;
	}
}
?>
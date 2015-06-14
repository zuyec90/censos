<?php
include ('../config/config.php');

class Mensaje extends DataModel
{

	public function Crear($data = NULL)
	{

		$this->Conect();

		if (empty($data)){

			return "0";
		}else{

			var_dump($data);
			$sql = "INSERT INTO `notificacion` (`id_notificacion`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES (NULL, '".$data['id_user_rece']."', '".$data['id_user']."', '".$data['mensaje']."', NOW(), '0')";
			mysql_query($sql) or die ('error 301 no se pudo crear el mensaje');

			return "1";
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
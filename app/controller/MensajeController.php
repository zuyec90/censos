<?php
include ('../config/config.php');

class Mensaje extends DataModel
{

	public function Crear($data = NULL)
	{
		$this->Conect();


		if (!empty($data)){			
			
			$sql = "INSERT INTO `notificacion` (`id_notificacion`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES (NULL, '".$data['id_user_rece'] ."', '".$data['id_user'] ."', '".$data['mensaje'] ."', NOW(), '1')";
			mysql_query($sql) or die ('error 301 no se pudo crear el mensaje');	
			
			return "1";				
		}else{						
									
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
			$respuesta = mysql_query($sql) or die ("Error 302 no se logró consultar");
		}
		return $respuesta;
	}

	public function Eliminar($MsJ = Null)
	{
		$this->Conect();
		if (!empty($MsJ)) {
			$sql = "UPDATE `notificacion` SET `status` = '2' WHERE `id_notificacion` = '".$MsJ."' ";
			mysql_query($sql) or die ('Error 303 no se pudo eliminar el mensaje');
			return "1";
		}
		else{
			return "0";
		}
	}

		public function respuesta($resp = Null)

	{
		$this->Conect();
		if (!empty($resp)) {
			$sql = "UPDATE `notificacion` SET `status` = '3' WHERE `id_notificacion` = '".$resp."' ";
			mysql_query($sql) or die ('Error 305 no se pudo responder el mensaje');
			return "1";
		}
		else{
			return "0";
		}
	}

}
?>
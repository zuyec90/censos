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


			$sql = "INSERT INTO `notificacion` (`id_notificacion`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES (NULL, '".$data['id_user_rece']."', '".$data['id_user']."', '".$data['mensaje']."', NOW(), '0');";
			mysql_query($sql) or die ('error 301 no se pudo crear el usuario');

			return "1";
		}



	}
	?>
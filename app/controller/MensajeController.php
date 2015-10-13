<?php
include ('../config/config.php');

class Mensaje extends DataModel
{


	public function Crear($data = NULL)
	{
		$this->Conect();


		if (!empty($data)){

			$sql = "INSERT INTO `notificacion` (`id_notificacion`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES (NULL, '".$data['id_user_rece'] ."', '".$data['id_user'] ."', '".$data['mensaje'] ."', NOW(), '0')";
			mysql_query($sql) or die ('error 401 no se pudo crear el mensaje');

			return "1";
		}else{

			return "0";
		}

	}

	public function Select($msj = Null)
	{
		$this->Conect();
		if (!empty($msj)) {
			$sql = "SELECT * FROM `notificacion` WHERE `id_notificacion` = '".$msj."' ";

			$SelectionMsj = mysql_query($sql) or die ("Error 402 no se logró consultar");
			$respuesta = mysql_fetch_assoc($SelectionMsj);

		}else{
			$sql = "SELECT * FROM `notificacion` WHERE  `status` <> '2' and `id_respuesta` = '0' ORDER BY  `id_notificacion` DESC";
			$respuesta = mysql_query($sql) or die ("Error 402 no se logró consultar");
		}
		return $respuesta;
	}

	public function Selecthijos($id_notificacion = Null)
	{
		$this->Conect();
		if (!empty($id_notificacion)) {
			$sql = "SELECT * FROM `notificacion` WHERE (`id_respuesta` = '".$id_notificacion."' and `status` <> '2' ) ORDER BY  `id_notificacion` DESC  ";

			$respuesta = mysql_query($sql) or die ("Error 403 no se logro seleccionar hijos");

		}else{
			$sql = "SELECT * FROM `notificacion` WHERE  `status` <> '2' and `id_respuesta` = '0' ORDER BY  `id_notificacion` DESC";
			$respuesta = mysql_query($sql) or die ("Error 403 no se logró consultar");
		}
		return $respuesta;
	}

	public function Eliminar($MsJ = Null)
	{
		$this->Conect();
		if (!empty($MsJ)) {
			$sql = "UPDATE `notificacion` SET `status` = '2' WHERE `id_notificacion` = '".$MsJ."' ";
			mysql_query($sql) or die ('Error 404 no se pudo eliminar el mensaje');
			return "1";
		}
		else{
			return "0";
		}
	}
	public function Leido($id_notificacion = Null)
	{
		$this->Conect();
		if (!empty($id_notificacion)) {
			$sql = "UPDATE `notificacion` SET `status` = '1' WHERE `id_notificacion` = '".$id_notificacion."' ";
			mysql_query($sql) or die ('Error 405 no se pudo actualizar el mensaje');
			return "1";
		}
		else{
			return "0";
		}
	}

		public function respuesta($data = Null)
	{
		$this->Conect();
		if (!empty($data)) {
			$sql = "INSERT INTO `notificacion` (`id_notificacion`, `id_respuesta`, `id_user_rece`, `id_user`, `mensaje`, `fecha_creacion`, `status`) VALUES (NULL, '".$data['id_notificacion']."', '".$data['id_user_rece'] ."', '".$data['id_user'] ."', '".$data['mensaje'] ."', NOW(), '0')";
			mysql_query($sql) or die ('Error 406 no se pudo responder el mensaje');

			$sql = "UPDATE `notificacion` SET `status` = '0' WHERE `id_notificacion` = '".$data['id_notificacion']."' ";
			mysql_query($sql) or die ('Error 406 no se pudo responder el mensaje');

			return "1";
		}
		else{
			return "0";
		}



	}


	public function ConsultaReceptor($id_user = Null)
		{
			$this->Conect();
			if (!empty($id_user)) {
				$sql = "SELECT * FROM `usuario` WHERE `id_user` = '".$id_user."' ";
				$SelectionMsj = mysql_query($sql) or die ("Error 407 no se logró consultar");
				$respuesta = mysql_fetch_assoc($SelectionMsj);
			}else{
				return "no hay id user";
			}
			return $respuesta;
		}
	public function ConsultaUser($id_user = Null)
		{
			$this->Conect();
			if (!empty($id_user)) {
				$sql = "SELECT * FROM `usuario` WHERE `id_user` = '".$id_user."' ";
				$SelectionMsj = mysql_query($sql) or die ("Error 408 no se logró consultar");
				$respuesta = mysql_fetch_assoc($SelectionMsj);
			}else{
				$sql = "SELECT * FROM `usuario` WHERE  `status` <> '2'";
				$respuesta = mysql_query($sql) or die ("Error 408 no se logró consultar");
			}
			return $respuesta;
		}

	public function Contar($id_notificacion = Null)
		{
			$sql = "SELECT COUNT(*) FROM `notificacion` WHERE `id_respuesta` = ".$id_notificacion." ";
			$respuesta = mysql_query($sql);
			$respuesta = mysql_fetch_assoc($respuesta);

			return $respuesta;
		}

	public function Search($msj = Null)
	{
		$this->Conect();
		if (!empty($msj)) {
			echo $sql = "SELECT * FROM `notificacion` WHERE id_user = (SELECT id_user FROM `usuario` WHERE  `nombre` LIKE  '%".$msj."%') ";

			$SelectionMsj = mysql_query($sql) or die ("Error 402 no se logró consultar");
			$respuesta = mysql_fetch_assoc($SelectionMsj);

			//$respuesta['id_user']

		}else{
		/*	$sql = "SELECT * FROM `notificacion` WHERE  `status` <> '2' and `id_respuesta` = '0' ORDER BY  `id_notificacion` DESC";
			$respuesta = mysql_query($sql) or die ("Error 402 no se logró consultar");*/
		}
		return $respuesta;
	}



}
?>
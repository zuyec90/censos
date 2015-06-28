<?php
include ('../config/config.php');

class Mensaje extends DataModel
{
	public function segundos_tiempo($segundos){

		$minutos=$segundos/60;
		$horas=floor($minutos/60);
		$dias=floor($horas/24);
		$horas2=$horas;
		//if($horas2>24)$horas2=$horas-24;
		$horas2=$horas%24;
		$minutos2=$minutos%60;
		$segundos_2=$segundos%60%60%60;

		if($minutos2<10)$minutos2='0'.$minutos2;

		if($segundos_2<10)$segundos_2='0'.$segundos_2;

		if($segundos<60){ /* segundos */

			$resultado= round($segundos).' Segundos';

		}elseif($segundos>60 && $segundos<3600){/* minutos */

			$resultado= $minutos2.':'.$segundos_2.' Minutos';

		}elseif($segundos>3599 && $segundos<86400){/* horas */

			$resultado= $horas.':'.$minutos2.':'.$segundos_2;

		}else{

			$resultado= $dias.' '.$horas2.':'.$minutos2.':'.$segundos_2;

		}
			return $resultado;
		}

	public	function calcula_hora($fecha_entrada,$fecha_salida) {

		$fecha1=strtotime($fecha_salida);		//strtotime convirte la fecha y la hora en un valor unico (numero calculable)

		$fecha2=strtotime($fecha_entrada);

		$diferencia=$fecha1-$fecha2;

		$total=date("Y-m-d H:i:s",$diferencia);

		return $this->segundos_tiempo($diferencia);

		}

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
			$sql = "SELECT * FROM `notificacion` WHERE `id_notificacion` = '".$msj."' ";

			$SelectionMsj = mysql_query($sql) or die ("Error 301 no se logró consultar");
			$respuesta = mysql_fetch_assoc($SelectionMsj);
		}else{
			$sql = "SELECT * FROM `notificacion` WHERE  `status` <> '2'";
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
	public function Leido($id_notificacion = Null)
	{
		$this->Conect();
		if (!empty($id_notificacion)) {
			$sql = "UPDATE `notificacion` SET `status` = '1' WHERE `id_notificacion` = '".$id_notificacion."' ";
			mysql_query($sql) or die ('Error 304 no se pudo actualizar el mensaje');
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

	public function ValidacionTiempo($fecha = Null)

	{
		$this->Conect();
		if (!empty($fecha)) {
			$sql = "SELECT * FROM `jefeflia` WHERE  `idjefe_familia` = '".$fecha."'";
			$validacion = mysql_query($sql) or die ('Error ');
			$row = mysql_fetch_assoc($validacion);

			$fecha = $row['fecha_creacion']; //fecha que tengo en formato UNIX en mi tabla

			$fecha1 = date("Y-m-d H:i:s",time()); //tomo fecha y hora actual

		$resultado= $this->calcula_hora($fecha, $fecha1)."<br>";
		if ($resultado<=4) {
			return "1";
		}

		}
		else{
			return "0";
		}
	}
}
?>
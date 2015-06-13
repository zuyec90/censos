<?php
include ('../config/config.php');

class Mensaje extends DataModel
{

	public function Crear($data = Null)
	{

		$this->Conect();

		if (empty($data)){

			return "0";
		}else{


			$sql = "";
			mysql_query($sql) or die ('error 301 no se pudo crear el usuario');

			return "1";
		}



	}
	?>
<?php
include ('../config/config.php');
/**
*
*/
class User extends DataModel
{

	public function Crear($data = Null)
	{

		$this->Conect();

		$e = $this->VerifyUser('312312',$data['nombre'],'qwqwe@eqweqwe.asda');

		if (!empty($e)){
			echo "1  ya existe el usuario que vaina";
		}else{
			echo "no existe hay que registralo";

			$sql = "INSERT INTO `usuario` (`id_user`, `nombre_comple`,`fecha_creado`) VALUES (NULL,'".$data['nombre']."', NOW() );";
			mysql_query($sql) or die ('error 104 no se pudo crear el usuario');

		}





	}

	public function VerifyUser($ci = Null, $user = Null, $email = Null)
	{

		$sql = "SELECT * FROM `usuario` WHERE `cedula`= ".$ci." or ( `email`= '".$email."' or `usuario` = '".$user."' )";

		$resultado = mysql_query($sql) or die ("error 103 no logra consultar");
		$valida = mysql_fetch_assoc($resultado);

		return $valida;
	}
}

?>
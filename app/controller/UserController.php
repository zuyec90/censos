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

		$e = $this->VerifyUser($data['cedula'],$data['nombre'],$data['email']);

		if (!empty($e)){

			return "0";
		}else{


			$sql = "INSERT INTO `usuario` (`id_user`, `nombre`, `apellido`, `cedula`, `email`, `celular`, `sexo`, `direccion`, `voceria`, `perfil`, `usuario`, `contrasenia`, `fecha_creado`) VALUES (NULL,'".$data['nombre'] ."','".$data['apellido'] ."','".$data['cedula'] ."','".$data['email'] ."','".$data['celular'] ."','".$data['sexo'] ."','".$data['direccion'] ."','".$data['voceria'] ."','".$data['perfil'] ."','".$data['usuario'] ."','".$data['contrasenia'] ."',NOW() );";
			mysql_query($sql) or die ('error 104 no se pudo crear el usuario');

			return "1";
		}



	}

	public function VerifyUser($ci = Null, $user = Null, $email = Null)
	{

		$sql = "SELECT * FROM `usuario` WHERE `cedula`= ".$ci." or ( `email`= '".$email."' or `usuario` = '".$user."' )";

		$resultado = mysql_query($sql) or die ("error 103 no logra consultar");
		$valida = mysql_fetch_assoc($resultado);

		return $valida;
	}

	public function modificar($data = Null)
	{
		$sql = "SELECT * FROM `usuario` WHERE `cedula`= ".$ci." or ( `email`= '".$email."' or `usuario` = '".$user."' )";

		$resultado = mysql_query($sql) or die ("error 103 no logra consultar");
		$valida = mysql_fetch_assoc($resultado);
	}
}


?>
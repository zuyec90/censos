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

	public function Select($id = Null)
	{
		$this->Conect();
		if (!empty($id)) {
			$sql = "SELECT * FROM `usuario` WHERE `id_user`= '".$id."' ";
			$Selection = mysql_query($sql) or die ("Error 201 no se logró consultar");
			$respuesta = mysql_fetch_assoc($Selection);

		}else{
			$sql = "SELECT * FROM `usuario` ";
			$respuesta = mysql_query($sql) or die ("Error 201 no se logró consultar");

		}


		return $respuesta; //imprimirlo en la vista


	}

	public function eliminar($id = Null)
	{
		$this->Conect();

		if (!empty($id)) {
			$sql = "UPDATE `censo`.`usuario` SET `status` = '1' WHERE `usuario`.`id_user` = '".$id."' ";
			mysql_query($sql) or die ('error 104 no se pudo modificar el usuario');

			return "1";
		}
		else{
			return "0";
		}
	}
}


?>
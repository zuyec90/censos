<?php
/* veremos cuales son los
errores 
Esperanza*/
include ('../config/config.php');

class censo extends DataModel
{

	public function Registrar($data = Null)
	{

		$this->Conect();

		$e = $this->Verificarcenso($data['cedula']);

		if (!empty($e)){

			return "0";
		}else{

			$sql = INSERT INTO `censos`.`jefeflia` (`Nombres`, `Apellidos`, `id_cedula`, `Fnacimiento`, `Edad`, `Sexo`, `CNE`, `Tcomunidad`, `Incapacitado`, `Tipoincap`, `Pensionado`, `Institucion`, `Telfcel`, `Telfhab`, `Telfofic`, `Email`, `Ecivil`, `Ninstruccion`, `Profesion`, `Trabaja`, `Ingresofliar`, `Ingreso`) VALUES ('EDE', 'HER', '12345', '1', '1', '1', '1', '1', '1', '1', '1', '111', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
			mysql_query($sql) or die ('error 201 no se pudo crear el usuario');

			return "1";
		}

	}

	public function Verificarcenso($cedula = Null)
	{

		$sql = "SELECT * FROM `jefeflia` WHERE `cedula`= ".$cedula."";

		$respuesta = mysql_query($sql) or die ("Error 201 no se encontraron resultados");
		$correcto = mysql_fetch_assoc($respuesta); 

		return $correcto; //imprimirlo en la vista
	}


	public function Consulta($id = Null)
	{
		$this->Conect();
		$sql = "SELECT * FROM `jefeflia` WHERE `idjefe_familia`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("Error 202 no se logró consultar");
		$correcto = mysql_fetch_assoc($respuesta); 

		return $correcto; //imprimirlo en la vista

		
	}


	

}


?>
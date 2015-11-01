<?php
/* veremos cuales son los
errores
Esperanza*/
include ('../config/config.php');

class censo extends DataModel
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

		}elseif($segundos>3599 && $segundos<86400){ /* horas */

			$resultado= $horas.':'.$minutos2.':'.$segundos_2;

		}else{

			$resultado= $dias.' '.$horas2.':'.$minutos2.':'.$segundos_2;
			$resultado=$horas2;
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

	public function ValidacionTiempo($fecha = Null)

	{
		$this->Conect();
		if (!empty($fecha)) {
			/*$sql = "SELECT * FROM `jefeflia` WHERE  `idjefe_familia` = '".$fecha."'";
			$validacion = mysql_query($sql) or die ('Error ');
			$row = mysql_fetch_assoc($validacion);

			$fecha = $row['fecha_creacion']; //fecha que tengo en formato UNIX en mi tabla*/

			$fecha1 = date("Y-m-d H:i:s",time()); //tomo fecha y hora actual

		$resultado= $this->calcula_hora($fecha, $fecha1);

		if ($resultado > 4) {
			return "1";
		}else{
			return "0";
		}

		}
	}
	public function Registrar($datos = Null)
	{

		$this->Conect();

		$cedula = $this->Verificarcenso($datos['cedula']); //los datos dentro del parentesis se pasan al INSERT luego de values

		if (!empty($cedula)){

		return "0";
		}else{
					

			$sql = "INSERT INTO `jefeflia` (`idjefe_familia`, `estado`, `municipio`, `parroquia`, `sector`, `nombre_comunidad`, `direccion`, `nombres`, `apellidos`, `nacionalidad`, `cedula`, `fecha_nacimiento`, `edad`, `sexo`, `cne`, `tiempo_comunidad`, `incapacitado`, `tipo_incapacitado`, `pensionado`, `institucion`, `codigo_cel`, `telfcel`, `codigo_hab`, `telfhab`, `codigo_ofic`, `telfofic`, `email`, `estado_civil`, `nivel_instruccion`, `status`, `profesion`, `trabaja`, `clasificacion_ingreso_familiar`, `ingreso_mensual`, `fecha_creacion`) VALUES (NULL, '".$datos['estado']."', '".$datos['municipio']."', '".$datos['parroquia']."', '".$datos['sector']."', '".$datos['nombre_comunidad']."', '".$datos['direccion']."', '".$datos['nombres']."', '".$datos['apellidos']."', '".$datos['nacionalidad']."', '".$datos['cedula']."','".$datos['fecha_nacimiento']."' , '".$datos['edad']."', '".$datos['sexo']."', '".$datos['cne']."', '".$datos['tiempo_comunidad']."', '".$datos['incapacitado']."', '".$datos['tipo_incapacitado']."', '".$datos['pensionado']."', '".$datos['institucion']."', '".$datos['codigo_cel']."', '".$datos['telfcel']."', '".$datos['codigo_hab']."', '".$datos['telfhab']."', '".$datos['codigo_ofic']."', '".$datos['telfofic']."', '".$datos['email']."', '".$datos['estado_civil']."', '".$datos['nivel_instruccion']."', '1','".$datos['profesion']."', '".$datos['trabaja']."', '".$datos['clasificacion_ingreso_familiar']."', '".$datos['ingreso_mensual']."', NOW() )";

			mysql_query($sql) or die ('Error 201 no se pudo crear el usuario');

				

			/*** Ejemplo de bitacora ***/

			$variabledesession = 5; // esto no se tiene porque aun no se tiene nada de session		
			$id=mysql_insert_id(); 
			$sqlBitacora = "INSERT INTO `bitacora` (`id_bitacora`, `id_user`, `idjefe_familia`, `fecha_accion`, `accion`) VALUES (NULL, '".$variabledesession."', $id, NOW(), 'Creacion del primer registro')";
			mysql_query($sqlBitacora);
			
			/*** Ejemplo de bitacora **/

			return $id;
		}

	}

	public function Verificarcenso($cedula = Null)
	{

		$sql = "SELECT * FROM `jefeflia` WHERE `cedula`= ".$cedula."";

		$respuesta = mysql_query($sql) or die ("Error 202 no se encontraron resultados");
		$correcto = mysql_fetch_assoc($respuesta);

		return $correcto; //imprimirlo en la vista
	}

	public function ModificarJefeflia($datos = Null)
	{
		$this->Conect();
		if (!empty($datos['idjefe_familia'])) {
			$sql = "UPDATE `jefeflia` SET `direccion` = '".$datos['direccion']."', `nombres` = '".$datos['nombres']."', `apellidos` = '".$datos['apellidos']."', `nacionalidad` = '".$datos['nacionalidad']."',`cedula` = '".$datos['cedula']."', `fecha_nacimiento` = '".$datos['fecha_nacimiento']."' , `edad` = ".$datos['edad'].", `sexo` = '".$datos['sexo']."', `cne` = '".$datos['cne']."', `tiempo_comunidad` = '".$datos['tiempo_comunidad']."', `incapacitado` = '".$datos['incapacitado']."', `tipo_incapacitado` = '".$datos['tipo_incapacitado']."', `pensionado` ='".$datos['pensionado']."', `institucion` = '".$datos['institucion']."', `telfcel` = '".$datos['telfcel']."', `telfhab` = '".$datos['telfhab']."', `telfofic` = '".$datos['telfofic']."', `email` = '".$datos['email']."', `estado_civil` = '".$datos['estado_civil']."', `nivel_instruccion` = '".$datos['nivel_instruccion']."', `profesion` ='".$datos['profesion']."', `trabaja` = '".$datos['trabaja']."', `clasificacion_ingreso_familiar` = '".$datos['clasificacion_ingreso_familiar']."', `ingreso_mensual` = '".$datos['ingreso_mensual'] ."' WHERE `idjefe_familia` = '".$datos['idjefe_familia'] ."'";
			mysql_query($sql) or die ('Error 203 no se pueden modificar los datos');

			/*** Ejemplo de bitacora ***/

			$variabledesession = 5; // esto no se tiene porque aun no se tiene nada de session		
			$id=$datos['idjefe_familia']; 
			$sqlBitacora = "INSERT INTO `bitacora` (`id_bitacora`, `id_user`, `idjefe_familia`, `fecha_accion`, `accion`) VALUES (NULL, '".$variabledesession."', $id, NOW(), 'Modifico el registro')";
			mysql_query($sqlBitacora);
			
			/*** Ejemplo de bitacora **/

			return "1";
		}
		else{
			return "0";
		}
	}

	public function RegistrarFamiliar($datos = Null)
	{

		$this->Conect();

	//	echo $sql = "INSERT INTO `grupo_fliar` (`id_familiar`, `idjefe_familia`, `nacionalidad`, `cedula`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `edad`, `incapacitado`, `Tipo_incapacitado`, `Embarazo_tempr`, `parentesco`, `nivel_instruccion`, `cne`, `profesion`, `pensionado`, `ingreso_mensual`, `observacion`, `status`) VALUES (NULL, '', '".$datos['nacionalidad']."', '".$datos['cedula']."', '".$datos['nombre']."', '".$datos['apellido']."', '".$datos['sexo']."', '".$datos['fecha_nacimiento']."', '".$datos['edad']."', '".$datos['incapacitado']."', '".$datos['Tipo_incapacitado']."', '".$datos['Embarazo_tempr']."', '".$datos['parentesco']."', '".$datos['nivel_instruccion']."', '".$datos['cne']."', '".$datos['profesion']."', '".$datos['pensionado']."', '".$datos['ingreso_mensual']."', '".$datos['observacion']."', '1')";

		$valido = $this->VerificarFamiliar($datos['nombre'], $datos['apellido'], $datos['cedula']); //los datos dentro del parentesis se pasan al INSERT luego de values

		if (!empty($valido)){

		return "0";
		}else{


		echo $sql = "INSERT INTO `grupo_fliar` (`id_familiar`, `idjefe_familia`, `nacionalidad`, `cedula`, `nombre`, `apellido`, `sexo`, `fecha_nacimiento`, `edad`, `incapacitado`, `Tipo_incapacitado`, `Embarazo_tempr`, `parentesco`, `nivel_instruccion`, `cne`, `profesion`, `pensionado`, `ingreso_mensual`, `observacion`, `status`) VALUES (NULL, '".$datos['idjefe_familia']."', '".$datos['nacionalidad']."', '".$datos['cedula']."', '".$datos['nombre']."', '".$datos['apellido']."', '".$datos['sexo']."', '".$datos['fecha_nacimiento']."', '".$datos['edad']."', '".$datos['incapacitado']."', '".$datos['Tipo_incapacitado']."', '".$datos['Embarazo_tempr']."', '".$datos['parentesco']."', '".$datos['nivel_instruccion']."', '".$datos['cne']."', '".$datos['profesion']."', '".$datos['pensionado']."', '".$datos['ingreso_mensual']."', '".$datos['observacion']."', '1')";

			mysql_query($sql) or die ('Error 204 no se pudo registrar el usuario');
			$id=mysql_insert_id(); 

			$variabledesession = 5; // esto no se tiene porque aun no se tiene nada de session					
			$sqlBitacora = "INSERT INTO `bitacora` (`id_bitacora`, `id_user`, `idjefe_familia`, `fecha_accion`, `accion`) VALUES (NULL, '".$variabledesession."', $id, NOW(), 'se registro un familiar')";
			mysql_query($sqlBitacora);

				return $id;
		}

	}
	public function VerificarFamiliar($nombre = NULL, $apellido = NULL, $cedula = NULL)
	{
		if (!empty($cedula)) {
		$sql = "SELECT * FROM `grupo_fliar` WHERE ( `nombre`= '".$nombre."' and `apellido`= '".$apellido."' ) or  `cedula`= ".$cedula." " ;

		}else{
		$sql = "SELECT * FROM `grupo_fliar` WHERE  `nombre`= '".$nombre."' and `apellido`= '".$apellido."' " ;

		}
		//echo $sql;
		$respuesta = mysql_query($sql) or die ("Error 205 no se encontraron resultados");
		$correcto = mysql_fetch_assoc($respuesta);

		return $correcto; //imprimirlo en la vista
	}

	public function ModificarFamiliar($datos = Null)
	{
		$this->Conect();
		if (!empty($datos['id_familiar'])) {
			$sql = "UPDATE `grupo_fliar` SET `cedula` = '".$datos['cedula']."', `nombre` = '".$datos['nombre']."', `apellido` = '".$datos['apellido']."', `sexo` = '".$datos['sexo']."', `fecha_nacimiento` = '".$datos['fecha_nacimiento']."', `edad` = '".$datos['edad']."', `incapacitado` = '".$datos['incapacitado']."', `Tipo_incapacitado` = '".$datos['Tipo_incapacitado']."', `Embarazo_tempr` = '".$datos['Embarazo_tempr']."', `parentesco` = '".$datos['parentesco']."', `nivel_instruccion` = '".$datos['nivel_instruccion']."', `cne` = '".$datos['cne']."', `profesion` = '".$datos['profesion']."', `pensionado` = '".$datos['pensionado']."', `ingreso_mensual` = '".$datos['ingreso_mensual']."', `observacion` = '".$datos['observacion'] ."' WHERE `id_familiar` = '".$datos['id_familiar'] ."' ";
			
			mysql_query($sql) or die ('Error 206 no se pueden modificar los datos');

			return "1";
		}
		else{
			return "0";
		}
	}


	public function Consulta($id = Null)
	{
		$this->Conect();
		$sql = "SELECT * FROM `jefeflia` WHERE `idjefe_familia`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("Error 207 no se logro consultar");
		$correcto = mysql_fetch_assoc($respuesta);

		return $correcto; //imprimirlo en la vista


	}

	public function Selectjefe($id = Null)
	{
		$this->Conect();
		$this->Seguridad();// esto es  para si no esta logeado lo bote de la session 
		if (!empty($id)) {
			$sql = "SELECT * FROM `jefeflia` WHERE `idjefe_familia`= '".$id."' ";
			$Selection = mysql_query($sql) or die ("Error 208 no se logró consultar");
			$respuesta = mysql_fetch_assoc($Selection);

		}else{
			$sql = "SELECT * FROM `jefeflia` WHERE  `status` <> '0'";
			$respuesta = mysql_query($sql) or die ("Error 208 no se logró consultar");

		}


		return $respuesta; //imprimirlo en la vista

	}

	public function SelectFamiliar($id = Null)
		{
			$this->Conect();
			if (!empty($id)) {
			 $sql = "SELECT * FROM `grupo_fliar` WHERE `idjefe_familia`= '".$id."' AND  `status` <> 0 ";

				$respuesta = mysql_query($sql) or die ("Error 209 no se logró consultar");

			}else{
				return 0;
			}

			return $respuesta; //imprimirlo en la vista

		}


		public function Eliminarjefe($id = Null)
	{
		$this->Conect();

		if (!empty($id)) {
			$sql = "UPDATE `jefeflia` SET `status` = '0' WHERE `idjefe_familia`  = '".$id."' ";
			mysql_query($sql) or die ('Error 210 no se pudo eliminar');

			/*** Ejemplo de bitacora ***/

			$variabledesession = 5; // esto no se tiene porque aun no se tiene nada de session					
			$sqlBitacora = "INSERT INTO `bitacora` (`id_bitacora`, `id_user`, `idjefe_familia`, `fecha_accion`, `accion`) VALUES (NULL, '".$variabledesession."', $id, NOW(), 'Elimino el registro ')";
			mysql_query($sqlBitacora);
			
			/*** Ejemplo de bitacora **/



			return "1";
		}
		else{
			return "0";
		}
	}

	public function EliminarFamiliar($id = Null)
	{
		$this->Conect();

		if (!empty($id)) {

			$sql = "UPDATE `grupo_fliar` SET `status` = '0' WHERE `id_familiar`  = '".$id."' ";
			mysql_query($sql) or die ('Error 211 no se pudo eliminar');

			return "1";
		}
		else{
			return "0";
		}
	}


	public function ConsultaUser($id_user = Null)
		{
			$this->Conect();
			if (!empty($id_user)) {
				$sql = "SELECT * FROM `usuario` WHERE `id_user` = '".$id_user."' ";
				$SelectionMsj = mysql_query($sql) or die ("Error 212 no se logró consultar");
				$respuesta = mysql_fetch_assoc($SelectionMsj);
			}else{
				$sql = "SELECT * FROM `usuario` WHERE  `status` <> 2 and `perfil` = 1";
				$respuesta = mysql_query($sql) or die ("Error 212 no se logró consultar");
			}
			return $respuesta;
		}


	public function Reporte ($Consulta= Null)
		{
			$this->Conect();
			var_dump($Consulta);
			if ($Consulta) {

				$sql = "SELECT COUNT(*)  FROM  `jefeflia`	WHERE (	(`edad` >= ".$Consulta['edadIn']." AND  `edad` <=".$Consulta['edadF']."	)AND (`sexo` =  '".$Consulta['sexo']."'	AND  `pensionado` =  '".$Consulta['pensionado']."')	)AND (`incapacitado` =  '".$Consulta['incapacitado']."'	AND  `trabaja` =  '".$Consulta['trabaja']."')";
				echo $sql;				
				$Reporte = mysql_query($sql) or die ("Error 212 no se logró consultar");
				$respuesta = mysql_fetch_assoc($Reporte);
			}
			
			if($Consulta == 2){

				$query = "SELECT COUNT(*) FROM jefeflia WHERE status = 1";
				$final = mysql_query($query);


			}
			
			return $respuesta;
		}

public function totalcenso(){
	$this->Conect();
	$sql = "SELECT COUNT(*) FROM `jefeflia` WHERE  status =1 ";
	$sql2 = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  status =1 ";
	$var = mysql_query($sql);
	$var2 = mysql_query($sql2);

	 $respuest = mysql_fetch_assoc($var);
	 $respuest2 = mysql_fetch_assoc($var2);

	 $final = $respuest2["COUNT(*)"] + $respuest["COUNT(*)"];
	 return  $final	;
}
	public function GeneralReporte ()
		{
			$this->Conect();

			/* primer resultado */
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `sexo` = 'f'  and  status =1 ";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `sexo` = 'm'and  status =1 ";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `trabaja` = 'no'and  status =1 ";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `trabaja` = 'si'and  status =1 ";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `incapacitado` = 'si' and  status =1";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `incapacitado` = 'no'and  status =1 ";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `pensionado` = 'si'and  status =1 ";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `pensionado` = 'no'and  status =1 ";
				
				
			/*segudno resultado */
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `sexo` = 'f'and  status =1 ";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `sexo` = 'm'and  status =1 ";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE ((`ingreso_mensual` > 0 or `ingreso_mensual` <> NULL) and `pensionado` = 'no' )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE ((`ingreso_mensual` = 0 or `ingreso_mensual` = NULL) and `pensionado` = 'si' )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `incapacitado` = 'si'and  status =1 ";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `incapacitado` = 'no'and  status =1 ";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `pensionado` = 'si' and  status =1";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `pensionado` = 'no' and  status =1";

				foreach ($sql as $key => $respuesta) {
										
					$row[$key] = mysql_query($respuesta);
					$resultados[$key] = mysql_fetch_assoc($row[$key]);

				}

				foreach ($sql2 as $i => $res) {

					$row2[$i] = mysql_query($res);
					$resul[$i] = mysql_fetch_assoc($row2[$i]);
					
					$conteo[]	= $resultados[$i]["COUNT(*)"] + $resul[$i]["COUNT(*)"];
				}


				return $conteo;	
		}



	public function GeneralReportefecha ($edadIn = NULL, $edadF=NULL)
		{
			$this->Conect();

			/* primer resultado */
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `sexo` = 'f'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `sexo` = 'm'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `trabaja` = 'no'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `trabaja` = 'si'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `incapacitado` = 'si' and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `incapacitado` = 'no'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `pensionado` = 'si'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql[] = "SELECT COUNT(*) FROM `jefeflia` WHERE  `pensionado` = 'no'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				
				
			/*segudno resultado */
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `sexo` = 'f'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `sexo` = 'm'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE ((`ingreso_mensual` > 0 or `ingreso_mensual` <> NULL) and `pensionado` = 'no' )  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE ((`ingreso_mensual` = 0 or `ingreso_mensual` = NULL) and `pensionado` = 'si' )  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `incapacitado` = 'si'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `incapacitado` = 'no'and  status =1   and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `pensionado` = 'si' and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
				$sql2[] = "SELECT COUNT(*) FROM `grupo_fliar` WHERE  `pensionado` = 'no' and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";

				foreach ($sql as $key => $respuesta) {
										
					$row[$key] = mysql_query($respuesta);
					$resultados[$key] = mysql_fetch_assoc($row[$key]);

				}

				foreach ($sql2 as $i => $res) {

					$row2[$i] = mysql_query($res);
					$resul[$i] = mysql_fetch_assoc($row2[$i]);
					
					$conteo[]	= $resultados[$i]["COUNT(*)"] + $resul[$i]["COUNT(*)"];
				}


				return $conteo;	
		}


		/* metodo para consultar las bitacora segun censo */

	public function ConsultasBitacora($id = Null)
	{
		$this->Conect();
		$sql = "SELECT * FROM `bitacora` WHERE `idjefe_familia`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("503 No existen consultas");
	

		return $respuesta; //imprimirlo en la vista


	}


		/* metodo para consultar las bitacora segun censo */

	public function ConsultaUserBitacora($id = Null)
	{
		$this->Conect();

		$sql = "SELECT * FROM `usuario` WHERE `id_user`= '".$id."' ";

		$respuesta = mysql_query($sql) or die ("503 No existen consultas");
	
		$respuesta = mysql_fetch_assoc($respuesta);
		return $respuesta; //imprimirlo en la vista


	}



}


?>
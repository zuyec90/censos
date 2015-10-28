	

<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- inicio: HEAD -->
	<?php require_once('head.php'); ?>
	<!-- fin: HEAD -->
	<style type="text/css">
	.col-sm-3{
	width: 100%!important;
	}

	</style>
	<!-- inicio: BODY -->
	<body>
		<!-- inicio: HEADER -->
		<?php require_once('header.php'); 

		?>
		<?php

		include ('../controller/CensosController.php');

		$Jefe = new Censo;

		if (isset($_POST['idjefe_familia'])) {
			@$idjefe_familia = $_POST['idjefe_familia']; //@ para que no aparezca el error 'notice' variables indefinidas
			}elseif(isset($_GET['idjefe_familia'])) {
				@$idjefe_familia = $_GET['idjefe_familia']; //se hacen dos if. Si la variable viene por post o si viene por get
			}else{
				$idjefe_familia = null;
			} //No es necesario hacer dos procesos de if debido a que solo se necesita buscar el jefe para vincularlo con el familiar
			//echo "<br><br><br><br>".$idjefe_familia."<br><br><br><br>";
			$resultado = $Jefe->Selectjefe($idjefe_familia);
			//var_dump($resultado);
			$familiares = $Jefe->SelectFamiliar($idjefe_familia);
			$User = $Jefe->ConsultaUser();
		?>
		<script type="text/javascript"> 
			function revisar() {
				var nombre = document.getElementById("nombre").value;
				var destinatario = document.getElementById("apellido").value;
				var mensaje = document.getElementById("sexo").value;
					if(formulario.nombre == ""){ 
						alert('Debe ingresar el nombre'); 
						return;
					}
					if(formulario.apellido == ""){
						alert('Debes ingresar el apellido');
						return; 
					}
					if(formulario.sexo == ""){
						alert('Debes ingresar el sexo');
						return; 
					}
				document.getElementById("form").submit();
			} 
		</script>
		<!-- fin: HEADER -->
		<!-- inicio: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- inicio: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- inicio: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
					</div>
					<!-- fin: MAIN MENU TOGGLER BUTTON -->
					<!-- inicio: MAIN NAVIGATION MENU -->
					<?php require_once('menu.php'); ?>
					<!-- fin: MAIN NAVIGATION MENU -->
				</div>
				<!-- fin: SIDEBAR -->
			</div>
			<!-- inicio: PAGE -->
			<div class="main-content">
			<!-- inicio: BOOTSTRAP EXTED MODALS -->
				<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Escriba su mensaje</h4>
					</div>
					<form id="Formulario" name="form">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<label  for="name">Nombre: <?PHP echo $_SESSION['nombre']; ?></label>
									
									<input name="id_user" type="hidden" id="id_user" class="form-controlR"  value="<?PHP echo $_SESSION['id_user'];?>" placeholder="Nombre del emisor" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 30px;"/>
									<br>
									<label for="destinatario">Destinatario:</label>
									<select id="id_user_rece" name="id_user_rece" class="form-controlR" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 30px;">
										<option value="">Seleccione un Administrador</option>
										<?php while($users = mysql_fetch_assoc($User)) {?>
										<option value="<?php echo $users['id_user'];?>"><?php echo $users['nombre']. " ".$users['apellido'];?></option>
										<?php } ?>
									</select>
									<label for="mensaje">Mensaje:</label>
								</div>
								<div class="col-md-12">
									<textarea placeholder="Escriba aquí su mensaje" name="mensaje" id="mensaje" class="form-controlR" style="margin: 0px -0.5px 0px 0px; width: 600px; height: 80px;"></textarea>
									<div id="MostrarMsj">
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="modal-footer">
						<input type="button" value="Cancelar" data-dismiss="modal" class="btn btn-light-grey"></input>
						<a href="#" onclick="enviar()" class="btn btn-primary">Enviar</a>
					</div>
				</div>
				<div id="ajax-modal" class="modal fade" tabindex="-1" style="display: none;"></div>
					<!-- final: BOOTSTRAP EXTED MODALS -->
					<!-- inicio: PANEL CONFIGURATION MODAL FORM -->
					<div id="panel-config" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
						<form action="../lib/FamiliarRegistrar.php" method="post" role="form" onsubmit="return revisar()">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title">Nuevo Familiar</h3>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<h4>Ingrese los Datos</h4>
										<div class="form-group">
											<label class="col-sm-3 control-label" style=" margin-top: 12px; margin-left: 8px;">Nombres</label>
											<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese los Nombres" pattern="[a-z, A-Z]*" maxlength="30" title="Ingrese el nombre" required/>
											<input type="hidden" class="form-control" id="idjefe_familia" name="idjefe_familia" value="<?php echo $idjefe_familia;?>">
											<label class="col-sm-3 control-label" style=" margin-top: 12px; margin-left: 8px;">Apellidos</label>
											<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese los Apellidos" pattern="[a-z, A-Z]*" maxlength="30" title="Ingrese el Apellido" required/>
											<div>
												<label class="control-label" style=" margin-top: 12px; margin-left: 15px;">Sexo</label>
												<div>
													<label class="radio-inline"><input type="radio" class="grey" value="f" name="sexo" id="sexo" title="Seleccione el sexo" required/>Femenino</label>
													<label class="radio-inline"><input type="radio" class="grey" value="m" name="sexo"  id="sexo" title="Seleccione el sexo" required/>Masculino</label>
												</div>
											</div>
									
											<div>&nbsp;&nbsp; Cedúla:<br>
												<label class="radio-inline"><input type="radio" class="grey" value="V" name="nacionalidad" id="nacionalidad_V">V</label>
												<label class="radio-inline"><input type="radio" class="grey" value="E" name="nacionalidad"  id="nacionalidad_E">E</label>
											</div>
													<input type="text" class="form-control" name="cedula" id="cedula" placeholder="Nro de cedula" maxlength="8" pattern="[0-9]*">
												<label class="col-sm-3 control-label" style=" margin-top: 12px; margin-left: 5px;">Fecha Nacimiento</label>
													<input type="date" class="form-control" name="fecha_nacimiento" min="1920-01-02" title="Ingrese la fecha de nacimiento" required/><br>
												<label class="col-sm-3 control-label">Edad</label>
													<input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad" pattern="[0-9]*" maxlength="3" title="Ingrese la edad" required/>
											<label class="control-label" style=" margin-top: 12px; margin-left: 15px;">Discapacidad</label>
											<div>
												<label class="radio-inline">
													<input type="radio" class="grey" value="si" name="incapacitado" id="incapacitado" title="Favor seleccione" required/>si
												</label>
												<label class="radio-inline">
													<input type="radio" class="grey" value="no" name="incapacitado"  id="incapacitado" title="Favor seleccione" required/>no
												</label>
											</div>
											<input type="text" name="Tipo_incapacitado"  id="Tipo_incapacitado" class="form-control" placeholder="Tipo de Discapacidad ">
										</div>
									</div>
									<div class="col-md-6">
										<label class="control-label" style=" margin-top: 51px; margin-left: 15px;">Embarazo Temprano</label>
										<div>
											<label class="radio-inline">
												<input type="radio" class="grey" value="si" name="Embarazo_tempr" id="Embarazo_tempr_si" title="Favor Seleccione" required/>Si
											</label>
											<label class="radio-inline">
												<input type="radio" class="grey" value="no" name="Embarazo_tempr"  id="Embarazo_tempr_no" title="Favor Seleccione" required/>No
											</label>
										</div>
										<label class="col-sm-3 control-label">Parentesco</label>
										<input type="text" class="form-control" id="parentesco" name="parentesco" title="Favor Seleccione" placeholder="Parentesco con el Jefe de Familia" required/>
										<label class="col-sm-3 control-label" style=" margin-top: 12px; margin-left: 15px;">Nivel Instrucción</label>
										<div class="form-group">
											<div class="col-sm-3">
												<select class="form-control" id="nivel_instruccion" name="nivel_instruccion" requiered>
													<option value="">Grado de instrucción</option>
													<option value="Sin Instrucción">Sin Instrucción</option>
													<option value="Básica">Básica</option>
													<option value="Bachiller">Bachiller</option>
													<option value="Técnico Medio">Técnico Medio</option>
													<option value="Técnico Superior">Técnico Superior</option>
													<option value="Universitario">Universitario</option>
													<option value="Postgrado">Postgrado</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label" style=" margin-top: 12px; margin-left: 15px;">
											CNE
											</label>
											<div>
												<label class="radio-inline">
													<input type="radio" class="grey" value="si" name="cne" id="cne_si" title="Favor seleccione" required/>
													Si
												</label>
												<label class="radio-inline">
													<input type="radio" class="grey" value="no" name="cne"  id="cne_no" title="Favor Seleccione" required/>
													No
												</label>
											</div>
										</div>
										<label class="col-sm-3 control-label">Profesión</label>
										<input type="text" class="form-control" id="profesion" name="profesion" placeholder="Tipo de Profesion" pattern="[a-z, A-Z]*" maxlength="30"/>
										<div class="form-group">
											<label class="control-label" style=" margin-top: 12px; margin-left: 15px;">Pensionado</label>
											<div>
												<label class="radio-inline">
													<input type="radio" class="grey" value="si" name="pensionado" id="pensionado_si">Si
												</label>
												<label class="radio-inline">
													<input type="radio" class="grey" value="no" name="pensionado"  id="pensionado_no">No
												</label>
											</div>
										</div>
										<label class="col-sm-3 control-label">Ing. Mensual</label>
										<input type="text" class="form-control" id="ingreso_mensual" name="ingreso_mensual" placeholder="Ingreso Mensual">
										<label class="col-sm-3 control-label"><br>Observacion</br></label>
										<input type="text" class="form-control" id="observacion" name="observacion" placeholder="Observaciones">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
								<input type="submit" class="btn btn-success" name="enviar" value="Registrar">
							</div>
						</form>
					</div>
					<!-- /.modal -->
					<!-- fin: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- inicio: PAGE HEADER -->
						<div class="row">
							<div class="col-sm-12">				
								<!-- inicio: PAGE TITLE & BREADCRUMB -->
								<ol class="breadcrumb">
									<li><i class="clip-file"></i><a href="#">Consulta</a></li>
									<li class="active">Censo</li>
								</ol>
								<div class="page-header">
									<h2>Consulta</h2>
								</div>
								<!-- fin: PAGE TITLE & BREADCRUMB -->
							</div>
						</div>
						<!-- fin: PAGE HEADER -->
						<!-- inicio: PAGE CONTENT -->
						<?php /*
						@$_POST['valor'];
						if(!empty($_POST) and $_POST['valor'] < 2){
						if ($_POST['valor'] == '1' ) { ?>
							<div class="alert alert-block alert-danger fade in">
								<button data-dismiss="alert" class="close" type="button">&times;</button>
								<h4 class="alert-heading"><i class="fa fa-times-circle"></i></h4>
								<p>No se logro Realizar la Acción</p>
							</div>
							<?php
							}else{ ?>
								<div class="alert alert-success">
									<button data-dismiss="alert" class="close" type="button">&times;</button>
										<h4 class="alert-heading"><i class="fa fa-check-circle"></i></h4>
										<p>Se realizo la acción satisfatoriamente.</p>
								</div>									
							<?php	}
						}  */?>
						<div class="row">
							<div class="col-sm-12">
								<div class="tabbable">
									<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
										<li class="active"><a data-toggle="tab" href="#panel_overview">Jefe de Familia</a></li>
										<?php
											$familiares = $Jefe->SelectFamiliar($idjefe_familia);

										while ($familiar = mysql_fetch_assoc($familiares)) { ?>
										<li>
											<a data-toggle="tab" href="<?php echo "#panel_edit_account".$familiar['id_familiar']; ?>">
												<?php  echo	$familiar['nombre']; ?>
											</a>
										</li>
										<?php } ?>
										<li><a data-toggle="modal" href="#panel-config"> + </a></li>
									</ul>
									<div class="tab-content">
										<div id="panel_overview" class="tab-pane in active">
											<form name="JefeFamiliar" method="POST" action="../lib/CensoModificar.php">
												<div class="row">
													<div class="col-md-12">
														<h3>Jefe de Familia</h3>
														<hr>
													</div>
													<div class="col-sm-5 col-md-4">
														<div class="user-left">
															<table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3">Datos</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Nombres:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['nombres']; ?>" name="nombres" >
																			<input type="hidden" value="<?php echo $resultado['idjefe_familia']; ?>" name="idjefe_familia" >
																		</td>
																	</tr>
																	<tr>
																		<td>Apellidos:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['apellidos']; ?>" name="apellidos">
																		</td>
																	</tr>
																	<tr>
																		<td>Nacionalidad:</td>
																		<td>
																			<?php 
																			if ($resultado['nacionalidad'] == 'v') { ?>
																				<input type="radio" value="v"  checked="checked" name="nacionalidad">
																					V
																			<?php }else{ ?>
																				<input type="radio" value="v" name="nacionalidad">
																					V
																			<?php } ?>
																			<?php 
																			if ($resultado['nacionalidad'] == 'e') { ?>
																				<input type="radio" value="e"  checked="checked" name="nacionalidad">
																					E
																			<?php }else{ ?>
																					<input type="radio" value="e" name="nacionalidad">
																					E
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Cedula:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['cedula']; ?>" name="cedula" maxlength="8">
																		</td>
																	</tr>
																	<tr>
																		<td>Fecha de Nacimiento:</td>
																		<td>
																			<input type="date" class="form-control" value="<?php echo $resultado['fecha_nacimiento']; ?>" name="fecha_nacimiento">
																		</td>
																	</tr>
																	<tr>
																		<td>Edad:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['edad']; ?>" name="edad" maxlength="3">
																		</td>
																	</tr>
																	<tr>
																		<td>Sexo:</td>
																		<td>
																			<?php 
																				if ($resultado['sexo'] == 'f') { ?>
																				<input type="radio" value="f"  checked="checked" name="sexo">
																					F
																			<?php }else{ ?>
																				<input type="radio" value="f" name="sexo">
																					F
																			<?php } ?>
																			<?php 
																				if ($resultado['sexo'] == 'm') { ?>
																				<input type="radio" value="m"  checked="checked" name="sexo">
																					M
																			<?php }else{ ?>
																					<input type="radio" value="m" name="sexo">
																					M
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>CNE:</td>
																		<td>
																			<?php 
																				if ($resultado['cne'] == 'si') { ?>
																				<input type="radio" value="si"  checked="checked" name="cne">
																					Si
																			<?php }else{ ?>
																				<input type="radio" value="si" name="cne">
																					Si
																			<?php } ?>
																			<?php 
																				if ($resultado['cne'] == 'no') { ?>
																				<input type="radio" value="no"  checked="checked" name="cne">
																					No
																			<?php }else{ ?>
																				<input type="radio" value="no" name="cne">
																					No
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Tiempo en la Comunidad:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['tiempo_comunidad']; ?>" name="tiempo_comunidad">
																		</td>
																	</tr>
																	<tr>
																		<td>Incapacitado:</td>
																		<td>
																			<?php 
																			if ($resultado['incapacitado'] == 'si') { ?>
																				<input type="radio" value="si"  checked="checked" name="incapacitado">
																					Si
																			<?php }else{ ?>
																				<input type="radio" value="si" name="incapacitado">
																					Si
																			<?php } ?>
																			<?php 
																			if ($resultado['incapacitado'] == 'no') { ?>
																				<input type="radio" value="no"  checked="checked" name="incapacitado">
																					No
																			<?php }else{ ?>
																					<input type="radio" value="no" name="incapacitado">
																					No
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Tipo:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['tipo_incapacitado']; ?>" name="tipo_incapacitado">
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-sm-7 col-md-8">
														<div class="user-left">
															<table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3">Datos</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Pensionado:</td>
																		<td>
																			<?php 
																				if ($resultado['pensionado'] == 'si') { ?>
																					<input type="radio" value="si"  checked="checked" name="pensionado">
																					Si
																			<?php }else{ ?>
																					<input type="radio" value="si" name="pensionado">
																					Si
																			<?php } ?>
																			<?php 
																				if ($resultado['pensionado'] == 'no') { ?>
																				<input type="radio" value="no"  checked="checked" name="pensionado">
																					No
																			<?php }else{ ?>
																					<input type="radio" value="no" name="pensionado">
																					No
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Institución:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['institucion']; ?>" name="institucion">
																		</td>
																	</tr>
																	<tr>
																		<td>Tel. Cel.:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['telfcel']; ?>" name="telfcel" maxlength="10">
																		</td>
																	</tr>
																	<tr>
																		<td>Tel. Hab.:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['telfhab']; ?>" name="telfhab" maxlength="10">
																		</td>
																	</tr>
																	<tr>
																		<td>Tel. Ofic.:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['telfofic']; ?>" name="telfofic" maxlength="10">
																		</td>
																	</tr>
																	<tr>
																		<td>Email:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['email']; ?>" name="email">
																		</td>
																	</tr>
																	<tr>
																		<td>Estado Civil:</td>
																		<td>
																			<select class="form-control" id="estado_civil" name="estado_civil">
																				<option value="<?php echo $resultado['estado_civil']; ?>"><?php echo $resultado['estado_civil']; ?></option>
																				<option value="<?php echo $resultado['estado_civil']; ?>">soltero (a)</option>
																				<option value="<?php echo $resultado['estado_civil']; ?>">Casado (a)</option>
																				<option value="<?php echo $resultado['estado_civil']; ?>">Divorciado (a)</option>
																				<option value="<?php echo $resultado['estado_civil']; ?>">Viudo (a)</option>
																				<option value="<?php echo $resultado['estado_civil']; ?>">Concubinato (a)</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<td>Nivel de instrucción:</td>
																		<td>
																			<select class="form-control" id="nivel_instruccion" name="nivel_instruccion">
																				<option value="<?php echo $resultado['nivel_instruccion']; ?>"><?php echo $resultado['nivel_instruccion']; ?></option>
																				<option value="<?php echo $resultado['nivel_instruccion']; ?>">Sin Instrucción</option>
																				<option value="<?php echo $resultado['nivel_instruccion']; ?>">Básica</option>
																				<option value="<?php echo $resultado['nivel_instruccion']; ?>">Bachiller</option>
																				<option value="<?php echo $resultado['nivel_instruccion']; ?>">Técnico Medio</option>
																				<option value="<?php echo $resultado['nivel_instruccion']; ?>">Técnico Superior</option>
																				<option value="<?php echo $resultado['nivel_instruccion']; ?>">Universitario</option>
																				<option value="<?php echo $resultado['nivel_instruccion']; ?>">Postgrado</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<td>Profesión / Oficio:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['profesion']; ?>" name="profesion">
																		</td>
																	</tr>
																	<tr>
																		<td>Trabaja Actualmente:</td>
																		<td>
																			<?php 
																				if ($resultado['trabaja'] == 'si') { ?>
																					<input type="radio" value="si"  checked="checked" name="trabaja">
																						Si
																			<?php }else{ ?>
																					<input type="radio" value="si" name="trabaja">
																						Si
																			<?php } ?>
																			<?php 
																				if ($resultado['trabaja'] == 'no') { ?>
																					<input type="radio" value="no"  checked="checked" name="trabaja">
																						No
																			<?php }else{ ?>
																						<input type="radio" value="no" name="trabaja">
																						No
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Clasificación Ingreso Familiar:</td>
																		<td>
																			<select class="form-control" id="clasificacion_ingreso_familiar" name="clasificacion_ingreso_familiar">
																				<option value="<?php $resultado['clasificacion_ingreso_familiar']?>"><?php echo $resultado['clasificacion_ingreso_familiar'];?></option>
																				<option value="Diario" >Diario</option>
																				<option value="Semanal" >Semanal</option>
																				<option value="Quincenal" >Quincenal</option>
																				<option value="Mensual" >Mensual</option>
																				<option value="Por Trabajo Realizado" >Por Trabajo Realizado</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<td>Ingreso Mensual:</td>
																		<td>
																			<input type="text" value="<?php echo $resultado['ingreso_mensual']; ?>" name="ingreso_mensual">
																		</td>
																	</tr>
																</tbody>
															</table>
															<div class="form-group">
																<?php
																//echo $resultado['fecha_creacion'];
																$tiempo = $Jefe->ValidacionTiempo($resultado['fecha_creacion']);
																
														   		if ($tiempo == 0 or $_SESSION["perfil"] == 1) { ?>
																<div class="col-sm-4 ">
																	<input type="submit" value="Modificar" class="btn btn-yellow btn-block"  style ="margin-top: 25px; ">
																</div>
																<?php	}else{ ?>
																<div class="col-sm-4 ">
																	<a href="#responsive" data-toggle="modal"   class="btn btn-yellow btn-block"  style ="margin-top: 25px; ">
																		Solicitar Modificacion
																	</a>
																</div>
																<?php } ?>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
										<?php
										
										if(!empty($_POST) and $_POST['valor'] < 2 ){
											if ($_POST['valor'] == '1' ) { ?>
											<div class="alert alert-success">
												<button data-dismiss="alert" class="close" type="button">&times;</button>
												<h4 class="alert-heading"><i class="fa fa-check-circle"></i></h4>
												<p>Se ejecuto la accion satisfatoriamente.a</p>
											</div>
										<?php
										}else{ ?>
											<div class="alert alert-block alert-danger fade in">
												<button data-dismiss="alert" class="close" type="button">&times;</button>
												<h4 class="alert-heading"><i class="fa fa-times-circle"></i></h4>
												<p>No se logro Modificar</p>
											</div>
										<?php	}
										} ?>
										<?php
											$datosfamiliares = $Jefe->SelectFamiliar($idjefe_familia);

										 while ($datofamiliar = mysql_fetch_assoc($datosfamiliares)) { ?>

										<div id="<?php echo "panel_edit_account".$datofamiliar['id_familiar']; ?>" class="tab-pane">
											<form action="../lib/CensoModificar.php" method="POST" role="form" id="form">
												<div class="row">
													<div class="col-md-12">
														<h3>Familiar</h3>
														<hr>
													</div>
													<div class="col-sm-7 col-md-8">
														<div class="user-left">
															<table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3">Familiar</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Nombres:</td>
																		<td>
																			<input type="text" value="<?php echo $datofamiliar['nombre']; ?>" name="nombre">
																			<input type="hidden" value="<?php echo $datofamiliar['id_familiar']; ?>" name="id_familiar" >
																			<input type="hidden" value="<?php echo $idjefe_familia; ?>" name="idjefe_familia" >
																			
																		</td>
																	</tr>
																	<tr>
																		<td>Apellidos:</td>
																		<td>
																			<input type="text" value="<?php echo $datofamiliar['apellido']; ?>" name="apellido">
																		</td>
																	</tr>
																	<tr>
																		<td>Edad:</td>
																		<td>
																			<input type="text" value="<?php echo $datofamiliar['edad']; ?>" name="edad">
																		</td>
																	</tr>
																	<tr>
																		<td>Sexo</td>
																		<td>
																			<?php 
																			if ($datofamiliar['sexo'] == 'f') { ?>
																				<input type="radio" value="f"  checked="checked" name="sexo">
																				F
																			<?php }else{ ?>
																				<input type="radio" value="f" name="sexo">
																				F
																			<?php } ?>
																			<?php 
																			if ($datofamiliar['sexo'] == 'm') { ?>
																				<input type="radio" value="m"  checked="checked" name="sexo">
																				M
																			<?php }else{ ?>
																				<input type="radio" value="m" name="sexo">
																				M
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Cedúla:</td>
																		<td>
																			<?php 
																			if ($datofamiliar['nacionalidad'] == 'V') { ?>
																				<input type="radio" value="V"  checked="checked" name="nacionalidad">
																				V
																			<?php }else{ ?>
																				<input type="radio" value="V" name="nacionalidad">
																				V
																			<?php } ?>
																			<?php 
																			if ($datofamiliar['nacionalidad'] == 'E') { ?>
																				<input type="radio" value="E"  checked="checked" name="nacionalidad">
																				E
																			<?php }else{ ?>
																				<input type="radio" value="E" name="nacionalidad">
																				E
																			<?php } ?>
																				<input type="text" value="<?php echo $datofamiliar['cedula']; ?>" name="cedula">
																		</td>
																	</tr>
																	<tr>
																		<td>Fecha Nacimiento:</td>
																		<td>
																			<input type="date"class="form-control" value="<?php echo $datofamiliar['fecha_nacimiento']; ?>" name="fecha_nacimiento" min="1920-01-02" tabindex="5">
																		</td>
																	</tr>
																	<tr>
																		<td>Personas/ Discapacidad Tipo:</td>
																		<td>
																			<?php 
																			if ($datofamiliar['incapacitado'] == 'si') { ?>
																				<input type="radio" value="si"  checked="checked" name="incapacitado">
																				Si
																			<?php }else{ ?>
																				<input type="radio" value="si" name="incapacitado">
																				Si
																			<?php } ?>
																			<?php 
																				if ($datofamiliar['incapacitado'] == 'no') { ?>
																					<input type="radio" value="no"  checked="checked" name="incapacitado">
																				No
																			<?php }else{ ?>
																				<input type="radio" value="no" name="incapacitado">
																				No
																			<?php } ?>
																				<input type="text" value="<?php echo $datofamiliar['Tipo_incapacitado']; ?>" name="Tipo_incapacitado">
																		</td>
																	</tr>
																	<tr>
																		<td>Embarazo temprano:</td>
																		<td>
																			<?php 
																			if ($datofamiliar['Embarazo_tempr'] == 'si') { ?>
																				<input type="radio" value="si"  checked="checked" name="Embarazo_tempr">
																				Si
																			<?php }else{ ?>
																				<input type="radio" value="si" name="Embarazo_tempr">
																				Si
																			<?php } ?>
																			<?php 
																				if ($datofamiliar['Embarazo_tempr'] == 'no') { ?>
																					<input type="radio" value="no"  checked="checked" name="Embarazo_tempr">
																				No
																			<?php }else{ ?>
																				<input type="radio" value="no" name="Embarazo_tempr">
																				No
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Parentesco:</td>
																		<td>
																			<input type="text" value="<?php echo $datofamiliar['parentesco']; ?>" name="parentesco">
																		</td>
																	</tr>
																	<tr>
																		<td>Grado de Instrucción:</td>
																		<td>
																			<select class="form-control" id="nivel_instruccion" name="nivel_instruccion">
																				<option value="<?php $datofamiliar['nivel_instruccion'] ?>"><?php echo $datofamiliar['nivel_instruccion'];?></option>
																				<option value=" Sin Instrucción">Sin Instrucción</option>
																				<option value=" Básica">Básica</option>
																				<option value=" Bachiller">Bachiller</option>
																				<option value=" Técnico Medio">Técnico Medio</option>
																				<option value=" Técnico Superior">Técnico Superior</option>
																				<option value=" Universitario">Universitario</option>
																				<option value=" Postgrado">Postgrado</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<td>CNE:</td>
																		<td>
																			<?php 
																			if ($datofamiliar['cne'] == 'si') { ?>
																				<input type="radio" value="si"  checked="checked" name="cne">
																				Si
																			<?php }else{ ?>
																				<input type="radio" value="si" name="cne">
																				Si
																			<?php } ?>
																			<?php 
																				if ($datofamiliar['cne'] == 'no') { ?>
																					<input type="radio" value="no"  checked="checked" name="cne">
																				No
																			<?php }else{ ?>
																				<input type="radio" value="no" name="cne">
																				No
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Profesión:</td>
																		<td>
																			<input type="text" value="<?php echo $datofamiliar['profesion']; ?>" name="profesion">
																		</td>
																	</tr>
																	<tr>
																		<td>Pensionado:</td>
																		<td>
																			<?php 
																			if ($datofamiliar['pensionado'] == 'si') { ?>
																				<input type="radio" value="si"  checked="checked" name="pensionado">
																				Si
																			<?php }else{ ?>
																				<input type="radio" value="si" name="pensionado">
																				Si
																			<?php } ?>
																			<?php 
																				if ($datofamiliar['pensionado'] == 'no') { ?>
																					<input type="radio" value="no"  checked="checked" name="pensionado">
																				No
																			<?php }else{ ?>
																				<input type="radio" value="no" name="pensionado">
																				No
																			<?php } ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Ing. Mensual:</td>
																		<td>
																			<input type="text" value="<?php echo $datofamiliar['ingreso_mensual']; ?>" name="ingreso_mensual">
																		</td>
																	</tr>
																	<tr>
																		<td>Observación:</td>
																		<td>
																			<input type="text" value="<?php echo $datofamiliar['observacion']; ?>" name="observacion">
																		</td>
																	</tr>
																</tbody>
															</table>
															<?php
															$tiempo = $Jefe->ValidacionTiempo($idjefe_familia);
															if ($tiempo != 1 or $_SESSION["perfil"] == 1) { ?>
															<div class="col-sm-4 col-sm-offset-4">
																<input type="submit" value="Modificar" class="btn btn-yellow btn-block "  style ="margin-top: 25px; ">
															</div>
															<?php	}else{ ?>
															<div class="col-sm-4 col-sm-offset-4">
																<a href="#responsive" data-toggle="modal"   class="btn btn-yellow btn-block "  style ="margin-top: 25px; ">
																	Solicitar Modificacion
																</a>
															</div>
															<?php } ?>
														</div>
													</div>
												</div>
											</form>
										</div>
										<?php  } ?>
										<div id="panel_projects" class="tab-pane">
											<form action="#" role="form" id="form">
												<div class="row">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- fin: PAGE CONTENT-->
					</div>
				</div>
				<!-- fin: PAGE -->
			</div>
		<!-- fin: MAIN CONTAINER -->
		<!-- inicio: FOOTER -->
		<?php require_once('footer.php'); ?>
		<!-- fin: FOOTER -->
		<!-- inicio: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="plugins/respond.min.js"></script>
		<script src="plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="../../plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="../../plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="../../plugins/blockUI/jquery.blockUI.js"></script>
		<script src="../../plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="../../plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="../../plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="../../plugins/less/less-1.5.0.min.js"></script>
		<script src="../../plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="../../plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="../../js/main.js"></script>
		<!-- fin: MAIN JAVASCRIPTS -->
		<!-- inicio: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="../../plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="../../plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="../../js/pages-user-profile.js"></script>
		<script src="../../js/ui-modals.js"></script>
		<script src="../../plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="../../plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>

		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				PagesUserProfile.init();
				UIModals.init();
			});

			function enviar() {

			var id_user_rece = $('#id_user_rece').val();
			var id_user = $('#id_user').val();
			var mensaje = $('#mensaje').val();
			var ajax = 'si';
			$('.form-controlR').hide();
			var url = '../lib/MensajeCrear.php';
			$.post(url,{'id_user_rece':id_user_rece,'id_user':id_user,'mensaje':mensaje,'ajax':ajax},function(respondText){
				$('#MostrarMsj').html(respondText);

			});

			}

		</script>
	</body>
	<!-- fin: BODY -->
</html>
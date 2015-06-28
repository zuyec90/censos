<?php

include ('../Controller/CensosController.php');

$Jefe = new Censo;

	if (isset($_POST['idjefe_familia'])) {
		echo "string1";
			@$idjefe_familia = $_POST['idjefe_familia'];
		}elseif(isset($_GET['idjefe_familia'])) {
			echo "string";
			@$idjefe_familia = $_GET['idjefe_familia'];
		}else{
			$idjefe_familia = null;
		}

	//echo "<br><br><br><br>".$idjefe_familia."<br><br><br><br>";
	$resultado = $Jefe->Selectjefe($idjefe_familia);
//var_dump($resultado);
	$familiares = $Jefe->SelectFamiliar($idjefe_familia);

?>


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
		<?php require_once('header.php'); ?>
		<!-- fin: HEADER -->
		<!-- inicio: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- inicio: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- inicio: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
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
				<!-- inicio: PANEL CONFIGURATION MODAL FORM -->
		<div id="panel-config" class="modal fade" tabindex="-1" data-width="760" style="display: none;">

	 	<form action="../lib/FamiliarRegistrar.php" method="post" role="form" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h3 class="modal-title">Nuevo Familiar</h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<h4>Ingrese los Datos</h4>
						<div class="form-group">
							<label class="col-sm-3 control-label" style=" margin-top: 12px; margin-left: 8px;">
									Nombres
							</label>
									<input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
									<input type="hidden" class="form-control" id="idjefe_familia" name="idjefe_familia" value="<?php echo $idjefe_familia;?>">
							<label class="col-sm-3 control-label" style=" margin-top: 12px; margin-left: 8px;">
									Apellidos
							</label>
									<input type="text" class="form-control" id="apellido" name="apellido" placeholder="">
							<div>
							<label class="control-label" style=" margin-top: 12px; margin-left: 15px;">
								Sexo
							</label>
								<div>
									<label class="radio-inline">
									<input type="radio" class="grey" value="f" name="sexo" id="sexo_f">
										Femenino
									</label>
									<label class="radio-inline">
										<input type="radio" class="grey" value="m" name="sexo"  id="sexo_m">
										 Masculino
									</label>
								</div>
							</div>
							<label class="control-label"  style=" margin-top: 12px; margin-left: 15px;">
								Cedula
							</label>
							<div>
								<label class="radio-inline">
									<input type="radio" class="grey" value="V" name="nacionalidad" id="nacionalidad_V">
									V
								</label>
								<label class="radio-inline">
									<input type="radio" class="grey" value="E" name="nacionalidad"  id="nacionalidad_E">
									E
								</label>
							</div>
							<input type="text" class="form-control" name="cedula" id="cedula" placeholder="" maxlength="8">

							<label class="col-sm-3 control-label" style=" margin-top: 12px; margin-left: 5px;">
									Fecha Nacimiento
							</label>
								<input type="date" class="form-control" name="fecha_nacimiento" min="2000-01-02"><br>
							<label class="col-sm-3 control-label">
									Edad
							</label>
							<input type="text" class="form-control" id="edad" name="edad" placeholder="">
							<label class="control-label" style=" margin-top: 12px; margin-left: 15px;">
								Discapacidad
							</label>
								<div>
									<label class="radio-inline">
									<input type="radio" class="grey" value="si" name="incapacitado" id="incapacitado">
										si
									</label>
									<label class="radio-inline">
										<input type="radio" class="grey" value="no" name="incapacitado"  id="incapacitado">
										 no
									</label>
								</div>
							<label class="col-sm-3 control-label">
									Discapacidad/ Tipo
							</label>
							<input type="text" class="form-control" id="Tipo_incapacitado" name="Tipo_incapacitado" placeholder="">

						</div>
					</div>
					<div class="col-md-6">
							<label class="control-label" style=" margin-top: 51px; margin-left: 15px;">
									Embarazo Temprano
							</label>
							<div>
								<label class="radio-inline">
									<input type="radio" class="grey" value="si" name="Embarazo_tempr" id="Embarazo_tempr_si">
										Si
								</label>
								<label class="radio-inline">
									<input type="radio" class="grey" value="no" name="Embarazo_tempr"  id="Embarazo_tempr_no">
										No
								</label>
							</div>

							<label class="col-sm-3 control-label">
									Parentesco
							</label>
									<input type="text" class="form-control" id="parentesco" name="parentesco" placeholder="">
							<label class="col-sm-3 control-label" style=" margin-top: 12px; margin-left: 15px;">
									Grado Instrucción
							</label>
								<input type="text" class="form-control" id="nivel_instruccion" name="nivel_instruccion" placeholder="">
							<div class="form-group">
								<label class="control-label" style=" margin-top: 12px; margin-left: 15px;">
								CNE
								</label>
								<div>
									<label class="radio-inline">
										<input type="radio" class="grey" value="si" name="cne" id="cne_si">
										Si
									</label>
									<label class="radio-inline">
										<input type="radio" class="grey" value="no" name="cne"  id="cne_no">
										No
									</label>
								</div>
							</div>
							<label class="col-sm-3 control-label">
									Profesión
							</label>
							<input type="text" class="form-control" id="profesion" name="profesion" placeholder="">
							<div class="form-group">
								<label class="control-label" style=" margin-top: 12px; margin-left: 15px;">
										Pensionado
								</label>
								<div>
									<label class="radio-inline">
										<input type="radio" class="grey" value="si" name="pensionado" id="pensionado_si">
											Si
									</label>
									<label class="radio-inline">
										<input type="radio" class="grey" value="no" name="pensionado"  id="pensionado_no">
											No
									</label>
								</div>
							</div>
							<label class="col-sm-3 control-label">
								Ing. Mensual
							</label>
								<input type="text" class="form-control" id="ingreso_mensual" name="ingreso_mensual" placeholder="">
							<label class="col-sm-3 control-label">
								Observacion
							</label>
								<input type="text" class="form-control" id="observacion" name="observacion" placeholder="">
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-danger">
					Cancelar
				</button>
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
							<!-- inicio: STYLE SELECTOR BOX -->
							<div id="style_selector" class="hidden-xs">
								<div id="style_selector_container">
									<div class="style-main-title">
										Style Selector
									</div>
									<div class="box-title">
										Choose Your Layout Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="layout">
												<option value="default">Wide</option><option value="boxed">Boxed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Header Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="header">
												<option value="fixed">Fixed</option><option value="default">Default</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Footer Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="footer">
												<option value="default">Default</option><option value="fixed">Fixed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Backgrounds for Boxed Version
									</div>
									<div class="images boxed-patterns">
										<a id="bg_style_1" href="#"><img alt="" src="../../images/bg.png"></a>
										<a id="bg_style_2" href="#"><img alt="" src="../../images/bg_2.png"></a>
										<a id="bg_style_3" href="#"><img alt="" src="../../images/bg_3.png"></a>
										<a id="bg_style_4" href="#"><img alt="" src="../../images/bg_4.png"></a>
										<a id="bg_style_5" href="#"><img alt="" src="../../images/bg_5.png"></a>
									</div>
									<div class="box-title">
										5 Predefined Color Schemes
									</div>
									<div class="images icons-color">
										<a id="light" href="#"><img class="active" alt="" src="../../images/lightgrey.png"></a>
										<a id="dark" href="#"><img alt="" src="../../images/darkgrey.png"></a>
										<a id="black_and_white" href="#"><img alt="" src="../../images/blackandwhite.png"></a>
										<a id="navy" href="#"><img alt="" src="../../images/navy.png"></a>
										<a id="green" href="#"><img alt="" src="../../images/green.png"></a>
									</div>
									<div class="box-title">
										Style it with LESS
									</div>
									<div class="images">
										<div class="form-group">
											<label>
												Basic
											</label>
											<input type="text" value="#ffffff" class="color-base">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #ffffff"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Text
											</label>
											<input type="text" value="#555555" class="color-text">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #555555"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Elements
											</label>
											<input type="text" value="#007AFF" class="color-badge">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #007AFF"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div style="height:25px;line-height:25px; text-align: center">
										<a class="clear_style" href="#">
											Clear Styles
										</a>
										<a class="save_style" href="#">
											Save Styles
										</a>
									</div>
								</div>
								<div class="style-toggle close"></div>
							</div>
							<!-- fin: STYLE SELECTOR BOX -->
							<!-- inicio: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-file"></i>
									<a href="#">
										Consulta
									</a>
								</li>
								<li class="active">
									Censo
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Consulta</h1>
							</div>
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!-- inicio: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_overview">
											Jefe de Familia
										</a>
									</li>
									<?PHP
										$familiares = $Jefe->SelectFamiliar($idjefe_familia);

									while ($familiar = mysql_fetch_assoc($familiares)) { ?>
									<li>
										<a data-toggle="tab" href="<?php echo "#panel_edit_account".$familiar['id_familiar']; ?>">
									<?php  echo	$familiar['nombre']; ?>
										</a>
									</li>
									<?php } ?>

									<li>
										<a data-toggle="modal" href="#panel-config">
											+
										</a>
									</li>
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
																	<input type="text" value="<?php echo $resultado['nacionalidad']; ?>" name="nacionalidad">

																</td>
															</tr>
															<tr>
																<td>Cedula:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['cedula']; ?>" name="cedula">

																</td>
															</tr>
															<tr>
																<td>Fecha de Nacimiento:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['fecha_nacimiento']; ?>" name="fecha_nacimiento">

																</td>
															</tr>

															<tr>
																<td>Edad:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['edad']; ?>" name="edad">

																</td>
															</tr>
															<tr>
																<td>Sexo:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['sexo']; ?>" name="sexo">

																</td>
															</tr>
															<tr>
																<td>CNE:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['cne']; ?>" name="cne">

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
																	<input type="text" value="<?php echo $resultado['incapacitado']; ?>" name="incapacitado">

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
																<input type="text" value="<?php echo $resultado['pensionado']; ?>" name="pensionado">

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
																	<input type="text" value="<?php echo $resultado['telfcel']; ?>" name="telfcel">

																</td>
															</tr>
															<tr>
																<td>Tel. Hab.:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['telfhab']; ?>" name="telfhab">

																</td>
															</tr>
															<tr>
																<td>Tel. Ofic.:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['telfofic']; ?>" name="telfofic">

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
																	<input type="text" value="<?php echo $resultado['estado_civil']; ?>" name="estado_civil">

																</td>
															</tr>
															<tr>
																<td>Nivel de instrucción:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['nivel_instruccion']; ?>" name="nivel_instruccion">

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
																	<input type="text" value="<?php echo $resultado['trabaja']; ?>" name="trabaja">

																</td>
															</tr>
															<tr>
																<td>Clasificación Ingreso Familiar:</td>
																<td>
																	<input type="text" value="<?php echo $resultado['clasificacion_ingreso_familiar']; ?>" name="clasificacion_ingreso_familiar">

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
													<div class="col-sm-2 col-sm-offset-8">
														<input type="submit" value="Modificar" class="btn btn-success finish-step btn-block"  style ="margin-top: 25px; ">
														<?php
															@$_POST['valor'];
															if(!empty($_POST)){
															if ($_POST['valor'] == '1' ) { ?>
																<div class="alert alert-success">
																	<button data-dismiss="alert" class="close" type="button">&times;</button>
																	<h4 class="alert-heading"><i class="fa fa-check-circle"></i></h4>
																	<p>Modificación realizada satisfatoriamente.</p>
																</div>
															<?php}
															else{ ?>
																<div class="alert alert-block alert-danger fade in">
																	<button data-dismiss="alert" class="close" type="button">&times;</button>
																	<h4 class="alert-heading"><i class="fa fa-times-circle"></i></h4>
																	<p>No se logro Modificar</p>
																</div>
															<?php	}
															} ?>
													</div>
												</div>
												</div>
											</div>
										</div>
										</form>
									</div>

									<?PHP
										$datosfamiliares = $Jefe->SelectFamiliar($idjefe_familia);

									 while ($datofamiliar = mysql_fetch_assoc($datosfamiliares)) { ?>

									<div id="<?php echo "panel_edit_account".$datofamiliar['id_familiar']; ?>" class="tab-pane">
										<form action="#" role="form" id="form">
											<div class="row">
												<div class="col-md-12">
													<h3>Familiar</h3>
													<hr>
												</div>
													<div class="col-sm-5 col-md-4">
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

																			</td>
																		</tr>
																		<tr>
																			<td>Apellidos:</td>
																			<td>
																				<input type="text" value="<?php echo $datofamiliar['apellido']; ?>" name="apellido">

																			</td>
																		</tr>
																		<tr>
																			<td>Sexo</td>
																			<td>
																				<input type="text" value="<?php echo $datofamiliar['sexo']; ?>" name="sexo">

																			</td>
																		</tr>
																		<tr>
																			<td>Cedúla:</td>
																			<td>
																				<input type="text" value="<?php echo $datofamiliar['cedula']; ?>" name="cedula">

																			</td>
																		</tr>
																		<tr>
																			<td>Fecha Nacimiento:</td>
																			<td>
																				<input type="text" value="<?php echo $datofamiliar['fecha_nacimiento']; ?>" name="fecha_nacimiento">

																			</td>
																		</tr>
																		<tr>
																			<td>Personas/ Discapacidad Tipo:</td>
																			<td>
																				<input type="text" value="<?php echo $datofamiliar['incapacitado']; ?>" name="incapacitado">

																			</td>
																		</tr>
																		<tr>
																			<td>Embarazo temprano:</td>
																			<td>
																				<input type="text" value="<?php echo $datofamiliar['Embarazo_tempr']; ?>" name="Embarazo_tempr">

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
																				<input type="text" value="<?php echo $datofamiliar['nivel_instruccion']; ?>" name="nivel_instruccion">

																			</td>
																		</tr>
																		<tr>
																			<td>CNE:</td>
																			<td>
																				<input type="text" value="<?php echo $datofamiliar['cne']; ?>" name="cne">

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
																				<input type="text" value="<?php echo $datofamiliar['pensionado']; ?>" name="pensionado">

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
																<div class="form-group">
																	<div class="col-sm-2 col-sm-offset-8">
																		<button class="btn btn-success finish-step btn-block">
																		Modificar <i class="fa fa-arrow-circle-right"></i>
																		</button>
																			<?php
																				@$_POST['valor'];
																				if(!empty($_POST)){
																				if ($_POST['valor'] == '1' ) { ?>
																	<div class="alert alert-success">
																		<button data-dismiss="alert" class="close" type="button">&times;</button>
																		<h4 class="alert-heading"><i class="fa fa-check-circle"></i></h4>
																		<p>Modificación realizada satisfatoriamente.</p>
																	</div>
																			<?php}
																		else{ ?>
																	<div class="alert alert-block alert-danger fade in">
																		<button data-dismiss="alert" class="close" type="button">&times;</button>
																		<h4 class="alert-heading"><i class="fa fa-times-circle"></i></h4>
																		<p>No se logro Modificar</p>
																	</div>
																			<?php	}
																			} ?>
																	</div>
																</div>
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
		</script>
	</body>
	<!-- fin: BODY -->
</html>
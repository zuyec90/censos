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
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- fin: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- inicio: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- inicio: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-pencil"></i>
									<a href="#">
										Datos
									</a>
								</li>
								<li class="active">
									Jefe de Familia
								</li>

							</ol>
							<div class="page-header">
								<h1>Datos <small>Jefe de Familia</small></h1>
							</div>
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!-- inicio: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<!-- inicio: FORM WIZARD PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Datos Personales del Jefe del Grupo Familiar

								</div>
								<div class="panel-body">
									<form action="../lib/JefeRegistrar.php" method="post" role="form" class="smart-wizard form-horizontal" id="form">
										<div id="wizard" class="swMain">
											<ul>
												<li>
													<a href="#step-1">
														<div class="stepNumber">
															1
														</div>
														<span class="stepDesc"> Paso 1
															<br />
															<small>1</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-2">
														<div class="stepNumber">
															2
														</div>
														<span class="stepDesc"> Paso 2
															<br />
															<small>2</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-3">
														<div class="stepNumber">
															3
														</div>
														<span class="stepDesc"> Paso 3
															<br />
															<small>3</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-4">
														<div class="stepNumber">
															4
														</div>
														<span class="stepDesc"> Paso 4
															<br />
															<small>4</small> </span>
													</a>
												</li>
											</ul>
											<div class="progress progress-striped active progress-sm">
												<div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar progress-bar-success step-bar">
													<span class="sr-only"> 0% Complete (success)</span>
												</div>
											</div>
											<div id="step-1">
												<h2 class="StepTitle">Paso 1 </h2>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nombres <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Apellidos <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="apellido" name="apellido" placeholder="">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Cedúla <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="v" name="nacionalidad" id="nacionalidad" >
															V
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="E" name="nacionalidad"  id="nacionalidad">
															E
														</label>
														<div class="col-sm-4">
																<input type="text" class="form-control" name="cedula" id="cedula" placeholder="" maxlength="8">
														</div>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Fecha de Nacimiento <span class="symbol required"></span>
													</label>

													<div class="col-sm-4">
														<div class="row">
															<div class="col-sm-4">
																<select class="form-control" id="fecha_d" name="fecha_d">
																	<option value="">DD</option>
																	<?php
																		for ($i=1; $i < 32 ; $i++) {
																			echo "<option value=".$i.">".$i."</option>";
																		}

																	?>
																</select>
															</div>
															<div class="col-sm-4">
																<select class="form-control" id="fecha_m" name="fecha_m">
																	<option value="">MM</option>
																	<?php
																		for ($i=1; $i < 13 ; $i++) {
																			echo "<option value=".$i.">".$i."</option>";
																		}

																	?>
																</select>
															</div>
															<div class="col-sm-4">
																<select class="form-control" id="fecha_a" name="fecha_a">
																	<option value="">AAAA</option>
																	<?php
																		for ($i=1910; $i < 2016 ; $i++) {
																			echo "<option value=".$i.">".$i."</option>";
																		}

																	?>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Edad <span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="edad" id="edad" placeholder="" maxlength="3">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Sexo <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="f" name="sexo" id="sexo" >
															Femenino
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="sexo"  id="sexo">
															Masculino
														</label>
													</div>
												</div>

												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															Siguiente <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
											<div id="step-2">
												<h2 class="StepTitle">Paso 2</h2>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														CNE <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="si" name="cne" id="cne" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="no" name="cne"  id="cne">
															No
														</label>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tiempo en la Comunidad <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="float-left margin-select" name="tiempo_comunidad" id="tiempo_comunidad" placeholder="" maxlength="6">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Incapacitado <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="si" name="incapacitado" id="incapacitado" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="no" name="incapacitado"  id="incapacitado">
															No
														</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tipo
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="tipo_incapacitado" id="tipo_incapacitado" placeholder="">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Pensionado <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="si" name="pensionado" id="pensionado" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="no" name="pensionado"  id="pensionado">
															No
														</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Institución<span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="institucion" id="institucion" placeholder="">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Cel. <span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="telfcel" id="telfcel" placeholder="" maxlength="11">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Hab. <span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="telfhab" id="telfhab" placeholder="" maxlength="11">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Ofic. <span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="telfofic" id="telfofic" placeholder="" maxlength="11">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Email <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="email" class="float-left margin-select" id="email" name="email" placeholder="nombre@ejemplo.com">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-light-grey back-step btn-block">
															<i class="fa fa-circle-arrow-left"></i> Atrás
														</button>
													</div>
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-blue next-step btn-block">
															Siguiente <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
											<div id="step-3">
												<h2 class="StepTitle">Paso 3</h2>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Estado Civil <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<select class="form-control" id="estado_civil" name="estado_civil">
															<option value="">&nbsp;</option>
															<option value="soltero (a)">soltero (a)</option>
															<option value="Casado (a)">Casado (a)</option>
															<option value="Divorciado (a)">Divorciado (a)</option>
															<option value="Viudo (a)">Viudo (a)</option>
															<option value="Concubinato (a)">Concubinato (a)</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nivel de Instrucción <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<select class="form-control" id="nivel_instruccion" name="nivel_instruccion">
															<option value="">&nbsp;</option>
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
													<label class="col-sm-3 control-label">
														Profesión /Oficio <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="profesion" name="profesion" placeholder="Indique a que se dedica">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Trabaja Actualmente <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="si" name="trabaja" id="trabaja" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="no" name="trabaja"  id="trabaja">
															No
														</label>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Clasificación Ingreso Familiar <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<select class="form-control" id="clasificacion_ingreso_familiar" name="clasificacion_ingreso_familiar">
															<option value="">&nbsp;</option>
															<option value="Diario">Diario</option>
															<option value="Semanal">Semanal</option>
															<option value="Quincenal">Quincenal</option>
															<option value="Mensual">Mensual</option>
															<option value="Por Trabajo Realizado">Por Trabajo Realizado</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Ingreso Mensual <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="float-left margin-select" id="ingreso_mensual" name="ingreso_mensual" placeholder="" maxlength="6">
													</div>
												</div>

												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-light-grey back-step btn-block">
															<i class="fa fa-circle-arrow-left"></i> Atrás
														</button>
													</div>
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-success next-step btn-block">
															Registrar <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
											<div id="step-4">
												<h2 class="StepTitle">Paso 4</h2>
												<h3>Datos</h3>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nombre:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="nombre"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Apellido
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="apellido"></p>
													</div>
												</div>
												<h3>Perfil</h3>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Cedúla:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="nacionalidad" ></p> <p class="form-control-static display-value" data-display="cedula" ></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Fecha de Nacimiento:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="fecha_d"></p> <p class="form-control-static display-value" data-display="fecha_m"></p> <p class="form-control-static display-value" data-display="fecha_a"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Edad:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="edad"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Sexo:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="sexo"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														CNE:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="cne"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tiempo en la Comunidad:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="tiempo_comunidad"></p>
													</div>
												</div>
												<h3>Características</h3>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Incapacitado:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="incapacitado"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tipo de Discapacidad:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="tipo_incapacitado"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Pensionado:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="pensionado"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Institución:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="institucion"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Cel:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="telfcel"></p>
													</div>
												</div><div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Hab.:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="telfhab"></p>
													</div>
												</div><div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Ofic.:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="telfofic"></p>
													</div>
												</div><div class="form-group">
													<label class="col-sm-3 control-label">
														Email:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="email"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Estado Civil:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="estado_civil"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nivel de Instrucción:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="nivel_instruccion"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Profesión /Oficio:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="profesion"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Trabaja Actualmente:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="trabaja"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Clasificación Ingreso Familiar:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="clasificacion_ingreso_familiar"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Ingreso Mensual:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="ingreso_mensual"></p>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-success finish-step btn-block">
															Finalizar <i class="fa fa-arrow-circle-right"></i>
														</button>
														<?php
															if(!empty($_POST)){
															if ($_POST['valor'] == '1' ) { ?>

																<div class="alert alert-success">
																	<button data-dismiss="alert" class="close" type="button">&times;</button>
																	<h4 class="alert-heading"><i class="fa fa-check-circle"></i></h4>
																	<p>Registro realizado satisfatoriamente.</p>
																</div>
															<?php}
															else{ ?>
																<div class="alert alert-block alert-danger fade in">
																	<button data-dismiss="alert" class="close" type="button">&times;</button>
																	<h4 class="alert-heading"><i class="fa fa-times-circle"></i> Error!</h4>
																	<p>No se logro Registrar</p>
																</div>
															<?php	}
															} ?>

													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- fin: FORM WIZARD PANEL -->
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
		<script src="../../plugins/jquery-validation/dist/jquery.validate.js"></script>
		<script src="../../plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
		<script src="../../js/form-wizard.js"></script>

		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormWizard.init();
				//form-validation.init();
			});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
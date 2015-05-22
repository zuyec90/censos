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
					<ul class="main-navigation-menu">
						<li class="active open">
							<a href="home.php"><i class="clip-home-3"></i>
								<span class="title"> Inicio </span>
								<span class="selected"></span>
							</a>
						</li>
						<li>
							<a href="data.php"><i class="clip-user-2"></i>
								<span class="title"> Usuario </span>
								<span class="selected"></span>
							</a>
						</li>
						<li>

							<li>
							<a href="javascript:void(0)"><i class="glyphicon glyphicon-list"></i>
								<span class="title"> Registro de Censo </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="datos.php">
										<span class="title"> Datos Jefe de Familia </span>
										<span class="selected"></span>
									</a>
								</li>
								<li>
									<a href="layouts_sidebar_closed.html">
										<span class="title"> Datos Grupo Familiar </span>
									</a>
								</li>
								<li>
									<a href="layouts_boxed_layout.html">
										<span class="title"> Boxed Layout (Por si necesitan agregar algo) </span>
									</a>
								</li>
								<li>
									<a href="layouts_footer_fixed.html">
										<span class="title"> Footer Fixed (Por si necesitan agregar algo)</span>
									</a>
								</li>
								<li>
									<a href="../clip-one-rtl/index.html">
										<span class="title"> RTL Version (Por si necesitan agregar algo) </span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="dataCensos.php"><i class="clip-pencil"></i>
								<span class="title"> Censos </span>
								<span class="selected"></span>
							</a>
						</li>
					</ul>
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
										<a id="bg_style_1" href="#"><img alt="" src="images/bg.png"></a>
										<a id="bg_style_2" href="#"><img alt="" src="images/bg_2.png"></a>
										<a id="bg_style_3" href="#"><img alt="" src="images/bg_3.png"></a>
										<a id="bg_style_4" href="#"><img alt="" src="images/bg_4.png"></a>
										<a id="bg_style_5" href="#"><img alt="" src="images/bg_5.png"></a>
									</div>
									<div class="box-title">
										5 Predefined Color Schemes
									</div>
									<div class="images icons-color">
										<a id="light" href="#"><img class="active" alt="" src="images/lightgrey.png"></a>
										<a id="dark" href="#"><img alt="" src="images/darkgrey.png"></a>
										<a id="black_and_white" href="#"><img alt="" src="images/blackandwhite.png"></a>
										<a id="navy" href="#"><img alt="" src="images/navy.png"></a>
										<a id="green" href="#"><img alt="" src="images/green.png"></a>
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
									<i class="clip-pencil"></i>
									<a href="#">
										Datos
									</a>
								</li>
								<li class="active">
									Jefe de Familia
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
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<form action="#" role="form" class="smart-wizard form-horizontal" id="form">
										<div id="wizard" class="swMain">
											<ul>
												<li>
													<a href="#step-1">
														<div class="stepNumber">
															1
														</div>
														<span class="stepDesc"> Paso 1
															<br />
															<small>Step 1 description</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-2">
														<div class="stepNumber">
															2
														</div>
														<span class="stepDesc"> Paso 2
															<br />
															<small>Step 2 description</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-3">
														<div class="stepNumber">
															3
														</div>
														<span class="stepDesc"> Paso 3
															<br />
															<small>Step 3 description</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-4">
														<div class="stepNumber">
															4
														</div>
														<span class="stepDesc"> Paso 4
															<br />
															<small>Step 4 description</small> </span>
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
															<input type="radio" class="grey" value="f" name="cedula" id="cedula_v" >
															V
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="cedula"  id="cedula_e">
															E
														</label>
														<div class="col-sm-4">
																<input type="text" class="form-control" name="numero" id="numero" placeholder="" maxlength="8">
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
																<select class="form-control" id="fecha" name="fecha_d">
																	<option value="">DD</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-4">
																<select class="form-control" id="fecha" name="fecha_m">
																	<option value="">MM</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-sm-4">
																<input type="text" class="form-control" name="fecha" id="fecha_a" placeholder="AAAA">
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
															<input type="radio" class="grey" value="f" name="sexo" id="sexo_f" >
															Femenino
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="sexo"  id="sexo_m">
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
															<input type="radio" class="grey" value="S" name="CNE" id="CNE_si" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="N" name="CNE"  id="CNE_no">
															No
														</label>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tiempo en la Comunidad <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="float-left margin-select" name="tiempo" id="tiempo" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Incapacitado <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="f" name="incapacitado" id="incapacitado_si" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="incapacitado"  id="incapacitado_no">
															No
														</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tipo<span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="tipo" id="tipo" placeholder="">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Pensionado <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="f" name="pensionado" id="pensionado_si" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="pensionado"  id="pensionado_no">
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
																<input type="text" class="float-left margin-select" name="celular" id="celular" placeholder="" maxlength="11">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Hab. <span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="habitacion" id="habitacion" placeholder="" maxlength="11">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Ofic. <span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
																<input type="text" class="float-left margin-select" name="oficina" id="oficina" placeholder="" maxlength="11">
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
														<select class="form-control" id="estado" name="estado">
															<option value="">&nbsp;</option>
															<option value="Estado 1">soltero (a)</option>
															<option value="Estado 2">Casado (a)</option>
															<option value="Estado 3">Divorciado (a)</option>
															<option value="Estado 4">Viudo (a)</option>
															<option value="Estado 5">Concubinato (a)</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nivel de Instrucción <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<select class="form-control" id="instruccion" name="instruccion">
															<option value="">&nbsp;</option>
															<option value="Instrucción 1">Sin Instrucción</option>
															<option value="Instrucción 2">Básica</option>
															<option value="Instrucción 3">Bachiller</option>
															<option value="Instrucción 4">Técnico Medio</option>
															<option value="Instrucción 5">Técnico Superior</option>
															<option value="Instrucción 6">Universitario</option>
															<option value="Instrucción 7">Postgrado</option>
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
															<input type="radio" class="grey" value="s" name="trabaja" id="trabaja_si" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="n" name="trabaja"  id="trabaja_no">
															No
														</label>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Clasificación Ingreso Familiar <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<select class="form-control" id="ingreso" name="ingreso">
															<option value="">&nbsp;</option>
															<option value="Ingreso 1">Diario</option>
															<option value="Ingreso 2">Semanal</option>
															<option value="Ingreso 3">Quincenal</option>
															<option value="Ingreso 4">Mensual</option>
															<option value="Ingreso 5">Por Trabajo Realizado</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-3 control-label">
														Ingreso Mensual <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="float-left margin-select" id="mensual" name="mensual" placeholder="Bs">
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
														<p class="form-control-static display-value" data-display="cedula" data-display="numero"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Fecha de Nacimiento:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="fecha_d" data-display="fecha_m" data-display="fecha"></p>
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
														<p class="form-control-static display-value" data-display="CNE"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Tiempo en la Comunidad:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="tiempo"></p>
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
														<p class="form-control-static display-value" data-display="tipo"></p>
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
														<p class="form-control-static display-value" data-display="celular"></p>
													</div>
												</div><div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Hab.:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="habitacion"></p>
													</div>
												</div><div class="form-group">
													<label class="col-sm-3 control-label">
														Tel. Ofic.:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="oficina"></p>
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
														<p class="form-control-static display-value" data-display="estado"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nivel de Instrucción:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="instruccion"></p>
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
														<p class="form-control-static display-value" data-display="ingreso"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Ingreso Mensual:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="mensual"></p>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-success finish-step btn-block">
															Finalizar <i class="fa fa-arrow-circle-right"></i>
														</button>
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
		<script src="plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="plugins/blockUI/jquery.blockUI.js"></script>
		<script src="plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="plugins/less/less-1.5.0.min.js"></script>
		<script src="plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="js/main.js"></script>
		<!-- fin: MAIN JAVASCRIPTS -->
		<!-- inicio: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
		<script src="js/form-wizard.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormWizard.init();
			});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
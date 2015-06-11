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
									<li>
										<a data-toggle="tab" href="#panel_edit_account">
											Grupo Familiar
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_projects">
											+
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_overview" class="tab-pane in active">
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
																	www.example.com
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Apellidos:</td>
																<td>
																	peter@example.com
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Cedúla:</td>
																<td>(641)-734-4763</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Fecha de Nacimiento:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
														
															<tr>
																<td>Edad:</td>
																<td>UI Designer</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Sexo:</td>
																<td>56 min</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>CNE:</td>
																<td>Senior Marketing Manager</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Tiempo en la Comunidad:</td>
																<td>
																	Kenneth Ross
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Incapacitado:</td>
																<td>21 October 1982</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Tipo:</td>
																<td>New company web site development, HR Management</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
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
																<td>(641)-734-4763</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Institución:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Tel. Cel.:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Tel. Hab.:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Tel. Ofic.:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Email:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Estado Civil:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Nivel de instrucción:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Profesión / Oficio:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Trabaja Actualmente:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Clasificación Ingreso Familiar:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Ingreso Mensual:</td>
																<td>
																	peterclark82
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div id="panel_edit_account" class="tab-pane">
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
																				www.example.com
																			</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Apellidos:</td>
																			<td>
																				peter@example.com
																			</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Sexo</td>
																			<td>(641)-734-4763</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Cedúla:</td>
																			<td>
																				peterclark82
																			</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Fecha Nacimiento:</td>
																			<td>UI Designer</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Personas/ Discapacidad Tipo:</td>
																			<td>56 min</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Embarazo temprano:</td>
																			<td>Senior Marketing Manager</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Parentesco:</td>
																			<td>
																				Kenneth Ross
																			</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Grado de Instrucción:</td>
																			<td>21 October 1982</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>CNE:</td>
																			<td>New company web site development, HR Management</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Profesión:</td>
																			<td>New company web site development, HR Management</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Pensionado:</td>
																			<td>New company web site development, HR Management</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																		<tr>
																			<td>Ing. Mensual:</td>
																			<td>New company web site development, HR Management</td>
																			<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																		</tr>
																	</tbody>
																</table>
															</div>
													</div>
											</div>
										</form>
									</div>
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
		<script src="plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="plugins/js/pages-user-profile.js"></script>
		<script src="plugins/js/ui-modals.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				PagesUserProfile.init();
			});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
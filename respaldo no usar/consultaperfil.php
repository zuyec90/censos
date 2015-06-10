<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="es" class="no-js">
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
						<div class="container">
					<!-- inicio: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- inicio: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li class="active">
									Consulta
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Busqueda...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Consulta <small>Censo</small></h1>
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
										<a data-toggle="tab" href="#panel_jefe">
											Jefe de Familia
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_grupofamiliar">
											Grupo Familiar
										</a>
									</li>
								</ul>
								
								</div>
								<div class="tab-content">
									<div id="panel_jefe" class="tab-contentin active">
										<table class="table table-hover table-striped table">
											<tbody>
											<tr>
												<td>Nombres</td>
												<td>
												<a href="#nombres" data-toggle="modal" class="">
												</a></td>
											</tr>
											<tr>
												<td>Apellidos</td>
												<td>
												<a href="#apellidos" data-toggle="modal" class="">
												</a></td>
											</tr>
											<tr>
												<td>Cédula</td>
												<td class="ajax">
												<a data-toggle="modal" id="modal" class="">
												</a></td>
											</tr>
											<tr>
												<td>Fecha de Nacimiento</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr>
											<tr>
												<td>Sexo</td>
												<td>
												<a href="#full-width" data-toggle="modal" class="">
												</a></td>
											</tr>
											<tr>
												<td>CNE</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Tiempo en la Comunidad</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Incapacitado</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Pensionado</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Institución</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Tel. Cel</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Tel. Hab.</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Tel. Ofic.</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Email</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Estado Civil</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Nivel de instrucción</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Profesión /Oficio</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Trabaja Actualmente</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Clasificación Ingreso Familiar</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr><tr>
												<td>Ingreso Mensual</td>
												<td>
												<a href="#static" data-toggle="modal" class="">
												</a></td>
											</tr>
											<tr>
												<td></td>
												<td>
													<button class="btn btn-blue next-step btn-info">
															Imprimir <i class="fa fa-arrow-circle-right"></i>
													</button>
											</tr>
											</tbody>
										</table>
									</div>
								</div>


									<div id="panel_grupofamiliar" class="tab-content in active">
										<form action="#panel_grupofamiliar" role="form" id="grupofamiliar">
										<div class= "row">
										
										</div>
									</div>
							</div>
									
									
								</div>
							</div>
						</div>
					</div>
					<!-- fin: PAGE CONTENT-->
				</div>
						<div class="col-sm-12">
							<!-- fin: STYLE SELECTOR BOX -->
							<!-- inicio: PAGE TITLE & BREADCRUMB -->
							
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!-- inicio: PAGE CONTENT -->
					<div class="row">
						
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
		<script src="plugins/flot/jquery.flot.js"></script>
		<script src="plugins/flot/jquery.flot.pie.js"></script>
		<script src="plugins/flot/jquery.flot.resize.min.js"></script>
		<script src="plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<script src="plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
		<script src="js/index.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
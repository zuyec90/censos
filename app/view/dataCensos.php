<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!--inicio: HEAD -->
	<?php require_once('head.php'); ?>
	<!-- fin: HEAD -->
	<!--inicio: BODY -->
	<body>
		<!--inicio: HEADER -->
		<?php require_once('header.php'); ?>
		<!-- fin: HEADER -->
		<!--inicio: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!--inicio: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!--inicio: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- fin: MAIN MENU TOGGLER BUTTON -->
					<!--inicio: MAIN NAVIGATION MENU -->
					<?php require_once('menu.php'); ?>
					<!-- fin: MAIN NAVIGATION MENU -->
				</div>
				<!-- fin: SIDEBAR -->
			</div>
			<!--inicio: PAGE -->
			<div class="main-content">
				<!--inicio: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel para Ayuda</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">								
								<button type="button" class="btn btn-primary">
									Aceptar
								</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancelar
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
					<!--inicio: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!--inicio: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-pencil"></i>
									<a href="dataCensos.php">
										Censos
									</a>
								</li>
								<li class="active">
									Lista de Censados
								</li>
								
							</ol>
							<div class="page-header">
								<h2> Sistema <small>Control de censo</small></h2>
								
							</div>
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!--inicio: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!--inicio: DYNAMIC TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Usuario</strong>
									<div class="panel-tools">
										<a  class="btn btn-xs btn-link panel-config tooltips" href="#panel-config" data-toggle="modal"  data-original-title="Ayuda">
											<i class="fa fa-question"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
												<th> N°&nbsp; &nbsp;</th>
												<th>Nombre</th>
												<th class="hidden-xs">Apellido</th>
												<th>Cédula</th>
												<th class="hidden-xs">Profesion </th>
												
												<th>Opciones</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>												
												<td>Ulises</td>
												<td class="hidden-xs">Google</td>
												<td>Vocero en el area Financiera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Eliminar">
													<i class="fa fa-trash-o"></i></a>													
												</td>
											</tr>
											
											<tr>
												<td>3</td>
												<td>Mario</td>
												<td class="hidden-xs">Apple Inc.</td>
												<td>Vocero en el area financiera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Eliminar">
													<i class="fa fa-trash-o"></i></a>													
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Elvira</td>
												<td class="hidden-xs">Dieter Plaetinck</td>
												<td>Vocera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="ELiminar">
													<i class="fa fa-trash-o"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Mensajes">
													<i class="fa fa-envelope-o"></i></a>
																									
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Carmen</td>
												<td class="hidden-xs">Tim Berners-Lee</td>
												<td>Vocera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Eliminar">
													<i class="fa fa-trash-o"></i></a>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Yasmín</td>
												<td class="hidden-xs">Akinori Ito</td>
												<td>Vocera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="ELiminar">
													<i class="fa fa-trash-o"></i></a>													
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- fin: DYNAMIC TABLE PANEL -->
						</div>
					</div>
					<!-- fin: PAGE CONTENT-->
				</div>
			</div>
			<!-- fin: PAGE -->
		</div>
		<!-- fin: MAIN CONTAINER -->
		<!--inicio: FOOTER -->
		<?php require_once('footer.php'); ?>
		<!-- fin: FOOTER -->
		<!--inicio: MAIN JAVASCRIPTS -->
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
		<!--inicio: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="js/table-data.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
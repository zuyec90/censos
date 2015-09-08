<?php
include ('../controller/BitacoraController.php');

$resultado = new Bitacora;

$registro = $resultado->Registro($id_bitacora);
$modificacion = $resultado->Modificacion($id_bitacora);
$consulta = $resultado->Consultas($id_bitacora);

?>

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
									<a href="bitacora.php">
										Bitacora
									</a>
								</li>
								<li class="active">
									Reporte
								</li>

							</ol>
							<div class="page-header">
								<h1> Bitacora </h1>

							</div>
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!--inicio: PAGE CONTENT -->
					<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Bitacora de Acciones
								</div>
								<div class="panel-body">
									<table class="table table-bordered table-hover" id="sample-table-4">
										<thead>
											<tr>
												<th class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></th>
												<th>Usuario</th>
												<th class="hidden-xs">Censo</th>
												<th><i class="fa fa-time"></i> Fecha </th>
												<th class="hidden-xs">Acción Realizada</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center hidden-xs">
												<div class="checkbox-table">
													<label>
														<input type="checkbox" class="flat-grey">
													</label>
												</div></td>
												<td>
													<input type="text" value="<?php echo $registro['nombre']; ?>" name="nombre" >
													<input type="hidden" value="<?php echo $registro['id_user']; ?>" name="id_user" >
												</td>
												<td class="hidden-xs">
													<input type="text" value="<?php echo $registro['idjefe_familia']; ?>" name="idjefe_familia">
												</td>
												<td>
													<input type="date" value="<?php echo $registro['fecha_accion']; ?>" name="fecha_accion">
												</td>
												<td class="hidden-xs"><span class="label label-sm label-warning">
													<input type="text" value="<?php echo $registro['accion']; ?>" name="accion">
												</span></td>
											</tr>
											
										</tbody>
									</table>
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
		<!--inicio: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

		<script type="text/javascript" src="../../plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="../../plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../../plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="../../js/table-data.js"></script>
		<script src="../../plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="../../plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="../../js/ui-modals.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UIModals.init();
				TableData.init();
			});
		</script>

	</body>
	<!-- fin: BODY -->
</html>
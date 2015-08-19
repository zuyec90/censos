<?php
//error_reporting();
require_once ('../controller/UserController.php');
$user = new User;
$resultado = $user->Seleccionar();

?>

<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<?php require_once('head.php'); ?>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: HEADER -->
		<?php require_once('header.php'); ?>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<?php require_once('menu.php'); ?>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
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
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-user-2"></i>
									<a href="data.php">
										Usuario
									</a>
								</li>
								<li class="active">
									Lista de Usuarios
								</li>

							</ol>
							<div class="page-header">
								<h1> Lista <small>de Usuarios</small></h1>
								<a href="form_registro.php"><button type="button" class="btn btn-info"><i class="clip-data">&nbsp;Crear Usuarios</i></button></a>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: DYNAMIC TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
								<strong>Usuarios</strong>
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
												<th>N°&nbsp; &nbsp; </th>
												<th>Foto</th>
												<th>Nombre Completo</th>
												<th class="hidden-xs">Usuario</th>
												<th>Cargo</th>
												<th class="hidden-xs"> E-mail </th>
												<th>Opciones</th>
											</tr>
										</thead>
										<tbody>
										<?php 	while ($users = mysql_fetch_assoc($resultado)) {  ?>


											<tr>
												<td><?php echo $users['id_user'];?></td>
												<td>
													<a href="perfil.php">
													<img src="../../images/avatar-1.jpg" alt="image"/></a>
													</td>
												<td><?php echo $users['nombre'];?></td>
												<td class="hidden-xs"><?php echo $users['usuario'];?></td>
												<td><?php echo $users['voceria'];?></td>
												<td class="hidden-xs"><?php echo $users['email'];?></td>
												<td>
													<a href="perfil.php?id_user=<?php echo $users['id_user'];?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<div class="message-actions">
														<a title="Eliminar" class="btn btn-xs btn-bricky tooltips" href="#eliminar-mensaje" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
															<div class="modal fade" id="eliminar-mensaje" tabindex="-1" role="dialog" aria-hidden="true">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																		<h4 class="modal-title">Eliminar Mensaje</h4>
																	</div>
																	<div class="modal-body">
																		Desea eliminar este mensaje?
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
																		<a href="../lib/UserEliminar.php?id_user=<?php echo $users['id_user'];?>" name="id_user" type="button"class="btn btn-danger" >Eliminar</a>
																	</div>
																</div>
															</div>
													</div>
												</td>
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: DYNAMIC TABLE PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<?php require_once('footer.php'); ?>
		<!-- end: FOOTER -->
		<!-- start: MAIN JAVASCRIPTS -->
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
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="../../plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="../../plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../../plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="../../js/table-data.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>
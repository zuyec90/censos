

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
	<body id="pg_consultaperfil">
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
					</div>
					<!-- fin: MAIN MENU TOGGLER BUTTON -->
					<!--inicio: MAIN NAVIGATION MENU -->
					<?php require_once('menu.php'); ?>
					<?php
					require_once ('../controller/CensosController.php');
					$censo = new censo;
					$respuesta = $censo->Selectjefe();
					?>
					<!-- fin: MAIN NAVIGATION MENU -->
				</div>
				<!-- fin: SIDEBAR -->
			</div>
			<!--inicio: PAGE -->
			<div class="main-content">
				<!--inicio: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="false" style="display: block; margin-top: -102.5px;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">× &times;</button>
							<h4 class="modal-title">Desea eliminar este Jefe de Familia?</h4>
						</div>					
						<div class="modal-footer">
							<input type="button" value="Cancelar" data-dismiss="modal" class="btn btn-light-grey"></input>
							<input type="button" value="Eliminar" class="btn btn-danger"></input>
						</div>
					</div>
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
									<i class="clip-pencil"></i><a href="consultaperfil.php">Consulta</a>
								</li>
								<li class="active">Censo
								</li>
							</ol>
							<div class="page-header">
								<h2>Lista de Censados</h2>
							</div>
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!--inicio: PAGE CONTENT -->
					<div class="row" >
						<div class="col-md-12">
							<!--inicio: DYNAMIC TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Censo</strong>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
												<th> N°&nbsp; &nbsp;</th>
												<th>Nombres</th>
												<th class="hidden-xs">Apellidos</th>
												<th>Cédula</th>
												<th class="hidden-xs">Edad</th>
												<th>Opciones</th>
											</tr>
										</thead>
										<tbody>
											<?php 	while ($censo = mysql_fetch_assoc($respuesta)) {  ?>
											<tr>
												<td><?php echo $censo['idjefe_familia'];?></td>
												<td><a href="consultadatos.php?idjefe_familia=<?php echo $censo['idjefe_familia'];?>"> <?php echo $censo['nombres']; ?> </a></td> 
												<td class="hidden-xs"><?php echo $censo['apellidos'];?></td>
												<td><?php echo $censo['cedula'];?></td>
												<td class="hidden-xs"><?php echo $censo['edad'];?></td>
												<td>
													<a href="consultadatos.php?idjefe_familia=<?php echo $censo['idjefe_familia'];?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 10px;"><i class="fa fa-edit"></i></a>&nbsp;
													<?php if ($_SESSION['perfil'] == 1 ){ ?>
													<a title="Eliminar" class="btn btn-xs btn-bricky tooltips" href="#eliminar-mensaje<?php echo $censo['idjefe_familia'];?>" data-toggle="modal"><i class="fa fa-trash-o"></i></a>													
													<a href="consultabitacora.php?idjefe_familia=<?php echo $censo['idjefe_familia'];?>" class="btn btn-xs btn-info tooltips"  data-placement="top" data-original-title="Bitacora" style= "margin-left: 7px;"><i class="fa fa-clock-o"></i></a>
													<?php } ?>

													<div class="message-actions">
														<div class="modal fade" id="eliminar-mensaje<?php echo $censo['idjefe_familia'];?>" tabindex="-1" role="dialog" aria-hidden="true">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	<h4 class="modal-title">Eliminar Perfil</h4>
																</div>
																<div class="modal-body">
																		Desea eliminar este perfil?
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
																	<a href="../lib/CensosEliminar.php?idjefe_familia=<?php echo $censo['idjefe_familia'];?>" name="idjefe_familia" type="button"class="btn btn-danger" >Eliminar</a>
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
		<script src="../../js/jquery.min.js"></script>
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
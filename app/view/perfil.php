
<?php
session_start();


require_once ('../controller/UserController.php');
$user = new User;
 //echo "string".$_GET["id_user"]; die();
if (!empty($_SESSION['id_user']) and  $_GET["id_user"] == "" ) {
	$id_user = $_SESSION['id_user'];
}else{
	$id_user = $_GET["id_user"];
}
$resultado = $user->Seleccionar($id_user);

?>

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
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
									Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
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
										<li class="active">Perfil</li>
									</ol>
									<div class="page-header">
										<h2><?php echo $resultado['nombre'] ;?> / <small>Administrador</small></h2>
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
												<a data-toggle="tab" href="#panel_overview">Datos</a>
											</li>
										</ul>
										<div class="tab-content">
											<div id="panel_overview" class="tab-pane in active">
												<div class="row">
													<div class="col-sm-5 col-md-4">
														<div class="user-left">
															<table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3"><h4>Información de Contacto</h4></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Correo Electronico:</td>
																		<td>
																			<a href=""><?php echo $resultado['email'] ;?></a>
																		</td>
																		<td>
																			<a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a>
																		</td>
																	</tr>
																	<tr>
																		<td>Telefono:</td>
																		<td><?php echo $resultado['celular'] ;?></td>
																		<td>
																			<a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a>
																		</td>
																	</tr>
																</tbody>
															</table>
															<br><br>
															<table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3"><h4>Información General</h4></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Ultima Entrada</td>
																		<td>15 min</td>
																		<td>
																			<a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a>
																		</td>
																	</tr>
																	<tr>
																		<td>Voceria</td>
																		<td><?php echo $resultado['voceria'] ;?></td>
																		<td>
																			<a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a>
																		</td>
																	</tr>
																	<tr>
																		<td>Usuario</td>
																		<td>
																			<span class="label label-sm label-info">
																			<?php
																		 	switch ($resultado['perfil']) {
																		 	
																		 		case 1:
																		 			echo " Operador ";
																		 			break;
																		 		case 2:
																		 			echo " Administrador ";
																		 		break;
																		 		
																		 		default:
																		 			echo " Usuario ";
																		 		break;
																		 	}	
																			?>
																			</span>
																		</td>
																		<td>
																			<a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-sm-7 col-md-8">
											<div id="panel_edit_account" class="tab-pane">
												<form action="../lib/UserUpdate.php" method="POST" role="form" id="form">
													<div class="row">
														<div class="col-md-12">
															<h4>Información de Cuenta</h4>
															<hr>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label">Nombre</label>
																<input type="text" placeholder="" class="form-control" id="nombre" name="nombre" value="<?php echo $resultado['nombre'] ;?>">
																<input type="hidden" placeholder="" class="form-control" id="id_user" name="id_user" value="<?php echo $resultado['id_user']; ?>">
															</div>
															<div class="form-group">
																<label class="control-label">Apellido</label>
																<input type="text" placeholder="" class="form-control" id="apellido" name="apellido" value="<?php echo $resultado['apellido'] ;?>">
															</div>

															<div class="form-group">
																<label class="control-label">Nacionalidad</label>
																	<div>
																		<label class="radio-inline"><input type="radio" class="grey" value="v" name="nacionalidad" id="nacionalidad_v">V</label>
																		<label class="radio-inline"><input type="radio" class="grey" value="e" name="nacionalidad"  id="nacionalidad_e" checked="checked">E</label>
																	</div>
															</div>

															<div class="form-group">
																<label class="control-label">Cédula</label>
																<input type="text" placeholder="" class="form-control" id="cedula" name="cedula" value="<?php echo $resultado['cedula'] ;?>">
															</div>
															<div class="form-group">
																<label for="form-field-mask-2">Teléfono</label>
																	<div class="input-group">
																		<span class="input-group-addon"> <i class="fa fa-phone"></i> </span>
																		<input type="text" id="form-field-mask-2" class="form-control input-mask-phone" name="celular" maxlength="11" value="<?php echo $resultado['celular'] ;?>">
																	</div>
															</div>
															<div class="form-group">
																<label class="control-label">Sexo</label>
																	<div>
																		<label class="radio-inline"><input type="radio" class="grey" value="f" name="sexo" id="femenino">Femenino</label>
																		<label class="radio-inline"><input type="radio" class="grey" value="m" name="sexo"  id="masculino" checked="checked">Masculino</label>
																	</div>
															</div>
														</div>
														<div class="row">
														<div class="col-md-5">
															<div class="form-group">
																<label class="control-label">Correo Electronico</label>
																<input type="email" placeholder="" class="form-control" id="email" name="email" value="<?php echo $resultado['email'] ;?>">
															</div>
															
															<div class="form-group">
																<label class="control-label">Unidad de Trabajo al que pertenece</label>
																<input type="text"  placeholder="" class="form-control" id="voceria" name="voceria" value="<?php echo $resultado['voceria'] ;?>">
															</div>
															<div class="form-group">
																<label class="control-label">Tipo de Usuario</label>
																<input type="text"  placeholder="" class="form-control" id="perfil" name="perfil" value="<?php echo $resultado['perfil'] ;?>">
															</div>
															<div class="form-group">
																<span class="input-icon">
																	<input type="text" class="form-control" name="usuario" value="<?php echo $resultado['usuario'] ;?>"><i class="fa fa-user"></i>
																</span>
															</div>
															
															<div class="form-group connected-group">
																<label class="control-label">Contraseña</label>
																<span class="input-icon">
																	<input type="password" class="form-control password" id="contrasenia" name="contrasenia" value="<?php echo $resultado['contrasenia'] ;?>"><i class=""></i>
																</span>
															</div>
														
														</div>
													</div>
													<?php if ($_SESSION['perfil'] == 1 ){ ?>
													<div class="row">
														<div class="col-md-4">
															<br>
															<button class="btn btn-teal btn-block" type="submit">Modificar <i class="fa fa-arrow-circle-right"></i></button>
														</div>
													</div>
														<?php } ?>
												</form>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fin: PAGE CONTENT-->
		<div class="col-sm-12">
			<!-- fin: STYLE SELECTOR BOX -->
			<!-- inicio: PAGE TITLE & BREADCRUMB -->
			<!-- fin: PAGE TITLE & BREADCRUMB -->
		</div>
		<!-- fin: PAGE HEADER -->
		<!-- inicio: PAGE CONTENT -->
		<!-- fin: PAGE CONTENT-->
		<!-- fin: PAGE -->
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
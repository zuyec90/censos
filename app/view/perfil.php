
<?php
session_start();
echo $_SESSION['id_user'] ;

require_once ('../controller/UserController.php');
$user = new User;
if (!empty($_SESSION['id_user'])) {
	$id_user = $_SESSION['id_user'];
}else{
	$id_user = Null;
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
									Perfil
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
								<h1><?php echo $resultado['nombre'] ;?> / <small>Administrador</small></h1>
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
											Datos
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_edit_account">
											Editar
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_overview" class="tab-pane in active">
										<div class="row">
											<div class="col-sm-5 col-md-4">
												<div class="user-left">
													<div class="center">
														<h4>Ulises Robles</h4>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="user-image">
																<div class="fileupload-new thumbnail"><img src="../../upload/765-default-avatar.png" alt="" style="max-width: 200px; max-height: 150px; line-height: 20px;">
																</div>

																<div class="user-image-buttons">
																	<span class="btn btn-teal btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
																		<input type="file">
																	</span>
																	<a href="#" class="btn fileupload-exists btn-bricky btn-sm" data-dismiss="fileupload">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</div>
														</div>
														<hr>

														<hr>
													</div>
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Información de Contacto</th>
															</tr>
														</thead>
														<tbody>
																<td>Correo Electronico:</td>
																<td>
																<a href="">
																	<?php echo $resultado['email'] ;?>
																</a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Telefono:</td>
																<td><?php echo $resultado['celular'] ;?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Información General</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Ultima Entrada</td>
																<td>15 min</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Voceria</td>
																<td><?php echo $resultado['voceria'] ;?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Usuario</td>
																<td><span class="label label-sm label-info"><?php echo $resultado['perfil'] ;?></span></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Información Adicional</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Fecha de Nacimiento</td>
																<td>21 Octubre 1982</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
														</tbody>
													</table>
														</tbody>
													</table>
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="col-sm-7 col-md-8">
												<p>

												</p>
												<div class="row">
													<div class="col-sm-3">
														<button class="btn btn-icon btn-block pulsate">
															<a href="pagina_mensaje.php"><i class="clip-bubble-2"></i>
															Mensajes <span class="badge badge-info"> 23 </span></a>
														</button>
													</div>
													<div class="col-sm-3">
														<button class="btn btn-icon btn-block">
															<i class="clip-list-3"></i>
															Notificaciones <span class="badge badge-info"> 9 </span>
														</button>
													</div>
												</div>
												<div class="panel panel-white">
													<div class="panel-heading">
														<i class="clip-menu"></i>
														Actividades Recientes
														<div class="panel-tools">
															<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
															</a>
															<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
																<i class="fa fa-wrench"></i>
															</a>
															<a class="btn btn-xs btn-link panel-refresh" href="#">
																<i class="fa fa-refresh"></i>
															</a>
															<a class="btn btn-xs btn-link panel-close" href="#">
																<i class="fa fa-times"></i>
															</a>
														</div>
													</div>
													<div class="panel-body panel-scroll" style="height:300px">
														<ul class="activities">
															<li>
																<a class="activity" href="javascript:void(0)">
																	<i class="clip-upload-2 circle-icon circle-green"></i>
																	<span class="desc">Ha cargado un nuevo documento.</span>
																	<div class="time">
																		<i class="fa fa-time bigger-110"></i>
																		2 min.
																	</div>
																</a>
															</li>
															<li>
																<a class="activity" href="javascript:void(0)">
																	<img alt="image" src="../../upload/default_avatar_small.png">
																	<span class="desc">Yasmin Torres le envió un mensaje.</span>
																	<div class="time">
																		<i class="fa fa-time bigger-110"></i>
																		3 horas.
																	</div>
																</a>
															</li>
															<li>
																<a class="activity" href="javascript:void(0)">
																	<i class="clip-data circle-icon circle-bricky"></i>
																	<span class="desc">Modificación en la Base de Datos.</span>
																	<div class="time">
																		<i class="fa fa-time bigger-110"></i>
																		5 horas.
																	</div>
																</a>
															</li>
															<li>
																<a class="activity" href="javascript:void(0)">
																	<i class="clip-images-2 circle-icon circle-green"></i>
																	<span class="desc">Yailet Rojas cargo una nueva imagen.</span>
																	<div class="time">
																		<i class="fa fa-time bigger-110"></i>
																		9 horas.
																	</div>
																</a>
															</li>
															<li>
																<a class="activity" href="javascript:void(0)">
																	<i class="clip-image circle-icon circle-green"></i>
																	<span class="desc">Ulises Robles cargo una nueva imagen.</span>
																	<div class="time">
																		<i class="fa fa-time bigger-110"></i>
																		12 horas.
																	</div>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="panel_edit_account" class="tab-pane">
										<form action="../lib/UserUpdate.php" method="POST" role="form" id="form">
											<div class="row">
												<div class="col-md-12">
													<h3>Información de Cuenta</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>
															Cargar imagen
														</label>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="../../upload/765-default-avatar.png" alt="">
															</div>

															<div class="user-edit-image-buttons">
																<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Seleccione la imagen</span><span class="fileupload-exists"><i class="fa fa-picture"></i> </span>
																	<input type="file">
																</span>
																<a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
																	<i class="fa fa-times"></i> Eliminar
																</a>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">
															Nombre
														</label>
														<input type="text" placeholder="" class="form-control" id="nombre" name="nombre" value="<?php echo $resultado['nombre'] ;?>">
														<input type="hidden" placeholder="" class="form-control" id="id_user" name="id_user" value="<?php echo $resultado['id_user']; ?>">
													</div>
													<div class="form-group">
														<label class="control-label">
															Apellido
														</label>
														<input type="text" placeholder="" class="form-control" id="apellido" name="apellido" value="<?php echo $resultado['apellido'] ;?>">
													</div>
													<div class="form-group">
														<label class="control-label">
															Cédula
														</label>
														<input type="text" placeholder="" class="form-control" id="cedula" name="cedula" value="<?php echo $resultado['cedula'] ;?>">
													</div>
													<div class="form-group">
												<label for="form-field-mask-2">
													Teléfono
												</label>
												<div class="input-group">
													<span class="input-group-addon"> <i class="fa fa-phone"></i> </span>
													<input type="text" id="form-field-mask-2" class="form-control input-mask-phone" name="celular" value="<?php echo $resultado['email'] ;?>">
												</div>
												<div class="form-group">
														<label class="control-label">
															Sexo
														</label>
														<div>
															<label class="radio-inline">
																<input type="radio" class="grey" value="f" name="sexo" id="femenino">
																Femenino
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="m" name="sexo"  id="masculino" checked="checked">
																Masculino
															</label>
															</div>
														</div>
													</div>

											</div>
												<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label class="control-label">
															Correo Electronico
														</label>
														<input type="email" placeholder="" class="form-control" id="email" name="email" value="<?php echo $resultado['email'] ;?>">
													</div>
													<div class="form-group">
														<label class="control-label">
															Dirección
														</label>
														<input type="text" placeholder="" class="form-control" id="direccion" name="direccion" value="<?php echo $resultado['direccion'] ;?>">
													</div>
													<div class="form-group">
														<label class="control-label">
															Unidad de Trabajo al que pertenece
														</label>
														<input type="text"  placeholder="" class="form-control" id="voceria" name="voceria" value="<?php echo $resultado['voceria'] ;?>">
													</div>
														<div class="form-group">
														<label class="control-label">
															Tipo de Usuario
														</label>
														<input type="text"  placeholder="" class="form-control" id="perfil" name="perfil" value="<?php echo $resultado['perfil'] ;?>">
													</div>
													<div class="form-group">
													<span class="input-icon">
														<input type="text" class="form-control" name="usuario" value="<?php echo $resultado['usuario'] ;?>">
														<i class="fa fa-user"></i> </span>
												</div>
												<div class="form-group connected-group">
													<label class="control-label">
														Contraseña<span class="symbol required"></span>
													</label>
														<span class="input-icon">
													<input type="password" class="form-control password" id="contrasenia" name="contrasenia" value="<?php echo $resultado['contrasenia'] ;?>">
													<i class="fa fa-lock"></i>

												</div>
											</div>
										</div>
										</div>

											<div class="row">

												<div class="col-md-4">
													<br>
													<button class="btn btn-teal btn-block" type="submit">
														Modificar <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>

										</form>
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
<!DOCTYPE html>
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
									<a href="#">
										Usuario
									</a>
								</li>
								<li class="active">
									Registro de Usuarios
								</li>
							</ol>
							<div class="page-header">
								<h1>Registro <small>de Usuarios</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: FORM VALIDATION 2 PANEL -->
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
									<?php

							if(!empty($_POST)){
								if ($_POST['valor'] == '1' ) { ?>

									<div class="alert alert-success">
										<button data-dismiss="alert" class="close">
											&times;
										</button>
										<i class="fa fa-check-circle"></i>
										<strong>Well done!</strong> You successfully read this important alert message.
									</div>

									<?php
									}else{ ?>
									<div class="alert alert-success">
										<button data-dismiss="alert" class="close">
											&times;
										</button>
										<i class="fa fa-check-circle"></i>
										<strong>Well done!</strong> You successfully read this important alert message.
									</div>
							<?php	}
							} ?>

									<h2><i class="fa fa-pencil-square teal"></i> REGISTRO</h2>
									<p>
										Crea una cuenta para gestionar todo lo que haces.
									</p>

									<hr>
									<form action="app/lib/UserCreate.php" method="POST" role="form" id="form">
										<div class="row">
											<div class="col-md-12">
												<div class="errorHandler alert alert-danger no-display">
													<i class="fa fa-times-sign"></i> Extisten algunos errores por favor verificar.
												</div>
												<div class="successHandler alert alert-success no-display">
													<i class="fa fa-ok"></i> Campos correctamente ingresados
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">

													<div class="fileupload fileupload-new" data-provides="fileupload">

														<div class="user-image">
															<div class="fileupload-new thumbnail"><img src="upload/765-default-avatar.png" alt="" style="max-width: 100px; max-height: 150px; line-height: 20px;">
															</div>

															<div class="user-image-buttons">
																<span class="btn btn-teal btn-file btn-sm">
																<span class="fileupload-new">
																<i class="fa fa-pencil"></i>
																</span>
																<span class="fileupload-exists"><i class="fa fa-pencil"></i>
																</span>
																		<input type="file">
																	</span>
																	<a href="#" class="btn fileupload-exists btn-bricky btn-sm" data-dismiss="fileupload">
																		<i class="fa fa-times"></i>
																	</a>
															</div>
													</div>
												</div>
											</div>

												<div class="form-group">
													<label class="control-label">
														Nombre <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Ingresa tu primer Nombre" class="form-control" id="firstname" name="nombre">
												</div>
												<div class="form-group">
													<label class="control-label">
														Apellido <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Ingresa tu Primer Apellido" class="form-control" id="lastname" name="apellido">
												</div>
												<div class="form-group">
													<label class="control-label">
														Cédula<span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Ingresa tu N° de Cédula" class="form-control" id="ci" name="cedula">
												</div>
												<div class="form-group">
													<label class="control-label">
														Correo Electrónico<span class="symbol required"></span>
													</label>
													<input type="email" placeholder="Ingresa el Correo Electrónico" class="form-control" id="email2" name="email">
												</div>
											<div class="form-group">
												<label for="form-field-mask-2">
													Teléfono
												</label>
												<div class="input-group">
													<span class="input-group-addon"> <i class="fa fa-phone"></i> </span>
													<input type="text" id="form-field-mask-2" class="form-control input-mask-phone" name="celular">
												</div>
											</div>
											<div class="form-group">
													<label class="control-label">
														Sexo <span class="symbol required"></span>
													</label>
													<div>
														<label class="radio-inline">
															<input type="radio" class="grey" value="f" name="sexo" id="gender_female">
															Femenino
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="sexo"  id="gender_male">
															Masculino
														</label>
													</div>
												</div>
											<div class="form-group">
															<label class="control-label">
																Dirección <span class="symbol required"></span>
															</label>
															<input class="form-control tooltips" type="text" data-original-title="puedes escribir aqui la dirreccion de referencia" data-rel="tooltip"  title="" data-placement="top" name="direccion" id="city">
														</div>

											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">
														Unidad de Trabajo al que pertenece <span class="symbol required"></span>
													</label>
													<select class="form-control" id="dropdown" name="voceria">
														<option value="">Selecciona a la Unidad de Trabajo al que pertenece</option>
														<option value="usuario1">Unidad Ejecutiva</option>
														<option value="usuario2">Unidad de Contraloría Social</option>
														<option value="vocero2">Unidad Electoral Permanente</option>
														<option value="vocero2">Unidad Administrativa y Financiera Comunitaria</option>
													</select>
												</div>
												<div class="form-group">
													<label class="control-label">
														Tipo de Usuario <span class="symbol required"></span>
													</label>
													<select class="form-control" id="dropdown" name="perfil">
														<option value="">Selecciona el tipo de Usuario</option>
														<option value="1">Administrador</option>
														<option value="2">Operador</option>

													</select>
												</div>
												<div class="form-group">
													<span class="input-icon">
														<input type="text" class="form-control" name="usuario" placeholder="Usuario">
														<i class="fa fa-user"></i> </span>
												</div>
												<div class="form-group connected-group">
													<label class="control-label">
														Contraseña<span class="symbol required"></span>
													</label>
														<span class="input-icon">
								<input type="password" class="form-control password" id="contrasenia" name="contrasenia" placeholder="Contraseña">
								<i class="fa fa-lock"></i>

												</div>
												<div class="form-group connected-group">
													<label class="control-label">
														Contraseña<span class="symbol required"></span>
													</label>
														<span class="input-icon">
								<input type="password" class="form-control password" id="contrasenia_doble" name="contrasenia_doble" placeholder="Contraseña">
								<i class="fa fa-lock"></i>

												</div>
												<div class="row">
													<div class="col-md-8">

													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div>
													<span class="symbol required"></span>Campos requeridos
													<hr>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<p>
													Al registrarse , usted estará de acuerdo con la política y los Términos &amp; Condiciones.
												</p>
											</div>
											<div class="col-md-4">
												<button class="btn btn-green btn-block" type="submit">
													Registrar <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- end: FORM VALIDATION 2 PANEL -->
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
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="plugins/summernote/build/summernote.min.js"></script>
		<script src="plugins/ckeditor/ckeditor.js"></script>
		<script src="plugins/ckeditor/adapters/jquery.js"></script>
		<script src="js/form-validation.js"></script>
		<script src="plugins/bootstrap-paginator/src/bootstrap-paginator.js"></script>
		<script src="plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="plugins/gritter/js/jquery.gritter.min.js"></script>
		<script src="js/ui-elements.js"></script>

		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormValidator.init();
				UIElements.init();
			});

		</script>

	</body>
	<!-- end: BODY -->
</html>
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

		<script type="javascript">

			function validarcontrasenia(){

				var p1 = document.getElementById("contrasenia").value;
				var p2 = document.getElementById("contrasenia2").value;
				var espacios = false;
				var cont = 0;

				while (!espacios && (cont < p1.length)) {
					if (p1.charAt(cont) == " "){
						espacios = true;
						cont++;
					} 
					if (espacios) {
					  alert ("La contraseña no puede contener espacios en blanco");
					  return false;
					}
				}

				if (p1.length == 0 || p2.length == 0) {
  					alert("Los campos de la password no pueden quedar vacios");
  					return false;
  				}

				if (p1 != p2) {
					alert("Las contraseñas deben de coincidir");
					return false;
					} else {
					alert("La contraseña es valida");
					return true; 
				}

			}
		</script>
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
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-user-2"></i><a href="#">Usuario</a>
								</li>
								<li class="active">Registro de Usuarios
								</li>
							</ol>
							<div class="page-header">
								<h2>Registro de Usuarios</h2>
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
									<i class="clip-user"></i>Crea un usuario para gestiones
								</div>
								<div class="panel-body">
									<form action="../lib/UserCreate.php" method="post" role="form" id="form" onsubmit="validarcontrasenia()">
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
													<div>
														<label class="radio-inline">
															<input type="radio" class="grey" value="v" name="nacionalidad" id="nacionalidad_v">
															V
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="e" name="nacionalidad"  id="nacionalidad_e">
															E
														</label>
														<div class="col-sm-">
																<input type="text" placeholder="Ingresa tu N° de Cédula" class="form-control" id="ci" name="cedula" maxlength="8">
														</div>
													</div>			
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
														<a class="input-group-addon"> <i class="fa fa-phone"></i> </a>
														<input type="text" id="form-field-mask-2" class="form-control input-mask-phone" name="celular" maxlength="11">
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
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">
														Unidad de Trabajo al que pertenece <span class="symbol required"></span>
													</label>
													<select class="form-control" id="dropdown" name="voceria">
														<option value="">Selecciona a la Unidad de Trabajo al que pertenece</option>
														<option value="Unidad Ejecutiva">Unidad Ejecutiva</option>
														<option value="Unidad de Contraloría Social">Unidad de Contraloría Social</option>
														<option value="Unidad Electoral Permanente">Unidad Electoral Permanente</option>
														<option value="Unidad Administrativa y Financiera Comunitaria">Unidad Administrativa y Financiera Comunitaria</option>
													</select>
												</div>
												<div class="form-group">
													<label class="control-label">
														Tipo de Usuario <span class="symbol required"></span>
													</label>
													<select class="form-control" id="dropdown" name="perfil">
														<option value="">Selecciona el tipo de Usuario</option>
														<option value="Administrador">Administrador</option>
														<option value="Operador">Operador</option>

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
														<i class="fa fa-lock"></i></span>
												</div>
												<div class="form-group connected-group">
													<label class="control-label">
														Confirmar Contraseña<span class="symbol required"></span>
													</label>
														<span class="input-icon">
														<input type="password" class="form-control password" id="contrasenia2" name="contrasenia2" placeholder="Contraseña">
														<i class="fa fa-lock"></i></span>
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

											</div>
											<div class="col-md-4">
												<button class="btn btn-success finish-step btn-block">
													Registrar <i class="fa fa-arrow-circle-right"></i>
												</button>
											<?php
												if(!empty($_POST)){
												if ($_POST['valor'] == '1' ) { ?>
													<div class="alert alert-success">
														<button data-dismiss="alert" class="close" type="button">&times;</button>
														<h4 class="alert-heading"><i class="fa fa-check-circle"></i></h4>
														<p>Registro realizado satisfatoriamente.</p>
													</div>
												<?php
												}else{ ?>
													<div class="alert alert-block alert-danger fade in">
														<button data-dismiss="alert" class="close" type="button">&times;</button>
														<h4 class="alert-heading"><i class="fa fa-times-circle"></i> Error!</h4>
														<p>No se logro Registrar</p>
													</div>
												<?php	}
											} ?>
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
		<script src="../../plugins/respond.min.js"></script>
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
		<script src="../../plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../plugins/summernote/build/summernote.min.js"></script>
		<script src="../../plugins/ckeditor/ckeditor.js"></script>
		<script src="../../plugins/ckeditor/adapters/jquery.js"></script>
		<script src="../../js/form-validation.js"></script>
		<script src="../../plugins/bootstrap-paginator/src/bootstrap-paginator.js"></script>
		<script src="../../plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="../../plugins/gritter/js/jquery.gritter.min.js"></script>
		<script src="../../js/ui-elements.js"></script>

		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				//FormValidator.init();
				//UIElements.init();
			});

		</script>

	</body>
	<!-- end: BODY -->
</html>
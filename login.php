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
	<body class="login example2">
		<div class="main-login col-sm-4 col-sm-offset-4">
			<div class="logo"><h4><b>Consejo Comunal</b></h4></h4><center><img src="upload/logo1.png" width="70" height="70" class="img-rounded"></center></i><h4><b>"Santa Inés"</b></h4>
			</div>
			<!-- inicio: LOGIN BOX -->
			<div class="box-login">
				<h4><center>Inicie sesión para acceder al sistema</center></h4>
				<p><center>Por favor, introduzca su usuario y contraseña para iniciar sesión.</center></p>
				<form class="form-login" action="index.html">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> Usted intrudujo algún dato erróneo. Por favor verifique.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="username" placeholder="Usuario">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Contraseña">
								<i class="fa fa-lock"></i>
								<a class="forgot" href="#">
									Olvide mi contraseña
								</a> </span>
						</div>
						<div class="form-actions">
							<label for="remember" class="checkbox-inline">
								<input type="checkbox" class="grey remember" id="remember" name="remember">
								No cerrar sesión
							</label>
							<button type="submit" class="btn btn-primary btn-sm pull-right">
								Acceder <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
						<div class="new-account">
							No posee una cuenta?
							<a href="#" class="register">
								Crear una cuenta
							</a>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- fin: LOGIN BOX -->
			<!-- inicio: FORGOT BOX -->
			<div class="box-forgot">
				<h3><center>¿Olvidaste la contraseña?</center></h3>
				<p><center>Introduzca su correo electrónico para reestablecer su contraseña.</center></p>
				<form class="form-forgot">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> Usted intrudujo algún dato erróneo. Por favor verifique.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Correo Electrónico">
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-actions">
							<a class="btn btn-light-grey btn-sm go-back">
								<i class="fa fa-circle-arrow-left"></i> Atras
							</a>
							<button type="submit" class="btn btn-primary btn-sm pull-right">
								Siguiente <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- fin: FORGOT BOX -->
			<!-- inicio: REGISTER BOX -->
			<div class="box-register">
				<h3><center>Crea tu cuenta</center></h3>
				<center><p>
					Introduzca sus datos personales:
				</p></center>
				<form class="form-register">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> Usted intrudujo algún dato erróneo. Por favor verifique.
					</div>
					<fieldset>
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Nombre">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="lastname" placeholder="Apellido">
						</div>
						<div class="form-group">
							<select id="signUp_IDType" class="float-leftmargin-select" name="signUp.IPType">
								<option value="C.I.">C.I
							</select>
							<select id="IDLetter" class="float-left margin-select" name="IDLetter">
								<option value="V E">V<>E</option>
							</select>
							<input id="signUp_IDNumber" class="docInput text" maxlength="8" value="" name="SignUp.IDNumber" placeholder="Nº de Documento"></input>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Dirección">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="Ciudad">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="cell" placeholder="Celular">
							<p class="ch-form-hint">Código + Nº. Ej.: 04XX 1234567</p>
						</div>
						<div class="form-group">
							<center><div>
								<label class="radio-inline">
									<input type="radio" class="grey" value="F" name="gender">
									Femenino
								</label>
								<label class="radio-inline">
									<input type="radio" class="grey" value="M" name="gender">
									Masculino
								</label>
							</div></center>
						</div>
						<center><p>
							Introduzca los datos de su cuenta:
						</p></center>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Correo Electrónico">
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" name="password_again" placeholder="Confirmar su contraseña">
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<div>
								<label for="agree" class="checkbox-inline">
									<input type="checkbox" class="grey agree" id="agree" name="agree">
									Estoy de acuerdo con los términos del servicio y la política de privacidad
								</label>
							</div>
						</div>
						<div class="form-actions">
							<a class="btn btn-light-grey btn-sm go-back">
								<i class="fa fa-circle-arrow-left"></i> Atras
							</a>
							<button type="submit" class="btn btn-primary btn-sm pull-right">
								Siguiente <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- fin: REGISTER BOX -->
			<!-- inicio: COPYRIGHT -->
			<div class="copyright">
				2015 &copy; by Equipo 2.
			</div>
			<!-- fin: COPYRIGHT -->
		</div>
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
		<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="js/login.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
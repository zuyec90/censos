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
			<h1 style= "text-align: center;"><b>Sistema de Control de Censo Poblacional</b></h1>
			<div class="logo"><h3>Consejo Comunal</h3><center><img src="../../upload/logo1.png" width="70" height="70" class="img-rounded"></center></i><h3>"Santa Inés"</h3>
			</div>
			<!-- inicio: LOGIN BOX -->
			<div class="box-login">
				<h4><center>Inicie sesión para acceder al sistema</center></h4>
				<p><center>Por favor, introduzca su usuario y contraseña para iniciar sesión.</center></p>
				<form action="../lib/Userlogin.php" method="post">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> Usted intrudujo algún dato erróneo. Por favor verifique.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="usuario" placeholder="Usuario">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="contrasenia" placeholder="Contraseña">
								<i class="fa fa-lock"></i>
								<a class="forgot" href="recuperar_contrasenia.php">Olvide mi contraseña</a>
							</span>
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
					</fieldset>
				</form>
			</div>
			<!-- fin: LOGIN BOX -->

			<!-- inicio: COPYRIGHT -->
			<div class="copyright">
				2015 &copy; Elaborado por el Colegio Universitario Francisco de Miranda para el Consejo Comunal "Santa Ines".(N.B., G.G., E.S., Z.V.)
			</div>
			<!-- fin: COPYRIGHT -->
		</div>

		<!-- inicio: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="../../plugins/respond.min.js"></script>
		<script src="../../plugins/excanvas.min.js"></script>
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
		<script src="../../plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../js/login.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	</td>
	</tr>
	</table>
	<!-- fin: BODY -->
</html>
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
		
			<div class="logo"><h4><b>Consejo Comunal</b></h4></h4><center><img src="../../upload/logo1.png" width="70" height="70" class="img-rounded"></center></i><h4><b>"Santa Inés"</b></h4>
			</div>
			<!-- inicio: LOGIN BOX -->
			<center><div class="row">
						<div class="col-sm-8">
							<!-- start: FORM WIZARD PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									
									Recuperar Contraseña
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
									<form action="#" role="form" class="smart-wizard form-horizontal" id="form">
										<div id="wizard" class="swMain">
											<ul>
												<li>
													<a href="#step-1">
														<div class="stepNumber">
															1
														</div>
														<span class="stepDesc"> Paso 1
															<br />
															<small>Introducir Correo Electrónico o Usuario</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-2">
														<div class="stepNumber">
															2
														</div>
														<span class="stepDesc"> Paso 2
															<br />
															<small>Preguntas de Seguridad</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-3">
														<div class="stepNumber">
															3
														</div>
														<span class="stepDesc"> Paso 3
															<br />
															<small>Cambio de Contraseña</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-4">
														<div class="stepNumber">
															4
														</div>
														<span class="stepDesc"> Paso 4
															<br />
															<small>Cambio Exitoso</small> </span>
													</a>
												</li>
											</ul>
											<div class="progress progress-striped active progress-sm">
												<div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar progress-bar-success step-bar">
													<span class="sr-only"> 0% Complete (success)</span>
												</div>
											</div>
											<div id="step-1">
												<h2 class="StepTitle">Introducir Correo Electrónico o Usuario</h2><br>
												
												<div class="form-group">
													<label class="col-sm-10 control-label">
														Por favor, introduzca su Correo Electrónico para proceder a la verificación de la cuenta.

													</label>
													<br><br><br><br>
													<label class="col-sm-3 control-label">
														Email <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="email" class="form-control" id="email" name="email" placeholder="Introduzca electrónico asociado a la cuenta">
													</div>
												</div>	
												<div class="form-group">
													<label class="col-sm-10 control-label">
														En caso de no Recordar su correo Electrónico debe comunicarse con el Administrador.

													</label>
													<br><br>									
												
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															Siguiente <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
											<div id="step-2">
												<h2 class="StepTitle">Preguntas de Seguridad</h2>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														full_name <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Text Field">
													</div>
												</div>											
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Address <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="address" name="address" placeholder="Text Field">
													</div>
												</div>												
												<div class="form-group">
													<label class="col-sm-3 control-label">
														City <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="city" name="city" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-light-grey back-step btn-block">
															<i class="fa fa-circle-arrow-left"></i> Back
														</button>
													</div>
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-blue next-step btn-block">
															Siguiente <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
											<div id="step-3">
												<h2 class="StepTitle">Cambio de Contraseña</h2>
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
								<input type="password" class="form-control password" id="contrasenia" name="contrasenia" placeholder="Contraseña">
								<i class="fa fa-lock"></i>
												</div>
												
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-light-grey back-step btn-block">
															<i class="fa fa-circle-arrow-left"></i> Back
														</button>
													</div>
													<div class="col-sm-2 col-sm-offset-3">
														<button class="btn btn-blue next-step btn-block">
															Next <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
											<div id="step-4">
												<h2 class="StepTitle">Step 4 Title</h2>
												<h3>Account</h3>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Username:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="username"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Email:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="email"></p>
													</div>
												</div>
												<h3>Profile</h3>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Fullname:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="full_name"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Gender:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="gender"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Phone:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="phone"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Address:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="address"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														City:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="city"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Country:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="country"></p>
													</div>
												</div>
												<h3>Billing</h3>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Card Name:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="card_name"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Card Number:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="card_number"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														CVC:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="card_cvc"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Expiration:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="card_expiry"></p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Payment Options:
													</label>
													<div class="col-sm-7">
														<p class="form-control-static display-value" data-display="payment"></p>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-success finish-step btn-block">
															Finish <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- end: FORM WIZARD PANEL -->
						</div>
					</div></center>
			<!-- fin: LOGIN BOX -->
			<!-- inicio: FORGOT BOX -->
			
			<!-- fin: FORGOT BOX -->
			<!-- inicio: REGISTER BOX -->
			
			<!-- fin: REGISTER BOX -->
			<!-- inicio: COPYRIGHT -->
			<div class="copyright">
				2015 &copy; Elaborado por el Colegio Universitario Francisco de Miranda para el Consejo Comunal "Santa Ines".(N.B., G.G., E.S., Z.V.)
			</div>
			<!-- fin: COPYRIGHT -->
		

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
		<script src="../../plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
		<script src="../../js/form-wizard.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormWizard.init();
			});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
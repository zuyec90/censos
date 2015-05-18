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
									<h2><i class="fa fa-pencil-square teal"></i> REGISTRO</h2>
									<p>
										Crea una cuenta para gestionar todo lo que haces.
									</p>
									<hr>
									<form action="#" role="form" id="form2">
										<div class="row">
											<div class="col-md-12">
												<div class="errorHandler alert alert-danger no-display">
													<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
												</div>
												<div class="successHandler alert alert-success no-display">
													<i class="fa fa-ok"></i> Your form validation is successful!
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">
														First Name <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Insert your First Name" class="form-control" id="firstname2" name="firstname2">
												</div>
												<div class="form-group">
													<label class="control-label">
														Last Name <span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname2" name="lastname2">
												</div>
												<div class="form-group">
													<label class="control-label">
														Email Address <span class="symbol required"></span>
													</label>
													<input type="email" placeholder="Text Field" class="form-control" id="email2" name="email2">
												</div>
												<div class="form-group">
													<label class="control-label">
														Occupation <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="occupation" id="occupation">
												</div>
												<div class="form-group">
													<label class="control-label">
														Dropdown <span class="symbol required"></span>
													</label>
													<select class="form-control" id="dropdown" name="dropdown">
														<option value="">Select...</option>
														<option value="Category 1">Category 1</option>
														<option value="Category 2">Category 2</option>
														<option value="Category 3">Category 5</option>
														<option value="Category 4">Category 4</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">
														Services <em>(select at least two)</em> <span class="symbol required"></span>
													</label>
													<div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="services" id="service1">
																Service 1
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="services"  id="service2">
																Service 2
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="services"  id="service3">
																Service 3
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="services"  id="service4">
																Service 4
															</label>
														</div>
													</div>
												</div>
												<div class="form-group connected-group">
													<label class="control-label">
														Credit Card <em>(e.g: 0000 0000 0000 0000)</em> <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" id="creditcard" name="creditcard">
												</div>
												<div class="form-group connected-group">
													<label class="control-label">
														URL <em>(e.g: http://www.yoursite.com)</em> <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" id="url" name="url">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">
																Zip Code <span class="symbol required"></span>
															</label>
															<input class="form-control" type="text" name="zipcode2" id="zipcode2">
														</div>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label">
																City <span class="symbol required"></span>
															</label>
															<input class="form-control tooltips" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city2" id="city2">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">
														Summernote <span class="symbol required"></span>
													</label>
													<div class="summernote"></div>
													<textarea class="form-control no-display" id="editor1" name="editor1" cols="10" rows="10"></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">
														Ckeditor <span class="symbol required"></span>
													</label>
													<textarea class="ckeditor form-control" id="editor2" name="editor2" cols="10" rows="10"></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div>
													<span class="symbol required"></span>Required Fields
													<hr>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<p>
													By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
												</p>
											</div>
											<div class="col-md-4">
												<button class="btn btn-yellow btn-block" type="submit">
													Register <i class="fa fa-arrow-circle-right"></i>
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
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="assets/js/form-validation.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormValidator.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>
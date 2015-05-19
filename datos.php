<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
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
						<div class="col-sm-12">
							<!-- inicio: STYLE SELECTOR BOX -->
							<div id="style_selector" class="hidden-xs">
								<div id="style_selector_container">
									<div class="style-main-title">
										Style Selector
									</div>
									<div class="box-title">
										Choose Your Layout Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="layout">
												<option value="default">Wide</option><option value="boxed">Boxed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Header Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="header">
												<option value="fixed">Fixed</option><option value="default">Default</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Footer Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="footer">
												<option value="default">Default</option><option value="fixed">Fixed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Backgrounds for Boxed Version
									</div>
									<div class="images boxed-patterns">
										<a id="bg_style_1" href="#"><img alt="" src="images/bg.png"></a>
										<a id="bg_style_2" href="#"><img alt="" src="images/bg_2.png"></a>
										<a id="bg_style_3" href="#"><img alt="" src="images/bg_3.png"></a>
										<a id="bg_style_4" href="#"><img alt="" src="images/bg_4.png"></a>
										<a id="bg_style_5" href="#"><img alt="" src="images/bg_5.png"></a>
									</div>
									<div class="box-title">
										5 Predefined Color Schemes
									</div>
									<div class="images icons-color">
										<a id="light" href="#"><img class="active" alt="" src="images/lightgrey.png"></a>
										<a id="dark" href="#"><img alt="" src="images/darkgrey.png"></a>
										<a id="black_and_white" href="#"><img alt="" src="images/blackandwhite.png"></a>
										<a id="navy" href="#"><img alt="" src="images/navy.png"></a>
										<a id="green" href="#"><img alt="" src="images/green.png"></a>
									</div>
									<div class="box-title">
										Style it with LESS
									</div>
									<div class="images">
										<div class="form-group">
											<label>
												Basic
											</label>
											<input type="text" value="#ffffff" class="color-base">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #ffffff"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Text
											</label>
											<input type="text" value="#555555" class="color-text">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #555555"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Elements
											</label>
											<input type="text" value="#007AFF" class="color-badge">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #007AFF"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div style="height:25px;line-height:25px; text-align: center">
										<a class="clear_style" href="#">
											Clear Styles
										</a>
										<a class="save_style" href="#">
											Save Styles
										</a>
									</div>
								</div>
								<div class="style-toggle close"></div>
							</div>
							<!-- fin: STYLE SELECTOR BOX -->
							<!-- inicio: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-pencil"></i>
									<a href="#">
										Datos
									</a>
								</li>
								<li class="active">
									Jefe de Familia
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Datos <small>Jefe de Familia</small></h1>
							</div>
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!-- inicio: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<!-- inicio: FORM WIZARD PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Datos Personales del Jefe del Grupo Familiar
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
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
															<small>Step 1 description</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-2">
														<div class="stepNumber">
															2
														</div>
														<span class="stepDesc"> Paso 2
															<br />
															<small>Step 2 description</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-3">
														<div class="stepNumber">
															3
														</div>
														<span class="stepDesc"> Paso 3
															<br />
															<small>Step 3 description</small> </span>
													</a>
												</li>
												<li>
													<a href="#step-4">
														<div class="stepNumber">
															4
														</div>
														<span class="stepDesc"> Paso 4
															<br />
															<small>Step 4 description</small> </span>
													</a>
												</li>
											</ul>
											<div class="progress progress-striped active progress-sm">
												<div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar progress-bar-success step-bar">
													<span class="sr-only"> 0% Complete (success)</span>
												</div>
											</div>
											<div id="step-1">
												<h2 class="StepTitle">Paso 1 </h2>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Nombres <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="username" name="username" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Apellidos <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="username" name="username" placeholder="Text Field">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Cedúla <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="f" name="gender" id="gender_v" >
															V
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="gender"  id="gender_e">
															E
														</label>
														<div class="col-sm-4">
																<input type="text" class="form-control" name="gender" id="gender" placeholder="">
														</div>

													</div>
												</div>
												
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Fecha de Nacimiento <span class="symbol required"></span>
													</label>

													<div class="col-sm-4">
														<div class="row">
															<div class="col-sm-4">
																<select class="form-control" id="card_expiry_mm" name="card_expiry_mm">
																	<option value="">DD</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-4">
																<select class="form-control" id="card_expiry_mm" name="card_expiry_mm">
																	<option value="">MM</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-sm-4">
																<input type="text" class="form-control" name="card_expiry_yyyy" id="card_expiry_yyyy" placeholder="AAAA">
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
														<button class="btn btn-blue next-step btn-block">
															Siguiente <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
											<div id="step-2">
												<h2 class="StepTitle">Step 2 Content</h2>
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
														Phone Number <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="phone" name="phone" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Gender <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<label class="radio-inline">
															<input type="radio" class="grey" value="f" name="gender" id="gender_female" >
															Female
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="gender"  id="gender_male">
															Male
														</label>
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
														Country <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<select class="form-control" id="country" name="country">
															<option value="">&nbsp;</option>
															<option value="Country 1">Country 1</option>
															<option value="Country 2">Country 2</option>
															<option value="Country 3">Country 3</option>
														</select>
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
															Next <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</div>
											<div id="step-3">
												<h2 class="StepTitle">Step 3 Title</h2>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Card Holder Name <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="card_name" name="card_name" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Card Number <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<input type="text" class="form-control" id="card_number" name="card_number" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														CVC <span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
														<input type="text" class="form-control" id="card_cvc" name="card_cvc" placeholder="Text Field">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Expiration(MM/YYYY) <span class="symbol required"></span>
													</label>
													<div class="col-sm-4">
														<div class="row">
															<div class="col-sm-4">
																<select class="form-control" id="card_expiry_mm" name="card_expiry_mm">
																	<option value="">MM</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-sm-4">
																<input type="text" class="form-control" name="card_expiry_yyyy" id="card_expiry_yyyy" placeholder="YYYY">
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">
														Payment Options <span class="symbol required"></span>
													</label>
													<div class="col-sm-7">
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="payment" id="payment1">
																Auto-Pay with this Credit Card
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="payment"  id="payment2">
																Email me monthly billing
															</label>
														</div>
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
							<!-- fin: FORM WIZARD PANEL -->
						</div>
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
		<script src="plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
		<script src="js/form-wizard.js"></script>
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
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

							<!-- inicio: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-pencil"></i>
									<a href="consultaperfil">
										Consulta / Censo
									</a>
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
								<h1>Consulta</h1>
							</div>
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!-- inicio: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel-body">
									<table class="table sliders table-striped">
										<tbody>
											<tr>
												<td style="width:5%">Edad</td>
												<td style="width:10%">
													<div class="example">
														<div id="slider_example_1" class="slider-teal"></div>
													</div>
												</td>
												<td style="width:5%">Sexo</td>
												<td style="width:10%">
													<div class="example">
														<label class="radio-inline">
															<input type="radio" class="grey" value="f" name="sexo" id="sexo" >
															F
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="m" name="sexo"  id="sexo">
															M
														</label>
													</div>
												</td>
												<td style="width:5%">Pensionado</td>
												<td style="width:10%">
													<div class="example">
														<label class="radio-inline">
															<input type="radio" class="grey" value="si" name="pensionado" id="pensionado" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="no" name="pensionado"  id="pensionado">
															No
														</label>

													</div>
												</td>
												<td style="width:5%">Discapacidad</td>
												<td style="width:10%">
													<div class="example">
														<label class="radio-inline">
															<input type="radio" class="grey" value="si" name="incapacitado" id="incapacitado" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="no" name="incapacitado"  id="incapacitado">
															No
														</label>
													</div>
												</td>
												<td style="width:5%">Trabajo</td>
												<td style="width:10%">
													<div class="example">
														<label class="radio-inline">
															<input type="radio" class="grey" value="si" name="trabaja" id="trabaja" >
															Si
														</label>
														<label class="radio-inline">
															<input type="radio" class="grey" value="no" name="trabaja"  id="trabaja">
															No
														</label>
													</div>
												</td>

											</tr>
										</tbody>
									</table>
									<a href="#" id="Reporte" class="btn btn-green btn-lg btn-block"> Generar Reporte</a>
							</div>
						</div>
					</div>
					<div class="row" id="respuesta">
						<div class="col-md-12">
							<!-- start: LABEL FORMATTER PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Label Formatter
								</div>
								<div class="panel-body">
									<div class="flot-small-container">
										<div id="placeholder82" class="flot-placeholder"></div>
									</div>
								</div>
							</div>
							<!-- end: LABEL FORMATTER PANEL -->
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
		<script src="../../plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
		<script src="../../plugins/jQRangeSlider/jQAllRangeSliders-min.js"></script>
		<script src="../../plugins/jQuery-Knob/js/jquery.knob.js"></script>
		<script src="../../js/ui-sliders.js"></script>
		<script src="../../plugins/flot/jquery.flot.js"></script>
		<script src="../../plugins/flot/jquery.flot.resize.js"></script>
		<script src="../../plugins/flot/jquery.flot.categories.js"></script>
		<script src="../../plugins/flot/jquery.flot.pie.js"></script>


		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				//Charts.init();
				UISliders.init();


			$('#Reporte').click(function() {

			var sexo = $('#sexo').val();
			var pensionado = $('#pensionado').val();
			var incapacitado = $('#incapacitado').val();
			var trabaja = $('#trabaja').val();
			var url = '../lib/CensoReporte.php';

			$.post(url,{'id_notificacion':id_notificacion},function(respondText){

			});

			});
		});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
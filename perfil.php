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
								<li>
									<i class="clip-file"></i>
									<a href="#">
										Perfil
									</a>
								</li>
								<li class="active">
									Usuario
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
								<h1>Ulises Robles <small>Administrador</small></h1>
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
																<div class="fileupload-new thumbnail"><img src="upload/765-default-avatar.png" alt="" style="max-width: 200px; max-height: 150px; line-height: 20px;">
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
																	usuario@ejemplo.com
																</a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Telefono:</td>
																<td>(0418)-123-4567</td>
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
																<td>Unidad</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Usuario</td>
																<td><span class="label label-sm label-info">Administrador</span></td>
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
															<i class="clip-bubble-2"></i>
															Mensajes <span class="badge badge-info"> 23 </span>
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
																	<img alt="image" src="upload/default_avatar_small.png">
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
										<form action="#" role="form" id="form">
											<div class="row">
												<div class="col-md-12">
													<h3>Información de Cuenta</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															Nombre Completo
														</label>
														<input type="text" placeholder="Pedro Perez" class="form-control" id="firstname" name="firstname">
													</div>
													<div class="form-group">
														<label class="control-label">
															Correo Electronico
														</label>
														<input type="email" placeholder="correo@ejemplo.com" class="form-control" id="email" name="email">
													</div>
													<div class="form-group">
														<label class="control-label">
															Telefono
														</label>
														<input type="email" placeholder="(0418)-123-4567" class="form-control" id="phone" name="email">
													</div>
													<div class="form-group">
														<label class="control-label">
															Clave
														</label>
														<input type="password" placeholder="password" class="form-control" name="password" id="password">
													</div>
													<div class="form-group">
														<label class="control-label">
															Confirmación de Clave
														</label>
														<input type="password"  placeholder="password" class="form-control" id="password_again" name="password_again">
													</div>
													<div class="form-group">
														<label class="control-label">
															Voceria
														</label>
														<input type="password"  placeholder="voceria" class="form-control" id="password_again" name="password_again">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group connected-group">
														<label class="control-label">
															Fecha de Nacimiento
														</label>
														<div class="row">
															<div class="col-md-3">
																<select name="dd" id="dd" class="form-control" >
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
																	<option value="21" selected="selected">21</option>
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
															<div class="col-md-3">
																<select name="mm" id="mm" class="form-control" >
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
																	<option value="10" selected="selected">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-md-3">
																<input type="text" placeholder="AÑO" id="yyyy" name="yyyy" class="form-control">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">
															Sexo
														</label>
														<div>
															<label class="radio-inline">
																<input type="radio" class="grey" value="" name="gender" id="gender_female">
																Femenino
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="" name="gender"  id="gender_male" checked="checked">
																Masculino
															</label>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">
																	Código de área
																</label>
																<input class="form-control" placeholder="12345" type="text" name="zipcode" id="zipcode">
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<label class="control-label">
																	Ciudad
																</label>
																<input class="form-control tooltips" placeholder="Caracas" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city" id="city">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label>
															Cargar imagen 
														</label>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="upload/765-default-avatar.png" alt="">
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
												</div>
											</div>
											
											<div class="row">

												<div class="col-md-4">
													<br>
													<button class="btn btn-teal btn-block" type="submit">
														Continuar <i class="fa fa-arrow-circle-right"></i>
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
		<script src="plugins/flot/jquery.flot.js"></script>
		<script src="plugins/flot/jquery.flot.pie.js"></script>
		<script src="plugins/flot/jquery.flot.resize.min.js"></script>
		<script src="plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<script src="plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
		<script src="js/index.js"></script>
		<!-- fin: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
	</body>
	<!-- fin: BODY -->
</html>
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
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- inicio: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- inicio: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- fin: RESPONSIVE MENU TOGGLER -->
					<!-- inicio: LOGO -->
					<a class="nvbar-brand" href="home.php">
						<img src="upload/logo1.png" class="rounded-img" width="55" height="50"> Consejo Comunal "Santa Inés"
					</a>
					<!-- fin: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- inicio: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- inicio: MESSAGE DROPDOWN -->
						<li class="dropdown">
							<a class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown" href="#">
								<i class="clip-bubble-3"></i>
								<span class="badge"> 9</span>
							</a>
							<ul class="dropdown-menu posts">
								<li>
									<span class="dropdown-menu-title"> Tiene 9 mensajes</span>
								</li>
								<li>
									<div class="drop-down-wrapper">
										<ul>
											<li>
												<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img class="img-rounded" alt="" src="upload/default_avatar_small.png">
														</div>
														<div class="thread-content">
															<span class="author">Elvia</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
															<span class="time"> Ahora</span>
														</div>
													</div>
												</a>
											</li>											
											<li>
												<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img alt="" src="upload/default_avatar_small.png">
														</div>
														<div class="thread-content">
															<span class="author">Yasmin</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
															<span class="time">9 hrs</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img alt="" src="upload/default_avatar_small.png">
														</div>
														<div class="thread-content">
															<span class="author">Ulises Robles</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
															<span class="time">14 hrs</span>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="view-all">
									<a href="pages_messages.html">
										Todos los Mensajes <i class="fa fa-arrow-circle-o-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<!-- fin: MESSAGE DROPDOWN -->
						<!-- inicio: USER DROPDOWN -->
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img src="upload/765-default-avatar.png" width="30" height="30" class="circle-img" alt="">
								<span class="username">Ulises Robles</span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="pages_user_profile.html">
										<i class="clip-user-2"></i>
										&nbsp;Perfil
									</a>
								</li>
								<li>
									<a href="pages_calendar.html">
										<i class="clip-calendar"></i>
										&nbsp;Calendario
									</a>
								<li>
									<a href="pages_messages.html">
										<i class="clip-bubble-4"></i>
										&nbsp;Mensajes
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="utility_lock_screen.html"><i class="clip-locked"></i>
										&nbsp;Contraseña </a>
								</li>
								<li>
									<a href="login_example1.html">
										<i class="clip-exit"></i>
										&nbsp;Salir
									</a>
								</li>
							</ul>
						</li>
						<!-- fin: USER DROPDOWN -->
					</ul>
					<!-- fin: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- fin: TOP NAVIGATION CONTAINER -->
		</div>
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
					<ul class="main-navigation-menu">
						<li>
							<a href="home.php"><i class="clip-home-3"></i>
								<span class="title"> Inicio </span>
								<span class="selected"></span>
							</a>
						</li>
						<li class="active open">
							<a href="data.php"><i class="clip-user-2"></i>
								<span class="title"> Usuario </span>
								<span class="selected"></span>
							</a>
						</li>
						<li>
							<a href="dataCensos.php"><i class="clip-pencil"></i>
								<span class="title"> Censos </span>
								<span class="selected"></span>
							</a>
						</li>
					</ul>
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
									<a href="data.php">
										Usuario
									</a>
								</li>
								<li class="active">
									Lista de Usuarios
								</li>
								
							</ol>
							<div class="page-header">
								<h1> Lista <small>de Usuarios</small></h1>
								<a href="form_registro.php"><button type="button" class="btn btn-info"><i class="clip-data">&nbsp;Crear Usuarios</i></button></a>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: DYNAMIC TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
								<strong>Usuarios</strong>
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
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
												<th>N°&nbsp; &nbsp; </th>
												<th>Foto</th>
												<th>Nombre Completo</th>
												<th class="hidden-xs">Usuario</th>
												<th>Cargo</th>
												<th class="hidden-xs"> E-mail </th>
												<th>Opciones</th>
											</tr>
										</thead>
										<tbody>
											<tr>	
												<td>1</td>											
												<td>
													<a href="perfil.php">
													<img src="images/avatar-1.jpg" alt="image"/></a>
													</td>
												<td>Ulises</td>
												<td class="hidden-xs">Google</td>
												<td>Vocero en el area Financiera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Elimina">
													<i class="fa fa-trash-o"></i></a>													
												</td>
											</tr>
											<tr>
												<td>2</td>												
												<td>
													<a href="perfil.php">
													<img src="images/avatar-2.jpg" alt="image"/></a>
													</td>
												<td>Yailet</td>
												<td class="hidden-xs">Opera Software</td>
												<td>Vocera en el area de Cultura</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Eliminar">
													<i class="fa fa-trash-o"></i></a>												
												</td>
											</tr>
											<tr>
												<td>3</td>												
												<td>
													<a href="perfil.php">
													<img src="images/avatar-3.jpg" alt="image"/></a>
												</td>
												<td>Mario</td>
												<td class="hidden-xs">Apple Inc.</td>
												<td>Vocero en el area financiera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Eliminar">
													<i class="fa fa-trash-o"></i></a>													
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>
													<a href="perfil.php">
													<img src="images/avatar-4.jpg" alt="image"/></a>
													</td>
												<td>Elvira</td>
												<td class="hidden-xs">Dieter Plaetinck</td>
												<td>Vocera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Eliminar">
													<i class="fa fa-trash-o"></i></a>												
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>
													<a href="perfil.php">													
													<img src="images/avatar-3.jpg" alt="image"/></a>
													</td>
												<td>Carmen</td>
												<td class="hidden-xs">Tim Berners-Lee</td>
												<td>Vocera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Eliminar">
													<i class="fa fa-trash-o"></i></a>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>
													<a href="perfil.php">													
													<img src="images/avatar-5.jpg" alt="image"/></a>
													</td>
												<td>Yasmín</td>
												<td class="hidden-xs">Akinori Ito</td>
												<td>Vocera</td>
												<td class="hidden-xs">---------@-----.com</td>
												<td>													
													<a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar" style= "margin-left: 45px;">
													<i class="fa fa-edit"></i></a>&nbsp;
													<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Eliminar">
													<i class="fa fa-trash-o"></i></a>													
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: DYNAMIC TABLE PANEL -->
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
		<script type="text/javascript" src="plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="js/table-data.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>
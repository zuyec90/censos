<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![finalif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![finalif]-->
<!--[if !IE]><!-->
<html lang="es" class="no-js">
	<!--<![finalif]-->
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
					<!-- final: MAIN MENU TOGGLER BUTTON -->
					<!-- inicio: MAIN NAVIGATION MENU -->
					<?php require_once('menu.php'); ?>
					<!-- fin: MAIN NAVIGATION MENU -->
				</div>
				<!-- final: SIDEBAR -->
			</div>
			<!-- inicio: PAGE -->
			<div class="main-content">
				<!-- inicio: ELIMINAR MENSAJE MODAL FORM -->
				<div class="modal fade" id="eliminar-mensaje" tabindex="-1" role="dialog" aria-hidden="true">
					
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Eliminar Mensaje</h4>
							</div>
							<div class="modal-body">
								Desea eliminar este mensaje?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="button"class="btn btn-danger">Eliminar</button>
							</div>
						</div>
						<!-- /.modal-content -->
					
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- final: ELIMINAR MENSAJE MODAL FORM -->
				<div class="container">
<!-- inicio: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- inicio: STYLE SELECTOR BOX -->
							<div id="style_selector" class="hidden-xs">
								<div id="style_selector_container">
									<div class="style-main-title">
										Selector de estilo
									</div>
									<div class="box-title">
										Elija su estilo de diseño
									</div>
									<div class="input-box">
										<div class="input">
											<select name="layout">
												<option value="default">Ancho</option><option value="boxed">Caja</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Elija su estilo de encabezado
									</div>
									<div class="input-box">
										<div class="input">
											<select name="header">
												<option value="fixed">Fijo</option><option value="default">Predefinido</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Elija su estilo de pie de página
									</div>
									<div class="input-box">
										<div class="input">
											<select name="footer">
												<option value="default">Predefinido</option><option value="fixed">Fijo</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Fondos
									</div>
									<div class="images boxed-patterns">
										<a id="bg_style_1" href="#"><img alt="" src="images/bg.png"></a>
										<a id="bg_style_2" href="#"><img alt="" src="images/bg_2.png"></a>
										<a id="bg_style_3" href="#"><img alt="" src="images/bg_3.png"></a>
										<a id="bg_style_4" href="#"><img alt="" src="images/bg_4.png"></a>
										<a id="bg_style_5" href="#"><img alt="" src="images/bg_5.png"></a>
									</div>
									<div class="box-title">
										5 Esquemas predefinidos de colores
									</div>
									<div class="images icons-color">
										<a id="light" href="#"><img class="active" alt="" src="images/lightgrey.png"></a>
										<a id="dark" href="#"><img alt="" src="images/darkgrey.png"></a>
										<a id="black_and_white" href="#"><img alt="" src="images/blackandwhite.png"></a>
										<a id="navy" href="#"><img alt="" src="images/navy.png"></a>
										<a id="green" href="#"><img alt="" src="images/green.png"></a>
									</div>
									<div class="box-title">
										Diseñar estilo de esquema
									</div>
									<div class="images">
										<div class="form-group">
											<label>
												Básico
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
												Texto
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
												Elemento
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
											Borrar estilo
										</a>
										<a class="save_style" href="#">
											Guardar estilo
										</a>
									</div>
								</div>
								<div class="style-toggle close"></div>
							</div>
							<!-- fin: STYLE SELECTOR BOX -->
							<!-- inicio: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-file"></i>
									<a href="perfil.php">
										Perfil
									</a>
								</li>
								<li class="active">
									Mensajes
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
								<h1>Mensajes</h1>
							</div>
							<!-- fin: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- fin: PAGE HEADER -->
					<!-- inicio: PAGE CONTENT -->
					<!-- inicio: BOOTSTRAP EXTfinalED MODALS PANEL -->
					<div class="panel-body">
						<a href="#responsive" data-toggle="modal" class="demo btn btn-primary"><i class="fa fa-envelope-o">&nbsp;&nbsp;</i>Crear Mensaje</a>
					</div>
					<!-- final: BOOTSTRAP EXTfinalED MODALS PANEL -->
					<br>
					<!-- inicio: INBOX PANEL -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-envelope-o"></i>
								Bandeja de entrada
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#"></a>
										<a class="btn btn-xs btn-link panel-refresh" href="#"><i class="fa fa-refresh"></i></a>
										<a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-resize-full"></i></a>
										<a class="btn btn-xs btn-link panel-close" href="#"><i class="fa fa-times"></i></a>
									</div>
						</div>
						<div class="panel-body messages">
							<ul class="messages-list">
								<li class="messages-search">
									<form action="#" class="form-inline">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Busqueda de mensaje...">
												<div class="input-group-btn">
													<button class="btn btn-primary" type="button">
															<i class="fa fa-search"></i>
													</button>
												</div>
										</div>
									</form>
								</li>
								<li class="messages-item">
									<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
										<img src="upload/765-default-avatar.png" class="messages-item-avatar">
											<span class="messages-item-from">Ulises Robles</span>
											<div class="messages-item-time">
												<span class="text">10:23 PM</span>
												<div class="messages-item-actions">
													<a data-toggle="dropdown" title="Reply" href="#"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Move to folder" href="#"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#">
																	<i class="fa fa-pencil"></i>
																	Marcar como leído
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-ban"></i>
																	Correo no deseado
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-trash-o"></i>
																	Borrar
																</a>
															</li>
														</ul>
													</div>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Attach to tag" href="#"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#"><i class="tag-icon red"></i>Important</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon teal"></i>Work</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon green"></i>Home</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Lorem ipsumdolor sit amet ...</span>
											<span class="messages-item-preview">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera ...</span>
										</li>
										<li class="messages-item active starred">
											<span title="Remove star" class="messages-item-star"><i class="fa fa-star"></i></span>
											<img src="upload/default_avatar_female.jpg" class="messages-item-avatar">
											<span class="messages-item-from">Yaylet Rojas</span>
											<div class="messages-item-time">
												<span class="text">08:46 PM</span>
												<div class="messages-item-actions">
													<a data-toggle="dropdown" title="Reply" href="#"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Move to folder" href="#"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#">
																	<i class="fa fa-pencil"></i>
																	Marcar como leído
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-ban"></i>
																	Correo no desado
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-trash-o"></i>
																	Borrar
																</a>
															</li>
														</ul>
													</div>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Attach to tag" href="#"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#"><i class="tag-icon red"></i>Important</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon teal"></i>Work</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon green"></i>Home</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Duis autem vel eum iriure ...</span>
											<span class="messages-item-preview">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera ...</span>
										</li>
										<li class="messages-item">
											<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
											<span class="messages-item-attachment"><i class="fa fa-paperclip"></i></span>
											<img src="upload/default_avatar_female.jpg" class="messages-item-avatar">
											<span class="messages-item-from">Yasmin Torres</span>
											<div class="messages-item-time">
												<span class="text">04:03 PM</span>
												<div class="messages-item-actions">
													<a data-toggle="dropdown" title="Reply" href="#"><i class="fa fa-mail-reply"></i></a>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Move to folder" href="#"><i class="fa fa-folder-open"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#">
																	<i class="fa fa-pencil"></i>
																	Marcar como leído
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-ban"></i>
																	Correo no deseado
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fa fa-trash-o"></i>
																	Borrar
																</a>
															</li>
														</ul>
													</div>
													<div class="dropdown">
														<a data-toggle="dropdown" title="Attach to tag" href="#"><i class="fa fa-tag"></i></a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="#"><i class="tag-icon red"></i>Important</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon teal"></i>Work</a>
															</li>
															<li>
																<a href="#"><i class="tag-icon green"></i>Home</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<span class="messages-item-subject">Lorem ipsumdolor sit amet ...</span>
											<span class="messages-item-preview">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera ...</span>
										</li>
									</ul>
									<div class="messages-content">
										<div class="message-header">
											<div class="message-time">
												11 NOV 2014, 11:46 PM
											</div>
											<div class="message-from">
												Nicole Bell &lt;nicole@example.com&gt;
											</div>
											<div class="message-to">
												To: Peter Clark
											</div>
											<div class="message-subject">
												New frontfinal layout
											</div>
											<div class="message-actions">
												<a title="Move to trash" class="btn btn-xs btn-link eliminar-mensaje" href="#eliminar-mensaje" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
												<a title="Reply" href="#"><i class="fa fa-reply"></i></a>
												<a title="Reply to all" href="#"><i class="fa fa-reply-all"></i></a>
												<a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>
											</div>
										</div>
										<div class="message-content">
											<p>
												<strong>Lorem ipsum</strong> dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
											</p>
											<p>
												Duis autem vel eum iriure dolor in hfinalrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleiffinal option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
												Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
											</p>
											<p>
												Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut blandit ligula. In accumsan mauris at augue feugiat consequat. Aenean consequat sem sed velit sagittis dignissim. Phasellus quis convallis est. Praesent porttitor mauris nec lectus mollis, eget sodales libero venenatis. Cras eget vestibulum turpis. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam turpis velit, tempor vitae libero ac, fermentum laoreet dolor.
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- fin: INBOX PANEL -->
						</div>
					</div>
					<!-- fin: PAGE CONTENT-->
				</div>
			</div>
			<!-- final: PAGE -->
		</div>
		<!-- final: MAIN CONTAINER -->
		<!-- inicio: FOOTER -->
		<?php require_once('footer.php'); ?>
		<!-- final: FOOTER -->
		<!-- inicio: BOOTSTRAP EXTfinalED MODALS -->
		<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">Escriba su mensaje</h4>
			</div>
			<form action="controlado_mensaje.php" method="post">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<p>
							<label for="name">Nombre:</label>
							<input name="nombre" type="text" id="nombre"  placeholder="Nombre del emisor" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 30px;"/>
						</p>
						<p>
						<label for="destinatario">Destinatario:</label>
							<select id="destino" name="destino" class="form-control" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 30px;">
								<option value="">&nbsp;</option>
								<option value="">Ulises Robles</option>
								<option value="">Yaylet Rojas</option>
								<option value="">Yasmin Torres</option>
							</select>
						</p>
						<p>
							<label for="mensaje">Mensaje:</label>
							<textarea placeholder="Escriba aquí su mensaje" name="mensaje" id="mensaje" class="form-control" style="margin: 0px -0.5px 0px 0px; width: 600px; height: 80px;"></textarea>
						</p>
					</div>
				</div>
			</div>
			</form>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-light-grey">
					Cancelar
				</button>
				<button type="button" class="btn btn-primary">
					Enviar
				</button>
			</div>
		</div>

		<div id="ajax-modal" class="modal fade" tabindex="-1" style="display: none;"></div>
		<!-- final: BOOTSTRAP EXTfinalED MODALS -->
		<!-- inicio: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="plugins/respond.min.js"></script>
		<script src="plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![finalif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![finalif]-->
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
		<!-- final: MAIN JAVASCRIPTS -->
		<!-- inicio: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="js/ui-modals.js"></script>
		<!-- final: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				UIModals.init();
			});
		</script>
	</body>
	<!-- final: BODY -->
</html>
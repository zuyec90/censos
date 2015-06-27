<?php
//error_reporting();
require_once ('../controller/MensajeController.php');
$MSJ = new Mensaje;
$resultado = $MSJ->Select();
?>
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
		<script type="text/javascript">

		function validar(){
        var nombre = document.getElementById("nombre").value;
        var destinatario = document.getElementById("destino").value;
        var mensaje = document.getElementById("mensaje").value;

        if(nombre ==""){
            alert("Debes de indicar el nombre");
            return;
        }
        if(destinatario ==""){
            alert("Debes escoger un destinatario");
            return;
        }
        if(mensaje ==""){
            alert("Debes escribir un mensaje");
            return;
        }
        document.getElementById("form").submit();
}
		</script>
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
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
					<!-- inicio: BOOTSTRAP EXTED MODALS PANEL -->
						<?php

							if(!empty($_POST)){
								if ($_POST['valor'] == '1' ) { ?>

									<div class="alert alert-success">
										<button data-dismiss="alert" class="close">
											&times;
										</button>
										<i class="fa fa-check-circle"></i>
										<strong>Su mensaje se ha enviado satisfactoriamente.</strong>
									</div>

									<?php
									}else{ ?>
									<div class="alert alert-danger">
										<button data-dismiss="alert" class="close">
											&times;
										</button>
										<i class="fa fa-check-circle"></i>
										<strong>Su mensaje no pudo ser enviado.</strong>
									</div>
							<?php	}
							} ?>
					<div class="panel-body">
						<a href="#responsive" data-toggle="modal" class="demo btn btn-primary"><i class="fa fa-envelope-o">&nbsp;&nbsp;</i>Crear Mensaje</a>
					</div>
					<!-- final: BOOTSTRAP EXTED MODALS PANEL -->
					<!-- inicio: BOOTSTRAP EXTED MODALS -->
					<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Escriba su mensaje</h4>
						</div>
						<form action="../lib/MensajeCrear.php" method="post" role="form" id="form">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-4">
										<label for="name">Nombre: Usuario</label>
										<input name="id_user" type="hidden" id="nombre"  value="5" placeholder="Nombre del emisor" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 30px;"/>
										<br>
										<label for="destinatario">Destinatario:</label>
											<select id="destino" name="id_user_rece" class="form-control" style="margin: 0px -0.5px 0px 0px; width: 300px; height: 30px;">
												<option value="">Seleccione un opción</option>
												<option value="1">Ulises Robles</option>
												<option value="2">Yaylet Rojas</option>
												<option value="3">Yasmin Torres</option>
											</select>
										<label for="mensaje">Mensaje:</label>
										<textarea placeholder="Escriba aquí su mensaje" name="mensaje" id="mensaje" class="form-control" style="margin: 0px -0.5px 0px 0px; width: 600px; height: 80px;"></textarea>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="button" value="Cancelar" data-dismiss="modal" class="btn btn-light-grey"></input>
								<input type="button" value="Enviar" class="btn btn-primary" onclick="validar()"></input>
							</div>
						</form>
					</div>
					<div id="ajax-modal" class="modal fade" tabindex="-1" style="display: none;"></div>
					<!-- final: BOOTSTRAP EXTED MODALS -->

					<!-- inicio: INBOX PANEL -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-envelope-o"></i>Bandeja de entrada
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
												<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
											</div>
										</div>
									</form>
								</li>
								<?php while($MSJS = mysql_fetch_assoc($resultado)) {
								 ?>
								<li id="msj" class="messages-item">

									<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
										<img src="../../upload/765-default-avatar.png" class="messages-item-avatar">
											<span class="messages-item-from"><?php echo $MSJS['id_user_rece'];?></span>
											<div class="messages-item-time">
												<input type="hidden" id="id_notificacion" name="id_notificacion" value="<?php echo $MSJS['id_user_rece'];?>">
												<span class="text"><?php echo $MSJS['fecha_creacion'];?></span>
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
																<a href="../lib/MensajeEliminar.php?id_user=<?php echo $users['id_user'];?>">
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

											<span class="messages-item-subject"><?php echo $MSJS['mensaje'];?></span>
											<span class="messages-item-preview"><?php echo $MSJS['mensaje'];?></span>

										</li>
										<?php } ?>
									</ul>

									<div class="messages-content">
										<div class="morecommentloader" style="display:none;">
											<img src="../../images/loading.gif">
										</div>
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
												<a title="Mover a la papelera" class="btn btn-xs btn-link eliminar-mensaje" href="#eliminar-mensaje" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
												<a title="Responder" href="#"><i class="fa fa-reply"></i></a>
												<a title="Responder a todos" href="#"><i class="fa fa-reply-all"></i></a>
												<a title="Siguiente" href="#"><i class="fa fa-long-arrow-right"></i></a>
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
		<!-- inicio: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="plugins/respond.min.js"></script>
		<script src="plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![finalif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![finalif]-->
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
		<!-- final: MAIN JAVASCRIPTS -->
		<!-- inicio: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="../../plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="../../plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="../../js/ui-modals.js"></script>
		<script src="../../plugins/bootstrap-paginator/src/bootstrap-paginator.js"></script>
		<script src="../../plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="../../plugins/gritter/js/jquery.gritter.min.js"></script>
		<script src="../../js/ui-elements.js"></script>
		<!-- final: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
		jQuery(document).ready(function() {
			Main.init();
			UIModals.init();
			UIElements.init();

		});
		$("#msj").click(function() {
			var id_notificacion = $("#id_notificacion").val();
			$.ajax({
				url: '../lib/MensajeIndividual.php',
				type: 'POST',
				dataType: 'json',
				data: {'id_notificacion':id_notificacion},
				beforeSend: function(){
					$('.morecommentloader').show();
				},
				success: function(responce){
					$('.morecommentloader').hide();
					$('.messages-content').html(responce);


					if (responce){
						var output = eval(responce);
				        $('.prvcmntcont').append(output[1]);
				        loadmoreajax = 1;
						loadmorecmntcnt += 10;
					}else{
						loadmore = 0;
				        loadmoreajax = 1;
				        $('.loadmorecomment').html('No more comments');
					}
				}
			});

		});



		</script>

	</body>
	<!-- final: BODY -->
</html>
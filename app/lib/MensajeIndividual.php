<?php
require_once ('../controller/MensajeController.php');
$MSJ = new Mensaje;
$resultado = $MSJ->Select($_POST['id_notificacion']);
$leidos = $MSJ->Leido($_POST['id_notificacion']);
$receptor = $MSJ->ConsultaReceptor($resultado['id_user_rece']);
$emisor = $MSJ->ConsultaReceptor($resultado['id_user']);
$cadena = $MSJ->Selecthijos($_POST['id_notificacion']);
session_start();
?>
		<div class="message-header">
			<div class="message-time">
			<?PHP echo $resultado['fecha_creacion']; ?>
			</div>
			<div class="message-from">
				Para: <?PHP echo $receptor['nombre']." ".$receptor['apellido'];  ?>
			</div>
			<div class="message-to">
				De: <?PHP echo $emisor['nombre']." ".$emisor['apellido'];  ?>
			</div>
			<div class="message-actions">
				<a title="Mover a la papelera" class="btn btn-xs btn-link eliminar-mensaje" href="#eliminar-mensaje" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
					<div class="modal fade" id="eliminar-mensaje" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Eliminar Mensajes</h4>
							</div>
							<div class="modal-body">
								Desea eliminar todos los mensajes de este usuario?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<a href="<?PHP echo "../lib/MensajeEliminar.php?id_notificacion=".$resultado['id_notificacion'];?>" name="id_notificacion" type="button"class="btn btn-danger" >Eliminar</a>
							</div>
						</div>
					</div>
				<a title="Responder" href="#id_respuesta" data-toggle="modal"><i class="fa fa-reply"></i></a>
			</div>
		</div>
		<div class="message-content">
		<p>
					<?php echo $resultado['mensaje']; ?>

				</p>
		</div>
		<?php while ($mensjaCadena = mysql_fetch_assoc($cadena) ) {

		$receptor = $MSJ->ConsultaReceptor($mensjaCadena['id_user_rece']);
		$emisor = $MSJ->ConsultaReceptor($mensjaCadena['id_user']);



		 ?>


		<div class="message-header">
			<div class="message-time " style="  top: px;">
			<?PHP echo $mensjaCadena['fecha_creacion']; ?>
			</div>
			<div class="message-from">
				Para: <?PHP echo $receptor['nombre']." ".$receptor['apellido'];  ?>
			</div>
			<div class="message-to">
				De: <?PHP echo $emisor['nombre']." ".$emisor['apellido'];  ?>
			</div>
			<div class="message-actions">
				<a title="Mover a la papelera" class="btn btn-xs btn-link eliminar-mensaje" href="#eliminar-mensaje" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
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
								<a href="<?PHP echo "../lib/MensajeEliminar.php?id_notificacion=".$resultado['id_notificacion'];?>" name="id_notificacion" type="button"class="btn btn-danger" >Eliminar</a>
							</div>
						</div>
					</div>
				<a title="Responder" href="#id_respuesta" data-toggle="modal"><i class="fa fa-reply"></i></a>
			</div>
		</div>







				<div class="message-content">
				<p>
							<?php echo $mensjaCadena['mensaje']; ?>

						</p>
				</div>

	<?php 	} ?>





		<div class="modal fade" id="id_respuesta" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<form action="../lib/MensajeRespuesta.php" method="post" role="form" id="form">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Responda su mensaje</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<input name="id_user" type="hidden"   value="<?php echo $_SESSION['id_user']; ?> " />
							<input name="id_user_rece" type="hidden"   value="<?php echo $emisor['id_user']; ?> " />
							<input type="hidden" name="id_notificacion" value="<?php echo $_POST['id_notificacion']; ?>" />
							<input type="hidden" name="id_respuesta" value="<?php echo $_POST['id_notificacion']; ?>" />

							<label for="mensaje">Mensaje:</label>
							<textarea placeholder="Escriba aquí su mensaje" name="mensaje" id="mensaje" class="form-control" style="margin: 0px -0.5px 0px 0px; width: 400px; height: 60px;"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" value="Cancelar" data-dismiss="modal" class="btn btn-light-grey"/>
					<input type="submit" value="Enviar" class="btn btn-primary" />
				</div>
				</form>
			</div>
		</div>
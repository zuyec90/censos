
<?php
require_once ('../controller/MensajeController.php');
$MSJ = new Mensaje;
$resultado = $MSJ->Select($_POST['id_notificacion']);
$leidos = $MSJ->Leido($_POST['id_notificacion']);



?>
		<div class="message-header">
			<div class="message-time">
			<?PHP echo $resultado['fecha_creacion']; ?>
			</div>
			<div class="message-from">
				<?PHP echo $resultado['id_user'];  ?>
			</div>
			<div class="message-to">
				<?PHP echo $resultado['id_user_rece'];  ?>
			</div>
			<div class="message-subject">
				Modificación
			</div>
			<div class="message-actions">

				<a title="Mover   a la papelera" class="btn btn-xs btn-link eliminar-mensaje" href="#eliminar-mensaje" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
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
								<a href="<?PHP echo "../lib/MensajeEliminar.php?id_notificacion=".$resultado['id_notificacion'];  ?>" name="id_notificacion" type="button"class="btn btn-danger" >Eliminar</a>
							</div>
						</div>
				</div>
				<a title="Responder" href="#"><i class="fa fa-reply"></i></a>
				<a title="Responder a todos" href="#"><i class="fa fa-reply-all"></i></a>
				<a title="Siguiente" href="#"><i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		<div class="message-content">
		<?PHP echo $resultado['mensaje'];  ?>
		</div>

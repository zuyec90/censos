
<?php
require_once ('../controller/MensajeController.php');
$MSJ = new Mensaje;
$resultado = $MSJ->Select($_POST['id_notificacion']);
$eliminar = $MSJ->Eliminar($_POST['id_notificacion']);


?>
		<div class="message-header">
			<div class="message-time">
			<?PHP echo $resultado['fecha_creacion']; ?>
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
								<button name="id_notificacion" type="button"class="btn btn-danger" >Eliminar</button>
							</div>
						</div>
				</div>
				<a title="Responder" href="#"><i class="fa fa-reply"></i></a>
				<a title="Responder a todos" href="#"><i class="fa fa-reply-all"></i></a>
				<a title="Siguiente" href="#"><i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		<div class="message-content">
		</div>

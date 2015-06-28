
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

		</div>

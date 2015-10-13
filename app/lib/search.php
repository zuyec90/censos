<?php
include ('../controller/MensajeController.php');

$mensaje = new Mensaje;

$r = $mensaje->Search($_POST['usuario']);

while ($MSJS =mysql_fetch_assoc($r)) { 
		 $receptor = $mensaje->ConsultaReceptor($MSJS['id_user_rece']);
		 $emisor = $mensaje->ConsultaReceptor($MSJS['id_user']);
		 $num =  $mensaje->Contar($MSJS['id_notificacion']);

	?>
	
	
	<li id="<?php echo "id".$MSJS['id_notificacion']; ?> " onclick="<?php echo "VerMsj(".$MSJS['id_notificacion'].")"; ?>" class="<?php if($MSJS['status'] != 1) { echo "active starred";} ?> messages-item <?php echo "id".$MSJS['id_notificacion']; ?>">

		<span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>

			<img src="../../upload/765-default-avatar.png" class="messages-item-avatar">

				<span id = "dato" class="messages-item-from"><?php echo $receptor['nombre']." ".$receptor['apellido'];?></span>
				<div class="messages-item-time">
					<input type="hidden" id="id_notificacion" name="id_notificacion" value="<?php echo $MSJS['id_notificacion'];?>">
					<span class="text"><?php echo $MSJS['fecha_creacion'];?></span>
				</div>
				<span class="messages-item-subject cortar"><?php echo $MSJS['mensaje'];?></span>

	</li>

<?php }
?>
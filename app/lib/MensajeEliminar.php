<?php
include ('../Controller/MensajeController.php');

$mensaje = new Mensaje;

if ($mensaje->Eliminar($_GET['id_notificacion']) == 1) {
	echo "<form name='form' action='../view/pagina_mensaje.php' method='post'>";
	echo "<input type='hidden' name='eliminado' value='1'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}
else{

	echo "<form name='form' action='../view/pagina_mensaje.php' method='post'>";
	echo "<input type='hidden' name='eliminado' value='0'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

}

?>
<?php
include ('../Controller/MensajeController.php');

$rsp = new Mensaje;

if ($rsp->respuesta($_GET['id_notificacion']) == 1) {

	echo "<form name='form' action='../view/pagina_mensaje.php' method='post'>";
	echo "<input type='hidden' name='respuesta' value='1'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}
else{

	echo "<form name='form' action='../view/pagina_mensaje.php' method='post'>";
	echo "<input type='hidden' name='respuesta' value='0'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}

?>
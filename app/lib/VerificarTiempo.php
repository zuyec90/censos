<?php
include ('../Controller/MensajeController.php');

$mensaje = new Mensaje;

if ($mensaje->ValidacionTiempo($_GET['fecha_creacion']) == 1) {
	echo "si se pudo";
	/*echo "<form name='form' action='../view/pagina_mensaje.php' method='post'>";
	echo "<input type='hidden' name='valor' value='1'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}
else{

	echo "<form name='form' action='../view/pagina_mensaje.php' method='post'>";
	echo "<input type='hidden' name='valor' value='0'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";*/
}else{
	echo "no se pudo";
}

?>
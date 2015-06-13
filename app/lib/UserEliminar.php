<?php
include ('../Controller/UserController.php');

$User = new User;

if ($User->Eliminar($_POST) == 1) {
	echo "Se Elimino";
}
else{

	echo "No se elimino";
}

?>
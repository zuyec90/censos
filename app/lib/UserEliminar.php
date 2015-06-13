<?php
include ('../Controller/UserController.php');

$User = new User;

if ($User->Eliminar($_GET['id_user']) == 1) {
	echo "Se Elimino";
}
else{

	echo "No se elimino";
}

?>
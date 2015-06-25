<?php
include ('../Controller/UserController.php');

$User = new User;

if ($User->Eliminar($_GET['id_user']) == 1) {
	echo "<form name='form' action='../data.php' method='post'>";
	echo "<input type='hidden' name='valor' value='1'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}
else{

	echo "<form name='form' action='../data.php' method='post'>";
	echo "<input type='hidden' name='valor' value='0'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

}

?>
<?php
include ('../Controller/CensosController.php');

$Censo = new Censo;

if ($Censo->Modificar($_POST) == 1) {

	echo "<form name='form' action='../view/consultadatos.php' method='post'>";
	echo "<input type='hidden' name='valor' value='1'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}
else{

	echo "<form name='form' action='../view/consultadatos.php' method='post'>";
	echo "<input type='hidden' name='valor' value='0'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}

?>
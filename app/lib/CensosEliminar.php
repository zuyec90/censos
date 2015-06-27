<?php
include ('../Controller/CensosController.php');

$censo = new censo;

if ($censo->Eliminarjefe($_GET['idjefe_familia']) == 1) {
	echo "<form name='form' action='../view/consultaperfil.php' method='post'>";
	echo "<input type='hidden' name='valor' value='1'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}
else{

	echo "<form name='form' action='../view/consultaperfil.php' method='post'>";
	echo "<input type='hidden' name='valor' value='0'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

}

?>
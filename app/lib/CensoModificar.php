<?php
include ('../Controller/CensosController.php');

$Censo = new Censo;

if ($Censo->Modificar($_POST) == 1) {
<<<<<<< HEAD
	echo "Actualización Exitosa";
	/*echo "<form name='form' action='../../data.php' method='post'>";
=======
	echo "se puede modificar";
	echo "<form name='form' action='../view/consultadatos.php' method='post'>";
>>>>>>> c80028880c69e629ff02dbacbefe0b5c7d905570
	echo "<input type='hidden' name='valor' value='1'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";
}
else{

	echo "<form name='form' action='../../data.php' method='post'>";
	echo "<input type='hidden' name='valor' value='0'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

<<<<<<< HEAD
}else{
	echo "No se logro actualizar...";
=======
>>>>>>> c80028880c69e629ff02dbacbefe0b5c7d905570
}

?>
<?php
include ('../controller/CensosController.php');

$Censo = new Censo;

if(!isset($_POST['id_familiar'])){

	if ($Censo->ModificarJefeflia($_POST) == 1) {

				echo "<form name='form' action='../view/consultadatos.php?idjefe_familia=".$_POST['idjefe_familia']."' method='post'>";
				echo "<input type='hidden' name='valor' value='1'>";
				echo "<input type='hidden' name='idjefe_familia' value='".$_POST['idjefe_familia']."'>";
				echo "</form>";
				echo "<script language=javascript>document.form.submit();</script>";
			}
			else{

				echo "<form name='form' action='../view/consultadatos.php' method='post'>";
				echo "<input type='hidden' name='valor' value='0'>";
				echo "</form>";
				echo "<script language=javascript>document.form.submit();</script>";
			}

}elseif (isset($_POST['id_familiar'])) {


		if ($Censo->ModificarFamiliar($_POST) == 1) {

			echo "<form name='form' action='../view/consultadatos.php?idjefe_familia=".$_POST['idjefe_familia']."' method='post'>";
			echo "<input type='hidden' name='valor' value='1'>";
			echo "<input type='hidden' name='id_familiar' value='".$_POST['id_familiar']."'>";
			echo "</form>";
			echo "<script language=javascript>document.form.submit();</script>";
		}
		else{

			echo "<form name='form' action='../view/consultadatos.php?idjefe_familia=".$_POST['idjefe_familia']."' method='post'>";
			echo "<input type='hidden' name='valor' value='0'>";
			echo "</form>";
			echo "<script language=javascript>document.form.submit();</script>";
		}

}




?>
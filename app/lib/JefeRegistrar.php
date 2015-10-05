<?php


include ('../Controller/CensosController.php');

$Jefe = new Censo;

echo $Jefe->Registrar($_POST);
if ($Jefe->Registrar($_POST) == 1) {



echo "<form name='form' action='../view/datos.php' method='post'>";
echo "<input type='hidden' name='idjefe_familia' value='".$_POST['idjefe_familia']."'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";

 } else{

echo "<form name='form' action='../view/datos.php' method='post'>";
echo "<input type='hidden' name='valor' value='0'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";

}

?>
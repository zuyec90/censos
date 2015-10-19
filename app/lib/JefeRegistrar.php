<?php


include ('../controller/CensosController.php');

$Jefe = new censo;

$res = $Jefe->Registrar($_POST);

if ($res != 0) {



echo "<form name='form' action='../view/consultadatos.php?idjefe_familia=".$res."' method='post'>";
echo "<input type='hidden' name='idjefe_familia' value='".$res."'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";

 } else{

echo "<form name='form' action='../view/datos.php' method='post'>";
echo "<input type='hidden' name='valor' value='0'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";

}

?>
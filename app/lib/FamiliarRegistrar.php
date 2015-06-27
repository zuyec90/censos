<?php

include ('../Controller/CensosController.php');

$Familiar = new censo;

if ($Familia->RegistrarFamiliar($_POST) == 1) {

echo "<form name='form' action='../view/consultadatos.php' method='post'>";
echo "<input type='hidden' name='id_familiar' value='".$_POST['id_familiar']."'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";


 } else{

echo "<form name='form' action='../view/consultadatos.php' method='post'>";
echo "<input type='hidden' name='valor' value='0'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";

 }


?>
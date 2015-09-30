<?php

include ('../Controller/CensosController.php');

$Familiar = new censo;

if ($Familiar->RegistrarFamiliar($_POST) == 1) {


echo "<form name='form' action='../view/consultadatos.php?id_familiar=".$_POST['id_familiar']."' method='post'>";
echo "<input type='hidden' name='id_familiar' value='".$_POST['id_familiar']."'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";



 } else{
 	

echo "<form name='form' action='../view/consultadatos.php?id_familiar=".$_POST['id_familiar']."' method='post'>";
echo "<input type='hidden' name='id_familiar' value='".$_POST['id_familiar']."'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";

 }


?>
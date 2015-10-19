<?php

include ('../controller/CensosController.php');

$Familiar = new censo;
var_dump($_POST);

$res = $Familiar->RegistrarFamiliar($_POST);
echo "<br>".$res;
if ( $res != 0) {


echo "<form name='form' action='../view/consultadatos.php?idjefe_familia=".$_POST['idjefe_familia']."' method='post'>";
echo "<input type='hidden' name='valor' value='1'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";



 } else{
 	

echo "<form name='form' action='../view/consultadatos.php?idjefe_familia=".$_POST['idjefe_familia']."' method='post'>";
echo "<input type='hidden' name='valor' value='0'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";

 }


?>
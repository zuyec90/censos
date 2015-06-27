<?php
include ('../Controller/UserController.php');

$User = new User;


if ($User->Modificar($_POST) == 1) {


#aqui va todo tu proceso y a la hora de ir a la pagina 1 pones asi.
echo "<form name='form' action='../view/perfil.php?id_user=".$_POST['id_user']."'  method='post'>";
echo "<input type='hidden' name='valor' value='1'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";



 }else{


#aqui va todo tu proceso y a la hora de ir a la pagina 1 pones asi.
echo "<form name='form' action='../view/perfil.php?id_user=".$_POST['id_user']."'  method='post'>";
echo "<input type='hidden' name='valor' value='0'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";

 }
?>
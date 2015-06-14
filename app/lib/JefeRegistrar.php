<?php


include ('../Controller/CensosController.php');

$Jefe = new Censo;


if ($Jefe->Registrar($_POST) == 1) {


echo "Registro satisfactorio";


 } else{


echo "No se logro registrar";

 }


?>
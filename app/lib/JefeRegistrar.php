<?php


include ('../Controller/CensosController.php');

$Jefe = new Censo;

$registro = array('Nombres' => "Paula", 'Apellidos' => "Galindo", 'id_cedula' => "12345678", );


if ($Jefe->Registrar($registro) == 1) {


echo "Registro satisfactorio";


 } else{


echo "No se logró registrar";

 }


?>
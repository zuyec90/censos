<?php
include ('../controller/MensajeController.php');

$mensaje = new Mensaje;

var_dump( $mensaje->Search($_POST['usuario']) );

?>
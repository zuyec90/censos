<?php
/*
include ('../config/config.php'); // se incluye el archivo donde estara la clase navegando segun el directorio

$db = new DataModel; // Se crea el objeto en una variable para utlizarlo posteriormente
/*
 la manera de crear este objeto es con la palabra reservada NEW + el nombre de la clase
*/

/*
aca se comienza a usar los multiples metodos que se creen como funciones en la clase DataModel en este
caso solo esta la conexion
*/


include ('../controller/UserController.php');

$User = new User;

if ($User->Crear($_POST) == 1) {

return 1;
 } else{

return 0;

 }


?>
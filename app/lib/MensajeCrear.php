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


include ('../Controller/MensajeController.php');

$Mensaje = new Mensaje;

if ($Mensaje->Crear($_POST) == 1) {


#aqui va todo tu proceso y a la hora de ir a la pagina 1 pones asi.
echo "<form name='form' action='../view/pagina_mensaje.php' method='post'>";
echo "<input type='hidden' name='valor' value='1'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";
}else{
echo "<form name='form' action='../view/pagina_mensaje.php' method='post'>";
echo "<input type='hidden' name='valor' value='0'>";
echo "</form>";
echo "<script language=javascript>document.form.submit();</script>";
}
?>
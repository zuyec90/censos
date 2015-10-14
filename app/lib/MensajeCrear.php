
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


include ('../controller/MensajeController.php');

$Mensaje = new Mensaje;
if (isset($_POST['ajax'])) {

	if ($Mensaje->Crear($_POST) == 1) {?>
	<div class="alert alert-success">
		<button id="close1" data-dismiss="alert" class="close" type="button">&times;</button>
			<h4 class="alert-heading"><i class="fa fa-check-circle"></i></h4>
			<p>Mensaje enviado satisfatoriamente.</p>
	</div>
	<?php }else{ ?>
		<div class="alert alert-block alert-danger fade in">
			<button id="close1" data-dismiss="alert" class="close" type="button">&times;</button>
				<h4 class="alert-heading"><i class="fa fa-times-circle"></i></h4>
				<p>No se logro enviar el mensaje</p>
		</div>
	<?php }
}else{
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
}
?>

<script type="text/javascript">
	$('#close1').click(function(){

				$('#mensaje').show();
				$(".form-controlR").val("");
				$(".form-controlR").show("");
			});

</script>
<?php
	ob_start();
?>

<page>

	<?php

		//Conectar la Base de Datos MySQL
		include ('../config/config.php');

		echo "<h5  align='center'><b>REPORTE DE DATOS</b></h5>";
	
		$sql = "SELECT serial, marca, modelo, color FROM registro WHERE activo = '1'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 0) {
			echo "<br><br><br><br><b>*** NO HAY DATOS REGISTRADOS ***</b><br><br><br><br><br><br>";
		}

		if (mysqli_num_rows($result) > 0) {
	?>

	<table border='1' align='center'>
		<tr align='center'>
			<th>Serial</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Color</th>
		</tr>

	<?php
    	// salida de datos por cada registro
    	while($fila = mysqli_fetch_assoc($result)) {
	?>
			
		<tr>
			<td><?php echo $fila["serial"];?></td>
			<td><?php echo $fila["marca"];?></td>
			<td><?php echo $fila["modelo"];?></td>
			<td><?php echo $fila["color"];?></td>
		</tr>
	
	<?php
   		}
	?>

	</table>
	<br>

	<?php
		}

	//Desconectar la Base de Datos MySQL
	include '../php/desconectar.php';
	?>

</page>

<?php

	$content = ob_get_clean();
	require_once('html2pdf/html2pdf.class.php');
	$pdf = new HTML2PDF('P','A4','es','UTF-8');
	$pdf->writeHTML($content);
//	$pdf->pdf->IncludeJS('print(TRUE)');
	$pdf->output('Reporte01.pdf');

?>

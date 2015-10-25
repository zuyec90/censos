<?php

require_once ('../controller/CensosController.php');
$censo = new censo;

$General = $censo->GeneralReportefecha($_POST["edadIn"],$_POST["edadF"]);


?>
										<table class="table">
												
												<tr>
													<td> campo</td>
													<td> cantidad</td>

												</tr>
												<tr>
													<td> sexo F</td>
													<td> <?php echo $General[0]; ?></td>

												</tr>
												<tr>
													<td> Sexo M</td>
													<td> <?php echo $General[1]; ?></td>

												</tr>
												<tr>
													<td> Trabaja Si</td>
													<td> <?php echo $General[2]; ?></td>

												</tr>
												<tr>
													<td> Trabaja No</td>
													<td> <?php echo $General[3]; ?></td>

												</tr>
												<tr>
													<td> Discapacitado Si</td>
													<td> <?php echo $General[4]; ?></td>

												</tr>
												<tr>
													<td> Discapacitado No</td>
													<td> <?php echo $General[5]; ?></td>

												</tr>
												<tr>
													<td> Pensionado Si</td>
													<td> <?php echo $General[6]; ?></td>

												</tr>
												<tr>
													<td> Pensionado No</td>
													<td> <?php echo $General[6]; ?></td>

												</tr>
											
											</table>


<?PHP /*
<div class="col-md-12">
	<!-- start: LABEL FORMATTER PANEL -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="fa fa-external-link-square"></i>
			Label Formatter
		</div>
		<div class="panel-body">
			<div class="flot-small-container">
				<div id="placeholder82" class="flot-placeholder"></div>
			</div>
		</div>
	</div>
	<!-- end: LABEL FORMATTER PANEL -->
</div>

<script type="text/javascript">
	var data = [
					{ label: "sexo M",  data: [[<?php echo $General[0]; ?>]]},
					{ label: "sexo F",  data: [[<?php echo $General[1]; ?>]]},
					{ label: "Edad",  data: [[1,3]]},
					{ label: "Discapacidad",  data: [[1,7]]},
					{ label: "Trabajo",  data: [[1,6]]},
					{ label: "Pensionado",  data: [[1,8]]},	];

				$.plot('#placeholder82', data, {
				    series: {
				        pie: {
				            show: true,
				            radius: 1,
				            label: {
				                show: true,
				                radius: 3/4,
				                formatter: labelFormatter,
				                background: {
				                    opacity: 0.5,
				                    color: '#000'
				                }
				            }
				        }
				    },
				    legend: {
				        show: true
				    }
				});

			function labelFormatter(label, series) {
			return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
			}
</script>
*/ ?>
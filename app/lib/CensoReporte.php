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
													<td> <?php echo $General['union'][0]; ?></td>

												</tr>
												<tr>
													<td> Sexo M</td>
													<td> <?php echo $General['union'][1]; ?></td>

												</tr>
												<tr>
													<td> Trabaja Si</td>
													<td> <?php echo $General['union'][2]; ?></td>

												</tr>
												<tr>
													<td> Trabaja No</td>
													<td> <?php echo $General['union'][3]; ?></td>

												</tr>
												<tr>
													<td> Discapacitado Si</td>
													<td> <?php echo $General['union'][4]; ?></td>

												</tr>
												<tr>
													<td> Discapacitado No</td>
													<td> <?php echo $General['union'][5]; ?></td>

												</tr>
												<tr>
													<td> Pensionado Si</td>
													<td> <?php echo $General['union'][6]; ?></td>

												</tr>
												<tr>
													<td> Pensionado No</td>
													<td> <?php echo $General['union'][7]; ?></td>

												</tr>
												<tr>
													<td> Inscritos en el CNE </td>
													<td>
														<?php echo $General['union'][8]; ?>
													</td>
												</tr>
												<tr>
													<td> No inscritos en el CNE </td>
													<td>
														<?php echo $General['union'][9]; ?>
													</td>
												</tr>
												<tr>
													<td> Solteros </td>
													<td>
														<?php echo $General['union'][10]; ?>
													</td>
												</tr>
												<tr>
													<td> Casados </td>
													<td>
														<?php echo $General['union'][11]; ?>
													</td>
												</tr>
												<tr>
													<td> Divorciados </td>
													<td>
														<?php echo $General['union'][12]; ?>
													</td>
												</tr>
												<tr>
													<td> Viudos </td>
													<td>
														<?php echo $General['union'][13]; ?>
													</td>
												</tr>
												<tr>
													<td> En concubinato </td>
													<td>
														<?php echo $General['union'][14]; ?>
													</td>
												</tr>
												<tr>
													<td> Sin instruccion </td>
													<td>
														<?php echo $General["mas"][15]; ?>
													</td>
												</tr>
												<tr>
													<td> Basica </td>
													<td>
														<?php echo $General["mas"][16]; ?>
													</td>
												</tr>
												<tr>
													<td> Bachiller </td>
													<td>
														<?php echo $General["mas"][17]; ?>
													</td>
												</tr>
												<tr>
													<td> Tecnico Medio </td>
													<td>
														<?php echo $General["mas"][18]; ?>
													</td>
												</tr>
												<tr>
													<td> Tecnico Superior </td>
													<td>
														<?php echo $General["mas"][19]; ?>
													</td>
												</tr>
												<tr>
													<td> Universitarios </td>
													<td>
														<?php echo $General["mas"][20]; ?>
													</td>
												</tr>
												<tr>
													<td> Postgrado </td>
													<td>
														<?php echo $General["mas"][21]; ?>
													</td>
												</tr>
																					
											</table>


<?php /*
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
					{ label: "sexo M",  data: [[5,3]]},
					{ label: "sexo F",  data: [[5,2]]},
					{ label: "Edad",  data: [[5,1]]},
					{ label: "Discapacidad",  data: [[5,3]]},
					{ label: "Trabajo",  data: [[5,1]]},
					{ label: "Pensionado",  data: [[5,4	]]},	];

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
/* ?>
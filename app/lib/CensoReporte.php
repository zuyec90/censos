<?php


require_once ('../controller/CensosController.php');
$censo = new censo;
$resultado = $censo->Reporte($_POST);

var_dump($resultado);




?>
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
					{ label: "sexo",  data: [[1,10]]},
					{ label: "Edad",  data: [[1,30]]},
					{ label: "Discapacidad",  data: [[1,90]]},
					{ label: "Trabajo",  data: [[1,70]]},
					{ label: "Pensionado",  data: [[1,80]]},
					];

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
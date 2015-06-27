html>
		<head>
		   <title>Ajax Simple</title>
		<script src="jquery-1.3.2.min.js" type="text/javascript"></script>
		<script>
		$(document).ready(function(){
		   $("#enlaceajax").click(function(evento){
		      evento.preventDefault();
		      $("#mensaje").load("lectura_ajax.php");
		   });
		})
		</script>
		</head>
		<body>

		<a href="pagina_mensaje.php" id="enlaceajax"></a>
		<br>
		<div id="mensaje"></div>

		</body>
</html>
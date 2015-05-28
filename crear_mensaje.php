<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <title>Sistema de Control de Censo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="description" name="Control de censos" />
    <meta content="author" name="Equipo 2" />
	<link rel="stylesheet" media="screen" href="css/crear_mensaje.css" >
    <link rel="shortcut icon" href="upload/ccsantaines.ico" />
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk
/html5.js"></script>
        <![endif]-->
</head>
<body>
<form class="contact_form" action="app/config/confi_mensaje.php" method="post">
    <ul>
        <li>
             <center><h2>Crea tu mensaje</h2></center>
        </li>
        <li>
            <label for="name">Nombre:</label>
            <input name="nombre" type="text" required id="nombre"  placeholder="Nombre del emisor" />
        </li>
        <li>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="xxxxx@ejemplo.com" required />
        </li>
        <li>
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" cols="40" rows="6" required id="mensaje" ></textarea>
        </li>
        <li>
        	<button class="submit" type="submit">Enviar</button>
        </li>
    </ul>
</form>
</body>
</html>
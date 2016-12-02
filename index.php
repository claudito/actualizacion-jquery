<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualización Automatica</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<script>
function actualiza_contenido()
{
$('#capa').load('fichero.php');
}

setInterval('actualiza_contenido()', 1000 );
</script>

<div id="capa"></div>
</body>
</html>
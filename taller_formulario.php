<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<h1>Taller formulario</h1>
	</header>

    <!-- HTML (form_get) -->
    <form action="procesar_busqueda.php" method="get">
        Introducir término de búsqueda: <input type="text" name="termino_busqueda">
        <button type="submit">Realizar búsqueda</button>
    </form>

    <!-- HTML (form_post) -->
    <form action="procesar_contacto.php" method="post">
        Introduce tu nombre de contacto: <input type="text" name="nombre_contacto">
        Introduce tu email de contacto: <input type="text" name="email_contacto">
        <button type="submit">Enviar tu contacto</button>
    </form>

</body>
</html>
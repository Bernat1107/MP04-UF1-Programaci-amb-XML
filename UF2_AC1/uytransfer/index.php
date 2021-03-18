<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>uytransfer</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
			<form name="subir" action="upload.php" method="post" enctype="multipart/form-data">
				<input type="text" name="nombre" placeholder="tu nombre">	
				<input type="file" name="archivo"> 	
				<input type="checkbox" name="pormail" placeholder="tu nombre">	
				<input type="mail" name="email" placeholder="email de tu colega">	
				<textarea name="mensaje" placeholder="escribe el mensaje"> </textarea>
				<button type="submit">Enviar </button>
			</form>


	</body>
</html>
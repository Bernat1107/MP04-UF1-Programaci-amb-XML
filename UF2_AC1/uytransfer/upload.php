<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>uytransfer</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
			
		<?php

			print_r($_POST);
			print_r($_FILES);


			if (!empty($_POST)) {

				$nombre = $_POST["nombre"];

				echo "<p> Hola $nombre </p>";

				$nombreArchivo = $_FILES["cosaparasubir"]["name"]

				if(isset($_POST["portmail"]) {

				echo "se tiene que enviar un email";
				}

			}

			else {
				header("Location: index.php");
			}
		?>


	</body>
</html>
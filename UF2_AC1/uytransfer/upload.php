<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SUBIR ARCHIVO</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		 <?php
		    include "header.php";		
	        define("COLOR_1", "#9e9e9e");
			const COLOR_2 = "pink";
		    $nompersona = $_POST["nombre"];
			if (!empty($_FILES)) {

				$nombre = $_FILES["archivo"]["name"];
				$rutaTmp = $_FILES["archivo"]["tmp_name"];
				 
				$extension = substr($nombre, strpos($nombre, "."));
				$rutaDestino = "files/".date("Y").date("m").date("d").rand(10000,99999).$extension;
				$linkDescarga = $_SERVER["HTTP_ORIGIN"].$rutaDestino;

				
				move_uploaded_file($rutaTmp, $rutaDestino);

				echo "<br><p style=\"float: left; margin: 100px; \"> <img src=\"imatges/correcto.jpg\" /> </p>";

                echo "<p style=\"float: left; font-size: 25px;\">ARCHIVO ENVIADO CORRECTAMENTE </p>";

                
                if (empty($nompersona) ) {

                   echo "<div style=\"float: left;  margin-right: 5px; width: 600px; height: 50px;font-size: 25px; \"> 
                    Oye tú, usa este link para compartir el fichero </div>";
	      
                }
                else
                {
                 
                    echo "<div style=\" float: left; margin-right: 5px; width: 600px; height: 50px;font-size: 25px; \"> 
                     Hola $nompersona , usa este link para compartir tu archivo  </div>";
                }

				echo "<p style=\" float: left; margin-right: 5px; width: 900px; height: 50px;font-size: 25px; \"> <a href=\"$rutaDestino\">$linkDescarga</a></p>";
			}


		?>
	</body>
</html>
           
			 
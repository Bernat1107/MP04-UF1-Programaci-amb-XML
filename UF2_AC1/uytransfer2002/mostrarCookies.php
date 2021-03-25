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

		   
		    if (isset($_COOKIE["numlinks"])) {

		    	$numlinks = $_COOKIE["numlinks"];
		    	

		    	while(isset($_COOKIE["numlinks"]))

		    		$numlinks++;


		    }

		   

		?>
		    
	</body>
</html>
           
			 
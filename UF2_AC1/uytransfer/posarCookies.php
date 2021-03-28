<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>POSAR COOKIES</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		 <?php
                   
		    $link = "$linkDescarga"; 
		    

		    $numlinks = 1;

		    if (isset($_COOKIE["numlinks"])) {

                
		    	$numlinks = $_COOKIE["numlinks"];
		    	$numlinks++;

		    }

          
		    setcookie("numlinks", $numlinks, time() + 60 * 60 * 24 * 1000 );
		    	
	     	setcookie("link$numlinks", $link, time() + 60 * 5);


	     	 
		?>
		    
	</body>
</html>
           
			 
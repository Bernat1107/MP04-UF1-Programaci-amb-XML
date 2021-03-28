<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MOSTRAR COOKIES</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		 <?php
		   	
            
		   
		    if (isset($_COOKIE["numlinks"]))
		     {

                 
		    	$numlinks = $_COOKIE["numlinks"];
		    	
              

		    	while (isset($_COOKIE["link$numlinks"])) 
		    	{

                $link = $_COOKIE["link$numlinks"];
                echo "<p> <a href=\"$link\"> $link </a> </p>";
                $numlinks--;
        
		    	}            

		    }
         
		   
		?>
		    
	</body>
</html>
           
			 
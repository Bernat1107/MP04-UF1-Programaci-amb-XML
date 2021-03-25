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

			include "header.php";
		     ?>
		
	           <form name ="datos" action="upload.php" method="post" enctype="multipart/form-data">
				      
				      <input type="text" name="nombre" id="nombre"  placeholder="Tu nombre"    />  

                 
			          <input type="file" name="archivo" id="archivo"  />  
			       
			          	          
			          <label   for="validacion">Quiero enviar el link de descarga por email </label> 
			          <input type="checkbox" name="validacion" id="validacion" />  
                      
				      <input type="mail" name="mail" id="mail" placeholder="Email del destinatario"    /> 
			            
                     <label   for="area"> Mensaje</label>

			         <textarea name="area" id="area"  rows="6"   ></textarea>
			    
					 <button type="submit">Subir archivo</button>
					   
				</form>
		 
		 
			  			 	       
	</body>
</html>
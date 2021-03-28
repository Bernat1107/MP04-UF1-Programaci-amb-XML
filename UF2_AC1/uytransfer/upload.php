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
	        
			$textoMail = "";
			$error_mail = 0;   

		    $nompersona = $_POST["nombre"];
		    $mail = $_POST["mail"];
		    $mensaje = $_POST["area"];
		  

			if (!empty($_FILES)) {

				$nombre = $_FILES["archivo"]["name"];
				$rutaTmp = $_FILES["archivo"]["tmp_name"];
				$tamanyo = $_FILES["archivo"]["size"];
				$extension = substr($nombre, strpos($nombre, "."));
				$rutaDestino = "files/".date("Y").date("m").date("d").rand(10000,99999).$extension;
				$linkDescarga = $_SERVER["HTTP_ORIGIN"]."/$rutaDestino";

				 
				if (($tamanyo < 10240000 ) &&
				  ($extension == ".PDF" || $extension == ".pdf" || $extension == ".JPG" || $extension == ".jpg" ||
			    	$extension == ".PNG" || $extension == ".png" || $extension == ".RAR" || $extension == ".rar" ||
			    	$extension == ".ZIP" || $extension == ".zip"))

				{
			    	move_uploaded_file($rutaTmp, $rutaDestino);

				    echo "<br><p style=\"float: left; margin: 100px; \"> <img src=\"imatges/correcto.jpg\" /> </p>";

                    echo "<p style=\"float: left; font-size: 25px;\">ARCHIVO ENVIADO CORRECTAMENTE </p>";

                
                    if (empty($nompersona) )
                     {

                     echo "<div style=\"float: left;  margin-right: 5px; width: 600px; height: 50px;font-size: 25px; \"> 
                     Oye tú !!!, usa este link para compartir el fichero </div>";
	      
                    }
                    else
                    {
                 
                     echo "<div style=\" float: left; margin-right: 5px; width: 600px; height: 50px;font-size: 25px; \"> 
                     Hola $nompersona , usa este link para compartir tu archivo  </div>";
                    }


				    echo "<p style=\" float: left; margin-right: 5px; width: 900px; height: 50px;font-size: 25px; \"> <a href=\"$rutaDestino\">$linkDescarga</a></p>";
                    
                     
                    include "posarCookies.php";
                    

			    }
			    else
			     {
			      echo "<br><p style=\"float: left; margin: 100px; \"> <img src=\"imatges/incorrecto.jpg\" /> </p>";
			       if ($tamanyo > 10240000 ) 
			       {
                   echo "<p style=\"float: left; font-size: 25px;\">ARCHIVO  NO ENVIADO por TAMAÑO > 10MB  </p>";
                  }
                   else {

                    echo "<p style=\"float: left; font-size: 25px;\">ARCHIVO  NO ENVIADO por  FORMATO distinto a PDF, PNG, JPG, RAR o ZIP.  </p>";
                   }

			    }

          
                if (!empty($_POST["validacion"]) )
                 {
	                
	                if (strpos($mail, "@") == false)
	                   {
				        
				 	    echo " ERROR EN EL CORREU ";
					    header('Location: http://localhost/practica/index.php');
					  
					    
				       }

				    else 
				      {
                        // enviem el link a un email 
				      

				      	$to = "$mail";
                        $subject = "UYTRANSFER_comparticio_fitxers";
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                       
                        if (empty($_POST["area"]) )
                        {	
                        
                        $mensaje = "Sorpresa!! Alguien ha compartido contigo un archivo. Descargalo en el siguiente link : "."<br>".$linkDescarga."<br>"."Salutacions";
                        }
                        else
                        {
                           $mensaje =$mensaje."<br>".$linkDescarga."<br>"."Salutacions";
                        }
	

                        mail($to, $subject, $mensaje, $headers);
				      }   

                  } 

               

			}




		?>
	</body>
</html>
           
			 
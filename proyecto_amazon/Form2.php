<?php
	/*
	include("class_php/class-conexion.php");
	$conexion = new Conexion();
	if(isset($_POST["Continuar2"])){
		if($_POST['contrasena']!=''){
			header('location: index.php');
		}else{
			header('location: Form2.php');
		}
	}
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Iniciar sesion en Amazon</title>
	<link rel="icon" type="image/png" href="recursos/Amazon_icon.png">
</head>
<body>
	<div class="Contenedor">
		<div class="encabezado">
			<a class="Icono_link" tabindex="-1" href="https://www.amazon.es/ref=ap_frn_logo">
<<<<<<< HEAD:proyecto_amazon/Formulario/Form2.html
				 <img class="img" src="image/amazon1.jpg" alt="Logo Amazon">
=======
				 <img src="recursos/amazon1.jpg" alt="Logo Amazon">
>>>>>>> 9a0930735eba6ff0db469cac1e15d8835c527c0c:proyecto_amazon/Form2.php
                 
            </a>

		</div>
		<div class="Cuerpo">

            <div class="principal">
                <div class="login">
                    <div class="titulo_Formulario">
        	                 <h1 class="titulo_Formulario">Iniciar Sesion</h1>
        	        </div>
        	        <form action="ajax/procesarIngreso.php" method="POST">
						<br>
						<div>
							<label for="contrasena">Contraseña</label>
							<span class="separador1"> </span>
							<a href="">¿Has olvidado la contraseña? </a>
						
						</div>
						
						<input class="Texto" type="password" name="contrasena" id="contrasena" maxlength="128"> 

					
						<input type="submit" value= "Iniciar Sesion" name="Continuar2" class="boton_naranja">
						<input type="checkbox" name="Recordatorio">Recuerdame. 
						
						<a  class="Icono_link" href="">
							<span>Detalles</span>
						</a>

                    </form>

	    	    </div>
	    	    <div class="pie_login">

                <input type="submit" value= " Recibir código de verificación por correo electrónico" name="Crear_cuenta" class="boton_gris">

	    	    </div>


            </div>
            
	    </div>
		
        <div class="footer">
            	<div class="superior">
            	   <div class="enlaces" >

                      <a href="">Condiciones de Uso </a>
                      <span class="separador"></span>
            	       <a href="">Aviso de Privacidad</a>
            	       <span class="separador"></span>
            	      <a href="">Ayuda</a>
            	
            	   </div>
            	   <div >
            	   	     <span class="footer_texto">
            	   	      © 1996-2018, Amazon.com, Inc. o afiliados. Todos los derechos reservados.

            	   	     </span>
            	   	
            	   </div>

            		
            	</div >

            	


            </div>
            
   </div>

</body>
</html> 
<?php
	/*include("class_php/class-conexion.php");
	$conexion = new Conexion();
	if(isset($_POST["Continuar"])){
		if($_POST['login_email']!=''){
			header('location: Form2.php');
		}else{
			header('location: Form1.php');
		}
	}*/
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
<<<<<<< HEAD:proyecto_amazon/Formulario/Form1.html
				 <img class="img"src="image/amazon1.jpg" alt="Logo Amazon">
                 
=======
				<img src="recursos/amazon1.jpg" alt="Logo Amazon">
>>>>>>> 9a0930735eba6ff0db469cac1e15d8835c527c0c:proyecto_amazon/Form1.php
            </a>
		</div>

		<div class="Cuerpo">
            <div class="principal">
                <div class="login">
                    <div class="titulo_Formulario">
						<h1 class="titulo_Formulario">Iniciar Sesion</h1>
        	        </div>
        	        <form action="ajax/procesarIngreso.php" method="POST">
		
						<label for="Correo">Direccion de e-mail o numero de telefono movil</label>
						<input class="Texto" type="email" name="login_email" id="login_email" maxlength="128">
						<input type="submit" value= "Continuar" name="Continuar" class="boton_naranja">	
						<a  class="Icono_link" href=" ">
							<span>¿Necesitas Ayuda?</span>
						</a>

                    </form>

	    	    </div>
	    	    <div class="pie_login">
	    	    	<form action="" method="POST">
	    	    		<h5 class="nota">¿Eres nuevo en Amazon?</h5>
                        <a href="Form3.php"><input type="button" value= "Crea tu cuenta de Amazon" name="Crear_cuenta" class="boton_gris" ></a>
					</form>
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
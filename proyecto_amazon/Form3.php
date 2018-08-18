<?php
    /*
	include("class_php/class-conexion.php");
	$conexion = new Conexion();
	if(isset($_POST["Continuar3"])){
		if($_POST['nombre']!='' && $_POST['correo']!=''){
			header('location: index.php');
		}else{
			header('location: Form3.php');
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
			<a class="Icono_link" tabindex="-1" href="recursos/amazon1.jpg">
				 <img src="recursos/amazon1.jpg" alt="Logo Amazon">
            </a>
		</div>
		<div class="Cuerpo">
            <div class="principal">
                <div class="login">
                    <div class="titulo_Formulario">
        	            <h1 class="titulo_Formulario">Crear cuenta</h1>
        	        </div>
        	        <form action="ajax/procesarIngreso.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input class="Texto" type="text" name="nombre" maxlength="128">
                        <br><label for="correo">Correo Electronico</label>
                        <input class="Texto" type="email" name="correo" maxlength="128">
                        <br><label>Genero: </label>
                        <label><input type="radio" name="rbt-genero" value="1">Femenino</label> 
					    <label><input type="radio" name="rbt-genero" value="2">Masculino</label>
                        <br><br><label for="contrasena1">Contraseña</label>
                        <input class="Texto" type="password" name="contrasena1" maxlength="128" placeholder="Al menos 6 caracteres">
                        <br><label for="contrasena2">Confirma tu contraseña</label>
                        <input class="Texto" type="password" name="contrasena2" maxlength="128">
                        <br><label>Pais:</label>
                        <label><select class="form-control" id="slc-pais">
                        </select></label><br>
                        <input type="submit" value= "Continuar" name="Continuar3" class="boton_naranja">
                        <a  class="Icono_link" href=" ">
                            <span>¿Necesitas Ayuda?</span>
                        </a>
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
            </div>
        </div>            
   </div>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url:"ajax/api.php?accion=cargarPaises",
            method: 'GET',
            dataType: "json",
            success: function(respuesta){
                console.log(respuesta);
                for(var i=0; i<respuesta.length; i++){
                    //<option value="1">Honduras</option>
                    $('#slc-pais').append('<option value="'+respuesta[i].NOMBRE_UBICACION+'">'+respuesta[i].NOMBRE_UBICACION+'</option>');
                }
            },
            error: function(error){
                console.log(error);
                alert("Falta respuesta del servidor");
            }
        });
    });
</script>
</html> 

<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<title>Escribe la direccion de envio para este pedido</title>
	<link rel="stylesheet" type="text/css" href="css/estilos2.css">
	<link rel="icon" type="image/png" href="recursos/Amazon_icon.png">
 </head>
 <body  class="body2">
	<div>
		<div class="header">
			<div >
				<img  class="imagenHead" src="recursos/amazon3.jpg" alt="Seleccion de direccion de envio-Tramitacion de pedido">
			</div>         
		</div>
		<div class="header">
			<div>
				<h1 class="h1_1" data-testid="">Ingresar la informacion para vender el producto.</h1>
				<P class ="p1"> Vende a los mejores precios. 
					<a href="">Articulo</a>
				</P>
				<hr class="hr2">
			</div>
				<div class="contenido">
                    <form method="POST" action="ajax/procesarIngreso.php">
					<div class="columna1">
						<h2> Introduce los datos del articulo:</h2>
						<p>Cuando hayas terminado, haz clic en el botón "Continuar".</p>
						<div class="Form-columna">
                        <br><br>
                            <div class="texto2">
                                <label for="Pais">Paises de venta</label>
                                <div>
                                    <select name= "slc-pais" class="Texto" id="slc-pais">
                                    </select>
                                </div>
                            </div><br><br>
                            <div class="texto2">
                                <label for="Pais">Cantidad</label>
                                <input class="Texto" type="text" name="cantidad" maxlength="128">
                            </div><br><br>
                            <div class="texto2">
                                <label for="Pais">Nombre</label>
                                <input class="Texto" type="text" name="nombre" maxlength="128">
                            </div><br><br>
                            <div class="texto2">
                                <label for="Pais">Precio</label>
                                <input class="Texto" type="text" name="precio" maxlength="128">
                            </div><br><br>
                            <div class="texto2">
                                <label for="Provincia">Descripcion <span></span></label>
                                <input class="Texto" type="text" name="descripcion" maxlength="128">
                                <input type="text" style="display:none;" name="nombre-usuario" value="<?php
if(isset($_GET['usuario'])){
echo $_GET['usuario'];
}
?>">
                            </div>
						</div>
					</div>
					<div class="columna2">
							<h2 >Seleccionar el tipo de envio.</h2>
							<p >Dependiendo de la disponibilidad de tu producto, podrás elegir entre estas opciones:</p>
							<span>Consulta las <a href="">Tarifas de Envio </a>. <a href="">Mas informacion. </a></span>
						<table> 
							<tr class="separador2">
							</tr>
							<tr class="separador2">
							</tr>
							<tr class="separador2">
							</tr>
							<tr class="separador2">
							</tr>					
                            <tr>
								<td>
									<label for="Ciudad">Marca:</label>
								</td>
								<td>
									<select  name="slc-marcas" id="slc-marcas" class="Texto" >
									</select>
								</td>
							</tr>
                            <tr>
								<td>
									<label for="Ciudad">Departamento:</label>
								</td>
								<td>
									<select  name="slc-deptos" id="slc-deptos" class="Texto" >
									</select>
								</td>
							</tr>
                            <tr>
								<td>
									<label for="Ciudad">Tipo de envio:</label>
								</td>
								<td>
									<select  name="slc-tipo" class="Texto" >
										<option value="1">Envio Nacional </option>
										<option value="2">Envio Internacional</option>
									</select>
								</td>
							</tr>
                            <tr>
                                <div>
                                    <div class="superior2">
                                        <div class="boton_naranja2">
                                            <input  type="submit" value= "Continuar" name="continuar5" class="boton_naranja">
                                        </div>
                                    </div>
                                </div>
                            </tr>
						</table>
					</div>
				</div>
                </form>
            </div>   
				<div class="superior2">
					<div class="centrar">
						<div class="texto2">
							<span class="footer_texto" style="color:gray">
							¿Tienes un cheque regalo o un código promocional? Te pediremos que lo introduzcas en el momento del pago.
						</span>
						</div>
						<div >
							<span class="footer_texto" > <a href="#">Condiciones de Uso</a> | <a href="">Aviso de Privacidad</a>  © 2011-2018, Amazon.com, Inc.</span>
						</div>
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
                    $('#slc-pais').append('<option value="'+(i+1)+'">'+respuesta[i].NOMBRE_UBICACION+'</option>');
                }
            },
            error: function(error){
                console.log(error);
                alert("Falta respuesta del servidor");
            }
		});
		$.ajax({
            url:"ajax/api.php?accion=cargarEmpresas",
            method: 'GET',
            dataType: "json",
            success: function(respuesta){
                console.log(respuesta);
                for(var i=0; i<respuesta.length; i++){
                    $('#slc-empresa').append('<option value="'+respuesta[i].CODIGO_EMPRESA_ENVIO+'">'+respuesta[i].NOMBRE_EMPRESA_ENVIO+'</option>');
                }
            },
            error: function(error){
                console.log(error);
                alert("Falta respuesta del servidor");
            }
        });
        $.ajax({
            url:"ajax/api.php?accion=cargarMarcas",
            method: 'GET',
            dataType: "json",
            success: function(respuesta){
                console.log(respuesta);
                for(var i=0; i<respuesta.length; i++){
                    $('#slc-marcas').append('<option value="'+respuesta[i].CODIGO_MARCA+'">'+respuesta[i].NOMBRE_MARCA+'</option>');
                }
            },
            error: function(error){
                console.log(error);
                alert("Falta respuesta del servidor");
            }
        });
        $.ajax({
            url:"ajax/api.php?accion=cargarDepartamentos",
            method: 'GET',
            dataType: "json",
            success: function(respuesta){
                //console.log(respuesta);
                for(var i=0; i<respuesta.length; i++){
                    var str = respuesta[i].DESCRIPCION;
                    $('#slc-deptos').append('<option value="'+respuesta[i].CODIGO_DEPARTAMENTO+'">'+str+'</option>');
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
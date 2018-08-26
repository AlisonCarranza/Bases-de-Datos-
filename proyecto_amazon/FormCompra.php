
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
				<h1 class="h1_1" data-testid="">Ingresar la informacion para el pedido. </h1>
				<P class ="p1"> Ahora puedes enviar tus productos a un punto de recogida cercano, para recogerlos donde y cuando más te convenga.  
					<a href="">Articulo</a>
				</P>
				<hr class="hr2">
			</div>
			<div>
				<div class="contenido">
					<div class="columna1">
						<h2> Introduce una nueva dirección de envío:</h2>
						<p>Cuando hayas terminado, haz clic en el botón "Continuar".</p>
						<div class="Form-columna">
							<form method="POST" action="ajax/procesarIngreso.php">
								<div class="texto2">
									<label for="nombre">Nombre y Apellido</label>
								</div>
								<input class="Texto" type="text" name="nombre" maxlength="128"><br>
								<div class="texto2">
									<label for="Ciudad">Ciudad</label>
									<input class="Texto" type="text" name="dirección" maxlength="128">
								</div>
								<div class="texto2">
									<label for="Pais">Pais/Region</label>
									<div>
										<select name= "Paises" class="Texto" id="slc-pais">
										</select>
									</div>
								</div>
								<div class="texto2">
									<label for="Provincia">Numero de Telefono: <span>(<a href="">Mas Informacion</a>)</span></label>
									<input class="Texto" type="text" name="Telefono" maxlength="128">
								</div>          
								<div class="texto2">
									<h2> <b>Preferencias de Entrega </b> <span>(<a href="">¿Que es esto?</a>)</span></h2>
								</div>
								<div class="texto2" >
										<p class="p1"> Por defecto tus pedidos se entregan de <b>Lunes a Sabado</b>.  Si prefieres recibirlos solo entre semana ,cambia tus preferencias en el menu de abajo.</p>
								</div>
								<label class="label1" for="Entrega">¿Quieres entregas tambien los sabados?</label>
								<div style="margin-bottom: 24px" >
									<select class="Texto">
										<option value="Ninguna">Elige una de las opciones.</option>
										<option value="Sabado">Entrega de Lunes a Sabado.</option>
										<option value="NoSabado">No quiero entregas los Sabados.</option>
									</select>
								</div>
								<legend><B>¿Es esta también la dirección de facturación (la dirección que aparece en tu tarjeta de crédito o extracto bancario)?<B/>
								</legend>
								<input type="text" style="display:none;" name="nombre-usuario" value="<?php
if(isset($_GET['usuario'])){
echo $_GET['usuario'];
}
?>">
<input type="text" style="display:none;" name="codigo-articulo" value="<?php
if(isset($_GET['usuario'])){
echo $_GET['articulo'];
}
?>">
								<label class="radio1"> <input  type="radio" name="direccion facturación"> <span >Sí</span>  </label>
								<label class="radio1"> <input  type="radio" name="direccion facturación"> <span >No&nbsp;&nbsp;(Si no, te lo pediremos dentro de un momento.)</span> </label>
								<div >
									<div class="superior2">
										<div class="boton_naranja2">
											<input  type="submit" value= "Continuar" name="Continuar4" class="boton_naranja">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="columna2">
							<h2 >Seleccionar metodo de pago.</h2>
							<p >Dependiendo de la disponibilidad de tu producto, podrás elegir entre estas opciones:</p>
							<span>Consulta las <a href="">Tarifas de Envio </a>. <a href="">Mas informacion. </a></span>
						<table>
							<tr class="tr1">
								<td> <b>seleccione el metodo de pago:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </td>
								<td >
									<select  class="Texto" >
										<option value="Ninguna">Paypal</option>
										<option value="Sabado">Cuenta bancaria.</option>
										<option value="NoSabado">Tarjeta de credito</option>
									</select>
								</td>
							</tr> 
							<tr class="separador2">
							</tr>
							<tr class="separador2">
							</tr>
							<tr>
								<td>
									<label for="Ciudad">Nombre de Tarjeta, cuenta bancaria:</label>
								</td>
								<td>
									<input  type="Text" name="Continuar8" class="Texto">
								</td>
							</tr>
							<tr class="separador2">
							</tr>
							<tr class="separador2">
							</tr>
							<tr>
								<td>
									<label for="Ciudad">codigo de Tarjeta, cuenta bancaria:</label>
								</td>
								<td>
									<input  type="Text" name="Continuar4" class="Texto">
								</td>
							</tr>
							<tr class="separador2">
							</tr>					
							<tr>
								<td>
									<label for="Ciudad">Tipo de envio:</label>
								</td>
								<td>
									<select  class="Texto" >
										<option value="Ninguna">Envio normal </option>
										<option value="Sabado">Envio express</option>
									</select>
								</td>
							</tr>
							<tr class="separador2">
							</tr>
							<tr>
								<td>
									<label for="Ciudad">Seleccione empresa:</label>
								</td>
								<td>
									<select  class="Texto" id="slc-empresa">
		
									</select>
								</td>
							</tr>
						</table>
					</div>
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
    });
</script>
</html>
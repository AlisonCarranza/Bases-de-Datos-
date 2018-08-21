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
	  	   	  	          <img  class="imagenHead" src="recursos/amazon2.gif" alt="Seleccion de direccion de envio-Tramitacion de pedido">
                    </div>

         
	  	    </div>
	  	    <div class="header">
           	        <div>
           	    	     <h1 class="h1_1" data-testid="">Seleccionar una dirección de envío</h1>
           	    	     <h2>¿Te gustaria recoger tu pedido?</h2>
           	    	     <P class ="p1"> Ahora puedes enviar tus productos a un punto de recogida cercano, para recogerlos donde y cuando más te convenga.  
           	    		      <a href="">Selecciona un punto de recogida cercano</a></P>
           	    	     <hr class="hr2">

           	        </div>

           	        <div class="contenido">
           	    	      <div class="columna1">
           	    		            <h2> Introduce una nueva dirección de envío:</h2>
           	    		            <p>Cuando hayas terminado, haz clic en el botón "Siguiente".</p>

           	    	                <div class="Form-columna">

           	    		                  <form >

           	    		  	                      <div class="texto2">
           	    		  	 	                       <label for="Nombre">Nombre y Apellido</label>
                                                       <input class="Texto" type="email" name="email" maxlength="128">

           	    		  	                      </div>

           	    		  	                      <div class="texto2">
           	    		  	 	                       <label for="dirección1">Linea 1 de dirección </label>
                                                       <input class="Texto" type="text" name="dirección" maxlength="128" placeholder="Calle y numero,apartado de correos,nombre empresa.">

           	    		  	                      </div>

           	    		  	                      <div class="texto2">
           	    		  	 	                       <label for="dirección2">Linea 2 de dirección</label>
           	    		  	 	                       <br>
           	    		  	                       	   <font size="-2" ><b> (Añade el NIF para envíos a Canarias, Ceuta y Melilla)</b></font>
                                                       <input class="Texto" type="text" name="dirección" maxlength="128" 
                                                         placeholder="Piso, puerta NIF (para Canarias/Ceuta/Melilla o si necesitas factura)">
           	    		  	                      </div>

           	    		  	                      <div class="texto2">
           	    		  	 	                        <label for="Ciudad">Ciudad</label>
                                                        <input class="Texto" type="text" name="dirección" maxlength="128">

           	    		  	                      </div>

           	    			                      <div class="texto2">
           	    				                        <label for="Provincia">Provincia/Region</label>
                                                        <input class="Texto" type="text" name="dirección" maxlength="128">

           	    			                      </div>

           	    			                      <div class="texto2">
           	    			 	                           <label for="Pais">Pais/Region</label>
           	    			 	                           <div>
           	    			 		                             <select name= "Paises" class="Texto">

           	    			 			                                 <option value="ING">Inglaterra</option>
           	    			 			                                 <option value="HN">Honduras</option>
           	    			 		    
           	    			 	                                  </select>
           	    			 	                           </div>
           	    			 	
           	    			                      </div>

           	    			                      <div class="texto2">
           	    			 	
           	    			                              <label for="Provincia">Numero de Telefono: <span>(<a href="">Mas Informacion</a>)</span></label>
           	    			                              <input class="Texto" type="text" name="Telefono" maxlength="128">

           	    			                      </div>

           	    			               </form>          

           	    			                <div class="texto2">
           	    			 	                    <h2> <b>Preferencias de Entrega </b> <span>(<a href="">¿Que es esto?</a>)</span></h2>

           	    			                </div>

           	    			                <div class="texto2" >
           	    			 	                    <p class="p1"> Por defecto tus pedidos se entregan de <b>Lunes a Sabado</b>.  Si prefieres recibirlos solo entre semana ,cambia tus preferencias en el menu de abajo.</p>
           	    		                    </div>

           	    		      
           	    		                    <label class="label1" for="Entrega">¿Quieres entregas tambien los sabados?</label>
           	    			 	            <div style="margin-bottom: 24px" >
           	    			 		                 <select name= "Opciones" class="Texto">

           	    			 			                 <option value="Ninguna">Elige una de las opciones.</option>
           	    			 			                 <option value="Sabado">Entrega de Lunes a Sabado.</option>
           	    			 			                 <option value="NoSabado">No quiero entregas los Sabados.</option>
           	    			 		    
           	    			 	                    </select>
           	    			 	            </div>
           	    			 	            <legend><B>¿Es esta también la dirección de facturación (la dirección que aparece en tu tarjeta de crédito o extracto bancario)?<B/>
                                            </legend>

           	    			                <label class="radio1"> <input  type="radio" name="direccion facturación"> <span >Sí</span>  </label>
           	    			                <label class="radio1"> <input  type="radio" name="direccion facturación"> <span >No&nbsp;&nbsp;(Si no, te lo pediremos dentro de un momento.)</span> </label>

                                            <div >
                            	                        <div class="superior2">
                            	     	                    <div class="boton_naranja2">
                            	     	     	                  <input  type="submit" value= "Continuar" name="Continuar" class="boton_naranja">
           	    			    	
                            	     	                    </div>
           	    			    	                    </div>
           	    			                </div>
           	    			       </div>

           	    	      
           	    	       </div>
           	    	       <div class="columna2">
           	    	       
           	    	       	     <h2 >Seleccionar un punto de recogida cercano.</h2>
           	    	       	     <p >Dependiendo de la disponibilidad de tu producto, podrás elegir entre estas opciones:</p>
           	    	       	    
           	    	       	     <p><b>- Envio en un dia</b> para Amazon Locker y puntos UPS, Seur y Celeritas </p>
           	    	       	     <p><b>- Envío estándar</b>  para todos los puntos de recogida</p>

           	    	       	     <span>Consulta las <a href="">Tarifas de Envio </a>. <a href="">Mas informacion. </a></span>

           	    	       	     <table>
           	    	       	     	  <tr class="tr1">
           	    	       	     	  	    
           	    	       	     	    <td> <b>Buscar:  </b> </td>
           	    	       	     	    <td >
           	    	       	     	    	
           	    			 		           <select name= "Opciones" class="Texto" >

           	    			 			                 <option value="Ninguna">Todos los puntos de recogida.</option>
           	    			 			                 <option value="Sabado">Celeritas.</option>
           	    			 			                 <option value="NoSabado">Correos.</option>
           	    			 			                 <option value="NoSabado">Seur.</option>
           	    			 			                 <option value="NoSabado">Amazon Locker.</option>
           	    			 			                 <option value="NoSabado">Ups Access point.</option>
           	    			 		    
           	    			 	                </select>

           	    			 	            
           	    			 	        </td>

           	    			 	       </tr> 
           	    			 	       <tr class="separador2">
                                       </tr>
           	    			 	       <tr> 
           	    			 	       	    <td>
           	    			 	       	    	 <label class="radio2"><input  type="radio" name="busqueda"> <b >Buscar por direccion   </b>  </label>
           	    			 	       	    </td>

           	    			 	       	    <td>
           	    			 	       	    	<input type="text" class="Texto1" name="address" id="address" 
           	    			 	       	    	size="40" maxlength="50" value="">
           	    			 	       	    	
           	    			 	       	        <span >p. ej. Calle Aragón 24</span>
           	    			 	       	    </td>
           	    			 	       
           	    			 	       </tr>
           	    			 	       <tr class="separador2">
                                       </tr>

           	    			 	       <tr> 
           	    			 	       	      <td>
           	    			 	       	      	<label class="radio2"> <input  type="radio" name="busqueda"> <span >Buscar por codigo postal </span> </label>

           	    			 	       	      </td>
           	    			 	       	      <td>
           	    			 	       	      	   <input type="text" class="Texto1" name="storeZip" id="storeZip" value="" size="9" maxlength="9">
           	    			 	       	    	   
           	    			 	       	           <span >&nbsp;p. ej. 08860</span>
           	    			 	       	      	

           	    			 	       	      </td>
           	    			 	       	
                                       <tr class="separador2">
                                       </tr>

           	    			 	       </tr>
           	    			 	       <tr>  
           	    			 	       	    <td>
           	    			 	       	    	<label class="radio2"> <input  type="radio" name="busqueda"> <b >Buscar por punto de interes.   </b>  </label>
           	    			 	       	    </td>
           	    			 	       	    <td>
           	    			 	       	    	<input type="text" class="Texto1" name="landmark" id="landmark" size="40" maxlength="50" value="">
           	    			 	       	    	
           	    			 	       	        <span >&nbsp;p. ej.  Estación de Atocha </span>

           	    			 	       	    </td>
           	    			 	       	
           	    			 	       </tr>
           	    			 	       <tr> 
           	    			 	       	    <td>
           	    			 	       	    	<div>
           	    			 	       	    		<input type="image" name="Search" src="recursos/Buscar.png" alt="Buscar">

           	    			 	       	    	</div>

           	    			 	       	    	

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

</body>

</html>
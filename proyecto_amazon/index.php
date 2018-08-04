<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Compras Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="recursos/header.png" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css" />
</head>



<body>
    <div id="barra-navegacion">
        <img id="navbar-amazon" src="recursos/amazon.png">

        <span><select  id="navbar-departamentos">
            <option selected>Todos los departamentos</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select></span>
        <span><input  type="text"  id="navbar-input"></span>
        <span><button id="navbar-icono"><i class="fas fa-search"></i></button></span>
        <span id="navbar-mensaje">Ver todas las ofertas</span>

        <div id="navbar2">
            <img id="navbar-amazon" src="recursos/enviar.png">
            <span id="navbar2-departamentos">
                <select  id="navbar2-departamentos">
                    <option selected>Todos los departamentos</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </span>
            <span id="navbar2-pagina-de-usuario">Tu amazon.com</span>
            <span class="navbar2">Ofertas</span>
            <span class="navbar2">Cheques de regalo</span>
            <span class="navbar2">Vender</span>
            <span class="navbar2">Ayuda</span>
            <span>
                <select  id="navbar2-lenguajes">
                    <option selected>ES</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </span>
            <span id="navbar2-cuenta" style="cursor: default;">Ingresar</span>
            <span id="navbar2-pedidos">Pedidos</span>
            <span id="navbar2-carrito"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;14</span>
        </div>
    </div>


    <div id="barra-de-navegacion2">
        <span><button id="btn-historial">Mi historial de navegacion</button></span>
        <span><button id="btn-perfil">Mi perfil</button></span>
        <span><button id="btn-informacion">Mas informacion</button></span>
    </div>


    <div id="detalles-de-articulo">
        <div id="detalles-de-articulo-resumida">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="recursos/teclado.jpg" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div id="detalles-de-articulo-marca">Marca del articulo</div>
                        <h3 id="detalles-de-articulo-nombre">Nombre del articulo</h3>
                        <span id="detalles-de-articulo-valoracion"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span id="detalles-de-articulo-cantidad-opiniones">xyz opiniones de usuarios</span>
                        <div id="detalles-de-articulo-cantidad-preguntas-respondidas">xyz preguntas respondidas</div><br>
                        <div id="debtalles-de-articulo-caracteristicas">* asdfasdf<br>* asdfggasdf<br>* asdfgqref</div>
                        <div id="detalles-de-articulos-estados"> Usado Nuevo<br>asdfas<br>sdfs<br>asdf<br></div>
                        <div id="detalles-de-articulos-opcion-de-reporte"><i class="far fa-comment-alt"></i>&nbsp;&nbsp;&nbsp;Reportar informacion de producto incorrecta</div>
                        <div id=""></div>
                        <div id=""></div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <div id="detalles-de-articulo-redes-sociales">&nbsp;&nbsp;Compartir:&nbsp;&nbsp;&nbsp;&nbsp;<img style="margin-bottom: 5px;" src="recursos/redes-sociales.png"></div>
                        <div id="cajaPresentacionArticulo"><button style="width: 100%">Agregar a lista</button></div>
                        <div id="cajaPresentacionArticulo">
                            <span id="detalles-de-articulo-estados">Usado:  </span><span id="detalles-de-articulo-precio">$ 4009.00</span><br>
                            <span id="detalles-de-articulo-estados">Nuevo:  </span><span id="detalles-de-articulo-precio">$ 5000.00</span><br>
                            <div id="detalles-de-artculos-envios-disponibles">El envio gratis esta disponible para este producto</div>
                            <div>De segunda mano: Como nuevo</div>
                            <div id="detalles-articulo-vendedor">vendido por: persona X</div>
                            <div id="detalles-de-articulo-empresa-de-envio">envio por: Empresa X</div>
                            <div>Enviar a Honduras</div>
                            <span><button style="background-color: #EFBE44; width:100%;"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Agregar al carrito</button></span></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="realizar-pregunta">
        <h3>¿Tienes alguna pregunta?</h3>
        <div style="font-size: 12px;">busca la informacion del producto, preguntas frecuentes, opiniones...</div><br>
        <span><button id="realizar-pregunta-icono"><i class="fas fa-search"></i></button></span><input type="text" id="realizar-pregunta-input">
        <br><br>
        <div id="reallizar-pregunta-resultados"></div>
    </div>


    <div id="preguntas-realizadas">
        <h3>Preguntas y respuestas de los clientes</h3>
        <div id="preguntas-realizadas-mensaje" style="margin-bottom: 10px; width: 40%;">
            <i class="fas fa-check" style="color:green;"></i>
            &nbsp;Pregunta realizada con exito
        </div>
        <span><button id="preguntas-realizadas-icono"><i class="fas fa-search"></i></button></span>
            <input type="text" id="preguntas-realizadas-input" placeholder="Realiza una pregunta">
        <br><br>
        <div id="preguntas-realizadas-detalles">
            <div class="container contenedor">
                <div class="row">
                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
                        <div id="preguntas-realizadas-votos">
                            <i class="fas fa-sort-up" id="up"></i>
                            <div id="preguntas-realizadas-cantidad-votos">5000</div>
                            <i class="fas fa-caret-down" id="down"></i>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
                        Pregunta:<br><br>
                        Respuesta(s):
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                        <div id="preguntas-realizadas-pregunta" class="pregunta">¿Cual es la derivada de una constante?</div><br>
                        <div id="preguntas-realizadas-respuesta" class="respuesta">Es cero</div><div id="preguntas-realizadas-fecha-respuesta" class="fecha">112/122/122 por persona X</div>
                        <div id="preguntas-realizadas-respuesta" class="respuesta">8/inf v:</div><div id="preguntas-realizadas-fecha-respuesta" class="fecha">112/122/122 por persona Z</div>
                    </div>
                </div>
            </div>
            <div class="container contenedor">
                <div class="row">
                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
                        <div id="preguntas-realizadas-votos">
                            <i class="fas fa-sort-up" id="up"></i>
                            <div id="preguntas-realizadas-cantidad-votos">5000</div>
                            <i class="fas fa-caret-down" id="down"></i>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
                        Pregunta:<br><br>
                        Respuesta(s):
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                        <div id="preguntas-realizadas-pregunta" class="pregunta">¿Cual es la derivada de una constante?</div><br>
                        <div id="preguntas-realizadas-respuesta" class="respuesta">Es cero</div><div id="preguntas-realizadas-fecha-respuesta" class="fecha">112/122/122 por persona X</div>
                    </div>
                </div>
            </div>              
        </div>
    </div>

    <div id="opiniones">
        <h3>Opiniones de clientes</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;<span id="detalles-de-articulo-valoracion"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span id="detalles-de-articulo-cantidad-opiniones">5555555555</span>
        <div>5 estrellas: 500%</div>
        <div>4 estrellas: 500%</div>
        <div>3 estrellas: 500%</div>
        <div>2 estrellas: 500%</div>
        <div>1 estrella: 500%</div>
        <br><br><br>
        <div id="opiniones-usuario">
            &nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fas fa-user-circle"></i></span>
            &nbsp;&nbsp;<span id="opiniones-usuario-nombre">Persona X</span>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span id="opiniones-usuario-valoracion" class="estrella"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            &nbsp;&nbsp;<span id="opiniones-usuario-descripcion">Es un producto muy bueno</span>
            <div class="fecha" id="opiniones-usuario-fecha">&nbsp;&nbsp;&nbsp;&nbsp;112/122/112</div>
            <div id="opiniones-usuario-mensaje">&nbsp;&nbsp;&nbsp;&nbsp;Desde que lo compre, mi trabajo se ha tornado mas entretenido.</div>
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fas fa-user-circle"></i></span>
            &nbsp;&nbsp;<span id="opiniones-usuario-nombre">Persona X</span>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span id="opiniones-usuario-valoracion" class="estrella">estrellas</span>
            &nbsp;&nbsp;<span id="opiniones-usuario-descripcion">Es un producto muy bueno</span>
            <div class="fecha" id="opiniones-usuario-fecha">&nbsp;&nbsp;&nbsp;&nbsp;112/122/112</div>
            <div id="opiniones-usuario-mensaje">&nbsp;&nbsp;&nbsp;&nbsp;Desde que lo compre, mi trabajo se ha tornado mas entretenido.</div>
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fas fa-user-circle"></i></span>
            &nbsp;&nbsp;<span id="opiniones-usuario-nombre">Persona X</span>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span id="opiniones-usuario-valoracion" class="estrella">estrellas</span>
            &nbsp;&nbsp;<span id="opiniones-usuario-descripcion">Es un producto muy bueno</span>
            <div class="fecha" id="opiniones-usuario-fecha">&nbsp;&nbsp;&nbsp;&nbsp;112/122/112</div>
            <div id="opiniones-usuario-mensaje">&nbsp;&nbsp;&nbsp;&nbsp;Desde que lo compre, mi trabajo se ha tornado mas entretenido.</div>
            <br><br>
        </div>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="recursos/c1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="recursos/c2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="recursos/c3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="recursos/c4.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="recursos/c5.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="recursos/c6.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div id="historial">
    </div>


    <div id="opciones-de-inicio1">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <div id="inicio1-contenedor">
                        <div id="inicio1-titulo">Pedidos</div>
                        <div id="inicio1-imagen"><img src="recursos/pedidos.png"></div>
                        <div id="inicio1-descripcion">Ver todos los pedidos</div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <div id="inicio1-contenedor">
                        <div id="inicio1-titulo">Vistos recientemente</div>
                        <div id="inicio1-imagen"><img src="recursos/intel.jpg"></div>
                        <div id="inicio1-descripcion">Articulos vistos recientemente</div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <div id="inicio1-contenedor">
                        <div id="inicio1-titulo">Oferta del dia</div>
                        <div id="inicio1-imagen"><img src="recursos/intel.jpg"></div>
                        <div id="inicio1-descripcion">$400.00</div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <div id="inicio1-contenedor">
                        <div id="inicio1-titulo">Prueba prime</div>
                        <div id="inicio1-imagen"><img src="recursos/prime.png"></div>
                        <div id="inicio1-descripcion">Ahorra, mira, escucha, lee. Prueba prime</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="opciones-de-inicio2">
        <div id="inicio-contenedor-imagen">
            <img src="recursos/anuncio1.png" id="incio2-contenedor-imagen-posicion">
        </div>
        <div id="inicio-contenedor-imagen">
            <img src="recursos/anuncio2.png" id="incio2-contenedor-imagen-posicion">
        </div>
        <div id="inicio-contenedor-imagen">
            <img src="recursos/anuncio3.png" id="incio2-contenedor-imagen-posicion">
        </div>    
    </div>


    <div id="ofertas">
        <h4>Ofertas</h4>    
        <span>&nbsp;&nbsp;&nbsp;&nbsp;ver mas...</span>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >
                    <div id="presentacionArticulo">
                        <div id="presentacionArticulo-imagen"><img src="recursos/intel.jpg"></div>
                        <div id="presentacionArticulo-descripcion"><div id="nombre-articulo">Intel Corp. BX80660E51620V4 Xeon…</div><br>
                        <span id="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span id="cantidad-usuarios-calificadores">(5)</span>
                        <div id="precio-articulo">$400.00</div>
                        <span><button>Mas como esto</button></span>
                        <span><button>Eliminar</button></span></div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >
                    <div id="presentacionArticulo">
                        <div id="presentacionArticulo-imagen"><img src="recursos/intel.jpg"></div>
                        <div id="presentacionArticulo-descripcion"><div id="nombre-articulo">Intel Corp. BX80660E51620V4 Xeon…</div><br>
                        <span id="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span id="cantidad-usuarios-calificadores">(5)</span>
                        <div id="precio-articulo">$400.00</div>
                        <span><button>Mas como esto</button></span>
                        <span><button>Eliminar</button></span></div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >
                    <div id="presentacionArticulo">
                        <div id="presentacionArticulo-imagen"><img src="recursos/intel.jpg"></div>
                        <div id="presentacionArticulo-descripcion"><div id="nombre-articulo">Intel Corp. BX80660E51620V4 Xeon…</div><br>
                        <span id="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span id="cantidad-usuarios-calificadores">(5)</span>
                        <div id="precio-articulo">$400.00</div>
                        <span><button>Mas como esto</button></span>
                        <span><button>Eliminar</button></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="perfil">
        <div id="perfil-saludo">
            <i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Amazon de persona X
        </div>
        <div id="perfil-pedidos" class"container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div id-="perfil-pedidos-">
                        <h3 id="perfil-pedido-titulo">Pedidos X</h3>
                        <div id="perfil-pedido-articulo">Comedor</div>
                        <div id="perfil-pedido-precio-articulo">Costo de articulo: $344.00</div>
                        <div id="perfil-pedido-precio-envio">Costo de envio: $ 10.00</div>
                        <div id="perfil-pedido-precio-total">Costo total: $354.00</div>
                        <div id="perfil-pedido-fecha-comprado">1122/1222/122</div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div>
            <h3>Tarjetas de regalo</h3>
        </div>       
    </div>
    

    <div id="pie-de-pagina">
        <div id="pie-de-pagina-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    One of three columns
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    One of three columns
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    One of three columns
                    </div>
                </div>
            </div>
        </div>
        <div id="pie-de-pagina-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    One of three columns
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    One of three columns
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    One of three columns
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center; background-color: #131A22;">
            <img src="recursos/pie-de-pagina.png">
        </div>
    </div>
</body>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
<script src="js/controlador.js"></script>
<script defer src="js/all.js" crossorigin="anonymous"></script>
</html>
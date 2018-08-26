$('#navbar-amazon').click(function(){
    location.reload();
});


function borrarDetallesDeArticulo(){
    $("#detalles-de-articulo").css("display","none");
}


function borrarRealizarPregunta(){
    $("#realizar-pregunta").css("display","none");
    $("#realizar-pregunta").css('padding','0%');
}


function borrarPreguntasRealizadas(){
    $("#preguntas-realizadas").css("display","none");
    $("#preguntas-realizadas").css('padding','0%');
}


function borrarOpiniones(){
    $("#opiniones").css("display","none");
}


function borrarCarrousel(){
    $("#carouselExampleIndicators").css("display","none");
}


function borrarHistorial(){
    $("#historial").css("display","none");
}


function borrarInicio1(){
    $("#opciones-de-inicio1").css("display","none");
    $("#opciones-de-inicio1").css('height','0px');
    $("#opciones-de-inicio1").css('padding','0%');
}


function borrarInicio2(){
    $("#opciones-de-inicio2").css("display","none");
    $("#opciones-de-inicio2").css('padding','0%');
}


function borrarOfertas(){
    $('#ofertas').css("display","none");
}


function borrarPerfil(){
    $("#perfil").css("display","none");
}


function borrarPedidos(){
    $("#pedidos").css("display","none");
}


function borrarCarrito(){
    $("#carrito").css("display","none");
}


function borrarCarritoGasto(){
    $("#carrito-gasto").css("display","none");
}


function borrarDepartamento(){
    $('#departamento').css('display','none');
}


function borrarTodosLosDepartamentos(){
    $('#todos-los-departamentos').css('display','none');
}


$(document).ready(function(){
    localStorage.setItem('nombre', $('#navbar2-ancle-cuenta').text());
    //console.log(localStorage.getItem('nombre'));
    jQuery('html,body').animate({scrollTop:0},0);
    borrarDetallesDeArticulo();
    borrarHistorial();
    borrarRealizarPregunta();
    borrarPreguntasRealizadas();
    borrarOpiniones();
    borrarPerfil();
    borrarCarrito();
    borrarCarritoGasto();
    borrarPedidos();
    borrarDepartamento();
    borrarTodosLosDepartamentos();
    if(localStorage.getItem('nombre') == 'Ingresar'){
        borrarInicio1();
        $('#navbar2-carrito').removeAttr('onclick');
        redirigir();
        $('#navbar2-carrito').html('<i class="fas fa-cart-plus"></i>&nbsp;&nbsp;0');
    }else{
        $('#navbar2-ancle-cuenta').removeAttr('href');
        $('#btn-carrito').removeAttr('href');
        $('#perfil-saludo').append('<i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Amazon de&nbsp;'+
        localStorage.getItem('nombre')+
        '<br><br>'+
        '<a href="logout.php"><h5>Salir</h5></a><a href="formVenta.php?usuario='+localStorage.getItem('nombre')+'"><h5>Vender en Amazon</h5></a>');
        var parametro = "nombre="+localStorage.getItem('nombre');
        //console.log(parametro);
        $.ajax({
            url:"ajax/api.php?accion=cantidadCarrito",
            data: parametro,
            method: 'GET',
            dataType: "json",
            success: function(respuesta){
                console.log(respuesta);
                $('#navbar2-carrito').html('<i class="fas fa-cart-plus"></i>&nbsp;&nbsp;'+respuesta.cantidadCarrito);
            },
            error: function(error){
                console.log(error);
                alert("Falta respuesta del servidor");
            }
        });
    }
    $('#row-ofertas').html('');
    $.ajax({
        url:"ajax/api.php?accion=cargarDepartamentos",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            for(var i=0; i<respuesta.length; i++){
                var str = respuesta[i].DESCRIPCION;
                $('#navbar2-departamentos').append('<option value="'+str+'">'+str+'</option>');
                $('#navbar-departamentos').append('<option value="'+str+'">'+str+'</option>');
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    var s = 0;
    $.ajax({
        url:"ajax/api.php?accion=cargar4Ofertas",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            //console.log(respuesta.length);
            for(var i=0; i<respuesta.length/2; i++ ){
                if(i==0){
                    s = 1;
                }else{
                    s = (((i+1)*2)-1);
                }
                $('#row-ofertas').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                '    <div id="presentacionArticulo4Ofertas'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo('+respuesta[i*2].CODIGO_ARTICULO+');">'+
                '        <div id="presentacionArticulo4Ofertas-imagen'+i+'" class="presentacionArticulo-imagen"></div>'+
                '        <div id="presentacionArticulo4Ofertas-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articulo4Ofertas'+i+'" class="nombre-articulo">'+respuesta[i*2].NOMBRE_ARTICULO+'</div><br>'+
                '        <span id="valoracion-articulo4Ofertas'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                '        <span id="cantidad-usuarios-calificadores4Ofertas'+i+'">(5)</span>'+
                '        <div id="precio-articulo4Ofertas'+i+'" class="precio-articulo">$ '+respuesta[i*2].PRECIO+'.00</div>'+
                '        <span><button>Mas como esto</button></span>'+
                '        <span><button>Eliminar</button></span></div>'+
                '    </div>'+
                '</div>');
                prepararImagen('presentacionArticulo4Ofertas-imagen'+i, respuesta[s]);
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    $.ajax({
        url:"ajax/api.php?accion=cargarIdiomas",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            for(var i=0; i<respuesta.length; i++){
                var str = respuesta[i].NOMBRE_IDIOMA;
                $('#navbar2-lenguajes').append('<option value="'+primeraMayuscula(str)+'">'+primeraMayuscula(str)+'</option>');
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    $.ajax({
        url:"ajax/api.php?accion=cargarPiePagina",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            //console.log(Object.keys(respuesta.parte1));
            //console.log(Object.keys(respuesta.parte2));
            for(var i=0; i<Object.keys(respuesta.parte1).length; i++){
                $('#pie-pagina-1-titulo').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " style="margin-top: 20px;">'+respuesta.parte1[i].CODIGO_SUBTEMA+'</div>');
            }
            for(var i=0; i<Object.keys(respuesta.parte2).length; i++){
                $('#pie-pagina-2-titulo').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " style="margin-top: 20px;"><h6>'+respuesta.parte2[i].CODIGO_TEMA+'</h6>'+respuesta.parte2[i].DESCRIPCION+'</div>');
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    $.ajax({
        url:"ajax/api.php?accion=cargarVariasImagenes",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            prepararImagen('inicio1-imagen2', respuesta.imagen0);
            $('#inicio1-imagen3').attr('onclick','verDetallesDeArticulo('+respuesta.codigo1+');');
            prepararImagen('inicio1-imagen3', respuesta.imagen1);
        },
        error: function(error){
            //console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
});


function primeraMayuscula(string){
    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
}


//, $('#'+idEtiqueta).height()   $('#'+idEtiqueta).width()
function prepararImagen(idEtiqueta, respuestaHashMapJSON){
    var image = new Image($('#'+idEtiqueta).height());
    image.src = 'data:image/png;base64,'+respuestaHashMapJSON;
    $('#'+idEtiqueta).append(image);
}


function prepararImagenVistaPrevia(idEtiqueta, respuestaHashMapJSON, idImagen){
    var image = new Image($('#'+idEtiqueta).height());
    image.src = 'data:image/png;base64,'+respuestaHashMapJSON;
    image.id = idImagen;
    $('#'+idEtiqueta).append(image);
}


function borrarTodo(){
    borrarCarrousel();
    borrarInicio1();
    borrarInicio2();
    borrarDetallesDeArticulo();
    borrarRealizarPregunta();
    borrarPreguntasRealizadas();
    borrarOpiniones();
    borrarHistorial();
    borrarOfertas();
    borrarPerfil();
    borrarPedidos();
    borrarCarrito();
    borrarCarritoGasto();
    borrarDepartamento();
    borrarTodosLosDepartamentos();
    jQuery('html,body').animate({scrollTop:0},0);
}


function verHistorial(){
    borrarTodo();
    $('#historial').css('display','block');
    $('#row-historial').html('');
    if(localStorage.getItem('nombre')=='Ingresar'){
        verPerfil();
        return false;
    }else{
        var s = 0;
        $.ajax({
            url:"ajax/api.php?accion=cargarOfertas",
            method: 'GET',
            dataType: "json",
            success: function(respuesta){
                //console.log(respuesta);
                for(var i=0; i<respuesta.length; i++ ){
                    if(i==0){
                        s = 1;
                    }else{
                        s = (((i+1)*2)-1);
                    }
                    $('#row-historial').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                    '    <div id="presentacionArticuloHistorial'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo('+respuesta[i*2].CODIGO_ARTICULO+');">'+
                    '        <div id="presentacionArticuloHistorial-imagen'+i+'" class="presentacionArticulo-imagen"></div>'+
                    '        <div id="presentacionArticuloHistorial-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articuloHistorial'+i+'" class="nombre-articulo">'+respuesta[i*2].NOMBRE_ARTICULO+'</div><br>'+
                    '        <span id="valoracion-articuloHistorial'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                    '        <span id="cantidad-usuarios-calificadoresHistorial'+i+'">(5)</span>'+
                    '        <div id="precio-articuloHistorial'+i+'" class="precio-articulo">$ '+respuesta[i*2].PRECIO+'.00</div>'+
                    '        <span><button>Mas como esto</button></span>'+
                    '        <span><button>Eliminar</button></span></div>'+
                    '    </div>'+
                    '</div>');
                    prepararImagen('presentacionArticuloHistorial-imagen'+i, respuesta[s]);
                }
            },
            error: function(error){
                console.log(error);
                alert("Falta respuesta del servidor");
            }
        });
    }
}


function verPerfil(){
    borrarTodo();
    $('#perfil').css('display', 'block');
    if(localStorage.getItem('nombre')=='Ingresar'){
        $('#perfil-saludo').html('&nbsp;Por favor registrate o inicia sesion.<br><br>'+
        '<a href="Form3.php"><h5>Nueva cuenta en amazon</h5></a><br><a href="Form1.php"><h5>Iniciar sesion</h5></a>');
    }else{
        //$('#pedidos').css('display','block');
        /*verPedidos();
        var pedidos = $('#pedidos > div').detach();
        pedidos.appendTo('#perfil-pedidos');
        $('#perfil').css('display', 'block');
        $('#pedidos-boton-activado').html('<h4>Pedidos</h4>');
        //$('#pedidos').css('display','none');*/
    }
}


$('#navbar2-carrito').click(function(){
    borrarTodo();
    if(localStorage.getItem('nombre')=='Ingresar'){
        verPerfil();
    }else{
        $('#carrito').css('display','block');
    }
});


function verPedidos(){
    borrarTodo();
    if(localStorage.getItem('nombre')=='Ingresar'){
        verPerfil();
    }else{
        /*var pedidos = $('#pedidos > div').detach();
        pedidos.appendTo('#pedidos');*/
        $('#pedidos').css('display','block');
        $('#row-pedidos').html('');
        $('#pedidos-boton-activado').html('');
        var parametro = "nombre="+localStorage.getItem('nombre');
        $('#carrito-contenedor').html('');
        //console.log(parametro+'//');
        var costoEnvio = 10;
        $.ajax({
            url:"ajax/api.php?accion=articulosPedidos",
            data: parametro,
            method: 'GET',
            dataType: "json",
            success: function(respuesta){
                console.log(respuesta);
                console.log(Object.keys(respuesta).length);
                if(Object.keys(respuesta.imagen).length == 0 ){
                    $('#row-pedidos').html('<br><br><br>Sin contenido <br><br><br>');
                    $('#row-pedidos').css('margin-left','30%');
                }else{
                    for(var i=0; i<Object.keys(respuesta.imagen).length;i++){
                        $('#row-pedidos').append('<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 "> '+
                            '<div id="perfil-pedidos'+i+'" class="articulo" onclick="verDetallesDeArticulo('+respuesta.codigoArticulo[i]+');"> '+
                            '    <div class="container"> '+
                            '        <div class="row"> '+
                            '            <div id="pedidos-contenedor-imagen'+i+'" class="col-sm-6 col-md-6 col-lg-6 col-xl-6" class="carrito-contenedor-imagen" style="padding-top: 15px;"></div> '+
                            '                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="padding-bottom:20px;"> '+
                            '                <div id="perfil-pedido-articulo'+i+'" style="margin-top: 30px;">'+respuesta.nombre[i]+'</div> '+
                            '                <div id="perfil-pedido-precio-articulo'+i+'">precio: $ '+respuesta.precio[i]+'.00</div> '+
                            '                <div id="perfil-pedido-precio-envio'+i+'">Costo de envio: $ '+costoEnvio+'.00</div> '+
                            '                <div id="perfil-pedido-precio-total'+i+'">Costo total: $'+(parseInt(costoEnvio)+parseInt(respuesta.precio[i]))+'.00</div> '+
                            '                <div id="perfil-pedido-empresa-transporte'+i+'">'+respuesta.envio[i]+'</div> '+
                            '                <div id="perfil-pedido-fecha-comprado'+i+'">'+respuesta.fecha[i]+'</div> '+
                            '            </div></div></div></div></div>');
                        prepararImagen('pedidos-contenedor-imagen'+i,respuesta.imagen[i]);
                    }
                }
            },
            error: function(error){
                console.log(error);
                alert("Falta respuesta del servidor");
            }
        });
    }
    
}


function verOfertas(){
    borrarTodo();
    $('#ofertas').css('display','block');
    $('#mensaje-ofertas').html('Ofertas');
}

function verTodasLasOfertas(){
    verOfertas();
    $('#verMas').css('display','none');
    $('#row-ofertas').html('');
    /*$.ajax({
        url:"ajax/api.php?accion=cargarOfertas",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            for(var i=0; i<respuesta.length; i++ ){
                $('#row-ofertas').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                '    <div id="presentacionArticulo'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo();">'+
                '        <div id="presentacionArticulo-imagen-oferta'+i+'" class="presentacionArticulo-imagen"></div>'+
                '        <div id="presentacionArticulo-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articulo'+i+'" class="nombre-articulo">'+respuesta[i].NOMBRE_ARTICULO+'</div><br>'+
                '        <span id="valoracion-articulo'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                '        <span id="cantidad-usuarios-calificadores'+i+'">(5)</span>'+
                '        <div id="precio-articulo'+i+'" class="precio-articulo">'+respuesta[i].PRECIO+'</div>'+
                '        <span><button>Mas como esto</button></span>'+
                '        <span><button>Eliminar</button></span></div>'+
                '    </div>'+
                '</div>');
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });*/
    var s = 0;
    $.ajax({
        url:"ajax/api.php?accion=cargarOfertas",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            //console.log(respuesta.length);
            for(var i=0; i<respuesta.length/2; i++ ){
                if(i==0){
                    s = 1;
                }else{
                    s = (((i+1)*2)-1);
                }
                $('#row-ofertas').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                '    <div id="presentacionArticulo4Ofertas'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo('+respuesta[i*2].CODIGO_ARTICULO+');">'+
                '        <div id="presentacionArticulo4Ofertas-imagen'+i+'" class="presentacionArticulo-imagen"></div>'+
                '        <div id="presentacionArticulo4Ofertas-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articulo4Ofertas'+i+'" class="nombre-articulo">'+respuesta[i*2].NOMBRE_ARTICULO+'</div><br>'+
                '        <span id="valoracion-articulo4Ofertas'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                '        <span id="cantidad-usuarios-calificadores4Ofertas'+i+'">(5)</span>'+
                '        <div id="precio-articulo4Ofertas'+i+'" class="precio-articulo">$ '+respuesta[i*2].PRECIO+'.00</div>'+
                '        <span><button>Mas como esto</button></span>'+
                '        <span><button>Eliminar</button></span></div>'+
                '    </div>'+
                '</div>');
                prepararImagen('presentacionArticulo4Ofertas-imagen'+i, respuesta[s]);
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
}


function verDetallesDeArticulo(id){
    borrarTodo();
    jQuery('html,body').animate({scrollTop:0},0);
    $('#detalles-de-articulo').css('display','block');
    $('#realizar-pregunta').css('display','block');
    $("#realizar-pregunta").css('padding','25px 25px 25px 25px');
    $('#preguntas-realizadas').css('display','block');
    $("#preguntas-realizadas").css('padding','25px 25px 25px 25px');
    $('#todas-las-imagenes').html('');
    $('#preguntas-realizadas-detalles').html('');
    $('#opiniones-usuario').html('');
    $('#opiniones').css('display','block');
    $("#opiniones").css('padding','25px 25px 25px 25px');
    $.ajax({
        url:"ajax/api.php?accion=imagenesDeArticulo",
        data: 'codigo='+id,
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            //console.log(respuesta.length);
            for(var i=0; i<respuesta.length; i++ ){
                if(i==0){
                    $('#todas-las-imagenes').append('<div id="div-imagen-principal"></div>');
                    prepararImagenVistaPrevia('div-imagen-principal', respuesta[i],'imagen'+i);
                    $('#imagen'+i).attr('onclick','vistaPrevia();');
                    $('#imagen'+i).attr('class','carrito-contenedor-imagen');
                    $('#imagen'+i).attr('data-toggle','modal');
                    $('#imagen'+i).attr('data-target','#modal-imagen');
                }else{
                    $('#todas-las-imagenes').append('<span id="span-imagenes-secundarias'+i+'"></span>');
                    prepararImagenVistaPrevia('span-imagenes-secundarias'+i, respuesta[i],'imagen-p'+i);
                    $('#imagen-p'+i).attr('onclick','vistaPrevia();');
                    $('#imagen-p'+i).attr('class','imagen-p');
                    $('#imagen-p'+i).attr('data-toggle','modal');
                    $('#imagen-p'+i).attr('data-target','#modal-imagen');
                }
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    $('#detalles-de-articulo-caracteristicas').html('');
    $('#detalles-de-articulo-empresa-de-envio').html('Envio por: <br>');
    $.ajax({
        url:"ajax/api.php?accion=informacionDeArticulo",
        data: 'codigo='+id,
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            //console.log(Object.keys(respuesta).length);
            //console.log(Object.keys(respuesta.caracteristica).length);
            $('#detalles-de-articulo-marca').html(respuesta.marca);
            $('#detalles-de-articulo-nombre').html(respuesta.nombre);
            $('#detalles-de-articulo-precio').html("$ "+respuesta.precio+".00");
            $('#detalles-de-artculos-envios-disponibles').html('Envios a nivel '+respuesta.tipoEnvio);
            $('#detalles-articulo-vendedor').html('Vendido por: '+respuesta.usuario);
            $('#detalles-de-articulo-fecha').html('Fecha de publicacion: '+respuesta.fechaPublicacion);
            $('#detalles-de-articulo-cantidad-opiniones').html(respuesta.cantidadOpiniones+' opinion(es) de usuario(s)');
            $('#detalles-de-articulo-cantidad-preguntas-respondidas').html(respuesta.cantidadPreguntas+' pregunta(s) respondida(s)');
            $('#detalles-de-articulo-valoracion').html('');
            $('#detalles-de-articulos-descripcion').html('descripcion: '+respuesta.descripcion);
            localStorage.setItem('codigo-articulo',respuesta.codigoArticulo);
            for(var i=0;i<respuesta.cantidadEstrellas;i++){
                $('#detalles-de-articulo-valoracion').append('<i class="fas fa-star"></i>');
            }
            $('#detalles-de-articulos-cantidad').html('Cantidad: '+respuesta.cantidad+'<br>');
            for(var i=0; i<Object.keys(respuesta.caracteristica).length; i++){
                $('#detalles-de-articulo-caracteristicas').append("* "+respuesta.caracteristica[i].CARACTERISTICA+'<br>');
            }
            for(var i=0; i<Object.keys(respuesta.empresas).length; i++){
                $('#detalles-de-articulo-empresa-de-envio').append("        -"+respuesta.empresas[i].NOMBRE_EMPRESA_ENVIO+'<br>');
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    /* */ 
    $.ajax({
        url:"ajax/api.php?accion=cargarPreguntas",
        data: 'codigo='+id,
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            //console.log(Object.keys(respuesta.Departamentos).length);
            if(Object.keys(respuesta).length == 0 ){
                $('#preguntas-realizadas-detalles').html('<br><br><br>Sin contenido <br><br><br>');
                $('#preguntas-realizadas-detalles').css('margin-left','30%');
            }else{
                $('#opiniones-usuario').css('margin-left','8%');
                for(var i=0; i<Object.keys(respuesta.preguntas).length; i++ ){
                    $('#preguntas-realizadas-detalles').append('<div class="container contenedor" id="contenedor'+i+'">'+
                        '<div class="row">'+
                        '    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">'+
                        '        <div class="preguntas-realizadas-votos" id="preguntas-realizadas-votos'+i+'">'+
                        '            <i class="fas fa-sort-up" id="up"></i>'+
                        '            <div id="preguntas-realizadas-cantidad-votos'+i+'">32</div>'+
                        '            <i class="fas fa-caret-down" id="down"></i>'+
                        '        </div>'+
                        '    </div>'+
                        '    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 ">'+
                        '        Pregunta:<br><br>'+
                        '        Respuesta(s):'+
                        '    </div>'+
                        '    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 " id="grilla'+respuesta.preguntas[i].CODIGO_PREGUNTA+'">'+
                        '        <div id="preguntas-realizadas-pregunta'+respuesta.preguntas[i].CODIGO_PREGUNTA+'" class="pregunta">'+respuesta.preguntas[i].CONTENIDO+'</div><br>');
                    $('#preguntas-realizadas-detalles').append('</div></div></div>');
                }
                for(var j=0; j<Object.keys(respuesta.respuestas).length; j++){
                    $('#grilla'+respuesta.respuestas[j].CODIGO_PREGUNTA).append('<div id="preguntas-realizadas-respuesta'
                    +respuesta.respuestas[j].CODIGO_RESPUESTA+'" class="respuesta">'+respuesta.respuestas[j].CONTENIDO+'</div><div id="preguntas-realizadas-fecha-respuesta" class="fecha">El '
                    +respuesta.respuestas[j].FECHA_PUBLICACION+' por '+respuesta.respuestas[j].NOMBRE_USUARIO+'</div>');
                }
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    cargarOpiniones(id);
}


function vistaPrevia(){
    //$('#todas-las-imagenes').on('click','span',function(){
    //alert(event.target.id);
    //});
    //alert("'#"+event.target.id+"'");
    var ruta = $('#'+event.target.id).attr('src');
    $('#imagen-de-modal').html('<img style="width: 100%" id="'+event.target.id+'" src="'+ruta+'">');
}   


function verDepartamento(tipo){
    borrarTodo();
    if(tipo==1){
        var nombreDepartamento = $('#'+event.target.id).find(":selected").val();
        if(nombreDepartamento == "todos"){
            verTodosLosDepartamentos();
            return false;
        }
    }else{
        var nombreDepartamento = $('#'+tipo).text();
        //alert(nombreDepartamento);
    }
    //alert(nombreDepartamento);
    var s = 0;
    $('#h4-nombre-depto').html('Departamento de '+nombreDepartamento);
    $('#departamento').css('display','block');
    $('#row-departamento').html('');
    //console.log('a||'+nombreDepartamento+'||');
    $.ajax({
        url:"ajax/api.php?accion=cargarPorDepartamento",
        data: 'codigo='+nombreDepartamento,
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            if(respuesta.length == 0){
                $('#row-departamento').html('<br><br><br><br>Articulos agotados<br><br><br><br><br>');
            }
            for(var i=0; i<respuesta.length/2; i++ ){
                if(i==0){
                    s = 1;
                }else{
                    s = (((i+1)*2)-1);
                }
                $('#row-departamento').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                '    <div id="presentacionArticulo'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo('+respuesta[i*2].CODIGO_ARTICULO+');">'+
                '        <div id="presentacionArticuloDepartamento-imagen'+i+'" class="presentacionArticulo-imagen"></div>'+
                '        <div id="presentacionArticuloDepartamento-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articuloDepartamento'+i+'" class="nombre-articulo">'+respuesta[i*2].NOMBRE_ARTICULO+'</div><br>'+
                '        <span id="valoracion-articulodepatamento'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                '        <span id="cantidad-usuarios-calificadoresDepartamento'+i+'">(5)</span>'+
                '        <div id="precio-articuloDepartamento'+i+'" class="precio-articulo">$ '+respuesta[i*2].PRECIO+'.00</div>'+
                '        <span><button>Mas como esto</button></span>'+
                '        <span><button>Eliminar</button></span></div>'+
                '    </div>'+
                '</div>');
                prepararImagen('presentacionArticuloDepartamento-imagen'+i, respuesta[s]);
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
}

function verTodosLosDepartamentos(){
    borrarTodo();
    $('#todos-los-departamentos').css('display','block');
    $('#row-todos-los-departamentos').html('');
    $.ajax({
        url:"ajax/api.php?accion=cargarDepartamentos2",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            for(var i=0; i<Object.keys(respuesta.Departamentos).length; i++ ){
                $('#row-todos-los-departamentos').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">'+
                '    <div class="presentacionDepartamento" id="presentacionDepartamento'+i+'" onclick="verDepartamento(\''+'presentacionDepartamento-nombre'+i+'\');">'+
                '        <div class="presentacionArticulo-imagen" id="presentacionArticulo-imagen-departamento'+i+'"></div>'+
                '        <br>'+
                '        <div id="presentacionDepartamento-nombre'+i+'" value="'+respuesta.Departamentos[i]+'"><h6>'+respuesta.Departamentos[i]+'</h6></div><br>'+
                '    </div>'+
                '</div>');
                if(respuesta.imagen[i] != 0){
                    prepararImagen('presentacionArticulo-imagen-departamento'+i, respuesta.imagen[i]);
                }
                else{
                    $('#presentacionArticulo-imagen-departamento'+i).html("<br><br><br>Articulos agotados");
                }
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
}

function validarCantidad(K){
    if($('#input-cantidad-de-articulo').val() == '' ){
        alert('Cantidad invalida');
    }else{
        document.location.href = 'formCompra.php?usuario='+localStorage.getItem('nombre')+
        '&articulo='+K;
    }
}

function redirigir(){
    $('#btn-carrito').attr('href','Form1.php');
}

function cargarOpiniones(id){
    $('#opiniones-usuario-valoracion').html('');
    $.ajax({
        url:"ajax/api.php?accion=cargarOpiniones",
        data: 'codigo='+id,
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            //console.log(respuesta);
            //console.log(Object.keys(respuesta.Departamentos).length);
            if(Object.keys(respuesta).length == 0 ){
                $('#opiniones-usuario').html('<br><br><br>Sin opiniones <br><br><br>');
                $('#opiniones-usuario').css('margin-left','30%');
            }else{
                $('#opiniones-usuario').css('margin-left','8%');
                for(var i=0; i<respuesta.length; i++ ){
                    $('#opiniones-usuario').append('&nbsp;&nbsp;&nbsp;&nbsp;<span>'+
                    '<i class="fas fa-user-circle"></i></span>'+
                    '&nbsp;&nbsp;<span id="opiniones-usuario-nombre'+i+'">'+respuesta[i].NOMBRE_USUARIO+'</span><br>'+
                    '&nbsp;&nbsp;&nbsp;&nbsp;<span id="opiniones-usuario-valoracion'+i+'" class="estrella">');
                    for(var j=0; j<respuesta[i].CODIGO_CANTIDAD_ESTRELLAS;j++){
                        $('#opiniones-usuario-valoracion'+i).append('<i class="fas fa-star"></i>');
                    }
                    $('#opiniones-usuario').append('</span>'+
                    '&nbsp;&nbsp;<span id="opiniones-usuario-descripcion'+i+'">Es un producto muy bueno</span>'+
                    '<div class="fecha" id="opiniones-usuario-fecha'+i+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+respuesta[i].FECHA+'</div>'+
                    '<div id="opiniones-usuario-mensaje'+i+'">&nbsp;&nbsp;&nbsp;&nbsp;'+respuesta[i].CONTENIDO+'</div>'+
                    '<br><br>');
                }
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
}

function verCarrito(){
    var parametro = "nombre="+localStorage.getItem('nombre');
    $('#carrito-contenedor').html('');
    //console.log(parametro+'//');
    $.ajax({
        url:"ajax/api.php?accion=articulosCarrito",
        data: parametro,
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            console.log(Object.keys(respuesta).length);
            if(Object.keys(respuesta).length == 0 ){
                $('#carrito-contenedor').html('<br><br><br>Sin contenido<br><br><br>');
                $('#carrito-contenedor').css('margin-left','30%');
            }else{
                for(var i=0; i<Object.keys(respuesta.nombre).length;i++){
                    $('#carrito-contenedor').append('<div class="row" id="row-carrito'+i+'" style="margin-bottom:50px;"><div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" id="carrito-contenedor-detalles'+i+'" class="carrito-contenedor-detalles">'+
                    '    <div class="container"><div class="row"><div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" '+
                    'onclick="verDetallesDeArticulo();" id="carrito-contenedor-imagen'+i+'" class="carrito-contenedor-imagen"></div>'+
                    '            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" id="carrito-contenedor-descripcion'+i+'" class="carrito-contenedor-descripcion">'+
                    '                <h5 id="carrito-contenedor-nombre'+i+'">'+respuesta.nombre[i]+'</h5>'+
                    '                <div style="color: green; margin-top: 10px; margin-bottom: 10px;">Disponible</div>'+
                    '                <div><span><button id="btn-eliminar-de-carrito">Eliminar</button></span></div></div></div></div></div>'+
                    '<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="carrito-contenedor-precio'+i+'" class="carrito-contenedor-precio">$ '+respuesta.precio[i]+'.00</div>'+
                    '<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="carrito-contendor-cantidad" class="carrito-contendor-cantidad">'+
                    '    <input type="number" min="0" step="1" id="input-cantidad-de-articulo" placeholder="Cantidad">'+
                    '    <button type="button" class="btn btn-success" style="margin-top: 20px;" onclick="validarCantidad('+respuesta.codigo[i]+');">Comprar</button></div></div>');
                    prepararImagen('carrito-contenedor-imagen'+i,respuesta.imagen[i]);
                }
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
}


function agregarACarrito(){
    var parametro = 'codigo='+localStorage.getItem('codigo-articulo')+'&usuario='+localStorage.getItem('nombre');
    $.ajax({
        url:"ajax/api.php?accion=agregarACarrito",
        data: parametro,
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            alert('Adherido al carrito!');
            location.reload();
        },
        error: function(error){
           console.log(error);
            //alert("Falta respuesta del servidor");
        }
    });
}

function buscar(){
    verOfertas();
    $('#mensaje-ofertas').html('Resultados de busqueda');
    $('#verMas').css('display','none');
    $('#row-ofertas').html('');
    var s = 0;
    var parametros = 'palabra='+$('#navbar-input').val();
    $.ajax({
        url:"ajax/api.php?accion=buscar",
        data: parametros,
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            //console.log(respuesta.length);
            if(respuesta.length ==0 ){
                $('#row-ofertas').html('Sin resultados');
                $('#row-ofertas').css('margin-bottom','400px');
            }else{
                for(var i=0; i<respuesta.length/2; i++ ){
                    if(i==0){
                        s = 1;
                    }else{
                        s = (((i+1)*2)-1);
                    }
                    $('#row-ofertas').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                    '    <div id="presentacionArticulo4Ofertas'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo('+respuesta[i*2].CODIGO_ARTICULO+');">'+
                    '        <div id="presentacionArticulo4Ofertas-imagen'+i+'" class="presentacionArticulo-imagen"></div>'+
                    '        <div id="presentacionArticulo4Ofertas-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articulo4Ofertas'+i+'" class="nombre-articulo">'+respuesta[i*2].NOMBRE_ARTICULO+'</div><br>'+
                    '        <span id="valoracion-articulo4Ofertas'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                    '        <span id="cantidad-usuarios-calificadores4Ofertas'+i+'">(5)</span>'+
                    '        <div id="precio-articulo4Ofertas'+i+'" class="precio-articulo">$ '+respuesta[i*2].PRECIO+'.00</div>'+
                    '        <span><button>Mas como esto</button></span>'+
                    '        <span><button>Eliminar</button></span></div>'+
                    '    </div>'+
                    '</div>');
                    prepararImagen('presentacionArticulo4Ofertas-imagen'+i, respuesta[s]);
                }
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
}





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
    console.log(localStorage.getItem('nombre'));
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
    }else{
        $('#navbar2-ancle-cuenta').removeAttr('href');
        $('#perfil-saludo').append('<i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Amazon de&nbsp;'+
        localStorage.getItem('nombre')+
        '<br><br>'+
        '<a href="logout.php"><h5>Salir</h5></a>');
    }
    $('#row-ofertas').html('');
    $.ajax({
        url:"ajax/api.php?accion=cargarDepartamentos",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            for(var i=0; i<respuesta.length; i++){
                var str = respuesta[i].DESCRIPCION;
                $('#navbar2-departamentos').append('<option value="'+primeraMayuscula(str)+'">'+primeraMayuscula(str)+'</option>');
                $('#navbar-departamentos').append('<option value="'+primeraMayuscula(str)+'">'+primeraMayuscula(str)+'</option>');
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
            console.log(respuesta);
            for(var i=2; i<respuesta.length; i++){
                prepararImagen('inicio1-imagen'+i, respuesta[i]);
            }
            //prepararImagen('inicio1-imagen1', respuesta[0]);
            //prepararImagen('inicio1-imagen2', respuesta[1]);
            //prepararImagen('inicio1-imagen3', respuesta[2]);
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    $.ajax({
        url:"ajax/api.php?accion=cargar4Ofertas",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            for(var i=0; i<respuesta.length; i++ ){
                $('#row-ofertas').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                '    <div id="presentacionArticulo4Ofertas'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo();">'+
                '        <div id="presentacionArticulo4Ofertas-imagen'+i+'" class="presentacionArticulo-imagen"></div>'+
                '        <div id="presentacionArticulo4Ofertas-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articulo4Ofertas'+i+'" class="nombre-articulo">'+respuesta[i].NOMBRE_ARTICULO+'</div><br>'+
                '        <span id="valoracion-articulo4Ofertas'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                '        <span id="cantidad-usuarios-calificadores4Ofertas'+i+'">(5)</span>'+
                '        <div id="precio-articulo4Ofertas'+i+'" class="precio-articulo">'+respuesta[i].PRECIO+'</div>'+
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
}


function verHistorial(){
    borrarTodo();
    $('#historial').css('display','block');
    $('#row-historial').html('');
    if(localStorage.getItem('nombre')=='Ingresar'){
        verPerfil();
        return false;
    }else{
        $.ajax({
            url:"ajax/api.php?accion=cargarHistorial",
            method: 'GET',
            dataType: "json",
            success: function(respuesta){
                console.log(respuesta);
                for(var i=0; i<respuesta.length; i++ ){
                    $('#row-historial').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                    '    <div id="presentacionArticuloHistorial'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo();">'+
                    '        <div id="presentacionArticuloHistorial-imagen'+i+'" class="presentacionArticulo-imagen"></div>'+
                    '        <div id="presentacionArticuloHistorial-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articuloHistorial'+i+'" class="nombre-articulo">'+respuesta[i].NOMBRE_ARTICULO+'</div><br>'+
                    '        <span id="valoracion-articuloHistorial'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                    '        <span id="cantidad-usuarios-calificadoresHistorial'+i+'">(5)</span>'+
                    '        <div id="precio-articuloHistorial'+i+'" class="precio-articulo">'+respuesta[i].PRECIO+'</div>'+
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
        var pedidos = $('#pedidos > div').detach();
        pedidos.appendTo('#perfil-pedidos');
        //$('#pedidos').css('display','none');
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
        $('#pedidos').css('display','block');
    }
}


function verOfertas(){
    borrarTodo();
    $('#ofertas').css('display','block');
}

function verTodasLasOfertas(){
    verOfertas();
    $('#verMas').css('display','none');
    $('#row-ofertas').html('');
    $.ajax({
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
    });
    $.ajax({
        url:"ajax/api.php?accion=cargarVariasImagenes",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            for(var i=0; i<respuesta.length; i++){
                prepararImagen('presentacionArticulo-imagen-oferta'+i, respuesta[i]);
            }
            prepararImagen('presentacionArticulo-imagen-oferta3', respuesta[0]);
            //prepararImagen('inicio1-imagen2', respuesta[1]);
            //prepararImagen('inicio1-imagen3', respuesta[2]);
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
    /*for(var i=0; i<10; i++){
        $('#row-ofertas').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
        '<div id="presentacionArticulo" class="presentacionArticulo">'+
        '    <div id="presentacionArticulo-imagen"><img src="recursos/intel.jpg"></div>'+
        '    <div id="presentacionArticulo-descripcion"><div id="nombre-articulo">Intel Corp. BX80660E51620V4 Xeon…</div><br>'+
        '    <span id="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
        '    <span id="cantidad-usuarios-calificadores">(5)</span>'+
        '    <div id="precio-articulo">$400.00</div>'+
        '    <span><button>Mas como esto</button></span>'+
        '    <span><button>Eliminar</button></span></div>'+
        '</div>'+
        '</div>');
    }*/
}


function verDetallesDeArticulo(){
    borrarTodo();
    $('#detalles-de-articulo').css('display','block');
    $('#realizar-pregunta').css('display','block');
    $("#realizar-pregunta").css('padding','25px 25px 25px 25px');
    $('#preguntas-realizadas').css('display','block');
    $("#preguntas-realizadas").css('padding','25px 25px 25px 25px');
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
    $('#h4-nombre-depto').html('Departamento de '+nombreDepartamento);
    $('#departamento').css('display','block');
    $('#row-departamento').html('');
    $.ajax({
        url:"ajax/api.php?accion=cargarHistorial",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            for(var i=0; i<respuesta.length; i++ ){
                $('#row-departamento').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
                '    <div id="presentacionArticulo'+i+'" class="presentacionArticulo" onclick="verDetallesDeArticulo();">'+
                '        <div id="presentacionArticuloDepartamento-imagen'+i+'" class="presentacionArticulo-imagen"></div>'+
                '        <div id="presentacionArticuloDepartamento-descripcion'+i+'" class="presentacionArticulo-descripcion"><div id="nombre-articuloDepartamento'+i+'" class="nombre-articulo">'+respuesta[i].NOMBRE_ARTICULO+'</div><br>'+
                '        <span id="valoracion-articulodepatamento'+i+'" class="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
                '        <span id="cantidad-usuarios-calificadoresDepartamento'+i+'">(5)</span>'+
                '        <div id="precio-articuloDepartamento'+i+'" class="precio-articulo">'+respuesta[i].PRECIO+'</div>'+
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
    });
    $.ajax({
        url:"ajax/api.php?accion=cargarVariasImagenes",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            for(var i=2; i<respuesta.length; i++){
                prepararImagen('presentacionArticuloDepartamento-imagen'+i, respuesta[i]);
            }
            //prepararImagen('inicio1-imagen1', respuesta[0]);
            //prepararImagen('inicio1-imagen2', respuesta[1]);
            //prepararImagen('inicio1-imagen3', respuesta[2]);
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
        url:"ajax/api.php?accion=cargarDepartamentos",
        method: 'GET',
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            for(var i=0; i<respuesta.length; i++ ){
                $('#row-todos-los-departamentos').append('<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">'+
                '    <div class="presentacionDepartamento" id="presentacionDepartamento'+i+'" onclick="verDepartamento(\''+'presentacionDepartamento-nombre'+i+'\');">'+
                '        <div class="presentacionArticulo-imagen" id="presentacionArticulo-imagen-departamento'+i+'"></div>'+
                '        <br>'+
                '        <div id="presentacionDepartamento-nombre'+i+'" value="'+primeraMayuscula(respuesta[i].DESCRIPCION)+'"><h6>'+primeraMayuscula(respuesta[i].DESCRIPCION)+'</h6></div><br>'+
                '    </div>'+
                '</div>');
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
            console.log(respuesta);
            prepararImagen('presentacionArticulo-imagen-departamento1', respuesta[0]);
            for(var i=0; i<respuesta.length; i++){
                prepararImagen('presentacionArticulo-imagen-departamento'+i, respuesta[i]);
                //prepararImagen('presentacionArticulo-imagen1', respuesta[2]);
            }
        },
        error: function(error){
            console.log(error);
            alert("Falta respuesta del servidor");
        }
    });
}
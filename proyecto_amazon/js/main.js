$('#navbar-amazon').click(function(){
    location.reload();
});


function borrarCarrousel(){
    $("#carouselExampleIndicators").html('');
}


function borrarHistorial(){
    $("#historial").html('')
}


function borrarInicio1(){
    $("#opciones-de-inicio1").html('');
    $("#opciones-de-inicio1").css('height','0px');
    $("#opciones-de-inicio1").css('padding','0%');
}


function borrarInicio2(){
    $("#opciones-de-inicio2").html('');
    $("#opciones-de-inicio2").css('padding','0%');
}


function borrarOfertas(){
    $('#ofertas').html('');
}


function borrarDetallesDeArticulo(){
    $("#detalles-de-articulo").html('');
}


function borrarRealizarPregunta(){
    $("#realizar-pregunta").html('');
    $("#realizar-pregunta").css('padding','0%');
}


function borrarPreguntasRealizadas(){
    $("#preguntas-realizadas").html('');
    $("#preguntas-realizadas").css('padding','0%');
}


function borrarOpiniones(){
    $("#opiniones").html('');
}


function borrarPerfil(){
    $("#perfil").html('');
}


$(document).ready(function(){
    borrarDetallesDeArticulo();
    borrarHistorial();
    borrarRealizarPregunta();
    borrarPreguntasRealizadas();
    borrarOpiniones();
    borrarPerfil();
});

function removerPartesIniciales(){
    borrarCarrousel();
    borrarHistorial();
    borrarPerfil();
    borrarInicio1();
    borrarInicio2();
    borrarOfertas();
}


$("#btn-historial").click(function(){
    removerPartesIniciales();
    $('#historial').html(
  '      <h4>Articulos vistos recientemente</h4>'+
  '      <div class="container">'+
  '          <div class="row">'+
  '          <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
  '                  <div id="presentacionArticulo">'+
  '                      <div id="presentacionArticulo-imagen"><img src="recursos/intel.jpg"></div>'+
  '                      <div id="presentacionArticulo-descripcion"><div id="nombre-articulo">Intel Corp. BX80660E51620V4 Xeon…</div><br>'+
  '                      <span id="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
  '                      <span id="cantidad-usuarios-calificadores">(5)</span>'+
  '                      <div id="precio-articulo">$400.00</div>'+
  '                      <span><button>Mas como esto</button></span>'+
  '                      <span><button>Eliminar</button></span></div>'+
  '                  </div>'+
  '              </div>'+
  '              <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " >'+
  '                  <div id="presentacionArticulo">'+
  '                      <div id="presentacionArticulo-imagen"><img src="recursos/intel.jpg"></div>'+
  '                      <div id="presentacionArticulo-descripcion"><div id="nombre-articulo">Intel Corp. BX80660E51620V4 Xeon…</div><br>'+
  '                      <span id="valoracion-articulo"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>'+
  '                      <span id="cantidad-usuarios-calificadores">(5)</span>'+
  '                      <div id="precio-articulo">$400.00</div>'+
  '                      <span><button>Mas como esto</button></span>'+
  '                      <span><button>Eliminar</button></span></div>'+
  '                  </div>'+
  '              </div>'+  
  '          </div>'+
  '      </div>');
});


$("#btn-perfil").click(function(){
    removerPartesIniciales();
    $("#perfil").append('<div id="perfil-saludo">'+
  '  <i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Amazon de persona X'+
  '  </div>'+
  '  <div id="perfil-pedidos" class"container">'+
  '      <div class="row">'+
  '          <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">'+
  '              <div id-="perfil-pedidos-">'+
  '                  <h3 id="perfil-pedido-titulo">Pedidos X</h3>'+
  '                  <div id="perfil-pedido-articulo">Comedor</div>'+
  '                  <div id="perfil-pedido-precio-articulo">Costo de articulo: $344.00</div>'+
  '                  <div id="perfil-pedido-precio-envio">Costo de envio: $ 10.00</div>'+
  '                  <div id="perfil-pedido-precio-total">Costo total: $354.00</div>'+
  '                  <div id="perfil-pedido-fecha-comprado">1122/1222/122</div>'+
  '              </div>'+
  '          </div>'+
  '      </div>'+
  '  </div>'+
  '  <br><br>'+
  '  <div>'+
  '      <h3>Tarjetas de regalo</h3>'+
  '  </div>');
});



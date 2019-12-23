
function factura(){
  $.get('facturacion', function (data){
    $('#app').html(data);
  });
}


function clientes(){
  $.get('clientes', function (data){
    $('#app').html(data);
  });
}


function productos(){
  $.get('productos', function (data){
    $('#app').html(data);
  });
}

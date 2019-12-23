<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style media="screen">
.wizard {
  margin: 20px auto;
  background: #fff;
}

  .wizard .nav-tabs {
      position: relative;
      margin: 40px auto;
      margin-bottom: 0;
      border-bottom-color: #e0e0e0;
  }

  .wizard > div.wizard-inner {
      position: relative;
  }

.connecting-line {
  height: 2px;
  background: #e0e0e0;
  position: absolute;
  width: 80%;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: 50%;
  z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
  color: #555555;
  cursor: default;
  border: 0;
  border-bottom-color: transparent;
}

span.round-tab {
  width: 70px;
  height: 70px;
  line-height: 70px;
  display: inline-block;
  border-radius: 100px;
  background: #fff;
  border: 2px solid #e0e0e0;
  z-index: 2;
  position: absolute;
  left: 0;
  text-align: center;
  font-size: 25px;
}
span.round-tab i{
  color:#555555;
}
.wizard li.active span.round-tab {
  background: #fff;
  border: 2px solid #5bc0de;

}
.wizard li.active span.round-tab i{
  color: #5bc0de;
}

span.round-tab:hover {
  color: #333;
  border: 2px solid #333;
}

.wizard .nav-tabs > li {
  width: 25%;
}

.wizard li:after {
  content: " ";
  position: absolute;
  left: 46%;
  opacity: 0;
  margin: 0 auto;
  bottom: 0px;
  border: 5px solid transparent;
  border-bottom-color: #5bc0de;
  transition: 0.1s ease-in-out;
}

.wizard li.active:after {
  content: " ";
  position: absolute;
  left: 46%;
  opacity: 1;
  margin: 0 auto;
  bottom: 0px;
  border: 10px solid transparent;
  border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
  width: 70px;
  height: 70px;
  margin: 20px auto;
  border-radius: 100%;
  padding: 0;
}

  .wizard .nav-tabs > li a:hover {
      background: transparent;
  }

.wizard .tab-pane {
  position: relative;
  padding-top: 50px;
}

.wizard h3 {
  margin-top: 0;
}

@media( max-width : 585px ) {

  .wizard {
      width: 90%;
      height: auto !important;
  }

  span.round-tab {
      font-size: 16px;
      width: 50px;
      height: 50px;
      line-height: 50px;
  }

  .wizard .nav-tabs > li a {
      width: 50px;
      height: 50px;
      line-height: 50px;
  }

  .wizard li.active:after {
      content: " ";
      position: absolute;
      left: 35%;
  }
}
</style>


<div class="container">
  <div class="col-md-12">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title" style="border-color: red;">
          <h2>Facturación Electrónica</h2>
          <div class="clearfix" style="border-color: red;"></div>
        </div>

        <div class="x_content">
          <div id="datatable-responsive_wrapper" class="dt-bootstrap no-footer">
            <div class="alert alert-success" role="alert" style="display:none" id="message-success">
              <strong></strong>
            </div>
            <div class="x_panel">
              <div class="x_content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab1" class="nav nav-tabs bar_tabs" role="tablist" style="background: white;">
                    <li role="role" class="active"><a href="#tab_content1" name="usuarioPersonalizado" id="Emisor" data-toggle="tab" aria-controls="profile" aria-expanded="true">Emisor</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" name="usuarioPersonalizado" id="Receptor" data-toggle="tab" aria-controls="profile" aria-expanded="false">Receptor</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" name="usersView" id="Conceptos" data-toggle="tab" aria-controls="profile" aria-expanded="false">Conceptos</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content4" name="usuarioPersonalizado" id="Previsualizacion" data-toggle="tab" aria-controls="profile" aria-expanded="false">Previsualizacion</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content5" name="usuarioPersonalizado" id="Final" data-toggle="tab" aria-controls="profile" aria-expanded="false">Final</a>
                    </li>
                  </ul>
                  <div id="contentFacturacion" style="height:100%; width:100%; overflow-x:scroll; overflow-y: hidden; padding-bottom:10px;"><div class="col-md-12">
                    Contenido de los formularios de facturacion
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</div>

<script type="text/javascript" src="{{asset('js/facturacion.js')}}">

</script>
<script type="text/javascript">
  $(document).ready(function() {
    form();
  });

  function form(){
    $.get('facturacion/form' function(data){
      $('#contentFacturacion').html(data);
    });
  }
</script>
productos y clientes

catalogos


concepto_SAT -> producto
Pedido -> emisors y receptor
series -> folio. numero n
detalle productos -> cantidad, precio, importe, iva, total, ievs
Detalle-> Conceptos

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('local/public/js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('local/public/css/app.css') }}" rel="stylesheet">
</head>
<body>

  <div id="home" v-else>

    <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->

      <!-- CSS Files -->

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
      <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
      <link href="{{asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
      <script type="text/javascript" src="{{asset('js/rute.js')}}"></script>
    </head>

    <div class="wrapper">
      <div class="sidebar" data-color="" data-image="{{asset('assets/sidebar-1.jpg')}}" id="nav">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a  class="simple-text">LIBERPOS

            <!---  <button class="btn btn-icon" @click="colored()">rojo</button> <button class="btn btn-icon" @click="colorange()">Naranja</button>
            <button class="btn btn-icon" @click="colorpurple()">Morado</button> <button class="btn btn-icon" @click="colorgreen()">verde</button>-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="nc-icon nc-palette"></i>
                <b class="caret hidden-lg hidden-md"></b>

              </a>
              <ul class="dropdown-menu">
                <li><button class="btn btn-toolbar" @click="colored()">rojo</button></li>
                <li><button class="btn btn-toolbar" @click="colorange()">Naranja</button></li>
                <li><button class="btn btn-toolbar" @click="colorpurple()">Morado</button></li>
                <li><button class="btn btn-toolbar" @click="colorgreen()">verde</button></li>

              </ul>
            </li>
          </a>
        </div>

        <ul class="nav">


          <router-link to="/TablaUsuarios">
            <li class="nav-item active">

              <a class="nav-link" >
                <i class="nc-icon nc-circle-09"></i>
                Catálogo Usuarios
              </a> </li></router-link>

              <router-link to="/Catbancos">
                <li class="nav-item active">

                  <a class="nav-link" >
                    <i class="nc-icon nc-bold"></i>
                    Catálogo Bancos
                  </a> </li></router-link>

                  <router-link to="/facturacion">
                    <li class="nav-item active">
                      <a class="nav-link"  onclick="factura();">
                        <i class="nc-icon nc-notes"></i>
                        Facturación
                      </a>
                    </li>
                  </router-link>

                  <router-link to="/Catpuestos">
                    <li class="nav-item active">

                      <a class="nav-link" >
                        <i class="nc-icon nc-layers-3"></i>
                        Catálogo Puestos
                      </a> </li></router-link>

                      <router-link to="/Catempleados">
                        <li class="nav-item active">

                          <a class="nav-link" >
                            <i class="nc-icon nc-bag"></i>
                            Catalogo Empleados
                          </a> </li></router-link>
                          <router-link to="/Catgastos">
                            <li class="nav-item active">

                              <a class="nav-link" >
                                <i class="nc-icon nc-money-coins"></i>
                                Catálogo Gastos
                              </a> </li></router-link>

                              <router-link to="/Catimpuestos">
                                <li class="nav-item active">

                                  <a class="nav-link" >
                                    <i class="nc-icon nc-paper-2"></i>
                                    Catálogo Impuestos
                                  </a> </li></router-link>



                                  <router-link to="/Seriesdoc">
                                    <li class="nav-item active">

                                      <a class="nav-link" >
                                        <i class="nc-icon nc-attach-87"></i>
                                        Series Documentos
                                      </a> </li></router-link>

                                      <router-link to="/PuntoVenta">
                                        <li class="nav-item active">

                                          <a class="nav-link" >
                                            <i class="nc-icon nc-delivery-fast"></i>
                                            Puntos de Venta
                                          </a> </li></router-link>

                                          <router-link to="/Colores">
                                            <li class="nav-item active">

                                              <a class="nav-link" >
                                                <i class="nc-icon nc-atom"></i>
                                                Colores y Tallas
                                              </a> </li></router-link>

                                              <router-link to="/UnidadesMedida">
                                                <li class="nav-item active">

                                                  <a class="nav-link" >
                                                    <i class="nc-icon nc-ruler-pencil"></i>
                                                    Unidades de Medida
                                                  </a> </li></router-link>

                                                  <router-link to="/Categorias">
                                                    <li class="nav-item active">

                                                      <a class="nav-link" >
                                                        <i class="nc-icon nc-cart-simple"></i>
                                                        Categorias
                                                      </a> </li></router-link>

                                                      <router-link to="/Sucursales">
                                                        <li class="nav-item active">

                                                          <a class="nav-link" >
                                                            <i class="nc-icon nc-bank"></i>
                                                            Catalogo Sucusales
                                                          </a> </li></router-link>

                                                          <router-link to="/Empresas">
                                                            <li class="nav-item active">

                                                              <a class="nav-link" >
                                                                <i class="nc-icon nc-bank"></i>
                                                                Catalogo Empresas
                                                              </a> </li></router-link>

                                                              <router-link to="/Cliente">
                                                                <li class="nav-item active">
                                                                  <a class="nav-link" >
                                                                    <i class="nc-icon nc-single-02"></i>
                                                                    Catalogo Cliente
                                                                  </a>
                                                                </li>
                                                                </router-link>

                                                                <router-link to="/Cliente">
                                                                  <li class="nav-item active">
                                                                    <a class="nav-link" onclick="productos();">
                                                                      <i class="nc-icon nc-satisfied"></i>
                                                                      Catalogo Productos
                                                                    </a>
                                                                  </li>
                                                                  </router-link>









                                                                  <li class="nav-item active">


                                                                    <a class="nav-link" >
                                                                      <button class=" btn btn-outline-" style="color: white" @click="log()" > SALIR  <i class="nc-icon nc-layers-3"></i>
                                                                      </button>
                                                                    </a> </li>

                                                                  </ul>
                                                                </div>


                                                              </div>
                                                              <div class="main-panel">




                                                                <router-view></router-view>
                                                                <div id="app">
                                                                  el contenido dinamico

                                                                  <main class="py-4">
                                                                    @yield('content')
                                                                  </main>
                                                                </div>



                                                              </div>
                                                            </div>











                                                          </div>

                                                        </body>
                                                        </html>

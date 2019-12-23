<template>
    <div id="TablaUsuarios">

        <head>
            <meta charset="utf-8" />
            <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
            <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
            <!--     Fonts and icons     -->

            <!-- CSS Files -->

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
            <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
            <link href="./assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
            <!-- CSS Just for demo purpose, don't include it in your project -->
            <link href="./assets/css/demo.css" rel="stylesheet" />
        </head>

        <div id="bloquea"  style="display:none" class="cargando" >
            <img src="./assets/img/ajax-loader.gif" style="margin-left: 10px;margin-top: 250px" alt="Espere..."> <h1>Cargando</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">

                        <div class="card-header ">



                        </div>

                        <div class="card-body table-full-width table-responsive" align="center">
                            <div id="buttons" align="right">

                                <h4 class="card-title" align="left" style="float: left;margin-left:32px;margin-top:10px ">Catálogo Usuarios</h4>
                                <i class=" nc-icon nc-zoom-split"></i>  <input type="text" placeholder="Filtrar registros" class="input2"  v-model="busqueda.string" name="tb_search" id="tb_search" v-on:change="Buscar()">

                                <span>  <input type="button" class="btn btn-danger" style="margin-left: 10px" value="eliminar" @click="Consultar();Borrar();bloquea();"></span>
                                <span>  <input type="button" style="margin-left: 10px" class="btn btn-success" value="guardar" @click="Consultar();Guardar();Insertar();bloquea();"></span>

                                <select align=left class="btn btn-outline-dark" style="margin-left: 10px;padding: 8.5px"  v-model="consulta.size" v-on:change="Consultar()">
                                    <option selected >20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="70">70</option>
                                    <option value="100">100</option>
                                </select>
                            </div>

                        </div>
                        <div>


                            <div v-if="susses!=null">
                                <div class="alert alert-info" role="alert" id="alert_message">
                                    {{susses}}
                                    <span class="close" data-dismiss="alert">&times;</span>
                                </div>
                            </div>
                            <table class="table-hover table-bordered" v-if="select!=null" align="center" id="tablar">
                                <thead>
                                <th>Clave</th>
                                <th>Contraseña</th>
                                <th>Nombre</th>



                                <th>Número empleado</th>
                                <th>Correo Electrónico</th>
                                <th>  <input class="form-check-input" align="center" style="margin-left:35% "  type="checkbox" id="checks" @click="selecciona()">       </th>



                                </thead>
                                <tbody>

                                <tr v-for="usu in select" :key="usu.id_usuario">
                                    <td><input class="clast"  style="text-align:left" v-model="datos.clave[usu.id_usuario]"  type="text" :placeholder="usu.clave"></td>
                                    <td><input class="clast"  style="text-align:left" v-model="datos.contra[usu.id_usuario]" type="text"  :placeholder="usu.contrasena" ></td>
                                    <td><input class="clast" style="text-align:left" v-model="datos.nombre[usu.id_usuario]" type="text" :placeholder="usu.nombre"></td>
                                    <td><input class="clast" style="text-align:right" v-model="datos.id_emp[usu.id_usuario]" type="text" :placeholder="usu.id_empleado"></td>
                                    <td><input class="clast" style="text-align:left" v-model="datos.correo_elec[usu.id_usuario]" type="text" :placeholder="usu.correo_electronico">

                                    </td>

                                    <td >   <input class="form-check-input" align="center" style="margin-left:35% " v-model="datos_borrar.borrar[usu.id_usuario]" type="checkbox" id="check" > </td>



                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila1[0]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila1[1]" class="clast"    ></td>
                                    <td><input type="text" v-model="ins.fila1[2]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila1[3]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila1[4]" class="clast"   ></td>
                                    <td></td>



                                </tr>
                                <tr >

                                    <td><input type="text"  v-model="ins.fila2[0]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila2[1]"  class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila2[2]" class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila2[3]"  class="clast"   ></td>
                                    <td><input type="text"  v-model="ins.fila2[4]" class="clast"  ></td>
                                    <td></td>


                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila3[0]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila3[1]" class="clast"   ></td>
                                    <td><input type="text"  v-model="ins.fila3[2]" class="clast" ></td>
                                    <td><input type="text" v-model="ins.fila3[3]" class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila3[4]"  class="clast"   ></td>
                                    <td></td>

                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila4[0]" class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila4[1]" class="clast"  ></td>
                                    <td><input type="text"  v-model="ins.fila4[2]" class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila4[3]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila4[4]"  class="clast"  ></td>
                                    <td></td>


                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila5[0]" class="clast"    ></td>
                                    <td><input type="text" v-model="ins.fila5[1]" class="clast"  ></td>
                                    <td><input type="text"  v-model="ins.fila5[2]" class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila5[3]" class="clast"    ></td>
                                    <td><input type="text" v-model="ins.fila5[4]"  class="clast" ></td>
                                    <td></td>


                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila6[0]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila6[1]" class="clast"   ></td>
                                    <td><input type="text"  v-model="ins.fila6[2]" class="clast" ></td>
                                    <td><input type="text" v-model="ins.fila6[3]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila6[4]"  class="clast"   ></td>

                                    <td></td>

                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila7[0]" class="clast"    ></td>
                                    <td><input type="text" v-model="ins.fila7[1]" class="clast"   ></td>
                                    <td><input type="text"  v-model="ins.fila7[2]" class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila7[3]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila7[4]"  class="clast"   ></td>
                                    <td></td>


                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila8[0]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila8[1]" class="clast"  ></td>
                                    <td><input type="text"  v-model="ins.fila8[2]" class="clast"></td>
                                    <td><input type="text" v-model="ins.fila8[3]" class="clast"   ></td>
                                    <td><input type="text" v-model="ins.fila8[4]"  class="clast"   ></td>
                                    <td></td>


                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila9[0]" class="clast"    ></td>
                                    <td><input type="text" v-model="ins.fila9[1]" class="clast"    ></td>
                                    <td><input type="text"  v-model="ins.fila9[2]" class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila9[3]" class="clast" ></td>
                                    <td><input type="text" v-model="ins.fila9[4]"  class="clast"  ></td>
                                    <td></td>

                                </tr>
                                <tr >

                                    <td><input type="text" v-model="ins.fila10[0]" class="clast"     ></td>
                                    <td><input type="text" v-model="ins.fila10[1]" class="clast"  ></td>
                                    <td><input type="text"  v-model="ins.fila10[2]" class="clast" ></td>
                                    <td><input type="text" v-model="ins.fila10[3]" class="clast"  ></td>
                                    <td><input type="text" v-model="ins.fila10[4]"  class="clast"   ></td>

                                    <td></td>

                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <div v-if="this.consulta.size< this.selector"  id="paginacion">
                            <br>
                            <paginate
                                    :page-count="paginacion"
                                    :page-range="3"
                                    :margin-pages="1"
                                    :click-handler="Pag"
                                    :prev-text="'<'"
                                    :next-text="'>'"
                                    :container-class="'pagination'"
                                    :page-class="'page-item'">
                            </paginate>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>








</template>
<script src="https://unpkg.com/vuejs-paginate@latest"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- <script>
    import axios from 'axios';
    const $ = require('jquery')
    window.$ = $
    export default {
        name: 'TablaUsuarios',
        mounted(){
            this.getUsuarios();
        },
        data () {
            var self=this.$session;
            return {
                busqueda:{
                    accion_busqueda:'busqueda',
                    cliente: self.get('cliente'),
                    string:null
                },
                paginacion:null,
                selected:[],
                allselected:false,
                dismissSecs: 5,
                dismissCountDown: 0,
                susses:null,
                consulta: {
                    accion_c: 'consulta',
                    cliente: self.get('cliente'),
                    size:null,
                },
                table:{
                    cliente: self.get('cliente'),
                    m:null,
                    n:null,
                },

                select: null,
                datos_borrar: {
                    accion_b: 'borrar',
                    borrar: [],
                    cliente: self.get('cliente'),
                },

                datos: {
                    accion: 'guardar',
                    clave: [],
                    contra: [],
                    nombre: [],
                    id_emp: [],
                    correo_elec: [],
                    borrar: [],
                    cliente: self.get('cliente'),

                },

                ins:{
                    cliente: self.get('cliente'),
                    accion_ins:'insertar',
                    fila1:[],
                    fila2:[],
                    fila3:[],
                    fila4:[],
                    fila5:[],
                    fila6:[],
                    fila7:[],
                    fila8:[],
                    fila9:[],
                    fila10:[],
                    usuario: self.get('usuario'),

                }
            }

        },

        methods:{

            Buscar(){

                var params = JSON.stringify(this.busqueda);
                axios.post('http://localhost/PuntoVenta/controllers/Acciones.php', params).then((respuesta) => {
                    this.select = respuesta.data.data;

                })
            },
            Pag(pageNum){
                var self=this.$session;
                self.start();
                this.table.n=pageNum;
                this.table.m=this.consulta.size;
                var params = JSON.stringify(this.table);
                axios.post('http://localhost/PuntoVenta/controllers/Acciones.php', params).then((respuesta) => {
                    this.select = respuesta.data.data;

                })

                    .catch((error) => {
                        alert('wiiii');
                        console.log(error)

                    });

            },
            Consultar(){
                var self=this.$session;
                self.start();

                var params = JSON.stringify(this.consulta);
                axios.post('http://localhost/PuntoVenta/controllers/Acciones.php', params).then((respuesta) => {
                    this.select = respuesta.data.data;
                    this.paginacion=(respuesta.data.base)/(this.consulta.size);
                })

                    .catch((error) => {
                        alert('wiiii');
                        console.log(error)

                    });


            },
            getUsuarios(){
                var router=this.$router;
                var self=this.$session;
                self.start();
                this.consulta.size=20;

                if(self.exists()) {

                    console.log(self.get('cliente'));
                    var params = JSON.stringify(this.consulta);
                    axios.post('http://localhost/PuntoVenta/controllers/Acciones.php', params).then((respuesta) => {
                        this.select = respuesta.data.data;
                        this.paginacion=(respuesta.data.base)/(this.consulta.size);
                    })


                        .catch((error) => {
                            alert('wiiii');
                            console.log(error)

                        });
                }
                else{
                    router.push('/App');
                }
            },
            Guardar(){
                var self=this.$session;
                self.start();
                var params = JSON.stringify(this.datos);
                axios.post('http://localhost/PuntoVenta/controllers/Acciones.php', params).then((respuesta) => {
                    this.select = respuesta.data.data;

                    this.susses=respuesta.data.message;

                })


            },
            Borrar(){
                var params = JSON.stringify(this.datos_borrar);
                console.log(this.datos_borrar)
                axios.post('http://localhost/PuntoVenta/controllers/Acciones.php', params).then((respuesta) => {
                    this.select = respuesta.data.data;
                    this.susses=respuesta.data.message;
                })

            },
            Insertar(){
                console.log(this.size);
                var self=this.$session;
                var router=this.$router;
                self.start();
                var params = JSON.stringify(this.ins);
                axios.post('http://localhost/PuntoVenta/controllers/Acciones.php', params).then((respuesta) => {

                    this.select = respuesta.data.data;
                    this.susses=respuesta.data.message;
                    this.ins.fila1=[];
                    this.ins.fila2=[];
                    this.ins.fila3=[];
                    this.ins.fila4=[];
                    this.ins.fila5=[];
                    this.ins.fila6=[];
                    this.ins.fila7=[];
                    this.ins.fila8=[];
                    this.ins.fila9=[];
                    this.ins.fila10=[];




                })
            },
            float(){
                window.setTimeout(function() {
                    $(".alert-message").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove();
                    });
                }, 3000);




            },
            bloquea(){

                document.getElementById('bloquea').style.display='block';

                setTimeout(function(){document.getElementById('bloquea').style.display='none' }, 500)
                setTimeout(function(){document.getElementById('alert_message').style.display='block' }, 500)
                this.susses=null;
            },
            selecciona(){




                $("#checks").change(function () {
                    $("input:checkbox").prop('checked', $(this).prop("checked"));
                });

            },





        }
    }
</script>} -->
<styles>

</styles>

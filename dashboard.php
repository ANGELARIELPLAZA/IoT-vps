<?php
session_start();
$logged = $_SESSION['logged'];

if(!$logged){
  echo "Ingreso no autorizado";
  die();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>IoT sirius</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- build:css assets/styles/app.min.css -->
    <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
    <script src="https://use.fontawesome.com/67a0793aa7.js"></script>
</head>

<body>
    <div class="app" id="app">

        <!-- ############ LAYOUT START-->

        <!-- BARRA IZQUIERDA -->
        <!-- aside -->
        <div id="aside" class="app-aside modal nav-dropdown">
            <!-- fluid app aside -->
            <div class="left navside dark dk" data-layout="column">
                <div class="navbar no-radius">
                    <!-- brand -->
                    <a class="navbar-brand">
                        <div ui-include="'assets/images/logo.svg'"></div>
                        <img src="assets/images/logo.png" alt="." class="hide">
                        <span class="hidden-folded inline">COMUAN</span>
                    </a>
                    <!-- / brand -->
                </div>
                <div class="hide-scroll" data-flex>
                    <nav class="scroll nav-light">

                        <ul class="nav" ui-nav>
                            <li class="nav-header hidden-folded">
                                <small class="text-muted">Main</small>
                            </li>

                            <li>
                                <a href="dashboard.php">
                                    <span class="nav-icon">
                                        <i class="fa fa-building-o"></i>
                                    </span>
                                    <span class="nav-text">Principal</span>
                                </a>
                            </li>

                            <li>
                                <a href="devices.php">
                                    <span class="nav-icon">
                                        <i class="fa fa-cogs"></i>
                                    </span>
                                    <span class="nav-text">Dispositivos</span>
                                </a>
                            </li>
                            <li>
                                <a href="/user/pages/examples/sign-in.html">
                                    <span class="nav-icon">
                                        <i class="fa fa-area-chart"></i>
                                    </span>
                                    <span class="nav-text">Panel</span>
                                </a>
                            </li>


                        </ul>
                    </nav>
                </div>
                <div class="b-t">
                    <div class="nav-fold">
                        <a href="profile.html">
                            <span class="pull-left">
                                <img src="assets/images/a0.png" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear hidden-folded p-x">
                                <span class="block _500">Admin</span>
                                <small class="block text-muted"><i
                                        class="fa fa-circle text-success m-r-sm"></i>online</small>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / -->

        <!-- content -->
        <div id="content" class="app-content box-shadow-z0" role="main">
            <div class="app-header white box-shadow">
                <div class="navbar navbar-toggleable-sm flex-row align-items-center">
                    <!-- Open side - Naviation on mobile -->
                    <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                        <i class="material-icons">&#xe5d2;</i>
                    </a>
                    <!-- / -->

                    <!-- Page title - Bind to $state's title -->
                    <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>



                    <!-- BARRA DE LA DERECHA -->
                    <ul class="nav navbar-nav ml-auto flex-row">
                        <li class="nav-item dropdown pos-stc-xs">
                            <a class="nav-link mr-2" href data-toggle="dropdown">
                                <i class="material-icons">&#xe7f5;</i>
                                <span class="label label-sm up warn">3</span>
                            </a>
                            <div ui-include="'views/blocks/dropdown.notification.html'"></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                                <span class="avatar w-32">
                                    <img src="assets/images/a0.png" alt="...">
                                    <i class="on b-white bottom"></i>
                                </span>
                            </a>
                            <div ui-include="'views/blocks/dropdown.user.html'"></div>
                        </li>
                        <li class="nav-item hidden-md-up">
                            <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                                <i class="material-icons">&#xe5d4;</i>
                            </a>
                        </li>
                    </ul>
                    <!-- / navbar right -->
                </div>
            </div>


            <!-- PIE DE PAGINA -->
            <div class="app-footer">
                <div class="p-2 text-xs">
                    <div class="pull-right text-muted py-1">
                        &copy; Copyright <strong></strong> <span class="hidden-xs-down">- Built v1.1.3</span>
                        <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
                    </div>
                    <div class="nav">
                        <a class="nav-link" href=""></a>
                    </div>
                </div>
            </div>

            <div ui-view class="app-body" id="view">


                <!-- SECCION CENTRAL -->
                <div class="padding">

                    <!-- VALORES EN TIEMPO REAL -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="box p-a">
                                <div class="pull-left m-r">
                                    <span class="w-48 rounded  accent">
                                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <small class="text-muted">ITESCO</small>
                                <div class="clear">
                                    <h4 class="m-0 text-lg _300"><b id="display_temp1">-- </b>
                                    
                                    <span class="text-sm">
                                            kg</span></h4>
                                    <small class="text-muted">BASCULA 1</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <div class="box p-a">
                                <div class="pull-left m-r">
                                    <span class="w-48 rounded primary">
                                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <small class="text-muted">ITESCO</small>
                                <div class="clear">
                                    <h4 class="m-0 text-lg _300"><b id="display_temp2">-- </b>
                                    <span class="text-sm">
                                            kg</span></h4>
                                    <small class="text-muted">BASCULA 2</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <div class="box p-a">
                                <div class="pull-left m-r">
                              
                                    <span class="w-48 rounded warn">
                                    <i class="fa fa-balance-scale" aria-hidden="true"></i>


                                    </span>
                                </div>
                                <small class="text-muted">ITESCO</small>
                                <div class="clear">
                                    <h4 class="m-0 text-lg _300"><b id="display_volt">-- </b>
                                    <span class="text-sm">
                                            kg</span></h4>
                                    <small class="text-muted">BASCULA 3</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SWItCH1 y 2 
          <div class="row">
             SWItCH1 
            <div class="col-xs-12 col-sm-6">
              <div class="box p-a">
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">LED1</label>
                  <div class="col-sm-10">
                    <label class="ui-switch ui-switch-md info m-t-xs">
                      <input id="input_led1" onchange="process_led1()"  type="checkbox" >
                      <i></i>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            SWItCH2 
              <div class="col-xs-12 col-sm-6">
                <div class="box p-a">
                  <div class="form-group row">
                    <label class="col-sm-2 form-control-label">LED2</label>
                    <div class="col-sm-10">
                      <label class="ui-switch ui-switch-md info m-t-xs">
                        <input id="input_led2" onchange="process_led2()" type="checkbox"  >
                        <i></i>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          -->
                    <!-- Mapa sencillo -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7582.984529182457!2d-94.52289251264237!3d18.141223522409025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85e9850077cce8ad%3A0xcb7944f799fa278e!2sSuperior%20Technological%20Institute%20of%20Coatzacoalcos%20ITESCO!5e0!3m2!1sen!2smx!4v1650267882193!5m2!1sen!2smx"
                                width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h2>Dispositivos:</h2>
                                        </div>
                                        <table class="table table-striped b-t">
                                            <thead>
                                                <tr>
                                                    <th>Alias</th>
                                                    <th>Fecha</th>
                                                    <th>Serie</th>
                                                    <th>Data</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <tr>
                                                    <td>bascula 1</td>
                                                    <td>2022-04-18</td>
                                                    <td>88888</td>
                                                    <td>9 KG</td>
                                                </tr>
                                                <tr>
                                                    <td>bascula 2</td>
                                                    <td>2022-04-18</td>
                                                    <td>88888</td>
                                                    <td>9 KG</td>
                                                </tr>
                                                <tr>
                                                    <td>bascula 3</td>
                                                    <td>2022-04-18</td>
                                                    <td>88888</td>
                                                    <td>9 KG</td>
                                                </tr>
                                                <tr>
                                                    <td>bascula 1</td>
                                                    <td>2022-04-18</td>
                                                    <td>88888</td>
                                                    <td>9 KG</td>
                                                </tr>
                                                <tr>
                                                    <td>bascula 2</td>
                                                    <td>2022-04-18</td>
                                                    <td>88888</td>
                                                    <td>9 KG</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ############ PAGE END-->

            </div>

        </div>
        <!-- / -->



        <!-- ############ LAYOUT END-->

    </div>
    <!-- build:js scripts/app.html.js -->
    <!-- jQuery -->
    <script src="libs/jquery/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
    <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <!-- core -->
    <script src="libs/jquery/underscore/underscore-min.js"></script>
    <script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="libs/jquery/PACE/pace.min.js"></script>

    <script src="html/scripts/config.lazyload.js"></script>

    <script src="html/scripts/palette.js"></script>
    <script src="html/scripts/ui-load.js"></script>
    <script src="html/scripts/ui-jp.js"></script>
    <script src="html/scripts/ui-include.js"></script>
    <script src="html/scripts/ui-device.js"></script>
    <script src="html/scripts/ui-form.js"></script>
    <script src="html/scripts/ui-nav.js"></script>
    <script src="html/scripts/ui-screenfull.js"></script>
    <script src="html/scripts/ui-scroll-to.js"></script>
    <script src="html/scripts/ui-toggle-class.js"></script>

    <script src="html/scripts/app.js"></script>

    <!-- ajax -->
    <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
    <script src="html/scripts/ajax.js"></script>

    <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
    <script type="text/javascript">
    /*
     ******************************
     ****** PROCESOS  *************
     ******************************
     */


    function update_values(temp1, temp2, volts) {
        $("#display_temp1").html(temp1);
        $("#display_temp2").html(temp2);
        $("#display_volt").html(volts);
    }

    function process_msg(topic, message) {
        // ej: "10,11,12"
        if (topic == "values") {
            var msg = message.toString();
            var sp = msg.split(",");
            var temp1 = sp[0];
            var temp2 = sp[1];
            var volts = sp[2];
            update_values(temp1, temp2, volts);
        }
    }

    function process_led1() {
        if ($('#input_led1').is(":checked")) {
            console.log("Encendido");

            client.publish('led1', 'on', (error) => {
                console.log(error || 'Mensaje enviado!!!')
            })
        } else {
            console.log("Apagado");
            client.publish('led1', 'off', (error) => {
                console.log(error || 'Mensaje enviado!!!')
            })
        }
    }

    function process_led2() {
        if ($('#input_led2').is(":checked")) {
            console.log("Encendido");

            client.publish('led2', 'on', (error) => {
                console.log(error || 'Mensaje enviado!!!')
            })
        } else {
            console.log("Apagado");
            client.publish('led2', 'off', (error) => {
                console.log(error || 'Mensaje enviado!!!')
            })
        }
    }








    /*
     ******************************
     ****** CONEXION  *************
     ******************************
     */

    // connect options
    const options = {
        connectTimeout: 4000,

        // Authentication
        clientId: 'mqttjs_79561380f7',
        username: 'web_client',
        password: '121212',

        keepalive: 60,
        clean: true,
    }

    var connected = false;

    // WebSocket connect url
    const WebSocket_URL = 'wss://comuan.ga:8094/mqtt'


    const client = mqtt.connect(WebSocket_URL, options)


    client.on('connect', () => {
        console.log('Mqtt conectado por WS! Exito!')

        client.subscribe('values', {
            qos: 0
        }, (error) => {
            if (!error) {
                console.log('Suscripción exitosa!')
            } else {
                console.log('Suscripción fallida!')
            }
        })

        // publish(topic, payload, options/callback)
        //client.publish('fabrica', 'esto es un verdadero éxito', (error) => {
        //  console.log(error || 'Mensaje enviado!!!')
        //})
    })

    client.on('message', (topic, message) => {
        console.log('Mensaje recibido bajo tópico: ', topic, ' -> ', message.toString())
        process_msg(topic, message);
    })

    client.on('reconnect', (error) => {
        console.log('Error al reconectar', error)
    })

    client.on('error', (error) => {
        console.log('Error de conexión:', error)
    })
    </script>

    <!-- endbuild -->
</body>

</html>
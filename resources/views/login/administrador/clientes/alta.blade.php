<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cafeteria FRIENDS</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="plugins/kalendar/kalendar.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/scroll/nanoscroller.css">
<link href="plugins/morris/morris.css" rel="stylesheet" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color">CAFETERIA</span> FRIENDS</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
            <li class="dropdown"> <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>

            </li>
          </ul>
        </div>
      </div>

      <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
            <ul>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Tasks <span class="badge badge">0</span> </a>
                
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Mail <span class="badge badge color_1">0</span> </a>

              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> notification <span class="badge badge color_2">0</span> </a>
                <div class="notification_drop_down dropdown-menu">
                  <div class="top_pointer"></div>
                  <div class="box"> <a href="#"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a> </div>
                  <div class="box"> <a href="#"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                  <div class="box"> <a href="#"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Map</span> </a> </div>
                  <div class="box"> <a href="#"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a> </div>
                  <div class="box"> <a href="#"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tasks</span> </a> </div>
                  <div class="box"> <a href="#"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
       <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname">{{Session::get('sesionname')}}</span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>

            <li> <a href="{{URL::action('AdministradorController@CerrarSesion')}}"><i class="fa fa-power-off"></i><i class="fa fa-power-off"></i> Logout</a> </li>
          </ul>
        </div>
        
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\--><div class="left_nav">

      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="left_nav_slidebar">
        <ul>
          <li><a href="javascript:void(0);"><i class="fa fa-home"></i> INICIO <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="Index1"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Inicio</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> PRODUCTOS <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="Productos1"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
              <li> <a href="AltaProducto1"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Producto</b> </a> </li>
            </ul>
          </li>

          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> ALIMENTOS <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="Alimentos1"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
              <li> <a href="AltaAlimento1"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Alimento</b> </a> </li>
            </ul>
          </li>

          <li class="left_nav_active theme_border"> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> AVISOS <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="AvisoSistema"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
              <li> <a href="AltaAviso"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Aviso</b> </a> </li>
            </ul>
          </li>

          <li class="left_nav_active theme_border"> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> CLIENTES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="Clientes1"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
              <li> <a href="AltaCliente1"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Cliente</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> USUARIOS <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="Usuarios1"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
            </ul>
          </li>

          <li> <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> RESERVACIONES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="Reservacion"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>INICIO</h1>
          
        </div>
        <div class="pull-right">

        </div>
      </div>

      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="row">
          <div class="col-sm-12 col-sm-12">
             <div class="col-md-12">
                <div class="block-web">
                  <div class="header">
                    <h3 class="content-header">Alta Cliente</h3>
                  </div>
                  <div class="porlets-content">
                    <form class="form-horizontal group-border-dashed" action="{{route('alta_cliente1')}}" parsley-validate novalidate method="POST">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required placeholder="Escribir Nombre" 
                          name="nombre_cliente">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Apellido Paterno:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required placeholder="Escribir Apellido Paterno" 
                          name="ap_cliente">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Apellido Materno:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required placeholder="Escribir Apellido Materno" 
                          name="am_cliente">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Dirección:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" required placeholder="Escribir Dirección" 
                          name="direccion_cliente">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Fecha de Nacimiento:</label>
                        <div class="col-sm-6">
                          <input parsley-type="dateIso" type="text" class="form-control" required placeholder="YYYY-MM-DD" 
                          name="fnac_cliente">
                        </div>
                      </div><!--/form-group--> 

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Sexo:</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                              <input type="radio" value="Hombre" 
                              name="sexo_cliente">
                              <span class="custom-checkbox"></span>Hombre</label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="Mujer" name="sexo_cliente">
                              <span class="custom-checkbox"></span>Mujer</label>
                          </div>
                        </div>
                      </div><!--/form-group--> 

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Teléfono</label>
                        <div class="col-sm-6">
                          <input parsley-type="phone" type="text" class="form-control" required placeholder="(XXX) XXXX XXX" 
                          name="telefono_cliente">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Activo:</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                              <input type="radio" value="1" name="activo_cliente">
                              <span class="custom-checkbox"></span>Si</label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="0" name="activo_cliente">
                              <span class="custom-checkbox"></span>No</label>
                          </div>
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Enviar</button>
                          <button type="reset" class="btn btn-default">Cancelar</button>
                        </div>
                      </div><!--/form-group--> 
                    </form>
                  </div><!--/porlets-content--> 
                </div><!--/block-web--> 
              </div><!--/col-md-12--> 
          </div>

          </div>
        </div>
        
        
        <div class="row">
          <div class="col-md-12">

            <!--/block-web-->
          </div>
          <!--/col-md-12-->
        </div>
        <!--/row-->   
        
      </div>
      <!--\\\\\\\ container  end \\\\\\-->


    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal --> 

<div class="demo">
  <span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span>
  <form>
    <legend class="no-padding margin-bottom-10" style="color:#6e778c;">Veme de otra forma</legend>
    <section>
      <label>
        <input type="checkbox" class="checkbox style-0" id="smart-rigth-navigation" name="terms">
        <span>Vista a la Derecha</span>
      </label>
      <label>
        <input type="checkbox" class="checkbox style-0" id="smart-boxed-layout" name="terms">
        <span>Vista Cuadrada</span>
      </label>
      <span id="smart-bgimages" style="display: none;"></span>
    </section>

  <h6 class="margin-top-10 semi-bold margin-bottom-5">BackGround</h6>
    <section id="smart-styles">
      <a style="background-color:#23262F;" class="btn btn-block btn-xs txt-color-white margin-right-5" id="dark_theme" href="javascript:void(0);">
      <i id="skin-checked" class="fa fa-check fa-fw"></i> Tema Oscuro</a>

      <a style="background:#E35154;" class="btn btn-block btn-xs txt-color-white" id="red_thm" href="javascript:void(0);">Tema Rojo</a>

      <a style="background:#56A5DB" class="btn btn-xs btn-block txt-color-white margin-top-5" data-skinlogo="img/logo-pale.png" id="blue_thm" href="javascript:void(0);">Tema Azul</a>

      <a style="background:#F5E108" class="btn btn-xs btn-block txt-color-white margin-top-5" id="magento_thm" href="javascript:void(0);">Tema Amarillo</a>

      <a style="background:#FFFFFF" class="btn btn-xs btn-block txt-color-black margin-top-5" id="light_theme" href="javascript:void(0);">Tema Blanco(default)</a>
    </section>
  </form>
</div>


<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery.sparkline.js"></script>
<script src="js/sparkline-chart.js"></script>
<script src="js/graph.js"></script>
<script src="js/edit-graph.js"></script>
<script src="plugins/kalendar/kalendar.js" type="text/javascript"></script>
<script src="plugins/kalendar/edit-kalendar.js" type="text/javascript"></script>

<script src="plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="plugins/sparkline/jquery.customSelect.min.js" ></script> 
<script src="plugins/sparkline/sparkline-chart.js"></script> 
<script src="plugins/sparkline/easy-pie-chart.js"></script>
<script src="plugins/morris/morris.min.js" type="text/javascript"></script> 
<script src="plugins/morris/raphael-min.js" type="text/javascript"></script>  
<script src="plugins/morris/morris-script.js"></script> 

<script src="plugins/demo-slider/demo-slider.js"></script>
<script src="plugins/knob/jquery.knob.min.js"></script> 

<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="plugins/scroll/jquery.nanoscroller.js"></script>


</body>
</html>

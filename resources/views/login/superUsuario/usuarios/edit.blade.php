<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cafeteria FRIENDS</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/toggle-switch/toggles.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/checkbox/icheck.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/checkbox/minimal/blue.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/checkbox/minimal/green.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/checkbox/minimal/grey.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/checkbox/minimal/orange.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/checkbox/minimal/pink.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/checkbox/minimal/purple.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/dropzone/dropzone.css" rel="stylesheet')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-datepicker/css/datepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-timepicker/compiled/timepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-colorpicker/css/colorpicker.css')}}" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color">CAFETERIA</span> FRIENDS</div>
      <div class="small_logo" style="display:none"><img src="{{asset('images/s-logo.png')}}" width="50" height="47" alt="s-logo" /> <img src="{{asset('images/r-logo.png')}}" width="122" height="20" alt="r-logo" /></div>
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

            <li> <a href="{{URL::action('SuperUsuarioController@CerrarSesion')}}"><i class="fa fa-power-off"></i> Logout</a> </li>
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
          <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> INICIO <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="/Cafeteria/public/"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>INICIO</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> PRODUCTOS <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
              <li> <a href="AltaProducto"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Producto</b> </a> </li>
            </ul>
          </li>

          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> ALIMENTOS <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
              <li> <a href="AltaAlimento"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Alimento</b> </a> </li>
            </ul>
          </li>

          <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> CLIENTES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
              <li> <a href="AltaCliente"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Cliente</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> USUARIOS <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Detalles</b> </a> </li>
              <li> <a href="AltaUsuario"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Nuevo Usuario</b> </a> </li>

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
                    <h3 class="content-header">Modificar Usuario</h3>
                  </div>
                  <div class="porlets-content">
                    <form class="form-horizontal group-border-dashed" action="{{route('modificar_usuario')}}" parsley-validate novalidate method="POST">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                          <input type="hidden"
                                  class="form-control"
                                  required
                                  name="id_user"
                                  value="{{$usuarios->id_user}}">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-6">
                          <input type="text"
                                  class="form-control"
                                  required placeholder="Nombre del Usuario"
                                  name="nombre_user"
                                  value="{{$usuarios->nombre_user}}">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Apellido Paterno:</label>
                        <div class="col-sm-6">
                          <input type="text"
                                  class="form-control"
                                  required placeholder="Apellido Paterno"
                                  name="ap_user"
                                  value="{{$usuarios->ap_user}}">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Apellido Materno:</label>
                        <div class="col-sm-6">
                          <input type="text"
                                  class="form-control" 
                                  required placeholder="Apellido Materno" 
                                  name="am_user"
                                  value="{{$usuarios->am_user}}">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Dirección:</label>
                        <div class="col-sm-6">
                          <input type="text"
                                  class="form-control"
                                  required placeholder="Direccion del Usuario" 
                                  name="direccion_user"
                                  value="{{$usuarios->direccion_user}}">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Fecha de Nacimiento:</label>
                        <div class="col-sm-6">
                          <input parsley-type="dateIso"
                                  type="text"
                                  class="form-control" 
                                  required placeholder="YYYY-MM-DD" 
                                  name="fnac_user"
                                  value="{{$usuarios->fnac_user}}">
                        </div>
                      </div><!--/form-group--> 

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Genero:</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                              <input type="radio"
                                      value="Hombre"
                                      name="sexo_user"
                                      value="{{$usuarios->sexo_user}}">
                              <span class="custom-checkbox"></span>Hombre</label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio"
                                      value="Mujer"
                                      name="sexo_user"
                                      required="on"
                                      value="{{$usuarios->sexo_user}}">
                              <span class="custom-checkbox"></span>Mujer</label>
                          </div>
                        </div>
                      </div><!--/form-group--> 

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Teléfono:</label>
                        <div class="col-sm-6">
                          <input parsley-type="phone"
                                  type="text"
                                  class="form-control" 
                                  required placeholder="(XXX) XXXX XXX" 
                                  name="telefono_user"
                                  value="{{$usuarios->telefono_user}}">
                        </div>
                      </div><!--/form-group-->

                       <div class="form-group">
                        <label class="col-sm-3 control-label">Tipo de Usuario:</label>
                        <div class="col-sm-6">
                          <div class="radio">
                            <label>
                              <input type="radio" value="SuperUsuario" name="tipo_user" value="{{$usuarios->tipo_user}}">
                              <span class="custom-checkbox"></span>Super Usuario</label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="Administrador" name="tipo_user" value="{{$usuarios->tipo_user}}">
                              <span class="custom-checkbox"></span>Administrador</label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" value="UsuarioComun" name="tipo_user" required="on" value="{{$usuarios->tipo_user}}">
                              <span class="custom-checkbox"></span>Usuario Común</label>
                          </div>
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Correo:</label>
                        <div class="col-sm-6">
                          <input type="email" class="form-control" required parsley-type="email" placeholder="Correo Electronico" 
                          name="email_user" value="{{$usuarios->email_user}}">
                        </div>
                      </div><!--/form-group--> 

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Contraseña:</label>
                        <div class="col-sm-3">
                          <input type="password" id="pass2" class="form-control" required placeholder="Contraseña" 
                          name="password_user" value="{{$usuarios->password_user}}">
                        </div>
                        <div class="col-sm-3">
                          <input type="password" class="form-control" required parsley-equalto="#pass2" placeholder="Confirma Contraseña" value="{{$usuarios->password_user}}">
                        </div>
                      </div><!--/form-group-->

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Enviar</button>
                          <button class="btn btn-default">Cancelar</button>
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
<script type="text/javascript"  src="plugins/toggle-switch/toggles.min.js"></script> 
<script src="plugins/checkbox/zepto.js"></script>
<script src="plugins/checkbox/icheck.js"></script>
<script src="js/icheck-init.js"></script>
<script type="text/javascript" src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> 
<script type="text/javascript" src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script type="text/javascript" src="plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript" src="js/form-components.js"></script> 
<script type="text/javascript"  src="plugins/input-mask/jquery.inputmask.min.js"></script> 
<script type="text/javascript"  src="plugins/input-mask/demo-mask.js"></script> 
<script type="text/javascript"  src="plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
<script type="text/javascript"  src="plugins/dropzone/dropzone.min.js"></script> 
<script type="text/javascript" src="plugins/ckeditor/ckeditor.js"></script>



<script src="plugins/validation/parsley.min.js"></script>

<script>


/*==Porlets Actions==*/
    $('.minimize').click(function(e){
      var h = $(this).parents(".header");
      var c = h.next('.porlets-content');
      var p = h.parent();
      
      c.slideToggle();
      
      p.toggleClass('closed');
      
      e.preventDefault();
    });
    
    $('.refresh').click(function(e){
      var h = $(this).parents(".header");
      var p = h.parent();
      var loading = $('&lt;div class="loading"&gt;&lt;i class="fa fa-refresh fa-spin"&gt;&lt;/i&gt;&lt;/div&gt;');
      
      loading.appendTo(p);
      loading.fadeIn();
      setTimeout(function() {
        loading.fadeOut();
      }, 1000);
      
      e.preventDefault();
    });
    
    $('.close-down').click(function(e){
      var h = $(this).parents(".header");
      var p = h.parent();
      
      p.fadeOut(function(){
        $(this).remove();
      });
      e.preventDefault();
    });

</script>

<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>

</body>
</html>

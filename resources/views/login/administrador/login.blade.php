<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema - Cafeteria FRIENDS</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="plugins/toggle-switch/toggles.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/icheck.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/blue.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/green.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/grey.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/orange.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/pink.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/purple.css" rel="stylesheet" type="text/css" />
<link href="plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
<link href="plugins/dropzone/dropzone.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-colorpicker/css/colorpicker.css" />

    <script type="text/javascript" src="{{asset('js/jquery-3.1.1.js')}}"></script>

    <style type="text/css">
      #bg{
        background: url('images/fondo.jpg');
        width: 100%;
        height: 100vh;
        background-size: 100%;
        background-attachment: fixed;
        background-position: left top;
        background-repeat: repeat-x;
      }

      a{
        text-decoration: none;
        color: black;
      }

      .seccion1{
        margin:auto;
        padding: 155px;
        position: center;
      }

    </style>

</head>
<body>
  
  <section class="container-fluid" id="bg">
      <section class="seccion1">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> </div>
              <h3 class="content-header">Login</h3>
            </div>
            <div class="porlets-content">

              <!--Inicia el FORM-->
              <form class="form-horizontal" role="form"  parsley-validate novalidate method="POST" action="{{route('LoginSistema1')}}">
                {{csrf_field()}}

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre de usuario:</label>
                  <div class="col-sm-7">
                    <input type="text" name="nombre_user" parsley-trigger="change" required placeholder="Nombre de usuario" class="form-control">
                  </div>
                </div><!--/form-group--> 

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email:</label>
                  <div class="col-sm-7">
                    <input type="email" required parsley-type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email_user">
                  </div>
                </div><!--/form-group--> 

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Password:</label>
                  <div class="col-sm-7">
                    <input type="password" required class="form-control" id="inputPassword3" placeholder="Password" name="password_user">
                  </div>
                </div><!--/form-group--> 
                
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-7">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember_the_fallen">
                        Remember me </label>
                    </div>
                  </div>
                </div><!--/form-group-->

                <div class="form-group">
                  <div class="col-sm-offset-7 col-sm-7">
                    <div class="checkbox">
                      <label><a href="{{URL::action('AdministradorController@IndexRecuperar')}}">Olvide mi contraseña</a></label>
                    </div>
                  </div>
                </div><!--/form-group-->  

                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    <br>
                    <button type="reset" class="btn btn-default btn-block">Cancelar</button>
                  </div>
                </div><!--/form-group--> 

              </form>
               <!--Finaliza el FORM-->


            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6--> 


    </section>
  </section>

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
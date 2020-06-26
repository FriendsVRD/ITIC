<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Coffee House by Friends</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="freehtml5.co" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FreeHTML5.co
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="http://www.mycoffefriends.com/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="http://www.mycoffefriends.com/css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="http://www.mycoffefriends.com/css/bootstrap.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="http://www.mycoffefriends.com/css/flexslider.css">
  <!-- Date Time -->
  <link rel="stylesheet" href="http://www.mycoffefriends.com/css/bootstrap-datetimepicker.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="http://www.mycoffefriends.com/css/style.css">

  <!-- Modernizr JS -->
  <script src="http://www.mycoffefriends.com/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    
  <div class="fh5co-loader"></div>
  
  <div id="page">
  <nav class="fh5co-nav" role="navigation">
    <!-- <div class="top-menu"> -->
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center logo-wrap">
            <div id="fh5co-logo"><a href="http://www.mycoffefriends.com/index.html">Reservación<span>.</span></a></div>
          </div>
          <div class="col-xs-12 text-center menu-1 menu-wrap">
            <ul>
              <li><a href="http://www.mycoffefriends.com">Inicio</a></li>
              <li><a href="http://www.mycoffefriends.com/about.html">Nosotros</a></li>
              <li><a href="http://www.mycoffefriends.com/gallery.html">Socursales</a></li>
              <li><a href="http://www.mycoffefriends.com/Cafeteria/public/Promociones">Promoción</a> </li>
              <li><a href="http://www.mycoffefriends.com/Cafeteria/public/Comentarios">Contactanos</a></li>
              <li><a href="http://www.mycoffefriends.com/Cafeteria/public">Ingresar</a></li>
            </ul>
          </div>
        </div>
        
      </div>
    <!-- </div> -->
  </nav>

  <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="display-t js-fullheight">
            <div class="display-tc js-fullheight animate-box" data-stellar-background-ratio="0.1">
              <img class="fh5co-cover" src="images/logopng.png" width=auto; height=300px>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  
  <div id="fh5co-reservation-form" class="fh5co-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 fh5co-heading animate-box">
          <h2>Reserva todo el dia !</h2>
        </div>
        
        <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
          <form action="{{route('alta_reservacion')}}" id="form-wrap" method="POST">
            {{csrf_field()}}

            <div class="row form-group">
              <div class="col-md-12">
                <label for="nombre_persona">Nombre:</label>
                <input type="text" class="form-control" name="nombre_persona">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="ap_persona">Apellido Paterno:</label>
                <input type="text" class="form-control" name="ap_persona">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="am_persona">Apellido Materno:</label>
                <input type="text" class="form-control" name="am_persona">
              </div>
            </div>
            

            <div class="row form-group">
              <div class="col-md-12">
                <label for="telefono_persona">Telefono:</label>
                <input type="text" class="form-control" name="telefono_persona">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="email_persona">Email:</label>
                <input type="email" class="form-control" name="email_persona">
              </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12">
                <label for="personas">Cuantas personas</label>
                <select name="personas" id="many" class="form-control custom_select">
                  <option selected="on" disabled="on">-Selecciona uno-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="+4">+4</option>
                </select>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="dia_reservacion">Día de la reservación</label>
                <input type="text" name="dia_reservacion" id="taskdatetime" class="form-control"/>
              </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12">
                <label for="nota">Nota:</label>
                <textarea class="form-control" name="nota"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-outline btn-lg">Enviar</button>
              </div>
            </div>

          </form>

        </div>
        
        
      </div>
    </div>
  </div>

  <footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
    <div class="container">
      <div class="row row-pb-md">
        <div class="col-md-4 fh5co-widget">
          <h4></h4>
          <ul class="fh5co-footer-links">
            <li> La Placita de Cantabria dentro del Fraccionamiento Bosques de Cantabria </li>
            <li> Calle Huizache, manzana 58 lote 43. </li>
            <li> 50200 San Nicolás Tolentino, Méx.</li>
            <li> 55 8806 5398</li>
            <li> mycoffeefriendstlc@gmail.com</li>
          </ul>
        </div>

      </div>

      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p>
            <ul class="fh5co-social-icons">
              <li><a href="https://www.facebook.com/mycoffeefriends/"><i class="icon-facebook2"></i>My Coffee House By Friends</a></li>
            </ul>
          </p>
        </div>
      </div>
    </div>
  </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="http://www.mycoffefriends.com/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="http://www.mycoffefriends.com/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="http://www.mycoffefriends.com/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="http://www.mycoffefriends.com/js/jquery.waypoints.min.js"></script>
  <!-- Waypoints -->
  <script src="http://www.mycoffefriends.com/js/jquery.stellar.min.js"></script>
  <!-- Flexslider -->
  <script src="http://www.mycoffefriends.com/js/jquery.flexslider-min.js"></script>

  <!-- Date Time -->
  <script src="http://www.mycoffefriends.com/js/moment.min.js"></script>
  <script src="http://www.mycoffefriends.com/js/bootstrap-datetimepicker.js"></script>
  

  <!-- Main -->
  <script src="http://www.mycoffefriends.com/js/main.js"></script>

  </body>
</html>


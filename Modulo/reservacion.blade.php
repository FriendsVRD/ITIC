<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div>
		<img src="{{asset('images/logo-PDF.jpg')}}" width="100%">
	</div>
		<div class="title">
			<h1>Tu Reservacion.</h1>
			<br>
			<h2>Querido comenzal.</h2>
		</div>

	@foreach ($personas as $persona)
            <div class="row">
              <div class="col-md-12">

                <div class="container">
                  <div class="card" style="width: 250px;">
                    
                    <div class="card-body">
                      <h5 class="card-title">{{$persona->nombre_persona}} {{$persona->ap_persona}} {{$persona->am_persona}}</h5>

                      <br>

                      <div class="card">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><strong>Tu teléfono:</strong> {{$persona->telefono_persona}}</li>
                          <li class="list-group-item"><strong>Número de personas:</strong> {{$persona->personas}}</li>
                          <li class="list-group-item"><strong>Día de reservación:</strong> {{$persona->dia_reservacion}}</li>
                        </ul>
                      </div>
                      <br>

                    </div>
                  </div>
                </div>
                <!--/block-web-->
              </div>
              <!--/col-md-12-->
            </div>
            <!--/row-->
    @endforeach

</body>
</html>
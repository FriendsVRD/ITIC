<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div class="container">

    <h1>Hola {{$datos['nombre_user']}}</h1>
    <div class="texto">
      <p>
      Querido adminstrador de este sitio web, sabemos que no recuerda su contraseña, así que aquí le proporcionamos una contraseña provicional para que pueda ingresar al sistema.
      </p>

      <p>
        Su nueva contraseña es: <strong class="pws">{{$datos['password_user']}}</strong> 
        <br>
        <p class="nota">Todas las contraseñas enviadas son <strong>letras minusculas</strong></p>
      </p>

    </div>
  </div>
</body>
</html>
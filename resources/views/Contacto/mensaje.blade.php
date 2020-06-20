<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
		Usuario: <strong>{{$datos['nombre']}}.</strong>
		Correro electronico: {{$datos['email']}}.
	</div>
	<div>
		<strong>Duda o Comentario</strong>
		<br>
		<p>{{$datos['comentario']}}</p>
	</div>

</body>
</html>
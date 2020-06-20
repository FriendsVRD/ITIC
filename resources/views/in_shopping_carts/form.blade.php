{!! Form::open(['url' =>'/in_shopping_carts','method'=>'POST', 'class'=>'inline-block' ])!!}
<input type="hidden" name="id_producto" value="{{$producto->id_producto}}">
<input type="submit" value="Agregar Carrito" class="btn btn-info">
{!! Form::close() !!}
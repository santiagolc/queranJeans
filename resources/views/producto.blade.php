@extends('plantilla')

@section("titulo")

QueranJeans - EDITAR PRODUCTO

@endsection

@section("principal")

<form action="/producto/update/{{$product->id}}" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{csrf_token() }}">
    
    <h1>Modifica aqui tu producto:</h1><br><br>
    
    <label for="name">Nombre del Producto:</label><br>
    <input type="text" name="name" value="{{$product->name}}"><br><br>
   
    <label for="price">Precio (numero):</label><br>
    <input type="text" name="price" value="{{$product->price}}"><br><br>
   
    <label for="offer">Oferta: (0/1)</label><br>
    <input type="text" name="offer" value="{{$product->offer}}"><br><br>

    <label for="sale">Descuento (0-100):</label><br>
    <input type="text" name="sale" value="{{$product->sale}}"><br><br>

    <label for="category">Categoria:</label><br>
    <input type="text" name="category" value="{{$product->category}}"><br><br>

    <label for="avatar">Imagen</label><br>
    <input id="avatar" type="file" class="form-control form-control-sm offset-6" name="avatar"><br>
  
    <input class="boton1" type="submit" name="" id="" class="btn-sm btn-primary">

</form>

@endsection

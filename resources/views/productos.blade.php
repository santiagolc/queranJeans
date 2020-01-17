@extends('plantilla')

@section("titulo")

QueranJeans - HOME

@endsection

@section("principal")

<form action="/productos/store" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{csrf_token() }}">
    
    <h1>Carga aqui tu producto:</h1><br><br>
    
    <label for="name">Nombre del Producto:</label><br>
    <input type="text" name="name" value=""><br><br>
   
    <label for="price">Precio (numero):</label><br>
    <input type="text" name="price" value=""><br><br>
   
    <label for="offer">Oferta: (0/1)</label><br>
    <input type="text" name="offer" value=""><br><br>

    <label for="sale">Descuento (0-100):</label><br>
    <input type="text" name="sale" value=""><br><br>

    <label for="category">Categoria (hombre/mujer):</label><br>
    <input type="text" name="category" value=""><br><br>

    <label for="avatar">Imagen</label><br>
    <input id="avatar" type="file" class="form-control form-control-sm offset-6" name="avatar" required><br>
  
    <input class="boton1" type="submit" name="" id="" class="btn-sm btn-primary">

</form>

@endsection


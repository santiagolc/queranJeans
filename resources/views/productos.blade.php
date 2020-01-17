@extends('plantilla')

@section("titulo")

QueranJeans - HOME

@endsection

@section("principal")

<form action="/productos/store" method="POST" enctype="multipart/form-data">
   
<input type="hidden" name="_token" value="{{csrf_token() }}">
    
    <label for="">Carga aqui tu producto:</label><br><br>
    
    <label for="name">Producto:</label><br>
    <input type="text" name="name" value="nombre del producto"><br><br>
   
    <label for="price">Precio:</label><br>
    <input type="text" name="price" value="precio"><br><br>
   
    <label for="offer">Oferta:</label><br>
    <input type="text" name="offer" value="tiene oferta? 0/1"><br><br>

    <label for="sale">Descuento:</label><br>
    <input type="text" name="sale" value="descuento"><br><br>

    <label for="category">Categoria:</label><br>
    <input type="text" name="category" value="hombre/mujer"><br><br>

    <label for="image">Imagen</label><br>
    <input class="boton1" type="file" name="image"><br>
  
    <input class="boton1" type="submit" name="" id="" class="btn-sm btn-primary">

</form>

@stop
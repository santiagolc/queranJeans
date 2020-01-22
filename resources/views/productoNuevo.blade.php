@extends('plantilla')

@section("titulo")

QueranJeans - AGREGAR PRODUCTO

@endsection

@section("principal")

<form action="/producto/nuevo/store" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{csrf_token() }}">
    
    <h1>Agrega aqui tu producto:</h1><br><br>
    
    <label for="name">Nombre del Producto:</label><br>
    <input type="text" name="name" value="">
    <span style="color:red; font-size:16px;"> {{$errors->first('name')}} </span><br><br>
   
    <label for="price">Precio: (numero)</label><br>
    <input type="text" name="price" value="">
    <span style="color:red; font-size:16px;"> {{$errors->first('price')}} </span><br><br>

   
    <label for="offer">Oferta: (si/no)</label><br>
    <input type="text" name="offer" value="">
    <span style="color:red; font-size:16px;"> {{$errors->first('offer')}} </span><br><br>


    <label for="sale">Descuento: (0-100)</label><br>
    <input type="text" name="sale" value="">
    <span style="color:red; font-size:16px;"> {{$errors->first('sale')}} </span><br><br>


    <label for="category">Categoria: (hombre/mujer)</label><br>
    <input type="text" name="category" value="">
    <span style="color:red; font-size:16px;"> {{$errors->first('category')}} </span><br><br>


    <label for="avatar">Imagen</label><br>
    <input id="avatar" type="file" class="form-control form-control-sm offset-6" name="avatar"><br>
  
    <input class="boton1" type="submit" name="" id="" class="btn-sm btn-primary">

</form>

@endsection
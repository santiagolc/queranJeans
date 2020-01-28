@extends('plantilla')

@section("titulo")

QueranJeans - AGREGAR PRODUCTO

@endsection

@section("principal")

<form class="formProductoNuevo" action="/producto/nuevo/store" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{csrf_token() }}">
    
    <h1>Agrega aqui tu producto:</h1><br>
    
    <label for="name">Nombre del Producto:</label><br>
    <input type="text" name="name" value="">
    <p style="color:red; font-size:16px;"> {{$errors->first('name')}} </p><br>
   
    <label for="price">Precio: (numero)</label><br>
    <input type="text" name="price" value="">
    <p style="color:red; font-size:16px;"> {{$errors->first('price')}} </p><br>

   
    <label for="offer">Oferta:</label><br>
    <input type="radio" name="offer" value="si">SI
    <input type="radio" name="offer" value="no">NO
    <p style="color:red; font-size:16px;"> {{$errors->first('offer')}} </p><br>


    <label for="sale">Descuento: (0-100)</label><br>
    <input type="text" name="sale" value="">
    <p style="color:red; font-size:16px;"> {{$errors->first('sale')}} </p><br>


    <label for="category">Categoria: (hombre/mujer)</label><br>
    <input type="text" name="category" value="">
    <p style="color:red; font-size:16px;"> {{$errors->first('category')}} </p><br>


    <label for="avatar">Imagen</label><br>
    <input id="avatar" type="file" class="form-control form-control-sm offset-6" name="avatar"><br>
  
    <input class="boton1" type="submit" name="" id="" class="btn-sm btn-primary">

</form>

@endsection
@extends('plantilla')

@section("titulo")

QueranJeans - EDITAR PRODUCTO

@endsection

@section("principal")

<form action="/producto/update/{{$product->id}}" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{csrf_token() }}">
    
    <h1>Modifica aqui tu producto:</h1><br>
    
    <label for="name">Nombre del Producto:</label><br>
    <input type="text" name="name" value="{{$product->name}}">
    <span style="color:red; font-size:16px;"> {{$errors->first('name')}} </span><br><br>

   
    <label for="price">Precio (numero):</label><br>
    <input type="text" name="price" value="{{$product->price}}">
    <span style="color:red; font-size:16px;"> {{$errors->first('price')}} </span><br><br>

   
    <label for="offer">Oferta: (si/no)</label><br>
    <input type="text" name="offer" value="{{$product->offer}}">
    <span style="color:red; font-size:16px;"> {{$errors->first('offer')}} </span><br><br>


    <label for="sale">Descuento (0-100):</label><br>
    <input type="text" name="sale" value="{{$product->sale}}">
    <span style="color:red; font-size:16px;"> {{$errors->first('sale')}} </span><br><br>


    <label for="category">Categoria:</label><br>
    <input type="text" name="category" value="{{$product->category}}">
    <span style="color:red; font-size:16px;"> {{$errors->first('category')}} </span><br><br>


    <label for="avatar">Imagen</label><br>
    <input id="avatar" type="file" class="form-control form-control-sm offset-6" name="avatar"><br>
  
    <input class="boton1" type="submit" name="" id="" class="btn-sm btn-primary">

</form>

@endsection

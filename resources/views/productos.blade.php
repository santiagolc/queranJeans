@extends('plantilla')

@section("titulo")

QueranJeans - AGREGAR PRODUCTOS

@endsection

@section("principal")

<div class="listaProductos">
    
    <button class="agregarProducto"><a href="/producto/nuevo" style="text-decoration: none; color: black;">Agregar un Producto</a></button>
    
    <ul>
      
        @forelse($products as $product) 
        <li>
            <div class="productoEnCarro">
            <img src="{{$product->image}}" alt="" style="width:100px; height:100px;">
            <span>{{$product->name}}</span><span>Sexo: {{$product->category}}</span>
            <span>${{$product->price}}</span>
            <span>Oferta: {{$product->offer}}</span>
            <span>Desc: %{{$product->sale}}</span>


           <button><i class="large material-icons">update</i><a href="/producto/{{$product->id}}" style="text-decoration: none; color: black;">Actualizar</a></button>
          
            <form class="formCarrito" action="/producto/delete/{{$product->id}}" method="POST">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="product_id">
                <button type="submit"><i class="large material-icons">delete</i>Eliminar</button>
            </form>
            </div>
        </li>
        @empty
        <h3 style="text-align: center;">No hay productos en la base de datos</h3>
        @endforelse
        

    </ul>
</div>

@endsection
@extends('plantilla')

@section("titulo")

QueranJeans - CARRITO

@endsection

@section("principal")


<div class="listaProductos">
    <ul>
        @forelse($carritoActivo->products as $product) 
        <li>
            <div class="productoEnCarro">
            <img src="{{$product->image}}" alt="" style="width:100px; height:100px;">
            <span><a href="/{{$product->category}}">{{$product->name}} {{$product->category}} </a></span>
            <span>${{$product->price}}</span>
           
            <form class="formCarrito" action="/eliminar" method="post">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="product_id">
                <button type="submit"><i class="large material-icons">delete</i>Eliminar</button>
            </form>
            </div>
        </li>
        @empty
        <span>Carrito Vacio</span>
        @endforelse
<<<<<<< HEAD
        <form action="/finalizarCompra" method="post">
=======

        <form class="finalizarCompra" action="/finalizarCompra">
>>>>>>> 1d67174efb9fee149ed483dc59a3ff8ca0b3c878
            @csrf
            <button type="submit">Finalizar Compra</button>
        </form>

    </ul>
</div>


@stop
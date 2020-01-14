@extends('plantilla')

@section("titulo")

QueranJeans - CARRITO

@endsection

@section("principal")


<div class="cartShow" style="margin-top:200px;">
    <ul>
        @forelse($carritoActivo->products as $product) 
        <li>
            <span>{{$product->name}}</span>
            <span>${{$product->price}}</span>
            <img src="{{$product->image}}" alt="" style="width:100px; height:100px;">
            <form action="/eliminar" method="post">
            @csrf
            <input type="hidden" value="{{$product->id}}" name="product_id">
           <button type="submit">Eliminar Producto</button>
        </form>
        </li>
        @empty
        <span>Carrito Vacio</span>
        @endforelse
        <form action="/finalizarCompra">
            @csrf
           <button type="submit">Finalizar Compra</button>
        </form>
    </ul>
</div>


@stop
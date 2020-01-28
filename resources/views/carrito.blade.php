@extends('plantilla')

@section("titulo")

QueranJeans - CARRITO

@endsection

@section("principal")


<div class="contenedorCarrito">
    <section class="carrito">
       
            @php
                $total = 0;
            @endphp

            @if(!empty($carritoActivo->products->count()))
                <h2 style="text-align: center;">Numero de Orden de Compra: #{{$cartId}}</h2>
            @endif

            @forelse($result as $product) 
          
            <article class="productoCarrito">
                <img src="{{$product->image}}" alt="">
                <span class="nombreProducto" ><a href="/{{$product->category}}">{{$product->name}} {{$product->category}}</a></span>
                <span>${{$product->price}}</span>
                <span class="spanCantidad">{{$product->quantity}}</span>

                <form class="formCarrito" action="/eliminar" method="post">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="product_id">
                    <button class="eliminarMobile" type="submit"><i class="large material-icons">delete</i></button>
                    <button class="eliminarWeb" type="submit"><i class="large material-icons">delete</i>Eliminar</button>
                </form>
            </article>
           
            @php
                $total += $product->price * $product->quantity;
            @endphp

            @empty
                <h3 style="text-align: center;">Sin productos en el Carrito</h3>
            @endforelse
            <h4 class="totalCarrito" style="text-align: center; padding: 9px;">Total: ${{$total}}</h4>

    </section>
    <form class="botonFinalizar" action="/finalizarcompra" method="post">
        @csrf
        @if(empty($carritoActivo->products->count()))
            <button type="submit" disabled>Finalizar Compra</button>
        @else 
            <button class="boton1" type="submit">Finalizar Compra</button> 
        @endif
    </form>
</div>
@stop
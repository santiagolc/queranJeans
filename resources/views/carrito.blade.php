@extends('plantilla')

@section("titulo")

QueranJeans - CARRITO

@endsection

@section("principal")


<div class="listaProductos">
    <ul>
        @php
            $total = 0;
        @endphp
        @forelse($result as $product) 
        
        <li>
            <div class="productoEnCarro">
            <img src="{{$product->image}}" alt="" style="width:100px; height:100px; border: 2px solid black; border-radius:10px;">
            <span ><a href="/{{$product->category}}">{{$product->name}} {{$product->category}} </a></span>
            <span  >${{$product->price}}</span>
            <span style="background-color: white; color: red; padding: 5px; border-radius: 9px;">Cantidad: {{$product->quantity}}</span>
           
            <form class="formCarrito" action="/eliminar" method="post">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="product_id">
                <button type="submit"><i class="large material-icons">delete</i>Eliminar</button>
            </form>
            </div>
        </li>
        @php
            $total += $product->price * $product->quantity;
        @endphp
        @empty
        <h3 style="text-align: center;">Sin productos en el Carrito</h3>
        @endforelse
        <h3 style="text-align: center;">Total: ${{$total}}</h3><br>
        <form class="formCarrito" action="/finalizarcompra" method="post">
            @csrf
            @php
            if(empty($carritoActivo->products->count())){
               echo '<button type="submit" disabled>Finalizar Compra</button>';
              
               
            } else {
                echo '<button class="boton1" type="submit">Finalizar Compra</button>';  
                
            }
            @endphp
        </form>
    </ul>
</div>


@stop